<?php

$lang = array(
	// payment gateways
	'merchant_2checkout'					=> '2Checkout',
	'merchant_authorize_net'				=> 'Authorize.Net AIM',
	'merchant_authorize_net_sim'			=> 'Authorize.Net SIM',
	'merchant_buckaroo'						=> 'Buckaroo',
	'merchant_cardsave'						=> 'Cardsave',
	'merchant_dps_pxpay'					=> 'DPS PaymentExpress PxPay',
	'merchant_dps_pxpost'					=> 'DPS PaymentExpress PxPost',
	'merchant_dummy'						=> 'Dummy',
	'merchant_eway'							=> 'eWay Hosted',
	'merchant_eway_shared'					=> 'eWay Shared',
	'merchant_eway_shared_uk'				=> 'eWay Shared (UK)',
	'merchant_ideal'						=> 'iDEAL',
	'merchant_inipay'						=> 'INIpay',
	'merchant_gocardless'					=> 'GoCardless',
	'merchant_manual'						=> 'Manuell',
	'merchant_mollie'						=> 'Mollie',
	'merchant_netaxept'						=> 'Nets Netaxept',
	'merchant_ogone_directlink'				=> 'Ogone DirectLink',
	'merchant_payflow_pro'					=> 'Payflow Pro',
	'merchant_paymate'						=> 'Paymate',
	'merchant_paypal_express'				=> 'PayPal Express',
	'merchant_paypal_pro'					=> 'PayPal Pro',
	'merchant_rabo_omnikassa'				=> 'Rabo OmniKassa',
	'merchant_sagepay_direct'				=> 'Sagepay Direct',
	'merchant_sagepay_server'				=> 'Sagepay Server',
	'merchant_stripe'						=> 'Stripe',
	'merchant_webteh_direct'				=> 'Webteh Direct',
	'merchant_worldpay'						=> 'WorldPay',

	// payment gateway settings
	'merchant_api_login_id'					=> 'API Login ID',
	'merchant_transaction_key'				=> 'Übertragungsschlüssel',
	'merchant_test_mode'					=> 'Testmodus',
	'merchant_developer_mode'				=> 'Entwicklermodus',
	'merchant_simulator_mode'				=> 'Simulationsmodus',
	'merchant_user_id'						=> 'Benutzer-ID',
	'merchant_app_id'						=> 'App ID',
	'merchant_psp_id'						=> 'PSP ID',
	'merchant_api_key'						=> 'API-Schlüssel',
	'merchant_key'							=> 'Schlüssel',
	'merchant_key_version'					=> 'Schlüssel-Version',
	'merchant_username'						=> 'Benutzername',
	'merchant_vendor'						=> 'Verkäufer',
	'merchant_partner_id'					=> 'Partner-ID',
	'merchant_password'						=> 'Passwort',
	'merchant_signature'					=> 'Signatur',
	'merchant_customer_id'					=> 'Kunden-ID',
	'merchant_merchant_id'					=> 'Händler-ID',
	'merchant_account_no'					=> 'Konto-Nummer',
	'merchant_installation_id'				=> 'Installations-ID',
	'merchant_website_key'					=> 'Website-Schlüssel',
	'merchant_secret_word'					=> 'Geheimwort',
	'merchant_secret'						=> 'Geheim',
	'merchant_app_secret'					=> 'App-Secret',
	'merchant_secret_key'					=> 'Geheimer Schlüssel',
	'merchant_token'						=> 'Kürzel',
	'merchant_access_token'					=> 'Zugangs-Schlüssel',
	'merchant_payment_response_password'	=> 'Zahlungs-Passwort',
	'merchant_company_name'					=> 'Firmenname',
	'merchant_company_logo'					=> 'Firmenlogo',
	'merchant_page_title'					=> 'Seitentitel',
	'merchant_page_banner'					=> 'Seitenbanner',
	'merchant_page_description'				=> 'Seitenbeschreibung',
	'merchant_page_footer'					=> 'Seitenfusszeile',
	'merchant_enable_token_billing'			=> 'Kartendetails für Schlüsselabrechnung speichern',
	'merchant_paypal_email'					=> 'PayPal-Konto',
	'merchant_acquirer_url'					=> 'Käufer-URL',
	'merchant_public_key_path'				=> 'Öffentlicher Schlüssel-Server',
	'merchant_private_key_path'				=> 'Privater Schlüssel-Server',
	'merchant_private_key_password'			=> 'Passwort für privater Schlüssel',
	'merchant_solution_type'				=> 'PayPal-Konto erforderlich',
	'merchant_landing_page'					=> 'Gewählte Zahlungsmethode',
	'merchant_solution_type_mark'			=> 'PayPal-Konto erforderlich',
	'merchant_solution_type_sole'			=> 'PayPal-Konto Optional',
	'merchant_landing_page_billing'			=> 'Gast-Zahlung / Konto erstellen',
	'merchant_landing_page_login'			=> 'PayPal-Konto Login',

	// payment gateway fields
	'merchant_card_type'					=> 'Kartentyp',
	'merchant_card_no'						=> 'Kartennummer',
	'merchant_name'							=> 'Name',
	'merchant_first_name'					=> 'Vorname',
	'merchant_last_name'					=> 'Nachname',
	'merchant_card_issue'					=> 'Ausstellungs-Nummer (Karte)',
	'merchant_exp_month'					=> 'Ablaufsdatum (Monat)',
	'merchant_exp_year'						=> 'Ablaufsdatum (Jahr)',
	'merchant_start_month'					=> 'Startdatum (Monat)',
	'merchant_start_year'					=> 'Startdatum (Jahr)',
	'merchant_csc'							=> 'CSC',
	'merchant_issuer'						=> 'Aussteller',

	// status/error messages
	'merchant_insecure_connection'			=> 'Kreditkarteninformationen müssen über eine gesicherte Verbindung übermittelt werden.',
	'merchant_required'						=> 'Das Feld %s ist zwingend auszufüllen.',
	'merchant_invalid_card_no'				=> 'Kreditkartennummer ist ungültig.',
	'merchant_card_expired'					=> 'Kreditkarte ist abgelaufen.',
	'merchant_invalid_status'				=> 'Ungültiger Zahlungsstatus',
	'merchant_invalid_method'				=> 'Zahlungsmethode wird von diesem Anbieter nicht unterstützt.',
	'merchant_invalid_response'				=> 'Ungültige Antwort vom Zahlungsanbieter.',
	'merchant_payment_failed'				=> 'Zahlung fehlgeschlagen. Bitte nochmals versuchen.',
	'merchant_payment_redirect'				=> 'Bitte warten Sie während wir Sie zur Zahlungsseite weiterleiten...',
	'merchant_3dauth_redirect'				=> 'Bitte warten Sie, während wir Sie auf die Seite des Kreditkarteninstituts zur Authentifizierung weiterleiten...'
);

/* End of file ./language/english/merchant_lang.php */