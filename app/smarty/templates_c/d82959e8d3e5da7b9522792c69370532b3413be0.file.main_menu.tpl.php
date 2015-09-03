<?php /* Smarty version Smarty-3.1.11, created on 2014-01-10 11:08:20
         compiled from "/var/www/html/marketing.canbytel.com/framework/app/smarty/templates/main_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16449459052ced457b47af9-71798710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd82959e8d3e5da7b9522792c69370532b3413be0' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/framework/app/smarty/templates/main_menu.tpl',
      1 => 1389380897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16449459052ced457b47af9-71798710',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52ced457d8e0a6_29064481',
  'variables' => 
  array (
    'menus' => 0,
    'menu' => 0,
    'menuItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ced457d8e0a6_29064481')) {function content_52ced457d8e0a6_29064481($_smarty_tpl) {?><nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">SWF</a>
    </div>

    <div class="collapse navbar-collapse" id="main-menu-collapse">
        <ul class="nav navbar-nav">
            <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                <?php if (count($_smarty_tpl->tpl_vars['menu']->value->menuItems)>0){?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['menu']->value->title;?>
 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php if ($_smarty_tpl->tpl_vars['menu']->value->Page){?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value->Page->url;?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value->Page->title;?>
</a>
                            <?php }?>
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
                    </li>
                <?php }?>
            <?php } ?>
        </ul>
    </div>
</nav><?php }} ?>