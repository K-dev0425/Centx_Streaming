<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 21:49:58
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/upload.html" */ ?>
<?php /*%%SmartyHeaderCode:100057050460bd4306562919-35636495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42a499b7c2a32a55de55066da9dc20864a24a1ab' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/upload.html',
      1 => 1622800580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100057050460bd4306562919-35636495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Cbucket' => 0,
    'msg' => 0,
    'Upload' => 0,
    'opt_list' => 0,
    'counter' => 0,
    'opt' => 0,
    'uploadOptId' => 0,
    'class' => 0,
    'divid' => 0,
    'userVideos' => 0,
    'foo' => 0,
    'baseurl' => 0,
    'config_for_mp4' => 0,
    'cbvid' => 0,
    'uploaderDetails' => 0,
    'extensions' => 0,
    'theme' => 0,
    'max_value_per_second_ad' => 0,
    'max_value_per_second_content' => 0,
    'honey_ajax' => 0,
    'username_string' => 0,
    'userid_string' => 0,
    'lat' => 0,
    'lng' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bd4306623a01_70747023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bd4306623a01_70747023')) {function content_60bd4306623a01_70747023($_smarty_tpl) {?><link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://centx.app/styles/cb_28/theme/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="/includes/libraries/leaflet/leaflet.css" />
<script src = "/includes/libraries/leaflet/leaflet.js"></script>
<style>
	#map{height:50vh;width: 100%}

</style>


<?php if (isset($_smarty_tpl->tpl_vars['max_value_per_second_ad'])) {$_smarty_tpl->tpl_vars['max_value_per_second_ad'] = clone $_smarty_tpl->tpl_vars['max_value_per_second_ad'];
$_smarty_tpl->tpl_vars['max_value_per_second_ad']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['max_value_per_second_ad']; $_smarty_tpl->tpl_vars['max_value_per_second_ad']->nocache = null; $_smarty_tpl->tpl_vars['max_value_per_second_ad']->scope = 0;
} else $_smarty_tpl->tpl_vars['max_value_per_second_ad'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['max_value_per_second_ad'], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['max_value_per_second_content'])) {$_smarty_tpl->tpl_vars['max_value_per_second_content'] = clone $_smarty_tpl->tpl_vars['max_value_per_second_content'];
$_smarty_tpl->tpl_vars['max_value_per_second_content']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['max_value_per_second_content']; $_smarty_tpl->tpl_vars['max_value_per_second_content']->nocache = null; $_smarty_tpl->tpl_vars['max_value_per_second_content']->scope = 0;
} else $_smarty_tpl->tpl_vars['max_value_per_second_content'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['max_value_per_second_content'], null, 0);?>

		<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
		<div class="alert alert-block alert-info">
		<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

		</div>
		<?php }?>
		<div id="uploadMessage" class=""></div>
		<div id="main">
			<div class="container cb-box uploadVideos">
				<div class="progress-container allProgress hidden">
					<div class="row">
						<div class="col-md-2" id="uploadedFilesInfo">
							<p><?php echo smarty_lang(array('code'=>"Inserted"),$_smarty_tpl);?>
 0 <?php echo smarty_lang(array('code'=>"of"),$_smarty_tpl);?>
 0</p>
						</div>
						<div class="col-md-10">
							<div class="progress">
								<div id="overallProgress" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
									<span class="sr-only">40% Complete (success)</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="cb-item-desc-container clearfix flat-tabs" id="mainUploadContainer">
					<div class="video-info-container">
						<ul class="nav nav-tabs uploaderTabs">
							<?php if (isset($_smarty_tpl->tpl_vars['opt_list'])) {$_smarty_tpl->tpl_vars['opt_list'] = clone $_smarty_tpl->tpl_vars['opt_list'];
$_smarty_tpl->tpl_vars['opt_list']->value = $_smarty_tpl->tpl_vars['Upload']->value->load_upload_options(); $_smarty_tpl->tpl_vars['opt_list']->nocache = null; $_smarty_tpl->tpl_vars['opt_list']->scope = 0;
} else $_smarty_tpl->tpl_vars['opt_list'] = new Smarty_variable($_smarty_tpl->tpl_vars['Upload']->value->load_upload_options(), null, 0);?>
							<?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = 1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(1, null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['opt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opt']->_loop = false;
 $_smarty_tpl->tpl_vars['divid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['opt_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opt']->key => $_smarty_tpl->tpl_vars['opt']->value) {
$_smarty_tpl->tpl_vars['opt']->_loop = true;
 $_smarty_tpl->tpl_vars['divid']->value = $_smarty_tpl->tpl_vars['opt']->key;
?>
								<?php if ($_smarty_tpl->tpl_vars['counter']->value==1) {?><?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = "active"; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("active", null, 0);?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = ''; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('', null, 0);?><?php }?>
								
								<?php if (isset($_smarty_tpl->tpl_vars['uploadOptId'])) {$_smarty_tpl->tpl_vars['uploadOptId'] = clone $_smarty_tpl->tpl_vars['uploadOptId'];
$_smarty_tpl->tpl_vars['uploadOptId']->value = $_smarty_tpl->tpl_vars['opt']->value['load_func']; $_smarty_tpl->tpl_vars['uploadOptId']->nocache = null; $_smarty_tpl->tpl_vars['uploadOptId']->scope = 0;
} else $_smarty_tpl->tpl_vars['uploadOptId'] = new Smarty_variable($_smarty_tpl->tpl_vars['opt']->value['load_func'], null, 0);?>
								<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs[$_smarty_tpl->tpl_vars['uploadOptId']->value]=='yes') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['no_upload'])) {$_smarty_tpl->tpl_vars['no_upload'] = clone $_smarty_tpl->tpl_vars['no_upload'];
$_smarty_tpl->tpl_vars['no_upload']->value = 'no'; $_smarty_tpl->tpl_vars['no_upload']->nocache = null; $_smarty_tpl->tpl_vars['no_upload']->scope = 0;
} else $_smarty_tpl->tpl_vars['no_upload'] = new Smarty_variable('no', null, 0);?>
									<li class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
										<a class="added" href="#<?php echo $_smarty_tpl->tpl_vars['divid']->value;?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['opt']->value['title'];?>
</a>
									</li>
								<?php }?>
								<?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = $_smarty_tpl->tpl_vars['counter']->value+1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
							<?php } ?>
						</ul>
						<!-- the div for upload file remote/normal-->
						<div class="tab-content uploadFormDiv">
							<?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = 1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(1, null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['opt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opt']->_loop = false;
 $_smarty_tpl->tpl_vars['divid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['opt_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opt']->key => $_smarty_tpl->tpl_vars['opt']->value) {
$_smarty_tpl->tpl_vars['opt']->_loop = true;
 $_smarty_tpl->tpl_vars['divid']->value = $_smarty_tpl->tpl_vars['opt']->key;
?>
								
								<?php if (isset($_smarty_tpl->tpl_vars['uploadOptId'])) {$_smarty_tpl->tpl_vars['uploadOptId'] = clone $_smarty_tpl->tpl_vars['uploadOptId'];
$_smarty_tpl->tpl_vars['uploadOptId']->value = $_smarty_tpl->tpl_vars['opt']->value['load_func']; $_smarty_tpl->tpl_vars['uploadOptId']->nocache = null; $_smarty_tpl->tpl_vars['uploadOptId']->scope = 0;
} else $_smarty_tpl->tpl_vars['uploadOptId'] = new Smarty_variable($_smarty_tpl->tpl_vars['opt']->value['load_func'], null, 0);?>
								<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs[$_smarty_tpl->tpl_vars['uploadOptId']->value]=='yes') {?>
								<?php if ($_smarty_tpl->tpl_vars['counter']->value==1) {?><?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = "active"; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("active", null, 0);?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = ''; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('', null, 0);?><?php }?>
								<div class="tab-pane fade in clearfix <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 uploadForm" id="<?php echo $_smarty_tpl->tpl_vars['divid']->value;?>
">
								<!-- this line call everything related to upload on the page -->
									<?php echo load_form(array('name'=>$_smarty_tpl->tpl_vars['opt']->value['load_func'],'button_class'=>'cb_button_2','class'=>'upload_form'),$_smarty_tpl);?>

								</div>
								<?php }?>
								<?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = $_smarty_tpl->tpl_vars['counter']->value+1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
							<?php } ?>
						</div>
						<!-- ending of the div for upload file remote/normal-->
					</div>
				</div>

			</div>
		</div>
	<div>
</div>

<div id="map_modal" class="modal fade" role="dialog">

	<div class="modal-body">
		<div id="audience_manager">

			<div class="row" style="width: 100%!important;">
				<div id="map" class="col-md-12 map-location">&nbsp;</div>
			</div>
			<div class="row">
				<div class="col-md-12">&nbsp;</div>
			</div>
			<div class="row">
				<div class="col-md-12"><strong>Your Videos</strong></div>
			</div>
			<div class="row" style="border:1px solid:#eee;">
				<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userVideos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
				<div class="col-md-1">
					<input type="checkbox" name="linked_videos[]" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['videoid'];?>
">
				</div>
				<div class="col-md-5"><?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>
</div>
				<?php } ?>
			</div>
			<!--<div class="row">-->
				<!--<div class="col-md-12">&nbsp;</div>-->
			<!--</div>-->
			<div class="row">
				<div class="col-md-6">
					<input name="radius" type="text" placeholder="Enter audience radius" class="form-control" id="idRadius" onblur="drawCircle(this.value)"/>
				</div>
				<div class="col-md-1">&nbsp;</div>
				<div class="col-md-5">
					<input name="input" type="button" class="btn btn-primary" onclick="set_radius()" value="<?php echo smarty_lang(array('code'=>'Create'),$_smarty_tpl);?>
"/>
					<input name="input" type="button" class="btn btn-danger" style="border-color: #d15b47;" onclick="close_map()" value="Cancel"/>
					<input name="mode" value="create_audience" type="hidden" />
				</div>
			</div>
			<input name="lat" type="hidden" id="idLat" value="<?php echo form_val($_GET['query']);?>
"/>
			<input name="lng" type="hidden" id="idLng" value="<?php echo form_val($_GET['query']);?>
"/>

		</div>
	</div>

</div>

<script type="text/javascript">
	var grabbed_json = 'nothing';

	var session_data = {};

	var uploaded_file_name = '';

	(function(window){
		$(document).ready(function() {
			 setTimeout(function(){

						$(".embed_video").remove();

					}, 10000);

            jQuery('.uploaderTabs li:eq(1)').hide();

			var totalFiles = 0;
			var baseurl = '<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
';
			var config_for_mp4 = '<?php echo $_smarty_tpl->tpl_vars['config_for_mp4']->value;?>
';
			var defaultCategory = "<?php echo $_smarty_tpl->tpl_vars['cbvid']->value->get_default_cid();?>
";
			if('<?php echo $_smarty_tpl->tpl_vars['uploaderDetails']->value['uploadScriptPath'];?>
'!=''){
			var uploadurl = '<?php echo $_smarty_tpl->tpl_vars['uploaderDetails']->value['uploadScriptPath'];?>
';
			}else{
			var uploadurl = '<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/actions/file_uploader.php';
			}
			//alert(uploadurl);

			var extensions = "<?php echo $_smarty_tpl->tpl_vars['extensions']->value;?>
";
			extensions = extensions.substring(0, extensions.length-1);
			/* files uploading */

			$.get("<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/plupload/js/plupload.full.min.js", function(e){
				var files = [];

				var filesIndex = 0;
				var oneFileFormDiv = $("#uploadFormContainer0").clone();
				var uploader = new plupload.Uploader({
					browse_button: 'selectFiles',
					dragdrop: true,
					drop_element: "dragDrop",
					runtimes : 'html5,flash,silverlight,html4',
					url : uploadurl,
					file_data_name : "Filedata",
					filters: {
					  mime_types : [
						{ title : "Image files", extensions : extensions },
						{ title : "Video files", extensions : extensions }
					  ]
					}
				});
				uploader.init();
				uploader.bind('FilesAdded', function(up, uploadedFiles) {

                    var myVideos = [];

                    window.URL = window.URL || window.webkitURL;

                    if (uploader.runtime == "html5") {
                        var fileObject = uploadedFiles[uploadedFiles.length - 1].getNative();

                        myVideos.push(fileObject);

                        var vid = document.createElement('video');

                        vid.preload = 'metadata';

                        vid.src = URL.createObjectURL(fileObject);

                        vid.onloadedmetadata = function () {
                            window.URL.revokeObjectURL(vid.src);
                            duration = vid.duration;

                            session_data.duration = duration;

                            myVideos[myVideos.length - 1].duration = duration;

                        };

                    }


					for(var i = 0; i < uploadedFiles.length; i++){
						files.push(uploadedFiles[i]);
					}

					$("#uploadMore").addClass("hidden");
					// creating the selected files list
					var ul = document.createElement('ul');
					ul.id = "selectedFilesList";
					ul.className = "nav nav-tabs";
					var li = false;
					var index = 0;
					plupload.each(files, function(file) {
						li = document.createElement('li');
						if(index === 0){
							li.className = "active";
						}else{
							li.className = "";
						}
						var link = document.createElement("a");
						link.href = "#tab"+index;
						link.setAttribute("data-toggle", "tab");
						// link.innerHTML = file.name + " (" + plupload.formatSize(file.size) + ")";
						if(files.length < 8){
						  link.innerHTML = "(" + (index + 1) + ") " + file.name.substring(0, 10);
						}else{
						  link.innerHTML = "(" + (index + 1) + ") ";
						}
						li.id = index++;
						li.appendChild(link);
						ul.appendChild(li);
					});

					$("#files").html("");
					$("#files").append(ul);

					totalFiles = files.length;

					var oneFile = false;

					var uploadForm = $("#updateVideoInfoForm").clone();
					var uploadForms = [];
					for (var i = 0; i < totalFiles; i++ ){
						var oneUploadForm = $(uploadForm).clone().get(0);
						var wrapperDiv = document.createElement("div");
						if(i == 0){
							wrapperDiv.className = "tab-pane active uploadFormContainer";
						}else{
							wrapperDiv.className = "tab-pane uploadFormContainer";
						}
						wrapperDiv.id = "tab"+i;
						oneUploadForm.className = "";
						$(oneUploadForm).find(".cancel_button").attr('to_cancel',i);
						$(oneUploadForm).find("input[name='title']").val(files[i].name.slice(0, -4));

						$(oneUploadForm).find("textarea#desc").val(files[i].name.slice(0, -4));
						var categories = $(oneUploadForm).find("input[name='category[]']");
						$.each(categories,function(i,v){
							if ($(this).val() == defaultCategory ){
								$(this).attr('checked', 'checked');
							}
						});
						wrapperDiv.appendChild(oneUploadForm);
						uploadForms.push(wrapperDiv);
					}

					//function for real progress bar
					$.each( uploadedFiles, function( key, fileNow ) {
						// console.log("filenow "+fileNow);
					  	var currentTitle = fileNow.name,
					  	plFileId = fileNow.id;
					  	//<button class="clearfix cancel_button btn btn-danger" style="float:right; margin-top: -20px">Cancel Uploading</button>

					  	// appends progress bar along with title
					  	// this progress bar is later updated on realtime
					  	// via fileprogress event of pluploader

					    $(".realProgressBars").append('<h5 class="realProgTitle_'+plFileId+'">'+currentTitle+'</h5><button class="clearfix cancel_button btn btn-danger" to_cancel="'+plFileId+'" style="float:right; margin-top: -8px; margin-left:10px;">Cancel Uploading</button><div class="progress"><div class="progress-bar progress-bar_'+plFileId+'" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:0%"><span class="sr-only">70% Complete</span><span class="realProgText_'+plFileId+'">50% completed</span></div></div>');


					});
					//end function

					$("#allUploadForms").html("");
					$("#allUploadForms").append(uploadForms);

					//Disabling saveDetails button for Current form
					var div_wrap_numb = totalFiles - 1;
					var upload_form_Div = $('#tab'+div_wrap_numb);
					upload_form_Div.find('#saveVideoDetails').attr("disabled",true);

					$(".formSection h4").on({
						click: function(e){
							e.preventDefault();
							if($(this).find("i").hasClass("glyphicon-chevron-down")){
								$(this).find("i").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");
								$(this).next().toggleClass("hidden");
							}else{
								$(this).find("i").removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down");
								$(this).next().toggleClass("hidden");
							}
						}
					});


					/*
					* Trigger element when "Cancel Uploading" button is clicked
					* stops uploading
					* hides uploading div
					*/

					(function() {
				        $(".cancel_button").on("click",function(e) {
					      	e.preventDefault();
				      		var toCancel = $(this).attr('to_cancel');
				      		var thecount = 0;
				      		$(this).attr('disabled',true);
					        $(this).text("Canceled");
				      		$.each( uploadedFiles, function( iNow, currentFile ){
								if (currentFile.id == toCancel) {
							        uploader.removeFile(uploadedFiles[thecount]);
							        $(this).unbind().remove();
							        $(".progress-bar_"+toCancel).addClass('progress-bar-danger');
							        $(".realProgText_"+toCancel).text("Canceled");
							        $('li#'+thecount).fadeOut('slow');
							        totalFiles = totalFiles - 1;
							    }
							  	thecount++;
							});
					    });
				    })();

					// R.K
					setTimeout(function(){
						$("#uploaderContainer").toggleClass("hidden");
						$("#check_ad_content").toggleClass("hidden");

					}, 1000);
					// updating file title in the form

					$("#btn_check_pay_type").on('click', function () {

					    var checked_type = $('#check_ad_content input[name="video_type"]:checked').val();
						$('#updateVideoInfoForm input[name="video_type"][value="'+ checked_type +'"]').click();

                        $("#check_ad_content").toggleClass("hidden");
                        $("#uploadDataContainer").toggleClass("hidden");
					    $(".uploadingProgressContainer").show();
                        $(".allProgress").removeClass("hidden");
                        uploader.start();
                    })

				});

				uploader.bind("BeforeUpload", function(){

					$("#fileUploadProgress").removeClass("hidden");

					$(".progress-container").removeClass("hidden");

				});


				var totalUploaded = 0;
				/*
				This is the event handler for UploadProgress,
				It fires regularly after a certain amount of time when the the files are being uploaded
				*/

				var filesUploaded = 0;
				var totalPercentage = 0;

				/*
				This is the event handler for FileUploaded,
				it fires when the uploading of the files is completed
				*/

				var currentFileIndex = 0;
				var theVideoId = '';

				uploader.bind('FileUploaded', function(plupload, fileDetails, response){
					$("#overallProgress").css("width", ((100/totalFiles)*(++filesUploaded))+"%");
					$("#overallProgress").parents(".row").find("#uploadedFilesInfo").text("Inserted " + (filesUploaded) + " of " + totalFiles);
					var serverResponse = $.parseJSON(response.response);

					if(serverResponse.extension == 'mp4' && config_for_mp4 == 'yes' ){
						$("#duration").removeClass("hidden");
					}
					var fileName = serverResponse.file_name;
					uploaded_file_name = fileName;
					var uploadForm = $("#tab"+currentFileIndex+" form");
					totalUploaded++;

					//enabling savedetails button for Current form
					var _upload_form_Div_ = $('#tab'+currentFileIndex);
					_upload_form_Div_.find('.cancel_button').fadeOut('slow');
					_upload_form_Div_.find("#saveVideoDetails").attr("disabled",false);
					_upload_form_Div_.find("#saveVideoDetails").attr("id","uploadCompleted");
					/*
					Insert the video in the database and get the video db id from the
					database which will be sent with the final form
					*/

                    // var hiddenVideoTitleField = document.createElement('input');
                    // hiddenVideoTitleField.name = 'title';
                    // hiddenVideoTitleField.type = 'hidden';
                    // hiddenVideoTitleField.value =  fileDetails.name;

                    var hiddenVideoNameField = document.createElement('input');
                    hiddenVideoNameField.name = 'file_name';
                    hiddenVideoNameField.type = 'hidden';
                    hiddenVideoNameField.value =  fileName;

                    var hiddenUploadVideoFlagField = document.createElement('input');
                    hiddenUploadVideoFlagField.type = 'hidden';
                    hiddenUploadVideoFlagField.name = 'updateVideo';
                    hiddenUploadVideoFlagField.value = 'yes';

                    // uploadForm.append(hiddenVideoTitleField);
                    uploadForm.append(hiddenVideoNameField);
                    uploadForm.append(hiddenUploadVideoFlagField);
                    uploadForm.find("#cbSubmitUpload").removeAttr('disabled').val('Upload').addClass('btn-success');

                    $('#input_duration').val(session_data.duration);
                    $('#input_duration').attr('readonly', true);
                    $('#end_paying').val(Math.floor(parseFloat(session_data.duration)));
                    $('input#duration').val(session_data.duration);

                    var duration = parseFloat(session_data.duration);
                    if (duration < 30) $('#survey_section').remove();

                    payment_slide();
                    price_per_sec_slide();
                    setTimeout(age_slide, 1000);

					$(uploadForm).on({
						submit: function(e){
							e.preventDefault();
							//window.location.href = baseurl+"/?moreMsg="+theVideoId;
							var self = this;

							var total_price = $('#total_price').val();
							// var max_price = ''

							//var fd = new FormData(document.getElementById( "updateVideoInfoForm" ));

							var price_per_sec = $('#price_per_sec').val();
							var max_value_per_second_ad = "<?php echo $_smarty_tpl->tpl_vars['max_value_per_second_ad']->value;?>
";
							var max_value_per_second_content = "<?php echo $_smarty_tpl->tpl_vars['max_value_per_second_content']->value;?>
";

							var start_paying = $('#start_paying').val();
							var end_paying = $('#end_paying').val();
							var limit_price = $('#limit_price').val();
							var total_price = $('#total_price').val();
							var balance = $('#header_price').text();
							balance = balance.replace('$', '').replace(' USD', '');

							var channel_names = "";
							var selected_channel_span = $('.span_channel_name');
							if (selected_channel_span.length > 0) {
							 	for (var i = 0; i < selected_channel_span.length; i++) {
							 	    channel_names += $(selected_channel_span[i]).text();
									if (i !== selected_channel_span.length - 1) channel_names += ",";
								}
							}
							$('#selected_channel_names').val(channel_names);

							if ($('#limit_price').attr('type') != 'hidden') {  //For advertising videos
                                if (parseFloat(limit_price) > parseFloat(balance)) {
                                    alert('The limit price is over your current balance.');
                                    return false;
                                } else if (limit_price == "" || parseFloat(limit_price) <= 0) {
									alert("The video budget can't be blank or zero");
									return false;
                            	} else if (total_price == 0 || total_price == ""){
                                    alert("The video price can't be blank or zero");
                                    return false;
								}
								// else if (parseFloat(price_per_sec) > parseFloat(max_value_per_second_ad)) {
                                //     alert('The price per second is high. You can pay per second $' + max_value_per_second_ad + ' at max.');
                                //     return false;
								// }
                                else {
                                    alert("You're uploading a Advertising video. You're gonna pay users to watch your material.");
                                }
							} else {  //For videos
                                // if (parseFloat(price_per_sec) > parseFloat(max_value_per_second_content)) {
                                //     alert('The price per second is high. You can get paid per second $' + max_value_per_second_content + ' at max.');
                                //     return false;
                                // }
                                if (total_price == 0 || total_price == ""){
                                    if (confirm("If you leave price box empty or zero the video will be free")) {
                                        alert("You're uploading a content video. People will pay to watch your material.");
                                    } else {
                                        return false;
									}
                                }
							}


                            $.ajax({
                                url : baseurl + "/actions/file_uploader.php",
                                type : "post",
                                data : {
                                    insertVideo : "yes",
                                    title : fileDetails.name,
                                    file_name : uploaded_file_name,
                                    vid_duration: session_data.duration,
                                }
                            }).success(function(msg){
                                // console.log(msg);
                                res = $.parseJSON(msg);
                                fileId = res.videoid;
                                theVideoId = fileId;

                                var hiddenVideoIdField = document.createElement('input');
                                hiddenVideoIdField.name = 'videoid';
                                hiddenVideoIdField.type = 'hidden';
                                hiddenVideoIdField.value =  fileId;

                                uploadForm.append(hiddenVideoIdField);

                                form_data = new FormData($(self)[0]);
                                var theid = $(self).videoid;

                                $.ajax({
                                    url : baseurl + "/actions/file_uploader.php",
                                    type : "post",
                                    data : form_data,
                                    processData: false,
                                    contentType: false,
                                }).success(function(msg){
                                    var lang = $('#subtitle_lang').val();
                                    // console.log(msg);
                                    _cb.uploadSubtitle(theVideoId, lang, "<?php echo $_smarty_tpl->tpl_vars['honey_ajax']->value;?>
");
                                    //msg = $.parseJSON(msg);
                                    $("#uploadMess").removeClass("hidden");
                                    if(msg.error){
                                        $("#uploadMessage").html(msg.error).attr("class", "alert alert-danger");
                                    }else{
                                        //Update message on submit changes
                                        $("#uploadMessage").html("Video details have been updated Successfully").attr("class", "alert alert-success container");

                                        $("#uploadMessage").html(msg.msg).attr("class", "alert alert-success");

                                        $('html,body').animate({
                                                scrollTop: $("body").offset().top},
                                            'medium');
                                        //Update message on submit changes
                                    }
                                    setTimeout(function(){
                                        $("#uploadMessage").addClass("hidden");
                                        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_videos.php";
                                    }, 3000);
                                }).fail(function(err){
                                    console.log(err);
                                });

                            });
						}
					});

					currentFileIndex++;

				});

				// runs on progress of file uplaoder

				uploader.bind('UploadProgress', function(up, file) {
					// this the unique ID assigned to each file upload
					var pluploadFileId = file.id,
					filePercentage = file.percent;
					// update progress bar widht
					$('.progress-bar_'+pluploadFileId).css("width",filePercentage+"%");
					//updawte progress bar text to show percentage
					$('.realProgText_'+pluploadFileId).text(filePercentage+"% Completed");
					// $("#progressNumber").text(file.percent + "%");
					// meaning file has completely uploaded
					if (filePercentage == 100) {
						// remove cancel button
						$(".cancel_button[to_cancel='" + pluploadFileId + "']").fadeOut('slow');
						// tunr progress bar into green to show success
						$('.progress-bar_'+pluploadFileId).addClass('progress-bar-success');
					}
				});

				uploader.bind("UploadComplete", function(plupload, files){
					$("#fileUploadProgress").addClass("hidden");

					$("#uploadMore").removeClass("hidden");
					$(".uploadingProgressContainer").hide();
					uploader.refresh();
					$("#uploadMessage").html("All Files are uploaded Successfully").attr("class", "alert alert-success container");
					setTimeout(function(){
						$("#uploadMessage").addClass("hidden");
					}, 5000);
				});

				uploader.bind('Error', function(up, err) {
					$("#uploadMessage").removeClass("hidden");
					if(err){
						$("#uploadMessage").html(err.message).attr("class", "alert alert-danger");
					}
					setTimeout(function(){
						$("#uploadMessage").addClass("hidden");
					}, 8000);
				});

				$("#files a").click(function(e){
					e.preventDefault();
					$(this).tab("show");
				});

				$("#uploadMoreVideos").on({
					click: function(e){
						e.preventDefault();
						$("#uploaderContainer").removeClass("hidden");
						$("#uploadDataContainer").addClass("hidden");
						//$(this).addClass("hidden");
					}
				});

			});

			// end of get,,


		});
	})(window);

	window.onbeforeunload = function() {
		var uploadState = $('.uploadingProgressContainer').is(":visible");
		if (uploadState == true) {
			return 'Uploading is in progress, are you sure you want to navigate away from this page?';
		} else {
			return null;
		}
	};

	$(document).on('click','#youtube_update',function(e){
		e.preventDefault();
		$(document).find('.__theClassHere').find('form').attr('id','youtube_update_form');
		var theForm = $('#youtube_update_form');
		data = $('#youtube_update_form').serialize();
		//console.log(data);
		data += '&updateVideo=yes&videoid='+grabbed_json.vid;
		//console.log(data);
		var theid = '200';

		$.ajax({
			url : baseurl + "/actions/file_uploader.php",
			type : "post",
				data : data
		}).success(function(msg){
			//msg = $.parseJSON(msg);
			$("#uploadMessage").removeClass("hidden");
			msg = $.parseJSON(msg);
			if(msg.error){
				$("#uploadMessage").html(msg.error).attr("class", "alert alert-danger");
			}else{
				$("#uploadMessage").html(msg.msg).attr("class", "alert alert-success");
			}
			setTimeout(function(){
				$("#uploadMessage").addClass("hidden");
			}, 5000);
		}).fail(function(err){
			console.log(err);
		});
	});
