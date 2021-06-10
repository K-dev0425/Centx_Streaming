<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 02:46:44
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/header.html" */ ?>
<?php /*%%SmartyHeaderCode:172151246160bc3714b15f00-61789001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dd5954951ed3c8a5211c1fe9e48981631c510dd' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/header.html',
      1 => 1622800580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172151246160bc3714b15f00-61789001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentPage' => 0,
    'baseurl' => 0,
    'theme' => 0,
    'head_menu' => 0,
    'menu' => 0,
    'userquery' => 0,
    'user_det' => 0,
    'pageType' => 0,
    'Cbucket' => 0,
    'stypes' => 0,
    'counter' => 0,
    'toSearch' => 0,
    'admin_baseurl' => 0,
    'vidMode' => 0,
    'photoMode' => 0,
    'channelsMode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc3714c1bfe8_37651956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc3714c1bfe8_37651956')) {function content_60bc3714c1bfe8_37651956($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/centx/centx/includes/smartyv3/plugins/modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['currentPage'])) {$_smarty_tpl->tpl_vars['currentPage'] = clone $_smarty_tpl->tpl_vars['currentPage'];
$_smarty_tpl->tpl_vars['currentPage']->value = mb_strtolower(@constant('THIS_PAGE'), 'UTF-8'); $_smarty_tpl->tpl_vars['currentPage']->nocache = null; $_smarty_tpl->tpl_vars['currentPage']->scope = 0;
} else $_smarty_tpl->tpl_vars['currentPage'] = new Smarty_variable(mb_strtolower(@constant('THIS_PAGE'), 'UTF-8'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['currentPage']->value=='view_channel'||$_smarty_tpl->tpl_vars['currentPage']->value=='channels') {?>
<?php if (isset($_smarty_tpl->tpl_vars['currentPage'])) {$_smarty_tpl->tpl_vars['currentPage'] = clone $_smarty_tpl->tpl_vars['currentPage'];
$_smarty_tpl->tpl_vars['currentPage']->value = 'channels'; $_smarty_tpl->tpl_vars['currentPage']->nocache = null; $_smarty_tpl->tpl_vars['currentPage']->scope = 0;
} else $_smarty_tpl->tpl_vars['currentPage'] = new Smarty_variable('channels', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['toSearch'])) {$_smarty_tpl->tpl_vars['toSearch'] = clone $_smarty_tpl->tpl_vars['toSearch'];
$_smarty_tpl->tpl_vars['toSearch']->value = 'channels'; $_smarty_tpl->tpl_vars['toSearch']->nocache = null; $_smarty_tpl->tpl_vars['toSearch']->scope = 0;
} else $_smarty_tpl->tpl_vars['toSearch'] = new Smarty_variable('channels', null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['currentPage']->value=='view_item'||$_smarty_tpl->tpl_vars['currentPage']->value=='photos') {?>
<?php if (isset($_smarty_tpl->tpl_vars['currentPage'])) {$_smarty_tpl->tpl_vars['currentPage'] = clone $_smarty_tpl->tpl_vars['currentPage'];
$_smarty_tpl->tpl_vars['currentPage']->value = 'photos'; $_smarty_tpl->tpl_vars['currentPage']->nocache = null; $_smarty_tpl->tpl_vars['currentPage']->scope = 0;
} else $_smarty_tpl->tpl_vars['currentPage'] = new Smarty_variable('photos', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['toSearch'])) {$_smarty_tpl->tpl_vars['toSearch'] = clone $_smarty_tpl->tpl_vars['toSearch'];
$_smarty_tpl->tpl_vars['toSearch']->value = 'photos'; $_smarty_tpl->tpl_vars['toSearch']->nocache = null; $_smarty_tpl->tpl_vars['toSearch']->scope = 0;
} else $_smarty_tpl->tpl_vars['toSearch'] = new Smarty_variable('photos', null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['currentPage']->value=='collections'||$_smarty_tpl->tpl_vars['currentPage']->value=='view_collection') {?>
<?php if (isset($_smarty_tpl->tpl_vars['currentPage'])) {$_smarty_tpl->tpl_vars['currentPage'] = clone $_smarty_tpl->tpl_vars['currentPage'];
$_smarty_tpl->tpl_vars['currentPage']->value = 'collections'; $_smarty_tpl->tpl_vars['currentPage']->nocache = null; $_smarty_tpl->tpl_vars['currentPage']->scope = 0;
} else $_smarty_tpl->tpl_vars['currentPage'] = new Smarty_variable('collections', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['toSearch'])) {$_smarty_tpl->tpl_vars['toSearch'] = clone $_smarty_tpl->tpl_vars['toSearch'];
$_smarty_tpl->tpl_vars['toSearch']->value = 'collections'; $_smarty_tpl->tpl_vars['toSearch']->nocache = null; $_smarty_tpl->tpl_vars['toSearch']->scope = 0;
} else $_smarty_tpl->tpl_vars['toSearch'] = new Smarty_variable('collections', null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['currentPage']->value=='watch_video'||$_smarty_tpl->tpl_vars['currentPage']->value=='videos') {?>
<?php if (isset($_smarty_tpl->tpl_vars['currentPage'])) {$_smarty_tpl->tpl_vars['currentPage'] = clone $_smarty_tpl->tpl_vars['currentPage'];
$_smarty_tpl->tpl_vars['currentPage']->value = 'videos'; $_smarty_tpl->tpl_vars['currentPage']->nocache = null; $_smarty_tpl->tpl_vars['currentPage']->scope = 0;
} else $_smarty_tpl->tpl_vars['currentPage'] = new Smarty_variable('videos', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['toSearch'])) {$_smarty_tpl->tpl_vars['toSearch'] = clone $_smarty_tpl->tpl_vars['toSearch'];
$_smarty_tpl->tpl_vars['toSearch']->value = 'videos'; $_smarty_tpl->tpl_vars['toSearch']->nocache = null; $_smarty_tpl->tpl_vars['toSearch']->scope = 0;
} else $_smarty_tpl->tpl_vars['toSearch'] = new Smarty_variable('videos', null, 0);?>


<?php } elseif ($_smarty_tpl->tpl_vars['currentPage']->value=='list') {?>
<?php if (isset($_smarty_tpl->tpl_vars['currentPage'])) {$_smarty_tpl->tpl_vars['currentPage'] = clone $_smarty_tpl->tpl_vars['currentPage'];
$_smarty_tpl->tpl_vars['currentPage']->value = 'audios'; $_smarty_tpl->tpl_vars['currentPage']->nocache = null; $_smarty_tpl->tpl_vars['currentPage']->scope = 0;
} else $_smarty_tpl->tpl_vars['currentPage'] = new Smarty_variable('audios', null, 0);?>
<?php }?>
<?php ob_start();?><?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['vidMode'])) {$_smarty_tpl->tpl_vars['vidMode'] = clone $_smarty_tpl->tpl_vars['vidMode'];
$_smarty_tpl->tpl_vars['vidMode']->value = $_tmp1; $_smarty_tpl->tpl_vars['vidMode']->nocache = null; $_smarty_tpl->tpl_vars['vidMode']->scope = 0;
} else $_smarty_tpl->tpl_vars['vidMode'] = new Smarty_variable($_tmp1, null, 0);?>
<?php ob_start();?><?php echo smarty_lang(array('code'=>"photos"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['photoMode'])) {$_smarty_tpl->tpl_vars['photoMode'] = clone $_smarty_tpl->tpl_vars['photoMode'];
$_smarty_tpl->tpl_vars['photoMode']->value = $_tmp2; $_smarty_tpl->tpl_vars['photoMode']->nocache = null; $_smarty_tpl->tpl_vars['photoMode']->scope = 0;
} else $_smarty_tpl->tpl_vars['photoMode'] = new Smarty_variable($_tmp2, null, 0);?>
<?php ob_start();?><?php echo smarty_lang(array('code'=>"channels"),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['channelsMode'])) {$_smarty_tpl->tpl_vars['channelsMode'] = clone $_smarty_tpl->tpl_vars['channelsMode'];
$_smarty_tpl->tpl_vars['channelsMode']->value = $_tmp3; $_smarty_tpl->tpl_vars['channelsMode']->nocache = null; $_smarty_tpl->tpl_vars['channelsMode']->scope = 0;
} else $_smarty_tpl->tpl_vars['channelsMode'] = new Smarty_variable($_tmp3, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['pageType'])) {$_smarty_tpl->tpl_vars['pageType'] = clone $_smarty_tpl->tpl_vars['pageType'];
$_smarty_tpl->tpl_vars['pageType']->value = mb_strtolower($_GET['type'], 'UTF-8'); $_smarty_tpl->tpl_vars['pageType']->nocache = null; $_smarty_tpl->tpl_vars['pageType']->scope = 0;
} else $_smarty_tpl->tpl_vars['pageType'] = new Smarty_variable(mb_strtolower($_GET['type'], 'UTF-8'), null, 0);?>
<div id="quick_container">
	<div id="quicklist_box">
	</div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['searchPage'])) {$_smarty_tpl->tpl_vars['searchPage'] = clone $_smarty_tpl->tpl_vars['searchPage'];
$_smarty_tpl->tpl_vars['searchPage']->value = $_GET['query']; $_smarty_tpl->tpl_vars['searchPage']->nocache = null; $_smarty_tpl->tpl_vars['searchPage']->scope = 0;
} else $_smarty_tpl->tpl_vars['searchPage'] = new Smarty_variable($_GET['query'], null, 0);?>
<header id="header" class="clearfix dark bright">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="header-holder">
				<div class="navbar-header clearfix">

					<h1 class="logo" style="margin-left: 18px">
						<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/logo.png" alt="cbtune" class="img-responsive">
							<!--<span>clipbucket</span>-->
						</a>
					</h1>

					<button class="navbar-toggle" data-toggle="collapse" data-target="#bs-collapse">Menu<span class="icon-down-arrow"></span></button>

					<a href="javascript:void(0)" class="btn-search-toggle btn visible-xs">
						<i class="icon-search"></i>
					</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-collapse">
					<div class="menu-holder">

						<div class="col">
							<nav class="main-links">
								<?php if (isset($_smarty_tpl->tpl_vars['head_menu'])) {$_smarty_tpl->tpl_vars['head_menu'] = clone $_smarty_tpl->tpl_vars['head_menu'];
$_smarty_tpl->tpl_vars['head_menu']->value = cb_menu(); $_smarty_tpl->tpl_vars['head_menu']->nocache = null; $_smarty_tpl->tpl_vars['head_menu']->scope = 0;
} else $_smarty_tpl->tpl_vars['head_menu'] = new Smarty_variable(cb_menu(), null, 0);?>
								<ul>
									<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['head_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['menu']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['menu']->iteration++;
?>
									<?php if (mb_strtolower($_smarty_tpl->tpl_vars['menu']->value['name'], 'UTF-8')=='groups') {?>
									<?php continue 1?>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['menu']->iteration<6) {?>
									<?php if (mb_strtolower($_smarty_tpl->tpl_vars['menu']->value['this'], 'UTF-8')=='home') {?>
									<?php continue 1?>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['menu']->value['this']=="home") {?>
									<?php continue 1?>
									<?php }?>
									<li <?php if (mb_strtolower($_smarty_tpl->tpl_vars['menu']->value['name'], 'UTF-8')==mb_strtolower(@constant('THIS_PAGE'), 'UTF-8')||mb_strtolower($_smarty_tpl->tpl_vars['menu']->value['name'], 'UTF-8')==$_smarty_tpl->tpl_vars['currentPage']->value) {?>class="active"<?php }?>><span class="menu_icon"><i class="fa fa-play-circle"></i></span><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</a></li>
									<?php }?>
									<?php } ?>

									<li>
										<span class="menu_icon"><i class="fa fa-volume-up"></i></span>
										<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/ads.php"><?php echo smarty_lang(array('code'=>"ads"),$_smarty_tpl);?>
</a>
									</li>
									<li>
										<span class="menu_icon"><i class="fa fa-headphones"></i></span>
										<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/audiobooks.php"><?php echo smarty_lang(array('code'=>"audiobooks"),$_smarty_tpl);?>
</a>
									</li>
									<li>
										<span class="menu_icon"><i class="fa fa-microphone"></i></span>
										<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/podcasts.php"><?php echo smarty_lang(array('code'=>"podcasts"),$_smarty_tpl);?>
</a>
									</li>
									<li>
										<span class="menu_icon"><i class="fa fa-sign-in"></i></span>
										<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/#"><?php echo smarty_lang(array('code'=>"subscriptions"),$_smarty_tpl);?>
</a>
									</li>
									<?php echo ANCHOR(array('place'=>"cb_28_head"),$_smarty_tpl);?>

								</ul>

								<hr>

								<?php if (isset($_smarty_tpl->tpl_vars['user_det'])) {$_smarty_tpl->tpl_vars['user_det'] = clone $_smarty_tpl->tpl_vars['user_det'];
$_smarty_tpl->tpl_vars['user_det']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_user_details(userid()); $_smarty_tpl->tpl_vars['user_det']->nocache = null; $_smarty_tpl->tpl_vars['user_det']->scope = 0;
} else $_smarty_tpl->tpl_vars['user_det'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_user_details(userid()), null, 0);?>
								<?php if ($_smarty_tpl->tpl_vars['user_det']->value!='') {?>
								<span class="balance_menu">Balance: $<?php echo number_format((float)($_smarty_tpl->tpl_vars['user_det']->value['balance']),2);?>
 USD</span><br><br><br>
								<?php }?>

								<br><br>

								<div class="form-group">
									<input type="radio" name="color_scheme" id="dark_theme" value="1" checked onchange="add_dark(this)">
									<label for="dark_theme"><?php echo smarty_lang(array('code'=>"dark_theme"),$_smarty_tpl);?>
</label><br>
									<input type="radio" name="color_scheme" id="bright_theme" value="0" onchange="remove_dark(this)">
									<label for="bright_theme"><?php echo smarty_lang(array('code'=>"light_theme"),$_smarty_tpl);?>
</label>
								</div>

								<!--<span id="balance_link"></span><br><br><br>-->

								<!--<div class="form-group">-->
									<!--<input type="radio" name="color_scheme" id="dark_theme" value="1" checked onchange="add_dark(this)">-->
									<!--<label for="dark_theme">Dark Theme</label><br>-->
									<!--<input type="radio" name="color_scheme" id="bright_theme" value="0" onchange="remove_dark(this)">-->
									<!--<label for="bright_theme">Bright Theme</label>-->
								<!--</div>-->
							</nav>
						</div>
						<!-- <div class="col">
							<a href="#" class="fancy-btn btn btn-default cd-popup-trigger">Animation</a>
						</div> -->
						<div class="col btn-holder user_menu text-right">
							<div class="search">
								<form class="search-form" action="<?php echo cblink(array('name'=>'search_result'),$_smarty_tpl);?>
">
									<div class="cbsearchtype">
										<div class="search-drop">
											<button id="searchTypes" tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle search-drop-btn" type="button">
												<span class="search-type"><?php if ($_smarty_tpl->tpl_vars['pageType']->value) {?><?php echo ucfirst($_smarty_tpl->tpl_vars['pageType']->value);?>
<?php } elseif ($_smarty_tpl->tpl_vars['currentPage']->value=='videos'||$_smarty_tpl->tpl_vars['currentPage']->value=='channels'||$_smarty_tpl->tpl_vars['currentPage']->value=='photos') {?><?php echo ucfirst($_smarty_tpl->tpl_vars['currentPage']->value);?>
<?php } else { ?><?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>
<?php }?></span>
												<span class="icon-down-arrow"></span>
											</button>
											<ul class="dropdown-menu">
												<?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = 1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(1, null, 0);?>
												<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['stypes'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Cbucket']->value->search_types; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['stypes']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
												<?php if (mb_strtolower($_smarty_tpl->tpl_vars['stypes']->value, 'UTF-8')=='groups') {?>
												<?php continue 1?>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['counter']->value==3) {?>
												<li value="<?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['pageType']->value==$_smarty_tpl->tpl_vars['stypes']->value||$_smarty_tpl->tpl_vars['currentPage']->value==$_smarty_tpl->tpl_vars['stypes']->value) {?>  class="active"  <?php }?>>
													<a  class="s-types" href="#" valNow="<?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
"><?php echo smarty_lang(array('code'=>((string)$_smarty_tpl->tpl_vars['stypes']->value)),$_smarty_tpl);?>
</a>
												</li>
												<?php } else { ?>
												<li value="<?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['pageType']->value==$_smarty_tpl->tpl_vars['stypes']->value||$_smarty_tpl->tpl_vars['currentPage']->value==$_smarty_tpl->tpl_vars['stypes']->value) {?>  class="active" <?php }?>>
													<a  class="s-types" href="#" valNow="<?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
"><?php echo smarty_lang(array('code'=>((string)$_smarty_tpl->tpl_vars['stypes']->value)),$_smarty_tpl);?>
</a>
												</li>
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = $_smarty_tpl->tpl_vars['counter']->value+1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
												<?php } ?>
												<?php echo ANCHOR(array('place'=>"beat_search"),$_smarty_tpl);?>

											</ul>
										</div>
										<input type="text" class="form-control" name="query" placeholder="<?php echo smarty_lang(array('code'=>"search_keyword_feed"),$_smarty_tpl);?>
" value="<?php echo get_form_val('query',true);?>
" id="query">
										<input type="hidden" name="type" class="type" value="<?php if (isset($_GET['type'])) {?><?php echo $_GET['type'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['toSearch']->value) {?><?php echo $_smarty_tpl->tpl_vars['toSearch']->value;?>
<?php } else { ?>videos<?php }?>" id="type">
										<button tabindex="-1" type="submit" name="cbsearch" id="cbsearch" class="btn btn-default btn-search icon-search"></button>
										<?php echo ANCHOR(array('place'=>"elastic_mode_search"),$_smarty_tpl);?>

									</div>
								</form><!-- form Ends -->
							</div>

                            <style>
                                .user_menu .right-menu {
                                    max-height: 34px;
                                }
                                .myaccount-dd img{
                                    position: relative;
                                    top: -7px;
                                }
                                .myaccount-dd a p {
                                    display: inline-block;
                                    line-height: 1.2;
                                    text-align: left;
                                }
                            </style>

							<ul class="nav navbar-nav navbar-right right-menu">
								<?php if (userid()) {?>
								<li class="dropdown upload_link">
									<a href="<?php echo cblink(array('name'=>'upload'),$_smarty_tpl);?>
" class="dropdown-toggle btn-upload btn btn-default" data-toggle="dropdown"><i class="icon-upload"></i><span><?php echo smarty_lang(array('code'=>"upload"),$_smarty_tpl);?>
</span><b class="icon-down-arrow"></b></a>
									<ul role="menu" class="dropdown-menu">
										<?php if (has_access('allow_video_upload',true,true)&&isSectionEnabled('videos')) {?>
										<li class="up_vid"><a href="<?php echo cblink(array('name'=>'upload'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"upload_video"),$_smarty_tpl);?>
<i class="icon-video visible-xs"></i></a></li>
										<?php }?>
										<?php if (isSectionEnabled('audios')) {?>
										<li class="up_aud"><a href="<?php echo cblink(array('name'=>'upload'),$_smarty_tpl);?>
?type=audio"><?php echo smarty_lang(array('code'=>"upload_audio"),$_smarty_tpl);?>
<i class="icon-audio visible-xs"></i></a></li>
										<?php }?>
										<?php if (isSectionEnabled('photos')) {?>
										<li class="up_img"><a href="<?php echo cblink(array('name'=>'photo_upload'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"upload_photo"),$_smarty_tpl);?>
<i class="icon-photo visible-xs"></i></a></li>
										<?php }?>
										<?php echo ANCHOR(array('place'=>"aud_upload_link"),$_smarty_tpl);?>

									</ul>
								</li>

								<li class="dropdown myaccount-dd">
									<a href="javascript:void(0)" class="user-area dropdown-toggle dark bright" data-toggle="dropdown">
										<?php if (isset($_smarty_tpl->tpl_vars['user_det'])) {$_smarty_tpl->tpl_vars['user_det'] = clone $_smarty_tpl->tpl_vars['user_det'];
$_smarty_tpl->tpl_vars['user_det']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_user_details(userid()); $_smarty_tpl->tpl_vars['user_det']->nocache = null; $_smarty_tpl->tpl_vars['user_det']->scope = 0;
} else $_smarty_tpl->tpl_vars['user_det'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_user_details(userid()), null, 0);?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb($_smarty_tpl->tpl_vars['user_det']->value);?>
" width="35" height="35">
                                        <p style="display: inline-block"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['userquery']->value->username,15);?>
<br><span id="header_price">$<?php echo number_format((float)($_smarty_tpl->tpl_vars['user_det']->value['balance']),2);?>
 USD</span></p>
									</a>
									<ul class="dropdown-menu">
										<?php if (has_access('admin_access')) {?>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['admin_baseurl']->value;?>
"><?php echo smarty_lang(array('code'=>"admin_area"),$_smarty_tpl);?>
</a></li>
										<?php }?>
										<li><a href="<?php echo cblink(array('name'=>'my_account'),$_smarty_tpl);?>
<?php echo userid(array(),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"my_account"),$_smarty_tpl);?>
</a></li>
										<li><a href="<?php echo cblink(array('name'=>'deposit_fund'),$_smarty_tpl);?>
deposit_fund.php"><?php echo smarty_lang(array('code'=>"deposit_funds"),$_smarty_tpl);?>
</a></li>
										<li><a href="<?php echo cblink(array('name'=>'withdraw_fund'),$_smarty_tpl);?>
withdraw_fund.php"><?php echo smarty_lang(array('code'=>"withdraw_funds"),$_smarty_tpl);?>
</a></li>
										<li><a href="<?php echo cblink(array('name'=>'my_videos'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"manage_videos"),$_smarty_tpl);?>
</a></li>
										<?php echo ANCHOR(array('place'=>"head_audio_dropdown"),$_smarty_tpl);?>

										<li><a href="<?php echo cblink(array('name'=>'channels'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"view_channels"),$_smarty_tpl);?>
</a></li>
										<!-- changes made-->
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_playlists.php?user=<?php echo $_smarty_tpl->tpl_vars['userquery']->value->username;?>
"><?php echo smarty_lang(array('code'=>"my_playlists"),$_smarty_tpl);?>
</a></li>
										<!-- /changes made-->
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/view_channel.php?user=<?php echo $_smarty_tpl->tpl_vars['userquery']->value->username;?>
"><?php echo smarty_lang(array('code'=>"my_channel"),$_smarty_tpl);?>
</a></li>
										<?php echo ANCHOR(array('place'=>'premium_button_link'),$_smarty_tpl);?>

										<li class="divider"></li>
										<li><a href="<?php echo cblink(array('name'=>'logout'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"logout"),$_smarty_tpl);?>
</a></li>
									</ul>
								</li>
								<?php } else { ?>

								<!-- Shown to small devices only Start  @todo : Add condition for logged in user -->
								<li class="navbar-sm-login-links">
									<a class="btn btn-default btn-newacc" href="<?php echo cblink(array('name'=>'signup'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>'create_new_account'),$_smarty_tpl);?>
</a>
								</li>
								<li class="navbar-sm-login-links">
									<a class="btn btn-default btn-login" href="<?php echo cblink(array('name'=>'signup'),$_smarty_tpl);?>
?mode=login"><?php echo smarty_lang(array('code'=>'login'),$_smarty_tpl);?>
</a>
								</li>

								<!-- Ends -->
								<?php }?>
							</ul>
						</div>
					</div>
				</div><!--navbar-collapse-->
			</div>
		</div><!--container-fluid-->
	</nav>
</header>

<script>
	$(document).ready(function(){
		var vidMode = "<?php echo $_smarty_tpl->tpl_vars['vidMode']->value;?>
",
		photoMode = "<?php echo $_smarty_tpl->tpl_vars['photoMode']->value;?>
",
		channelsMode = "<?php echo $_smarty_tpl->tpl_vars['channelsMode']->value;?>
",
		currentDisplay = $('span.search-type').text();
		if (currentDisplay == 'Videos') {
			$('span.search-type').text(vidMode);
		} else if (currentDisplay == 'Channels') {
			$('span.search-type').text(channelsMode);
		} else if (currentDisplay == 'Photos') {
			$('span.search-type').text(photoMode);
		}

		$(".cbsearchtype a").on({
			click: function(e){
				e.preventDefault();
				var prent_li = $(this).parents();
				var theNewVal = $(this).attr('valNow');
				$('.type').val(theNewVal);
				$('.cbsearchtype li').removeClass('active');
				prent_li.addClass('active');
			}
		});

		$('.s-types').on("click", function(){
			var _this = $(this);
			var text = _this.html();
			$('.search-type').html(text);
		});

        jQuery(".clearfix.videos .well.well-info.btn-block").text("No available found");

	});
</script>

<style>
	input[type=radio] {
		position: relative;
		top: -2px;
	}
	#header {
		z-index: 9999!important;
	}
	#left-menu {
		position: fixed;
		top: 60px;
		width: 256px;
		background: #fff;
		color: #000;
		height: calc(100vh - 60px);
	}
	#left-menu ul, .menu-holder .main-links ul {
		list-style: none;
		margin: 10px 10px;
		padding: 10px 20px 0 30px;
	}
	#left-menu ul li, .menu-holder .main-links ul li {
		min-height: 40px;
		display: table!important;
	}
	#left-menu ul li a, .menu-holder .main-links ul li a {
		display: table-cell;
		font-size: 18px;
		vertical-align: middle;
	}
	#left-menu.dark ul li a {
		color: #fff!important;
	}
	#left-menu hr, .main-links hr {
		background: #444;
		display: block!important;
		height: 3px;
		border: none!important;
	}
	#left-menu .form-group, .menu-holder .main-links .form-group {
		margin-left: 40px;
	}
	#left-menu .form-group label, .menu-holder .main-links .form-group label {
		font-size: 16px;
	}
	#left-menu .form-group input[type=radio], .main-links .form-group input[type=radio] {
		position: relative;
		top: -4px;
	}
	.balance_menu {
		font-size: 18px;
		margin-left: 40px;
	}
	#main, .account-container, .manage-page {
		width: calc(100% - 330px);
		position: relative;
		margin-left: 290px;
		padding-top: -40px!important;
	}
	/*#content */
	.main-links {
		display: none!important;
	}
	.main-links #balance_link {
		display: none;
	}
	.main-links .form-group {
		display: none;
	}
	.dark .main-links ul li a {
		color: #fff!important;
	}
	@media only screen and (max-width: 767px) {
		.dark .filter-dropdowns .dropdown > a {
			color: #fff!important;
		}
	}
	section.clearfix {
		position: relative;
	}
	#recent_vids_sec .owl-nav .owl-prev, #recent_ads_sec .owl-nav .owl-prev, #recent_audiobooks_sec .owl-nav .owl-prev, .channel-video .owl-nav .owl-prev, #recent_podcasts_sec .owl-nav .owl-prev {
		position: absolute;
		width: 40px;
		height: 100px;
		background: rgba(0,0,0,0.5)!important;
		top: 50%;
		margin: -100px 0 0;
		left: -20px;
		z-index: 6;
		color: #fff!important;
		font-size: 18px!important;
		line-height: 50px;
		text-align: center;
		padding: 30px 0;
	}
	#recent_vids_sec .owl-nav .owl-next, #recent_ads_sec .owl-nav .owl-next, #recent_audiobooks_sec .owl-nav .owl-next, .channel-video .owl-nav .owl-next, #recent_podcasts_sec .owl-nav .owl-next {
		position: absolute;
		width: 40px;
		height: 100px;
		background: rgba(0,0,0,0.5)!important;
		top: 50%;
		margin: -100px 0 0;
		left: auto;
		right: -40px;
		z-index: 6;
		color: #fff!important;
		font-size: 18px!important;
		line-height: 50px;
		text-align: center;
		padding: 30px 0;
	}
	.videos .owl-item, #recent_ads_sec .owl-item {
		width: 250px!important;
	}
	.videos .owl-item:first-child, #recent_ads_sec .owl-item:first-child {
		width: 0px!important;
	}
	#check_ads {
		margin-bottom: 25px;
	}
	#check_ads label.inline {
		position: relative;
		top: -3px;
		z-index: 1!important;
	}
	span.total_price {
		width: auto;
		height: 20px;
		padding: 0;
		font-size: 18px;
		line-height: 18px;
		text-align: center;
		color: #fff;
		background: none;
		cursor: pointer;
		position: absolute;
		z-index: 3;
		bottom: 9px;
		left: 40px
	}
	span.watch_color {
		width: 20px;
		height: 20px;
		padding: 0;
		font-size: 18px;
		line-height: 18px;
		text-align: center;
		cursor: pointer;
		position: absolute;
		z-index: 3;
		bottom: 10px;
		right: 70px;
		border-radius: 100%;
	}
	.watch_color.blue {
		background: green!important;
	}
	.watch_color.red {
		background: red!important;
	}
	.watch_color.yellow {
		background: yellow!important;
	}
	#header .search .cbsearchtype {
		padding: 0 40px 0 0;
	}
	#header .search #searchTypes {
		display: none;
	}
	#header .search input[type="text"] {
		background: #2d3043;
	}
	#left-menu .menu_icon, .menu-holder .main-links .menu_icon {
		height: 40px;
		width: 40px;
		display: table-cell;
		vertical-align: middle;
	}
	@media (max-width: 992px) {
		#left-menu {
			display: none;
		}
		#main, .account-container, .manage-page, .alert.container {
			width: 100%;
			padding: 0 20px;
			position: relative;
			left: -290px;
		}
		.main-links {
			display: block!important;
		}
		.main-links #balance_link {
			display: table-cell;
		}
		.main-links .form-group {
			display: block;
		}
	}

	.dark {
		color: #fff!important;
		background: #252525;
	}
	header.dark, .myaccount-dd a.dark {
		background: #111!important;
	}
	.dark .cb-box {
		color: #000;
	}
	#left-menu.dark {
		background: #2d3043!important;
		border-right: 1px solid #454554
	}
	#container.dark {
		background: #1f212e;
	}
	.fa-play-circle {
		color: #11e018;
	}
	.fa-volume-up {
		color: #cc34cc;
	}
	.fa-headphones {
		color: #00ffff;
	}
	.fa-microphone {
		color: #ffde77;
	}
