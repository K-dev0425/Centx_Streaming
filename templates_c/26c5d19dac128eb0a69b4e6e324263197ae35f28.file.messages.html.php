<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 02:54:38
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/pm/messages.html" */ ?>
<?php /*%%SmartyHeaderCode:61190912560bc38ee900041-65695158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26c5d19dac128eb0a69b4e6e324263197ae35f28' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/pm/messages.html',
      1 => 1622800590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61190912560bc38ee900041-65695158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_from' => 0,
    'show_to' => 0,
    'mode' => 0,
    'user_msgs' => 0,
    'to_id' => 0,
    'trimed_to' => 0,
    'pr_msg' => 0,
    'imageurl' => 0,
    'baseurl' => 0,
    'userquery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc38ee964f44_69006194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc38ee964f44_69006194')) {function content_60bc38ee964f44_69006194($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/centx/centx/includes/smartyv3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/centx/centx/includes/smartyv3/plugins/modifier.date_format.php';
?>

<form name="videos_manager" method="post">
  <div>
    <input type="submit" name="delete_pm" id="delete_fav_videos" value="<?php echo smarty_lang(array('code'=>'delete'),$_smarty_tpl);?>
" class="btn btn-primary" />
  </div>
  <div id="messages_container" class="account_table marginTop">
   <table class="table table-bordered table-striped">
     <tr>
       <td width="25">
        <input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/>
      </td>
      <?php if ($_smarty_tpl->tpl_vars['show_from']->value) {?>
      <td width="100"><?php echo smarty_lang(array('code'=>'from'),$_smarty_tpl);?>
</td>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['show_to']->value) {?>
      <td width="100"><?php echo smarty_lang(array('code'=>'to'),$_smarty_tpl);?>
</td>
      <?php }?>
      <td><?php echo smarty_lang(array('code'=>'subject'),$_smarty_tpl);?>
</td>
      <td width="100"><?php echo smarty_lang(array('code'=>'date_sent'),$_smarty_tpl);?>
</td>
      <td><?php echo smarty_lang(array('code'=>'date_added'),$_smarty_tpl);?>
</td>
      <?php if ($_smarty_tpl->tpl_vars['mode']->value=='inbox') {?>
      <td width="75"><?php echo smarty_lang(array('code'=>'Reply'),$_smarty_tpl);?>
</td>
      <?php }?>
    </tr>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['msg'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['msg']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['name'] = 'msg';
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_msgs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['total']);
?>
    <tr id="message-<?php echo $_smarty_tpl->tpl_vars['user_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['message_id'];?>
">
      <td>
        <input type="checkbox" name="msg_id[]" id="msg_id" value="<?php echo $_smarty_tpl->tpl_vars['user_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['message_id'];?>
" />
      </td>
      <?php if ($_smarty_tpl->tpl_vars['show_from']->value) {?>
      <td>
        <a href="?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
&mid=<?php echo $_smarty_tpl->tpl_vars['user_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['message_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['message_from_user'];?>
</a>
      </td>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['show_to']->value) {?>
      <td>
        <a href="?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
&mid=<?php echo $_smarty_tpl->tpl_vars['user_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['message_id'];?>
"> 
          <?php if (isset($_smarty_tpl->tpl_vars['to_id'])) {$_smarty_tpl->tpl_vars['to_id'] = clone $_smarty_tpl->tpl_vars['to_id'];
$_smarty_tpl->tpl_vars['to_id']->value = $_smarty_tpl->tpl_vars['user_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['message_to']; $_smarty_tpl->tpl_vars['to_id']->nocache = null; $_smarty_tpl->tpl_vars['to_id']->scope = 0;
} else $_smarty_tpl->tpl_vars['to_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['message_to'], null, 0);?>
          <?php if (isset($_smarty_tpl->tpl_vars['trimed_to'])) {$_smarty_tpl->tpl_vars['trimed_to'] = clone $_smarty_tpl->tpl_vars['trimed_to'];
$_smarty_tpl->tpl_vars['trimed_to']->value = str_replace('#','',$_smarty_tpl->tpl_vars['to_id']->value); $_smarty_tpl->tpl_vars['trimed_to']->nocache = null; $_smarty_tpl->tpl_vars['trimed_to']->scope = 0;
} else $_smarty_tpl->tpl_vars['trimed_to'] = new Smarty_variable(str_replace('#','',$_smarty_tpl->tpl_vars['to_id']->value), null, 0);?>

          <?php echo ucfirst(get_username($_smarty_tpl->tpl_vars['trimed_to']->value));?>


        </a>
      </td>
      <?php }?>
      <td>
        <a href="?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
&mid=<?php echo $_smarty_tpl->tpl_vars['user_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['message_id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['user_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['message_subject'],70);?>
</a>
      </td>
      <td>
        <a id="delete_icon-<?php echo $_smarty_tpl->tpl_vars['pr_msg']->value['message_id'];?>
" href="?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
&delete_mid=<?php echo $_smarty_tpl->tpl_vars['user_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['message_id'];?>
">
          <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/dot.gif" border="0" class="delete_icon" />
        </a>
      </td>
      <td><?php echo $_smarty_tpl->tpl_vars['user_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['date_added'];?>
</td>
      <?php if ($_smarty_tpl->tpl_vars['mode']->value=='inbox') {?>
      <td><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/private_message.php?mode=new_msg&to=<?php echo $_smarty_tpl->tpl_vars['user_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['message_from_user'];?>
" class="btn btn-primary" title=""><?php echo smarty_lang(array('code'=>' Reply '),$_smarty_tpl);?>
</a></td>
      <?php }?>
    </tr>
    <?php endfor; else: ?>
    <strong><em><?php echo smarty_lang(array('code'=>'you_dont_hv_any_pm'),$_smarty_tpl);?>
</em></strong>
    <?php endif; ?>
  </table>
</div>
</form>




<?php if ($_smarty_tpl->tpl_vars['pr_msg']->value!='') {?>

<div>
  <div style="padding:5px" align="right">
    <a id="delete_icon-<?php echo $_smarty_tpl->tpl_vars['pr_msg']->value['message_id'];?>
" href="?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
&delete_mid=<?php echo $_smarty_tpl->tpl_vars['pr_msg']->value['message_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/dot.gif" border="0" class="delete_icon" /></a>
    <a id="reply_icon-<?php echo $_smarty_tpl->tpl_vars['pr_msg']->value['message_id'];?>
" href="?mode=new_msg&reply=<?php echo $_smarty_tpl->tpl_vars['pr_msg']->value['message_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/dot.gif" border="0" class="reply_icon" title="Reply!" /></a>
  </div>
  <div class="pm_message_top" align="left">
    <div class="pm_line">
      <?php echo smarty_lang(array('code'=>'from'),$_smarty_tpl);?>
 : 
      <strong>
        <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['pr_msg']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['pr_msg']->value['username'];?>
</a>
      </strong> - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['pr_msg']->value['date_added'],"%A, %B %e, %Y %I:%M %p");?>

    </div>
    <div class="pm_line">
      <?php echo smarty_lang(array('code'=>'To'),$_smarty_tpl);?>
 : 
      <strong>
        <?php if (isset($_smarty_tpl->tpl_vars['to_id'])) {$_smarty_tpl->tpl_vars['to_id'] = clone $_smarty_tpl->tpl_vars['to_id'];
$_smarty_tpl->tpl_vars['to_id']->value = $_smarty_tpl->tpl_vars['pr_msg']->value['message_to']; $_smarty_tpl->tpl_vars['to_id']->nocache = null; $_smarty_tpl->tpl_vars['to_id']->scope = 0;
} else $_smarty_tpl->tpl_vars['to_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['pr_msg']->value['message_to'], null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['trimed_to'])) {$_smarty_tpl->tpl_vars['trimed_to'] = clone $_smarty_tpl->tpl_vars['trimed_to'];
$_smarty_tpl->tpl_vars['trimed_to']->value = str_replace('#','',$_smarty_tpl->tpl_vars['to_id']->value); $_smarty_tpl->tpl_vars['trimed_to']->nocache = null; $_smarty_tpl->tpl_vars['trimed_to']->scope = 0;
} else $_smarty_tpl->tpl_vars['trimed_to'] = new Smarty_variable(str_replace('#','',$_smarty_tpl->tpl_vars['to_id']->value), null, 0);?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['trimed_to']->value);?>
"> 
          <?php echo ucfirst(get_username($_smarty_tpl->tpl_vars['trimed_to']->value));?>

        </a>
      </strong> 
    </div>
    <div class="pm_line">
      <?php echo smarty_lang(array('code'=>'Subject'),$_smarty_tpl);?>
 : <strong><?php echo $_smarty_tpl->tpl_vars['pr_msg']->value['message_subject'];?>
</strong>
    </div>
  </div>
  <?php echo private_message(array('pm'=>$_smarty_tpl->tpl_vars['pr_msg']->value),$_smarty_tpl);?>

</div>

<?php }?>

<div class="clearfix" style="height:10px"></div><?php }} ?>