</script>

<script>
    function close_map() {
        $('#map_modal').modal('hide');
    }

    function set_radius() {
		var radius = $('#idRadius').val();
		var lat = $('#idLat').val();
		var lng = $('#idLng').val();
		$('#center_lat').val(lat);
		$('#center_lng').val(lng);
		$('#map_radius').val(radius);
        $('#map_modal').modal('hide');
    }
</script>


<script type="text/javascript">

    var username_string = '<?php echo $_smarty_tpl->tpl_vars['username_string']->value;?>
';
    username_string = username_string.slice(0, -1);
    var username_array = username_string.split(',');

    var userid_string = '<?php echo $_smarty_tpl->tpl_vars['userid_string']->value;?>
';
    userid_string = userid_string.slice(0, -1);
    var userid_array = userid_string.split(',');

    function autocomplete_channel() {
        var input_val = $('#channel_name').val();
        if (input_val.length > 1) {
            $('#channel_name').autocomplete({
                source: username_array,
                select: function (event, ui) {
                    var value = ui.item.value;
                    //store in session
                    $('#selected_channels').append('<span class="channel_item_name"><span class="span_channel_name">'+ value +'</span><span class="close_selected_channel" onclick="remove_channel(this)">&times;</span></span>');
                }
            });
		}
    }

    function remove_channel(elem) {
		$(elem).parent('.channel_item_name').remove();
    }

    var lat = "<?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
