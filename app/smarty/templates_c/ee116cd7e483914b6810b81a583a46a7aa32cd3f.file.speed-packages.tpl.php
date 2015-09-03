<?php /* Smarty version Smarty-3.1.11, created on 2013-05-08 11:21:08
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/speed-packages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1266964250518a9794d579c3-42564787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee116cd7e483914b6810b81a583a46a7aa32cd3f' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/speed-packages.tpl',
      1 => 1368037221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1266964250518a9794d579c3-42564787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'speedPackages' => 0,
    'speedPackage' => 0,
    'featureSet' => 0,
    'feature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_518a9794dc9134_86503332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518a9794dc9134_86503332')) {function content_518a9794dc9134_86503332($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['speedPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['speedPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['speedPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['speedPackage']->key => $_smarty_tpl->tpl_vars['speedPackage']->value){
$_smarty_tpl->tpl_vars['speedPackage']->_loop = true;
?>
    <div id="<?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->serviceName;?>
" class="speed-package span12 left clearfix" style="padding: 25px 50px 25px 20px; color: #455560;">
        <h3><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->title;?>
</h3>
        <h5><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->subtitle;?>
</h5>
        <h4 class="blue"><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->priceText;?>
</h4>
        <p><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->description;?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->description2;?>
</p>
        <?php if ($_smarty_tpl->tpl_vars['speedPackage']->value->type=="foz"){?>
            <a href="internet/foz" class="right"><img style="width:200px;" src="img/foz-logo.png"></a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['speedPackage']->value->FeatureSets){?>
            <?php  $_smarty_tpl->tpl_vars['featureSet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['featureSet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['speedPackage']->value->FeatureSets; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['featureSet']->key => $_smarty_tpl->tpl_vars['featureSet']->value){
$_smarty_tpl->tpl_vars['featureSet']->_loop = true;
?>
            <h4><?php echo $_smarty_tpl->tpl_vars['featureSet']->value->title;?>
</h4>
            <ul>
            <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featureSet']->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['feature']->value['featureTitle'];?>
</li>
            <?php } ?>
            </ul>
            <?php } ?>
        <?php }?>
        <p class="disclaimer"><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->disclaimer;?>
</p>
        
        <div class="arrow-button right">
            <span class="arrow-button-left arrow-button-blue gradient"></span><a class="speed-package-back button-left button-blue gradient" href="#">Back</a>
        </div>
    </div>
<?php } ?><?php }} ?>