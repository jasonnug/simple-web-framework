<?php /* Smarty version Smarty-3.1.11, created on 2013-05-06 14:36:22
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/bundles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1032146014518809ed7388c7-03786242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f65fc5d6010ea4162574f8c5d81a40cbce7308fc' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/bundles.tpl',
      1 => 1367876180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1032146014518809ed7388c7-03786242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_518809ed97c870_56090302',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'bundles' => 0,
    'bundle' => 0,
    'key' => 0,
    'includedService' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518809ed97c870_56090302')) {function content_518809ed97c870_56090302($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                        <div class="span12">
                            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                    
                                    <h1 class="orange"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['page']->value->title, 'UTF-8');?>
</h1>
                                    <?php if ($_smarty_tpl->tpl_vars['page']->value->subtitle){?>
                                        <h4 class="gray"><?php echo $_smarty_tpl->tpl_vars['page']->value->subtitle;?>
</h4>
                                    <?php }?>
                                    <p style="position: relative; z-index: 1;">
                                        <?php echo $_smarty_tpl->tpl_vars['page']->value->mainContent;?>

                                    </p>
                                    <div class="well">
                                        <?php  $_smarty_tpl->tpl_vars['bundle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bundle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->key => $_smarty_tpl->tpl_vars['bundle']->value){
$_smarty_tpl->tpl_vars['bundle']->_loop = true;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['bundle']->value->type=="business"){?>
                                                <?php if ($_smarty_tpl->tpl_vars['bundle']->value->IncludedServices['phoneService']){?>
                                                    <img alt="telephone icon" style="width:70px;" class="right" src="img/service-icons/telephone-shadow.png">
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['bundle']->value->IncludedServices['internetService']){?>
                                                    <img alt="internet icon" style="width:70px;" class="right" src="img/service-icons/internet-shadow.png">
                                                <?php }?>
                                                <h2 class="ltblue"><?php echo $_smarty_tpl->tpl_vars['bundle']->value->title;?>
 <?php echo $_smarty_tpl->tpl_vars['bundle']->value->subtitle;?>
</h2>
                                                <p><?php echo $_smarty_tpl->tpl_vars['bundle']->value->description;?>
</p>
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr><th colspan=2>Included Services:</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php  $_smarty_tpl->tpl_vars['includedService'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['includedService']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bundle']->value->IncludedServices; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['includedService']->key => $_smarty_tpl->tpl_vars['includedService']->value){
$_smarty_tpl->tpl_vars['includedService']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['includedService']->key;
?>
                                                            <tr>
                                                                <?php if ($_smarty_tpl->tpl_vars['key']->value=="phoneService"){?>
                                                                    <td><a href="business/telephone" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['includedService']->value->title;?>
</a></td>
                                                                    <td class="align-right"><del><?php echo $_smarty_tpl->tpl_vars['includedService']->value->priceText;?>
</del></td>
                                                                <?php }elseif($_smarty_tpl->tpl_vars['key']->value=="internetService"){?>
                                                                    <td><a href="business/internet" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['includedService']->value->title;?>
</a></td>
                                                                    <td class="align-right"><del><?php echo $_smarty_tpl->tpl_vars['includedService']->value->priceText;?>
</del></td>
                                                                <?php }elseif($_smarty_tpl->tpl_vars['key']->value=="TVService"){?>
                                                                    <td><a href="business/television" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['includedService']->value->title;?>
</a></td>
                                                                    <td class="align-right"><del><?php echo $_smarty_tpl->tpl_vars['includedService']->value->priceText;?>
</del></td>
                                                                <?php }elseif($_smarty_tpl->tpl_vars['key']->value=="longDistance"){?>
                                                                    <td><a href="business/telephone/longdistance" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['includedService']->value->title;?>
</a></td>
                                                                    <td class="align-right"><del><?php echo $_smarty_tpl->tpl_vars['includedService']->value->priceText;?>
</del></td>
                                                                <?php }elseif($_smarty_tpl->tpl_vars['key']->value=="voiceMail"){?>
                                                                    <td><a href="business/telephone/voicemail" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['includedService']->value->title;?>
</a></td>
                                                                    <td class="align-right"><del><?php echo $_smarty_tpl->tpl_vars['includedService']->value->priceText;?>
</del></td>
                                                                <?php }elseif($_smarty_tpl->tpl_vars['key']->value=="callingFeatures"){?>
                                                                    <td><a href="business/telephone/callingfeatures" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['includedService']->value->title;?>
</a></td>
                                                                    <td class="align-right"><del><?php echo $_smarty_tpl->tpl_vars['includedService']->value->priceText;?>
</del></td>
                                                                <?php }?>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                                <h3 class="right orange"><?php echo $_smarty_tpl->tpl_vars['bundle']->value->priceText;?>
</h3>
                                                <div class="clearfix"></div>
                                                <hr>
                                            <?php }?>
                                            
                                        <?php } ?>
                                    </div>
                                    
                                <?php }?>
                            <?php } ?>
                        </div>
                    </div>
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

    <div class="container shadow-bottom">
        <div class="row">
            <div class="span12">
            </div>
        </div>
    </div>
    
</div><?php }} ?>