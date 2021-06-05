<?php

include('../includes/config.inc.php');

require '../includes/libraries/twilio/twilio-php-main/src/Twilio/autoload.php';

use Twilio\Rest\Client;

$sid = TWILIO_SID;
$token = TWILIO_TOKEN;
$twilio = new Client($sid, $token);

$service = $twilio->verify->v2->services->create("centx");
$service_sid = $service->sid;

if (isset($_POST['phone_number'])) {

    $phone_number = $_POST['phone_number'];

    $duplicated_check = $_POST['duplicated_check'];
    $duplicated = false;
    if ($duplicated_check == 'true') {
        $phone_query = "SELECT phone_number FROM " . tbl('users') . " WHERE phone_number <> ''";
        $phone_number_list = db_select($phone_query);

        foreach ($phone_number_list as $key => $item) {
            if ($phone_number == $item['phone_number']) $duplicated = true;
        }
    }

    if ($duplicated == true) {
        echo "duplicated";
    }
    else {
        $phone_number = "+" . $phone_number;
        $verification = $twilio->verify->v2->services("VA43fedead610b08d56243bb6b4cb89240")->verifications->create($phone_number, "sms");

        if($verification->status == 'pending') {
            echo 'success';
        }
        else {
            echo 'failed';
        }
    }

}


