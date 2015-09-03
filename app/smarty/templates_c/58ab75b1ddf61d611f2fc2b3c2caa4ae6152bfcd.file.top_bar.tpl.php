<?php /* Smarty version Smarty-3.1.11, created on 2012-12-18 16:31:04
         compiled from "../smarty/templates/top_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156787073350d096bccb0bb0-59903654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58ab75b1ddf61d611f2fc2b3c2caa4ae6152bfcd' => 
    array (
      0 => '../smarty/templates/top_bar.tpl',
      1 => 1355877062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156787073350d096bccb0bb0-59903654',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50d096bccd4024_30056252',
  'variables' => 
  array (
    'front' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d096bccd4024_30056252')) {function content_50d096bccd4024_30056252($_smarty_tpl) {?><div class="navbar navbar-fixed-top">
    <?php if ($_smarty_tpl->tpl_vars['front']->value){?>
    <div class="navbar-inner topbar">
    <?php }else{ ?>
    <div class="navbar-inner navbar-inverse topbar-dark">
    <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['front']->value){?>
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="active"><a href="#">Residential</a></li>
                        <li><a href="#">Business</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
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