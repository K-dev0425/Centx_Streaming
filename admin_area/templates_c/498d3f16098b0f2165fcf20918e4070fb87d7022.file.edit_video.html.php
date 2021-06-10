<?php /* Smarty version Smarty-3.1.15, created on 2021-06-09 19:08:01
         compiled from "/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/edit_video.html" */ ?>
<?php /*%%SmartyHeaderCode:76163887860c111915c7cd0-61361707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '498d3f16098b0f2165fcf20918e4070fb87d7022' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/edit_video.html',
      1 => 1622800750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76163887860c111915c7cd0-61361707',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'Upload' => 0,
    'modedata' => 0,
    'cbvid' => 0,
    'links' => 0,
    'flagedVideos' => 0,
    'u' => 0,
    'userquery' => 0,
    'vidthumbs' => 0,
    'vid_thumb' => 0,
    'custom_upload_fields' => 0,
    'field' => 0,
    'formObj' => 0,
    'video_fields' => 0,
    'field_group' => 0,
    'comments' => 0,
    'comment' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60c111917631a3_79913916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c111917631a3_79913916')) {function content_60c111917631a3_79913916($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/centx/centx/includes/smartyv3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/centx/centx/includes/smartyv3/plugins/modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['custom_upload_fields'])) {$_smarty_tpl->tpl_vars['custom_upload_fields'] = clone $_smarty_tpl->tpl_vars['custom_upload_fields'];
$_smarty_tpl->tpl_vars['custom_upload_fields']->value = $_smarty_tpl->tpl_vars['Upload']->value->load_custom_upload_fields($_smarty_tpl->tpl_vars['data']->value,true); $_smarty_tpl->tpl_vars['custom_upload_fields']->nocache = null; $_smarty_tpl->tpl_vars['custom_upload_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['custom_upload_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['Upload']->value->load_custom_upload_fields($_smarty_tpl->tpl_vars['data']->value,true), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['video_fields'])) {$_smarty_tpl->tpl_vars['video_fields'] = clone $_smarty_tpl->tpl_vars['video_fields'];
$_smarty_tpl->tpl_vars['video_fields']->value = $_smarty_tpl->tpl_vars['Upload']->value->load_video_fields($_smarty_tpl->tpl_vars['data']->value); $_smarty_tpl->tpl_vars['video_fields']->nocache = null; $_smarty_tpl->tpl_vars['video_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['video_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['Upload']->value->load_video_fields($_smarty_tpl->tpl_vars['data']->value), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['data']->value['title']!='') {?>

<form action="" method="post" name="edit_video" id="edit_video" enctype="multipart/form-data">
<div class="row">
    <div class="heading clearfix">

            <h2 class="pull-left paddingLeftLarge">Editing <small>&gt; <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['data']->value['title'],80);?>
</small>
<div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Actions <span class="caret caret_margin"></span>
                  </button>
                <ul class="dropdown-menu pull-right" role="menu">
                <li><a href="<?php echo videoSmartyLink(array('vdetails'=>$_smarty_tpl->tpl_vars['data']->value),$_smarty_tpl);?>
">Watch this video</a></li>
                <?php if ($_smarty_tpl->tpl_vars['data']->value['active']!='yes') {?>
                <li><a href="edit_video.php?video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
&amp;mode=activate">Activate</a></li>
                <?php } else { ?>
                <li><a href="edit_video.php?video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
&amp;mode=deactivate">Deactivate</a></li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['modedata']->value!='featured') {?>
                <li><a href="edit_video.php?video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
&amp;mode=featured">Make Featured</a></li>
                <?php } else { ?>
                <li><a href="edit_video.php?video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
&amp;mode=unfeature">Make Unfeatured</a></li>
                <?php }?>
                <li><a href="javascript:void(0)" onClick="javascript:Confirm_Delete('video_manager.php?delete_video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
')">Delete This Video</a></li>
                </ul>
                </div>
            </h2>
            <div class="pull-right marginBottomLarge paddingBottomLarge" style="margin-right:50px;">

               
                <span class="btn btn-app btn-sm btn-light no-hover">
                <span class="line-height-1 smaller-90 blue"><?php echo format_number($_smarty_tpl->tpl_vars['data']->value['views']);?>
</span>
                <br>
                <span class="line-height-1 smaller-90"> Views </span>
                </span>
               <!-- <span class="btn btn-app btn-sm btn-yellow no-hover">
                <span class="line-height-1 smaller-90"> <?php echo $_smarty_tpl->tpl_vars['data']->value['comments_count'];?>
 </span>

                <br>
                <span class="line-height-1 smaller-90"> Comments </span>
                </span>-->

                <span class="btn btn-app btn-sm btn-pink no-hover">
                <span class="line-height-1"> <?php if ($_smarty_tpl->tpl_vars['data']->value['active']=='yes') {?><span class="glyphicon glyphicon-ok smaller-90"></span>
                <?php } else { ?><span class="glyphicon glyphicon-remove"><?php }?></span>
                <br>
                <span class="line-height-1 smaller-90"> Active</span>
                </span>
                </span>
            
                
               <!--  <span class="btn btn-app btn-sm btn-grey no-hover">
                <span class="line-height-1"> <span class="glyphicon glyphicon-remove"></span>
                <span class=" glyphicon glyphicon-ok smaller-90"></span> -->

                <br>
                 <span class="btn btn-app btn-sm btn-grey no-hover">
                <span class="line-height-1"> <?php if ($_smarty_tpl->tpl_vars['modedata']->value!='featured') {?><span class="glyphicon glyphicon-remove"></span>
                <?php } else { ?><span class=" glyphicon glyphicon-ok smaller-90"><?php }?></span>
                <br>

                <span class="line-height-1 smaller-90">Featured</span>
                </span>
                </span>
                <!--
                <span class="btn btn-app btn-sm btn-success no-hover">
                <span class="line-height-1">
                                        <?php  $_smarty_tpl->tpl_vars['links'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['links']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cbvid']->value->video_manager_links_neww; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['links']->key => $_smarty_tpl->tpl_vars['links']->value) {
$_smarty_tpl->tpl_vars['links']->_loop = true;
?>
                                        <?php echo $_smarty_tpl->tpl_vars['cbvid']->value->video_manager_link_neww($_smarty_tpl->tpl_vars['links']->value,$_smarty_tpl->tpl_vars['data']->value);?>

                                        <?php } ?>
                <br>
                <span class="line-height-1 smaller-90">Editor Pick</span>
                </span>
                </span>
            -->


                 <span class="btn btn-app btn-sm btn-success no-hover">
                <span class="line-height-1"> <?php if ($_smarty_tpl->tpl_vars['data']->value['in_editor_pick']=='yes') {?><span class="glyphicon glyphicon-ok smaller-90"></span>
                <?php } else { ?><span class="glyphicon glyphicon-remove"><?php }?></span>
                <br>
                <span class="line-height-1 smaller-90">Editor Pick</span>
                </span>
                </span>


                <span class="btn btn-app btn-sm btn-primary no-hover">
                <span class="line-height-1"> <?php if ($_smarty_tpl->tpl_vars['data']->value['flagged']=='yes') {?><span class="glyphicon glyphicon-ok smaller-90"></span>
                <?php } else { ?><span class="glyphicon glyphicon-remove"><?php }?></span>
                <br>
                <span class="line-height-1 smaller-90"> FLAGGED</span>
                </span>
                </span>


                <!-- <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Actions <span class="caret caret_margin"></span>
                  </button>
                <ul class="dropdown-menu pull-right" role="menu">
                <li><a href="<?php echo videoSmartyLink(array('vdetails'=>$_smarty_tpl->tpl_vars['data']->value),$_smarty_tpl);?>
">Watch this video</a></li>
                <?php if ($_smarty_tpl->tpl_vars['data']->value['active']!='yes') {?>
                <li><a href="edit_video.php?video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
&amp;mode=activate">Activate</a></li>
                <?php } else { ?>
                <li><a href="edit_video.php?video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
&amp;mode=deactivate">Deactivate</a></li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['data']->value['featured']!='yes') {?>
                <li><a href="edit_video.php?video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
&amp;mode=featured">Make Featured</a></li>
                <?php } else { ?>
                <li><a href="edit_video.php?video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
&amp;mode=unfeature">Make Unfeatured</a></li>
                <?php }?>
                <li><a href="javascript:void(0)" onClick="javascript:Confirm_Delete('video_manager.php?delete_video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
')">Delete This Video</a></li>
                </ul>
                </div> -->




<!--
                <span class="btn btn-app btn-sm btn-primary no-hover">
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

                <span class="line-height-1 bigger-170"> <?php echo $_smarty_tpl->tpl_vars['flagedVideos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['total_flags'];?>
 </span>
                <?php endfor; endif; ?>
                <br>
                <span class="line-height-1 smaller-90"> Flagged </span>
                </span>
-->




            </div>
        </div>
    <div class="col-md-6">
        <div class="tabbable">
        <ul class="nav nav-tabs" id="myTab">
            <li class="active">
                <a data-toggle="tab" href="#videodetail">
                    Video Details
                    <span class="glyphicon glyphicon-facetime-video"></span>
                </a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#uinformation1">
                    <i class="glyphicon glyphicon-user"></i>
                    Uploader Information
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="videodetail" class="tab-pane active">
                <div class="table table-responsive">
                    <table class="myTable" width="100%">
                        <tr>
                            <td class="first"><label for="videoid">Video Id</label></td>
                            <td class="last">
                                <p><span><?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
</span></p>
                            </td>
                            <input class="form-control" name="videoid" type="hidden" id="videoid"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
"/>
                        </tr>
                        <tr>
                            <td class="first"><label for="videokey">Video Key</label></td>
                            <td class="last">
                                <p><span><?php echo $_smarty_tpl->tpl_vars['data']->value['videokey'];?>
</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="first"><label for="filename">File Name</label></td>
                            <td class="last">
                                <p><span><?php echo $_smarty_tpl->tpl_vars['data']->value['file_name'];?>
</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="first"><label for="filename">Uploaded Date</label></td>
                            <td class="last">
                                <p><span><?php echo date_only($_smarty_tpl->tpl_vars['data']->value['date_added']);?>
</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="first"><label for="filename">Duration</label></td>
                            <td class="last">
                            <p><span><?php echo number_format($_smarty_tpl->tpl_vars['data']->value['duration']);?>
 seconds</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="first"><label for="totalvideos">Total Video Files</label></td>
                            <td class="last">
                                <p><span><?php echo get_all_video_files_smarty(array('vdetails'=>$_smarty_tpl->tpl_vars['data']->value,'count_only'=>true),$_smarty_tpl);?>
</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="first">
                                <label for="">Conversion log</label>
                            </td>
                            <td class="last">
                                <p><span><a href="view_conversion_log.php?file_name=<?php echo $_smarty_tpl->tpl_vars['data']->value['file_name'];?>
">Conversion log</a></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="first"><label>Total Thumbnails</label></td>
                            <td class="last">
                                <p><span><?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['data']->value,'count_only'=>true),$_smarty_tpl);?>
</span></p>
                            </td>
                        </tr>
                    </table>
                </div>
                </div>
            <div id="uinformation1" class="tab-pane">
                <img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb($_smarty_tpl->tpl_vars['u']->value);?>
" class="img-thumbnail marginBottomLarge" />
                <div class="table-responsive">

                    <table class="myTable" width="600">
                        <tr>
                            <td class="first"><label>User Id</label></td>
                            <td class="last">
                                <p><span><?php echo $_smarty_tpl->tpl_vars['data']->value['userid'];?>
</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="first"><label>User Name</label></td>
                            <td class="last">
                                <p><span><?php echo get_username($_smarty_tpl->tpl_vars['data']->value['userid']);?>
</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="first"><label>DOB</label></td>
                            <td class="last">
                                <p><span><?php echo $_smarty_tpl->tpl_vars['data']->value['dob'];?>
</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="first"><label>Email</label></td>
                            <td class="last">
                            <p><span><?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="first"><label>Gender</label></td>
                            <td class="last">
                                <p><span><?php echo $_smarty_tpl->tpl_vars['data']->value['sex'];?>
</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="first"><label>Rating</label></td>
                            <td class="last">
                                <p><span><?php echo $_smarty_tpl->tpl_vars['data']->value['rating'];?>
</span></p>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
            </div>
            </div>
            <hr>
        <div class="row">
        <!-- anchor used with CB Video Key Replacer Plugin -->
        <?php echo ANCHOR(array('place'=>"key_rep"),$_smarty_tpl);?>

        <?php echo ANCHOR(array('place'=>"seo_edit_video"),$_smarty_tpl);?>

            <table class="table">
                <tr>
                    <td class="alert-info">
                        <b>Video Thumbnails</b>
                    </td>
                </tr>
            </table>
            <div class="row">
            <div class="col-md-9">
                <?php if (isset($_smarty_tpl->tpl_vars['vidthumbs'])) {$_smarty_tpl->tpl_vars['vidthumbs'] = clone $_smarty_tpl->tpl_vars['vidthumbs'];
$_smarty_tpl->tpl_vars['vidthumbs']->value = get_thumb($_smarty_tpl->tpl_vars['data']->value,1,true,false,true,false,'original'); $_smarty_tpl->tpl_vars['vidthumbs']->nocache = null; $_smarty_tpl->tpl_vars['vidthumbs']->scope = 0;
} else $_smarty_tpl->tpl_vars['vidthumbs'] = new Smarty_variable(get_thumb($_smarty_tpl->tpl_vars['data']->value,1,true,false,true,false,'original'), null, 0);?>
                <ul class="ace-thumbnails">
                <?php  $_smarty_tpl->tpl_vars['vid_thumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vid_thumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vidthumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vid_thumb']->key => $_smarty_tpl->tpl_vars['vid_thumb']->value) {
$_smarty_tpl->tpl_vars['vid_thumb']->_loop = true;
?>
                    <li style="display: inline">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vid_thumb']->value;?>
" width="100" height="100">
                        <div class="tools">
                            <input type="radio" value="<?php echo GetName($_smarty_tpl->tpl_vars['vid_thumb']->value);?>
.<?php echo GetExt($_smarty_tpl->tpl_vars['vid_thumb']->value);?>
" id="<?php echo getname($_smarty_tpl->tpl_vars['vid_thumb']->value);?>
" name="default_thumb" <?php if ($_smarty_tpl->tpl_vars['data']->value['default_thumb']==get_thumb_num($_smarty_tpl->tpl_vars['vid_thumb']->value)) {?> checked="checked"<?php }?> />
                            <?php if (getname($_smarty_tpl->tpl_vars['vid_thumb']->value)!='processing') {?>
                            <a href="?video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
&delete=<?php echo getname($_smarty_tpl->tpl_vars['vid_thumb']->value);?>
.<?php echo getext($_smarty_tpl->tpl_vars['vid_thumb']->value);?>
">
                                <i class="icon-remove red"></i></a>
                            <?php }?>
                        </div>
                    </li>
                <?php } ?>
                </ul>
            </div>
            <div class="dropdown col-md-3">
                <a class="btn btn-primary btn-sm dropdown-toggle pull-right" style="margin-top: 10px" data-toggle="dropdown"  href="">Manage Thumbs  <i class="caret"></i></a>
                <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu">
                    <?php if ($_smarty_tpl->tpl_vars['data']->value['embeded']!='yes') {?>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="upload_thumbs.php?video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
&gen_more=true">Regenerate</a><?php }?>
                    </li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="upload_thumbs.php?video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
">Manage</a></li>
                </ul>
            </div>
                </div>
            <div class="row">
                <div class="col-md-6" style="margin-top: 30px">
                    <div class="table">
                        <label class="status">Status</label>
                        <select class="form-control" name="status">
                            <option class="form-control" value="Successful" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='Successful') {?> selected <?php }?>>Successfull</option>
                            <option class="form-control" value="processing" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='Processing') {?> selected <?php }?>>Processing</option>
                            <option class="form-control" value="Failed"<?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='Failed') {?> selected <?php }?>>Failed</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-5" style="margin-top: 30px">
                    <label for="duration">Duration:</label>
                    <input  name="duration" type="text" id="duration" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['duration'];?>
    (Seconds) ">
                        
                </div>
            </div>
            <legend>Video Stats</legend>
            <div class="table-responsive">
                <div class="row">
                    <div class="col-md-1">
                        <label for="views">Views:</label>
                    </div>
                    <div class="col-md-2">
                        <input class="form-control" name="views" type="text" id="views" value="<?php echo number_format($_smarty_tpl->tpl_vars['data']->value['views']);?>
" size="45"/>
                    </div>
                    <div class="col-md-1">
                        <label for="rating">Rating:</label>
                    </div>
                    <div class="col-md-2">
                        <input class="form-control" name="rating" type="text" id="rating" value="<?php echo number_format($_smarty_tpl->tpl_vars['data']->value['rating']);?>
" size="5"/>
                    </div>
                    <div class="col-md-2">
                        <label for="rated_by">RatedBy:</label>
                    </div>
                    <div class="col-md-2">
                        <input class="form-control" name="rated_by" type="text" id="rated_by" value="<?php echo number_format($_smarty_tpl->tpl_vars['data']->value['rated_by']);?>
" size="45"/>
                    </div>
                </div>
                <?php echo ANCHOR(array('place'=>"doc_edit_video_form"),$_smarty_tpl);?>

                <br><br>
                <legend>Custom Upload Fields</legend>
                <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['custom_upload_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="rated_by"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
                    </div>

                    <div class="col-md-12">
                    <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                    <?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
<br>
                    <?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>

                    
                    <!-- checkmate -->
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['name']=='embed_code') {?>
                        <?php if (($_smarty_tpl->tpl_vars['data']->value['embed_code']==''||$_smarty_tpl->tpl_vars['data']->value['embed_code']=='none'||$_smarty_tpl->tpl_vars['data']->value['embed_code']==null)) {?>
                            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['extra_tags'] = 'disabled="disabled"';?> 
                        <?php }?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['field']->value['name']=='remote_play_url') {?>
                        <?php if (($_smarty_tpl->tpl_vars['data']->value['remote_play_url']==''||$_smarty_tpl->tpl_vars['data']->value['remote_play_url']=='none'||$_smarty_tpl->tpl_vars['data']->value['remote_play_url']==null)) {?>
                            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['extra_tags'] = ' disabled="disabled"';?> 
                        <?php }?>
                    <?php }?>
                    <!-- checkmate -->

                    <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                    </div><br>
                    <?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>

                </div>
                <?php } ?>
                <?php echo ANCHOR(array('place'=>"upload_subtitle"),$_smarty_tpl);?>

                <?php echo ANCHOR(array('place'=>"edit_video_form"),$_smarty_tpl);?>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-sm" value="Update video details" style="margin:5px 0px 15px 0px" name="update">
                </div>
            </div>
        </div>
        </div>


<!--testing-->


<div class="col-sm-6 col-md-6 col-lg-6 col x1-12">


    <div class="col-md-12"  >
        <?php echo flashPlayer(array('vdetails'=>$_smarty_tpl->tpl_vars['data']->value,'width'=>'100%','height'=>'100%'),$_smarty_tpl);?>

    </div>

    <div class="head col-md-12">
        <?php  $_smarty_tpl->tpl_vars['field_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['video_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_group']->key => $_smarty_tpl->tpl_vars['field_group']->value) {
$_smarty_tpl->tpl_vars['field_group']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['field_group']->value['group_name']=='Sharing and privacy options') {?>
        <div class="tabbable">
            <ul class="nav nav-tabs" id="myTab3">
                <li class="active">
                    <a data-toggle="tab" href="#privacyoption">
                        Sharing and Privacy Options
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#datelocation">
                        Date Recorder & Location
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="privacyoption" class="tab-pane in active">
                    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field_group']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                    <div class="table">
                        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                        <label><strong><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['field']->value['title'],80);?>
</strong></label><br>
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radio') {?>
                        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                        <?php } else { ?>
                        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?>
                        <?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
<br/>
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?><br/>
                        <?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>

                        <?php }?>
                    </div>
                    <?php } ?>
                </div>
                <?php continue 1?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['field_group']->value['group_name']=='Date recorded &amp; Location') {?>


                <div id="datelocation" class="tab-pane">
                    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field_group']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                    <div class="table">
                        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                        <label><strong><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['field']->value['title'],80);?>
</strong></label><br>
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radio') {?>
                        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                        <?php } else { ?>
                        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?>
                        <?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
<br/>
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?><br/>
                        <?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>

                        <?php }?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php continue 1?>
        <?php }?>
        <div>
            <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field_group']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['title']=='Video Category') {?>
            <div>
                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                <label ><strong><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['field']->value['title'],80);?>
</strong></label><br>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?>
                <?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>

                <?php }?>
                <div class="tab-content scroll">
                    <div class="VideoCategory" style="margin-top: -30px;">

                    <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radio') {?>
                    <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                    <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                    <?php } else { ?>
                    <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                    <?php }?>

                    <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                    <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?><br/>
                    <?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>

                    <?php }?>
                        </div>
                </div>
            </div>
            <?php continue 1?>
            <?php }?>
            <br/>
            <div class="table">
                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                <label><strong><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['field']->value['title'],80);?>
</strong></label><br>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radio') {?>
                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                <?php } else { ?>
                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['id'] = 'form-control';?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?>
                <?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
<br/>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?><br/>
                <?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>

                <?php }?>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</div>

</div>


</form>
<?php }?>
</div>
    
</div>

<div class="widget-box" style="margin-top: 30px">
    <div class="widget-header header-color-blue2 fontawesome-icons">

        <h5><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['data']->value['title'],80);?>
- <b>Comments</b></h5>

        <div class="widget-toolbar">
            <a href="#" data-action="reload">
                <i class="icon-refresh"></i>
            </a>

            <a href="#" data-action="collapse">
                <i class="icon-chevron-up"></i>
            </a>

            <a href="#" data-action="close">
                <i class="icon-remove"></i>
            </a>
        </div>
    </div>
    <!-- Add Artist's anchor here -->
     <?php echo ANCHOR(array('place'=>"after_video_edit",'data'=>$_smarty_tpl->tpl_vars['data']->value['videoid']),$_smarty_tpl);?>

    
    <div class="widget-body">
        <div class="widget-main">
            <div class="slimScrollDiv fontawesome-icons">
                <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
                <form action="" method="post" name="delete_Comment" id="edit_video">
                <?php if ($_smarty_tpl->tpl_vars['comment']->value!='') {?>
                <div class="itemdiv dialogdiv">
                    <?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
                    <div class="user">
                        <img alt="Avatar" src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb($_smarty_tpl->tpl_vars['u']->value,'small');?>
">
                    </div>
                    <?php } ?>
                    <div class="body clearfix">
                    <div class="col-md-3" style="float:right;">
                            <!-- <a href="#" class="btn btn-minier btn-info">
                                <i class="icon-only icon-share-alt"></i>
                            </a> -->
                            <input type="hidden" name="cmt_id" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" />
                            <input class="btn btn-primary" type="submit" name="del_cmt" value="Delete" />
                        </div>
                        <div class="time col-md-3">
                            <i class="icon-time"></i>
                            <span class="green"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['date_added']);?>
</span>
                        </div>
                        <div class="name col-md-3">
                            <a href="#"><?php echo $_smarty_tpl->tpl_vars['comment']->value['anonym_name'];?>
</a>
                        </div>
                        <div class="text col-md-3">
                            <?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>

                        </div>  
                    </div>
                </div>
                <?php } else { ?>
                <div class="body">
                    <p>No comments found !</p>
                </div>
                <?php }?>
                </form>
                <?php } ?>
            </div>

        </div><!-- /widget-main -->

    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script>
        $(document).ready(function(){
            $( "#datecreated" ).datepicker({
                showOtherMonths: true,
                selectOtherMonths: false,
                dateFormat:"yy-mm-dd"
            });

            /*tinymce.init({
                selector: "textarea[name='description']",
                plugins : "table",

                // Theme options

                setup: function (editor) {
                    editor.on('change', function () {
                        tinymce.triggerSave();
                    });
                }
            });*/
        });
    </script>
	</div>
</div><?php }} ?>
