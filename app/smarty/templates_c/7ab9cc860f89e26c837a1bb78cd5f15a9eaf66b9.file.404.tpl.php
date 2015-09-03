<?php /* Smarty version Smarty-3.1.11, created on 2014-01-10 11:33:00
         compiled from "/var/www/html/marketing.canbytel.com/framework/app/smarty/templates/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88453256852d02351a7ebe2-47063061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ab9cc860f89e26c837a1bb78cd5f15a9eaf66b9' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/framework/app/smarty/templates/404.tpl',
      1 => 1389381692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88453256852d02351a7ebe2-47063061',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52d02351b06eb3_24057534',
  'variables' => 
  array (
    'five_relevant' => 0,
    'rel_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d02351b06eb3_24057534')) {function content_52d02351b06eb3_24057534($_smarty_tpl) {?><div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="blue">Error 404: Page Not Found</h2>
            <p>I'm Sorry, the page you were looking for is not available.</p>
            <p>Try going back to <a class="bold" href="index.php">the home page</a> or one of these possibly related pages:</p>
            <?php  $_smarty_tpl->tpl_vars['rel_page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rel_page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['five_relevant']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rel_page']->key => $_smarty_tpl->tpl_vars['rel_page']->value){
$_smarty_tpl->tpl_vars['rel_page']->_loop = true;
?>
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['rel_page']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['rel_page']->value->title;?>
</a></p>
            <?php } ?>
        </div>
    </div>
</div>
<?php }} ?>