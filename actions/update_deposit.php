<?php

include('../includes/config.inc.php');


$userid = userid();
//
//$user_det = $userquery->get_user_details(userid());
//$user_name = $user_det['username'];

if ($_POST['first_name']) {
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$query = "UPDATE " . tbl("users") . " SET first_name = '".$first_name."', last_name = '". $last_name ."' WHERE userid = ".(int)$userid;
$db->Execute($query);

//$query1 = "INSERT INTO " . tbl("transfer") . "(userid, username, amount, balance, transfer_type) VALUES(".$userid.", '".$user_name."', ".$amount.", ".$updated_balance.", 'deposit')";
//$db->Execute($query1);

echo $query;
}
else {
    echo 'false';
}

?>