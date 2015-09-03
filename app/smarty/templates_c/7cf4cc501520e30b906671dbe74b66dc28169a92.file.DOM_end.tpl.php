<?php /* Smarty version Smarty-3.1.11, created on 2012-12-13 12:17:37
         compiled from "smarty\templates\DOM_end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:968650b64b66ecbe53-15612623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cf4cc501520e30b906671dbe74b66dc28169a92' => 
    array (
      0 => 'smarty\\templates\\DOM_end.tpl',
      1 => 1355427373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '968650b64b66ecbe53-15612623',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50b64b66f0dee2_48780191',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b64b66f0dee2_48780191')) {function content_50b64b66f0dee2_48780191($_smarty_tpl) {?>        </div> <!-- end wrapper -->

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