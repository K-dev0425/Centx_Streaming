<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 08:47:35
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/signup.html" */ ?>
<?php /*%%SmartyHeaderCode:47862473160bc8ba7d9b2c4-85067275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a0b514650ca0787c55694386a9b98b50bf66d78' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/signup.html',
      1 => 1622800580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47862473160bc8ba7d9b2c4-85067275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'mode' => 0,
    'udetails' => 0,
    'signupsuccessusremailverify' => 0,
    'login_link' => 0,
    'baseurl' => 0,
    'allow_registeration' => 0,
    'required_fields' => 0,
    'field' => 0,
    'formObj' => 0,
    'custom_field' => 0,
    'captcha' => 0,
    'cbpage' => 0,
    'Cbucket' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc8ba7ea0d37_71819569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc8ba7ea0d37_71819569')) {function content_60bc8ba7ea0d37_71819569($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['required_fields'])) {$_smarty_tpl->tpl_vars['required_fields'] = clone $_smarty_tpl->tpl_vars['required_fields'];
$_smarty_tpl->tpl_vars['required_fields']->value = array_filter($_smarty_tpl->tpl_vars['userquery']->value->load_signup_fields()); $_smarty_tpl->tpl_vars['required_fields']->nocache = null; $_smarty_tpl->tpl_vars['required_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['required_fields'] = new Smarty_variable(array_filter($_smarty_tpl->tpl_vars['userquery']->value->load_signup_fields()), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['cutom_fields'])) {$_smarty_tpl->tpl_vars['cutom_fields'] = clone $_smarty_tpl->tpl_vars['cutom_fields'];
$_smarty_tpl->tpl_vars['cutom_fields']->value = $_smarty_tpl->tpl_vars['userquery']->value->custom_signup_fields; $_smarty_tpl->tpl_vars['cutom_fields']->nocache = null; $_smarty_tpl->tpl_vars['cutom_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['cutom_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->custom_signup_fields, null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['mode']->value=='signup_success') {?>
<div class="simple_container">
	<?php if ($_smarty_tpl->tpl_vars['udetails']->value['usr_status']!='Ok') {?>
	<?php echo smarty_lang(array('code'=>'signup_success_usr_ok'),$_smarty_tpl);?>

	<?php } else { ?>
	<?php echo smarty_lang(array('code'=>'signup_success_usr_emailverify','assign'=>'signupsuccessusremailverify'),$_smarty_tpl);?>

	<?php echo cblink(array('name'=>'login','assign'=>'login_link'),$_smarty_tpl);?>

	<?php echo sprintf($_smarty_tpl->tpl_vars['signupsuccessusremailverify']->value,$_smarty_tpl->tpl_vars['login_link']->value);?>

	<?php }?>
</div>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars['mode'])) {$_smarty_tpl->tpl_vars['mode'] = clone $_smarty_tpl->tpl_vars['mode'];
$_smarty_tpl->tpl_vars['mode']->value = $_GET['mode']; $_smarty_tpl->tpl_vars['mode']->nocache = null; $_smarty_tpl->tpl_vars['mode']->scope = 0;
} else $_smarty_tpl->tpl_vars['mode'] = new Smarty_variable($_GET['mode'], null, 0);?>
<div class="account-container">
	<?php if ($_smarty_tpl->tpl_vars['mode']->value=='login') {?>
	<div class="clearfix signin-block">
		<div class="account-holder">
			<form name="login_form" method="post" action="" id="login_form" class="user-form">

				<div class="logo-section">
					<img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/new_layout/3dlogoname.png" alt="" width="100">
				</div>

				<!--<h2><?php echo smarty_lang(array('code'=>"welcome_centx"),$_smarty_tpl);?>
</h2>-->
				<div class="form-group">
					
					<input type="text" id="login_username_sp" placeholder="<?php echo smarty_lang(array('code'=>'type_username_here'),$_smarty_tpl);?>
"
						   class="form-control" name="username">
				</div>

				<div class="form-group">
					
					<input type="password" id="login_password_sp" placeholder="<?php echo smarty_lang(array('code'=>'type_password_here'),$_smarty_tpl);?>
"
						   class="form-control" name="password">
				</div>

				<div class="checkbox custom-elements form-group">
					<label>
						<input type="checkbox" name="remember_me" value="yes">
						<?php echo smarty_lang(array('code'=>"remember_me"),$_smarty_tpl);?>

					</label>
				</div>

				<input id="login_btn" type="submit" name="login" value="<?php echo lang('Login');?>
" class="btn btn-primary btn-lg btn-block">

				<!--<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/forgot.php?mode=recover_username"><?php echo smarty_lang(array('code'=>'user_forgot_username'),$_smarty_tpl);?>
</a> - -->
				<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/forgot.php" id="forgot_password" class="col_blue"><i class="fa fa-lock"></i><?php echo smarty_lang(array('code'=>'user_forgot_message'),$_smarty_tpl);?>
</a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/signup.php" id="create_new_account" class="float_right col_blue"><?php echo smarty_lang(array('code'=>'create_new_account'),$_smarty_tpl);?>
</a>
				<input type="hidden" name="login" value="login"></input>
				<?php if (function_exists('show_all_btns')) {?>
				<div class="clearfix social-links">
					<span>or login with</span>
					<div id="social_buttons">
						<?php echo ANCHOR(array('place'=>"show_all_btns"),$_smarty_tpl);?>

					</div>
				</div>
				<?php }?>
			</form>
			<!--<div class="side-box">-->
			<!--<h2><?php echo smarty_lang(array('code'=>'get_your_account'),$_smarty_tpl);?>
</h2>-->
			<!--<div class="text-box">-->
			<!--<p><?php echo smarty_lang(array('code'=>'create_account_msg'),$_smarty_tpl);?>
</p>-->
			<!--</div>-->
			<!--<a class="btn btn-default btn-lg" href="<?php echo cblink(array('name'=>'signup'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>'get_your_account'),$_smarty_tpl);?>
</a>-->
			<!--</div>-->
		</div>
	</div>
	<?php } else { ?>
	<div class="clearfix signup-block">
		<div class="account-holder">
			<?php if ($_smarty_tpl->tpl_vars['allow_registeration']->value) {?>
			<?php echo $_smarty_tpl->tpl_vars['allow_registeration']->value;?>

			<?php } else { ?>
			<form name="signup_form" id="signup_form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/signup.php"  class="user-form custom-elements">

				<div class="logo-section">
					<img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/new_layout/3dlogoname.png" alt="" width="100">
				</div>

				<!--<h2>Signup!</h2>-->
				<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['required_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['field']->value['type']!='checkbox'&&$_smarty_tpl->tpl_vars['field']->value['type']!='radiobutton') {?>
				<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
				<?php }?>

				<div class="form-group clearfix">
					
					<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radiobutton') {?>
					<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = "radio-inline";?>
					<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['sep'] = " ";?>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='checkbox') {?>
					<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = "checkbox-inline";?>
					<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['sep'] = " ";?>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_before']) {?>
					<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_before'];?>
</span>
					<?php }?>

					<?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>

					<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value,false,true);?>

					<?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_after']),$_smarty_tpl);?>

					<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_after']) {?>
					<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_after'];?>
</span>
					<?php }?>
				</div>
				<?php } ?>
				<!-- Loading Custom Fields -->
				<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['custom_field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
				<div class="form-group clearfix">
					
					<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radiobutton') {?>
					<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = "radio-inline";?>
					<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['sep'] = " ";?>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='checkbox') {?>
					<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = "checkbox-inline";?>
					<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['sep'] = " ";?>
					<?php }?>


					<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_before']) {?>
					<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_before'];?>
</span>
					<?php }?>
					<?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>


					<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

					<?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_after']),$_smarty_tpl);?>

					<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_after']) {?>
					<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_after'];?>
</span>
					<?php }?>
				</div>
				<?php } ?>

				<?php if (isset($_smarty_tpl->tpl_vars['captcha'])) {$_smarty_tpl->tpl_vars['captcha'] = clone $_smarty_tpl->tpl_vars['captcha'];
$_smarty_tpl->tpl_vars['captcha']->value = get_captcha(); $_smarty_tpl->tpl_vars['captcha']->nocache = null; $_smarty_tpl->tpl_vars['captcha']->scope = 0;
} else $_smarty_tpl->tpl_vars['captcha'] = new Smarty_variable(get_captcha(), null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['captcha']->value['show_field']) {?>
				
				<?php echo load_captcha(array('captcha'=>$_smarty_tpl->tpl_vars['captcha']->value,'load'=>'field','field_params'=>' id="verification_code" '),$_smarty_tpl);?>

				<?php }?>
				<div align="center">
					<?php echo load_captcha(array('captcha'=>$_smarty_tpl->tpl_vars['captcha']->value,'load'=>'function'),$_smarty_tpl);?>

				</div>

				<?php }?>

				<div class="form-group checkbox">
					<label>
						<input name="agree" type="checkbox" id="agree" value="yes" checked="checked">
						<?php echo sprintf(lang('user_i_agree_to_the'),$_smarty_tpl->tpl_vars['cbpage']->value->get_page_link(3),$_smarty_tpl->tpl_vars['cbpage']->value->get_page_link(2));?>


					</label>
				</div>
				<?php echo ANCHOR(array('place'=>"the_form"),$_smarty_tpl);?>

				<input type="hidden" name="signup" value="signup"></input>
				<div class="form-group checkbox">
					<button type="submit" name="signup" value="signup" class="btn btn-success btn-lg btn-block" id="signup_submit"><?php echo smarty_lang(array('code'=>'signup'),$_smarty_tpl);?>
</button>
				</div>
				<?php echo ANCHOR(array('place'=>'signup_form'),$_smarty_tpl);?>

				<?php if (function_exists('show_all_btns')) {?>
				<div class="clearfix social-links">
					<span>or login with</span>
					<div id="social_buttons">
						<?php echo ANCHOR(array('place'=>"show_all_btns"),$_smarty_tpl);?>

					</div>
				</div>
				<?php }?>
			</form>
			<?php }?>
		</div>
	</div>
	<?php }?>
</div>
<?php }?>

<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>

    $(document).ready(function(){

        $('#category').parent('.form-group').find('.select-area').hide();

        var pageMode = "<?php echo $_GET['mode'];?>
";
        if (pageMode == 'login') {
            document.title = 'Login - <?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->configs['site_title'];?>
';
        }
        jQuery('#dob').datepicker({
            showOtherMonths: true,
            selectOtherMonths: false,
            changeMonth: true,
            dateFormat:"yy-mm-dd",
            changeYear: true,
            yearRange: "-56:+0"
        });
        $('.simple_container').addClass('alert-success alert container');
        // var currentDate = new Date("1988,04,07");
        // $("#dob").datepicker("setDate", currentDate);

        $('#signup_form #dob').val('Date of Birth');
    });

    var errors = {
        "empty_name" : "<?php echo smarty_lang(array('code'=>'usr_uname_err'),$_smarty_tpl);?>
",
        "name_length" : "<?php echo smarty_lang(array('code'=>'user_name_invalid_len'),$_smarty_tpl);?>
",
        "name_invalid_chars" : "<?php echo smarty_lang(array('code'=>'usr_uname_err3'),$_smarty_tpl);?>
",
        "pass_mismatch" : "<?php echo smarty_lang(array('code'=>'usr_pass_err3'),$_smarty_tpl);?>
",
        "empty_pass" : "<?php echo smarty_lang(array('code'=>'usr_pass_err2'),$_smarty_tpl);?>
",
        "empty_email" : "<?php echo smarty_lang(array('code'=>'usr_email_err1'),$_smarty_tpl);?>
" ,
        "invalid_email":"<?php echo smarty_lang(array('code'=>'usr_email_err2'),$_smarty_tpl);?>
",
        "user_exists":"<?php echo smarty_lang(array('code'=>'usr_uname_err2'),$_smarty_tpl);?>
",
        "email_exists":"<?php echo smarty_lang(array('code'=>'usr_email_err3'),$_smarty_tpl);?>
",
        "weak_pass":"<?php echo smarty_lang(array('code'=>'weak_pass'),$_smarty_tpl);?>
",
        "username_spaces":"<?php echo smarty_lang(array('code'=>'username_spaces'),$_smarty_tpl);?>
",
    };
    function removeErrClass(obj, passSec = false) {
        $(obj).closest('.form-group').removeClass('invalid-error');
        $(obj).closest('.form-group').removeClass('warning-ind');
        $(obj).closest('.form-group').addClass('success-ind');
        $(obj).next('span').remove();
        if (passSec == true) {
            theVal = 'password';
        } else {
            theVal = $(obj).val();
        }
        $('<span class="help-block"><strong>'+theVal+'</strong> seems good to go</span>').insertAfter(obj);
    }

    function addErrClass(obj, msg, override = false, scroll = true, tclass = false) {
        $(obj).closest('.form-group').removeClass('success-ind');
        if (tclass != false) {
            $(obj).closest('.form-group').removeClass('invalid-error');
            $(obj).closest('.form-group').addClass(tclass);
        } else {
            $(obj).closest('.form-group').removeClass('warning-ind');
            $(obj).closest('.form-group').addClass('invalid-error');
        }
        if (override == true) {
            $(obj).next('span').remove();
        }
        $('<span class="help-block">'+msg+"</span>").insertAfter(obj);
        if (scroll == true) {
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }
    }

    $('input#username').on('keyup', function() {
        var userSect = $('#username'),
            usernameVal = userSect.val(),
            usernameLen = usernameVal.length;
        if (usernameVal == '') {
            addErrClass(userSect, errors["empty_name"], true, false);
        } else if (usernameLen <= 2 || usernameLen >= 50) {
            addErrClass(userSect, errors["name_length"], true, false);
        } else if (userSect.val().indexOf(' ') >= 0) {
            addErrClass(userSect, errors["username_spaces"], true, false);
        } else {
            if(!userSect.val().match(/^[A-Za-z0-9_.]+$/)){
                addErrClass(userSect, errors["name_invalid_chars"], true, false);
            }else{
                $.ajax({
                    url: baseurl + "/ajax/commonAjax.php",
                    type: "post",
                    dataType: "html",
                    data: {
                        "mode":'userExists',
                        "username":usernameVal,
                    },
                    beforeSend: function() {
                        $(document).find('#more-view-channel').text('Loading videos..')
                    },

                    success: function(data) {
                        data = $.trim(data);
                        if (data == 'NO') {
                            removeErrClass(userSect);
                        } else {
                            addErrClass(userSect, errors['user_exists'], true, false)
                        }
                    }
                });
            }
        }
    });

    $('input#email').on('keyup change', function() {
        var emailSec = $('#email'),
            email = emailSec.val(),
            emailLen = email.length;
        if (emailLen == 0 || email == '') {
            addErrClass(emailSec, errors["empty_email"], true, false);
        } else if (!isValidEmail(email)) {
            addErrClass(emailSec, errors["invalid_email"], true, false);
        } else if (isValidEmail(email)) {
            removeErrClass(emailSec);
        } else {
            $.ajax({
                url: baseurl + "/ajax/commonAjax.php",
                type: "post",
                dataType: "html",
                data: {
                    "mode":'emailExists',
                    "email":email,
                },
                beforeSend: function() {
                    $(document).find('#more-view-channel').text('Loading videos..')
                },

                success: function(data) {
                    data = $.trim(data);
                    if (data == 'NO') {
                        removeErrClass(emailSec);
                    } else {
                        addErrClass(emailSec, errors['email_exists'], true, false)
                    }
                }
            });
        }
    });

    $('input#password').on('keyup', function() {
        var passSec = $('#password'),
            passVal = passSec.val(),
            passLen = passVal.length;
        if (passLen == 0 || passVal == '') {
            addErrClass(passSec, errors["empty_pass"], true, false);
        } else {
            if (passLen < 8) {
                addErrClass(passSec,errors["weak_pass"],true, false ,'warning-ind');
            } else {
                removeErrClass(passSec,true);
            }
        }
    });

    $('input#cpassword').on('keyup', function() {
        var cPassSec = $('#cpassword'),
            cPassVal = cPassSec.val();
        passVal = $('#password').val();
        if (cPassVal != passVal) {
            addErrClass(cPassSec, errors["pass_mismatch"], true, false);
        } else {
            removeErrClass(cPassSec,true);
        }
    });

    /*$('input#login_username_sp').on('keyup change', function() {
         var userName = $('#login_username_sp'),
         user = userName.val(),
         userLen = user.length;
         if (userLen > 50 || userLen < 2) {
             $('#login_btn').attr('disabled','disabled');
             addErrClass(userName, errors["name_length"], true, false);
         } else if (user.indexOf(' ') >= 0) {
             $('#login_btn').attr('disabled','disabled');
             addErrClass(userName, errors["username_spaces"], true, false);
         } else {
             removeErrClass(userName);
             $('#login_btn').removeAttr('disabled');

         }
    });*/

    $('#login_btn').on("click",function(e){
        e.preventDefault();
        $('#login_form').submit();
    });

    $('#signup_submit').on("click",function(e){
        e.preventDefault();
        $('.help-block').remove();
        $('div').removeClass('invalid-error');
        var usernameSect = $('#username'),
            username = usernameSect.val(),
            emailSect = $('#email'),
            email = emailSect.val(),
            passwordSect = $('#password'),
            password = passwordSect.val(),
            cpasswordSect = $('#cpassword'),
            cpassword = cpasswordSect.val();
        gotNums = username.match(/\d+/g);
        var goodToGo = true;

        var dobSect = $('#dob');
        var dob = dobSect.val();
        if (dob == 'Date of Birth') {
            addErrClass(dobSect, "Please input date of birth");
            goodToGo = false;
		}

        if (username.length == 0) {
            addErrClass(usernameSect, errors["empty_name"]);
            goodToGo = false;
        } else if (username.length < 2 || username.length > 50) {
            addErrClass(usernameSect, errors["name_length"]);
            goodToGo = false;
        } else if (username.indexOf(' ') >= 0) {
            addErrClass(usernameSect, errors["username_spaces"]);
            goodToGo = false;
        } else if(!username.match(/^[A-Za-z0-9_.]+$/)){
            addErrClass(usernameSect, errors["name_invalid_chars"], true, false);
            goodToGo = false;
        }

        /*if (gotNums != null) {
            addErrClass(usernameSect, errors["name_invalid_chars"]);
            goodToGo = false;
        } */

        if (email.length == 0) {
            addErrClass(emailSect, errors["empty_email"]);
            goodToGo = false;
        // } else if (!isValidEmail(email)) {
        //     addErrClass(emailSect, errors["invalid_email"]);
        //     goodToGo = false;
        }

        if (password.length == 0)  {
            addErrClass(passwordSect, errors["empty_pass"]);
            goodToGo = false;
        }

        if (password != cpassword) {
            addErrClass(cpasswordSect, errors["pass_mismatch"]);
            goodToGo = false;
        }

        if (goodToGo == true) {
            $('#signup_form').submit();
        }
    });

</script>

<style>
	.ui-datepicker {
		background: #fff;
		/*border: 1px solid #357EBD;*/
		width: 140px;
		vertical-align: center;
	}
</style><?php }} ?>
