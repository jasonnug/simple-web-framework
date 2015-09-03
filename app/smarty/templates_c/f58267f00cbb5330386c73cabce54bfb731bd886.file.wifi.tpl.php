<?php /* Smarty version Smarty-3.1.11, created on 2013-05-23 09:51:35
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/wifi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1389655074519e4917e86a59-78015086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f58267f00cbb5330386c73cabce54bfb731bd886' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/wifi.tpl',
      1 => 1369260580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1389655074519e4917e86a59-78015086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'serviceAddons' => 0,
    'serviceAddon' => 0,
    'featureSet' => 0,
    'feature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519e49180279c7_00981120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519e49180279c7_00981120')) {function content_519e49180279c7_00981120($_smarty_tpl) {?><div id="content" data-page="Internet">
    
    <div class="container shadow-top">
        <div class="row">
            <div class="span12">
            </div>
        </div>
    </div>

    <div class="mid-section" style="min-height: 100%;">
        <div class="container" style="min-height: 100%;">
            <div class="row-fluid" style="min-height: 100%;">
                <?php echo $_smarty_tpl->getSubTemplate ("left-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div class="span9" style="min-height: 100%;">
                    <div class="" style="min-height: 100%;">
                        <div class="row-fluid" style="min-height: 100%;">
                            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                    <div class="main-content">
                                        <img class="right noborder" src="img/wifi_lg.png">
                                        <h1 class="orange"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['page']->value->title, 'UTF-8');?>
</h1>
                                        <h5><?php echo $_smarty_tpl->tpl_vars['page']->value->subtitle;?>
</h5>
                                        <?php if ($_smarty_tpl->tpl_vars['page']->value->serviceName){?>
                                            <?php  $_smarty_tpl->tpl_vars['serviceAddon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serviceAddon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceAddons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serviceAddon']->key => $_smarty_tpl->tpl_vars['serviceAddon']->value){
$_smarty_tpl->tpl_vars['serviceAddon']->_loop = true;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName==$_smarty_tpl->tpl_vars['page']->value->serviceName){?>
                                                    <h3 class="blue">only <?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->priceText;?>
!</h3>
                                                    <p><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description;?>
</p>
                                                    <p><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description2;?>
</p>
                                                    <p><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description3;?>
</p>
                                                    <p><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description4;?>
</p>
                                                    <p><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description5;?>
</p>
                                                    <?php  $_smarty_tpl->tpl_vars['featureSet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['featureSet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceAddon']->value->FeatureSets; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['featureSet']->key => $_smarty_tpl->tpl_vars['featureSet']->value){
$_smarty_tpl->tpl_vars['featureSet']->_loop = true;
?>
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr><th><?php echo $_smarty_tpl->tpl_vars['featureSet']->value->title;?>
</th></tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featureSet']->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                                                                    <tr>
                                                                        <td><i class="icon-cog"></i> <?php echo $_smarty_tpl->tpl_vars['feature']->value['featureTitle'];?>
</td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    <?php } ?>
                                                <?php }?>
                                            <?php } ?>
                                            
                                        <?php }?>
                                    </div>
                                <?php }?>
                            <?php } ?>
                            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                    <?php if ($_smarty_tpl->tpl_vars['page']->value->serviceName){?>
                                        <?php  $_smarty_tpl->tpl_vars['serviceAddon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serviceAddon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceAddons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serviceAddon']->key => $_smarty_tpl->tpl_vars['serviceAddon']->value){
$_smarty_tpl->tpl_vars['serviceAddon']->_loop = true;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName==$_smarty_tpl->tpl_vars['page']->value->serviceName){?>
                                                
                                            <?php }?>
                                        <?php } ?>
                                    <?php }?>
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