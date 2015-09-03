<?php /* Smarty version Smarty-3.1.11, created on 2012-12-17 15:55:38
         compiled from "..\smarty\templates\top_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2873050c9068e54eeb4-25855891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a8bad3cfb2c083d860047d26ad23404a944261f' => 
    array (
      0 => '..\\smarty\\templates\\top_bar.tpl',
      1 => 1355788537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2873050c9068e54eeb4-25855891',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50c9068e57bd34_22280693',
  'variables' => 
  array (
    'front' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c9068e57bd34_22280693')) {function content_50c9068e57bd34_22280693($_smarty_tpl) {?><div class="navbar navbar-fixed-top">
    <div class="navbar-inner j-top-bar">
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
    <div class="j-header-wrapper clearfix">
        <div class="j-header-left"></div>
        <div class="row j-header-center">
            <div class="span2">
                <a class="j-header-logo" href="#"><img class="pull-left" src="img/canbytelcom.png"></a>
            </div>
            <?php if (!$_smarty_tpl->tpl_vars['front']->value){?>
                <div class="span5">
                    <ul class="nav j-top-nav">
                        <li class=""><a href="#">Shop</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">MyAccount</a></li>
                    </ul>
                </div>
            <?php }else{ ?>
                <div class="span5"></div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['front']->value){?>
                <div class="span5">
                    <span class="j-phone">503.266.8111</span>
                </div>
            <?php }else{ ?>
                <div class="span5 ext-links">
                    <a href="">MyVoice</a>
                    <a href="">$billpay</a>
                    <a href="">@Webmail</a>
                </div>
            <?php }?>
        </div>
        <div class="j-header-right"></div>
    </div>
    <?php if (!$_smarty_tpl->tpl_vars['front']->value){?>
    <div class="j-subnav-wrapper clearfix">
        <div class="j-subnav-left"></div>
        <div class="j-subnav-right"></div>
        <div class="j-subnav clearfix">
        </div>
    </div>
    <?php }?>
</div><?php }} ?>