</style>

<div id="left-menu" class="dark bright">
	<div class="menu-container">
		<?php if (isset($_smarty_tpl->tpl_vars['head_menu'])) {$_smarty_tpl->tpl_vars['head_menu'] = clone $_smarty_tpl->tpl_vars['head_menu'];
$_smarty_tpl->tpl_vars['head_menu']->value = cb_menu(); $_smarty_tpl->tpl_vars['head_menu']->nocache = null; $_smarty_tpl->tpl_vars['head_menu']->scope = 0;
} else $_smarty_tpl->tpl_vars['head_menu'] = new Smarty_variable(cb_menu(), null, 0);?>
		<ul>
			<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['head_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['menu']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['menu']->iteration++;
?>
			<?php if (mb_strtolower($_smarty_tpl->tpl_vars['menu']->value['name'], 'UTF-8')=='groups') {?>
			<?php continue 1?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['menu']->iteration<6) {?>
			<?php if (mb_strtolower($_smarty_tpl->tpl_vars['menu']->value['this'], 'UTF-8')=='home') {?>
			<?php continue 1?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['menu']->value['this']=="home") {?>
			<?php continue 1?>
			<?php }?>
			<li <?php if (mb_strtolower($_smarty_tpl->tpl_vars['menu']->value['name'], 'UTF-8')==mb_strtolower(@constant('THIS_PAGE'), 'UTF-8')||mb_strtolower($_smarty_tpl->tpl_vars['menu']->value['name'], 'UTF-8')==$_smarty_tpl->tpl_vars['currentPage']->value) {?>class="active"<?php }?>> <span class="menu_icon"><i class="fa fa-play-circle"></i></span> <a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</a></li>
			<?php }?>
			<?php } ?>

			<li>
				<span class="menu_icon"><i class="fa fa-volume-up"></i></span>
				<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/ads.php"><?php echo smarty_lang(array('code'=>"ads"),$_smarty_tpl);?>
