<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:05:45
         compiled from "/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/left_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:68827268060bc49990ade65-87233357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e08b7cf70fc393e61a3cd774b861712fed077de' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/left_menu.html',
      1 => 1622800748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68827268060bc49990ade65-87233357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Cbucket' => 0,
    'adminMenu' => 0,
    'name' => 0,
    'class' => 0,
    'oneMenuItem' => 0,
    'oneSubMenuItem' => 0,
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc4999148b00_09388976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4999148b00_09388976')) {function content_60bc4999148b00_09388976($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['adminMenu'])) {$_smarty_tpl->tpl_vars['adminMenu'] = clone $_smarty_tpl->tpl_vars['adminMenu'];
$_smarty_tpl->tpl_vars['adminMenu']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->AdminMenu; $_smarty_tpl->tpl_vars['adminMenu']->nocache = null; $_smarty_tpl->tpl_vars['adminMenu']->scope = 0;
} else $_smarty_tpl->tpl_vars['adminMenu'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->AdminMenu, null, 0);?>

<ul class="nav nav-list" id="sidebar">
    <?php if (@constant('MAIN_PAGE')=='Dashboard') {?>
    <li class="active open">
        <?php } else { ?>
    <li>
    <?php }?>
        <a href="index.php">
            <i class="icon-dashboard"></i>
            <span class="menu-text"> Dashboard </span>
        </a>
    </li>
    <?php  $_smarty_tpl->tpl_vars['oneMenuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneMenuItem']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['adminMenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneMenuItem']->key => $_smarty_tpl->tpl_vars['oneMenuItem']->value) {
$_smarty_tpl->tpl_vars['oneMenuItem']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['oneMenuItem']->key;
?>
    <?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = 'glyphicon glyphicon-stats'; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('glyphicon glyphicon-stats', null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['name']->value=='General Configurations') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = 'glyphicon glyphicon-stats'; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('glyphicon glyphicon-stats', null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['name']->value=='Videos') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = 'glyphicon glyphicon-facetime-video'; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('glyphicon glyphicon-facetime-video', null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['name']->value=='Users') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = 'glyphicon glyphicon-user'; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('glyphicon glyphicon-user', null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['name']->value=='Groups') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = 'glyphicon glyphicon-th-large'; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('glyphicon glyphicon-th-large', null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['name']->value=='Advertisement') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = 'glyphicon glyphicon-bullhorn'; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('glyphicon glyphicon-bullhorn', null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['name']->value=='Templates And Players') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = 'glyphicon glyphicon-play-circle'; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('glyphicon glyphicon-play-circle', null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['name']->value=='Plugin Manager') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = 'glyphicon glyphicon-tasks'; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('glyphicon glyphicon-tasks', null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['name']->value=='Tool Box') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = 'glyphicon glyphicon-wrench'; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('glyphicon glyphicon-wrench', null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['name']->value=='Collections') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = 'glyphicon glyphicon-folder-close'; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('glyphicon glyphicon-folder-close', null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['name']->value=='Photos') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = 'glyphicon glyphicon-picture'; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('glyphicon glyphicon-picture', null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['name']->value=='Global Announcement') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = 'glyphicon glyphicon-globe'; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('glyphicon glyphicon-globe', null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['name']->value=='ClipBucket Helper') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = 'glyphicon glyphicon-header'; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('glyphicon glyphicon-header', null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['name']->value=='Audio') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = 'glyphicon glyphicon-music'; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('glyphicon glyphicon-music', null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['name']->value=='CB Issues Manager') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = 'glyphicon glyphicon-list-alt'; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('glyphicon glyphicon-list-alt', null, 0);?>
    <?php }?>
    <?php if (@constant('MAIN_PAGE')==$_smarty_tpl->tpl_vars['name']->value) {?>
    <li class="active open">
        <?php } else { ?>
    <li>
        <?php }?>
        <a href="#" class="dropdown-toggle">
            <i class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"></i>
            <span class="menu-text"> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 </span>
            <b class="arrow icon-angle-down"></b>
        </a>
        <?php if (@constant('MAIN_PAGE')==$_smarty_tpl->tpl_vars['name']->value) {?>
        <ul class="submenu" style="display:block">
            <?php } else { ?>
            <ul class="submenu">
                <?php }?>

                <?php  $_smarty_tpl->tpl_vars['oneSubMenuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneSubMenuItem']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oneMenuItem']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneSubMenuItem']->key => $_smarty_tpl->tpl_vars['oneSubMenuItem']->value) {
$_smarty_tpl->tpl_vars['oneSubMenuItem']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['oneSubMenuItem']->key;
?>

                <?php if (@constant('SUB_PAGE')==$_smarty_tpl->tpl_vars['name']->value) {?>

                <li class="active">
                    <?php } else { ?>
                <li>
                    <?php }?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['oneSubMenuItem']->value;?>
">
                        <i class="glyphicon glyphicon-hand-right"></i>
                        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

                    </a>
                </li>
                <?php } ?>

                <!--updated By Ricky(add Filtering Option menu)-->

                <?php if ($_smarty_tpl->tpl_vars['name']->value=='Update Logo') {?>
                    <?php if (@constant('SUB_PAGE')=='Manage Banner') {?>
                        <li class="active">
                    <?php } else { ?>
                        <li>
                    <?php }?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/manage_banner.php">
                                <i class="glyphicon glyphicon-hand-right"></i>
                                <?php echo smarty_lang(array('code'=>"manage_banner"),$_smarty_tpl);?>

                            </a>
                        </li>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['name']->value=='Notification settings') {?>
                    <?php if (@constant('SUB_PAGE')=='filtering') {?>
                <li class="active">
                    <?php } else { ?>
                <li>
                    <?php }?>
                    <a href="manage_filtering.php">
                        <i class="glyphicon glyphicon-hand-right"></i>
                        Manage Filtering
                    </a>
                </li>

                <?php if (@constant('SUB_PAGE')=='document') {?>
                <li class="active">
                    <?php } else { ?>
                <li>
                    <?php }?>
                    <a href="manage_document.php">
                        <i class="glyphicon glyphicon-hand-right"></i>
                        Manage Document
                    </a>
                </li>

                <?php }?>
            </ul>
            <?php } ?>

            <!--//updated by Ricky-->
            <?php if (@constant('MAIN_PAGE')=='transaction_history') {?>
            <li class="active open">
                <?php } else { ?>
            <li>
            <?php }?>
                <a href="#" class="dropdown-toggle">
                    <i class="glyphicon glyphicon-time"></i>
                    <span class="menu-text"> Transaction History </span>
                    <b class="arrow icon-angle-down"></b>
                </a>
                <?php if (@constant('MAIN_PAGE')=='transaction_history') {?>
                <ul class="submenu" style="display:block">
                <?php } else { ?>
                <ul class="submenu">
                <?php }?>

                    <?php if (@constant('SUB_PAGE')=='video_payment') {?>
                    <li class="active">
                        <?php } else { ?>
                    <li>
                        <?php }?>
                        <a href="video_payment.php">
                            <i class="glyphicon glyphicon-hand-right"></i>
                            Video Payment
                        </a>
                    </li>

                    <?php if (@constant('SUB_PAGE')=='ad_payment') {?>
                    <li class="active">
                        <?php } else { ?>
                    <li>
                        <?php }?>
                        <a href="ad_payment.php">
                            <i class="glyphicon glyphicon-hand-right"></i>
                            Ad Payment
                        </a>
                    </li>

                    <?php if (@constant('SUB_PAGE')=='deposit_fund') {?>
                    <li class="active">
                        <?php } else { ?>
                    <li>
                        <?php }?>
                        <a href="deposit_fund.php">
                            <i class="glyphicon glyphicon-hand-right"></i>
                            Deposit History
                        </a>
                    </li>

                </ul>
            </li>

                    <?php if (@constant('MAIN_PAGE')=='payment') {?>
                    <li class="active open">
                        <?php } else { ?>
                    <li>
                        <?php }?>
                        <a href="#" class="dropdown-toggle">
                            <i class="glyphicon glyphicon-usd"></i>
                            <span class="menu-text"> <?php echo smarty_lang(array('code'=>"payment"),$_smarty_tpl);?>
 </span>
                            <b class="arrow icon-angle-down"></b>
                        </a>
                        <?php if (@constant('MAIN_PAGE')=='payment') {?>
                            <ul class="submenu" style="display:block">
                        <?php } else { ?>
                            <ul class="submenu">
                        <?php }?>

                                <?php if (@constant('SUB_PAGE')=='price') {?>
                                <li class="active">
                                    <?php } else { ?>
                                <li>
                                    <?php }?>
                                    <a href="manage_price.php">
                                        <i class="glyphicon glyphicon-hand-right"></i>
                                        Manage Price
                                    </a>
                                </li>

                                <?php if (@constant('SUB_PAGE')=='deposit') {?>
                                <li class="active">
                                    <?php } else { ?>
                                <li>
                                    <?php }?>
                                    <a href="deposit.php">
                                        <i class="glyphicon glyphicon-hand-right"></i>
                                        <?php echo smarty_lang(array('code'=>"deposit_setting"),$_smarty_tpl);?>

                                    </a>
                                </li>

                                <?php if (@constant('SUB_PAGE')=='withdraw') {?>
                                <li class="active">
                                    <?php } else { ?>
                                <li>
                                    <?php }?>
                                    <a href="withdraw.php">
                                        <i class="glyphicon glyphicon-hand-right"></i>
                                        <?php echo smarty_lang(array('code'=>"withdrawal_setting"),$_smarty_tpl);?>

                                    </a>
                                </li>

                                <?php if (@constant('SUB_PAGE')=='paypal') {?>
                                <li class="active">
                                    <?php } else { ?>
                                <li>
                                    <?php }?>
                                    <a href="paypal_transfer.php">
                                        <i class="glyphicon glyphicon-hand-right"></i>
                                        <?php echo smarty_lang(array('code'=>"paypal_transfer"),$_smarty_tpl);?>

                                    </a>
                                </li>

                                <?php if (@constant('SUB_PAGE')=='manage_withdrawal') {?>
                                <li class="active">
                                    <?php } else { ?>
                                <li>
                                <?php }?>
                                    <a href="manage_withdrawal.php">
                                        <i class="glyphicon glyphicon-hand-right"></i>
                                        <?php echo smarty_lang(array('code'=>"manage_withdrawal"),$_smarty_tpl);?>

                                    </a>
                                </li>

                            </ul>
                            </li>
            <!--//End-->
        </ul>
    </li>



</ul>
<div id="sidebar-collapse" class="sidebar-collapse">
    <i data-icon2="icon-double-angle-right" data-icon1="icon-double-angle-left" class="icon-double-angle-left"></i>

</div><?php }} ?>
