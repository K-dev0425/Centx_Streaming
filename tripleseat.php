<?php

if (isset($_POST['submission_id'])) {
    $curl = curl_init();

    $location = $_POST['location'];
    if ($location == 'Malvern') $location_id = 15362;
    else $location_id = 15361;
    $start_time = $_POST['starttime'][0]. ':' . $_POST['starttime'][1] . '%20' . $_POST['starttime'][2];
    $end_time = $_POST['endtime'][0]. ':' . $_POST['endtime'][1] . '%20' . $_POST['endtime'][2];
    $date = $_POST['date'][0]. '/' . $_POST['date'][1] . '/' . $_POST['date'][2];

    $url = 'http://api.tripleseat.com/v1/leads/create.js?public_key=006ec136ad1b62a7bbbed5e3a139cf334c22af8e&lead_form_id=18327&lead%5Bfirst_name%5D='. $_POST["name"][0] .'&lead%5Blast_name%5D='
        . $_POST["name"][1] .'&lead%5Bemail_address%5D='. $_POST["email"];
    $url .= '&lead%5Bphone_number%5D='. $_POST["phonenumber"][0].$_POST["phonenumber"][1] .'&lead%5Blocation_id%5D='. $location_id .'&lead%5Bevent_description%5D='. urlencode($_POST["natureof"])
        .'&lead%5Bstart_time%5D='. $start_time .'&lead%5Bend_time%5D='. $end_time .'&lead%5Bevent_date%5D='. $date
        .'&lead%5Bguest_count%5D='. $_POST["numberof"].'&lead%5Badditional_information%5D='. urlencode($_POST["additionalinformation"]).'&lead%5Breferral_source_id%5D=1'
        .'&lead%5Breferral_source_other%5D='. urlencode($_POST["referraldetails"]);

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
//        CURLOPT_HEADER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));
//
    $response = curl_exec($curl);
    if (!$response) {
        echo $url;
        echo '<br/>';
        echo urlencode($url);
        die("Curl failed: " . curl_error($curl));
    }
    else {
        curl_close($curl);
        echo $response;
        header("Location: " . "https://www.mckenziebrewhouse.com/private-events-step-2");
    }
//    if ($response) {
//
//    } else {
//    header("Location: " . $url);
//    }
//    echo $url;
}
?>

