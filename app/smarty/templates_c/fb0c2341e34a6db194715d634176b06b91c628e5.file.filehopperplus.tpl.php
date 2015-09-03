<?php /* Smarty version Smarty-3.1.11, created on 2013-03-04 14:37:59
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3/smarty/templates/filehopperplus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20598099305135224754f965-05073194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb0c2341e34a6db194715d634176b06b91c628e5' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3/smarty/templates/filehopperplus.tpl',
      1 => 1362184657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20598099305135224754f965-05073194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'serviceAddons' => 0,
    'serviceAddon' => 0,
    'featureSet' => 0,
    'var1' => 0,
    'var2' => 0,
    'feature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51352247668d97_92465217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51352247668d97_92465217')) {function content_51352247668d97_92465217($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
">
    
    <div class="container shadow-top">
        <div class="row">
            <div class="span12">
            </div>
        </div>
    </div>

    <div class="mid-section">
        <div class="container">
            <div class="row-fluid">
                <?php echo $_smarty_tpl->getSubTemplate ("left-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div class="span9">
                    <div class="">
                        <div class="row-fluid">
                            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                    <div class="top-content">
                                        <img class="noborder" alt="<?php echo $_smarty_tpl->tpl_vars['page']->value->subtitle;?>
" src="img/filehopper-logo.png">
                                        <h5><?php echo $_smarty_tpl->tpl_vars['page']->value->subtitle;?>
</h5>
                                        <?php if ($_smarty_tpl->tpl_vars['page']->value->serviceName){?>
                                            <?php  $_smarty_tpl->tpl_vars['serviceAddon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serviceAddon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceAddons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serviceAddon']->key => $_smarty_tpl->tpl_vars['serviceAddon']->value){
$_smarty_tpl->tpl_vars['serviceAddon']->_loop = true;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName==$_smarty_tpl->tpl_vars['page']->value->serviceName){?>
                                                    <h3 class="blue"><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->priceText;?>
!</h3>
                                                    <p><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description;?>
</p>
                                                    <p><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description1;?>
</p>
                                                    <p><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description2;?>
</p>
                                                    <p><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description3;?>
</p>
                                                    <p><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description4;?>
</p>
                                                    <p><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description5;?>
</p>
                                                    <?php $_smarty_tpl->tpl_vars['var1'] = new Smarty_variable(1, null, 0);?>
                                                    <?php $_smarty_tpl->tpl_vars['var2'] = new Smarty_variable(1, null, 0);?>
                                                    <?php  $_smarty_tpl->tpl_vars['featureSet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['featureSet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceAddon']->value->FeatureSets; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['featureSet']->key => $_smarty_tpl->tpl_vars['featureSet']->value){
$_smarty_tpl->tpl_vars['featureSet']->_loop = true;
?>
                                                        <h4><?php echo $_smarty_tpl->tpl_vars['featureSet']->value->title;?>
</h4>
                                                        <div class="accordion" id="features-accordion<?php echo $_smarty_tpl->tpl_vars['var1']->value;?>
">
                                                            <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featureSet']->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                                                                <div class="accordion-group">
                                                                    <div class="accordion-heading">
                                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#features-accordion<?php echo $_smarty_tpl->tpl_vars['var1']->value;?>
" href="#collapse<?php echo $_smarty_tpl->tpl_vars['var2']->value;?>
">
                                                                            <?php echo $_smarty_tpl->tpl_vars['feature']->value['featureTitle'];?>
<?php if ($_smarty_tpl->tpl_vars['feature']->value['featurePrice']){?><span class="right">$<?php echo $_smarty_tpl->tpl_vars['feature']->value['featurePrice'];?>
</span><?php }?>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse<?php echo $_smarty_tpl->tpl_vars['var2']->value;?>
" class="accordion-body collapse">
                                                                        <div class="accordion-inner">
                                                                            <p><?php echo $_smarty_tpl->tpl_vars['feature']->value['featureDesc'];?>
</p>
                                                                            <p><?php echo $_smarty_tpl->tpl_vars['feature']->value['featureDesc2'];?>
</p>
                                                                            <p><?php echo $_smarty_tpl->tpl_vars['feature']->value['featureDesc3'];?>
</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php $_smarty_tpl->tpl_vars['var2'] = new Smarty_variable($_smarty_tpl->tpl_vars['var2']->value+1, null, 0);?>
                                                            <?php } ?>
                                                        </div>
                                                        <?php $_smarty_tpl->tpl_vars['var1'] = new Smarty_variable($_smarty_tpl->tpl_vars['var1']->value+1, null, 0);?>
                                                    <?php } ?>
                                                    <p class="disclaimer"><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->disclaimer;?>
</p>
                                                <?php }?>
                                            <?php } ?>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="shadow-bottom">
                        <div class="row">
                            <div class="span12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container shadow-bottom">
        <div class="row">
            <div class="span12">
            </div>
        </div>
    </div>
    
</div><?php }} ?>