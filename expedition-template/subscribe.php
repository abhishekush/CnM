<?php

	require_once 'mailchimp/MCAPI.class.php';
	// MailChimp API Key Here
	$api = new MCAPI('MailChimp API Key');
	$merge_vars = array();
	// MailChimp List ID Here
	$retval = $api->listSubscribe( 'MailChimp List ID', $_POST["subscribeemail"], $merge_vars, 'html', false, true );

?>
