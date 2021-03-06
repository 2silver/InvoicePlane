<script type="text/javascript">
    $(function()
    {
        $('.datepicker').datepicker( {autoclose: true, format: '<?php echo date_format_datepicker(); ?>'} );

        // Display the create quote modal
        $('#modal_create_recurring').modal('show');

        get_recur_start_date();

        $('#recur_frequency').change(function()
        {
            get_recur_start_date();
        });

        // Creates the invoice
        $('#create_recurring_confirm').click(function()
        {
            $.post("<?php echo site_url('invoices/ajax/create_recurring'); ?>", {
                    invoice_id: <?php echo $invoice_id; ?>,
                    recur_start_date: $('#recur_start_date').val(),
                    recur_end_date: $('#recur_end_date').val(),
                    recur_frequency: $('#recur_frequency').val()
                },
                function(data) {
                    var response = JSON.parse(data);
                    if (response.success == '1')
                    {
                        window.location = "<?php echo site_url('invoices/view'); ?>/<?php echo $invoice_id; ?>";
                    }
                    else
                    {
                        // The validation was not successful
                        $('.control-group').removeClass('has-error');
                        for (var key in response.validation_errors) {
                            $('#' + key).parent().parent().addClass('has-error');
                        }
                    }
                });
        });

        function get_recur_start_date()
        {
            $.post("<?php echo site_url('invoices/ajax/get_recur_start_date'); ?>", {
                    invoice_date: $('#invoice_date_created').val(),
                    recur_frequency: $('#recur_frequency').val()
                },
                function(data) {
                    $('#recur_start_date').val(data);
                });
        }
    });

</script>

<div id="modal_create_recurring" class="modal col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2"
     role="dialog" aria-labelledby="modal_create_recurring" aria-hidden="true">
    <form class="modal-content">
        <div class="modal-header">
            <a data-dismiss="modal" class="close">x</a>
            <h3><?php echo lang('create_recurring'); ?></h3>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label><?php echo lang('every'); ?>: </label>
                <div class="controls">
                    <select name="recur_frequency" id="recur_frequency" class="form-control"
                            style="width: 150px;">
                        <?php foreach ($recur_frequencies as $key=>$lang) { ?>
                            <option value="<?php echo $key; ?>" <?php if ($key == '1M') { ?>selected="selected"<?php } ?>><?php echo lang($lang); ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group has-feedback">
                <label><?php echo lang('start_date'); ?>: </label>

                <div class="date datepicker">
                    <input size="16" type="text" name="recur_start_date"
                           id="recur_start_date"
                           class="form-control datepicker" readonly="readonly">
                    <span class="form-control-feedback">
                        <span class="fa fa-calendar "></span>
                    </span>
                </div>
            </div>

            <div class="form-group has-feedback">
                <label><?php echo lang('end_date'); ?> (<?php echo lang('optional'); ?>): </label>

                <div class="date datepicker">
                    <input size="16" type="text" name="recur_end_date"
                           id="recur_end_date"
                           class="form-control datepicker" readonly="readonly">
                    <span class="form-control-feedback">
                        <span class="fa fa-calendar "></span>
                    </span>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <div class="btn-group">
                <button class="btn btn-danger" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i> <?php echo lang('cancel'); ?>
                </button>
                <button class="btn btn-success" id="create_recurring_confirm" type="button">
                    <i class="fa fa-check"></i> <?php echo lang('submit'); ?>
                </button>
            </div>
        </div>

    </form>

</div>