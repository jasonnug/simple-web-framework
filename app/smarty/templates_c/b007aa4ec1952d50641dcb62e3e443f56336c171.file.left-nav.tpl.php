<?php /* Smarty version Smarty-3.1.11, created on 2013-05-13 15:54:11
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/left-nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1276873752513a2e74d2ee46-74245962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b007aa4ec1952d50641dcb62e3e443f56336c171' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/left-nav.tpl',
      1 => 1368485650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1276873752513a2e74d2ee46-74245962',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_513a2e74d6a7a4_65054597',
  'variables' => 
  array (
    'menus' => 0,
    'menu' => 0,
    'subSubMenu' => 0,
    'curPage' => 0,
    'menuItem' => 0,
    'menu2' => 0,
    'subPage' => 0,
    'menuItem2' => 0,
    'menuGroup' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513a2e74d6a7a4_65054597')) {function content_513a2e74d6a7a4_65054597($_smarty_tpl) {?><div class="span3">
    <div class="row-fluid">
        <div class="span12">
            <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['menu']->value->menuName==$_smarty_tpl->tpl_vars['subSubMenu']->value){?>
                    <div class="left-nav">
                        <ul class="nav nav-list">
                            <li class="nav-header"><?php echo $_smarty_tpl->tpl_vars['menu']->value->title;?>
</li>
                            <?php  $_smarty_tpl->tpl_vars['menuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value->menuItems; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->key => $_smarty_tpl->tpl_vars['menuItem']->value){
$_smarty_tpl->tpl_vars['menuItem']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['curPage']->value==$_smarty_tpl->tpl_vars['menuItem']->value->menuItemName){?>
                                    <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->title;?>
<img class="right noborder" style="padding: 4px 0; width:10px;" src="img/right-caret.png"></a></li>
                                    <?php  $_smarty_tpl->tpl_vars['menu2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu2']->key => $_smarty_tpl->tpl_vars['menu2']->value){
$_smarty_tpl->tpl_vars['menu2']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['menu2']->value->menuName==$_smarty_tpl->tpl_vars['menuItem']->value->menuItemName){?>
                                            <?php  $_smarty_tpl->tpl_vars['menuItem2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuItem2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu2']->value->menuItems; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem2']->key => $_smarty_tpl->tpl_vars['menuItem2']->value){
$_smarty_tpl->tpl_vars['menuItem2']->_loop = true;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['subPage']->value==$_smarty_tpl->tpl_vars['menuItem2']->value->menuItemName){?>
                                                    <li class="sub-left-nav active"><a href="<?php echo $_smarty_tpl->tpl_vars['menuItem2']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menuItem2']->value->title;?>
</a></li>
                                                <?php }else{ ?>
                                                    <li class="sub-left-nav"><a href="<?php echo $_smarty_tpl->tpl_vars['menuItem2']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menuItem2']->value->title;?>
</a></li>
                                                <?php }?>
                                            <?php } ?>
                                        <?php }?>
                                    <?php } ?>
                                    
                                <?php }else{ ?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->title;?>
<img class="right noborder" style="padding: 4px 0; width:10px;" src="img/right-caret.png"></a></li>
                                <?php }?>
                            <?php } ?>
                        
                        </ul>
                    </div>

                    <div class="shadow-mid-bottom">
                        <div class="row">
                            <div class="span12">
                            </div>
                        </div>
                    </div>
                <?php }?>
            <?php } ?>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['menuGroup']->value!="business"){?>
    <div class="row-fluid hidden-phone">
        <div class="span12">
            <a href="http://www.canbytel.com/foz-promo-032013/"><img src="img/1303-Webad-vert.jpg"></a>
            
            <div class="shadow-mid-bottom">
                <div class="row">
                    <div class="span12">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }else{ ?>
    <div class="row-fluid hidden-phone">
        <div class="span12">
            <img src="img/GApps-Coming-Soon-20X30-Poster.png">
            
            <div class="shadow-mid-bottom">
                <div class="row">
                    <div class="span12">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</div><?php }} ?>