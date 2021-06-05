<?php

#Including Main file and checking user level
require'../includes/admin_config.php';
$userquery->admin_login_check();
$pages->page_redir();

global $Cbucket;

/* Assigning page and subpage */
if(!defined('MAIN_PAGE')){
    define('MAIN_PAGE', 'Videos');
}
if(!defined('SUB_PAGE')){
    define('SUB_PAGE', 'document');
}

$userquery->login_check('admin_access');

if (isset($_POST['allowed_extensions'])) {

    $allowed_extensions = $_POST['allowed_extensions'];
    $max_upload_size = $_POST['max_upload_size'];

    $query = "UPDATE " . tbl("config") . " SET value = '".$allowed_extensions."'  WHERE name = 'allowed_document_extensions'";
    $db->Execute($query);

    $query_ad = "UPDATE " . tbl("config") . " SET value = '".$max_upload_size."'  WHERE name = 'allowed_document_size'";
    $db->Execute($query_ad);

    echo $query;

    exit();

}

subtitle("Manage Document");
template_files('manage_document.html');
display_it();
?>