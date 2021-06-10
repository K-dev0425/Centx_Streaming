<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 02:54:38
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/private_message.html" */ ?>
<?php /*%%SmartyHeaderCode:15524696760bc38ee87eec4-99041349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19395776c89235da237ddba19a1f236154f9611b' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/private_message.html',
      1 => 1622800580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15524696760bc38ee87eec4-99041349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'mode' => 0,
    'baseurl' => 0,
    'cbpm' => 0,
    'form_fields' => 0,
    'field' => 0,
    'formObj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc38ee8f7191_55459595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc38ee8f7191_55459595')) {function content_60bc38ee8f7191_55459595($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
<div class="container marginBottom">  
  <div class="account_box">
    <div class="row cb-box">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 hidden-xs">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/userMenuLeft.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

          <div class="tabbable">
              <ul class="nav nav-tabs" id="myTab">
                
                  
                  <li class="<?php if ($_smarty_tpl->tpl_vars['mode']->value=='inbox') {?>active <?php }?>">

                      <a  href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/private_message.php?mode=inbox">
                          <h5><?php echo smarty_lang(array('code'=>'menu_inbox'),$_smarty_tpl);?>
</h5>
                      </a>
                  </li>
                
                  
                  <li class="<?php if ($_smarty_tpl->tpl_vars['mode']->value=='notification') {?>active<?php }?>">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/private_message.php?mode=notification">
                          <h5><?php echo smarty_lang(array('code'=>'notifications'),$_smarty_tpl);?>
</h5>
                      </a>
                  </li>

                  <li class="<?php if ($_smarty_tpl->tpl_vars['mode']->value=='sent') {?>active<?php }?>">
                      <a  href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/private_message.php?mode=sent">
                          <h5><?php echo smarty_lang(array('code'=>'sent'),$_smarty_tpl);?>
</h5>
                      </a>
                  </li>

                 <li class=" <?php if ($_smarty_tpl->tpl_vars['mode']->value=='new_msg') {?>active<?php }?>">
                      <a  href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/private_message.php?mode=new_msg">
                          <h5><?php echo smarty_lang(array('code'=>'write_msg'),$_smarty_tpl);?>
</h5>
                      </a>
                  </li>
                 
              </ul>
              <div class="tab-content">
                 <?php if ($_smarty_tpl->tpl_vars['mode']->value=='new_msg') {?>
                 <div id="wmessage" class="tab-pane active">
                      <h2><?php echo smarty_lang(array('code'=>'private_messages'),$_smarty_tpl);?>
 &raquo; <?php echo smarty_lang(array('code'=>'title_crt_new_msg'),$_smarty_tpl);?>
</h2>
                      <?php if (isset($_smarty_tpl->tpl_vars['form_fields'])) {$_smarty_tpl->tpl_vars['form_fields'] = clone $_smarty_tpl->tpl_vars['form_fields'];
$_smarty_tpl->tpl_vars['form_fields']->value = $_smarty_tpl->tpl_vars['cbpm']->value->load_compose_form(); $_smarty_tpl->tpl_vars['form_fields']->nocache = null; $_smarty_tpl->tpl_vars['form_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['form_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbpm']->value->load_compose_form(), null, 0);?>
                      <div class="account_form">
                          <form id="pm_msg" name="pm_msg" method="post" action="">

                              <h3><?php echo smarty_lang(array('code'=>'new_private_msg'),$_smarty_tpl);?>
</h3>
                              <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                              <div class="form-group">
                                  <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
                                  <?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>

                                  <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                                  <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                                  <?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>

                              </div>
                              <?php } ?>
                              <button name="send_message" id="send_message" value="submit" class="btn btn-primary"><?php echo smarty_lang(array('code'=>'com_send_message'),$_smarty_tpl);?>
</button>
                          </form>
                      </div>
                  </div><?php }?>


                  <?php if ($_smarty_tpl->tpl_vars['mode']->value=='inbox') {?>
                  <div id="inbox" class="tab-pane active">
                      <h2><?php echo smarty_lang(array('code'=>'private_messages'),$_smarty_tpl);?>
 &raquo; <?php echo smarty_lang(array('code'=>'inbox'),$_smarty_tpl);?>
</h2>
                      <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pm/messages.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_from'=>'true'), 0);?>

                      </div><?php }?>

                 <?php if ($_smarty_tpl->tpl_vars['mode']->value=='notification') {?>
                  <div id="notifications" class="tab-pane active">
                      <h2><?php echo smarty_lang(array('code'=>'private_messages'),$_smarty_tpl);?>
 &raquo; <?php echo smarty_lang(array('code'=>'notifications'),$_smarty_tpl);?>
</h2>
                      <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pm/messages.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_from'=>'true'), 0);?>

                  </div><?php }?>

                  <?php if ($_smarty_tpl->tpl_vars['mode']->value=='sent') {?>
                  <div id="msend" class="tab-pane active">
                      <h2><?php echo smarty_lang(array('code'=>'private_messages'),$_smarty_tpl);?>
 &raquo; <?php echo smarty_lang(array('code'=>'sent'),$_smarty_tpl);?>
</h2>
                      <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pm/messages.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_to'=>'true'), 0);?>

                  </div><?php }?>
                 
                  </div>
              </div>

      </div>
    </div>
  </div>
</div><?php }} ?>
