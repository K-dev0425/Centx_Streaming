<?php /* Smarty version Smarty-3.1.15, created on 2021-08-18 08:59:44
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/global_header.html" */ ?>
<?php /*%%SmartyHeaderCode:152047225760bc37144b6167-61308598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05d5b5ec37664c531a69ffbd3f91e6f288a85ba0' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/global_header.html',
      1 => 1629277183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152047225760bc37144b6167-61308598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc371451e7b6_03948168',
  'variables' => 
  array (
    'Cbucket' => 0,
    'baseurl' => 0,
    'ninja_fighting' => 0,
    'theme' => 0,
    'cache_buster' => 0,
    '__devmsgs' => 0,
    'imageurl' => 0,
    'qlist_videos' => 0,
    'litems_count' => 0,
    'got_qlitems' => 0,
    'quicklist' => 0,
    'type' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc371451e7b6_03948168')) {function content_60bc371451e7b6_03948168($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/centx/centx/includes/smartyv3/plugins/modifier.date_format.php';
?><!DOCTYPE HTML>

<html>
	<head>
		<?php if (in_dev()) {?>
			<?php if (isset($_smarty_tpl->tpl_vars['cache_buster'])) {$_smarty_tpl->tpl_vars['cache_buster'] = clone $_smarty_tpl->tpl_vars['cache_buster'];
$_smarty_tpl->tpl_vars['cache_buster']->value = microtime(true); $_smarty_tpl->tpl_vars['cache_buster']->nocache = null; $_smarty_tpl->tpl_vars['cache_buster']->scope = 0;
} else $_smarty_tpl->tpl_vars['cache_buster'] = new Smarty_variable(microtime(true), null, 0);?>
		<?php } else { ?>
			<?php if (isset($_smarty_tpl->tpl_vars['cache_buster'])) {$_smarty_tpl->tpl_vars['cache_buster'] = clone $_smarty_tpl->tpl_vars['cache_buster'];
$_smarty_tpl->tpl_vars['cache_buster']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->version; $_smarty_tpl->tpl_vars['cache_buster']->nocache = null; $_smarty_tpl->tpl_vars['cache_buster']->scope = 0;
} else $_smarty_tpl->tpl_vars['cache_buster'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->version, null, 0);?>
		<?php }?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
		<!-- ClipBucket v<?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->version;?>
 -->
		<meta name="copyright" content="ClipBucket - Integrated Units 2007 - <?php echo smarty_modifier_date_format(time(),"%Y");?>
">
		<link rel="icon" type="image/ico" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/favicon.ico">

		<!-- RSS FEEDS -->
		<?php echo rss_feeds(array('link_tag'=>true),$_smarty_tpl);?>

		<?php if (isset($_smarty_tpl->tpl_vars['ninja_fighting']->value)) {?>
            <?php echo ANCHOR(array('place'=>'seo_ninja'),$_smarty_tpl);?>

        <?php } else { ?>
        	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->configs['keywords'];?>
">
			<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->configs['description'];?>
">
			<meta name="distribution" content="global">


			<title><?php echo cbtitle(array(),$_smarty_tpl);?>
</title>
        <?php }?>

		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/bootstrap.min.css?cache=<?php echo $_smarty_tpl->tpl_vars['cache_buster']->value;?>
">

		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/font-awesome.min.css?cache=<?php echo $_smarty_tpl->tpl_vars['cache_buster']->value;?>
">

		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/icon-font.css?cache=<?php echo $_smarty_tpl->tpl_vars['cache_buster']->value;?>
">

		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/custom-elements.css?cache=<?php echo $_smarty_tpl->tpl_vars['cache_buster']->value;?>
">

		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/styles/cb_2014/theme/assets/css/ace.min.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/styles/cb_2014/theme/assets/css/ace-rtl.min.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/styles/cb_2014/theme/assets/css/ace-skins.min.css">

		
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/all.css?cache=<?php echo $_smarty_tpl->tpl_vars['cache_buster']->value;?>
">
		

		<script src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/jquery-1.11.3.min.js"></script>
		<?php if (isset($_smarty_tpl->tpl_vars['__devmsgs']->value)) {?>
			<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/styles/global/jquery_ui.css">
		<?php } else { ?>
			<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/styles/global/jquery_ui.min.css">
		<?php }?>

		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/custom.css">

		<script>
			var loadingImg = '<i class="glyphicon glyphicon-refresh animate-spin"></i>';
			var loading = '<i class="glyphicon glyphicon-refresh animate-spin"></i> <?php echo smarty_lang(array('code'=>"loading"),$_smarty_tpl);?>
...';
			var baseurl = "<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
",
			imageurl = "<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
",
			userid = "<?php echo userid();?>
",
			THIS_PAGE = "<?php echo @constant('THIS_PAGE');?>
";
		</script>
		<?php if (isset($_smarty_tpl->tpl_vars['__devmsgs']->value)) {?>
			<script src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/custom.js"></script>
		<?php } else { ?>
			<script src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/custom.js"></script>
		<?php }?>

		<script src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/bootstrap.min.js"></script>
		
		<script src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/ui_plugins.js"></script>
		<!-- <script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/clipbucket.js"></script> -->
		<?php if (isset($_smarty_tpl->tpl_vars['__devmsgs']->value)) {?>
		<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/clipbucket.js"></script>
		<?php } else { ?>
		<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/clipbucket.min.js"></script>
		<?php }?> 
		<script src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/uslider_js/jquery.mousewheel.js"></script>
		<script async src='https://www.google.com/recaptcha/api.js'></script>

		<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/styles/cb_2014/theme/js/jquery.amcharts.js" type="text/javascript"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/styles/cb_2014/theme/js/jquery.pie.js" type="text/javascript"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/styles/cb_2014/theme/js/jquery.light.js" type="text/javascript"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/styles/cb_2014/theme/js/jquery.serial.js" type="text/javascript"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/styles/cb_2014/theme/js/jquery.bootstrap.newsbox.js" type="text/javascript"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/styles/cb_2014/theme/js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>

		<!-- Script For Home Page Videos Slider //-->

		<!-- Getting quicklist videos and assigning -->
		<?php if (isset($_smarty_tpl->tpl_vars['qlist_videos'])) {$_smarty_tpl->tpl_vars['qlist_videos'] = clone $_smarty_tpl->tpl_vars['qlist_videos'];
$_smarty_tpl->tpl_vars['qlist_videos']->value = get_fast_qlist(); $_smarty_tpl->tpl_vars['qlist_videos']->nocache = null; $_smarty_tpl->tpl_vars['qlist_videos']->scope = 0;
} else $_smarty_tpl->tpl_vars['qlist_videos'] = new Smarty_variable(get_fast_qlist(), null, 0);?>
		<?php if (isset($_smarty_tpl->tpl_vars['litems_count'])) {$_smarty_tpl->tpl_vars['litems_count'] = clone $_smarty_tpl->tpl_vars['litems_count'];
$_smarty_tpl->tpl_vars['litems_count']->value = count($_smarty_tpl->tpl_vars['qlist_videos']->value); $_smarty_tpl->tpl_vars['litems_count']->nocache = null; $_smarty_tpl->tpl_vars['litems_count']->scope = 0;
} else $_smarty_tpl->tpl_vars['litems_count'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['qlist_videos']->value), null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['litems_count']->value>=1) {?> 
			<?php if (isset($_smarty_tpl->tpl_vars['got_qlitems'])) {$_smarty_tpl->tpl_vars['got_qlitems'] = clone $_smarty_tpl->tpl_vars['got_qlitems'];
$_smarty_tpl->tpl_vars['got_qlitems']->value = "yes"; $_smarty_tpl->tpl_vars['got_qlitems']->nocache = null; $_smarty_tpl->tpl_vars['got_qlitems']->scope = 0;
} else $_smarty_tpl->tpl_vars['got_qlitems'] = new Smarty_variable("yes", null, 0);?>	
		<?php } else { ?>
			<?php if (isset($_smarty_tpl->tpl_vars['got_qlitems'])) {$_smarty_tpl->tpl_vars['got_qlitems'] = clone $_smarty_tpl->tpl_vars['got_qlitems'];
$_smarty_tpl->tpl_vars['got_qlitems']->value = "false"; $_smarty_tpl->tpl_vars['got_qlitems']->nocache = null; $_smarty_tpl->tpl_vars['got_qlitems']->scope = 0;
} else $_smarty_tpl->tpl_vars['got_qlitems'] = new Smarty_variable("false", null, 0);?>	
		<?php }?>

		<script>
			var fastQitems = "<?php echo $_smarty_tpl->tpl_vars['got_qlitems']->value;?>
";
			$(document).ready(function(){
				/*var quicklist_videos = '<?php echo $_smarty_tpl->tpl_vars['quicklist']->value;?>
';
				if (quicklist_videos)
				quicklist_videos_check(quicklist_videos);*/

				loading = '<i class="glyphicon glyphicon-refresh animate-spin"></i> <?php echo smarty_lang(array('code'=>"loading"),$_smarty_tpl);?>
...';
				$( 'ul#photos li:visible' ).each( function( i ){
					$( this )[ (1&i) ? 'addClass' : 'removeClass' ]( 'photo-land-no' );
				})
			})
			var pageNow = "<?php echo @constant('THIS_PAGE');?>
";
		</script>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/quicklist/qlist_main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php if (isset($_smarty_tpl->tpl_vars['__devmsgs']->value)) {?>
			<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/fast_qlist.js"></script>
		<?php } else { ?>
			<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/fast_qlist.min.js"></script>
		<?php }?>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/uslider_js/jquery.mousewheel.js"></script>
		<?php echo include_header(array('file'=>'global_header'),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->header_files) {?>
		    <!-- Including Headers -->
		    <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Cbucket']->value->header_files; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
 $_smarty_tpl->tpl_vars['file']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
		        <?php echo include_header(array('type'=>$_smarty_tpl->tpl_vars['type']->value,'file'=>$_smarty_tpl->tpl_vars['file']->value),$_smarty_tpl);?>

		    <?php } ?>
		    <!-- Ending Headers -->
		<?php }?>
	</head>
	
	<?php }} ?>
