<?php /* Smarty version Smarty-3.1.11, created on 2013-05-14 11:52:44
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/main_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1637145208513a2e0a0df177-96219797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '565051c6970569aecd3541fce31562f21ff88e9b' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/main_menu.tpl',
      1 => 1368557562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1637145208513a2e0a0df177-96219797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_513a2e0a242e11_60908831',
  'variables' => 
  array (
    'menuGroup' => 0,
    'front' => 0,
    'menus' => 0,
    'menu' => 0,
    'subMenu' => 0,
    'menuItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513a2e0a242e11_60908831')) {function content_513a2e0a242e11_60908831($_smarty_tpl) {?><div class="navbar navbar-fixed-top">
    <?php if ($_smarty_tpl->tpl_vars['menuGroup']->value=="null"||$_smarty_tpl->tpl_vars['front']->value){?>
        <div class="navbar-inner topbar">
    <?php }else{ ?>
        <div class="navbar-inverse topbar-dark">
    <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['menuGroup']->value!="null"&&$_smarty_tpl->tpl_vars['front']->value!="True"){?>
            <div class="container">
                <ul class="nav top-bar">
                    <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                        <?php if (!$_smarty_tpl->tpl_vars['menu']->value->parentMenu){?>
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
                <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['menu']->value->parentMenu=="top-bar"){?>
                        <img class="right" src="img/top-bar-diag.png">
                        <ul class="nav top-bar pull-right">
                            <?php if ($_smarty_tpl->tpl_vars['menuGroup']->value==$_smarty_tpl->tpl_vars['menu']->value->menuName){?>
                                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value->title;?>
</a></li>
                            <?php }else{ ?>
                                <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value->title;?>
</a></li>
                            <?php }?>
                        </ul>
                    <?php }?>
                <?php } ?>
            </div>
        <?php }?>
    </div>
    <div id="menu-wrapper" style="">
        <div class="menu-left-grad">
        </div>
        <?php if ($_smarty_tpl->tpl_vars['subMenu']->value=="null"||$_smarty_tpl->tpl_vars['front']->value){?>
        <div class="menu-mid-grad">
        <?php }else{ ?>
        <div class="menu-mid-grad-w-sub">
        <?php }?>
            <div class="menu-logo left clearfix">
                <a href="http://canbytel.com"><img width=230 src="img/canbytelcom.png"></a>
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
                            <?php if ($_smarty_tpl->tpl_vars['menu']->value->parentMenu==$_smarty_tpl->tpl_vars['menuGroup']->value){?>
                                <?php if ($_smarty_tpl->tpl_vars['menu']->value->menuName==$_smarty_tpl->tpl_vars['subMenu']->value){?>
                                    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value->title;?>
</a></li>
                                <?php }else{ ?>
                                    <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value->title;?>
</a></li>
                                <?php }?>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </div>
                
                <div class="clearfix"></div>
                <div class="sub-menu">
                    <div class="sub-menu-nav left clearfix">
                        <ul class="nav">
                            <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['menu']->value->parentMenu==$_smarty_tpl->tpl_vars['subMenu']->value){?>
                                    <li id="<?php echo $_smarty_tpl->tpl_vars['menu']->value->menuName;?>
-menu"><a id="<?php echo $_smarty_tpl->tpl_vars['menu']->value->menuName;?>
-link" href="<?php echo $_smarty_tpl->tpl_vars['menu']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value->title;?>
</a></li>
                                <?php }?>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['menu']->value->parentMenu==$_smarty_tpl->tpl_vars['subMenu']->value&&count($_smarty_tpl->tpl_vars['menu']->value->menuItems)>0){?>
                            <?php if (count($_smarty_tpl->tpl_vars['menu']->value->menuItems)<=4){?>
                                <div id="<?php echo $_smarty_tpl->tpl_vars['menu']->value->menuName;?>
-drop-down" class="drop-down-menu drop-down-4items clearfix">
                            <?php }elseif(count($_smarty_tpl->tpl_vars['menu']->value->menuItems)==5){?>
                                <div id="<?php echo $_smarty_tpl->tpl_vars['menu']->value->menuName;?>
-drop-down" class="drop-down-menu drop-down-5items clearfix">
                            <?php }elseif(count($_smarty_tpl->tpl_vars['menu']->value->menuItems)==6){?>
                                <div id="<?php echo $_smarty_tpl->tpl_vars['menu']->value->menuName;?>
-drop-down" class="drop-down-menu drop-down-6items clearfix">
                            <?php }elseif(count($_smarty_tpl->tpl_vars['menu']->value->menuItems)==7){?>
                                <div id="<?php echo $_smarty_tpl->tpl_vars['menu']->value->menuName;?>
-drop-down" class="drop-down-menu drop-down-7items clearfix">
                            <?php }elseif(count($_smarty_tpl->tpl_vars['menu']->value->menuItems)==8){?>
                                <div id="<?php echo $_smarty_tpl->tpl_vars['menu']->value->menuName;?>
-drop-down" class="drop-down-menu drop-down-8items clearfix">
                            <?php }?>
                                <div class="clearfix"></div>
                                <div class="left left-links">
                                    <ul class="nav">
                                        <?php  $_smarty_tpl->tpl_vars['menuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value->menuItems; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->key => $_smarty_tpl->tpl_vars['menuItem']->value){
$_smarty_tpl->tpl_vars['menuItem']->_loop = true;
?>
                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->title;?>
</a></li>    
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                    <?php } ?>
                </div>
            <?php }?>
        </div>
    </div>
</div><?php }} ?>