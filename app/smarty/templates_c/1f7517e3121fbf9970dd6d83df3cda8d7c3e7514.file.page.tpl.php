<?php /* Smarty version Smarty-3.1.11, created on 2014-01-14 11:12:13
         compiled from "/var/www/html/marketing.canbytel.com/amp/app/smarty/templates/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66642791852d58c0d1d17d6-07474347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f7517e3121fbf9970dd6d83df3cda8d7c3e7514' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/amp/app/smarty/templates/page.tpl',
      1 => 1389649460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66642791852d58c0d1d17d6-07474347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52d58c0d2510b9_20478499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d58c0d2510b9_20478499')) {function content_52d58c0d2510b9_20478499($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['subPage']->value){?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['subPage']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['curPage']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>