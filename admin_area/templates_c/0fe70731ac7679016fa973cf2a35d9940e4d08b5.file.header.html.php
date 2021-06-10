<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:05:45
         compiled from "/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/header.html" */ ?>
<?php /*%%SmartyHeaderCode:61363598160bc499903fcf3-92136693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fe70731ac7679016fa973cf2a35d9940e4d08b5' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/header.html',
      1 => 1622800748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61363598160bc499903fcf3-92136693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_baseurl' => 0,
    'imageurl' => 0,
    'cbgroup' => 0,
    'cbvid' => 0,
    'userquery' => 0,
    'baseurl' => 0,
    'Cbucket' => 0,
    'u' => 0,
    'levels' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc49990932a9_75247608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc49990932a9_75247608')) {function content_60bc49990932a9_75247608($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/Applications/MAMP/htdocs/centx/centx/includes/smartyv3/plugins/function.math.php';
?><div id="navbar" class="navbar navbar-default">
	<div id="navbar" class="navbar-container container">
		<div class="navbar-header pull-left">
            <div class="logoContainer clearfix">
               <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['admin_baseurl']->value;?>
">
                <img class="pull-left" src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/login_logo.png" height="30">                   
            </a>
        </div>
    </div>
    <div class="navbar-header pull-right" role="navigation">
        <ul class="nav ace-nav fontawesome-icons">
            <li class="purple">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-bell-alt icon-animated-bell"></i>
                    <span class="badge badge-important"><?php ob_start();?><?php echo get_videos(array('active'=>'no','count_only'=>true),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo get_groups(array('active'=>'no','count_only'=>true),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo get_users(array('count_only'=>'yes','status'=>'ToActivate'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_math(array('equation'=>"x + a + b + c + d + e",'x'=>$_tmp1,'a'=>$_tmp2,'b'=>$_smarty_tpl->tpl_vars['cbgroup']->value->action->count_flagged_objects(),'c'=>$_smarty_tpl->tpl_vars['cbvid']->value->action->count_flagged_objects(),'d'=>$_smarty_tpl->tpl_vars['userquery']->value->action->count_flagged_objects(),'e'=>$_tmp3),$_smarty_tpl);?>
</span>
                </a>

                <ul class="dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close pull-right">
                    <li class="dropdown-header">
                        <i class="icon-warning-sign"></i>
                        <?php ob_start();?><?php echo get_videos(array('active'=>'no','count_only'=>true),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo get_groups(array('active'=>'no','count_only'=>true),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo get_users(array('status'=>'ToActivate','count_only'=>true),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo smarty_function_math(array('equation'=>"x + a + b + c + d + e",'x'=>$_tmp4,'a'=>$_tmp5,'b'=>$_smarty_tpl->tpl_vars['cbgroup']->value->action->count_flagged_objects(),'c'=>$_smarty_tpl->tpl_vars['cbvid']->value->action->count_flagged_objects(),'d'=>$_smarty_tpl->tpl_vars['userquery']->value->action->count_flagged_objects(),'e'=>$_tmp6),$_smarty_tpl);?>
 Notifications
                    </li>
                    <li>
                        <a href="video_manager.php?search=search&active=no">
                            <div class="clearfix">
                                <span class="pull-left">
                                    <i class="btn btn-xs no-hover btn-pink icon-facetime-video"></i>
                                    Approve Videos
                                </span>
                                <span class="badge badge-info pull-right"><?php echo get_videos(array('active'=>'no','count_only'=>true),$_smarty_tpl);?>
 </span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="members.php?search=yes&amp;status=ToActivate">
                            <div class="clearfix">
                                <span class="pull-left">
                                    <i class="btn btn-xs no-hover btn-success icon-user"></i>
                                    Approve Members
                                </span>
                                <span class="badge badge-success pull-right"><?php echo get_users(array('status'=>'ToActivate','count_only'=>true),$_smarty_tpl);?>
</span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="photo_manager.php?active=no&amp;search=yes">
                            <div class="clearfix">
                                <span class="pull-left">
                                    <i class="btn btn-xs no-hover btn-info icon-group"></i>
                                    Approve Photos 
                                </span>
                                <span class="badge badge-info pull-right"><?php echo get_groups(array('active'=>'no','count_only'=>true),$_smarty_tpl);?>
</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="flagged_videos.php">
                            <div class="clearfix">
                                <span class="pull-left">
                                    <i class="btn btn-xs no-hover btn-error icon-flag"></i>
                                    Flagged
                                </span>
                                <span class="badge badge-info pull-right"><?php echo smarty_function_math(array('equation'=>"x + y + z",'x'=>$_smarty_tpl->tpl_vars['cbgroup']->value->action->count_flagged_objects(),'y'=>$_smarty_tpl->tpl_vars['cbvid']->value->action->count_flagged_objects(),'z'=>$_smarty_tpl->tpl_vars['userquery']->value->action->count_flagged_objects()),$_smarty_tpl);?>
 </span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/notification_settings.php">
                            See all notifications
                            <i class="icon-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="dropdown blue">
                <a data-toggle="dropdown" class="dropdown-toggle clickable" href="#">
                    <i class="glyphicon glyphicon-arrow-down"></i>
                    <span class="badge badge-important">Display Option</span>
                </a>
                <ul class="dropdown-menu " role="menu" aria-labelledby="dropdownMenu1">
                    <li class="dropdown-header">
                        <i class="icon-info-sign"></i>
                        <form id="display_opts" name="display_opts" method="post" action="">
                            Results Per Page :
                            <input name="admin_pages" type="text" style="width:50px" value="<?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->configs['admin_pages'];?>
"/>
                            <input type="submit" name="update_dp_options" id="button" value="Update"  class="btn btn-primary btn-xs"/>
                        </form>
                    </li>
                </ul>
            </li>

            <li class="blue">
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
">
                    <i class="glyphicon glyphicon-home"></i>
                    <span class="badge badge-success"></span>
                </a>

                <li class="blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb($_smarty_tpl->tpl_vars['u']->value);?>
" class="img-circle" width="25" height="25"/>
                        <span class="user-info">
                         <?php echo $_smarty_tpl->tpl_vars['userquery']->value->username;?>
<br>
                         <?php if (isset($_smarty_tpl->tpl_vars['levels'])) {$_smarty_tpl->tpl_vars['levels'] = clone $_smarty_tpl->tpl_vars['levels'];
$_smarty_tpl->tpl_vars['levels']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_levels(); $_smarty_tpl->tpl_vars['levels']->nocache = null; $_smarty_tpl->tpl_vars['levels']->scope = 0;
} else $_smarty_tpl->tpl_vars['levels'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_levels(), null, 0);?>
                         <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['levels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?>
                         <?php echo $_smarty_tpl->tpl_vars['levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['user_level_name'];?>

                         <?php endfor; endif; ?>
                     </span>
                     <i class="icon-caret-down"></i>
                 </a>
                 <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                    <li>
                        <a href="main.php">
                            <i class="icon-cog"></i>
                            Settings
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/view_user.php?uid=<?php echo userid();?>
"><i class="icon-user"></i> Profile</a>
                    </li>

                    <li class="divider"></li>

                    <li>
                        <a href="logout.php">
                            <i class="icon-off"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</div>
<!-- /.navbar-header -->
<!-- /.container -->
<?php }} ?>
