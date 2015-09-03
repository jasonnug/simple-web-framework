<?php /* Smarty version Smarty-3.1.11, created on 2013-05-06 14:46:59
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/callingfeatures.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17995867518823415e4334-84010614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aad1de09d19e31d2a7214144767bae7ba5e93d96' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/callingfeatures.tpl',
      1 => 1367876818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17995867518823415e4334-84010614',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5188234172c965_08171472',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'bundles' => 0,
    'bundle' => 0,
    'callingFeatures' => 0,
    'callingFeature' => 0,
    'ind' => 0,
    'featureInstruction' => 0,
    'step' => 0,
    'subFeature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5188234172c965_08171472')) {function content_5188234172c965_08171472($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
" class="biz">
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
                                    <?php  $_smarty_tpl->tpl_vars['bundle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bundle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->key => $_smarty_tpl->tpl_vars['bundle']->value){
$_smarty_tpl->tpl_vars['bundle']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['bundle']->value->type=="telephone"&&$_smarty_tpl->tpl_vars['bundle']->value->active=="true"){?>
                                            <hr>
                                            <h4 class="ltblue"><?php echo $_smarty_tpl->tpl_vars['bundle']->value->title;?>
<span class="right gray"><?php echo $_smarty_tpl->tpl_vars['bundle']->value->priceText;?>
</span></h4>
                                            <p><?php echo $_smarty_tpl->tpl_vars['bundle']->value->description;?>
</p>
                                        <?php }?>
                                    <?php } ?>
                                    <br>
                                    <div class="features-wrapper">
                                        <h4 class="padding gray">Ala Carte Features: </h4>
                                        <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable(1, null, 0);?>
                                        <?php  $_smarty_tpl->tpl_vars['callingFeature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['callingFeature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['callingFeatures']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['callingFeature']->key => $_smarty_tpl->tpl_vars['callingFeature']->value){
$_smarty_tpl->tpl_vars['callingFeature']->_loop = true;
?>
                                            <div class="feature-wrapper">
                                                <div class="feature-heading">
                                                    <span class="feature-name"><?php echo $_smarty_tpl->tpl_vars['callingFeature']->value->featureName;?>
</span>
                                                    <?php if ($_smarty_tpl->tpl_vars['callingFeature']->value->featurePrice){?>
                                                        <span class="right feature-price"><?php echo $_smarty_tpl->tpl_vars['callingFeature']->value->featurePrice;?>
</span>
                                                    <?php }elseif($_smarty_tpl->tpl_vars['callingFeature']->value->subFeatures||$_smarty_tpl->tpl_vars['callingFeature']->value->description||$_smarty_tpl->tpl_vars['callingFeature']->value->featureInstructions){?>
                                                        <span class="right feature-price"><a data-info="feature-<?php echo $_smarty_tpl->tpl_vars['ind']->value;?>
" class="feature-link" href="#">more info</a></span>
                                                    <?php }?>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['callingFeature']->value->subFeatures||$_smarty_tpl->tpl_vars['callingFeature']->value->description||$_smarty_tpl->tpl_vars['callingFeature']->value->featureInstructions){?>
                                                    <div id="feature-<?php echo $_smarty_tpl->tpl_vars['ind']->value;?>
" class="feature-info">
                                                        <div id="feature-<?php echo $_smarty_tpl->tpl_vars['ind']->value;?>
-inner" class="feature-info-inner">
                                                            <?php if ($_smarty_tpl->tpl_vars['callingFeature']->value->description){?>
                                                                <p><?php echo $_smarty_tpl->tpl_vars['callingFeature']->value->description;?>
</p>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['callingFeature']->value->featureInstructions){?>
                                                                <?php  $_smarty_tpl->tpl_vars['featureInstruction'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['featureInstruction']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['callingFeature']->value->featureInstructions; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['featureInstruction']->key => $_smarty_tpl->tpl_vars['featureInstruction']->value){
$_smarty_tpl->tpl_vars['featureInstruction']->_loop = true;
?>
                                                                    <h5><?php echo $_smarty_tpl->tpl_vars['featureInstruction']->value['instructionTitle'];?>
</h5>
                                                                    <ul>
                                                                        <?php  $_smarty_tpl->tpl_vars['step'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['step']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featureInstruction']->value['instructionSteps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['step']->key => $_smarty_tpl->tpl_vars['step']->value){
$_smarty_tpl->tpl_vars['step']->_loop = true;
?>
                                                                            <li><?php echo $_smarty_tpl->tpl_vars['step']->value;?>
</li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                <?php } ?>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['callingFeature']->value->subFeatures){?>
                                                                <table class="table table-condensed table-striped">
                                                                    <?php  $_smarty_tpl->tpl_vars['subFeature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subFeature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['callingFeature']->value->subFeatures; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subFeature']->key => $_smarty_tpl->tpl_vars['subFeature']->value){
$_smarty_tpl->tpl_vars['subFeature']->_loop = true;
?>
                                                                        <tr>
                                                                            <td><?php echo $_smarty_tpl->tpl_vars['subFeature']->value['featureTitle'];?>
</td>
                                                                            <td class="align-right"><?php echo $_smarty_tpl->tpl_vars['subFeature']->value['featurePrice'];?>
</td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </table>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['callingFeature']->value->disclaimer){?>
                                                                <p class="disclaimer"><?php echo $_smarty_tpl->tpl_vars['callingFeature']->value->disclaimer;?>
</p>
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            </div>
                                            <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                        <?php } ?>
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