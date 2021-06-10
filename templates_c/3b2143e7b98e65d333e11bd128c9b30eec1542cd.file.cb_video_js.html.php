<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:15:08
         compiled from "/Applications/MAMP/htdocs/centx/centx/player/CB_video_js/cb_video_js.html" */ ?>
<?php /*%%SmartyHeaderCode:145523284260bc4bcc944b17-29350353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b2143e7b98e65d333e11bd128c9b30eec1542cd' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/player/CB_video_js/cb_video_js.html',
      1 => 1622800704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145523284260bc4bcc944b17-29350353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tcomments_params' => 0,
    'current_ad' => 0,
    'vdata' => 0,
    'myquery' => 0,
    'v_editor_params' => 0,
    'svg_manager_params' => 0,
    'svg_manager' => 0,
    'video_editor_enabled' => 0,
    'intance_params' => 0,
    'active_instances' => 0,
    'cb_vjs_player_url' => 0,
    'development_mode' => 0,
    'cb_timecomments_plugin' => 0,
    'play_ad' => 0,
    'cb_ia_ads_url' => 0,
    'video_files' => 0,
    'height' => 0,
    'width' => 0,
    'file' => 0,
    'flv_vid' => 0,
    'quality' => 0,
    'cb_logo' => 0,
    'player_config' => 0,
    'default_quality' => 0,
    'userquery' => 0,
    'Comments_allowed' => 0,
    'timecomments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc4bcc9ca1f2_86446480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4bcc9ca1f2_86446480')) {function content_60bc4bcc9ca1f2_86446480($_smarty_tpl) {?><!-- Following is the code for cb ultimate invideo ads settings  -->
<?php if (isset($_smarty_tpl->tpl_vars['tcomments_params'])) {$_smarty_tpl->tpl_vars['tcomments_params'] = clone $_smarty_tpl->tpl_vars['tcomments_params'];
$_smarty_tpl->tpl_vars['tcomments_params']->value = array('function'=>'get_ultimate_ads'); $_smarty_tpl->tpl_vars['tcomments_params']->nocache = null; $_smarty_tpl->tpl_vars['tcomments_params']->scope = 0;
} else $_smarty_tpl->tpl_vars['tcomments_params'] = new Smarty_variable(array('function'=>'get_ultimate_ads'), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['current_ad'])) {$_smarty_tpl->tpl_vars['current_ad'] = clone $_smarty_tpl->tpl_vars['current_ad'];
$_smarty_tpl->tpl_vars['current_ad']->value = get_my_function($_smarty_tpl->tpl_vars['tcomments_params']->value); $_smarty_tpl->tpl_vars['current_ad']->nocache = null; $_smarty_tpl->tpl_vars['current_ad']->scope = 0;
} else $_smarty_tpl->tpl_vars['current_ad'] = new Smarty_variable(get_my_function($_smarty_tpl->tpl_vars['tcomments_params']->value), null, 0);?>
<?php if (!empty($_smarty_tpl->tpl_vars['current_ad']->value)) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['play_ad'])) {$_smarty_tpl->tpl_vars['play_ad'] = clone $_smarty_tpl->tpl_vars['play_ad'];
$_smarty_tpl->tpl_vars['play_ad']->value = true; $_smarty_tpl->tpl_vars['play_ad']->nocache = null; $_smarty_tpl->tpl_vars['play_ad']->scope = 0;
} else $_smarty_tpl->tpl_vars['play_ad'] = new Smarty_variable(true, null, 0);?>
<?php }?>
<!-- End  -->

<!-- This code is added for timecomments plugin-->
<?php if (isset($_smarty_tpl->tpl_vars['tcomments_params'])) {$_smarty_tpl->tpl_vars['tcomments_params'] = clone $_smarty_tpl->tpl_vars['tcomments_params'];
$_smarty_tpl->tpl_vars['tcomments_params']->value = array('function'=>'get_timeCommnets','videoid'=>$_smarty_tpl->tpl_vars['vdata']->value['videoid']); $_smarty_tpl->tpl_vars['tcomments_params']->nocache = null; $_smarty_tpl->tpl_vars['tcomments_params']->scope = 0;
} else $_smarty_tpl->tpl_vars['tcomments_params'] = new Smarty_variable(array('function'=>'get_timeCommnets','videoid'=>$_smarty_tpl->tpl_vars['vdata']->value['videoid']), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['Comments_allowed'])) {$_smarty_tpl->tpl_vars['Comments_allowed'] = clone $_smarty_tpl->tpl_vars['Comments_allowed'];
$_smarty_tpl->tpl_vars['Comments_allowed']->value = $_smarty_tpl->tpl_vars['myquery']->value->is_commentable($_smarty_tpl->tpl_vars['vdata']->value,'v'); $_smarty_tpl->tpl_vars['Comments_allowed']->nocache = null; $_smarty_tpl->tpl_vars['Comments_allowed']->scope = 0;
} else $_smarty_tpl->tpl_vars['Comments_allowed'] = new Smarty_variable($_smarty_tpl->tpl_vars['myquery']->value->is_commentable($_smarty_tpl->tpl_vars['vdata']->value,'v'), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['timecomments'])) {$_smarty_tpl->tpl_vars['timecomments'] = clone $_smarty_tpl->tpl_vars['timecomments'];
$_smarty_tpl->tpl_vars['timecomments']->value = get_my_function($_smarty_tpl->tpl_vars['tcomments_params']->value); $_smarty_tpl->tpl_vars['timecomments']->nocache = null; $_smarty_tpl->tpl_vars['timecomments']->scope = 0;
} else $_smarty_tpl->tpl_vars['timecomments'] = new Smarty_variable(get_my_function($_smarty_tpl->tpl_vars['tcomments_params']->value), null, 0);?>
<!-- End -->

<!-- This code is added for instance manager Interactive ads plugin-->
<?php if (isset($_smarty_tpl->tpl_vars['v_editor_params'])) {$_smarty_tpl->tpl_vars['v_editor_params'] = clone $_smarty_tpl->tpl_vars['v_editor_params'];
$_smarty_tpl->tpl_vars['v_editor_params']->value = array('function'=>'get_video_editor'); $_smarty_tpl->tpl_vars['v_editor_params']->nocache = null; $_smarty_tpl->tpl_vars['v_editor_params']->scope = 0;
} else $_smarty_tpl->tpl_vars['v_editor_params'] = new Smarty_variable(array('function'=>'get_video_editor'), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['video_editor_enabled'])) {$_smarty_tpl->tpl_vars['video_editor_enabled'] = clone $_smarty_tpl->tpl_vars['video_editor_enabled'];
$_smarty_tpl->tpl_vars['video_editor_enabled']->value = get_my_function($_smarty_tpl->tpl_vars['v_editor_params']->value); $_smarty_tpl->tpl_vars['video_editor_enabled']->nocache = null; $_smarty_tpl->tpl_vars['video_editor_enabled']->scope = 0;
} else $_smarty_tpl->tpl_vars['video_editor_enabled'] = new Smarty_variable(get_my_function($_smarty_tpl->tpl_vars['v_editor_params']->value), null, 0);?>
<!-- End -->

<?php if (isset($_smarty_tpl->tpl_vars['svg_manager_params'])) {$_smarty_tpl->tpl_vars['svg_manager_params'] = clone $_smarty_tpl->tpl_vars['svg_manager_params'];
$_smarty_tpl->tpl_vars['svg_manager_params']->value = array('function'=>'get_svg_manager'); $_smarty_tpl->tpl_vars['svg_manager_params']->nocache = null; $_smarty_tpl->tpl_vars['svg_manager_params']->scope = 0;
} else $_smarty_tpl->tpl_vars['svg_manager_params'] = new Smarty_variable(array('function'=>'get_svg_manager'), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['svg_manager'])) {$_smarty_tpl->tpl_vars['svg_manager'] = clone $_smarty_tpl->tpl_vars['svg_manager'];
$_smarty_tpl->tpl_vars['svg_manager']->value = get_my_function($_smarty_tpl->tpl_vars['svg_manager_params']->value); $_smarty_tpl->tpl_vars['svg_manager']->nocache = null; $_smarty_tpl->tpl_vars['svg_manager']->scope = 0;
} else $_smarty_tpl->tpl_vars['svg_manager'] = new Smarty_variable(get_my_function($_smarty_tpl->tpl_vars['svg_manager_params']->value), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['svg_manager']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['svg_manager']->value;?>
	
<?php }?>


<!-- This code is added for instance manager Interactive ads plugin intances-->
<?php if (!$_smarty_tpl->tpl_vars['video_editor_enabled']->value) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['intance_params'])) {$_smarty_tpl->tpl_vars['intance_params'] = clone $_smarty_tpl->tpl_vars['intance_params'];
$_smarty_tpl->tpl_vars['intance_params']->value = array('function'=>'get_slot','videoid'=>$_smarty_tpl->tpl_vars['vdata']->value['videoid']); $_smarty_tpl->tpl_vars['intance_params']->nocache = null; $_smarty_tpl->tpl_vars['intance_params']->scope = 0;
} else $_smarty_tpl->tpl_vars['intance_params'] = new Smarty_variable(array('function'=>'get_slot','videoid'=>$_smarty_tpl->tpl_vars['vdata']->value['videoid']), null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars['active_instances'])) {$_smarty_tpl->tpl_vars['active_instances'] = clone $_smarty_tpl->tpl_vars['active_instances'];
$_smarty_tpl->tpl_vars['active_instances']->value = get_my_function($_smarty_tpl->tpl_vars['intance_params']->value); $_smarty_tpl->tpl_vars['active_instances']->nocache = null; $_smarty_tpl->tpl_vars['active_instances']->scope = 0;
} else $_smarty_tpl->tpl_vars['active_instances'] = new Smarty_variable(get_my_function($_smarty_tpl->tpl_vars['intance_params']->value), null, 0);?>
	<?php if (is_array($_smarty_tpl->tpl_vars['active_instances']->value)) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['active_instances'])) {$_smarty_tpl->tpl_vars['active_instances'] = clone $_smarty_tpl->tpl_vars['active_instances'];
$_smarty_tpl->tpl_vars['active_instances']->value = json_encode($_smarty_tpl->tpl_vars['active_instances']->value); $_smarty_tpl->tpl_vars['active_instances']->nocache = null; $_smarty_tpl->tpl_vars['active_instances']->scope = 0;
} else $_smarty_tpl->tpl_vars['active_instances'] = new Smarty_variable(json_encode($_smarty_tpl->tpl_vars['active_instances']->value), null, 0);?>
	<?php }?>
<?php }?>
<!-- End -->


<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/css/video-js.min.css">
<link href="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/css/cb_vjs_plugin.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/css/videojs.ads.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/css/videojs.ima.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/css/cb_vjs_resolution.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/css/videojs-chromecast.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/css/videojs.thumbnails.css" rel="stylesheet">

<?php if ($_smarty_tpl->tpl_vars['development_mode']->value) {?>
<script src="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/js/video-js.js"></script>
<?php } else { ?>
<script src="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/js/video-js.min.js"></script>
<?php }?>
<script src="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/js/cb_vjs_custom.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/js/cb_vjs_plugin.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/js/cb_vjs_resolution.js"></script>
<?php if ($_smarty_tpl->tpl_vars['cb_timecomments_plugin']->value=='installed') {?>
<script src="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/js/timecomments.js"></script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['play_ad']->value==true) {?>
<script src="//imasdk.googleapis.com/js/sdkloader/ima3.js"></script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['video_editor_enabled']->value) {?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cb_ia_ads_url']->value;?>
/assets/js/instance_manager.js"></script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['active_instances']->value&&!$_smarty_tpl->tpl_vars['video_editor_enabled']->value) {?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cb_ia_ads_url']->value;?>
/assets/js/interactive.js"></script>
<?php }?>
<script src="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/js/videojs.ads.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/js/videojs.ima.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/js/cb_ultimate_ads.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/js/iphone-inline-video.browser.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/js/videojs.thumbnails.js"></script>


<?php if (isset($_smarty_tpl->tpl_vars['default_quality'])) {$_smarty_tpl->tpl_vars['default_quality'] = clone $_smarty_tpl->tpl_vars['default_quality'];
$_smarty_tpl->tpl_vars['default_quality']->value = get_cbvjs_quality_type($_smarty_tpl->tpl_vars['video_files']->value); $_smarty_tpl->tpl_vars['default_quality']->nocache = null; $_smarty_tpl->tpl_vars['default_quality']->scope = 0;
} else $_smarty_tpl->tpl_vars['default_quality'] = new Smarty_variable(get_cbvjs_quality_type($_smarty_tpl->tpl_vars['video_files']->value), null, 0);?>
<video playsinline id="cb_video_js_<?php echo $_smarty_tpl->tpl_vars['vdata']->value['videoid'];?>
" class="video-js vjs-default-skin" height="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
" width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
" poster="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['vdata']->value,'size'=>'768x432'),$_smarty_tpl);?>
" >

    <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['video_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
    <?php if (isset($_smarty_tpl->tpl_vars['quality'])) {$_smarty_tpl->tpl_vars['quality'] = clone $_smarty_tpl->tpl_vars['quality'];
$_smarty_tpl->tpl_vars['quality']->value = get_cbvjs_quality($_smarty_tpl->tpl_vars['file']->value); $_smarty_tpl->tpl_vars['quality']->nocache = null; $_smarty_tpl->tpl_vars['quality']->scope = 0;
} else $_smarty_tpl->tpl_vars['quality'] = new Smarty_variable(get_cbvjs_quality($_smarty_tpl->tpl_vars['file']->value), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['flv_vid']->value==true) {?>
    	<source src='<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
' type="video/x-flv" />
    <?php } else { ?>
    	<source src='<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
' type="video/mp4" label="<?php echo strtoupper($_smarty_tpl->tpl_vars['quality']->value);?>
" res="<?php echo $_smarty_tpl->tpl_vars['quality']->value;?>
"  />
    <?php }?>
    <?php } ?>
    <?php echo ANCHOR(array('place'=>"play_def_sub",'data'=>$_smarty_tpl->tpl_vars['vdata']->value['videoid']),$_smarty_tpl);?>

    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
</video>


<script type="text/javascript">
	var vid_id = "<?php echo $_smarty_tpl->tpl_vars['vdata']->value['videoid'];?>
";
	var videotitle = "<?php echo escape_quotes($_smarty_tpl->tpl_vars['vdata']->value['title']);?>
";
	var uploader = "<?php echo $_smarty_tpl->tpl_vars['vdata']->value['username'];?>
";
	var branding_logo  = "<?php echo $_smarty_tpl->tpl_vars['cb_logo']->value;?>
";
	var product_link = "<?php echo $_smarty_tpl->tpl_vars['player_config']->value['player_logo_url'];?>
";
	var show_logo = true;
	var default_res = "<?php echo $_smarty_tpl->tpl_vars['default_quality']->value;?>
";
	var autoplay = "<?php echo $_smarty_tpl->tpl_vars['player_config']->value['autoplay'];?>
";


	if (autoplay == 'no' || navigator.userAgent.match(/Android/i) ){
		autoplay = false;
	}else{
		autoplay = true;
	}

	//this condition is added for video head control advanced plugin
	var video_head = "<?php echo $_smarty_tpl->tpl_vars['vdata']->value['video_head'];?>
";
	var controls = true;
	var loop = false;
	var muted = false;
	if (video_head == true){
		controls = false;
		muted = true; 
		autoplay = true;
		loop = true;
	}

	//player settings
	var cb_player_setup = {
		plugins : { }, 
		"techOrder" : ['html5', 'flash'],
		"controls": controls,
		"autoplay": autoplay,
		"preload": "auto",
		"muted": muted,
		"loop" : loop
	};

	var cb_timecomments_plugin = "<?php echo $_smarty_tpl->tpl_vars['cb_timecomments_plugin']->value;?>
"; // timecomments settings
	if (cb_timecomments_plugin){
		var user_id = "<?php echo userid();?>
";
		var username = "<?php echo username();?>
";
		var user_profile  = "<?php echo $_smarty_tpl->tpl_vars['userquery']->value->avatar('','m',userid());?>
";
		var allow_comments = "<?php echo $_smarty_tpl->tpl_vars['Comments_allowed']->value;?>
";
	}

	var play_ad = "<?php echo $_smarty_tpl->tpl_vars['play_ad']->value;?>
"; //  Ad settings starts to pass on to player
	if (play_ad){
		var ad_code = "<?php echo $_smarty_tpl->tpl_vars['current_ad']->value['ad_tag'];?>
";
		var ad_id = "<?php echo $_smarty_tpl->tpl_vars['current_ad']->value['ad_id'];?>
";
	}



	var video_editor_enabled = "<?php echo $_smarty_tpl->tpl_vars['video_editor_enabled']->value;?>
"; // Interactive Ads plugin settings
	var i_instances = '<?php echo $_smarty_tpl->tpl_vars['active_instances']->value;?>
';

	//Setting CallBack
	var cb_vjs_callback = function(){
		var cb_vjs = this;
		//Calling Custom videoJs Elements Plugin
		var el_options = {
			logo : { 
					branding_logo : branding_logo,
				    product_link : product_link,
				    show_logo : true 
			},
			header : { 
					uploader : uploader,
					videotitle : videotitle,
					videoid : vid_id
			}
		}
		cb_vjs.cb_vjs_elements(el_options);

		//Calling Resolution switcher plugin
		var res_options = {
			default : default_res,
			dynamicLabel : false
		}
		cb_vjs.videoJsResolutionSwitcher(res_options);
		var  stateCheck = setInterval(function(){
		  	if (document.readyState === 'complete') {
		    	clearInterval(stateCheck);
		  		var cbVjsMenuBtn = document.querySelector('.vjs-resolution-button');
		  		if (cbVjsMenuBtn){
		  			var cbVjsMenu = cbVjsMenuBtn.children[0];
					var cbVjsMenuContent = cbVjsMenu.children[0];
					var cbVjsMenuContentRes = cbVjsMenuContent.children;
					
					for (var i = 0; i < cbVjsMenuContentRes.length; i++ ){
						cbVjsMenuContent.insertBefore(cbVjsMenuContentRes[i],cbVjsMenuContent.firstChild);
					}
		  		}
		  	}
		},100);  

		//Calling Ima Ads plugin
		if (play_ad){
			var ad_options = {
			  	ad_id: ad_id,
			    ad_code: ad_code,
			    autoplay: autoplay
			};
			cb_vjs.cb_ultimate_ads(ad_options);
		}

		//Calling TimeComments switcher plugin
		if ( cb_timecomments_plugin == 'installed'  && typeof cb_timecomments_plugin != 'undefined'){
			
			var timecomments = '<?php echo $_smarty_tpl->tpl_vars['timecomments']->value;?>
';
			var comments_options = {
				comments : timecomments,
				dummy : false,
				videoid : vid_id,
				userid : user_id,
				userprofile : user_profile,
				username : username,
				allowComments : allow_comments, 
				forceShow : true
			}
			cb_vjs.timecomments(comments_options);
			if (typeof timecomments != 'undefined' && timecomments != ''){
				console.log("Initialized Time Comments");
			}else{
				console.log("Time Comments are empty.. /");
			}
			
		}


		//Calling instance manager plugin for backend
		if ( video_editor_enabled && typeof video_editor_enabled != 'undefined'){
			instance_manager_settings = {
				slot_id : slot_id
			}
			cb_vjs.instanceManager(instance_manager_settings);
		}

		//Calling interactive ads plugin
		if (i_instances){
			i_instances = JSON.parse(i_instances);
			i_instances_settings = {
				enable : true,
				dummy : false,
				instances : i_instances,
			}
			cb_vjs.interactiveAds(i_instances_settings);	
		}

		new_player_height(vid_id);
	}
	//Initializing
	var cb_player = videojs('cb_video_js_'+vid_id, cb_player_setup , cb_vjs_callback);

	$(document).ready(function() {
		$(".video-js").on("contextmenu",function() {
	       return false;
	    }); 	
	});
	
	$(window).resize(function(event) {
		new_player_height(vid_id);
	});

</script>


<style type="text/css">
	.video-js {
		width: 100%;
	}
	.video-js .vjs-tech {
		height: 100% !important;
	}
	.editorpick .cb_video_js-dimensions{
		width: 100% !important;
		height: 100% !important;
	}
</style>

<?php }} ?>
