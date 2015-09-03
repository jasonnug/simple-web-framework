<?php /* Smarty version Smarty-3.1.11, created on 2012-12-18 08:15:50
         compiled from "smarty/templates/DOM_end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76326158850d096b61ad5b4-93850725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '429daa6d91bc56fe9f8dfd1f3521721e04c6a0bf' => 
    array (
      0 => 'smarty/templates/DOM_end.tpl',
      1 => 1355847017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76326158850d096b61ad5b4-93850725',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50d096b61b5264_84038337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d096b61b5264_84038337')) {function content_50d096b61b5264_84038337($_smarty_tpl) {?>        </div> <!-- end wrapper -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

        <!-- Orbit -->
        <script src="js/vendor/jquery.foundation.orbit.js"></script>

        <!-- Bootstrap -->
        <script src="js/vendor/bootstrap.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Initialize JS Plugins -->
        <script src="js/vendor/app.js"></script>

        <!-- Orbit Initialization -->
        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').orbit({
                    animation: 'horizontal-push',                       // fade, horizontal-slide, vertical-slide, horizontal-push
                    animationSpeed: 800,                                // how fast animtions are
                    timer: true,                                        // true or false to have the timer
                    resetTimerOnClick: false,                           // true resets the timer instead of pausing slideshow progress
                    advanceSpeed: 4000,                                 // if timer is enabled, time between transitions
                    pauseOnHover: false,                                // if you hover pauses the slider
                    startClockOnMouseOut: false,                        // if clock should start on MouseOut
                    startClockOnMouseOutAfter: 200,                     // how long after MouseOut should the timer start again
                    directionalNav: true,                               // manual advancing directional navs
                    captions: false,                                    // do you want captions?
                    captionAnimation: 'fade',                           // fade, slideOpen, none
                    captionAnimationSpeed: 800,                         // if so how quickly should they animate in
                    bullets: true,                                      // true or false to activate the bullet navigation
                    bulletThumbs: false,                                // thumbnails for the bullets
                    bulletThumbLocation: 'img/sliderthumbs/',           // location from this file where thumbs will be
                    afterSlideChange: function(){},                     // empty function
                    fluid: true                                         // or set a aspect ratio for content slides (ex: '4x3')
                });
                
                $('#featuredContent').orbit({
                    advanceSpeed: 6000,
                    directionalNav: false, 
                    fluid: '15x9'
                });
            });
        </script>

        <!-- Google Analytics -->
        <script type="text/javascript">
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; (function(d,t) {
                var g=d.createElement(t), s=d.getElementsByTagName(t)[0];
                g.src=('https:'==location.protocol?'//ssl':'//www') + '.google-analytics.com/ga.js';
                s.parentNode.insertBefore(g,s)
            }(document,'script'));
        </script>
    </body>
</html>
<?php }} ?>