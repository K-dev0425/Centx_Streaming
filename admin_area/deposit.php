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
    define('SUB_PAGE', 'deposit');
}

$userquery->login_check('admin_access');

if (isset($_POST['deposit_max_price'])) {

    $deposit_max_price = $_POST['deposit_max_price'];
    $deposit_min_price = $_POST['deposit_min_price'];
    $deposit_text = $_POST['deposit_text'];

    $query = "UPDATE " . tbl("config") . " SET value = '".$deposit_max_price."'  WHERE name = 'deposit_max_price'";
    $db->Execute($query);

    $query1 = "UPDATE " . tbl("config") . " SET value = '".$deposit_min_price."'  WHERE name = 'deposit_min_price'";
    $db->Execute($query1);

    $query2 = "UPDATE " . tbl("config") . " SET value = '".$deposit_text."'  WHERE name = 'deposit_text'";
    $db->Execute($query2);

    echo $query;

    exit();

}

subtitle("Deposit");
template_files('deposit.html');
display_it();
?>