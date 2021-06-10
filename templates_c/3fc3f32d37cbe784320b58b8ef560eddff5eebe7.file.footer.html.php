<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 02:50:08
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:114806318460bc3714ef0179-63349842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fc3f32d37cbe784320b58b8ef560eddff5eebe7' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/footer.html',
      1 => 1622947807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114806318460bc3714ef0179-63349842',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc3714f1db46_59137854',
  'variables' => 
  array (
    'baseurl' => 0,
    'userquery' => 0,
    'user_det' => 0,
    'Cbucket' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc3714f1db46_59137854')) {function content_60bc3714f1db46_59137854($_smarty_tpl) {?><style>
    footer .footer-holder a {
        margin: 0;
        color: #fff;
        font-size: 18px;
        font-weight: 400;
    }
</style>

<div id="mobile-footer" class="dark bright" style="display: none">
    <div class="row">
        <div class="col-xs-2" style="width: 15%;position: relative;left: 5px">
            <i class="fa fa-play-circle" style="color: #cc34cc"></i><br>
            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/videos.php" style="color: #cc34cc"><?php echo smarty_lang(array('code'=>"com_vidz"),$_smarty_tpl);?>
</a>
        </div>
        <div class="col-xs-2" style="width: 12%">
            <i class="fa fa-dollar" style="color: #11e018;"></i><br>
            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/ads.php" style="color: #11e018"><?php echo smarty_lang(array('code'=>"ads"),$_smarty_tpl);?>
</a>
        </div>
        <div class="col-xs-2" style="width: 23%">
            <i class="fa fa-headphones"></i><br>
            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/audiobooks.php" style="color: #00ffff"><?php echo smarty_lang(array('code'=>"audiobooks"),$_smarty_tpl);?>
</a>
        </div>
        <div class="col-xs-2" style="width: 20%">
            <i class="fa fa-microphone"></i><br>
            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/podcasts.php" style="color: #ffde77"><?php echo smarty_lang(array('code'=>"podcasts"),$_smarty_tpl);?>
</a>
        </div>
        <div class="col-xs-4" style="width: 30%;">
            <?php if (userid()) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['user_det'])) {$_smarty_tpl->tpl_vars['user_det'] = clone $_smarty_tpl->tpl_vars['user_det'];
$_smarty_tpl->tpl_vars['user_det']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_user_details(userid()); $_smarty_tpl->tpl_vars['user_det']->nocache = null; $_smarty_tpl->tpl_vars['user_det']->scope = 0;
} else $_smarty_tpl->tpl_vars['user_det'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_user_details(userid()), null, 0);?>
            <span>Balance</span>
            <h3>$<?php echo number_format((float)($_smarty_tpl->tpl_vars['user_det']->value['balance']),2);?>
</h3>
            <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/signup.php?mode=login"><?php echo smarty_lang(array('code'=>"login"),$_smarty_tpl);?>
</a>
            <?php }?>
        </div>
    </div>
</div>

<?php echo ANCHOR(array('place'=>"play_front_anchor"),$_smarty_tpl);?>

<footer id="footer" class="clearfix">
    <?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->footer();?>

    <div class="container">
        <div class="footer-holder row">

            <div class="col-lg-6 col-md-4 col-sm-3 col-xs-12" style="padding-left: 30px">
                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
"><?php echo smarty_lang(array('code'=>"centx"),$_smarty_tpl);?>
</a>
            </div>

            <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/view_page.php?pid=1"><?php echo smarty_lang(array('code'=>"about_us"),$_smarty_tpl);?>
</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/view_page.php?pid=2"><?php echo smarty_lang(array('code'=>"privacy_policy"),$_smarty_tpl);?>
</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/view_page.php?pid=3"><?php echo smarty_lang(array('code'=>"terms_of_serivce"),$_smarty_tpl);?>
</a>
                </div>

            </div>

        </div>
    </div><!-- end of custom-container -->
</footer>
<!-- cd-popup -->
<div class="cd-popup" role="alert">
    <div class="cb-popup-container clearfix">
        <div class="modal-inset">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col my-modal-content"></div>
        </div>
    </div>
    <a class="cd-popup-close" href="#">close</a>
</div>
<!-- close-cd-popup -->

<!--cookie consent banner-->
<div class="cookie-container">
    <p>
        We use cookies in this website to give you the best experience on our
        site and show you relevant ads. To find out more, read our
        <a href="#">privacy policy</a> and <a href="#">cookie policy</a>.
    </p>

    <button class="cookie-btn">
        Okay
    </button>
</div>
<!--end cookie consent banner-->

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/photos.js"></script>
<script>
    $(document).on('click', '.pick-lang', function () {
        var _this = $(this);
        var lang_code = _this.data('lang');
        var $currentLocation = window.location.href,
            matchedElement = $currentLocation.match(/\?/);

        if (matchedElement == null) {
            window.location = "?set_site_lang=" + lang_code;
        } else {
            window.location = window.location + "&set_site_lang=" + lang_code;
        }
    });

    $(document).on('click', '#cbsearch', function (e) {
        e.preventDefault();
        searchForm = $('.search-form');
        searchQuery = $('#query').val();
        queryLen = searchQuery.length;
        if (queryLen <= 2) {
            msg = 'Search query<strong> ' + searchQuery + '</strong> is too short. Open up!';
            _cb.throwHeadMsg('warning', msg, 3000, true);
            //alert("Search term is too short");
        } else {
            $('.search-form').submit();
        }
    });

    $('.dropdown-menu li').on('click', function () {
        var searchType = $('#searchTypes').find('span.search-type').html();
        var searchQuery = $('input#query').val();
        if (searchQuery.length > 1) {
            $('#cbsearch').trigger('click');
        }
    });

    jQuery(document).ready(function ($) {

        $('#container').next().hide();

        //open popup
        $(document).on('click', '.cd-popup-trigger', function (event) {
            event.preventDefault();
            $('.cd-popup').addClass('is-visible');
        });

        //close popup
        $(document).on('click', '.cd-popup', function (event) {
            if ($(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup')) {
                event.preventDefault();
                $(this).removeClass('is-visible');
                $(".my-modal-content").html("");
            }
        });
        //close popup when clicking the esc keyboard button
        $(document).keydown(function (event) {
            if (event.which == '27') {
                var videoId = $(".my-modal-content").attr("id");
                var cbPlayer = _cb.getPlayerEl(videoId);

                if (!$(cbPlayer).hasClass("vjs-fullscreen")) {
                    $('.cd-popup').removeClass('is-visible');
                    $(".my-modal-content").html("");
                    var modalPlayerInterval = setInterval(function () {
                        var player = $(cbPlayer).find('video');
                        var isPlaying = !$(player)[0].paused;
                        if (isPlaying) {
                            $(player)[0].pause()
                            clearInterval(modalPlayerInterval);
                        }
                    }, 100);
                }
            }
        });
    });


</script>
<!--<?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->footer();?>
--><?php }} ?>
