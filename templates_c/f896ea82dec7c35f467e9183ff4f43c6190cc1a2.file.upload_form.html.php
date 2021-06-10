<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 21:49:58
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/global/upload_form.html" */ ?>
<?php /*%%SmartyHeaderCode:48591121860bd430662e073-94405617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f896ea82dec7c35f467e9183ff4f43c6190cc1a2' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/global/upload_form.html',
      1 => 1622800568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48591121860bd430662e073-94405617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input' => 0,
    'Upload' => 0,
    'videoFields' => 0,
    'userquery' => 0,
    'Cbucket' => 0,
    'requiredFields' => 0,
    'file_type' => 0,
    'field' => 0,
    'formObj' => 0,
    'custom_flag' => 0,
    'custom_fields' => 0,
    'dateAndLocation' => 0,
    'sharingOptions' => 0,
    'video_max_price' => 0,
    'max_value_per_second_content' => 0,
    'required_fields' => 0,
    'item' => 0,
    'categories' => 0,
    'allowed_extensions' => 0,
    'max_upload_size' => 0,
    'min_value_per_second_ad' => 0,
    'max_value_per_second_ad' => 0,
    'min_value_per_second_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bd430671f912_67997973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bd430671f912_67997973')) {function content_60bd430671f912_67997973($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['videoFields'])) {$_smarty_tpl->tpl_vars['videoFields'] = clone $_smarty_tpl->tpl_vars['videoFields'];
$_smarty_tpl->tpl_vars['videoFields']->value = $_smarty_tpl->tpl_vars['Upload']->value->load_video_fields($_smarty_tpl->tpl_vars['input']->value); $_smarty_tpl->tpl_vars['videoFields']->nocache = null; $_smarty_tpl->tpl_vars['videoFields']->scope = 0;
} else $_smarty_tpl->tpl_vars['videoFields'] = new Smarty_variable($_smarty_tpl->tpl_vars['Upload']->value->load_video_fields($_smarty_tpl->tpl_vars['input']->value), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['requiredFields'])) {$_smarty_tpl->tpl_vars['requiredFields'] = clone $_smarty_tpl->tpl_vars['requiredFields'];
$_smarty_tpl->tpl_vars['requiredFields']->value = $_smarty_tpl->tpl_vars['videoFields']->value[0]; $_smarty_tpl->tpl_vars['requiredFields']->nocache = null; $_smarty_tpl->tpl_vars['requiredFields']->scope = 0;
} else $_smarty_tpl->tpl_vars['requiredFields'] = new Smarty_variable($_smarty_tpl->tpl_vars['videoFields']->value[0], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['sharingOptions'])) {$_smarty_tpl->tpl_vars['sharingOptions'] = clone $_smarty_tpl->tpl_vars['sharingOptions'];
$_smarty_tpl->tpl_vars['sharingOptions']->value = $_smarty_tpl->tpl_vars['videoFields']->value[1]; $_smarty_tpl->tpl_vars['sharingOptions']->nocache = null; $_smarty_tpl->tpl_vars['sharingOptions']->scope = 0;
} else $_smarty_tpl->tpl_vars['sharingOptions'] = new Smarty_variable($_smarty_tpl->tpl_vars['videoFields']->value[1], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['dateAndLocation'])) {$_smarty_tpl->tpl_vars['dateAndLocation'] = clone $_smarty_tpl->tpl_vars['dateAndLocation'];
$_smarty_tpl->tpl_vars['dateAndLocation']->value = $_smarty_tpl->tpl_vars['videoFields']->value[2]; $_smarty_tpl->tpl_vars['dateAndLocation']->nocache = null; $_smarty_tpl->tpl_vars['dateAndLocation']->scope = 0;
} else $_smarty_tpl->tpl_vars['dateAndLocation'] = new Smarty_variable($_smarty_tpl->tpl_vars['videoFields']->value[2], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['custom_fields'])) {$_smarty_tpl->tpl_vars['custom_fields'] = clone $_smarty_tpl->tpl_vars['custom_fields'];
$_smarty_tpl->tpl_vars['custom_fields']->value = $_smarty_tpl->tpl_vars['videoFields']->value[4]; $_smarty_tpl->tpl_vars['custom_fields']->nocache = null; $_smarty_tpl->tpl_vars['custom_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['custom_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['videoFields']->value[4], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['required_fields'])) {$_smarty_tpl->tpl_vars['required_fields'] = clone $_smarty_tpl->tpl_vars['required_fields'];
$_smarty_tpl->tpl_vars['required_fields']->value = array_filter($_smarty_tpl->tpl_vars['userquery']->value->load_signup_fields()); $_smarty_tpl->tpl_vars['required_fields']->nocache = null; $_smarty_tpl->tpl_vars['required_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['required_fields'] = new Smarty_variable(array_filter($_smarty_tpl->tpl_vars['userquery']->value->load_signup_fields()), null, 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['video_max_price'])) {$_smarty_tpl->tpl_vars['video_max_price'] = clone $_smarty_tpl->tpl_vars['video_max_price'];
$_smarty_tpl->tpl_vars['video_max_price']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['video_max_price']; $_smarty_tpl->tpl_vars['video_max_price']->nocache = null; $_smarty_tpl->tpl_vars['video_max_price']->scope = 0;
} else $_smarty_tpl->tpl_vars['video_max_price'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['video_max_price'], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['audio_max_price'])) {$_smarty_tpl->tpl_vars['audio_max_price'] = clone $_smarty_tpl->tpl_vars['audio_max_price'];
$_smarty_tpl->tpl_vars['audio_max_price']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['audio_max_price']; $_smarty_tpl->tpl_vars['audio_max_price']->nocache = null; $_smarty_tpl->tpl_vars['audio_max_price']->scope = 0;
} else $_smarty_tpl->tpl_vars['audio_max_price'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['audio_max_price'], null, 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['config_for_mp4'])) {$_smarty_tpl->tpl_vars['config_for_mp4'] = clone $_smarty_tpl->tpl_vars['config_for_mp4'];
$_smarty_tpl->tpl_vars['config_for_mp4']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['stay_mp4']; $_smarty_tpl->tpl_vars['config_for_mp4']->nocache = null; $_smarty_tpl->tpl_vars['config_for_mp4']->scope = 0;
} else $_smarty_tpl->tpl_vars['config_for_mp4'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['stay_mp4'], null, 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['allowed_extensions'])) {$_smarty_tpl->tpl_vars['allowed_extensions'] = clone $_smarty_tpl->tpl_vars['allowed_extensions'];
$_smarty_tpl->tpl_vars['allowed_extensions']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['allowed_document_extensions']; $_smarty_tpl->tpl_vars['allowed_extensions']->nocache = null; $_smarty_tpl->tpl_vars['allowed_extensions']->scope = 0;
} else $_smarty_tpl->tpl_vars['allowed_extensions'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['allowed_document_extensions'], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['max_upload_size'])) {$_smarty_tpl->tpl_vars['max_upload_size'] = clone $_smarty_tpl->tpl_vars['max_upload_size'];
$_smarty_tpl->tpl_vars['max_upload_size']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['allowed_document_size']; $_smarty_tpl->tpl_vars['max_upload_size']->nocache = null; $_smarty_tpl->tpl_vars['max_upload_size']->scope = 0;
} else $_smarty_tpl->tpl_vars['max_upload_size'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['allowed_document_size'], null, 0);?>

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

<div class="uploaderContainer clearfix" id="uploaderContainer">
    <div class="upload-area col-md-12">
        <div class="fileUploaderForm">
            <div class="dragDropContainer" id="dragDrop">
                <span class="upload-logo"></span>
                <strong class="block-title"><?php echo smarty_lang(array('code'=>"drag_drop"),$_smarty_tpl);?>
</strong>
                <p><?php echo smarty_lang(array('code'=>"upload_text"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->configs['max_upload_size'];?>
 <?php echo smarty_lang(array('code'=>"upload_txt"),$_smarty_tpl);?>
 , <?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->configs['max_video_duration'];?>
 <?php echo smarty_lang(array('code'=>"upload_txt2"),$_smarty_tpl);?>
</p>
            </div>
            <div class="selectButtonContainer">
                <a id="selectFiles" href="javascript:;" class="btn btn-primary btn-lg selectFiles"><?php echo smarty_lang(array('code'=>"select_video"),$_smarty_tpl);?>
</a>
                <!-- <p>Video can be 1000 MB in size, 120 Min in Duration and Any common format<br>You can also upload HD videos</p> -->
            </div>
            <!-- <a id="uploadFiles" class="btn btn-success" href="javascript:;">Upload</a> -->

        </div>
    </div>
</div>

<!--R.K-->
<div id="check_ad_content" class="hidden">
    <div class="container">
        <h4><?php echo smarty_lang(array('code'=>"select_your_option"),$_smarty_tpl);?>
</h4>
        <div class="typesContainer">
            <input type="radio" name="video_type" id="check_radio_video" value="video" checked onchange="unset_ad()">
            <label for="check_radio_video"><?php echo smarty_lang(array('code'=>"video_check_label"),$_smarty_tpl);?>
</label><br>
            <input type="radio" name="video_type" id="check_radio_ad" value="ad" onchange="set_ad()">
            <label for="check_radio_ad"><?php echo smarty_lang(array('code'=>"ad_check_label"),$_smarty_tpl);?>
</label>
        </div>
        <button class="btn btn-primary" id="btn_check_pay_type"> Next </button>
    </div>
</div>

<div id="uploadDataContainer" class="uploadDataContainer hidden">
    <div class="uploadingProgressContainer">
    </div>
    <div class="realProgressBars">

    </div>
    <!--<div class="align-right hidden" id="uploadMore">-->
        <!--<a href="#" class="btn btn-primary uploadMoreVideos" id="uploadMoreVideos"><?php echo smarty_lang(array('code'=>"upload_more_videos"),$_smarty_tpl);?>
</a>-->

    <!--</div>-->
    <div id="files"></div>
    <div id="allUploadForms" class="tab-content allUploadForms"></div>
</div>

<form action="#" id="updateVideoInfoForm" class="hidden" enctype="multipart/form-data" method="post">
    <div class="row">
        <div class="col-md-8">
            <div class="" id="updateVideoInfo">
                <fieldset class="">
                    <legend class=""><?php echo $_smarty_tpl->tpl_vars['requiredFields']->value['group_name'];?>
</legend>
                </fieldset>
                <div class="requiredFields">

                    <input type="hidden" name="file_type" id="file_type" value="<?php echo $_smarty_tpl->tpl_vars['file_type']->value;?>
">

                    <?php if ($_smarty_tpl->tpl_vars['file_type']->value=='audio') {?>
                    <!--<h4><?php echo smarty_lang(array('code'=>"audio_type"),$_smarty_tpl);?>
</h4>-->
                    <div class="typesContainer">
                        <input type="radio" name="audio_type" id="radio_audiobook" value="audiobook" checked>
                        <label for="radio_audiobook"><?php echo smarty_lang(array('code'=>"audiobook"),$_smarty_tpl);?>
</label><br>
                        <input type="radio" name="audio_type" id="radio_podcast" value="podcast">
                        <label for="radio_podcast"><?php echo smarty_lang(array('code'=>"podcast"),$_smarty_tpl);?>
</label>
                    </div>

                    <div class="typesContainer hidden">
                        <input type="radio" name="video_type" id="video_audio" value="video" checked onchange="unset_ad()">
                        <label for="video_audio"><?php echo smarty_lang(array('code'=>"pay"),$_smarty_tpl);?>
</label><br>
                        <input type="radio" name="video_type" id="ad_audio" value="ad" onchange="set_ad()">
                        <label for="ad_audio"><?php echo smarty_lang(array('code'=>"get_paid"),$_smarty_tpl);?>
</label>
                    </div>
                    <?php } else { ?>
                    <h4 class="hidden"><?php echo smarty_lang(array('code'=>"video_type"),$_smarty_tpl);?>
</h4>
                    <div class="typesContainer hidden">
                        <input type="radio" name="video_type" id="radio_video" value="video" checked onchange="unset_ad()">
                        <label for="radio_video"><?php echo smarty_lang(array('code'=>"video"),$_smarty_tpl);?>
</label><br>
                        <input type="radio" name="video_type" id="radio_ad" value="ad" onchange="set_ad()">
                        <label for="radio_ad"><?php echo smarty_lang(array('code'=>"advertisement"),$_smarty_tpl);?>
</label>
                    </div>
                    <?php }?>

                  <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['requiredFields']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                        <div class="form-group">
                        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['notShowSeprator'] = 'yes';?>
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radiobutton') {?>
                            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'radio';?>
                            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = '';?>
                            <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='checkbox') {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['categories'])) {$_smarty_tpl->tpl_vars['categories'] = clone $_smarty_tpl->tpl_vars['categories'];
$_smarty_tpl->tpl_vars['categories']->value = $_smarty_tpl->tpl_vars['field']->value; $_smarty_tpl->tpl_vars['categories']->nocache = null; $_smarty_tpl->tpl_vars['categories']->scope = 0;
} else $_smarty_tpl->tpl_vars['categories'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value, null, 0);?>
                        <?php } else { ?>
                            <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
                            <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                        <?php }?>
                        </div>
                    <?php } ?>


                    <div id= "div_duration" class="form-group hidden">
                        <label for="duration">Duration</label>
                        <input type="text" placeholder="" name="duration" id="duration" class="form-control" cols="45">

                    </div>

                  <!--   <div class="form-group">
                        <label for="thumb12">Thumbnail</label>
                        <input  class="thumb12"  name="thumb12" type="file" placeholder=""   class="form-control" cols="45">
                    </div> -->


                    <?php echo ANCHOR(array('place'=>"upload_video_form"),$_smarty_tpl);?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['custom_flag']->value&&$_smarty_tpl->tpl_vars['custom_fields']->value!='') {?>
                    <div class="formSection clear">
                        <h4><?php echo $_smarty_tpl->tpl_vars['custom_fields']->value['group_name'];?>
 <i class="glyphicon glyphicon-chevron-down pull-right"></i></h4>
                        <div class="sectionContent hidden">
                            <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['custom_fields']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                            <div class="form-group">
                            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['notShowSeprator'] = 'yes';?>
                                <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radiobutton') {?>
                                    <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'radio';?>
                                    <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = '';?>
                                    <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='checkbox') {?>
                                    <h4><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</h4>
                                    <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'checkbox';?>
                                    <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'checkbox';?>
                                    <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                                <?php } else { ?>
                                    <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
                                    <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                                <?php }?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php }?>
                <div class="formSection clear">
                    <h4><?php echo $_smarty_tpl->tpl_vars['dateAndLocation']->value['group_name'];?>
 <i class="glyphicon glyphicon-chevron-down pull-right"></i></h4>
                    <div class="sectionContent hidden">
                        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dateAndLocation']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                        <div class="form-group">
                        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['notShowSeprator'] = 'yes';?>
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radiobutton') {?>
                                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'radio';?>
                                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = '';?>
                                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='checkbox') {?>
                                <h4><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</h4>
                                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'checkbox';?>
                                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'checkbox';?>
                                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                            <?php } else { ?>
                                <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
                                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                            <?php }?>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="formSection clear">
                    <h4><?php echo $_smarty_tpl->tpl_vars['sharingOptions']->value['group_name'];?>
<i class="glyphicon glyphicon-chevron-down pull-right"></i></h4>
                    <div class="sectionContent hidden">
                        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sharingOptions']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                            <div class="form-group">
                            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['notShowSeprator'] = 'yes';?>
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radiobutton') {?>
                                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'radio';?>
                                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = '';?>
                                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                            <?php } else { ?>
                                <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
                                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                            <?php }?>
                            </div>
                        <?php } ?>

                    </div>
                </div>

                <div class="formSection clear">
                    <h4>Set Price and Time <i class="glyphicon glyphicon-chevron-down pull-right"></i></h4>
                    <div class="sectionContent hidden">
                        <div class="form-group">
                            <label for="input_duration"><?php echo smarty_lang(array('code'=>"duration"),$_smarty_tpl);?>
</label>
                            <input type="text" id="input_duration" class="form-control" name="input_duration">
                        </div>
                        <div class="form-group" style="display: none;">
                            <label for="limit_price"><?php echo smarty_lang(array('code'=>"limit_price"),$_smarty_tpl);?>
</label>
                            <input type="hidden" id="limit_price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price_per_sec"><?php echo smarty_lang(array('code'=>"price_per_sec"),$_smarty_tpl);?>
</label>
                            <input type="text" id="price_per_sec" class="form-control" name="price_per_sec" value="0" onchange="check_price_per_second()" readonly>
                        </div>
                        <p>
                            <label for="price_per_sec_"><?php echo smarty_lang(array('code'=>"price_per_sec"),$_smarty_tpl);?>
:</label>
                            <input type="text" id="price_per_sec_" readonly style="border:0; color:#f6931f; font-weight:bold; background: transparent!important;">
                        </p>
                        <div id="price_per_sec_range">

                        </div>
                        <div class="form-group">
                            <label for="start_paying"><?php echo smarty_lang(array('code'=>"start_paying"),$_smarty_tpl);?>
</label>
                            <input type="number" id="start_paying" class="form-control" name="start_paying" value="0" readonly>
                        </div>
                        <div class="form-group">
                            <label for="end_paying"><?php echo smarty_lang(array('code'=>"end_paying"),$_smarty_tpl);?>
</label>
                            <input type="number" id="end_paying" class="form-control" name="end_paying" readonly>
                        </div>
                        <p>
                            <label for="amount"><?php echo smarty_lang(array('code'=>"payment_range"),$_smarty_tpl);?>
:</label>
                            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold; background: transparent!important;">
                        </p>
                        <div id="payment_range">

                        </div>
                        <div class="form-group" style="margin-top: 30px">
                            <!--<label for="total_price"><?php echo smarty_lang(array('code'=>"video_total_price_label"),$_smarty_tpl);?>
 <span id="max_price">$<?php echo $_smarty_tpl->tpl_vars['video_max_price']->value;?>
</span>, but the value per second (check the box below) can't be more than <span id="max_price_per_sec">$<?php echo $_smarty_tpl->tpl_vars['max_value_per_second_content']->value;?>
</span></label>-->
                            <label for="total_price" id="label_total_price"><?php echo smarty_lang(array('code'=>"total_price"),$_smarty_tpl);?>
: </label>
                            <input type="text" id="total_price" name="total_price" value="0" onchange="payment_slide()" readonly>
                        </div>
                    </div>
                </div>

                <div class="formSection clear">
                    <h4>Audience <i class="glyphicon glyphicon-chevron-down pull-right"></i></h4>
                    <div class="sectionContent hidden">
                        <div class="form-group">
                            <p>
                                <label for="amount">Allowed age range:</label>
                                <input type="text" id="age_amount" readonly style="border:0; color:#f6931f; font-weight:bold; background: transparent!important;">
                            </p>
                            <div id="age_range">

                            </div>
                            <input type="hidden" name="allowed_min_age" id="allowed_min_age" value="0">
                            <input type="hidden" id="allowed_max_age" name="allowed_max_age" value="65">
                        </div>
                        <div class="form-group">
                            <label >Gender</label>
                            <label class="radio">
                                <input type="radio" name="allowed_gender" value="both" id="both_gender" checked>
                                Everyone can watch this video
                            </label>
                            <label class="radio">
                                <input type="radio" name="allowed_gender" value="male" id="allow_male">
                                Only males can watch this video
                            </label>
                            <label class="radio">
                                <input type="radio" name="allowed_gender" value="female" id="allow_female">
                                Only females can watch this video
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <label class="radio">
                                <input type="radio" id="allowed_all_area" name="location_category" checked>
                                All area
                            </label>
                            <!--<label class="radio">-->
                                <!--<input type="radio" id="allowed_country" name="location_category" onclick="display_country();">-->
                                <!--Select country-->
                                <!--<br>-->
                                <!--&lt;!&ndash;<input type="text" id="input_country" class="form-control input_location input_hidden" name="allowed_country" value="">&ndash;&gt;-->
                                <!--<select name="allowed_country" id="input_country" class="form-control input_location input_hidden">-->
                                    <!--<option value="all">All</option>-->
                                    <!--<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['required_fields']->value['country']['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->value = $_smarty_tpl->tpl_vars['field']->key;
?>-->
                                        <!--<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</option>-->
                                    <!--<?php } ?>-->
                                <!--</select>-->
                            <!--</label>-->
                            <!--<label class="radio">-->
                                <!--<input type="radio" id="allowed_zipcode" name="location_category" onclick="display_zipcode();">-->
                                <!--Select zipcode-->
                                <!--<br>-->
                                <!--<input type="text" id="input_zipcode" class="form-control input_location input_hidden" name="allowed_zipcode" value="0">-->
                            <!--</label>-->
                            <label class="radio">
                                <input type="radio" id="allowed_area" name="location_category" onclick="display_map();">
                                Select area
                                <br>
                                <input type="hidden" name="center_lat" id="center_lat">
                                <input type="hidden" name="center_lng" id="center_lng">
                                <input type="hidden" name="map_radius" id="map_radius">
                            </label>
                        </div>

                        <div class="form-group">
                            <label>Registration required</label>
                            <label class="radio">
                                <input type="radio" name="allowed_verified" value="can_watch" id="can_watch" checked>
                                Not registered users can watch this video but won't get paid
                            </label>
                            <label class="radio">
                                <input type="radio" name="allowed_verified" value="not_watch" id="not_watch">
                                Not registered users can't watch this video
                            </label>
                        </div>
                    </div>
                </div>

                <div class="formSection clear" id="survey_section" style="display: none">
                    <h4>Survey <i class="glyphicon glyphicon-chevron-down pull-right"></i></h4>
                    <div class="sectionContent hidden">
                        <div class="form-group">
                            <label for="question_1">Question 1</label>
                            <input type="text" id="question_1" class="form-control" name="question_1">
                        </div>
                        <div class="form-group answer_1">
                            <label for="answer_1_1">Answer 1</label>
                            <input type="text" id="answer_1_1" class="form-control" name="answer_1_1">
                        </div>
                        <div class="form-group answer_1">
                            <label for="answer_1_2">Answer 2</label>
                            <input type="text" id="answer_1_2" class="form-control" name="answer_1_2">
                        </div>
                        <div class="form-group answer_1">
                            <label for="answer_1_3">Answer 3</label>
                            <input type="text" id="answer_1_3" class="form-control" name="answer_1_3">
                        </div>
                        <div class="form-group answer_1">
                            <label for="answer_1_4">Answer 4</label>
                            <input type="text" id="answer_1_4" class="form-control" name="answer_1_4">
                        </div>
                        <div class="form-group answer_1">
                            <label for="answer_1_5">Answer 5</label>
                            <input type="text" id="answer_1_5" class="form-control" name="answer_1_5">
                        </div>

                        <div class="form-group">
                            <label for="question_2">Question 2</label>
                            <input type="text" id="question_2" class="form-control" name="question_2">
                        </div>
                        <div class="form-group answer_2">
                            <label for="answer_2_1">Answer 1</label>
                            <input type="text" id="answer_2_1" class="form-control" name="answer_2_1">
                        </div>
                        <div class="form-group answer_2">
                            <label for="answer_2_2">Answer 2</label>
                            <input type="text" id="answer_2_2" class="form-control" name="answer_2_2">
                        </div>
                        <div class="form-group answer_2">
                            <label for="answer_2_3">Answer 3</label>
                            <input type="text" id="answer_2_3" class="form-control" name="answer_2_3">
                        </div>
                        <div class="form-group answer_2">
                            <label for="answer_2_4">Answer 4</label>
                            <input type="text" id="answer_2_4" class="form-control" name="answer_2_4">
                        </div>
                        <div class="form-group answer_2">
                            <label for="answer_2_5">Answer 5</label>
                            <input type="text" id="answer_2_5" class="form-control" name="answer_2_5">
                        </div>

                        <div class="form-group">
                            <label for="question_3">Question 3</label>
                            <input type="text" id="question_3" class="form-control" name="question_3">
                        </div>
                        <div class="form-group answer_3">
                            <label for="answer_3_1">Answer 1</label>
                            <input type="text" id="answer_3_1" class="form-control" name="answer_3_1">
                        </div>
                        <div class="form-group answer_3">
                            <label for="answer_3_2">Answer 2</label>
                            <input type="text" id="answer_3_2" class="form-control" name="answer_3_2">
                        </div>
                        <div class="form-group answer_3">
                            <label for="answer_3_3">Answer 3</label>
                            <input type="text" id="answer_3_3" class="form-control" name="answer_3_3">
                        </div>
                        <div class="form-group answer_3">
                            <label for="answer_3_4">Answer 4</label>
                            <input type="text" id="answer_3_4" class="form-control" name="answer_3_4">
                        </div>
                        <div class="form-group answer_3">
                            <label for="answer_3_5">Answer 5</label>
                            <input type="text" id="answer_3_5" class="form-control" name="answer_3_5">
                        </div>
                    </div>
                </div>

                <div id="sponsor_channel">
                    <h4><?php echo smarty_lang(array('code'=>"want_sponsor"),$_smarty_tpl);?>
</h4>
                    <p><?php echo smarty_lang(array('code'=>"sponsor_channel_text"),$_smarty_tpl);?>
</p>
                    <div class="form-group">
                        <input type="text" id="channel_name" name="channel_name" onkeyup="autocomplete_channel()">
                        <span id="selected_channels">

                        </span>
                        <input type="hidden" id="selected_channel_names" name="selected_channel_names">
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-4 uploadFormSidebarDiv">

            <h4><?php if ($_smarty_tpl->tpl_vars['file_type']->value=='audio') {?><?php echo smarty_lang(array('code'=>"audio_category"),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['categories']->value['title'];?>
<?php }?></h4>
            <small><?php echo $_smarty_tpl->tpl_vars['categories']->value['hint_1'];?>
</small>
            <div class="categoriesContainer">
                <?php $_smarty_tpl->createLocalArrayVariable('categories', null, 0);
$_smarty_tpl->tpl_vars['categories']->value['label_class'] = 'checkbox';?>
                <?php $_smarty_tpl->createLocalArrayVariable('categories', null, 0);
$_smarty_tpl->tpl_vars['categories']->value['class'] = 'checkbox';?>
                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['categories']->value);?>

            </div>

            <br><br>
            <h4><?php echo smarty_lang(array('code'=>"Attachments"),$_smarty_tpl);?>
</h4>
            <div class="form-group" id="video_attach">
                <input type="file" id="video_attach_file" onclick="this.value=null" name="video_attach_file" onchange="file_type_size_check(this)">
            </div>

            <br><br>
            <?php if ($_smarty_tpl->tpl_vars['file_type']->value=='audio') {?>
            <h4><?php echo smarty_lang(array('code'=>"background_image"),$_smarty_tpl);?>
</h4>
            <div class="form-group" id="audio_background_image">
                <input type="file" id="audio_image_file" name="audio_image_file" accept=".jpg,.png,.jpeg">
            </div>
            <?php }?>

        </div>
    </div>

    <div class="pad-bottom-sm text-right">
        <button class="btn btn-primary btn-lg" id="saveVideoDetails"><?php echo smarty_lang(array('code'=>"submit_now"),$_smarty_tpl);?>
</button>
        <button type="button" onclick="cancel_form()" class="btn btn-danger btn-lg" id="canCelUpload"><?php echo smarty_lang(array('code'=>"cancel"),$_smarty_tpl);?>
</button>
    </div>

    <style>
        .typesContainer {
            margin-bottom: 25px!important;
        }
        .typesContainer input {
            margin: 0;
        }
        #canCelUpload {
            border-color: #d15b47!important;
            border-radius: 7px;
        }
        #max_price_per_sec {
            font-weight: 600;
        }
        .input_hidden {
            display: none;
        }
        .answer_1 label, .answer_2 label, .answer_3 label {
            font-weight: 300;
        }
        .container.cb-box {
            color: #111!important;
            border-radius: 10px;
        }
        #price_per_sec_range {
            margin-bottom: 15px;
        }
        #label_total_price {
            font-size: 18px;
        }
        #total_price {
            color: #111111!important;
            border: none;
            background: transparent!important;
            font-weight: bold;
            font-size: 20px;
        }
    </style>

    <script>
        var allowed_document_extensions = "<?php echo $_smarty_tpl->tpl_vars['allowed_extensions']->value;?>
";
        var allowed_document_size = "<?php echo $_smarty_tpl->tpl_vars['max_upload_size']->value;?>
";
        var ext_list = allowed_document_extensions.split(',');
        var accepted = "";
        for(var i = 0; i < ext_list.length; i++) {
            accepted += "." + ext_list[i];
            if (i !== ext_list.length - 1) accepted += ",";
        }

        $(document).ready(function () {
            $('#video_password').parent('.form-group').remove();
            $('#video_users').parent('.form-group').remove();

            var menu_2th = $('#left-menu .menu-container ul li:eq(1)');
            if ($(menu_2th).text() == 'Videos') $('#left-menu .menu-container ul li:eq(1)').remove();

            const urlParams = new URLSearchParams(window.location.search);
            const file_type = urlParams.get('type');

            if (file_type == 'audio') {

                $('#selectFiles').text('Select Audio');
                $('#dragDrop p').text('Audio can be 1000MB in size, 320 Min in Duration and of any common format.');

            }

            $('#video_attach_file').attr('accept', accepted);

        });

        function cancel_form() {
            window.location.reload();
        }

        //Check the document file type and size
        function file_type_size_check(elem) {

            var ext = $(elem).val().split('.').pop();
            var size = elem.files[0].size;
            if (size > parseInt(allowed_document_size)*1000) {
                alert("File is too big");
                elem.value = null;
            }
            if (!ext_list.includes(ext)) {
                alert("Not Allowed Type");
                elem.value = null;
            }
        }

        //set ad limit price
        function set_ad() {
            $('#limit_price').parent().show();
            $('#limit_price').attr('type', 'text');
            $('#limit_price').attr('name', 'limit_price');
        }

        // hide ad limit price text
        function unset_ad() {
            $('#limit_price').parent().hide();
            $('#limit_price').attr('type', 'hidden');
            $('#limit_price').removeAttr('name');
        }

        function display_country() {
            $('#input_zipcode').addClass('input_hidden');
            $('#input_country').removeClass('input_hidden');
        }

        function display_zipcode() {
            $('#input_country').addClass('input_hidden');
            $('#input_zipcode').removeClass('input_hidden');
        }

        var video_max_price = "<?php echo $_smarty_tpl->tpl_vars['video_max_price']->value;?>
";
        var max_value_per_second_content = "<?php echo $_smarty_tpl->tpl_vars['max_value_per_second_content']->value;?>
";

        // payment slider
         function payment_slide() {

             var duration = $('#duration').val();
             var start_paying = '0';
             if ($('#start_paying').val() != undefined && $('#start_paying').val() != '' && $('#start_paying').val() != '0') {
                 start_paying = $('#start_paying').val();
             }
             var end_paying = $('#end_paying').val();
             var price_per_sec = $('#price_per_sec').val();

             var total_price = parseFloat(price_per_sec) * (parseInt(end_paying) - parseInt(start_paying));

             if (parseFloat(total_price) > parseFloat(video_max_price)) {
                 jQuery('#total_price').css("border-color", "#f00");
                 jQuery('#total_price').css("color", "red");
             }
             else {
                 jQuery('#total_price').css("border-color", "#d5d5d5");
                 jQuery('#total_price').css("color", "#858585");
             }
             if (price_per_sec > parseFloat(max_value_per_second_content)) {
                 jQuery('#price_per_sec').css("border-color", "#f00");
                 jQuery('#price_per_sec').css("color", "red");
             }
             else {
                 jQuery('#price_per_sec').css("border-color", "#d5d5d5");
                 jQuery('#price_per_sec').css("color", "#858585");
             }

             $('#total_price').val(total_price.toFixed(3));

            $( "#payment_range" ).slider({
                range: true,
                min: 0,
                max: Math.floor(parseFloat(duration)),
                values: [ parseInt(start_paying), parseInt(duration) ],
                slide: function( event, ui ) {
                    $( "#amount" ).val(ui.values[ 0 ] + "s - " + ui.values[ 1 ] + "s" );
                    $( "#start_paying" ).val( ui.values[ 0 ]);
                    $('#end_paying').val(ui.values[1]);
                    var price_per_sec = $('#price_per_sec').val();
                    var total_price = parseFloat(price_per_sec) * (parseInt(ui.values[1]) - parseInt( ui.values[ 0 ]));
                    $('#total_price').val(total_price.toFixed(3));
                }
            });
             $( "#amount" ).val($( "#payment_range" ).slider( "values", 0 ) +
                 "s - " + $( "#payment_range" ).slider( "values", 1 ) + "s" );
             $( "#start_payment" ).val($( "#payment_range" ).slider( "values", 0 ));
             $( "#end_payment" ).val($( "#payment_range" ).slider( "values", 1 ));
        }

        // price per second slider
        function price_per_sec_slide() {

            var checked_type = $('#check_ad_content input[name="video_type"]:checked').val();
            var min_price = "<?php echo $_smarty_tpl->tpl_vars['min_value_per_second_ad']->value;?>
";
            var max_price = "<?php echo $_smarty_tpl->tpl_vars['max_value_per_second_ad']->value;?>
";
            if (checked_type == 'video') {
                min_price = "<?php echo $_smarty_tpl->tpl_vars['min_value_per_second_content']->value;?>
";
                max_price = "<?php echo $_smarty_tpl->tpl_vars['max_value_per_second_content']->value;?>
";
            }

            $("#price_per_sec_").val('$' + min_price + ' - $' + max_price);

            var min_price_slider = parseFloat(min_price) / 0.001;
            var max_price_slider = parseFloat(max_price) / 0.001;

            $("#price_per_sec_range").slider({
                // range: "min",
                min: min_price_slider,
                max: max_price_slider,
                values: [ min_price_slider ],
                slide: function( event, ui ) {
                    var val = ui.values[ 0 ];
                    val = parseInt(val) * 0.001;
                    var end_paying = $('#end_paying').val();
                    var start_paying = $('#start_paying').val();
                    var paying_time = parseInt(end_paying) - parseInt(start_paying);
                    var total_price = val * paying_time;
                    $('#total_price').val(total_price.toFixed(3));
                    val = val.toFixed(3);
                    $( "#price_per_sec" ).val( val );

                }
            })
        }

        // age slider
        function age_slide() {

            $( "#age_range" ).slider({
                range: true,
                min: 0,
                max: 65,
                values: [ 0, 65 ],
                slide: function( event, ui ) {
                    $( "#age_amount" ).val(ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                    $( "#allowed_min_age" ).val( ui.values[ 0 ]);
                    $('#allowed_max_age').val(ui.values[1]);
                }
            });
            $( "#age_amount" ).val($( "#age_range" ).slider( "values", 0 ) +
                " - " + $( "#age_range" ).slider( "values", 1 ));
            $( "#allowed_min_age" ).val($( "#age_range" ).slider( "values", 0 ));
            $( "#allowed_max_age" ).val($( "#age_range" ).slider( "values", 1 ));
        }

        function display_map() {
            $('#map_modal').modal();
        }

        var max_value_per_second_ad = "<?php echo $_smarty_tpl->tpl_vars['max_value_per_second_ad']->value;?>
";
        var max_value_per_second_content = "<?php echo $_smarty_tpl->tpl_vars['max_value_per_second_content']->value;?>
";

        function check_price_per_second() {
            var price_per_sec = $('#price_per_sec').val();
            if ($('#limit_price').attr('type') != 'hidden') {
                if (parseFloat(price_per_sec) > parseFloat(max_value_per_second_ad)) {
                    alert('The price per second is high. You can pay per second $' + max_value_per_second_ad + ' at max.');
                    return false;
                }
            } else {
                if (parseFloat(price_per_sec) > parseFloat(max_value_per_second_content)) {
                    alert('The price per second is high. You can get paid per second $' + max_value_per_second_content + ' at max.');
                    return false;
                }
            }
        }

    </script>

</form><?php }} ?>
