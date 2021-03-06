<?php


#Including Main file and checking user level
require'../includes/admin_config.php';
$userquery->admin_login_check();
$pages->page_redir();


/* Assigning page and subpage */
if(!defined('MAIN_PAGE')){
    define('MAIN_PAGE', 'transaction_history');
}
if(!defined('SUB_PAGE')){
    define('SUB_PAGE', 'ad_payment');
}

$userquery->login_check('admin_access');


$query = "SELECT * FROM ".tbl("transfer")." WHERE transfer_type='got'";

$username = '';
$date = '';
$list_per_page = 20;
$page = 1;

if (isset($_GET['username']) && $_GET['username'] != '') {
    $username = $_GET['username'];
    $query .= " AND username like '".$username."'";
}

if (isset($_GET['date']) && $_GET['date'] != 'all') {
    $date = $_GET['date'];
    switch ($date)
    {
        case 'today': {
            $query .= " AND DATE(date_) = DATE(NOW())";
        }
            break;

        case 'yesterday':{
            $query .= " AND DATE(date_) = DATE(NOW()) - INTERVAL 1 DAY";
        }
            break;

        case 'this_week': {
            $query .= " AND DATE(date_) > DATE(NOW()) - INTERVAL 7 DAY";
        }
            break;

        case 'this_month': {
            $query .= " AND DATE(date_) > DATE(NOW()) - INTERVAL 32 DAY AND MONTH(date_) = MONTH(NOW())";
        }
            break;

        case 'this_year': {
            $query .= " AND YEAR(date_) = YEAR(NOW())";
        }
            break;
    }
}

$query .= " ORDER BY id DESC";

$query1 = $query;
$all_ad_conds = db_select($query1);

$count = count($all_ad_conds);
$last_page = ceil($count/$list_per_page);

if (isset($_GET['page']) && (int)$_GET['page'] != 1) {
    $page = (int)$_GET['page'];
    $offset = ($page - 1) * $list_per_page;
    $query .= " LIMIT ". $offset . ", ". $list_per_page;
}
else {
    $query .= " LIMIT ". $list_per_page;
}

$ad_payments = db_select($query);

Assign('ad_payments', $ad_payments);
Assign('userInput', $username);
Assign('dateInput', $date);
Assign('page', $page);
Assign('last_page', $last_page);

subtitle("Ad Payment");
template_files('ad_payment.html');
display_it();
?>