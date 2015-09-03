<?php /* Smarty version Smarty-3.1.11, created on 2013-03-08 09:59:42
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3/smarty/templates/DOM_end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169411619151314e40ac0872-14189495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a22549c04bbac089627a5f338e2a1509535921c8' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3/smarty/templates/DOM_end.tpl',
      1 => 1362765347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169411619151314e40ac0872-14189495',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51314e40ac9bb5_61895262',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51314e40ac9bb5_61895262')) {function content_51314e40ac9bb5_61895262($_smarty_tpl) {?>        </div> <!-- end wrapper -->

        
        
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.effects.core.js"></script>
        <script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.effects.slide.js"></script>
        
        <script src="js/vendor/jquery-ui-1.9.2.custom.min.js"></script>
        
        <!-- |||||||| Megafolio |||||||||| -->
        <script type="text/javascript" src="plugins/megafolio/megafolio/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="plugins/megafolio/megafolio/js/jquery.themepunch.megafolio.min.js"></script>

        <!-- Orbit -->
        <script src="js/vendor/jquery.foundation.orbit.js"></script>
        
        <!-- FitText -->
        <script src="js/vendor/jquery.fittext.js"></script>
        
        <!-- Shapeshift -->
        <script src="js/vendor/jquery.shapeshift.js"></script>

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