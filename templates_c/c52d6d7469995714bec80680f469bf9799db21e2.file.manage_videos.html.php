<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 21:58:20
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/manage_videos.html" */ ?>
<?php /*%%SmartyHeaderCode:136655938260bd44fce50c51-67426537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c52d6d7469995714bec80680f469bf9799db21e2' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/manage_videos.html',
      1 => 1622800580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136655938260bd44fce50c51-67426537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'mode' => 0,
    'uservids' => 0,
    'bg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bd44fcee5275_02698442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bd44fcee5275_02698442')) {function content_60bd44fcee5275_02698442($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
<div class="container manage-page marginBottom">
	<div class="cb-box">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 hidden-xs">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/userMenuLeft.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>

			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<?php if ($_smarty_tpl->tpl_vars['mode']->value=='uploaded') {?>
				<div class="tabbable managevideo-tabarea">
					<ul class="nav nav-tabs manageTabs" id="myTab2">
						<li class="active">
							<a data-toggle="tab" href="#myvideos">
								<?php echo smarty_lang(array('code'=>'upload_video'),$_smarty_tpl);?>

							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="myvideos" class="tab-pane active">
							<?php if ($_smarty_tpl->tpl_vars['mode']->value=='uploaded') {?>
							<header class="clearfix manage-tab-header">
								<div class="no-padding col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<h2><?php echo smarty_lang(array('code'=>'com_manage_vids'),$_smarty_tpl);?>
</h2>
								</div>
								
								<div class="pull-right col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="row">
										<form class="clearfix searchBox" id="form1" name="form1" method="get" action="">
											<div class="input-group">
												<input name="query" type="text" class="form-control" id="query" value="<?php echo form_val($_GET['query']);?>
" />
												<span class="input-group-btn">
													<input name="mode" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" type="hidden" />
													<button class="btn btn-primary" type="submit" name="input"><?php echo smarty_lang(array('code'=>'search'),$_smarty_tpl);?>
</button>
												</span>
											</div>
										</form>
									</div>
								</div>
							</header>
							<table class="table table-bordered table-striped manageUsersTable">
								<tr>
									<td><i class="icon-facetime-video"></i> Videos Details</td>
									
									<td class="text-center">Option</td>
								</tr>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['name'] = 'uvid';
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['uservids']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total']);
?>
								<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/account_video.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['uservids']->value[$_smarty_tpl->getVariable('smarty')->value['section']['uvid']['index']],'control'=>'full','bg'=>$_smarty_tpl->tpl_vars['bg']->value), 0);?>

								<?php endfor; else: ?>
								<div><strong><em><?php echo smarty_lang(array('code'=>"you_dont_have_videos"),$_smarty_tpl);?>
</em></strong></div>
								<?php endif; ?>
							</table>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							<?php }?>
						</div>
						<div id="fvideos" class="tab-pane" style="display: none">
							<?php if ($_smarty_tpl->tpl_vars['mode']->value=='favorites') {?>
							<h2><?php echo smarty_lang(array('code'=>'com_manage_fav'),$_smarty_tpl);?>
</h2>
							<!-- Manage Uploaded Videos Start -->
							<div>
								<form class="form-inline clearfix searchBox" id="form1" name="form1" method="get" action="">
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
											<div class="col-md-11">
												<div class="form-group">
													<input name="query" type="text" class="form-control" id="query" value="<?php echo form_val($_GET['query']);?>
" />
												</div>
											</div>
											<div class="col-md-1">
												<div class="form-group text-right">
													<input name="input" type="submit" class="btn btn-primary" value="<?php echo smarty_lang(array('code'=>'search'),$_smarty_tpl);?>
"/>
													<input name="mode" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" type="hidden" />
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<form name="videos_manager" method="post">
								<table class="table table-bordered table-striped manageUsersTable">
									<tr>
										<td><i class="icon-facetime-video"></i> <?php echo smarty_lang(array('code'=>"vdo_video_details"),$_smarty_tpl);?>
</td>
										<td><?php echo smarty_lang(array('code'=>"option"),$_smarty_tpl);?>
</td>
									</tr>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['name'] = 'uvid';
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['uservids']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total']);
?>
									<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/account_video.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['uservids']->value[$_smarty_tpl->getVariable('smarty')->value['section']['uvid']['index']],'control'=>'full','bg'=>$_smarty_tpl->tpl_vars['bg']->value), 0);?>

									<?php endfor; else: ?>
									<div><strong><em><?php echo smarty_lang(array('code'=>'you_dont_hv_fav_vids'),$_smarty_tpl);?>
</em></strong></div>
									<?php endif; ?>
								</table>
								<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							</form>
							<?php }?>
						</div>
						</div>
					</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['mode']->value=='favorites') {?>
				<div class="tabbable">
					<ul class="nav nav-tabs" id="myTab2">
						<li class="active">

							<a data-toggle="tab" href="#fvideos">
								<h5><?php echo smarty_lang(array('code'=>'Favorite Videos'),$_smarty_tpl);?>
</h5>
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="fvideos" class="tab-pane" style="display: none">
							<?php if ($_smarty_tpl->tpl_vars['mode']->value=='favorites') {?>
							<h2><?php echo smarty_lang(array('code'=>'com_manage_fav'),$_smarty_tpl);?>
</h2>
							<!-- Manage Uploaded Videos Start -->
							<div>
								<form class="form-inline clearfix searchBox" id="form1" name="form1" method="get" action="">
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
											<div class="col-md-11">
												<div class="form-group">
													<input name="query" type="text" class="form-control" id="query" value="<?php echo form_val($_GET['query']);?>
" />
												</div>
											</div>
											<div class="col-md-1">
												<div class="form-group text-right">
													<input name="input" type="submit" class="btn btn-primary" value="<?php echo smarty_lang(array('code'=>'search'),$_smarty_tpl);?>
"/>
													<input name="mode" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" type="hidden" />
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<form name="videos_manager" method="post">
								<table class="table table-bordered table-striped manageUsersTable">
									<tr>
										<td><i class="icon-facetime-video"></i> <?php echo smarty_lang(array('code'=>"vdo_video_details"),$_smarty_tpl);?>
</td>
										<td><?php echo smarty_lang(array('code'=>"option"),$_smarty_tpl);?>
</td>
									</tr>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['name'] = 'uvid';
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['uservids']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total']);
?>
									<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/account_video.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['uservids']->value[$_smarty_tpl->getVariable('smarty')->value['section']['uvid']['index']],'control'=>'full','bg'=>$_smarty_tpl->tpl_vars['bg']->value), 0);?>

									<?php endfor; else: ?>
									<div><strong><em><?php echo smarty_lang(array('code'=>'you_dont_hv_fav_vids'),$_smarty_tpl);?>
</em></strong></div>
									<?php endif; ?>
								</table>
								<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							</form>
							<?php }?>
						</div>
					</div>
				</div>

				<header class="clearfix manage-tab-header">
					<div class="no-padding col-lg-6 col-md-6 col-sm-12">
						<h2><?php echo smarty_lang(array('code'=>'com_manage_fav'),$_smarty_tpl);?>
</h2>
					</div>
					<div class="pull-right col-lg-6 col-md-6 col-sm-12">
						<div class="row">
							<form class="clearfix searchBox" id="form1" name="form1" method="get" action="">
								<div class="input-group">
									<input name="query" type="text" class="form-control" id="query" value="<?php echo form_val($_GET['query']);?>
" />
									<span class="input-group-btn">
										<input name="mode" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" type="hidden" />
										<input name="input" type="submit" class="btn btn-primary" value="<?php echo smarty_lang(array('code'=>'search'),$_smarty_tpl);?>
"/>
									</span>
								</div>
							</form>
						</div>
					</div>
				</header>
				<!-- Manage Uploaded Videos Start -->
				
				<form name="videos_manager" method="post">
					<table class="table table-bordered table-striped manageUsersTable">
						<tr>
							<td><i class="icon-facetime-video"></i> Videos Details</td>
							<td>Option</td>
						</tr>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['name'] = 'uvid';
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['uservids']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total']);
?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/account_video.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['uservids']->value[$_smarty_tpl->getVariable('smarty')->value['section']['uvid']['index']],'control'=>'full','bg'=>$_smarty_tpl->tpl_vars['bg']->value), 0);?>

						<?php endfor; else: ?>
						<div><strong><em><?php echo smarty_lang(array('code'=>'you_dont_hv_fav_vids'),$_smarty_tpl);?>
</em></strong></div>
						<?php endif; ?>
					</table>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</form>
				<?php }?>
			</div>
		</div>
	</div>
</div><?php }} ?>
