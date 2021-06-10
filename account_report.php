<?php

define("THIS_PAGE",'account_report');
define("PARENT_PAGE","channels");

require 'includes/config.inc.php';
$userquery->logincheck();
$udetails = $userquery->get_user_details(userid());
assign('user',$udetails);

$videos = $userquery->get_user_vids(userid(),false,false,true);
assign('videos',$videos);

$video_total_views = 0;
foreach ($videos as $item) {
    $video_total_views += (int)$item['views'];
}
assign('video_total_views', $video_total_views);

/*
 money earned section - total
*/
$transfer_got_query = "SELECT * FROM " . tbl("transfer") . " WHERE userid=" . userid() . " AND transfer_type = 'got'";
$got_result = db_select($transfer_got_query);

$total_made = 0;
$total_seconds_ad = 0;
foreach ($got_result as $item) {
    $total_made += (float)$item['amount'];
    $total_seconds_ad += (float)$item['paid_time'];
}
$got_by_other_query = "SELECT * FROM " . tbl("transfer") . " WHERE video_userid=" . userid() . " AND transfer_type = 'paid'";
$got_by_other_result = db_select($got_by_other_query);
foreach ($got_by_other_result as $item) {
    $total_made += (float)$item['amount'];
}

assign('total_made', $total_made);
assign('total_seconds_ad', $total_seconds_ad);

$transfer_paid_query = "SELECT * FROM " . tbl("transfer") . " WHERE userid=" . userid() . " AND transfer_type = 'paid'";
$paid_result = db_select($transfer_paid_query);

$total_spent = 0;
$total_seconds_content = 0;
foreach ($paid_result as $item) {
    $total_spent += (float)$item['amount'];
    $total_seconds_content += (float)$item['paid_time'];
}
$paid_by_other_query = "SELECT * FROM " . tbl("transfer") . " WHERE video_userid=" . userid() . " AND transfer_type = 'got'";
$paid_by_other_result = db_select($paid_by_other_query);
foreach ($paid_by_other_result as $item) {
    $total_spent += (float)$item['amount'];
}

assign('total_spent', $total_spent);
assign('total_seconds_content', $total_seconds_content);

$video_query = "SELECT * FROM " . tbl("video") . " WHERE userid=" . userid() . " ORDER BY views DESC LIMIT 10";
$top_view = db_select($video_query);
assign('top_10_views_videos', $top_view);

$top_earner_query = "SELECT * FROM " . tbl("video") . " WHERE userid=" . userid() . " ORDER BY total_money DESC LIMIT 10";
$top_earn = db_select($top_earner_query);
assign('top_10_earn_videos', $top_earn);

$subscription_query = "SELECT * FROM " . tbl("subscriptions") . " WHERE subscribed_to=" . userid();

$sc_today_query = $subscription_query . " AND DATE(date_added) = DATE(NOW())";
$sc_today = db_select($sc_today_query);

$sc_week_query = $subscription_query . " AND DATE(date_added) > DATE(NOW()) - INTERVAL 7 DAY";
$sc_week = db_select($sc_week_query);

$sc_month_query = $subscription_query . " AND DATE(date_added) > DATE(NOW()) - INTERVAL 32 DAY AND MONTH(date_added) = MONTH(NOW())";
$sc_month = db_select($sc_month_query);

$sc_year_query = $subscription_query . " AND YEAR(date_added) = YEAR(NOW())";
$sc_year = db_select($sc_year_query);

$sc_total = db_select($subscription_query);

assign('subscribers_today', count($sc_today));
assign('subscribers_week', count($sc_week));
assign('subscribers_month', count($sc_month));
assign('subscribers_year', count($sc_year));
assign('subscribers_total', count($sc_total));

