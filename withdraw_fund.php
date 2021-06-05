<?php

define('THIS_PAGE','withdraw_fund');
//define("PARENT_PAGE","deposit_fund");
require 'includes/config.inc.php';
//$pages->page_redir();
subtitle('withdraw_fund');

$userid = userid();

$user_det = $userquery->get_user_details(userid());
$first_name = $user_det['first_name'];
$last_name = $user_det['last_name'];

$query = "SELECT * FROM " . tbl("flags") . " WHERE ownerid=" . (int)$userid;
$result = db_select($query);

if (count($result) == 0) $flags = 0;
else $flags = 1;

$assign_array = array();
$assign_array['paypal_url'] = PAYPAL_URL;
$assign_array['paypal_id'] = PAYPAL_ID;
$assign_array['paypal_return_url'] = PAYPAL_RETURN_URL;
$assign_array['paypal_cancel_url'] = PAYPAL_CANCEL_URL;
$assign_array['flags'] = $flags;
$assign_array['first_name'] = $first_name;
$assign_array['last_name'] = $last_name;

array_val_assign($assign_array);

//Displaying The Template
template_files('withdraw_fund.html');
display_it();

?>