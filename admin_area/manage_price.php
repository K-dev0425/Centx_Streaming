<?php

#Including Main file and checking user level
require'../includes/admin_config.php';
$userquery->admin_login_check();
$pages->page_redir();

global $Cbucket;

/* Assigning page and subpage */
if(!defined('MAIN_PAGE')){
    define('MAIN_PAGE', 'payment');
}
if(!defined('SUB_PAGE')){
    define('SUB_PAGE', 'price');
}

$userquery->login_check('admin_access');

if (isset($_POST['video_fee'])) {

    $video_fee = $_POST['video_fee'];
    $ad_fee = $_POST['ad_fee'];
    $video_max_price = $_POST['video_max_price'];
    $audio_max_price = $_POST['audio_max_price'];
    $max_value_per_second_content = $_POST['max_value_per_second_content'];
    $max_value_per_second_ad = $_POST['max_value_per_second_ad'];
    $min_value_per_second_content = $_POST['min_value_per_second_content'];
    $min_value_per_second_ad = $_POST['min_value_per_second_ad'];

    $query = "UPDATE " . tbl("config") . " SET value = '".$video_fee."'  WHERE name = 'video_fee'";
    $db->Execute($query);

    $query_ad = "UPDATE " . tbl("config") . " SET value = '".$ad_fee."'  WHERE name = 'ad_fee'";
    $db->Execute($query_ad);

    $query1 = "UPDATE " . tbl("config") . " SET value = '".$video_max_price."'  WHERE name = 'video_max_price'";
    $db->Execute($query1);

    $query2 = "UPDATE " . tbl("config") . " SET value = '".$audio_max_price."'  WHERE name = 'audio_max_price'";
    $db->Execute($query2);

    $query3 = "UPDATE " . tbl("config") . " SET value = '".$max_value_per_second_content."'  WHERE name = 'max_value_per_second_content'";
    $db->Execute($query3);

    $query4 = "UPDATE " . tbl("config") . " SET value = '".$max_value_per_second_ad."'  WHERE name = 'max_value_per_second_ad'";
    $db->Execute($query4);

    $query5 = "UPDATE " . tbl("config") . " SET value = '".$min_value_per_second_content."'  WHERE name = 'min_value_per_second_content'";
    $db->Execute($query5);

    $query6 = "UPDATE " . tbl("config") . " SET value = '".$min_value_per_second_ad."'  WHERE name = 'min_value_per_second_ad'";
    $db->Execute($query6);

    echo $query;

    exit();

}

subtitle("Manage Price");
template_files('manage_price.html');
display_it();
?>