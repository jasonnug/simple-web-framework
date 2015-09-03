<?php /* Smarty version Smarty-3.1.11, created on 2013-03-07 15:35:40
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3/smarty/templates/main_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99967995951314e40986970-89331094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '710680721d2a3126228aa42f1f7410a4790fdefe' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3/smarty/templates/main_menu.tpl',
      1 => 1362698438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99967995951314e40986970-89331094',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51314e40a6bde1_60214076',
  'variables' => 
  array (
    'menuGroup' => 0,
    'front' => 0,
    'menus' => 0,
    'menu' => 0,
    'subMenu' => 0,
    'subSubMenu' => 0,
    'menuItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51314e40a6bde1_60214076')) {function content_51314e40a6bde1_60214076($_smarty_tpl) {?><div class="navbar navbar-fixed-top">
    <?php if ($_smarty_tpl->tpl_vars['menuGroup']->value=="null"||$_smarty_tpl->tpl_vars['front']->value){?>
        <div class="navbar-inner topbar">
    <?php }else{ ?>
        <div class="navbar-inverse topbar-dark">
    <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['menuGroup']->value=="Residential"){?>
            <div class="container">
                <ul class="nav top-bar">
                    <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['menu']->value->menu=="none"){?>
                            <?php if ($_smarty_tpl->tpl_vars['menuGroup']->value==$_smarty_tpl->tpl_vars['menu']->value->menuName){?>
                                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value->title;?>
</a></li>
                            <?php }else{ ?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value->title;?>
</a></li>
                            <?php }?>
                        <?php }?>
                    <?php } ?>
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
    <!-- Residential Menu-->
    <div id="menu-wrapper">
        <div class="menu-left-grad">
        </div>
        <?php if ($_smarty_tpl->tpl_vars['subMenu']->value=="null"||$_smarty_tpl->tpl_vars['front']->value){?>
        <div class="menu-mid-grad">
        <?php }else{ ?>
        <div class="menu-mid-grad-w-sub">
        <?php }?>
            <div class="menu-logo left clearfix">
                <a href="http://canbytel.com"><img src="img/canbytelcom.png"></a>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['front']->value){?>
                <div class="right">
                    <span class="menu-phone">503.266.8111</span>
                </div>
            <?php }else{ ?>
                <div class="menu-nav left clearfix">
                    <ul class="nav">
                        <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['menu']->value->menu=="Residential"){?>
                                <?php if ($_smarty_tpl->tpl_vars['menu']->value->menuName==$_smarty_tpl->tpl_vars['subMenu']->value){?>
                                    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value->title;?>
</a></li>
                                <?php }else{ ?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value->title;?>
</a></li>
                                <?php }?>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </div>
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
                <?php if ($_smarty_tpl->tpl_vars['subMenu']->value=="Shop"){?> 
                    <div class="clearfix"></div>
                    <div class="sub-menu">
                        <div class="sub-menu-nav left clearfix">
                            <ul class="nav">
                                <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['menu']->value->menu=="Shop"){?>
                                        <?php if ($_smarty_tpl->tpl_vars['subSubMenu']->value==$_smarty_tpl->tpl_vars['menu']->value->menuName){?>
                                            <li class="<?php echo $_smarty_tpl->tpl_vars['menu']->value->url;?>
-menu"><a id="<?php echo $_smarty_tpl->tpl_vars['menu']->value->menuName;?>
" href="<?php echo $_smarty_tpl->tpl_vars['menu']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value->menuName;?>
</a></li>
                                        <?php }else{ ?>
                                            <li class="<?php echo $_smarty_tpl->tpl_vars['menu']->value->url;?>
-menu"><a id="<?php echo $_smarty_tpl->tpl_vars['menu']->value->menuName;?>
" href="<?php echo $_smarty_tpl->tpl_vars['menu']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value->menuName;?>
</a></li>
                                        <?php }?>
                                    <?php }?>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div id="tv-drop-down" class="drop-down-menu clearfix">
                            <div class="clearfix"></div>
                            <div class="left left-links">
                                <ul class="nav">
                                    <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['menu']->value->menuName=="TV"){?>
                                            <?php  $_smarty_tpl->tpl_vars['menuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value->menuItems; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->key => $_smarty_tpl->tpl_vars['menuItem']->value){
$_smarty_tpl->tpl_vars['menuItem']->_loop = true;
?>
                                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->title;?>
</a></li>
                                            <?php } ?>
                                        <?php }?>
                                    <?php } ?>
                                </ul>
                            </div>
                            <a href="tv"><img class="right tv-sub-pic" src="img/tv-sub-pic.png"></a>
                        </div>
                        <div id="internet-drop-down" class="drop-down-menu drop-down-bg-bigger clearfix">
                            <div class="clearfix"></div>
                            <div class="left left-links">
                                <ul class="nav">
                                    <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['menu']->value->menuName=="Internet"){?>
                                            <?php  $_smarty_tpl->tpl_vars['menuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value->menuItems; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->key => $_smarty_tpl->tpl_vars['menuItem']->value){
$_smarty_tpl->tpl_vars['menuItem']->_loop = true;
?>
                                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->title;?>
</a></li>
                                            <?php } ?>
                                        <?php }?>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div id="telephone-drop-down" class="drop-down-menu drop-down-bg clearfix">
                            <div class="clearfix"></div>
                            <div class="left left-links">
                                <ul class="nav">
                                    <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['menu']->value->menuName=="Telephone"){?>
                                            <?php  $_smarty_tpl->tpl_vars['menuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value->menuItems; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->key => $_smarty_tpl->tpl_vars['menuItem']->value){
$_smarty_tpl->tpl_vars['menuItem']->_loop = true;
?>
                                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->title;?>
</a></li>
                                            <?php } ?>
                                        <?php }?>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php }?> 
            <?php }?>
        </div>
    </div>
</div><?php }} ?>