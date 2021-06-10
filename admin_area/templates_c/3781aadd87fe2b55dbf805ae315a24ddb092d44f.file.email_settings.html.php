<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:07:50
         compiled from "/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/email_settings.html" */ ?>
<?php /*%%SmartyHeaderCode:89183491360bc4a1627f4e6-03366251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3781aadd87fe2b55dbf805ae315a24ddb092d44f' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/email_settings.html',
      1 => 1622800750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89183491360bc4a1627f4e6-03366251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
    'cbemail' => 0,
    'templates' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc4a162d9e95_98722469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4a162d9e95_98722469')) {function content_60bc4a162d9e95_98722469($_smarty_tpl) {?><div class="heading">
  <h2>Email Settings</h2>
</div>
<form action="" method="post" enctype="multipart/form-data" name="player_settings">
  <fieldset class="fieldset" style="border:none">
    <div class="row">
    <div class="col-md-4">
      <label for="mail_type">Mailer <br />Select Mailer Type php Mail() or SMTP</label>
      <select class="form-control" name="mail_type" id="mail_type">
        <option value="mail" <?php if ($_smarty_tpl->tpl_vars['row']->value['mail_type']=='mail') {?> selected="selected"<?php }?>>PHP mail()</option>
        <option value="smtp" <?php if ($_smarty_tpl->tpl_vars['row']->value['mail_type']=='smtp') {?> selected="selected"<?php }?>>smtp</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="smtp_host">SMTP Host<br />if using smtp, Set SMTP server host</label>
      <input class="form-control" type="text" name="smtp_host" id="smtp_host" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['smtp_host'];?>
" />
    </div>
    <div class="col-md-4">
      <label for="smtp_host">SMTP Port<br />if using smtp, Set SMTP server port</label>
      <input class="form-control" type="text" name="smtp_port" id="smtp_port" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['smtp_port'];?>
" />
    </div>
    <div class="col-md-4">
      <label for="smtp_user">SMTP Username<br />if using smtp, please enter SMTP username</label>
      <input type="text" class="form-control" name="smtp_user" id="smtp_user" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['smtp_user'];?>
" />  
    </div>
    </div>
      <hr>
      <div class="row">
    <div class="col-md-4">
      <label for="smtp_pass">SMTP Password<br />Enter SMTP password</label>
      <input type="password" class="form-control" name="smtp_pass" id="smtp_pass" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['smtp_pass'];?>
" />
    </div>
    <div class="col-md-4">
      <label for="smtp_auth">SMTP Auth</label>
        <input value="yes" id="id-button-borders" <?php if ($_smarty_tpl->tpl_vars['row']->value['smtp_auth']=='yes') {?>checked="checked"<?php }?> name="smtp_auth" id="smtp_auth" type="checkbox" class="ace ace-switch ace-switch-5">
        <span class="lbl"></span>
    </div>
          </div>
    <div class="form-group">
      <label for=""></label>
    </div>
  <input type="submit" class="btn btn-primary btn-sm" value="Update" name="update_settings" />
  </fieldset>
</form>


<h2>Email Templates Settings</h2>

<div>
<?php if (isset($_smarty_tpl->tpl_vars['templates'])) {$_smarty_tpl->tpl_vars['templates'] = clone $_smarty_tpl->tpl_vars['templates'];
$_smarty_tpl->tpl_vars['templates']->value = $_smarty_tpl->tpl_vars['cbemail']->value->get_templates(); $_smarty_tpl->tpl_vars['templates']->nocache = null; $_smarty_tpl->tpl_vars['templates']->scope = 0;
} else $_smarty_tpl->tpl_vars['templates'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbemail']->value->get_templates(), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['templates']->value) {?>

<form name="email_templates" method="post">
  <div class="row">
    <ul class="nav nav-pills nav-stacked col-md-3 Tabs" >
      
        <?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['etemp']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['etemp']['iteration']++;
?>
          <li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['etemp']['iteration']=='1') {?> class="active"<?php }?>
              onclick="
                  $('.tempselected').removeClass('active').hide();
                  $('#template-<?php echo $_smarty_tpl->tpl_vars['template']->value['email_template_id'];?>
').show().addClass('tempselected');
                  
                    $('.active').removeClass('active');
                  $(this).toggleClass('active');
                    return false;
                    "><a href="#"><?php echo $_smarty_tpl->tpl_vars['template']->value['email_template_name'];?>
</a></li>
        <?php } ?>
    </ul>
    <div class="optionsListsCont col-md-8">
      <?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['etemp']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['etemp']['iteration']++;
?>


          <div id="template-<?php echo $_smarty_tpl->tpl_vars['template']->value['email_template_id'];?>
" 
              <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['etemp']['iteration']!='1') {?> style="display:none" <?php } else { ?>class="tempselected"<?php }?>>  
              <label for="subject<?php echo $_smarty_tpl->tpl_vars['template']->value['email_template_id'];?>
">Email Subject</label>
              <div class="templateCodeCont" style="padding:3px">
                <input data-type="text" name="subject<?php echo $_smarty_tpl->tpl_vars['template']->value['email_template_id'];?>
" id="subject<?php echo $_smarty_tpl->tpl_vars['template']->value['email_template_id'];?>
"
                value="<?php echo form_val($_smarty_tpl->tpl_vars['template']->value['email_template_subject']);?>
" style="border:0px; background:none; width:100%" />
                 </div>
              <br />    
              <label for="message<?php echo $_smarty_tpl->tpl_vars['template']->value['email_template_id'];?>
">Email message</label>
              <div class="templateCodeCont">
                <textarea class="form-control" name="message<?php echo $_smarty_tpl->tpl_vars['template']->value['email_template_id'];?>
" cols="60" rows="8" id="message<?php echo $_smarty_tpl->tpl_vars['template']->value['email_template_id'];?>
" class="templateCode"><?php echo form_val($_smarty_tpl->tpl_vars['template']->value['email_template']);?>
</textarea>
              </div>
          </div>
        <?php } ?>
        <div align="right" style="margin-top:5px">
          <input type="submit" class="btn btn-primary btn-xs" value="Save Templates" name="update" /></div>
        </div>
      </form>
    <?php }?>
    </div>

<script>
    $(document).ready(function() {
        $('.message').summernote();
    });
</script><?php }} ?>