if (isset($_POST['chart_period'])) {
    $period = $_POST['chart_period'];
    $data = array();
    if ($period == 'today') {
        $got_period_query = $transfer_got_query . " AND DATE(date_) = DATE(NOW())";
        $got_by_other_period_query = $got_by_other_query . " AND DATE(date_) = DATE(NOW())";
        $paid_period_query = $transfer_paid_query . " AND DATE(date_) = DATE(NOW())";
        $paid_by_other_period_query = $paid_by_other_query . " AND DATE(date_) = DATE(NOW())";
        $subscribers = count($sc_today);
    }
    elseif ($period == 'week') {
        $got_period_query = $transfer_got_query . " AND DATE(date_) > DATE(NOW()) - INTERVAL 7 DAY";
        $got_by_other_period_query = $got_by_other_query . " AND DATE(date_) > DATE(NOW()) - INTERVAL 7 DAY";
        $paid_period_query = $transfer_paid_query . " AND DATE(date_) > DATE(NOW()) - INTERVAL 7 DAY";
        $paid_by_other_period_query = $paid_by_other_query . " AND DATE(date_) > DATE(NOW()) - INTERVAL 7 DAY";
        $subscribers = count($sc_week);
    }
    elseif ($period == 'month') {
        $got_period_query = $transfer_got_query . " AND DATE(date_) > DATE(NOW()) - INTERVAL 32 DAY AND MONTH(date_) = MONTH(NOW())";
        $got_by_other_period_query = $got_by_other_query . " AND DATE(date_) > DATE(NOW()) - INTERVAL 32 DAY AND MONTH(date_) = MONTH(NOW())";
        $paid_period_query = $transfer_paid_query . " AND DATE(date_) > DATE(NOW()) - INTERVAL 32 DAY AND MONTH(date_) = MONTH(NOW())";
        $paid_by_other_period_query = $paid_by_other_query . " AND DATE(date_) > DATE(NOW()) - INTERVAL 32 DAY AND MONTH(date_) = MONTH(NOW())";
        $subscribers = count($sc_month);
    }
    elseif ($period == 'year') {
        $got_period_query = $transfer_got_query . " AND YEAR(date_) = YEAR(NOW())";
        $got_by_other_period_query = $got_by_other_query . " AND YEAR(date_) = YEAR(NOW())";
        $paid_period_query = $transfer_paid_query . " AND YEAR(date_) = YEAR(NOW())";
        $paid_by_other_period_query = $paid_by_other_query . " AND YEAR(date_) = YEAR(NOW())";
        $subscribers = count($sc_year);
    }
    else {
        $got_period_query = $transfer_got_query;
        $got_by_other_period_query = $got_by_other_query;
        $paid_period_query = $transfer_paid_query;
        $paid_by_other_period_query = $paid_by_other_query;
        $subscribers = count($sc_total);
    }

    $got_result_period = db_select($got_period_query);
    $total_made_period = 0;
    $total_seconds_ad_period = 0;
    foreach ($got_result_period as $item) {
        $total_made_period += (float)$item['amount'];
        $total_seconds_ad_period += (float)$item['paid_time'];
    }
    $got_by_other_result_period = db_select($got_by_other_period_query);
    foreach ($got_by_other_result as $item) {
        $total_made_period += (float)$item['amount'];
    }

    $paid_result_period = db_select($paid_period_query);
    $total_spent_period = 0;
    $total_seconds_content_period = 0;
    foreach ($paid_result_period as $item) {
        $total_spent_period += (float)$item['amount'];
        $total_seconds_content_period += (float)$item['paid_time'];
    }
    $paid_by_other_result_period = db_select($paid_by_other_period_query);
    foreach ($paid_by_other_result_period as $item) {
        $total_spent_period += (float)$item['amount'];
    }

    $data = array(
        'total_made_period' => $total_made_period,
        'total_spent_period' => $total_spent_period,
        'total_seconds_content_period' => $total_seconds_content_period,
        'total_seconds_ad_period' => $total_seconds_ad_period,
        'subscribers' => $subscribers
    );

    echo json_encode($data);
}
else {
    subtitle(lang("account_report"));
    template_files('account_report.html');
    display_it();
}
?>