</a>
			</li>
			<li>
				<span class="menu_icon"><i class="fa fa-headphones"></i></span>
				<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/audiobooks.php"><?php echo smarty_lang(array('code'=>"audiobooks"),$_smarty_tpl);?>
</a>
			</li>
			<li>
				<span class="menu_icon"><i class="fa fa-microphone"></i></span>
				<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/podcasts.php"><?php echo smarty_lang(array('code'=>"podcasts"),$_smarty_tpl);?>
</a>
			</li>
			<li>
				<span class="menu_icon"><i class="fa fa-sign-in"></i></span>
				<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels.php"><?php echo smarty_lang(array('code'=>"channels"),$_smarty_tpl);?>
</a>
			</li>
			<?php echo ANCHOR(array('place'=>"cb_28_head"),$_smarty_tpl);?>

		</ul>

		<hr>

		<?php if ($_smarty_tpl->tpl_vars['user_det']->value!='') {?>
		<span class="balance_menu">Balance: $<?php echo number_format((float)($_smarty_tpl->tpl_vars['user_det']->value['balance']),2);?>
 USD</span><br><br><br>
		<?php }?>

		<div class="form-group">
			<input type="radio" name="color_scheme" id="dark_theme" value="1" checked onchange="add_dark(this)">
			<label for="dark_theme"><?php echo smarty_lang(array('code'=>"dark_theme"),$_smarty_tpl);?>
</label><br>
			<input type="radio" name="color_scheme" id="bright_theme" value="0" onchange="remove_dark(this)">
			<label for="bright_theme"><?php echo smarty_lang(array('code'=>"light_theme"),$_smarty_tpl);?>
</label>
		</div>

	</div>
</div>

<script>

	var videos = '<?php echo smarty_lang(array('code'=>"menu_videos"),$_smarty_tpl);?>
';
	$(document).ready(function () {
	    var menu_2th = $('#left-menu .menu-container ul li:eq(1)');
	    if ($(menu_2th).find('a').text() == videos) $('#left-menu .menu-container ul li:eq(1)').remove();
    });

    var menu_2th = $('#left-menu .menu-container ul li:eq(1)');
    if ($(menu_2th).find('a').text() == videos) $('#left-menu .menu-container ul li:eq(1)').remove();

    function add_dark(elem) {
        if ($(elem).prop('checked'))
            $('.bright').addClass('dark');
    }

    function remove_dark(elem) {
        if ($(elem).prop('checked'))
            $('.dark').removeClass('dark');
    }
</script>
<?php }} ?>
