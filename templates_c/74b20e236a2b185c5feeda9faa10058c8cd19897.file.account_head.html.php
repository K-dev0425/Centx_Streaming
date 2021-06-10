<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:04:16
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/manage/account_head.html" */ ?>
<?php /*%%SmartyHeaderCode:46297163160bc49403d25f7-48561991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74b20e236a2b185c5feeda9faa10058c8cd19897' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/manage/account_head.html',
      1 => 1622800590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46297163160bc49403d25f7-48561991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'userquery' => 0,
    'videos' => 0,
    'baseurl' => 0,
    'video' => 0,
    'cbvid' => 0,
    'links' => 0,
    'Cbucket' => 0,
    'flagedVideos' => 0,
    'flagedPhotos' => 0,
    'flagedphotos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc494046ebd8_29660385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc494046ebd8_29660385')) {function content_60bc494046ebd8_29660385($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/centx/centx/includes/smartyv3/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/centx/centx/includes/smartyv3/plugins/modifier.truncate.php';
?>
<div class="message">
	<div class="row accountprofile">
		<div class="col-md-10">
			<div class="media">
				<a class="pull-left" href="#">
					<img class="media-object imgobject" src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb($_smarty_tpl->tpl_vars['user']->value);?>
" width="142" alt="...">
				</a>
				<div class="media-body">
					<div class="row">
						<div class="col-md-6 procolor">
							<h4 class="media-heading headcolor"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</h4>
							<b><?php echo smarty_lang(array('code'=>'since:'),$_smarty_tpl);?>
</b> (<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['doj']);?>
)
							<b><?php echo smarty_lang(array('code'=>'last_Login'),$_smarty_tpl);?>
:</b> (<?php echo nicetime($_smarty_tpl->tpl_vars['user']->value['last_logged']);?>
)
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<hr class="newhr1">
<div class="mvideo accountprofile">
	<span class="lead">
		<?php echo smarty_lang(array('code'=>'Latest_Videos'),$_smarty_tpl);?>

	</span>
	<table class="table table-bordered table-striped manageUsersTable">
		<tr>
			<td><i class="icon-facetime-video"></i> <?php echo smarty_lang(array('code'=>"Videos_Details"),$_smarty_tpl);?>
</td>
			<td><?php echo smarty_lang(array('code'=>"option"),$_smarty_tpl);?>
</td>
		</tr>
		<?php if ($_smarty_tpl->tpl_vars['videos']->value) {?>
		
		<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>

		<tr>
			<td>
				<div class="row">
					<div class="col-md-10">
						<div class="row">
							<div class="col-md-3">
							  <a class="manageVid_thumb" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/edit_video.php?vid=<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
">
								<img src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>
" class="img-responsive" width="130" height="80" id="thumbs_<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" class="vthumb" title=""/>
								<span class="duration">(<?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?>)</span>
							   </a>     
							</div>
							<div class="col-md-9">
								<a href="edit_video.php?vid=<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
">
									<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],80);?>
 </a><br>
								<span class="maccountlabels"> <strong><?php echo niceTime($_smarty_tpl->tpl_vars['video']->value['date_added']);?>
</strong>
								<?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
 : <strong><?php echo number_format($_smarty_tpl->tpl_vars['video']->value['views']);?>
</strong></span>
								<div class="labels">
									<?php if ($_smarty_tpl->tpl_vars['video']->value['featured']=='yes') {?><span class="label label-primary"><?php echo smarty_lang(array('code'=>"featured"),$_smarty_tpl);?>
<?php }?></span>
										<span class="label <?php if ($_smarty_tpl->tpl_vars['video']->value['active']=='yes') {?>label-success<?php } else { ?>label-warning<?php }?> mlabel">
											<?php if ($_smarty_tpl->tpl_vars['video']->value['active']=='yes') {?><?php echo smarty_lang(array('code'=>"active"),$_smarty_tpl);?>
<?php } else { ?><?php echo smarty_lang(array('code'=>"inactive"),$_smarty_tpl);?>
<?php }?></span>
										<span class="label <?php if ($_smarty_tpl->tpl_vars['video']->value['status']=='Successful') {?>label-success<?php } else { ?>label-warning<?php }?>">
											<?php if ($_smarty_tpl->tpl_vars['video']->value['status']=='Successful') {?><?php echo smarty_lang(array('code'=>"successful"),$_smarty_tpl);?>
<?php } else { ?><?php echo smarty_lang(array('code'=>"processing"),$_smarty_tpl);?>
<?php }?></span>
										<span class="label label-info">
										   Viewed <?php echo niceTime($_smarty_tpl->tpl_vars['video']->value['last_viewed']);?>
</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="row">
							<?php if ($_smarty_tpl->tpl_vars['video']->value['broadcast']=='public') {?>
							<div class="col-md-1"><i class="icon-globe"></i></div>
							<?php } elseif ($_smarty_tpl->tpl_vars['video']->value['broadcast']!='public') {?>
							<div class="col-md-1"><i class="icon-lock"></i></div>
							<?php }?>
						</div>
						<a href="view_channel.php?user=<?php echo $_smarty_tpl->tpl_vars['video']->value['userid'];?>
"><?php echo $_smarty_tpl->tpl_vars['video']->value['username'];?>
</a>
					</div>
				</div>
			</td>
			<td>
				<div class="dropdown">
					<button id="dropdownMenu1" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
						Actions <i class="caret"></i></button>
					<ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1" role="menu">
						<li><a role="menuitem" tabindex="-1"
							   href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/edit_video.php?vid=<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" class=""><?php echo smarty_lang(array('code'=>"edit_video"),$_smarty_tpl);?>
</a></li>
						<li><a role="menuitem" tabindex="-1"
							   href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/watch_video.php?v=<?php echo $_smarty_tpl->tpl_vars['video']->value['videokey'];?>
"target="_blank"><?php echo smarty_lang(array('code'=>"Watch"),$_smarty_tpl);?>
</a>
						 
					   
						
						<li class="divider"></li>
						<li><a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/myaccount.php?delete_video=<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
"><?php echo smarty_lang(array('code'=>"delete"),$_smarty_tpl);?>
</a>
						</li>
						<?php  $_smarty_tpl->tpl_vars['links'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['links']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cbvid']->value->video_manager_links; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['links']->key => $_smarty_tpl->tpl_vars['links']->value) {
$_smarty_tpl->tpl_vars['links']->_loop = true;
?>
						<?php echo $_smarty_tpl->tpl_vars['cbvid']->value->video_manager_link($_smarty_tpl->tpl_vars['links']->value,$_smarty_tpl->tpl_vars['video']->value);?>

						<?php } ?>
					</ul>
				</div>
			</td>
		</tr>
		<?php } ?>
	</table>
	<?php } else { ?>
	<div align="center"><strong><em><?php echo smarty_lang(array('code'=>"no_videos_found"),$_smarty_tpl);?>
</em></strong></div>
	<?php }?>
</div>
<div class="flaggedtable accountprofile1">
	<table class="table table-bordered table-striped">
		<?php if (has_access("admin_access")) {?>
			<div id="fobjects" class="tab-pane" >
				<div class="widget-box">
					<td>
						<div class="widget-header">
							<h5><i class="glyphicon glyphicon-flag"></i><?php echo smarty_lang(array('code'=>"flagged_obj"),$_smarty_tpl);?>
</h5>
						</div>

						<div class="widget-body">

							<div class="tabbable tabs-left">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active">
										<a data-toggle="tab" href="#fvideos"><?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>
</a>
									</li>
									<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs['photosSection']=='yes') {?>
									<li class="photos">
										<a data-toggle="tab" href="#fphotos"><?php echo smarty_lang(array('code'=>"photos"),$_smarty_tpl);?>
</a>
									</li>
									<?php }?>
								</ul>
								<br>
								<div class="tab-content">
									<div id="fvideos" class="tab-pane active">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['flagedVideos']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total']);
?>
										<div class="row">
											<div class="col-md-3">
												<img src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['flagedVideos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]),$_smarty_tpl);?>
" width="85" height="70" id="thumbs_<?php echo $_smarty_tpl->tpl_vars['flagedVideos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['videoid'];?>
" title=""/>
											</div>
											<div class="col-md-6 fvideos">
												<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['flagedVideos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['title'],50);?>

											</div>

											<div class="col-md-7 fvideos">
												<label class="label label-danger">Uploaded  <?php echo niceTime($_smarty_tpl->tpl_vars['flagedVideos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['date_added']);?>
</label>
												<label class="label label-default"> <?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
 : <?php echo number_format($_smarty_tpl->tpl_vars['flagedVideos']->value['views']);?>
</label>
												<label class="label label-primary"> Flags:<?php echo $_smarty_tpl->tpl_vars['flagedVideos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['total_flags'];?>
</label>
											</div>
										</div>
										<hr class="newhr">
										<?php endfor; endif; ?>
									</div>
									<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs['photosSection']=='yes') {?>
									<div id="fphotos" class="tab-pane">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['flagedPhotos']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total']);
?>
										<div class="row">
											<div class="col-md-3">
												<img src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['flagedPhotos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]),$_smarty_tpl);?>
" width="85" height="70" id="thumbs_<?php echo $_smarty_tpl->tpl_vars['flagedPhotos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['photoid'];?>
" title=""/>
											</div>
											<div class="col-md-6 fusers">
												<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['flagedphotos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['title'],50);?>

											</div>
											<div class="col-md-2">
												<strong class="btn btn-primary btn-xs pull-right"> Flags:<?php echo $_smarty_tpl->tpl_vars['flagedPhotos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['total_flags'];?>
</strong>
											</div>
											<div class="col-md-7 fusers">
												<label class="label label-danger">Uploaded  <?php echo niceTime($_smarty_tpl->tpl_vars['flagedPhotos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['date_added']);?>
</label>
												<label class="label label-default"> <?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
 : <?php echo number_format($_smarty_tpl->tpl_vars['flagedPhotos']->value['views']);?>
</label>

											</div>
										</div>
										<?php endfor; endif; ?>
									</div>
									<?php }?>
								</div>
							</div>
							<!-- /widget-main -->
						</div><!-- /widget-body -->
				</div>
			</div>
		<?php }?>
	</table>
</div>




<div class="col-md-12">
	<div class="padding38">
		<?php if ($_smarty_tpl->tpl_vars['user']->value['userid']==userid()) {?>
		<button class="btn btn-primary new1" style="background-color: #000000;color: white">
			<span class="line-height-1 bigger-170"><?php echo $_smarty_tpl->tpl_vars['user']->value['total_videos'];?>
</span>
			<br>
			<span class="line-height-1 smaller-90 new1"> <?php echo smarty_lang(array('code'=>'Videos'),$_smarty_tpl);?>
 </span>
		</button>
			<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs['photosSection']=='yes') {?>
			<span class="btn btn-primary new1" style="background-color: #000000;color: #ffffff">
				<span class="line-height-1 bigger-170"><?php echo $_smarty_tpl->tpl_vars['user']->value['total_photos'];?>
</span>
				<br>
				<span class="line-height-1 smaller-90 new1"> <?php echo smarty_lang(array('code'=>"photos"),$_smarty_tpl);?>
 </span>
			</span>
			<?php }?>
			<span class="btn btn-primary new1" style="background-color: #000000;color: #ffffff">
				<span class="line-height-1 bigger-170"><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['num_visits']);?>
</span>
				<br>
				<span class="line-height-1 smaller-90 new1"> <?php echo smarty_lang(array('code'=>'total_logins'),$_smarty_tpl);?>
 </span>
			</span>
			<span class="btn btn-primary new1" style="background-color: #000000;color: #ffffff">
				<span class="line-height-1 bigger-170"><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['total_watched']);?>
</span>
				<br>
				<span class="line-height-1 smaller-90 new1"> <?php echo smarty_lang(array('code'=>'Watched'),$_smarty_tpl);?>
 </span>
			</span>
			<span class="btn btn-primary new1" style="background-color: #000000;color: #ffffff">
				<span class="line-height-1 bigger-170"><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['total_comments']);?>
</span>
				<br>
				<span class="line-height-1 smaller-90 new1"> <?php echo smarty_lang(array('code'=>'comments'),$_smarty_tpl);?>
 </span>
			</span>
			<span class="btn btn-primary new1" style="background-color: #000000;color: #ffffff">
				<span class="line-height-1 bigger-170"><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['total_collections']);?>
</span>
				<br>
				<span class="line-height-1 smaller-90 new1"> <?php echo smarty_lang(array('code'=>'collections'),$_smarty_tpl);?>
 </span>
			</span>
			<span class="btn btn-primary new1" style="background-color: #000000; color: #ffffff">
				<span class="line-height-1 bigger-170"><?php echo $_smarty_tpl->tpl_vars['user']->value['profile_hits'];?>
</span>
				<br>
				<span class="line-height-1 smaller-90 new1"> <?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
 </span>
			</span>
			<span class="btn btn-primary new1" style="background-color: #000000;color: #ffffff">
				<span class="line-height-1 bigger-170"><?php echo $_smarty_tpl->tpl_vars['user']->value['subscribers'];?>
</span>
				<br>
				<span class="line-height-1 smaller-90 new1"> <?php echo smarty_lang(array('code'=>'subscribers'),$_smarty_tpl);?>
 </span>
			</span>
		<?php }?>
	</div>
</div>

<style type="text/css">
	.label {
		font-size: 85%;
	}
</style><?php }} ?>
