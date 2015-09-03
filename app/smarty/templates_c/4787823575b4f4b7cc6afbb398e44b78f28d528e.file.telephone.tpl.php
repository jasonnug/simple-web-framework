<?php /* Smarty version Smarty-3.1.11, created on 2013-05-06 14:35:40
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/telephone.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2105113677514b250e91a233-97461026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4787823575b4f4b7cc6afbb398e44b78f28d528e' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/telephone.tpl',
      1 => 1367867766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2105113677514b250e91a233-97461026',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_514b250eb44478_58338682',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'telephoneServices' => 0,
    'telephoneService' => 0,
    'featureSet' => 0,
    'feature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514b250eb44478_58338682')) {function content_514b250eb44478_58338682($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
">
    <div class="container">
        <div class="row-fluid">
            <div class="span12 top-section telephone-top">
                <div class="row-fluid">
                    <div class="span5">
                    </div>
                    <div class="span7">
                        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                <div class="top-content">
                                    <h1 class="orange">TELEPHONE</h1>
                                    <p style="position: relative; z-index: 1;">
                                        <?php echo $_smarty_tpl->tpl_vars['page']->value->mainDescription;?>

                                    </p>
                                </div>
                            <?php }?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                    <h2 class="blue" style="margin-bottom: -35px;"><span class="tv-heading blue"><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</span></h2>
                                    <?php  $_smarty_tpl->tpl_vars['telephoneService'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['telephoneService']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['telephoneServices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['telephoneService']->key => $_smarty_tpl->tpl_vars['telephoneService']->value){
$_smarty_tpl->tpl_vars['telephoneService']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['telephoneService']->value->active=="true"&&$_smarty_tpl->tpl_vars['telephoneService']->value->type=="residential"){?>
                                            <hr>
                                            <br>
                                            <h3 class="ltblue"><?php echo $_smarty_tpl->tpl_vars['telephoneService']->value->title;?>
<span class="right gray"><?php echo $_smarty_tpl->tpl_vars['telephoneService']->value->priceText;?>
</span></h3>
                                            <?php if ($_smarty_tpl->tpl_vars['telephoneService']->value->description){?>
                                                <p><?php echo $_smarty_tpl->tpl_vars['telephoneService']->value->description;?>
</p>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['telephoneService']->value->FeatureSets){?>
                                                <table class="table table-striped">
                                                    <?php  $_smarty_tpl->tpl_vars['featureSet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['featureSet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['telephoneService']->value->FeatureSets; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['featureSet']->key => $_smarty_tpl->tpl_vars['featureSet']->value){
$_smarty_tpl->tpl_vars['featureSet']->_loop = true;
?>
                                                        
                                                        <tbody>
                                                            <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featureSet']->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                                                                <tr>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['feature']->value['featureTitle'];?>
</td>
                                                                    <td class="align-right"><?php echo $_smarty_tpl->tpl_vars['feature']->value['featurePrice'];?>
</td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    <?php } ?>
                                                </table>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['telephoneService']->value->disclaimer){?>
                                                <p class="disclaimer"><?php echo $_smarty_tpl->tpl_vars['telephoneService']->value->disclaimer;?>
</p>
                                            <?php }?>
                                        <?php }?>
                                    <?php } ?>
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