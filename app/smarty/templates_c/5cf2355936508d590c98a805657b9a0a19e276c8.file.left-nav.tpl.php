<?php /* Smarty version Smarty-3.1.11, created on 2013-03-04 11:13:45
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3/smarty/templates/left-nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8457582405134cabfe03021-13206086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cf2355936508d590c98a805657b9a0a19e276c8' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3/smarty/templates/left-nav.tpl',
      1 => 1362424425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8457582405134cabfe03021-13206086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5134cabfe3b8b3_00619825',
  'variables' => 
  array (
    'menus' => 0,
    'menu' => 0,
    'subSubMenu' => 0,
    'curPage' => 0,
    'menuItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5134cabfe3b8b3_00619825')) {function content_5134cabfe3b8b3_00619825($_smarty_tpl) {?><div class="span3">
    <div class="row-fluid">
        <div class="span12">
            <div class="left-nav">
                <ul class="nav nav-list">
                    <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['menu']->value->menuName==$_smarty_tpl->tpl_vars['subSubMenu']->value){?>
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
                                <?php }else{ ?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->title;?>
<img class="right noborder" style="padding: 4px 0; width:10px;" src="img/right-caret.png"></a></li>
                                <?php }?>
                            <?php } ?>
                        <?php }?>
                    <?php } ?>
                </ul>
            </div>
            <div class="shadow-bottom">
                <div class="row">
                    <div class="span12">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="left-nav-ad">
                <h3>Order Service Today!</h3>
                <hr>
                <h4>503.266.8111</h4>
            </div>
        </div>
    </div>
</div><?php }} ?>