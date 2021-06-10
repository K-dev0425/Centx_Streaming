<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:04:12
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/manage/user_contacts.html" */ ?>
<?php /*%%SmartyHeaderCode:195739249860bc493cddaa44-34203790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3411f871b7f081f0b9b9fe5b2b6f60472500a39f' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/manage/user_contacts.html',
      1 => 1622800590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195739249860bc493cddaa44-34203790',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'userquery' => 0,
    'friends' => 0,
    'friend' => 0,
    'user_detail' => 0,
    'video' => 0,
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc493ce3de43_61649913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc493ce3de43_61649913')) {function content_60bc493ce3de43_61649913($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['friends'])) {$_smarty_tpl->tpl_vars['friends'] = clone $_smarty_tpl->tpl_vars['friends'];
$_smarty_tpl->tpl_vars['friends']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_contacts($_smarty_tpl->tpl_vars['user']->value['userid'],0); $_smarty_tpl->tpl_vars['friends']->nocache = null; $_smarty_tpl->tpl_vars['friends']->scope = 0;
} else $_smarty_tpl->tpl_vars['friends'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_contacts($_smarty_tpl->tpl_vars['user']->value['userid'],0), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['friends']->value) {?>
   <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
   <?php if (isset($_smarty_tpl->tpl_vars['user_detail'])) {$_smarty_tpl->tpl_vars['user_detail'] = clone $_smarty_tpl->tpl_vars['user_detail'];
$_smarty_tpl->tpl_vars['user_detail']->value = $_smarty_tpl->tpl_vars['friend']->value; $_smarty_tpl->tpl_vars['user_detail']->nocache = null; $_smarty_tpl->tpl_vars['user_detail']->scope = 0;
} else $_smarty_tpl->tpl_vars['user_detail'] = new Smarty_variable($_smarty_tpl->tpl_vars['friend']->value, null, 0);?>
    <tr>
        <td>
            <div class="col-md-2 col-sm-3">
                 <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user_detail']->value);?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb($_smarty_tpl->tpl_vars['user_detail']->value);?>
" class="img-responsive" id="thumbs_<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" class="vthumb img-responisve" alt="">
                </a>
            </div>
        
            <div class="col-md-10  col-sm-9">
                <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user_detail']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['user_detail']->value['username'];?>
 </a><br>
                <div class="labels">
                    <span class="label <?php if ($_smarty_tpl->tpl_vars['friend']->value['confirmed']=='yes') {?>label-success<?php } else { ?>label-warning<?php }?> mlabel">
                    <?php if ($_smarty_tpl->tpl_vars['friend']->value['confirmed']!='yes') {?>Request Sent<?php } elseif ($_smarty_tpl->tpl_vars['friend']->value['confirmed']=='yes') {?>Friends<?php }?></span>
                    <span class="label label-success"><?php if (number_format($_smarty_tpl->tpl_vars['user_detail']->value['total_videos'])>1) {?>Videos: <?php echo number_format($_smarty_tpl->tpl_vars['user_detail']->value['total_videos']);?>
<?php } else { ?>Video: <?php echo number_format($_smarty_tpl->tpl_vars['user_detail']->value['total_videos']);?>
<?php }?></span>
                </div>
            </div>
        </td>
        <td width="40px">
            <div class="dropdown ">
                <button id="dropdownMenu1" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                Actions <i class="caret"></i></button>
                <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1" role="menu">
                    <li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user_detail']->value);?>
" class="">View Profile</a></li>
                    <li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user_videos.php?user=<?php echo $_smarty_tpl->tpl_vars['user_detail']->value['username'];?>
" class="">View Videos</a></li>
                    <li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/private_message.php?mode=new_msg&to=<?php echo $_smarty_tpl->tpl_vars['user_detail']->value['username'];?>
" class="">Send Message</a></li>
                    <?php if ($_smarty_tpl->tpl_vars['friend']->value['confirmed']=='yes') {?>
                    <li><a role="menuitem" href="?mode=delete&userid=<?php echo $_smarty_tpl->tpl_vars['user_detail']->value['userid'];?>
">UnFriend</a></li>
                    <?php } else { ?>
                    <li><a role="menuitem" href="?mode=delete&userid=<?php echo $_smarty_tpl->tpl_vars['user_detail']->value['userid'];?>
">Cancel Request</a></li>
                    <?php }?>
                </ul>
            </div> 

        </td>
   <?php } ?>
   <?php } else { ?>
   <div class="alert alert-info" role="alert"><?php echo smarty_lang(array('code'=>"no_friends_in_list"),$_smarty_tpl);?>
</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['friends'])) {$_smarty_tpl->tpl_vars['friends'] = clone $_smarty_tpl->tpl_vars['friends'];
$_smarty_tpl->tpl_vars['friends']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_pending_contacts($_smarty_tpl->tpl_vars['user']->value['userid'],0); $_smarty_tpl->tpl_vars['friends']->nocache = null; $_smarty_tpl->tpl_vars['friends']->scope = 0;
} else $_smarty_tpl->tpl_vars['friends'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_pending_contacts($_smarty_tpl->tpl_vars['user']->value['userid'],0), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['friends']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
    <?php if (isset($_smarty_tpl->tpl_vars['user_detail'])) {$_smarty_tpl->tpl_vars['user_detail'] = clone $_smarty_tpl->tpl_vars['user_detail'];
$_smarty_tpl->tpl_vars['user_detail']->value = $_smarty_tpl->tpl_vars['friend']->value; $_smarty_tpl->tpl_vars['user_detail']->nocache = null; $_smarty_tpl->tpl_vars['user_detail']->scope = 0;
} else $_smarty_tpl->tpl_vars['user_detail'] = new Smarty_variable($_smarty_tpl->tpl_vars['friend']->value, null, 0);?>
    <tr>

 <td>
        <div class="col-md-2 col-sm-3">
                <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user_detail']->value);?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb($_smarty_tpl->tpl_vars['user_detail']->value);?>
" class="img-responsive"  id="thumbs_<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" class="vthumb" title=""/>
            </a>
            </div>
        
            <div class="col-md-10  col-sm-9">
                <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user_detail']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['user_detail']->value['username'];?>
 </a><br>
            <div class="labels">
                <?php if ($_smarty_tpl->tpl_vars['video']->value['featured']=='yes') {?>
                <span class="label label-primary">Featured<?php } else { ?><?php }?></span>
                <span class="label <?php if ($_smarty_tpl->tpl_vars['friend']->value['confirmed']=='yes') {?>label-success<?php } elseif ($_smarty_tpl->tpl_vars['friend']->value['confirmed']!='yes') {?>label-danger<?php } else { ?>label-warning<?php }?> mlabel">
                <?php if ($_smarty_tpl->tpl_vars['friend']->value['confirmed']!='yes') {?>Pending<?php } elseif ($_smarty_tpl->tpl_vars['friend']->value['confirmed']=='yes') {?>Friends<?php }?></span>
                <span class="label label-success">Videos: <?php echo number_format($_smarty_tpl->tpl_vars['user_detail']->value['total_videos']);?>
</span>
            </div>
            </div>
        </td>
        <td>
            <div class="dropdown ">
                <button id="dropdownMenu1" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                Actions <i class="caret"></i></button>
                <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1" role="menu">
                    <li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user_detail']->value);?>
" class="">View Profile</a></li>
                    <li><a role="menuitem" href="?mode=requests&confirm=<?php echo $_smarty_tpl->tpl_vars['friend']->value['userid'];?>
" class="">Accept Request</a></li>
                    <li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user_videos.php?user=<?php echo $_smarty_tpl->tpl_vars['user_detail']->value['username'];?>
" class="">View Videos</a></li>
                    <li><a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/private_message.php?mode=new_msg&to=<?php echo $_smarty_tpl->tpl_vars['user_detail']->value['username'];?>
" class="">Send Message</a></li>
                    <li><a role="menuitem" href="?mode=delete&userid=<?php echo $_smarty_tpl->tpl_vars['user_detail']->value['userid'];?>
">Reject Request</a>

                </ul>
            </div>   
        </td>
    </tr>
   <?php } ?>
     <?php } else { ?>
   <div class="alert alert-info" role="alert"><?php echo smarty_lang(array('code'=>"no_pending_friend"),$_smarty_tpl);?>
</div>
<?php }?>



<?php }} ?>
