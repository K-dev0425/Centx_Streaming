<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 21:56:44
         compiled from "/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/manage_price.html" */ ?>
<?php /*%%SmartyHeaderCode:207033957960bd449cb0c0b2-92771965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c42d9028641f571d9040ecda5869a45717fa7c80' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/manage_price.html',
      1 => 1622800746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207033957960bd449cb0c0b2-92771965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Cbucket' => 0,
    'video_fee' => 0,
    'ad_fee' => 0,
    'video_max_price' => 0,
    'audio_max_price' => 0,
    'min_value_per_second_ad' => 0,
    'max_value_per_second_ad' => 0,
    'min_value_per_second_content' => 0,
    'max_value_per_second_content' => 0,
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bd449cb64410_71163515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bd449cb64410_71163515')) {function content_60bd449cb64410_71163515($_smarty_tpl) {?><!--<link href="../theme/stylesheet.css" rel="stylesheet" type="text/css">-->
<?php if (isset($_smarty_tpl->tpl_vars['video_fee'])) {$_smarty_tpl->tpl_vars['video_fee'] = clone $_smarty_tpl->tpl_vars['video_fee'];
$_smarty_tpl->tpl_vars['video_fee']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['video_fee']; $_smarty_tpl->tpl_vars['video_fee']->nocache = null; $_smarty_tpl->tpl_vars['video_fee']->scope = 0;
} else $_smarty_tpl->tpl_vars['video_fee'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['video_fee'], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['ad_fee'])) {$_smarty_tpl->tpl_vars['ad_fee'] = clone $_smarty_tpl->tpl_vars['ad_fee'];
$_smarty_tpl->tpl_vars['ad_fee']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['ad_fee']; $_smarty_tpl->tpl_vars['ad_fee']->nocache = null; $_smarty_tpl->tpl_vars['ad_fee']->scope = 0;
} else $_smarty_tpl->tpl_vars['ad_fee'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['ad_fee'], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['video_max_price'])) {$_smarty_tpl->tpl_vars['video_max_price'] = clone $_smarty_tpl->tpl_vars['video_max_price'];
$_smarty_tpl->tpl_vars['video_max_price']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['video_max_price']; $_smarty_tpl->tpl_vars['video_max_price']->nocache = null; $_smarty_tpl->tpl_vars['video_max_price']->scope = 0;
} else $_smarty_tpl->tpl_vars['video_max_price'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['video_max_price'], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['audio_max_price'])) {$_smarty_tpl->tpl_vars['audio_max_price'] = clone $_smarty_tpl->tpl_vars['audio_max_price'];
$_smarty_tpl->tpl_vars['audio_max_price']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['audio_max_price']; $_smarty_tpl->tpl_vars['audio_max_price']->nocache = null; $_smarty_tpl->tpl_vars['audio_max_price']->scope = 0;
} else $_smarty_tpl->tpl_vars['audio_max_price'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['audio_max_price'], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['max_value_per_second_ad'])) {$_smarty_tpl->tpl_vars['max_value_per_second_ad'] = clone $_smarty_tpl->tpl_vars['max_value_per_second_ad'];
$_smarty_tpl->tpl_vars['max_value_per_second_ad']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['max_value_per_second_ad']; $_smarty_tpl->tpl_vars['max_value_per_second_ad']->nocache = null; $_smarty_tpl->tpl_vars['max_value_per_second_ad']->scope = 0;
} else $_smarty_tpl->tpl_vars['max_value_per_second_ad'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['max_value_per_second_ad'], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['max_value_per_second_content'])) {$_smarty_tpl->tpl_vars['max_value_per_second_content'] = clone $_smarty_tpl->tpl_vars['max_value_per_second_content'];
$_smarty_tpl->tpl_vars['max_value_per_second_content']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['max_value_per_second_content']; $_smarty_tpl->tpl_vars['max_value_per_second_content']->nocache = null; $_smarty_tpl->tpl_vars['max_value_per_second_content']->scope = 0;
} else $_smarty_tpl->tpl_vars['max_value_per_second_content'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['max_value_per_second_content'], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['min_value_per_second_ad'])) {$_smarty_tpl->tpl_vars['min_value_per_second_ad'] = clone $_smarty_tpl->tpl_vars['min_value_per_second_ad'];
$_smarty_tpl->tpl_vars['min_value_per_second_ad']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['min_value_per_second_ad']; $_smarty_tpl->tpl_vars['min_value_per_second_ad']->nocache = null; $_smarty_tpl->tpl_vars['min_value_per_second_ad']->scope = 0;
} else $_smarty_tpl->tpl_vars['min_value_per_second_ad'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['min_value_per_second_ad'], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['min_value_per_second_content'])) {$_smarty_tpl->tpl_vars['min_value_per_second_content'] = clone $_smarty_tpl->tpl_vars['min_value_per_second_content'];
$_smarty_tpl->tpl_vars['min_value_per_second_content']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['min_value_per_second_content']; $_smarty_tpl->tpl_vars['min_value_per_second_content']->nocache = null; $_smarty_tpl->tpl_vars['min_value_per_second_content']->scope = 0;
} else $_smarty_tpl->tpl_vars['min_value_per_second_content'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['min_value_per_second_content'], null, 0);?>
<div class="heading">
    <h2>Manage Price</h2>
</div>

<!--<a class="btn btn-primary btn-sm pull-right" href="?mode=add">Add New Level <b>+</b></a>-->
<br>

<form action="#" id="form_price" method="post">
    <div class="row">
        <div class="form-group col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <label for="video_fee"><b><?php echo smarty_lang(array('code'=>"video_fee"),$_smarty_tpl);?>
(%):</b></label> <br>
            <input type="number" name="video_fee" id="video_fee" value="<?php echo (int)$_smarty_tpl->tpl_vars['video_fee']->value;?>
">
        </div>
        <div class="form-group col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <label for="ad_fee"><b><?php echo smarty_lang(array('code'=>"ad_fee"),$_smarty_tpl);?>
(%):</b></label> <br>
            <input type="number" name="ad_fee" id="ad_fee" value="<?php echo (int)$_smarty_tpl->tpl_vars['ad_fee']->value;?>
">
        </div>
        <div class="form-group col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <label for="video_max_price"><b><?php echo smarty_lang(array('code'=>"video_max_price"),$_smarty_tpl);?>
($USD):</b></label> <br>
            <input type="number" name="video_max_price" id="video_max_price" value="<?php echo (int)$_smarty_tpl->tpl_vars['video_max_price']->value;?>
">
        </div>
        <div class="form-group col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <label for="audio_max_price"><b><?php echo smarty_lang(array('code'=>"audio_max_price"),$_smarty_tpl);?>
($USD):</b></label> <br>
            <input type="number" name="audio_max_price" id="audio_max_price" value="<?php echo (int)$_smarty_tpl->tpl_vars['audio_max_price']->value;?>
">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <label for="min_value_per_second_ad"><b><?php echo smarty_lang(array('code'=>"min_value_per_second_ad"),$_smarty_tpl);?>
($USD):</b></label> <br>
            <input type="number" name="min_value_per_second_ad" id="min_value_per_second_ad" value="<?php echo $_smarty_tpl->tpl_vars['min_value_per_second_ad']->value;?>
">
        </div>
        <div class="form-group col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <label for="max_value_per_second_ad"><b><?php echo smarty_lang(array('code'=>"max_value_per_second_ad"),$_smarty_tpl);?>
($USD):</b></label> <br>
            <input type="number" name="max_value_per_second_ad" id="max_value_per_second_ad" value="<?php echo $_smarty_tpl->tpl_vars['max_value_per_second_ad']->value;?>
">
        </div>
        <div class="form-group col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <label for="min_value_per_second_content"><b><?php echo smarty_lang(array('code'=>"min_value_per_second_content"),$_smarty_tpl);?>
($USD):</b></label> <br>
            <input type="number" name="min_value_per_second_content" id="min_value_per_second_content" value="<?php echo $_smarty_tpl->tpl_vars['min_value_per_second_content']->value;?>
">
        </div>
        <div class="form-group col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <label for="max_value_per_second_content"><b><?php echo smarty_lang(array('code'=>"max_value_per_second_content"),$_smarty_tpl);?>
($USD):</b></label> <br>
            <input type="number" name="max_value_per_second_content" id="max_value_per_second_content" value="<?php echo $_smarty_tpl->tpl_vars['max_value_per_second_content']->value;?>
">
        </div>
    </div>
    <br>
    <button class="btn btn-success" type="button" id="btn_submit">Update Settings</button>
</form>

<script>
    var baseurl = '<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
';

    $(document).ready(function () {
        $('#btn_submit').click(function () {
            var form_data = $('#form_price').serialize();

            $.ajax({
                url: baseurl + '/admin_area/manage_price.php',
                type: 'post',
                data: form_data,
                success: function (msg) {
                    if (msg) {
                        alert('Successfully updated.');
                        window.location.reload();
                    }
                }
            })
        })
    });

</script><?php }} ?>
