<?php

// Set detected language
site()->visit('shop', (string) site()->detectedLanguage());
site()->kirby->localize();
    
// Build body text
$body = l::get('transaction-id').' '.$txn->txn_id()."\n\n";
$body .= l::get('order-error-message-tamper').' ';
$body .= page('shop/orders')->url().'?txn_id='.$txn->txn_id();

// Send the email
sendMail(l::get('order-error-subject'), $body, site()->error_email()->value);

?>