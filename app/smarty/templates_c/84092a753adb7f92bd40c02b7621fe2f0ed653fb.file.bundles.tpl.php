<?php /* Smarty version Smarty-3.1.11, created on 2013-04-08 13:36:59
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/bundles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1229068812515c9ce01309f0-65615362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84092a753adb7f92bd40c02b7621fe2f0ed653fb' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/bundles.tpl',
      1 => 1365453418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1229068812515c9ce01309f0-65615362',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_515c9ce02599a3_29503647',
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
<?php if ($_valid && !is_callable('content_515c9ce02599a3_29503647')) {function content_515c9ce02599a3_29503647($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
">
    <div class="container">
        <div class="row-fluid">
            <div class="span12 top-section bundles-top">
                <div class="row-fluid">
                    <div class="span6">
                        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                <div class="top-content">
                                    <img class="left" style="width:90px;" alt="bundles icon" src="img/service-icons/bundles-shadow.png">
                                    <h1 class="orange"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['page']->value->title, 'UTF-8');?>
</h1>
                                    <?php if ($_smarty_tpl->tpl_vars['page']->value->subtitle){?>
                                        <h4 class="gray"><?php echo $_smarty_tpl->tpl_vars['page']->value->subtitle;?>
</h4>
                                    <?php }?>
                                    <p style="position: relative; z-index: 1;">
                                        <?php echo $_smarty_tpl->tpl_vars['page']->value->mainContent;?>

                                    </p>
                                </div>
                            <?php }?>
                        <?php } ?>
                    </div>
                    <div class="span6">
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
                        <div class="span12">
                            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                    <img alt="telephone icon" style="width:70px;" class="right" src="img/service-icons/telephone-shadow.png">
                                    <img alt="internet icon" style="width:70px;" class="right" src="img/service-icons/internet-shadow.png">
                                    <h2 class="ltblue"><?php echo $_smarty_tpl->tpl_vars['page']->value->type1;?>
</h2>
                                    <p><?php echo $_smarty_tpl->tpl_vars['page']->value->type1desc;?>
</p>
                                    <?php  $_smarty_tpl->tpl_vars['bundle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bundle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->key => $_smarty_tpl->tpl_vars['bundle']->value){
$_smarty_tpl->tpl_vars['bundle']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['bundle']->value->page==$_smarty_tpl->tpl_vars['curPage']->value&&$_smarty_tpl->tpl_vars['bundle']->value->type=="Double Play"){?>
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
                                                                <td><a href="telephone" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['includedService']->value->title;?>
</a></td>
                                                                <td class="align-right"><del><?php echo $_smarty_tpl->tpl_vars['includedService']->value->priceText;?>
</del></td>
                                                            <?php }elseif($_smarty_tpl->tpl_vars['key']->value=="internetService"){?>
                                                                <td><a href="internet" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['includedService']->value->title;?>
</a></td>
                                                                <td class="align-right"><del><?php echo $_smarty_tpl->tpl_vars['includedService']->value->priceText;?>
</del></td>
                                                            <?php }elseif($_smarty_tpl->tpl_vars['key']->value=="TVService"){?>
                                                                <td><a href="television" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['includedService']->value->title;?>
</a></td>
                                                                <td class="align-right"><del><?php echo $_smarty_tpl->tpl_vars['includedService']->value->priceText;?>
</del></td>
                                                            <?php }elseif($_smarty_tpl->tpl_vars['key']->value=="longDistance"){?>
                                                                <td><a href="telephone/longdistance" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['includedService']->value->title;?>
</a></td>
                                                                <td class="align-right"><del><?php echo $_smarty_tpl->tpl_vars['includedService']->value->priceText;?>
</del></td>
                                                            <?php }elseif($_smarty_tpl->tpl_vars['key']->value=="voiceMail"){?>
                                                                <td><a href="telephone/voicemail" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['includedService']->value->title;?>
</a></td>
                                                                <td class="align-right"><del><?php echo $_smarty_tpl->tpl_vars['includedService']->value->priceText;?>
</del></td>
                                                            <?php }elseif($_smarty_tpl->tpl_vars['key']->value=="callingFeatures"){?>
                                                                <td><a href="telephone/callingfeatures" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
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
                                    <img alt="telephone icon" style="width:70px;" class="right" src="img/service-icons/telephone-shadow.png">
                                    <img alt="internet icon" style="width:70px;" class="right" src="img/service-icons/internet-shadow.png">
                                    <img alt="television icon" style="width:70px;" class="right" src="img/service-icons/television-shadow.png">
                                    <h2 class="ltblue"><?php echo $_smarty_tpl->tpl_vars['page']->value->type2;?>
</h2>
                                    <p><?php echo $_smarty_tpl->tpl_vars['page']->value->type2desc;?>
</p>
                                    <?php  $_smarty_tpl->tpl_vars['bundle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bundle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->key => $_smarty_tpl->tpl_vars['bundle']->value){
$_smarty_tpl->tpl_vars['bundle']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['bundle']->value->page==$_smarty_tpl->tpl_vars['curPage']->value&&$_smarty_tpl->tpl_vars['bundle']->value->type=="Triple Play"){?>
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr><th colspan="2"><h3 class="ltblue"><?php echo $_smarty_tpl->tpl_vars['bundle']->value->title;?>
</h3></th></tr>
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
                                                                <td><a href="telephone" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['includedService']->value->title;?>
</a></td>
                                                                <td class="align-right"><del><?php echo $_smarty_tpl->tpl_vars['includedService']->value->priceText;?>
</del></td>
                                                            <?php }elseif($_smarty_tpl->tpl_vars['key']->value=="internetService"){?>
                                                                <td><a href="internet" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['includedService']->value->title;?>
</a></td>
                                                                <td class="align-right"><del><?php echo $_smarty_tpl->tpl_vars['includedService']->value->priceText;?>
</del></td>
                                                            <?php }elseif($_smarty_tpl->tpl_vars['key']->value=="TVService"){?>
                                                                <td><a href="television" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['includedService']->value->title;?>
 (<?php echo $_smarty_tpl->tpl_vars['includedService']->value->totalCount;?>
 channels)</a></td>
                                                                <td class="align-right"><del><?php echo $_smarty_tpl->tpl_vars['includedService']->value->priceText;?>
</del></td>
                                                            <?php }elseif($_smarty_tpl->tpl_vars['key']->value=="longDistance"){?>
                                                                <td><a href="telephone/longdistance" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['includedService']->value->title;?>
</a></td>
                                                                <td class="align-right"><del><?php echo $_smarty_tpl->tpl_vars['includedService']->value->priceText;?>
</del></td>
                                                            <?php }elseif($_smarty_tpl->tpl_vars['key']->value=="voiceMail"){?>
                                                                <td><a href="telephone/voicemail" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['includedService']->value->title;?>
</a></td>
                                                                <td class="align-right"><del><?php echo $_smarty_tpl->tpl_vars['includedService']->value->priceText;?>
</del></td>
                                                            <?php }elseif($_smarty_tpl->tpl_vars['key']->value=="callingFeatures"){?>
                                                                <td><a href="telephone/callingfeatures" class="tooltip-right" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['includedService']->value->description;?>
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