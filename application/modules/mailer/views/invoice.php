<script type="text/javascript">
    $(function() {

        $('#email_template').change(function() {

            email_template_id = $('#email_template').val();

            if (email_template_id != '') {

                $.post("<?php echo site_url('email_templates/ajax/get_content'); ?>", {
                    email_template_id: $('#email_template').val()
                }, function(data) {

                    $('#body').val(data);

                });
            }
        });

    });
</script>

<form method="post" class="form-horizontal">

    <div class="headerbar">
        <h1><?php echo lang('email_invoice'); ?></h1>

        <div class="pull-right btn-group">
            <button class="btn btn-sm btn-primary" name="btn_send" value="1">
                <i class="fa fa-send"></i>
                <?php echo lang('send'); ?>
            </button>
            <button class="btn btn-sm btn-danger" name="btn_cancel" value="1">
                <i class="fa fa-times"></i>
                <?php echo lang('cancel'); ?>
            </button>
        </div>
    </div>

    <div class="content">

        <?php $this->layout->load_view('layout/alerts'); ?>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="from_name" class="control-label"><?php echo lang('from_name'); ?>: </label>
            </div>
            <div class="col-xs-12 col-sm-6">
                <input type="text" name="from_name" id="from_name" class="form-control"
                       value="<?php echo $invoice->user_name; ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="from_email" class="control-label"><?php echo lang('from_email'); ?>: </label>
            </div>
            <div class="col-xs-12 col-sm-6">
                <input type="text" name="from_email" id="from_email" class="form-control"
                       value="<?php echo $invoice->user_email; ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="to_email" class="control-label"><?php echo lang('to_email'); ?>: </label>
            </div>
            <div class="col-xs-12 col-sm-6">
                <input type="text" name="to_email" id="to_email" class="form-control"
                       value="<?php echo $invoice->client_email; ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="to_cc" class="control-label"><?php echo lang('cc'); ?>: </label>
            </div>
            <div class="col-xs-12 col-sm-6">
                <input type="text" name="to_cc" id="to_cc" value="" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="to_bcc" class="control-label"><?php echo lang('bcc'); ?>: </label>
            </div>
            <div class="col-xs-12 col-sm-6">
                <input type="text" name="to_bcc" id="to_bcc" value="" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="subject" class="control-label"><?php echo lang('subject'); ?>: </label>
            </div>
            <div class="col-xs-12 col-sm-6">
                <input type="text" name="subject" id="subject" class="form-control"
                       value="<?php echo lang('invoice') . ' #' . $invoice->invoice_number; ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="invoice_template" class="control-label">
                    <?php echo lang('invoice_template'); ?>:
                </label>
            </div>
            <div class="col-xs-12 col-sm-6">
                <select name="invoice_template" class="form-control">
                    <option value=""></option>
                    <?php foreach ($invoice_templates as $invoice_template) { ?>
                        <option value="<?php echo $invoice_template; ?>" <?php if ($selected_pdf_template == $invoice_template) { ?>selected="selected"<?php } ?>><?php echo $invoice_template; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="email_template" class="control-label"><?php echo lang('email_template'); ?>: </label>
            </div>
            <div class="col-xs-12 col-sm-6">
                <select name="email_template" id="email_template" class="form-control">
                    <option value=""></option>
                    <?php foreach ($email_templates as $email_template) { ?>
                        <option value="<?php echo $email_template->email_template_id; ?>" <?php if ($selected_email_template == $email_template->email_template_id) { ?>selected="selected"<?php } ?>><?php echo $email_template->email_template_title; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="body" class="control-label"><?php echo lang('body'); ?>: </label>
            </div>
            <div class="col-xs-12 col-sm-6">
                <textarea name="body" id="body" rows="6"
                          class="form-control"><?php echo $body; ?></textarea>
            </div>
        </div>

    </div>

</form>