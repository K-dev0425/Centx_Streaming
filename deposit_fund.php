<?php

define('THIS_PAGE','deposit_fund');
//define("PARENT_PAGE","deposit_fund");
require 'includes/config.inc.php';
//$pages->page_redir();
subtitle('deposit_fund');

$userid = userid();

$user_det = $userquery->get_user_details(userid());
$first_name = $user_det['first_name'];
$last_name = $user_det['last_name'];

$assign_array = array();
$assign_array['paypal_url'] = PAYPAL_URL;
$assign_array['paypal_id'] = PAYPAL_ID;
$assign_array['paypal_return_url'] = PAYPAL_RETURN_URL;
$assign_array['paypal_cancel_url'] = PAYPAL_CANCEL_URL;
$assign_array['first_name'] = $first_name;
$assign_array['last_name'] = $last_name;

array_val_assign($assign_array);

//Displaying The Template
template_files('deposit_fund.html');
display_it();

?>