";
    var lng = "<?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
";

    

    LatLng = [];
    LatLng[0] = parseFloat(lat);
    LatLng[1] = parseFloat(lng);
    // LatLng = [lat, lng];

        map = createMap(LatLng);

        var theMarker = {};
        var theCircle = {};

        map.on('click', function(ev) {
            lat = ev.latlng.lat;
            lon = ev.latlng.lng;
            console.log("You clicked the map at LAT: "+ lat+" and LONG: "+lon );

            //Clear existing marker,

            if (theMarker != undefined) {
                map.removeLayer(theMarker);
            }


            if (theCircle != undefined) {
                map.removeLayer(theCircle);
            }

            theMarker = L.marker([lat,lon]).addTo(map);

            $('#idLat').val(lat);
            $('#idLng').val(lon);

        });


    function createMap(LatLng){

        var map = L.map('map');
        map.setView(LatLng, 10);
        var osm=new L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png',{
            attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'});

        osm.addTo(map);

        return map;

    }//createMap


    function drawCircle(radValue){

        newLatLng = theMarker.getLatLng();


        if (theMarker != undefined) {
            map.removeLayer(theMarker);
        }


        if (theCircle != undefined) {
            map.removeLayer(theCircle);
        };

        theMarker = L.marker(newLatLng).addTo(map);

        theCircle = L.circle(newLatLng, radValue).addTo(map);

    }//drawCircle

    //
    // map.on('locationfound', function (e) {
    //
    //     var radius = e.accuracy / 2;
    //     alert(radius);
    //
    // });

    
</script>





<?php }} ?>
