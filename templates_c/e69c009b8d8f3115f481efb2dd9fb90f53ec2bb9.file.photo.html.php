<?php /* Smarty version Smarty-3.1.15, created on 2021-06-07 04:31:53
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/photo.html" */ ?>
<?php /*%%SmartyHeaderCode:134667997560bda1391217f6-18326493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e69c009b8d8f3115f481efb2dd9fb90f53ec2bb9' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/photo.html',
      1 => 1622800588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134667997560bda1391217f6-18326493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_type' => 0,
    'photo' => 0,
    'cbphoto' => 0,
    'userquery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bda139267177_54251901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bda139267177_54251901')) {function content_60bda139267177_54251901($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/centx/centx/includes/smartyv3/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['display_type']->value=='') {?>
<div class="item-photo col-lg-4 col-md-4 col-sm-6 col-xs-6">
	<a class="photo-holder" href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
">
		<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'size'=>'l','class'=>'img-responsive photo-land','output'=>'html'),$_smarty_tpl);?>

		<i class="icon-zoom"></i>
	</a>
	<div class="photo-info">
		<?php if ($_smarty_tpl->tpl_vars['photo']->value['photo_title']=='no-tag') {?>
			<strong><a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
">no-title</a></strong>
		<?php } else { ?>
			<strong><a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['photo_title'],50);?>
</a></strong>
		<?php }?>
		<span><?php echo smarty_lang(array('code'=>"by"),$_smarty_tpl);?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['photo']->value['userid']);?>
"><?php echo $_smarty_tpl->tpl_vars['photo']->value['username'];?>
</a></span>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=="default_photo") {?>
	<div class="photoAppending">
		<a class="photo-holder" href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
">
			<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'size'=>'l','class'=>'img-responsive photo-land','output'=>'html'),$_smarty_tpl);?>

			<i class="icon-zoom"></i>
		</a>
		<div class="photo-info">
			<?php if ($_smarty_tpl->tpl_vars['photo']->value['photo_title']=='no-tag') {?>
				<strong><a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
">no-title</a></strong>
			<?php } else { ?>
				<strong><a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['photo_title'],30);?>
</a></strong>
			<?php }?>
			<span><?php echo smarty_lang(array('code'=>"by"),$_smarty_tpl);?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['photo']->value['userid']);?>
"><?php echo $_smarty_tpl->tpl_vars['photo']->value['username'];?>
</a></span>
		</div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=="view_channelAjax") {?>
<div style="display: none" class="item-photo col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<a class="photo-holder" href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
">
		<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'size'=>'l','class'=>'img-responsive photo-land','output'=>'html'),$_smarty_tpl);?>

		<i class="icon-zoom"></i>
	</a>
	<div class="photo-info">
		<?php if ($_smarty_tpl->tpl_vars['photo']->value['photo_title']=='no-tag') {?>
			<strong><a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
">no-title</a></strong>
		<?php } else { ?>
			<strong><a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['photo_title'],50);?>
</a></strong>
		<?php }?>
		<span><?php echo smarty_lang(array('code'=>"by"),$_smarty_tpl);?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['photo']->value['userid']);?>
"><?php echo $_smarty_tpl->tpl_vars['photo']->value['username'];?>
</a></span>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=="user_photos") {?>
	<a class="photo-holder" href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
">
		<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'size'=>'l','class'=>'img-responsive photo-land','output'=>'html'),$_smarty_tpl);?>

		<i class="icon-zoom"></i>
	</a>
	<div class="photo-info">
		<?php if ($_smarty_tpl->tpl_vars['photo']->value['photo_title']=='no-tag') {?>
			<strong><a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
">no-title</a></strong>
		<?php } else { ?>
			<strong><a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['photo_title'],50);?>
</a></strong>
		<?php }?>
		<span><?php echo smarty_lang(array('code'=>"by"),$_smarty_tpl);?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['photo']->value['userid']);?>
"><?php echo $_smarty_tpl->tpl_vars['photo']->value['username'];?>
</a></span>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=="featuredPhoto_sidebar") {?>
	<a class="photo-holder" href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
">
		<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'size'=>'l','class'=>'img-responsive photo-land','output'=>'html'),$_smarty_tpl);?>

		<i class="icon-zoom"></i>
	</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=="search_photos") {?>
	<a class="searchresult-photo" href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
">
		<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'size'=>'l','class'=>'img-responsive photo-land','output'=>'html'),$_smarty_tpl);?>

		<div class="hover hidden-xs hidden-sm">
			<i class="icon-zoom"></i>
		</div>
	</a>
	<div class="photo-info">
		<?php if ($_smarty_tpl->tpl_vars['photo']->value['photo_title']=='no-tag') {?>
			<strong><a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
">no-title</a></strong>
		<?php } else { ?>
			<strong><a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['photo_title'],50);?>
</a></strong>
		<?php }?>
		<span><?php echo smarty_lang(array('code'=>"by"),$_smarty_tpl);?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['photo']->value['userid']);?>
"><?php echo $_smarty_tpl->tpl_vars['photo']->value['username'];?>
</a></span>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=='related_photos') {?>
	<div class="relatedPhotos clearfix">
		<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
"><?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'output'=>'html','width'=>'120','class'=>'photoThumbBox moveL','style'=>'margin-right:5px;'),$_smarty_tpl);?>
</a>
		<div class="photoTitle" style="margin-bottom:5px;"><a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['photo_title'],15);?>
</a></div>
		<span class="photoInfo"><?php echo number_format($_smarty_tpl->tpl_vars['photo']->value['views']);?>
 <?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
 <br/> <?php echo $_smarty_tpl->tpl_vars['photo']->value['total_comments'];?>
 <?php echo smarty_lang(array('code'=>"comments"),$_smarty_tpl);?>
</span>
		<?php echo show_rating(array('rating'=>$_smarty_tpl->tpl_vars['photo']->value['rating'],'total'=>'10','class'=>'rating moveL'),$_smarty_tpl);?>

	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=="relatedPhoto_sidebar") {?>
	<a class="photo-holder" href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
">		
		<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'output'=>'html','size'=>'l','class'=>'img-responsive'),$_smarty_tpl);?>

		<i class="icon-zoom"></i>
	</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=='subscription') {?>
	<div class="grid_view clearfix" style="width:auto; margin-right:4px;">
		<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
"><?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'output'=>'html','class'=>'photoThumbBox','width'=>'110'),$_smarty_tpl);?>
</a>
		<div class="photoTitle" style="margin:5px 0px; font:bold 11px Arial;">
		<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['photo_title'],15);?>
</a></div> 
		<?php echo show_rating(array('rating'=>$_smarty_tpl->tpl_vars['photo']->value['rating'],'total'=>'10','class'=>'rating'),$_smarty_tpl);?>

		<div style="font-size:10px; margin:2px;"><?php echo number_format($_smarty_tpl->tpl_vars['photo']->value['views']);?>
 <?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
</div>
		<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['photo']->value);?>
" style="font:bold 10px Arial; text-decoration:none;"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['username'],20);?>
</a>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=="side_photos") {?>
	<div style="display:inline-block; *display:inline; vertical-align:middle; padding:0 8px 5px 0px;">
		<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
"><?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'output'=>'html','width'=>'82','class'=>'photoThumbBox'),$_smarty_tpl);?>
</a>
		<div class="photoTitle" style="font:bold 10px Arial; margin:1px 0px">
		<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['photo_title'],15);?>
</a>
		</div>
	<div class="watch_video_box_details">
		<span style="color:#666; font:normal 10px Arial;"><?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
: <?php echo number_format($_smarty_tpl->tpl_vars['photo']->value['views']);?>
</span><br>
		<a style="font:bold 10px Arial; text-decoration:none;" href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['photo']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['username'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['photo']->value['username'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['username'],12);?>
</a>
	</div>        
	</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['display_type']->value=="side_photos_viewed") {?>
	<div style="display:inline-block; *display:inline; vertical-align:middle; padding:0 8px 5px 0px;">
		<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
"><?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'output'=>'html','width'=>"255",'height'=>"100",'class'=>'cb_img_thum'),$_smarty_tpl);?>
</a>
		<div class="photoTitle pull-left" style="font:bold 10px Arial; margin:1px 0px">
		<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['photo_title'],15);?>
</a>
		</div>
	<div class="watch_video_box_details pull-right">
		<span style="color:#666; font:normal 10px Arial;"><?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
: <?php echo number_format($_smarty_tpl->tpl_vars['photo']->value['views']);?>
</span>
	</div>        
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=="channel_page") {?>
	<li class="itemBox" onclick="loadObject(this,'photos','<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
','viewingArea')">
		<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'output'=>'html','width'=>'110','height'=>'64','size'=>'m','style'=>'display:block;margin:0px auto;'),$_smarty_tpl);?>

	</li> <!-- itemBox <?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_key'];?>
 end -->
<?php }?><?php }} ?>
