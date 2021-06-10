<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 02:46:44
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/edit_account.html" */ ?>
<?php /*%%SmartyHeaderCode:103933717560bc3714d9ba66-99281184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '329ae758f4aebf630618c2f2145c04ade35e004f' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/edit_account.html',
      1 => 1622947516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103933717560bc3714d9ba66-99281184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'mode' => 0,
    'baseurl' => 0,
    'p' => 0,
    'channel_profile_fields' => 0,
    'field_group' => 0,
    'field' => 0,
    'formObj' => 0,
    'user' => 0,
    'Cbucket' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'signup_fields' => 0,
    'cust_signup_fields' => 0,
    'coverPhoto' => 0,
    'subs' => 0,
    'user_detail' => 0,
    'sub' => 0,
    'imageurl' => 0,
    'extensions' => 0,
    'theme' => 0,
    'on' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc3714ea59c6_07075027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc3714ea59c6_07075027')) {function content_60bc3714ea59c6_07075027($_smarty_tpl) {?><style>
  .radio-inline input[type=radio] {
    position: relative;
    top: -2px;
  }
</style>

<?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
<div class="container manage-page mb-30">

  <?php if ($_smarty_tpl->tpl_vars['mode']->value=='profile_settings'||$_smarty_tpl->tpl_vars['mode']->value=='account_settings') {?>
  <div class="cb-box row br-10">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 hidden-xs">
      <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/userMenuLeft.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
      <div class="tabbable">
        <ul class="nav nav-tabs" id="myTab">
          <li class="<?php if ($_smarty_tpl->tpl_vars['mode']->value=='profile_settings') {?>active<?php }?>">
            <a  href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/edit_account.php?mode=profile">
              <!--<h5><?php echo smarty_lang(array('code'=>'channel_profile_settings'),$_smarty_tpl);?>
</h5>-->
              <h5>Profile Settings</h5>
            </a>
          </li>
          <li class="<?php if ($_smarty_tpl->tpl_vars['mode']->value=='account_settings') {?>active<?php }?>">
            <a  href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/edit_account.php?mode=account">
              <h5><?php echo smarty_lang(array('code'=>'account_settings'),$_smarty_tpl);?>
</h5>
            </a>
          </li>
        </ul>
        <br>
        <form method="post" class="accountForm">
          <div class="tab-content clearfix">
            <div id="cpsetting" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['mode']->value=='profile_settings') {?>active<?php }?>">

              <div class="channelSettings col-md-10">
                <?php if (isset($_smarty_tpl->tpl_vars['channel_profile_fields'])) {$_smarty_tpl->tpl_vars['channel_profile_fields'] = clone $_smarty_tpl->tpl_vars['channel_profile_fields'];
$_smarty_tpl->tpl_vars['channel_profile_fields']->value = $_smarty_tpl->tpl_vars['userquery']->value->load_user_fields($_smarty_tpl->tpl_vars['p']->value); $_smarty_tpl->tpl_vars['channel_profile_fields']->nocache = null; $_smarty_tpl->tpl_vars['channel_profile_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['channel_profile_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->load_user_fields($_smarty_tpl->tpl_vars['p']->value), null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['field_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channel_profile_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_group']->key => $_smarty_tpl->tpl_vars['field_group']->value) {
$_smarty_tpl->tpl_vars['field_group']->_loop = true;
?>

                <?php if ($_smarty_tpl->tpl_vars['field_group']->value['group_name']=='Education, Hobbies, etc') {?>
                <?php break 1?>
                <?php }?>

                <h2><?php echo $_smarty_tpl->tpl_vars['field_group']->value['group_name'];?>
</h2>
                <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field_group']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                <div class="form-group">
                  <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radiobutton') {?>
                  <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" class="show"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
                  <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
<?php }?>
                  <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'radio-inline';?>
                  <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = '';?>
                  <?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>
<?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_after']),$_smarty_tpl);?>

                  <?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>

                  <?php } else { ?>
                  <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
                  <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
<?php }?>
                  <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                  <?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>
<?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_after']),$_smarty_tpl);?>


                  <?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>

                  <?php }?>
                </div>
                <?php } ?>
                <?php } ?>
                <div class="form-group">
                  <button name="update_profile" id="button" value="submit" class="btn btn-primary">
                    <?php echo smarty_lang(array('code'=>'update'),$_smarty_tpl);?>

                  </button>
                </div>
              </div>
              <!-- </form> -->
            </div>
            <div id="asettings" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['mode']->value=='account_settings') {?>active<?php }?>">
              <!-- <form method="post" class="accountForm"> -->
              <div  class="accountSettings col-md-6">
                <!--- CHANGING USER ACCOUNT AND PROFILE -->
                <?php if (isset($_smarty_tpl->tpl_vars['signup_fields'])) {$_smarty_tpl->tpl_vars['signup_fields'] = clone $_smarty_tpl->tpl_vars['signup_fields'];
$_smarty_tpl->tpl_vars['signup_fields']->value = $_smarty_tpl->tpl_vars['userquery']->value->load_signup_fields($_smarty_tpl->tpl_vars['user']->value); $_smarty_tpl->tpl_vars['signup_fields']->nocache = null; $_smarty_tpl->tpl_vars['signup_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['signup_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->load_signup_fields($_smarty_tpl->tpl_vars['user']->value), null, 0);?>
                <?php if (isset($_smarty_tpl->tpl_vars['cust_signup_fields'])) {$_smarty_tpl->tpl_vars['cust_signup_fields'] = clone $_smarty_tpl->tpl_vars['cust_signup_fields'];
$_smarty_tpl->tpl_vars['cust_signup_fields']->value = $_smarty_tpl->tpl_vars['userquery']->value->load_custom_signup_fields($_smarty_tpl->tpl_vars['user']->value,false,true); $_smarty_tpl->tpl_vars['cust_signup_fields']->nocache = null; $_smarty_tpl->tpl_vars['cust_signup_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['cust_signup_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->load_custom_signup_fields($_smarty_tpl->tpl_vars['user']->value,false,true), null, 0);?>
                <h2><?php echo smarty_lang(array('code'=>'account_details'),$_smarty_tpl);?>
</h2>

                <div class="form-group">
                  <label for="username"><?php echo smarty_lang(array('code'=>'username'),$_smarty_tpl);?>
</label>
                  <input type="text" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email"><?php echo smarty_lang(array('code'=>'email'),$_smarty_tpl);?>
</label>
                  <input type="email" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" class="form-control">
                </div>

                <div class="form-group">
                  <label for="country"><?php echo smarty_lang(array('code'=>'country'),$_smarty_tpl);?>
</label>
                  <select class="form-control" name="country" id="country">
                    <?php if (isset($_smarty_tpl->tpl_vars['countries'])) {$_smarty_tpl->tpl_vars['countries'] = clone $_smarty_tpl->tpl_vars['countries'];
$_smarty_tpl->tpl_vars['countries']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->get_countries('iso2'); $_smarty_tpl->tpl_vars['countries']->nocache = null; $_smarty_tpl->tpl_vars['countries']->scope = 0;
} else $_smarty_tpl->tpl_vars['countries'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->get_countries('iso2'), null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['user']->value['country']==$_smarty_tpl->tpl_vars['code']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['country']->value;?>
</option>
                    <?php } ?>
                  </select>
                </div>
                
                <!--updated by Ricky-->
                <div class="form-group">
                  <label for="state"><?php echo smarty_lang(array('code'=>'state'),$_smarty_tpl);?>
</label>
                  <input type="text" name="state" id="state" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['state'];?>
" class="form-control">
                </div>
                <div class="form-group">
                  <label for="city"><?php echo smarty_lang(array('code'=>'city'),$_smarty_tpl);?>
</label>
                  <input type="text" name="city" id="city" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['city'];?>
" class="form-control">
                </div>
                <div class="form-group">
                  <label for="zipcode"><?php echo smarty_lang(array('code'=>'zipcode'),$_smarty_tpl);?>
</label>
                  <input type="text" name="zipcode" id="zipcode" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['zipcode'];?>
" class="form-control">
                </div>
                
                <div class="form-group">
                  <label class="show"><?php echo smarty_lang(array('code'=>'gender'),$_smarty_tpl);?>
</label>
                  <label class="radio-inline">
                    <input type="radio" name="sex" value="male" id="sex_0" <?php if ($_smarty_tpl->tpl_vars['user']->value['sex']=='male') {?> checked="checked"<?php }?> />
                    <?php echo smarty_lang(array('code'=>'male'),$_smarty_tpl);?>

                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="sex" value="female" id="sex_1" <?php if ($_smarty_tpl->tpl_vars['user']->value['sex']=='female') {?> checked="checked"<?php }?>/>
                    <?php echo smarty_lang(array('code'=>'female'),$_smarty_tpl);?>

                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="sex" value="other" id="sex_2" <?php if ($_smarty_tpl->tpl_vars['user']->value['sex']=='other') {?> checked="checked"<?php }?>>
                    <?php echo smarty_lang(array('code'=>'other'),$_smarty_tpl);?>

                  </label>
                </div>
                <div class="form-group">
                  <label for="category"><?php echo smarty_lang(array('code'=>'account_details'),$_smarty_tpl);?>
</label>
                  <?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['signup_fields']->value['cat']['anchor_before']),$_smarty_tpl);?>

                  <?php $_smarty_tpl->createLocalArrayVariable('signup_fields', null, 0);
$_smarty_tpl->tpl_vars['signup_fields']->value['cat']['class'] = 'form-control';?>
                  <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['signup_fields']->value['cat']);?>

                  <?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['signup_fields']->value['cat']['anchor_after']),$_smarty_tpl);?>



                </div>
                <div class="form-group">
                  <label for="dob"><?php echo smarty_lang(array('code'=>'user_date_of_birth'),$_smarty_tpl);?>
</label>
                  <?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['signup_fields']->value['dob']['anchor_before']),$_smarty_tpl);?>

                  <?php $_smarty_tpl->createLocalArrayVariable('signup_fields', null, 0);
$_smarty_tpl->tpl_vars['signup_fields']->value['dob']['class'] = 'form-control';?>
                  <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['signup_fields']->value['dob']);?>

                  <?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['signup_fields']->value['dob']['anchor_after']),$_smarty_tpl);?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['cust_signup_fields']->value) {?>
                <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cust_signup_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                <div class="form-group">
                  <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
                  <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?>
                  <?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>

                  <?php }?>
                  <?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>

                  <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                  <?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_after']),$_smarty_tpl);?>

                  <?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>

                </div>
                <?php } ?>
                <?php }?>

                <div class="form-group">
                  <button name="update_profile" id="button" value="submit" class="btn btn-primary">  <?php echo smarty_lang(array('code'=>'update'),$_smarty_tpl);?>
</button>
                </div>
              </div>
              
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['mode']->value=="change_cover") {?>
  <div class="row cb-box br-10">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 hidden-xs">
      <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/userMenuLeft.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <div class="coverPhotoContainer">
        <img src="<?php echo $_smarty_tpl->tpl_vars['coverPhoto']->value;?>
" alt="coverPhoto" id="coverPhoto" class="edit-img-thumbnail img-responsive">
      </div>
      <div class="avatar_bg">
        <!-- <form method="post" enctype="multipart/form-data"> -->
        <input type="file" name="coverPhoto" style="display:none">

        <a href="javascript:none" id="selectCover" class="btn btn-primary">Select Cover</a>

      </div>
    </div>
  </div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['mode']->value=='avatar_bg'||$_smarty_tpl->tpl_vars['mode']->value=='channel_bg') {?>
  <div class="row cb-box">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 hidden-xs">
      <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/userMenuLeft.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <div id="uavatar" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['mode']->value=='avatar_bg') {?> active <?php }?>">
        <form method="post" enctype="multipart/form-data">
          <h2><?php echo smarty_lang(array('code'=>'user_user_avatar'),$_smarty_tpl);?>
</h2>
          <div class="show-image">
            <img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb($_smarty_tpl->tpl_vars['user']->value);?>
?<?php echo uniqid();?>
" class="edit-img-thumbnail img-responsive" />

          </div>
          <div class="form-group">
            <label for="avatar_file">
              <h4><?php echo smarty_lang(array('code'=>'user_user_avatar'),$_smarty_tpl);?>
</h4>
              <?php echo smarty_lang(array('code'=>'please_select_img_file'),$_smarty_tpl);?>

            </label>
            <input type="file" name="avatar_file" id="avatar_file" class="the-buttons btn" />
          </div>
          <h3><?php echo smarty_lang(array('code'=>'or'),$_smarty_tpl);?>
</h3>
          <div class="form-group">
            <label for="avatar_url"><?php echo smarty_lang(array('code'=>'pelase_enter_image_url'),$_smarty_tpl);?>
</label>
            <input class="form-control" name="avatar_url" type="text" id="avatar_url" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar_url'];?>
" />
          </div>
          <div class="form-group">
            <label class="radio">
              <input name="delete_avatar" type="checkbox" id="delete_avatar" value="yes" />
              <?php echo smarty_lang(array('code'=>'delete_this_img'),$_smarty_tpl);?>
 - (if user has uploaded profile pic)
            </label>
            <input type="hidden" name="avatar_file_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
" />
          </div>
          <div class="form-group">
            <button name="update_avatar_bg" id="button1" value="submit" class="btn btn-primary">
              <?php echo smarty_lang(array('code'=>'update'),$_smarty_tpl);?>

            </button>
          </div>
        </form>
      </div>


    </div>
  </div>
  <?php } elseif ($_smarty_tpl->tpl_vars['mode']->value!='profile_settings'&&$_smarty_tpl->tpl_vars['mode']->value!='account_settings') {?>
  <div class="cb-box row br-10">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 hidden-xs">
      <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/userMenuLeft.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div class="col-md-8 col-sm-8 col-xs-12">
      <div class="tabbable">
        <ul class="nav nav-tabs" id="myTab2">


          <li class="<?php if ($_smarty_tpl->tpl_vars['mode']->value=='block_users') {?>active <?php }?>">
            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/edit_account.php?mode=block_users">
              <h5><?php echo smarty_lang(array('code'=>'block_users'),$_smarty_tpl);?>
</h5>
            </a>
          </li>
          <li class="<?php if ($_smarty_tpl->tpl_vars['mode']->value=='change_password') {?>active <?php }?>">
           <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/edit_account.php?mode=change_password">
            <h5><?php echo smarty_lang(array('code'=>'user_change_pass'),$_smarty_tpl);?>
</h5>
          </a>

        </li>
        <li class="<?php if ($_smarty_tpl->tpl_vars['mode']->value=='change_email') {?>active <?php }?>">
         <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/edit_account.php?mode=change_email">
          <h5><?php echo smarty_lang(array('code'=>'user_change_email'),$_smarty_tpl);?>
</h5>
        </a>
      </li>
      <li class="<?php if ($_smarty_tpl->tpl_vars['mode']->value=='subs') {?>active <?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/edit_account.php?mode=subscriptions">
          <h5><?php echo smarty_lang(array('code'=>'com_manage_subs'),$_smarty_tpl);?>
</h5>
        </a>
      </li>
    </ul>
    <br>
    <div class="tab-content clearfix">
      <div id="busers" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['mode']->value=='block_users') {?>active <?php }?>">

        <h2><?php echo smarty_lang(array('code'=>'block_users'),$_smarty_tpl);?>
</h2>
        <form method="post" name="ban_users">
          <div class="form-group">
            <label for="users"><?php echo smarty_lang(array('code'=>'block_users'),$_smarty_tpl);?>
</label>
            <textarea class="form-control" name="users" id="users"><?php echo $_smarty_tpl->tpl_vars['user']->value['banned_users'];?>
</textarea>
            <?php echo smarty_lang(array('code'=>'spe_users_by_comma'),$_smarty_tpl);?>

          </div>
          <div class="form-group">
            <button name="block_users" id="button5" value="submit" class="btn btn-primary">
              <?php echo smarty_lang(array('code'=>'update_blocked_user_list'),$_smarty_tpl);?>

            </button>
          </div>
        </form>

      </div>
      <div id="cpassword" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['mode']->value=='change_password') {?>active <?php }?>">
        <h2><?php echo smarty_lang(array('code'=>'user_change_pass'),$_smarty_tpl);?>
</h2>
        <form method="post" name="edit_profile">
          <div class="form-group">
            <label for="old_pass"><?php echo smarty_lang(array('code'=>'user_old_pass'),$_smarty_tpl);?>
</label>
            <input class="form-control" name="old_pass" type="password" id="old_pass">
          </div>


          <div class="form-group">
            <label for="new_pass"><?php echo smarty_lang(array('code'=>'user_new_pass'),$_smarty_tpl);?>
</label>
            <input class="form-control" name="new_pass" type="password" id="new_pass" />
          </div>

          <div class="form-group">
            <label for="c_new_pass"><?php echo smarty_lang(array('code'=>'user_c_new_pass'),$_smarty_tpl);?>
</label>
            <input class="form-control" name="c_new_pass" type="password" id="c_new_pass" />
          </div>
          <div class="form-group">
            <button name="change_password" id="button4" value="submit" class="btn btn-primary">
              <?php echo smarty_lang(array('code'=>'user_change_pass'),$_smarty_tpl);?>

            </button>
          </div>
        </form>
      </div>
      <div id="cemail" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['mode']->value=='change_email') {?>active <?php }?>">
        <h2><?php echo smarty_lang(array('code'=>'user_change_email'),$_smarty_tpl);?>
</h2>
        <form method="post" name="edit_profile">
          <div class="form-group">
            <label for="curemail"><?php echo smarty_lang(array('code'=>'current_email'),$_smarty_tpl);?>
</label>
            <input class="form-control" type="text" disabled value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" id="curemail">
          </div>


          <div class="form-group">
            <label for="new_email"><?php echo smarty_lang(array('code'=>'user_new_email'),$_smarty_tpl);?>
</label>
            <input type="text" class="form-control" name="new_email" id="new_email">
          </div>

          <div class="form-group">
            <label for="cnew_email"><?php echo smarty_lang(array('code'=>'confirm_new_email'),$_smarty_tpl);?>
</label>
            <input class="form-control" type="text" name="cnew_email" id="cnew_email">
          </div>

          <div class="form-group">
            <button name="change_email" id="button3" value="submit" class="btn btn-primary">
              <?php echo smarty_lang(array('code'=>'user_change_email'),$_smarty_tpl);?>

            </button>
          </div>
        </form>
      </div>
      <div id="msubscription" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['mode']->value=='subs') {?>active <?php }?>">
        <h2><?php echo smarty_lang(array('code'=>'com_manage_subs'),$_smarty_tpl);?>
</h2>
        <?php if ($_smarty_tpl->tpl_vars['subs']->value) {?>
        <table class="table table-striped table-bordered">
          <tr>
            <td width="15">
              <input type="checkbox" name="checkall"/>
            </td>
            <td width="50">&nbsp;</td>
            <td>Username</td>
            <td width="100">views</td>
            <td width="50">&nbsp;</td>
          </tr>
          <?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
          <tr>
            <td>
              <input type="checkbox" name="sub[]" id="check_userd-<?php echo $_smarty_tpl->tpl_vars['user_detail']->value['userid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['subscribed_to'];?>
" />
            </td>
            <td>
              <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['sub']->value);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb($_smarty_tpl->tpl_vars['sub']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['sub']->value['username'];?>
" width="40" height="40" border="0"></a>
            </td>
            <td>
              <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['sub']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['sub']->value['username'];?>
</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->get_user_videos_link($_smarty_tpl->tpl_vars['sub']->value);?>
"><?php echo smarty_lang(array('code'=>'grp_view_vdos'),$_smarty_tpl);?>
</a></td>
              <td width="100"><?php echo number_format($_smarty_tpl->tpl_vars['sub']->value['profile_hits']);?>

              </td>
              <td>
                <a href="?mode=subscriptions&delete_subs=<?php echo $_smarty_tpl->tpl_vars['sub']->value['subscribed_to'];?>
">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/cancel.png" width="16" height="16" border="0" />
                </a>
              </td>
            </tr>
            <?php } ?>
          </table>
          <?php } else { ?>
          <div><em><strong><?php echo smarty_lang(array('code'=>'no_subs_found'),$_smarty_tpl);?>
</strong></em></div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php }?>


<script>
  (function(window){
    $(document).ready(function(){

      $('#dob').datepicker({
        showOtherMonths: true,
        selectOtherMonths: false,
        changeMonth: true,
        dateFormat:"yy-mm-dd",
        changeYear: true
      });


      var extensions = "<?php echo $_smarty_tpl->tpl_vars['extensions']->value;?>
";
      var baseurl = '<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
';
      extensions = (extensions.substring(0, extensions.length - 1)) + ",png,jpeg";
      $.get("<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/plupload/js/plupload.full.min.js", function(e){
        var uploader = new plupload.Uploader({
          browse_button: 'selectCover',
          runtimes : 'html5,flash,silverlight,html4',
          url : baseurl + "/edit_account.php?mode=avatar_bg",
          file_data_name : "coverPhoto",
          filters: {
            mime_types : [
            { title : "Image files", extensions : extensions },
            ],
            max_file_size: "2mb",
            prevent_duplicates: true,
          }
        });
        window.uploader = uploader;
        uploader.init();
        uploader.bind("FilesAdded", function(up, uploadedFiles){
          $("#coverPhoto").attr("src", "<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/loading.png");
          console.log("<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/loading.png");
          up.start();
        });
        uploader.bind('UploadComplete', function(plupload, files, response){

        });

        uploader.bind("FileUploaded", function(plupload, files, response){
          var response = $.parseJSON(response.response);
          console.log(response);
          if(response.status == true){
            $("#coverPhoto").attr("src", response.url);
          }else{
            alert(response.msg);
          }
          plupload.refresh();
        });

        uploader.bind("Error", function(plupload, error){
          alert(error.message);
        });

      });
    });
  })(window);
</script>
<script>
  $(document).ready(function()
    {
    <?php if ($_smarty_tpl->tpl_vars['on']->value=='account') {?>
    $('#accountSettings').toggle();
    $('#accntSettingHead').toggleClass('accntSettingHeadarrowup')
    <?php } else { ?>
    $('#accntProfileSettings').toggle();
    $('#accntProfileSettingHead').toggleClass('accntSettingHeadarrowup')
    <?php }?>
    }
    );

  $('select#last_name').parent().hide();
  $('input#show_dob').parents('.form-group').hide();
  $('#about_me').parents('.form-group').hide();
  $('#profile_tags').parents('.form-group').hide();
  $('#web_url').parents('.form-group').hide();
  $('label[for="postal_code"]').text('Zip Code');
  $('label[for="hometown"]').text('State');
  $('#profile_title').parents('.form-group').hide();
  $('#profile_desc').parents('.form-group').hide();
  $('#show_my_friends').parents('.form-group').hide();
  $('#show_my_videos').parents('.form-group').hide();
  $('#show_my_photos').parents('.form-group').hide();
  $('#show_my_subscriptions').parents('.form-group').hide();
  $('#show_my_subscribers').parents('.form-group').hide();
  $('#show_my_collections').parents('.form-group').hide();
  $('#privacy').parents('.form-group').hide();
  $('#show_profile').parents('.form-group').hide();
  $('#allow_comments').parents('.form-group').hide();
  $('#allow_ratings').parents('.form-group').hide();
  $('#allow_subscription').parents('.form-group').hide();
  $('.channelSettings h2:eq(2)').remove();
  $('#postal_code').parents('.form-group').hide();
  $('#hometown').parents('.form-group').hide();
  $('#city').parents('.form-group').hide();
  $('#category').parents('.form-group').hide();

</script>

<?php }} ?>
