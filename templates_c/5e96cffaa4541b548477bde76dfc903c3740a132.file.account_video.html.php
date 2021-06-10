<?php /* Smarty version Smarty-3.1.15, created on 2021-06-10 00:29:48
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/manage/account_video.html" */ ?>
<?php /*%%SmartyHeaderCode:106595367260be969a8aad73-40913343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e96cffaa4541b548477bde76dfc903c3740a132' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/manage/account_video.html',
      1 => 1623284987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106595367260be969a8aad73-40913343',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60be969a978d56_56157654',
  'variables' => 
  array (
    'control' => 0,
    'mode' => 0,
    'video' => 0,
    'cbvid' => 0,
    'user' => 0,
    'baseurl' => 0,
    'vdo' => 0,
    'links' => 0,
    'pid' => 0,
    'imageurl' => 0,
    'ajax_load' => 0,
    'theme' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60be969a978d56_56157654')) {function content_60be969a978d56_56157654($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/centx/centx/includes/smartyv3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/centx/centx/includes/smartyv3/plugins/modifier.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['control']->value==''||$_smarty_tpl->tpl_vars['control']->value=='view') {?>
<?php if ($_smarty_tpl->tpl_vars['mode']->value=='') {?><?php if (isset($_smarty_tpl->tpl_vars['mode'])) {$_smarty_tpl->tpl_vars['mode'] = clone $_smarty_tpl->tpl_vars['mode'];
$_smarty_tpl->tpl_vars['mode']->value = 'favorites'; $_smarty_tpl->tpl_vars['mode']->nocache = null; $_smarty_tpl->tpl_vars['mode']->scope = 0;
} else $_smarty_tpl->tpl_vars['mode'] = new Smarty_variable('favorites', null, 0);?><?php }?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['control']->value=='full') {?>
<tr>
	<td>
		<div class="col-md-3">
			<a class="manageVid_thumb" href="edit_video.php?vid=<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
">
				<?php if ($_smarty_tpl->tpl_vars['video']->value['background_image']!='') {?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['video']->value['background_image'];?>
" class="img-responsive audio_image" width="130" height="80" id="thumbs_<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" class="vthumb" title="" onload="set_image_ratio(this)" onresize="set_image_ratio(this)" />
				<?php } else { ?>
				<img src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>
" class="img-responsive" width="130" height="80" id="thumbs_<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" class="vthumb" title=""/>
				<?php }?>
				<span class="duration">(<?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?>)</span>
				</a>
			</div>
			<div class="col-md-9 text-left video_content">
				<a href="edit_video.php?vid=<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" style="color: #337ab7"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],80);?>
</a>
				<br>
				<span class="maccountlabels">
					<strong><?php echo niceTime($_smarty_tpl->tpl_vars['video']->value['date_added']);?>
</strong> <br>
					<?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
 : <strong><?php echo number_format($_smarty_tpl->tpl_vars['video']->value['views']);?>
</strong> <br>
					<!--<strong>fdfdfdf</strong>-->
				</span>
				<!--<div class="labels">-->
					<!--<?php if ($_smarty_tpl->tpl_vars['video']->value['featured']=='yes') {?>-->
					<!--<span class="label label-primary">Featured<?php } else { ?><?php }?></span>-->
					<!--<span class="label <?php if ($_smarty_tpl->tpl_vars['video']->value['active']=='yes') {?>label-success<?php } else { ?>label-warning<?php }?> mlabel"><?php if ($_smarty_tpl->tpl_vars['video']->value['active']=='yes') {?><?php echo smarty_lang(array('code'=>'active'),$_smarty_tpl);?>
<?php } else { ?><?php echo smarty_lang(array('code'=>'inactive'),$_smarty_tpl);?>
<?php }?></span>-->
					<!--<span class="label <?php if ($_smarty_tpl->tpl_vars['video']->value['status']=='Successful') {?>label-success<?php } else { ?>label-warning<?php }?>"><?php if ($_smarty_tpl->tpl_vars['video']->value['status']=='Successful') {?><?php echo smarty_lang(array('code'=>'successful'),$_smarty_tpl);?>
<?php } else { ?><?php echo smarty_lang(array('code'=>'processing'),$_smarty_tpl);?>
<?php }?></span>-->
					<!--<span class="label label-info"><?php echo smarty_lang(array('code'=>'viewed'),$_smarty_tpl);?>
 <?php echo niceTime($_smarty_tpl->tpl_vars['video']->value['last_viewed']);?>
</span>-->
				<!--</div>-->
			</div>
		</td>

		

	<td>
		<?php if (isset($_smarty_tpl->tpl_vars['vdo'])) {$_smarty_tpl->tpl_vars['vdo'] = clone $_smarty_tpl->tpl_vars['vdo'];
$_smarty_tpl->tpl_vars['vdo']->value = $_smarty_tpl->tpl_vars['cbvid']->value->get_video($_smarty_tpl->tpl_vars['video']->value['videoid']); $_smarty_tpl->tpl_vars['vdo']->nocache = null; $_smarty_tpl->tpl_vars['vdo']->scope = 0;
} else $_smarty_tpl->tpl_vars['vdo'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbvid']->value->get_video($_smarty_tpl->tpl_vars['video']->value['videoid']), null, 0);?>
		<div class="dropdown text-center">
			<button id="dropdownMenu1" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
				<?php echo smarty_lang(array('code'=>'vdo_actions'),$_smarty_tpl);?>
 <i class="caret"></i></button>
				<ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1" role="menu">
					<?php if ($_smarty_tpl->tpl_vars['cbvid']->value->is_video_owner($_smarty_tpl->tpl_vars['video']->value['videoid'],$_smarty_tpl->tpl_vars['user']->value['userid'])||has_access('admin_access')) {?>
					<li><a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/edit_video.php?vid=<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" class=""><?php echo smarty_lang(array('code'=>'edit_video'),$_smarty_tpl);?>
</a></li>

					<li><a role="menuitem" tabindex="-1" href="javascript:_cb.Confirm_Delete('?vid_delete=<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
')"><?php echo smarty_lang(array('code'=>'del_video'),$_smarty_tpl);?>
</a>
					</li>
					<?php }?>
					<li><a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/watch_video.php?v=<?php echo $_smarty_tpl->tpl_vars['video']->value['videokey'];?>
"target="_blank"><?php echo smarty_lang(array('code'=>'watch'),$_smarty_tpl);?>
</a>
					</li>

					<?php if ($_smarty_tpl->tpl_vars['vdo']->value['question_1']!=''||$_smarty_tpl->tpl_vars['vdo']->value['question_1']!=null) {?>
					<li><a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/video_survey_results.php?vid=<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
">Survey Result</a></li>
					<?php }?>


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
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['control']->value=='playlist') {?>
	<tr>
		<td width="25">
			<input type="checkbox" name="check_playlist_items[]" id="check_vid-<?php echo $_smarty_tpl->tpl_vars['video']->value['playlist_item_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['playlist_item_id'];?>
" />
		</td>
		<td>
			<div>
				<img class="edit-img-thumbnail" src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>
">
				<p class="marginTop"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],100);?>
</p>
				<div class="btn-group show">
					<a class="btn btn-primary btn-sm" href="<?php echo videoSmartyLink(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>
">view</a>
					<a class="btn btn-primary btn-sm" href="javascript:void(0)"  onmousedown="delete_video('delete_icon_a','<?php echo $_smarty_tpl->tpl_vars['video']->value['playlist_item_id'];?>
','<?php echo smarty_lang(array('code'=>"remove_playlist_item_confirm"),$_smarty_tpl);?>
','?mode=edit_playlist&pid=<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
&amp;delete_item=<?php echo $_smarty_tpl->tpl_vars['video']->value['playlist_item_id'];?>
')" id="delete_icon_a-<?php echo $_smarty_tpl->tpl_vars['video']->value['playlist_item_id'];?>
">
						delete
					</a>
				</div>
			</div>
			<a href="javascript:void(0)"  onmousedown="delete_video('delete_icon','<?php echo $_smarty_tpl->tpl_vars['video']->value['playlist_item_id'];?>
','<?php echo smarty_lang(array('code'=>"remove_playlist_item_confirm"),$_smarty_tpl);?>
','?mode=edit_playlist&pid=<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
&amp;delete_item=<?php echo $_smarty_tpl->tpl_vars['video']->value['playlist_item_id'];?>
')" id="delete_icon-<?php echo $_smarty_tpl->tpl_vars['video']->value['playlist_item_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/dot.gif" border="0" class="delete_icon" /></a>
		</td>
		<td width="100">
			<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['video']->value['date_added']);?>

		</td>
		<td width="100">
			<?php echo number_format($_smarty_tpl->tpl_vars['video']->value['views']);?>

		</td>
		<td width="100">
			<?php echo number_format($_smarty_tpl->tpl_vars['video']->value['comments_count']);?>

		</td>
	</tr>
	<?php }?>


	<?php if ($_smarty_tpl->tpl_vars['control']->value=='basic') {?>

	<div class="clearfix">
		<input type="checkbox" name="check_vid[]" id="check_vid-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" />
	</div>

	<div class="clearfix">
		<a href="<?php echo videoSmartyLink(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>
">
			<img  src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>
" width="130" height="80" id="thumbs_<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" class="vthumb" />
			<p class="marginTop"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],100);?>
</p>
		</a>
	</div>

	<div class="clearfix"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['video']->value['date_added']);?>
</div>
	<div class="clearfix"><?php echo number_format($_smarty_tpl->tpl_vars['video']->value['views']);?>
</div>
	<div class="clearfix"><?php echo number_format($_smarty_tpl->tpl_vars['video']->value['comments_count']);?>
</div>

	<?php }?>
<!-- changes made -->
	<?php if ($_smarty_tpl->tpl_vars['control']->value=='onWatch') {?>
	<div class="featured-video clearfix" <?php if ($_smarty_tpl->tpl_vars['ajax_load']->value=="yes") {?> style="display: none" <?php }?> id="<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
">
		<a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
">
			<div class="video_thumb">
				<img src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'128x80'),$_smarty_tpl);?>
" <?php echo ANCHOR(array('place'=>"video_thumb",'data'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>
 class="img-responsive">
				<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/thumb-ratio.png" alt="" class="thumb-ratio">
				<time datetime="2016-15-03" class="duration">
					<?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?>
				</time>
			</div> <!--VIDEO_THUMB END-->
		</a>
		<div class="details_block">
			<strong class="title"><a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],50);?>
</a></strong>
			<div class="views-date">
				<span><?php echo $_smarty_tpl->tpl_vars['video']->value['views'];?>
&nbsp;<?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
</span>
			</div>
		</div>
	</div>
<script>
	if('<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
'=='<?php echo $_smarty_tpl->tpl_vars['vdo']->value['videoid'];?>
'){
		$("#<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
").css("background", "#f1ecec");
	}

</script>
<?php }?>	
<!-- changes made -->

<script>
    $(document).ready(function () {
        // set_image_ratio();
    });

    function set_image_ratio(elem) {
        // var audio_images = jQuery('.audio_image');
        // for (var i=0;i<audio_images.length;i++) {
            var width = jQuery(elem).width();
            var height = parseFloat(width) * 0.625;
            jQuery(elem).height(height);
        // }
    }
</script><?php }} ?>
