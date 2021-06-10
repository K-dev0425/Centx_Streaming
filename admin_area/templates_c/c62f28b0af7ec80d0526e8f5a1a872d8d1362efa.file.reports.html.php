<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:05:59
         compiled from "/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/reports.html" */ ?>
<?php /*%%SmartyHeaderCode:141099156260bc49a7db3923-19426118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c62f28b0af7ec80d0526e8f5a1a872d8d1362efa' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/reports.html',
      1 => 1622800746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141099156260bc49a7db3923-19426118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'myquery' => 0,
    'cbvid' => 0,
    'userquery' => 0,
    'vid_dir' => 0,
    'thumb_dir' => 0,
    'orig_dir' => 0,
    'user_thumbs' => 0,
    'user_bg' => 0,
    'grp_thumbs' => 0,
    'cat_thumbs' => 0,
    'db_size' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc49a7e7ed95_41122276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc49a7e7ed95_41122276')) {function content_60bc49a7e7ed95_41122276($_smarty_tpl) {?><div class="heading">
    <h2>Reports &amp; Stats</h2>
</div>
<div id="videos_stats">
      <div>
      <h3 class="pull-left inline">Today</h3>
      <h3 class="pull-left inline">
        <input type="checkbox" class="ace ace-switch ace-switch-5" id="enableTooltipDaily">
      <!--  <span class="lbl"></span>
        <small class="muted">Enable Tooltip</small>--></h3></div>
     <div class="clearfix"></div>
    <div id="daily_chart_id" class="flot_chart">
    <img class="loading-image" src="./styles/cb_2014/images/ajax-loader.gif"/></div>
    </div>

<div class="table-responsive">
<table class="table table-striped table-hover">
    <div class="widget-body">
<thead>
<span><legend>Video Reports</legend></span>
<tr>
    <th>All Time</th>
    <th>Today's Videos</th>
    <th>This Week</th>
    <th>Last Week</th>
    <th>This Month</th>
    <th>Last Month</th>
</thead>
<tbody class="reports">
<tr>
    <td><span class="show">Total: <strong><?php echo get_videos(array('count_only'=>'yes'),$_smarty_tpl);?>
</strong></span>
        <span class="show">Active: <strong><?php echo get_videos(array('count_only'=>'yes','active'=>"yes"),$_smarty_tpl);?>
</strong></span>
        <span class="show">Processing: <strong><?php echo get_videos(array('count_only'=>'yes','status'=>'Processing'),$_smarty_tpl);?>
</strong></span></td>

    <td><span class="show">Total: <strong><?php echo get_videos(array('count_only'=>'yes','date_span'=>'today'),$_smarty_tpl);?>
</strong></span>
        <span class="show">Active: <strong><?php echo get_videos(array('count_only'=>'yes','active'=>"yes",'date_span'=>'today'),$_smarty_tpl);?>
</strong></span>
        <span class="show">Processing: <strong><?php echo get_videos(array('count_only'=>'yes','status'=>'Processing','date_span'=>'today'),$_smarty_tpl);?>
</strong></span></td>

    <td><span class="show">Total: <strong><?php echo get_videos(array('count_only'=>'yes','date_span'=>'this_week'),$_smarty_tpl);?>
</strong></span>
        <span class="show">Active: <strong><?php echo get_videos(array('count_only'=>'yes','active'=>"yes",'date_span'=>'this_week'),$_smarty_tpl);?>
</strong></span>
        <span class="show">Processing: <strong><?php echo get_videos(array('count_only'=>'yes','status'=>'Processing','date_span'=>'this_week'),$_smarty_tpl);?>
</strong></span></td>

    <td><span class="show">Total: <strong><?php echo get_videos(array('count_only'=>'yes','date_span'=>'last_week'),$_smarty_tpl);?>
</strong></span>
        <span class="show">Active: <strong><?php echo get_videos(array('count_only'=>'yes','active'=>"yes",'date_span'=>'last_week'),$_smarty_tpl);?>
</strong></span>
        <span class="show">Processing: <strong><?php echo get_videos(array('count_only'=>'yes','status'=>'Processing','date_span'=>'last_week'),$_smarty_tpl);?>
</strong></span></td>

    <td><span class="show">Total: <strong><?php echo get_videos(array('count_only'=>'yes','date_span'=>'this_month'),$_smarty_tpl);?>
</strong></span>
        <span class="show">Active: <strong><?php echo get_videos(array('count_only'=>'yes','active'=>"yes",'date_span'=>'this_month'),$_smarty_tpl);?>
</strong></span>
        <span class="show">Processing: <strong><?php echo get_videos(array('count_only'=>'yes','status'=>'Processing','date_span'=>'this_month'),$_smarty_tpl);?>
</strong></span></td>

    <td><span class="show">Total: <strong><?php echo get_videos(array('count_only'=>'yes','date_span'=>'last_month'),$_smarty_tpl);?>
</strong></span>
        <span class="show">Active: <strong><?php echo get_videos(array('count_only'=>'yes','active'=>"yes",'date_span'=>'last_month'),$_smarty_tpl);?>
</strong></span>
        <span class="show">Processing: <strong><?php echo get_videos(array('count_only'=>'yes','status'=>'Processing','date_span'=>'last_month'),$_smarty_tpl);?>
</strong></span></td>
</tr>
        </tbody>
        </div>
    </table>
</div>

    <td width="50%" valign="top"><div id="user_stats">
    <div>
      <h3 class="pull-left inline">This week</h3>
      <h3 class="pull-left inline">
        <input type="checkbox" class="ace ace-switch ace-switch-5" id="enableTooltipWeekly">
          <!--  <span class="lbl"></span>
        <small class="muted">Enable Tooltip</small>--></h3></div>
     <div class="clearfix"></div>
    <div id="weekly_chart_id" class="flot_chart"><img class="loading-image" src="./styles/cb_2014/images/ajax-loader.gif"/></div>
    
    </div>
</td>

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <div class="widget-body">
        <thead>
        <span><legend>User Reports</legend></span>
        <tr>
        <th>All Time</th>
        <th>Today's Users</th>
        <th>This Week</th>
        <th>Last Week</th>
        <th>This Month</th>
        <th>Last Month</th>
        </thead>
        <tbody class="reports">
        <tr>
            <td><span class="show">Total: <strong><?php echo get_users(array('count_only'=>'yes'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Active: <strong><?php echo get_users(array('count_only'=>'yes','status'=>'Ok'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Processing: <strong><?php echo get_users(array('count_only'=>'yes','status'=>'ToActivate'),$_smarty_tpl);?>
</strong></span></td>

            <td><span class="show">Total: <strong><?php echo get_users(array('count_only'=>'yes','date_span'=>'today'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Active: <strong><?php echo get_users(array('count_only'=>'yes','status'=>'Ok','date_span'=>'today'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Processing: <strong><?php echo get_videos(array('count_only'=>'yes','status'=>'ToActivate','date_span'=>'today'),$_smarty_tpl);?>
</strong></span></td>

            <td><span class="show">Total: <strong><?php echo get_users(array('count_only'=>'yes','date_span'=>'this_week'),$_smarty_tpl);?>
</strong> </span>
                <span class="show">Active: <strong><?php echo get_users(array('count_only'=>'yes','status'=>'Ok','date_span'=>'this_week'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Processing: <strong><?php echo get_users(array('count_only'=>'yes','status'=>'ToActivate','date_span'=>'this_week'),$_smarty_tpl);?>
</strong></span></td>

            <td><span class="show">Total: <strong><?php echo get_users(array('count_only'=>'yes','date_span'=>'last_week'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Active: <strong><?php echo get_users(array('count_only'=>'yes','status'=>'Ok','date_span'=>'last_week'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Processing: <strong><?php echo get_users(array('count_only'=>'yes','status'=>'ToActivate','date_span'=>'last_week'),$_smarty_tpl);?>
</strong></span></td>

            <td><span class="show">Total: <strong><?php echo get_users(array('count_only'=>'yes','date_span'=>'this_month'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Active: <strong><?php echo get_users(array('count_only'=>'yes','status'=>'Ok','date_span'=>'this_month'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Processing: <strong><?php echo get_users(array('count_only'=>'yes','status'=>'ToActivate','date_span'=>'this_month'),$_smarty_tpl);?>
</strong></span></td>

            <td><span class="show">Total: <strong><?php echo get_users(array('count_only'=>'yes','date_span'=>'last_month'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Active: <strong><?php echo get_users(array('count_only'=>'yes','status'=>'Ok','date_span'=>'last_month'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Processing: <strong><?php echo get_users(array('count_only'=>'yes','status'=>'ToActivate','date_span'=>'last_month'),$_smarty_tpl);?>
</strong></span></td>
        </tr>
        </tbody>
            </div>
    </table>
</div>


    <td width="50%" valign="top">
    <div id="group_stats">
      <div>
      <h3 class="pull-left inline">This Month</h3>
      <h3 class="pull-left inline">
        <input type="checkbox" class="ace ace-switch ace-switch-5" id="enableTooltipMonthly">
        <!--  <span class="lbl"></span>
        <small class="muted">Enable Tooltip</small>--></h3></div>
     <div class="clearfix"></div>
      <div id="monthly_chart_id"  class="flot_chart"><img class="loading-image" src="./styles/cb_2014/images/ajax-loader.gif"/></div>
    </div></td>

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <div class="widget-body">
        <thead>
        <span><legend>Group Reports</legend></span>
        <tr>
        <th>All Time</th>
        <th>Today's Groups</th>
        <th>This Week</th>
        <th>Last Week</th>
        <th>This Month</th>
        <th>Last Month</th>
        </thead>
        <tbody class="reports">
        <tr>
            <td><span class="show">Total: <strong><?php echo get_groups(array('count_only'=>'yes'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Active: <strong><?php echo get_groups(array('count_only'=>'yes','active'=>'yes'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Processing: <strong><?php echo get_groups(array('count_only'=>'yes','active'=>'no'),$_smarty_tpl);?>
</strong></span></td>

            <td><span class="show">Total: <strong><?php echo get_groups(array('count_only'=>'yes','date_span'=>'today'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Active: <strong><?php echo get_groups(array('count_only'=>'yes','active'=>'yes','date_span'=>'today'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Processing: <strong><?php echo get_groups(array('count_only'=>'yes','active'=>'yes','date_span'=>'today'),$_smarty_tpl);?>
</strong></span></td>

            <td><span class="show">Total: <strong><?php echo get_groups(array('count_only'=>'yes','date_span'=>'this_week'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Active: <strong><?php echo get_users(array('count_only'=>'yes','active'=>'yes','date_span'=>'this_week'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Processing: <strong><?php echo get_users(array('count_only'=>'yes','active'=>'no','date_span'=>'this_week'),$_smarty_tpl);?>
</strong></span></td>

            <td><span class="show">Total: <strong><?php echo get_groups(array('count_only'=>'yes','date_span'=>'last_week'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Active: <strong><?php echo get_users(array('count_only'=>'yes','active'=>'yes','date_span'=>'last_week'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Processing: <strong><?php echo get_users(array('count_only'=>'yes','active'=>'no','date_span'=>'last_week'),$_smarty_tpl);?>
</strong></span></td>

            <td><span class="show">Total: <strong><?php echo get_groups(array('count_only'=>'yes','date_span'=>'this_month'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Active: <strong><?php echo get_users(array('count_only'=>'yes','active'=>'yes','date_span'=>'this_month'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Processing: <strong><?php echo get_users(array('count_only'=>'yes','active'=>'no','date_span'=>'this_month'),$_smarty_tpl);?>
</strong></span></td>

            <td><span class="show">Total: <strong><?php echo get_groups(array('count_only'=>'yes','date_span'=>'last_month'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Active: <strong><?php echo get_users(array('count_only'=>'yes','active'=>'yes','date_span'=>'last_month'),$_smarty_tpl);?>
</strong></span>
                <span class="show">Processing: <strong><?php echo get_users(array('count_only'=>'yes','active'=>'no','date_span'=>'last_month'),$_smarty_tpl);?>
</strong></span></td>

        </tr>
        </tbody>
            </div>
    </table>
</div>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <div class="widget-body">
                <thead>
                <span><legend>Other Reports</legend></span>
                <tr>
                <th>Comments</th>
                <th>Flags</th>
                <th>Playlists</th>
                <th>Favorites</th>
                </thead>
                <tbody class="reports">
                <tr>
                    <td><li><span class="show">Video Comments: <strong><?php echo $_smarty_tpl->tpl_vars['myquery']->value->get_comments('wildcard','v',true);?>
</strong></span>
                        <li><span class="show">Groups Discussion:<strong><?php echo $_smarty_tpl->tpl_vars['myquery']->value->get_comments('wildcard','t',true);?>
</strong></span></li>
                        <li><span class="show">Profile Comments: <strong><?php echo $_smarty_tpl->tpl_vars['myquery']->value->get_comments('wildcard','c',true);?>
</strong></span></li></td>

                    <td><li><span class="show">Videos Reported:<strong><?php echo $_smarty_tpl->tpl_vars['cbvid']->value->action->count_flagged_objects();?>
</strong></span></li>
                        <li><span class="show">Groups Reported: <strong><?php echo $_smarty_tpl->tpl_vars['userquery']->value->action->count_flagged_objects();?>
</strong></span></li>
                        <li><span class="show">Profiles Reported: <strong><?php echo $_smarty_tpl->tpl_vars['myquery']->value->get_comments('wildcard','c',true);?>
</strong></span></li></td>

                    <td><li><span class="show">Video PlayList<strong><?php echo $_smarty_tpl->tpl_vars['cbvid']->value->action->count_total_playlist();?>
</strong></span></li>
                        <li><span class="show">Videos in Playlist: <strong><?php echo $_smarty_tpl->tpl_vars['cbvid']->value->action->count_total_playlist(true);?>
</strong></span></li></td>

                    <td><li><span class="show">Favorite Videos: <strong><?php echo $_smarty_tpl->tpl_vars['cbvid']->value->action->total_favorites();?>
</strong></span></li></td>

                </tr>
                </tbody>
                    </div>
            </table>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <div class="widget-body">
                <thead>
                <span><legend>Total files and Sizes</legend></span>
                <tr>

                <th>Total Files</th>
                <th>Sizes</th>

                </thead>
                <tbody class="reports">
                <tr>
                    <td>
                    <ul>
                    <li><span class="show">Total Files: <strong><?php echo number_format($_smarty_tpl->tpl_vars['vid_dir']->value['count']);?>
</strong></span></li>
                    <li><span class="show">Total Thumbs: <strong><?php echo number_format($_smarty_tpl->tpl_vars['thumb_dir']->value['count']);?>
</strong></span> </li>
                    <li><span class="show">Original Video Files: <strong><?php echo number_format($_smarty_tpl->tpl_vars['orig_dir']->value['count']);?>
</strong></span> </li>
                    <li><span class="show">User Thumbs Files: <strong><?php echo number_format($_smarty_tpl->tpl_vars['user_thumbs']->value['count']);?>
</strong></span> </li>
                    <li><span class="show">User Background Files: <strong><?php echo number_format($_smarty_tpl->tpl_vars['user_bg']->value['count']);?>
</strong></span> </li>
                    <li><span class="show">Groups Thumb Files: <strong><?php echo number_format($_smarty_tpl->tpl_vars['grp_thumbs']->value['count']);?>
</strong></span></li>
                    <li><span class="show">Category Thumb Files: <strong><?php echo number_format($_smarty_tpl->tpl_vars['cat_thumbs']->value['count']);?>
</strong></span></li>
                    <li><span class="show">DataBase Size: <strong><?php echo $_smarty_tpl->tpl_vars['db_size']->value;?>
</strong></span></li>
                    </ul>
                    </td>
                    <td>
                    <ul>
                        <li><span class="show">Folder Size: <strong><?php echo formatfilesize($_smarty_tpl->tpl_vars['vid_dir']->value['size']);?>
</strong></span></li>
                        <li><span class="show">Folder Size: <strong><?php echo formatfilesize($_smarty_tpl->tpl_vars['thumb_dir']->value['size']);?>
</strong></span> </li>
                        <li><span class="show">Folder Size: <strong><?php echo formatfilesize($_smarty_tpl->tpl_vars['orig_dir']->value['size']);?>
</strong></span> </li>
                        <li><span class="show">Folder Size: <strong><?php echo formatfilesize($_smarty_tpl->tpl_vars['user_thumbs']->value['size']);?>
</strong></span> </li>
                        <li><span class="show">Folder Size: <strong><?php echo formatfilesize($_smarty_tpl->tpl_vars['user_bg']->value['size']);?>
</strong></span> </li>
                        <li><span class="show">Folder Size: <strong><?php echo formatfilesize($_smarty_tpl->tpl_vars['grp_thumbs']->value['size']);?>
</strong></span></li>
                        <li><span class="show">Folder Size: <strong><?php echo formatfilesize($_smarty_tpl->tpl_vars['cat_thumbs']->value['size']);?>
</strong></span></li>
                        <li><span class="show">Folder Size: <strong><?php echo $_smarty_tpl->tpl_vars['db_size']->value;?>
</strong></span></li>
                    </ul>
                    </td>
                </tr>
                </tbody>
                    </div>
            </table>
        </div>


<style type="text/css">
    .flot_chart{
        height: 200px;
        width: 100%;
    }
</style>

<script type="text/javascript">

$(function() {

    var options = {

        series: {
            bars: {
                show: true,
                steps: true,
                barWidth: 0.6,
                align: "center"
            },
            points: { show: true },
            lines: { show: true }
        },
        xaxis: {
            mode: "categories",
            tickLength: 0
        },
        grid: { hoverable: true, clickable: true }

    };

    // $.plot("#placeholder", data, options);

    var iteration = 0;

    function fetchData() {

        //++iteration;
        // Daily videos Data //

        function onVideosDataReceveDaily(series_daily){

            data =  series_daily;
            //$.plot("#placeholder", data, options);
            $.plot("#videos_daily_chart_id", data, options);
            tooltip("#videos_daily_chart_id","#enableTooltipDaily");
        }

        $.ajax({
            url: "charts/reports/videos_daily_reports.php",
            type: "POST",
            data:"videos=videos",
            dataType: "json",
            success: onVideosDataReceveDaily ,
            error: function() {
                //$("#videos_daily_chart_id").html("error");
                //alert('error');
            },
            complete: function(){
                $('#videos_daily_chart_id .loading-image').hide();
            }
        });

        // !Daily videos Data //

        // Daily users Data //

        function onUserDataReceveDaily(series_daily){

            data =  series_daily;
            //$.plot("#placeholder", data, options);
            $.plot("#daily_users_chart_id", data, options);
            tooltip("#daily_users_chart_id","#enableTooltipDaily");
        }

        $.ajax({
            url: "charts/reports/users_daily_reports.php",
            type: "POST",
            data:"videos=videos",
            dataType: "json",
            success: onUserDataReceveDaily ,
            error: function() {
                //$("#daily_users_chart_id").html("error");
                //alert('error');
            },
            complete: function(){
                $('#daily_users_chart_id .loading-image').hide();
            }
        });

        // !Daily users Data //

        // Daily Data //

        function onDataReceveDaily(series_daily){

            data =  series_daily;
            //$.plot("#placeholder", data, options);
            $.plot("#daily_chart_id", data, options);
            tooltip("#daily_chart_id","#enableTooltipDaily");
        }

        $.ajax({
            url: "charts/reports/daily_activity_reports.php",
            type: "POST",
            data:"videos=videos",
            dataType: "json",
            success: onDataReceveDaily ,
            error: function() {
                //$("#daily_chart_id").html("error");
               // alert('error');
            },
            complete: function(){
                $('#daily_chart_id .loading-image').hide();
            }
        });

        // !Daily Data //


        //users Week Data //

        function onUsersDataReceivedWeekly(series_weekly) {

            data =  series_weekly ;

            $.plot("#users_weekly_chart_id", data, options);
            tooltip("#users_weekly_chart_id","#enableTooltipWeekly");
        }

        $.ajax({
            url: "charts/reports/users_week_activity.php",
            type: "POST",
            data:"videos=videos",
            dataType: "json",
            success: onUsersDataReceivedWeekly ,
            error: function() {
                //$("#users_weekly_chart_id").html("error");
                //alert('error');
            },
            complete: function(){
                $('#users_weekly_chart_id .loading-image').hide();
            }
        });
        //users Week Data //

        //videos Week Data //

        function onVideosDataReceivedWeekly(series_weekly) {

            data =  series_weekly ;

            $.plot("#videos_weekly_chart_id", data, options);
            tooltip("#videos_weekly_chart_id","#enableTooltipWeekly");
        }

        $.ajax({
            url: "charts/reports/videos_weekly_reports.php",
            type: "POST",
            data:"videos=videos",
            dataType: "json",
            success: onVideosDataReceivedWeekly ,
            error: function() {
                //$("#videos_weekly_chart_id").html("error");
                //alert('error');
            },
            complete: function(){
                $('#videos_weekly_chart_id .loading-image').hide();
            }
        });
        //videos Week Data //


        // Week Data //

        function onDataReceivedWeekly(series_weekly) {

            data =  series_weekly ;

            $.plot("#weekly_chart_id", data, options);
            tooltip("#weekly_chart_id","#enableTooltipWeekly");
        }

        $.ajax({
            url: "charts/reports/weekly_activity_reports.php",
            type: "POST",
            data:"videos=videos",
            dataType: "json",
            success: onDataReceivedWeekly ,
            error: function() {
                //$("#weekly_chart_id").html("error");
                //alert('error');
            },
            complete: function(){
                $('#weekly_chart_id .loading-image').hide();
            }
        });
        // !Week Data //
        //users Monthly Data //

        function onUsersDataReceveMonthly(series_monthly){

            data =  series_monthly;
            //$.plot("#placeholder", data, options);
            $.plot("#users_monthly_chart_id", data, options);
            tooltip("#users_monthly_chart_id","#enableTooltipMonthly");
        }

        $.ajax({
            url: "charts/reports/users_monthly_reports.php",
            type: "POST",
            data:"videos=videos",
            dataType: "json",
            success: onUsersDataReceveMonthly ,
            error: function() {
                //$("#users_monthly_chart_id").html("error");
                //alert('error');
            },
            complete: function(){
                $('#users_monthly_chart_id .loading-image').hide();
            }
        });

        //users Monthly Data //

        // Monthly Data //

        function onDataReceveMonthly(series_monthly){

            data =  series_monthly;
            //$.plot("#placeholder", data, options);
            $.plot("#monthly_chart_id", data, options);
            tooltip("#monthly_chart_id","#enableTooltipMonthly");
        }

        $.ajax({
            url: "charts/reports/monthly_activity_reports.php",
            type: "POST",
            data:"videos=videos",
            dataType: "json",
            success: onDataReceveMonthly ,
            error: function() {
                //$("#monthly_chart_id").html("error");
                //alert('error');
            },
            complete: function(){
                $('#monthly_chart_id .loading-image').hide();
            }
        });

        // !Monthly Data //

        //videos Monthly Data //

        function onVideosDataReceveMonthly(series_monthly){

            data =  series_monthly;
            //$.plot("#placeholder", data, options);
            $.plot("#videos_monthly_chart_id", data, options);
            tooltip("#videos_monthly_chart_id","#enableTooltipMonthly");
        }

        $.ajax({
            url: "charts/reports/videos_monthly_reports.php",
            type: "POST",
            data:"videos=videos",
            dataType: "json",
            success: onVideosDataReceveMonthly ,
            error: function() {
                //$("#videos_monthly_chart_id").html("error");
                //alert('error');
            },
            complete: function(){
                $('#videos_monthly_chart_id .loading-image').hide();
            }
        });

        //videos  !Monthly Data //

        /*if (iteration < 5) {
         setTimeout(fetchData, 10000);
         } else {
         data = [];
         alreadyFetched = {};
         }*/
    }
    fetchData();
    //setTimeout(fetchData, 10000);

    function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css( {
            position: 'absolute',
            display: 'none',
            top: y + 5,
            left: x + 5,
            border: '1px solid #fdd',
            padding: '2px',
            'background-color': '#fee',
            opacity: 0.80
        }).appendTo("body").fadeIn(200);
    }

    var previousPoint = null;
    function tooltip(chart_id,tooltip_id){

        $(chart_id).bind("plothover", function (event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));

            if ($(tooltip_id).is(':checked')) {
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(2),
                                y = item.datapoint[1].toFixed(2);

                        showTooltip(item.pageX, item.pageY,
                                item.series.label + " = " + y);
                    }
                }
                else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            }
        });
    }
});
</script><?php }} ?>
