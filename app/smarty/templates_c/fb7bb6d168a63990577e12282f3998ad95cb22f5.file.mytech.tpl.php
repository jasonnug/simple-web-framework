<?php /* Smarty version Smarty-3.1.11, created on 2013-03-15 11:10:22
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/mytech.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9281487925142372c6e7c44-35995491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb7bb6d168a63990577e12282f3998ad95cb22f5' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/mytech.tpl',
      1 => 1363371019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9281487925142372c6e7c44-35995491',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5142372c8b8da5_40510051',
  'variables' => 
  array (
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'serviceAddons' => 0,
    'serviceAddon' => 0,
    'featureSet' => 0,
    'var1' => 0,
    'var2' => 0,
    'feature' => 0,
    'page2' => 0,
    'service' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5142372c8b8da5_40510051')) {function content_5142372c8b8da5_40510051($_smarty_tpl) {?><div id="content" data-page="Internet">
    
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
                    <div class="row-fluid">
                        <div class="span12 main-content">
                            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                    <h1 class="orange"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['page']->value->title, 'UTF-8');?>
</h1>
                                    <h5><?php echo $_smarty_tpl->tpl_vars['page']->value->subtitle;?>
</h5>
                                    <?php if ($_smarty_tpl->tpl_vars['page']->value->description){?>
                                        <p><?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>
</p>
                                    <?php }?>
                                    <?php  $_smarty_tpl->tpl_vars['serviceAddon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serviceAddon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceAddons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serviceAddon']->key => $_smarty_tpl->tpl_vars['serviceAddon']->value){
$_smarty_tpl->tpl_vars['serviceAddon']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['page']->value->serviceName&&$_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName==$_smarty_tpl->tpl_vars['page']->value->serviceName){?>
                                            <h3 class="blue">only <?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->priceText;?>
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
                                            <?php  $_smarty_tpl->tpl_vars['featureSet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['featureSet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceAddon']->value->FeatureSets; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['featureSet']->key => $_smarty_tpl->tpl_vars['featureSet']->value){
$_smarty_tpl->tpl_vars['featureSet']->_loop = true;
?>
                                                <h4><?php echo $_smarty_tpl->tpl_vars['featureSet']->value->title;?>
</h4>
                                                <div class="accordion" id="features-accordion<?php echo $_smarty_tpl->tpl_vars['var1']->value;?>
">
                                                    <?php $_smarty_tpl->tpl_vars['var2'] = new Smarty_variable(1, null, 0);?>
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
                                    <?php if ($_smarty_tpl->tpl_vars['page']->value->services){?>
                                        <?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['service']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value->services; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value){
$_smarty_tpl->tpl_vars['service']->_loop = true;
?>
                                            <?php  $_smarty_tpl->tpl_vars['page2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page2']->key => $_smarty_tpl->tpl_vars['page2']->value){
$_smarty_tpl->tpl_vars['page2']->_loop = true;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['page2']->value->serviceName==$_smarty_tpl->tpl_vars['service']->value){?>
                                                    <div class="well clearfix">
                                                        <span class="head3 green"><?php echo $_smarty_tpl->tpl_vars['page2']->value->title;?>
</span>
                                                        <p><?php echo $_smarty_tpl->tpl_vars['page2']->value->description;?>
</p>
                                                        <div class="arrow-button right padding">
                                                            <a class="button-right button-orange" href="<?php echo $_smarty_tpl->tpl_vars['page2']->value->url;?>
">Learn More</a><span class="arrow-button-right arrow-button-orange"></span>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            <?php } ?>
                                            
                                        <?php } ?>
                                    <?php }?>
                                <?php }?>
                            <?php } ?>
                        
                            <div class="shadow-bottom">
                                <div class="row-fluid">
                                    <div class="span12">
                                    </div>
                                </div>
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