<?php /* Smarty version Smarty-3.1.15, created on 2021-08-18 07:44:42
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/index.html" */ ?>
<?php /*%%SmartyHeaderCode:48381357660bc4dd35ee3e9-19024861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '160e4b8719efc93d674b96fe02c6105073ab972d' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/index.html',
      1 => 1629272681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48381357660bc4dd35ee3e9-19024861',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc4dd36ef275_20322892',
  'variables' => 
  array (
    'userquery' => 0,
    'Cbucket' => 0,
    'banner_url' => 0,
    'baseurl' => 0,
    'theme' => 0,
    'banner_header' => 0,
    'banner_text' => 0,
    'myquery' => 0,
    'editor_picks' => 0,
    'row' => 0,
    'feature_users' => 0,
    'user' => 0,
    'cbcollection' => 0,
    'collections' => 0,
    'collection' => 0,
    'playlists' => 0,
    'playlist' => 0,
    'items' => 0,
    'item' => 0,
    'videoid' => 0,
    'videos' => 0,
    'video' => 0,
    'cbvid' => 0,
    'vae' => 0,
    'no_recent' => 0,
    'loadMoreLang' => 0,
    'got_qlitems' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4dd36ef275_20322892')) {function content_60bc4dd36ef275_20322892($_smarty_tpl) {?><?php echo smarty_lang(array('code'=>'no_featured_videos_found','assign'=>'no_found_fe'),$_smarty_tpl);?>

<?php ob_start();?><?php echo smarty_lang(array('code'=>"no_featured_videos_found"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['vae'])) {$_smarty_tpl->tpl_vars['vae'] = clone $_smarty_tpl->tpl_vars['vae'];
$_smarty_tpl->tpl_vars['vae']->value = $_tmp1; $_smarty_tpl->tpl_vars['vae']->nocache = null; $_smarty_tpl->tpl_vars['vae']->scope = 0;
} else $_smarty_tpl->tpl_vars['vae'] = new Smarty_variable($_tmp1, null, 0);?>
<?php ob_start();?><?php echo smarty_lang(array('code'=>"No available found"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['no_recent'])) {$_smarty_tpl->tpl_vars['no_recent'] = clone $_smarty_tpl->tpl_vars['no_recent'];
$_smarty_tpl->tpl_vars['no_recent']->value = $_tmp2; $_smarty_tpl->tpl_vars['no_recent']->nocache = null; $_smarty_tpl->tpl_vars['no_recent']->scope = 0;
} else $_smarty_tpl->tpl_vars['no_recent'] = new Smarty_variable($_tmp2, null, 0);?>
<?php ob_start();?><?php echo smarty_lang(array('code'=>"load_more"),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['loadMoreLang'])) {$_smarty_tpl->tpl_vars['loadMoreLang'] = clone $_smarty_tpl->tpl_vars['loadMoreLang'];
$_smarty_tpl->tpl_vars['loadMoreLang']->value = $_tmp3; $_smarty_tpl->tpl_vars['loadMoreLang']->nocache = null; $_smarty_tpl->tpl_vars['loadMoreLang']->scope = 0;
} else $_smarty_tpl->tpl_vars['loadMoreLang'] = new Smarty_variable($_tmp3, null, 0);?>
<?php echo ANCHOR(array('place'=>"display_head_sec"),$_smarty_tpl);?>

<?php echo ANCHOR(array('place'=>"video_head_player"),$_smarty_tpl);?>


<?php if (userid()) {?>
<?php if (isset($_smarty_tpl->tpl_vars['user_det'])) {$_smarty_tpl->tpl_vars['user_det'] = clone $_smarty_tpl->tpl_vars['user_det'];
$_smarty_tpl->tpl_vars['user_det']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_user_details(userid()); $_smarty_tpl->tpl_vars['user_det']->nocache = null; $_smarty_tpl->tpl_vars['user_det']->scope = 0;
} else $_smarty_tpl->tpl_vars['user_det'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_user_details(userid()), null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars['user_det'])) {$_smarty_tpl->tpl_vars['user_det'] = clone $_smarty_tpl->tpl_vars['user_det'];
$_smarty_tpl->tpl_vars['user_det']->value = ''; $_smarty_tpl->tpl_vars['user_det']->nocache = null; $_smarty_tpl->tpl_vars['user_det']->scope = 0;
} else $_smarty_tpl->tpl_vars['user_det'] = new Smarty_variable('', null, 0);?>
<?php }?>


<style>
	#content {
		width: 100%;
	}
	#container.dark #content h1 {
		color: #fff!important;
	}
</style>


<div id="main" class="clearfix container">
	<div id="messageFav" class="alert alert-info marginTop" style="display:none; height:66px;"></div>

	<div id="banner-container" class="clearfix">

		<?php if (isset($_smarty_tpl->tpl_vars['banner_url'])) {$_smarty_tpl->tpl_vars['banner_url'] = clone $_smarty_tpl->tpl_vars['banner_url'];
$_smarty_tpl->tpl_vars['banner_url']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['banner_url']; $_smarty_tpl->tpl_vars['banner_url']->nocache = null; $_smarty_tpl->tpl_vars['banner_url']->scope = 0;
} else $_smarty_tpl->tpl_vars['banner_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['banner_url'], null, 0);?>
		<?php if (isset($_smarty_tpl->tpl_vars['banner_header'])) {$_smarty_tpl->tpl_vars['banner_header'] = clone $_smarty_tpl->tpl_vars['banner_header'];
$_smarty_tpl->tpl_vars['banner_header']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['banner_header']; $_smarty_tpl->tpl_vars['banner_header']->nocache = null; $_smarty_tpl->tpl_vars['banner_header']->scope = 0;
} else $_smarty_tpl->tpl_vars['banner_header'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['banner_header'], null, 0);?>
		<?php if (isset($_smarty_tpl->tpl_vars['banner_text'])) {$_smarty_tpl->tpl_vars['banner_text'] = clone $_smarty_tpl->tpl_vars['banner_text'];
$_smarty_tpl->tpl_vars['banner_text']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['banner_text']; $_smarty_tpl->tpl_vars['banner_text']->nocache = null; $_smarty_tpl->tpl_vars['banner_text']->scope = 0;
} else $_smarty_tpl->tpl_vars['banner_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['banner_text'], null, 0);?>

		<div class="banner-background" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['banner_url']->value;?>
);">
			<!--<div class="img-wrapper">-->
				<!--<img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/banner/banner.png" style="width: 100%;" alt="">-->
			<!--</div>-->

			<button class="close-banner" onclick="remove_banner()"><i class="fa fa-times"></i></button>

			<div class="home-brand">
				<div id="home-brand-image">
					<!--<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/banner/brand.png" alt="">-->
				</div>
				<div id="home-brand-text">
					<h2><?php echo $_smarty_tpl->tpl_vars['banner_header']->value;?>
</h2>
					<h4>
						<?php echo $_smarty_tpl->tpl_vars['banner_text']->value;?>

						fdsafdf
					</h4>
				</div>
			</div>
		</div>
	</div>

	<div class="clearfix">
		<div id="content">
		 <?php echo ANCHOR(array('place'=>'global'),$_smarty_tpl);?>
 
			<div class="clearfix leaderboard-ad">
				<div class="ad"><?php echo getAd(array('place'=>'ad_728x90'),$_smarty_tpl);?>
</div>
			</div>
			<?php if (isset($_smarty_tpl->tpl_vars['row'])) {$_smarty_tpl->tpl_vars['row'] = clone $_smarty_tpl->tpl_vars['row'];
$_smarty_tpl->tpl_vars['row']->value = $_smarty_tpl->tpl_vars['myquery']->value->Get_Website_Details(); $_smarty_tpl->tpl_vars['row']->nocache = null; $_smarty_tpl->tpl_vars['row']->scope = 0;
} else $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['myquery']->value->Get_Website_Details(), null, 0);?>
			<?php if (is_installed('editorspick')) {?>
			<?php if ($_smarty_tpl->tpl_vars['editor_picks']->value) {?>
			<div class="clearfix editorpick">
				<div class="editorpick-holder">
					<!-- Editor Pick Video Main Container START //-->
					<div class="absolute-div">
						<div id="ep_video_container">
							<?php if (is_installed('editorspick')) {?>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['name'] = 'e_list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['editor_picks']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['max'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total']);
?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/editor_pick/video_block.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['editor_picks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e_list']['index']]), 0);?>

							<?php endfor; else: ?>
							There is no video in editor's pick, Please Add Videos In Editor's Pick<br />Videos Manager > Add to editor's pick
							<?php endif; ?>
							<?php }?>
						</div>
					</div>
					<!-- Editor Pick Video Main Container END //-->
					<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/player-ratio.png" class="playerRatio">
				</div>

				<!-- Editor Pick Videos Slider Container START //-->
				<div class="editorpick-videos custom-elements">
					<div class="scrollable-area vscrollable">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['name'] = 'e_list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['editor_picks']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total']);
?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/editor_pick/index_featured_video.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['editor_picks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e_list']['index']]), 0);?>

						<?php endfor; endif; ?>
					</div>
				</div>
				<!-- Editor Pick Videos Slider Container END //-->
			</div>
			<?php }?>
			<?php }?>
			<!-- ******************************************* -->
			<!-- ************ EDITORS BLOCK END ************ -->
			<!-- ******************************************* -->

			<section class="clearfix" id="check_ads">
				<label for="switch_ad" style="font-size: 20px">Want to see advertising material(audio and video)?</label>
				<label class="inline">
					<input type="checkbox" value="0" name="switch_ad" id="switch_ad" class="ace ace-switch ace-switch-5">
					<span class="lbl"></span>
				</label>
			</section>

			<section class="clearfix featured-videos">
				<h1><?php echo smarty_lang(array('code'=>"featured_videos"),$_smarty_tpl);?>
</h1>
				<div id="featured_vid_sec" class="clearfix row">

				</div>
				<div id="featured_pre" class="clearfix"></div>
				<div id="featured-loadmore" class="clearfix text-center">
					<button id="featured_load_more" class="btn btn-loadmore" loadtype="video" loadmode="featured" loadlimit="<?php echo $_smarty_tpl->tpl_vars['row']->value['index_featured'];?>
" loadhit="1" title="Load more featured video">
						<?php echo smarty_lang(array('code'=>"load_more"),$_smarty_tpl);?>

					</button>
				</div>
			</section>

			<section class="clearfix videos" style="display: none;">
				<h1>Recent Ad Videos</h1>
				<div id="recent_ads_sec" class="clearfix row">

				</div>
				<div id="recentads_pre" class="clearfix"></div>
				<div id="recentads-loadmore" class="clearfix text-center">
					<button id="recentads_load_more" class="btn btn-loadmore" loadtype="ad" loadmode="recent_ad" loadlimit="<?php echo $_smarty_tpl->tpl_vars['row']->value['index_recent'];?>
" loadhit="1" title="Load more recent ads">
						<?php echo smarty_lang(array('code'=>"load_more"),$_smarty_tpl);?>

					</button>
				</div>

				<h1>Recent Ad Audios</h1>
				<div id="recent_ads_audio_sec" class="clearfix row">

				</div>
				<div id="recentads_audio_pre" class="clearfix"></div>
				<div id="recentads-audio-loadmore" class="clearfix text-center">
					<button id="recentads_audio_load_more" class="btn btn-loadmore" loadtype="ad_audio" loadmode="recent_ad_audio" loadlimit="<?php echo $_smarty_tpl->tpl_vars['row']->value['index_recent'];?>
" loadhit="1" title="Load more recent ads audios">
						<?php echo smarty_lang(array('code'=>"load_more"),$_smarty_tpl);?>

					</button>
				</div>
			</section>

			<section class="clearfix videos">
				<h1><?php echo smarty_lang(array('code'=>"recent_videos"),$_smarty_tpl);?>
</h1>
				<div id="recent_vids_sec" class="clearfix row">
				</div>
				<div id="recent_pre" class="clearfix"></div>
				<div id="recent-loadmore" class="clearfix text-center">
					<button id="recent_load_more" class="btn btn-loadmore" loadtype="video" loadmode="recent" loadlimit="<?php echo $_smarty_tpl->tpl_vars['row']->value['index_recent'];?>
" loadhit="1" title="Load more recent video">
						<?php echo smarty_lang(array('code'=>"load_more"),$_smarty_tpl);?>

					</button>
				</div>
			</section>

			<section class="clearfix videos">
				<h1><?php echo smarty_lang(array('code'=>"recent_audiobooks"),$_smarty_tpl);?>
</h1>
				<div id="recent_audiobooks_sec" class="clearfix row">
				</div>
				<div id="recentaudiobooks_pre" class="clearfix"></div>
				<div id="recentaudiobooks-loadmore" class="clearfix text-center">
					<button id="recentaudiobooks_load_more" class="btn btn-loadmore" loadtype="audiobook" loadmode="recent_audiobook" loadlimit="<?php echo $_smarty_tpl->tpl_vars['row']->value['index_recent'];?>
" loadhit="1" title="Load more recent audiobooks">
						<?php echo smarty_lang(array('code'=>"load_more"),$_smarty_tpl);?>

					</button>
				</div>
			</section>

			<section class="clearfix videos">
				<h1><?php echo smarty_lang(array('code'=>"recent_podcasts"),$_smarty_tpl);?>
</h1>
				<div id="recent_podcasts_sec" class="clearfix row">
				</div>
				<div id="recentpodcasts_pre" class="clearfix"></div>
				<div id="recentpodcasts-loadmore" class="clearfix text-center">
					<button id="recentpodcasts_load_more" class="btn btn-loadmore" loadtype="podcast" loadmode="recent_podcast" loadlimit="<?php echo $_smarty_tpl->tpl_vars['row']->value['index_recent'];?>
" loadhit="1" title="Load more recent podcasts">
						<?php echo smarty_lang(array('code'=>"load_more"),$_smarty_tpl);?>

					</button>
				</div>
			</section>
		</div>
		<!--<aside id="sidebar">-->
			<!--<div class="box-ad ad"><?php echo getAd(array('place'=>'ad_300x250'),$_smarty_tpl);?>
</div>-->
			<!--&lt;!&ndash; ******************************************* &ndash;&gt;-->
			<!--&lt;!&ndash; ************* USER BLOCK START ************ &ndash;&gt;-->
			<!--&lt;!&ndash; ******************************************* &ndash;&gt;-->
			<!--<?php if (isset($_smarty_tpl->tpl_vars['feature_users'])) {$_smarty_tpl->tpl_vars['feature_users'] = clone $_smarty_tpl->tpl_vars['feature_users'];
$_smarty_tpl->tpl_vars['feature_users']->value = get_users(array('featured'=>'yes','limit'=>5)); $_smarty_tpl->tpl_vars['feature_users']->nocache = null; $_smarty_tpl->tpl_vars['feature_users']->scope = 0;
} else $_smarty_tpl->tpl_vars['feature_users'] = new Smarty_variable(get_users(array('featured'=>'yes','limit'=>5)), null, 0);?>-->
			<!--<?php if ($_smarty_tpl->tpl_vars['feature_users']->value) {?>-->
			<!--<h2><?php echo smarty_lang(array('code'=>"featured_users"),$_smarty_tpl);?>
</h2>-->
			<!--<div class="clearfix sidebar-channels">-->
				<!--<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature_users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>-->
				<!---->
				<!--<div class="clearfix channel-item">-->
					<!--<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
" class="avatar">-->
						<!--<img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getuserthumb($_smarty_tpl->tpl_vars['user']->value,'m');?>
" width="50" height="50" class="img-circle">-->
					<!--</a>-->
					<!--<div class="channel-info">-->
						<!--<h3><a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a></h3>-->
						<!--<div class="clearfix views-videos">-->
							<!--<span><?php echo prettyNum(number_format($_smarty_tpl->tpl_vars['user']->value['profile_hits']));?>
 <?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
</span>-->
							<!--<span><?php echo prettyNum(number_format($_smarty_tpl->tpl_vars['user']->value['total_videos']));?>
 <?php echo smarty_lang(array('code'=>'videos'),$_smarty_tpl);?>
</span>-->
						<!--</div>-->
					<!--</div>-->
				<!--</div>-->
				<!--<?php } ?>-->
			<!--</div>-->
			<!--<?php }?>-->
			<!--&lt;!&ndash; ******************************************* &ndash;&gt;-->
			<!--&lt;!&ndash; ************* USER BLOCK END ************** &ndash;&gt;-->
			<!--&lt;!&ndash; ******************************************* &ndash;&gt;-->
			<!---->
			<!--<?php if ($_smarty_tpl->tpl_vars['row']->value['collectionsSection']=='yes') {?>-->
			<!--<?php if (isset($_smarty_tpl->tpl_vars['collections'])) {$_smarty_tpl->tpl_vars['collections'] = clone $_smarty_tpl->tpl_vars['collections'];
$_smarty_tpl->tpl_vars['collections']->value = $_smarty_tpl->tpl_vars['cbcollection']->value->get_collections(array('limit'=>4,'active'=>'yes','order'=>'total_objects DESC')); $_smarty_tpl->tpl_vars['collections']->nocache = null; $_smarty_tpl->tpl_vars['collections']->scope = 0;
} else $_smarty_tpl->tpl_vars['collections'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbcollection']->value->get_collections(array('limit'=>4,'active'=>'yes','order'=>'total_objects DESC')), null, 0);?>-->
			<!--<?php if (isset($_smarty_tpl->tpl_vars['collections'])) {$_smarty_tpl->tpl_vars['collections'] = clone $_smarty_tpl->tpl_vars['collections'];
$_smarty_tpl->tpl_vars['collections']->value = $_smarty_tpl->tpl_vars['cbcollection']->value->activeCollections($_smarty_tpl->tpl_vars['collections']->value); $_smarty_tpl->tpl_vars['collections']->nocache = null; $_smarty_tpl->tpl_vars['collections']->scope = 0;
} else $_smarty_tpl->tpl_vars['collections'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbcollection']->value->activeCollections($_smarty_tpl->tpl_vars['collections']->value), null, 0);?>-->
			<!--<h2 title="Collections with most items"><?php echo smarty_lang(array('code'=>"top_collections"),$_smarty_tpl);?>
</h2>-->
			<!--<div class="clearfix sidebar-items collections-grid">-->
				<!--<div class="clearfix row">-->
				<!--<?php if (isset($_smarty_tpl->tpl_vars['limit'])) {$_smarty_tpl->tpl_vars['limit'] = clone $_smarty_tpl->tpl_vars['limit'];
$_smarty_tpl->tpl_vars['limit']->value = 10; $_smarty_tpl->tpl_vars['limit']->nocache = null; $_smarty_tpl->tpl_vars['limit']->scope = 0;
} else $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(10, null, 0);?>-->
				<!--<?php if ($_smarty_tpl->tpl_vars['collections']->value) {?>        -->
				<!--<?php  $_smarty_tpl->tpl_vars['collection'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['collection']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['collections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['collection']->key => $_smarty_tpl->tpl_vars['collection']->value) {
$_smarty_tpl->tpl_vars['collection']->_loop = true;
?>-->
				<!--<?php if (isset($_smarty_tpl->tpl_vars['first_col_thumb'])) {$_smarty_tpl->tpl_vars['first_col_thumb'] = clone $_smarty_tpl->tpl_vars['first_col_thumb'];
$_smarty_tpl->tpl_vars['first_col_thumb']->value = $_smarty_tpl->tpl_vars['cbcollection']->value->coll_first_thumb($_smarty_tpl->tpl_vars['collection']->value,'l'); $_smarty_tpl->tpl_vars['first_col_thumb']->nocache = null; $_smarty_tpl->tpl_vars['first_col_thumb']->scope = 0;
} else $_smarty_tpl->tpl_vars['first_col_thumb'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbcollection']->value->coll_first_thumb($_smarty_tpl->tpl_vars['collection']->value,'l'), null, 0);?>-->
					<!--<div class="clearfix collection-item col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
						<!--<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/collection-item.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
-->
					<!--</div>-->
				<!--<?php } ?>-->
				<!--</div>-->
				<!--<?php } else { ?>-->
				<!--<div class="clearfix well"><?php echo smarty_lang(array('code'=>'no_collection_found'),$_smarty_tpl);?>
</div>-->
				<!--<?php }?>-->
			<!--</div>-->
			<!--<?php }?>-->

			<!--&lt;!&ndash; playlists &ndash;&gt;-->
			<!--<?php if (isset($_smarty_tpl->tpl_vars['playlists'])) {$_smarty_tpl->tpl_vars['playlists'] = clone $_smarty_tpl->tpl_vars['playlists'];
$_smarty_tpl->tpl_vars['playlists']->value = get_playlists(array('limit'=>4,'order'=>'total_items DESC')); $_smarty_tpl->tpl_vars['playlists']->nocache = null; $_smarty_tpl->tpl_vars['playlists']->scope = 0;
} else $_smarty_tpl->tpl_vars['playlists'] = new Smarty_variable(get_playlists(array('limit'=>4,'order'=>'total_items DESC')), null, 0);?>-->
			<!--<?php if (isset($_smarty_tpl->tpl_vars['playlists'])) {$_smarty_tpl->tpl_vars['playlists'] = clone $_smarty_tpl->tpl_vars['playlists'];
$_smarty_tpl->tpl_vars['playlists']->value = activePlaylists($_smarty_tpl->tpl_vars['playlists']->value); $_smarty_tpl->tpl_vars['playlists']->nocache = null; $_smarty_tpl->tpl_vars['playlists']->scope = 0;
} else $_smarty_tpl->tpl_vars['playlists'] = new Smarty_variable(activePlaylists($_smarty_tpl->tpl_vars['playlists']->value), null, 0);?>-->
			<!--<?php if ($_smarty_tpl->tpl_vars['playlists']->value) {?>-->
			<!--<div class="clearfix sidebar-playlists">-->
				<!--<h2 title="Playlists with most videos"><?php echo smarty_lang(array('code'=>"top_playlists"),$_smarty_tpl);?>
</h2>-->
				<!--<?php  $_smarty_tpl->tpl_vars['playlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['playlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['playlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['playlist']->key => $_smarty_tpl->tpl_vars['playlist']->value) {
$_smarty_tpl->tpl_vars['playlist']->_loop = true;
?>-->
				<!--<div class="playlist clearfix"> -->
					<!--<?php if (isset($_smarty_tpl->tpl_vars['items'])) {$_smarty_tpl->tpl_vars['items'] = clone $_smarty_tpl->tpl_vars['items'];
$_smarty_tpl->tpl_vars['items']->value = get_playlist_items($_smarty_tpl->tpl_vars['playlist']->value['playlist_id']); $_smarty_tpl->tpl_vars['items']->nocache = null; $_smarty_tpl->tpl_vars['items']->scope = 0;
} else $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(get_playlist_items($_smarty_tpl->tpl_vars['playlist']->value['playlist_id']), null, 0);?>-->
					<!--<a href="<?php echo VideoLink($_smarty_tpl->tpl_vars['items']->value[0]);?>
"><h3><?php echo $_smarty_tpl->tpl_vars['playlist']->value['playlist_name'];?>
</h3></a>-->
					<!--<div class="clearfix row">-->
					<!--<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>-->
						<!--<?php if ($_smarty_tpl->tpl_vars['item']->iteration==5) {?>-->
							<!--<?php break 1?>-->
						<!--<?php }?>-->
						<!--<?php if (isset($_smarty_tpl->tpl_vars['videoid'])) {$_smarty_tpl->tpl_vars['videoid'] = clone $_smarty_tpl->tpl_vars['videoid'];
$_smarty_tpl->tpl_vars['videoid']->value = $_smarty_tpl->tpl_vars['item']->value['videoid']; $_smarty_tpl->tpl_vars['videoid']->nocache = null; $_smarty_tpl->tpl_vars['videoid']->scope = 0;
} else $_smarty_tpl->tpl_vars['videoid'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['videoid'], null, 0);?>-->
						<!--<?php if ($_smarty_tpl->tpl_vars['videoid']->value) {?>-->
							<!--<div class="video col-lg-3 col-md-4 col-sm-6 col-xs-6">-->
								<!--<?php if (isset($_smarty_tpl->tpl_vars['videos'])) {$_smarty_tpl->tpl_vars['videos'] = clone $_smarty_tpl->tpl_vars['videos'];
$_smarty_tpl->tpl_vars['videos']->value = get_videos(array('videoid'=>$_smarty_tpl->tpl_vars['videoid']->value,'limit'=>'2')); $_smarty_tpl->tpl_vars['videos']->nocache = null; $_smarty_tpl->tpl_vars['videos']->scope = 0;
} else $_smarty_tpl->tpl_vars['videos'] = new Smarty_variable(get_videos(array('videoid'=>$_smarty_tpl->tpl_vars['videoid']->value,'limit'=>'2')), null, 0);?>-->
								<!--<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>-->
									<!--<a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs['seo']=='no') {?>&<?php } else { ?>?<?php }?>play_list=<?php echo $_smarty_tpl->tpl_vars['playlist']->value['playlist_id'];?>
" class="playlist-video">-->
										<!--<img src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'168x105'),$_smarty_tpl);?>
" class="img-responsive">-->
										<!--<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/thumb-ratio.png" alt="" class="thumb-ratio">-->
									<!--</a>-->
								<!--<?php } ?>-->
							<!--</div>-->
						<!--<?php } else { ?>-->
						<!--<div class="clearfix well">no items</div>-->
						<!--<?php }?>-->
					<!--<?php } ?>-->
					<!--</div>-->
					<!--<span class="videos-count"><?php echo number_format($_smarty_tpl->tpl_vars['cbvid']->value->action->count_playlist_items($_smarty_tpl->tpl_vars['playlist']->value['playlist_id']));?>
&nbsp;<?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>
</span>-->
				<!--</div>-->
				<!--<?php } ?>-->
			<!--</div>-->
			<!--<?php } else { ?>-->
				<!--<?php if (has_access('admin_access')) {?>-->
					<!--<div class="clearfix well"><?php echo smarty_lang(array('code'=>"no_playlists"),$_smarty_tpl);?>
</div>-->
				<!--<?php }?>-->
			<!--<?php }?>-->
		<!--</aside>-->
	</div>	
</div>

<!--<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery_plugs/owl-carousel/assets/css/docs.theme.min.css">-->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery_plugs/owl-carousel/assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery_plugs/owl-carousel/assets/owlcarousel/assets/owl.theme.default.min.css">

<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery_plugs/owl-carousel/assets/owlcarousel/owl.carousel.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery_plugs/owl-carousel/assets/vendors/jquery.mousewheel.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery_plugs/owl-carousel/assets/vendors/highlight.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery_plugs/owl-carousel/assets/js/app.js"></script>
<!--<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery_plugs/jcarousel/dist/jquery.jcarousel.js"></script>-->
<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/styles/cb_2014/theme/assets/js/ace-extra.min.js"></script>

<script type="text/javascript">
	// handles initial and load more
	// for home page videos
	var langCo = "<?php echo $_smarty_tpl->tpl_vars['vae']->value;?>
";
	var noRecent = "<?php echo $_smarty_tpl->tpl_vars['no_recent']->value;?>
";
	var loadMoreLang = "<?php echo $_smarty_tpl->tpl_vars['loadMoreLang']->value;?>
";

	var n = 0;

	//console.log(langCo);
	homePageVideos("<?php echo $_smarty_tpl->tpl_vars['got_qlitems']->value;?>
");
	//
	/* player height and editerpick videos height */
	var WinWidHome = "";
	function editpickVideos(){
		WinWidHome = $(window).width();
		if(WinWidHome > 991)
		{
			//console.log("height "+WinWidHome);
			var bannerHeight = $(".editorpick-holder").height();
			bannerHeight = bannerHeight - 12;
			//console.log("height "+bannerHeight);
			$(".editorpick-videos .scrollable-area").css({
				"height" : bannerHeight+"px",
			});
		}
		else
		{
			$(".editorpick-videos .scrollable-area").css("height","auto");
		}
	}
	
	$('.playerRatio').load(function(){
		editpickVideos();
	});
	$(window).resize(function() {
		editpickVideos();
	});

	$(document).ready(function () {

	    $('.main-links #balance_link').text($('#balance_menu').text());

	    // var txt = 'vids';
        video_carousel();

        $('#switch_ad').change(function () {
			var val = $(this).val();
			if (val == 1) {
                $('#recent_ads_sec').parent('.clearfix').hide();
                $('#recent_ads_audio_sec').parent('.clearfix').hide();
                $(this).val('0');
            }
            else {
                $('#recent_ads_sec').parent('.clearfix').show();
                $('#recent_ads_audio_sec').parent('.clearfix').show();
                $('#recentads_load_more').hide();
                $('#recentads_audio_load_more').hide();
                $(this).val('1');
			}
        });
    });

	function video_carousel() {
        if($('#recent_vids_sec').find('.item-video').length > 0) {
            $('#recent_vids_sec').addClass('owl-carousel');
            var owl = $('#recent_vids_sec');
            owl.owlCarousel({
                loop: false,
                nav: true,
                margin: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    960: {
                        items: 2
                    },
                    1100: {
                        items: 3
                    }
                }
            });
            owl.on('mousewheel', '.owl-stage', function (e) {
                if (e.deltaY > 0) {
                    owl.trigger('next.owl');
                } else {
                    owl.trigger('prev.owl');
                }
                e.preventDefault();
            });
			n = 1;
            $('#recent_load_more').hide();
            setTimeout(audiobook_carousel, 1000);
            setTimeout(ad_carousel, 1000);
            setTimeout(ad_audio_carousel, 1000);
		}
		else {
		    setTimeout(video_carousel, 1000);
		}
    }

    function ad_carousel() {
        if($('#recent_ads_sec').find('.item-video').length > 0) {
            $('#recent_ads_sec').addClass('owl-carousel');
            var owl = $('#recent_ads_sec');
            owl.owlCarousel({
                loop: false,
                nav: true,
                margin: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    960: {
                        items: 2
                    },
                    1100: {
                        items: 3
                    }
                }
            });
            owl.on('mousewheel', '.owl-stage', function (e) {
                if (e.deltaY > 0) {
                    owl.trigger('next.owl');
                } else {
                    owl.trigger('prev.owl');
                }
                e.preventDefault();
            });
            n = 0;
            return true;
        }
        else {
            setTimeout(ad_carousel, 1000);
        }
    }

    function ad_audio_carousel() {
        if($('#recent_ads_audio_sec').find('.item-video').length > 0) {
            $('#recent_ads_audio_sec').addClass('owl-carousel');
            var owl = $('#recent_ads_audio_sec');
            owl.owlCarousel({
                loop: false,
                nav: true,
                margin: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    960: {
                        items: 2
                    },
                    1100: {
                        items: 3
                    }
                }
            });
            owl.on('mousewheel', '.owl-stage', function (e) {
                if (e.deltaY > 0) {
                    owl.trigger('next.owl');
                } else {
                    owl.trigger('prev.owl');
                }
                e.preventDefault();
            });
            n = 0;
            return true;
        }
        else {
            setTimeout(ad_audio_carousel, 1000);
        }
    }

    function audiobook_carousel() {
        if($('#recent_audiobooks_sec').find('.item-video').length > 0) {
            $('#recent_audiobooks_sec').addClass('owl-carousel');
            var owl = $('#recent_audiobooks_sec');
            owl.owlCarousel({
                loop: false,
                nav: true,
                margin: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    960: {
                        items: 2
                    },
                    1100: {
                        items: 3
                    }
                }
            });
            owl.on('mousewheel', '.owl-stage', function (e) {
                if (e.deltaY > 0) {
                    owl.trigger('next.owl');
                } else {
                    owl.trigger('prev.owl');
                }
                e.preventDefault();
            });
            n = 0;
            return true;
        }
        else {
            setTimeout(podcast_carousel, 1000);
        }
    }

    function podcast_carousel() {
        if($('#recent_podcasts_sec').find('.item-video').length > 0) {
            $('#recent_podcasts_sec').addClass('owl-carousel');
            var owl = $('#recent_podcasts_sec');
            owl.owlCarousel({
                loop: false,
                nav: true,
                margin: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    960: {
                        items: 2
                    },
                    1100: {
                        items: 3
                    }
                }
            });
            owl.on('mousewheel', '.owl-stage', function (e) {
                if (e.deltaY > 0) {
                    owl.trigger('next.owl');
                } else {
                    owl.trigger('prev.owl');
                }
                e.preventDefault();
            });
            n = 0;
            return true;
            setTimeout(ad_carousel, 1000);
        }
        else {
            setTimeout(podcast_carousel, 1000);
        }
    }

    function remove_banner() {
		$('#banner-container').empty();
    }
</script><?php }} ?>
