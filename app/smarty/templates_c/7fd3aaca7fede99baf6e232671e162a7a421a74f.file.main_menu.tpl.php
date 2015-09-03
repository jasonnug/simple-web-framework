<?php /* Smarty version Smarty-3.1.11, created on 2013-02-25 16:55:18
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.2/smarty/templates/main_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121167887511d2862c22512-71905350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fd3aaca7fede99baf6e232671e162a7a421a74f' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.2/smarty/templates/main_menu.tpl',
      1 => 1361840108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121167887511d2862c22512-71905350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_511d2862c8f121_22000410',
  'variables' => 
  array (
    'front' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511d2862c8f121_22000410')) {function content_511d2862c8f121_22000410($_smarty_tpl) {?><div class="navbar navbar-fixed-top">
    <?php if ($_smarty_tpl->tpl_vars['front']->value){?>
        <div class="navbar-inner topbar">
    <?php }else{ ?>
        <div class="navbar-inverse topbar-dark">
    <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['front']->value){?>
            <div class="container">
                <ul class="nav top-bar">
                    <li class="active"><a href="residential">Residential</a></li>
                    <li><a href="business">Business</a></li>
                </ul>
                <img src="img/top-bar-diag.png">
                <div class="right top-bar-phone">503.266.8111</div>
                <ul class="nav top-bar pull-right">
                    <li class=""><a href="contact">Contact</a></li>
                </ul>
                <img class="right" src="img/top-bar-diag.png">
                <ul class="nav top-bar pull-right">
                    <li class=""><a href="newsletters">Newsletters</a></li>
                </ul>
                <img class="right" src="img/top-bar-diag.png">
                <ul class="nav top-bar pull-right">
                    <li class=""><a href="about">About</a></li>
                </ul>
            </div>
        <?php }?>
    </div>  
            
    <div id="menu-wrapper">
        <div class="menu-left-grad">
        </div>
        <?php if ($_smarty_tpl->tpl_vars['front']->value){?>
        <div class="menu-mid-grad">
        <?php }else{ ?>
        <div class="menu-mid-grad-w-sub">
        <?php }?>
            <div class="menu-logo left clearfix">
                <a class="clearfix" href="/"><img class="left" src="img/canbytelcom.png"></a>
            </div>
            <?php if (!$_smarty_tpl->tpl_vars['front']->value){?>
                <div class="menu-nav left clearfix">
                    <ul class="nav">
                        <li class="current"><a href="#">Shop</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">MyAccount</a></li>
                    </ul>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['front']->value){?>
                <div class="right">
                    <span class="menu-phone">503.266.8111</span>
                </div>
            <?php }else{ ?>
                <div class="navbar ext-links right clearfix">
                    <div class="">
                        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <!-- Everything you want hidden at 940px or less, place within here -->
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li><a href="//home.canby.com">@Webmail</a></li>
                                <li><a href="//canbytel.com/billpay">$billpay</a></li>
                                <li><a href="#">MyVoice</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="sub-menu">
                    <div class="sub-menu-nav left clearfix">
                        <ul class="nav">
                            <li class="tv-menu"><a id="tv" href="tv">TV</a></li>
                            <li class="internet-menu"><a id="internet" href="internet">Internet</a></li>
                            <li class="telephone-menu"><a id="telephone" href="telephone">Telephone</a></li>
                            <li class="bundles-menu"><a id="bundles" href="bundles">Bundles</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div id="tv-drop-down" class="drop-down-menu clearfix">
                        <div class="clearfix"></div>
                        <div class="left left-links">
                            <ul class="nav">
                                <li><a href="tv">Channel Packages</a></li>
                                <li><a href="tv/dvr">DVR</a></li>
                                <li><a href="tv/channellineup">Channel Lineup</a></li>
                                <li><a href="tv/ondemand">OnDemand</a></li>
                                <li><a href="tv/wireguard">WireGuard</a></li>
                            </ul>
                        </div>
                        <a href="tv"><img class="right tv-sub-pic" src="img/tv-sub-pic.png"></a>
                    </div>
                    <div id="internet-drop-down" class="drop-down-menu drop-down-bg-bigger clearfix">
                        <div class="clearfix"></div>
                        <div class="left left-links">
                            <ul class="nav">
                                <li><a href="internet">Internet Packages</a></li>
                                <li><a href="internet/wifi">Managed WiFi</a></li>
                                <li><a href="internet/mytech">MyTech</a></li>
                                <li><a href="internet/secureit">SecureIT<sup>sm</sup> Plus</a></li>
                                <li><a href="internet/filehopper">FileHopper<sup>sm</sup> Plus</a></li>
                                <li><a href="internet/wireguard">WireGuard</a></li>
                                <li><a href="internet/roku">Roku</a></li>
                            </ul>
                        </div>

                    </div>
                    <div id="telephone-drop-down" class="drop-down-menu drop-down-bg clearfix">
                        <div class="clearfix"></div>
                        <div class="left left-links">
                            <ul class="nav">
                                <li><a href="telephone">Lines and Rates</a></li>
                                <li><a href="telephone/callingfeatures">Calling Features</a></li>
                                <li><a href="telephone/longdistance">Long Distance</a></li>
                                <li><a href="telephone/voicemail">Voice Mail</a></li>
                                <li><a href="telephone/wireguard">WireGuard</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div><?php }} ?>