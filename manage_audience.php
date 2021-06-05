<?php
/* 
 **************************************************************
 | Copyright (c) 2007-2010 Clip-Bucket.com. All rights reserved.
 | @ Author	   : ArslanHassan									
 | @ Software  : ClipBucket , © PHPBucket.com					
 **************************************************************
*/

define("THIS_PAGE",'manage_audience');
//define("PARENT_PAGE","photos");
require 'includes/config.inc.php';
$userquery->logincheck();
$udetails = $userquery->get_user_details(userid());
assign('user',$udetails);
assign('p',$userquery->get_user_profile($udetails['userid']));


$mode = $_GET['mode'];

$page = mysql_clean($_GET['page']);
$get_limit = create_query_limit($page,MAINPLIST);


assign('queryString',queryString(NULL,array('type',
					'makeProfileItem',
					'removeProfileItem',
					'delete_photo')));
					
switch($mode){

	case "delete":
	
		if(isset($_POST['delete_audience'])){

			$total = count($_POST['check_audience']);

			for($i=0;$i<$total;$i++){

				$cbaudience->DeleteAudience($_POST['check_audience'][$i]);

			}//for

		}else{
			$cbaudience->DeleteAudience($_GET['delete_audience']);

		}
		
		header("location: ./manage_audience.php");



		break;

	case "edit":
		//print_r($_GET);die;

		assign('mode','edit');
		$audience = $cbaudience->getAudience($_GET['audience']);
		assign('audience',$audience);

		$arrLV = explode(",",$audience[0]['linked_videos']);
		assign('linked_videos', $arrLV);

		$userVideos = $cbvideo->get_videos(array('user'=>userid()) );
		assign('userVideos',$userVideos);
                
		if(isset($_POST['mode']) && $_POST['mode'] == "update_audience"){
			$cbaudience->EditAudience();
			header("location: ./manage_audience.php");
		}

		break;

	case "add_new":
		
		assign('mode','add_new');

		$userVideos = $cbvideo->get_videos(array('user'=>userid()) );
		assign('userVideos',$userVideos);

		if(isset($_POST['mode']) && $_POST['mode'] == "create_audience"){
			$cbaudience->CreateAudience();
			header("location: ./manage_audience.php");
		}

		break;

	default:
		assign('mode','list');
		$audience = $cbaudience->getAudience();
		assign('audience',$audience);
		subtitle(lang("manage_audience"));
		break;
}

template_files('manage_audience.html');
display_it();
?>