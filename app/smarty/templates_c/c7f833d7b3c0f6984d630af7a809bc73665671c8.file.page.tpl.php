<?php /* Smarty version Smarty-3.1.11, created on 2014-01-10 10:59:16
         compiled from "/var/www/html/marketing.canbytel.com/framework/app/smarty/templates/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101671920052ced457e0d4a3-32553421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7f833d7b3c0f6984d630af7a809bc73665671c8' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/framework/app/smarty/templates/page.tpl',
      1 => 1389379276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101671920052ced457e0d4a3-32553421',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52ced457e78804_31631782',
  'variables' => 
  array (
    'subPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ced457e78804_31631782')) {function content_52ced457e78804_31631782($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['subPage']->value){?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['subPage']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['curPage']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>