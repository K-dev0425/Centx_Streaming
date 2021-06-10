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

$transfer_got_query = "SELECT * FROM " . tbl("transfer") . " WHERE userid=" . userid() . " AND transfer_type = 'got'";
$got_result = db_select($transfer_got_query);

$total_made = 0;
$total_seconds_ad = 0;
foreach ($got_result as $item) {
    $total_made += (float)$item['amount'];
    $total_seconds_ad += (float)$item['paid_time'];
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
assign('total_spent', $total_spent);
assign('total_seconds_content', $total_seconds_content);

$video_query = "SELECT * FROM " . tbl("video") . " WHERE userid=" . userid() . " ORDER BY views DESC LIMIT 10";
$top_view = db_select($video_query);
assign('top_10_views_videos', $top_view);

//$top_earner_query = "SELECT * FROM " . tbl("transfer") . " WHERE userid=" . userid() . " ORDER BY views DESC LIMIT 10";
//$top_view = db_select($video_query);
//assign('top_10_views_videos', $top_view);

$subscription_query = "SELECT * FROM " . tbl("subscriptions") . " WHERE subscribed_to=" . userid();

$sc_today_query = $subscription_query . " AND DATE(date_added) = DATE(NOW())";
$sc_today = count(db_select($sc_today_query));

$sc_week_query = $subscription_query . " AND DATE(date_added) > DATE(NOW()) - INTERVAL 7 DAY";
$sc_week = db_select($sc_week_query);

$sc_month_query = $subscription_query . " AND DATE(date_added) > DATE(NOW()) - INTERVAL 32 DAY AND MONTH(date_added) = MONTH(NOW())";
$sc_month = db_select($sc_month_query);

$sc_year_query = $subscription_query . " AND YEAR(date_added) = YEAR(NOW())";
$sc_year = db_select($sc_year_query);

$sc_total = count(db_select($subscription_query));

assign('subscribers_today', count($sc_today));
assign('subscribers_week', count($sc_week));
assign('subscribers_month', count($sc_month));
assign('subscribers_year', count($sc_year));
assign('subscribers_total', count($sc_total));

subtitle(lang("account_report"));
template_files('account_report.html');
display_it();
?>