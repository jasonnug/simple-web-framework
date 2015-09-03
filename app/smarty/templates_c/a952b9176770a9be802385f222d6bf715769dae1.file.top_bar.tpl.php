<?php /* Smarty version Smarty-3.1.11, created on 2013-02-14 09:47:11
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.2/smarty/templates/top_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:443676317511d1e16c1b586-73462169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a952b9176770a9be802385f222d6bf715769dae1' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.2/smarty/templates/top_bar.tpl',
      1 => 1360864030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '443676317511d1e16c1b586-73462169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_511d1e16c6f549_57055675',
  'variables' => 
  array (
    'front' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511d1e16c6f549_57055675')) {function content_511d1e16c6f549_57055675($_smarty_tpl) {?><div class="navbar navbar-fixed-top">
    <?php if ($_smarty_tpl->tpl_vars['front']->value){?>
    <div class="navbar-inner topbar">
    <?php }else{ ?>
    <div class="navbar-inner navbar-inverse topbar-dark">
    <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['front']->value){?>
            <div class="container">
                <ul class="nav">
                    <li class="active"><a href="#">Residential</a></li>
                    <li><a href="#">Business</a></li>
                </ul>
            </div>
        <?php }?>
    </div>
    <!--
    <div class="j-header-wrapper clearfix">
        <div class="j-header-left"></div>
        <div class="j-header-center">
            <div class="j-header-logo clearfix">
                <a href="#"><img class="pull-left" src="img/canbytelcom.png"></a>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['front']->value){?>
                <div></div>
                <div>
                    <span class="j-phone">503.266.8111</span>
                </div>
            <?php }else{ ?>
                <div class="j-header-main-nav">
                    <ul class="nav">
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">MyAccount</a></li>
                    </ul>
                </div>
                <div class="j-header-ext-links">
                    <a href="">MyVoice</a>
                    <a href="">$billpay</a>
                    <a href="">@Webmail</a>
                </div>
            <?php }?>
        </div>
        <div class="j-header-right"></div>
    </div>-->
    <div class="header-wrapper clearfix">
        <div class="container header">
            <div class="row-fluid">
                <div class="span3">
                    <div class="header-logo clearfix">
                        <a href="#"><img class="pull-left" src="img/canbytelcom.png"></a>
                    </div>
                </div>
                <div class="span4">
                    <div class="main-nav clearfix">
                        <ul class="nav">
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">MyAccount</a></li>
                        </ul>
                    </div>
                </div>
                <div class="span5">
                    <div class="ext-links clearfix">
                        <ul class="nav">
                            <li><a href="//home.canby.com">@Webmail</a></li>
                            <li><a href="//canbytel.com/billpay">$billpay</a></li>
                            <li><a href="#">MyVoice</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>