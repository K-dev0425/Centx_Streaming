<?php


#Including Main file and checking user level
require'../includes/admin_config.php';
$userquery->admin_login_check();
$pages->page_redir();


/* Assigning page and subpage */
if(!defined('MAIN_PAGE')){
    define('MAIN_PAGE', 'payment');
}
if(!defined('SUB_PAGE')){
    define('SUB_PAGE', 'manage_withdrawal');
}

$userquery->login_check('admin_access');

$query = "SELECT * FROM " . tbl("withdrawal_list") . " WHERE status = 'pending'";
$list = db_select($query);

Assign('pending_list', $list);

$assign_array = array();
$assign_array['paypal_url'] = PAYPAL_URL;
$assign_array['paypal_return_url'] = PAYPAL_RETURN_URL;
$assign_array['paypal_cancel_url'] = PAYPAL_CANCEL_URL;

array_val_assign($assign_array);

subtitle("Manage Withdrawal");
template_files('manage_withdrawal.html');
display_it();
?>