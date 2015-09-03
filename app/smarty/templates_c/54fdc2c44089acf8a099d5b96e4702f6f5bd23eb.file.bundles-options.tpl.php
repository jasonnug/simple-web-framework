<?php /* Smarty version Smarty-3.1.11, created on 2013-05-06 15:08:04
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/bundles-options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3204395545188268fc0c6f6-33363072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54fdc2c44089acf8a099d5b96e4702f6f5bd23eb' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/bundles-options.tpl',
      1 => 1367878083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3204395545188268fc0c6f6-33363072',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5188268fd2c593_79356976',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'longDistanceServices' => 0,
    'longDistance' => 0,
    'serviceAddons' => 0,
    'serviceAddon' => 0,
    'speedPackages' => 0,
    'speedPackage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5188268fd2c593_79356976')) {function content_5188268fd2c593_79356976($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                                    <p><?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>
</p>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr><th colspan=2 class="bigger blue">Long Distance Options:</th></tr>
                                        </thead>
                                        <tbody>
                                            <?php  $_smarty_tpl->tpl_vars['longDistance'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['longDistance']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['longDistanceServices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['longDistance']->key => $_smarty_tpl->tpl_vars['longDistance']->value){
$_smarty_tpl->tpl_vars['longDistance']->_loop = true;
?>                                        
                                                <?php if ($_smarty_tpl->tpl_vars['longDistance']->value->bundlePrice>0&&$_smarty_tpl->tpl_vars['longDistance']->value->active=="true"){?>
                                                    <tr><td class="bold gray"><?php echo $_smarty_tpl->tpl_vars['longDistance']->value->title;?>
</td><td class="align-right bold gray">add $<?php echo $_smarty_tpl->tpl_vars['longDistance']->value->bundlePrice;?>
</td></tr>
                                                <?php }?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr><th colspan=2 class="bigger blue">Voice Mail:</th></tr>
                                        </thead>
                                        <tbody>
                                            <?php  $_smarty_tpl->tpl_vars['serviceAddon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serviceAddon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceAddons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serviceAddon']->key => $_smarty_tpl->tpl_vars['serviceAddon']->value){
$_smarty_tpl->tpl_vars['serviceAddon']->_loop = true;
?>                                        
                                                <?php if ($_smarty_tpl->tpl_vars['serviceAddon']->value->bundlePrice>0&&$_smarty_tpl->tpl_vars['serviceAddon']->value->active=="true"&&$_smarty_tpl->tpl_vars['serviceAddon']->value->type=="voice mail"){?>
                                                    <tr><td class="bold gray"><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->title;?>
</td><td class="align-right bold gray">add $<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->bundlePrice;?>
</td></tr>
                                                <?php }?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr><th colspan=2 class="bigger blue">Internet Options:</th></tr>
                                        </thead>
                                        <tbody>
                                            <?php  $_smarty_tpl->tpl_vars['speedPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['speedPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['speedPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['speedPackage']->key => $_smarty_tpl->tpl_vars['speedPackage']->value){
$_smarty_tpl->tpl_vars['speedPackage']->_loop = true;
?>                                        
                                                <?php if ($_smarty_tpl->tpl_vars['speedPackage']->value->bundlePrice>0&&$_smarty_tpl->tpl_vars['speedPackage']->value->active=="true"){?>
                                                    <tr><td class="bold gray"><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->title;?>
</td><td class="align-right bold gray">add $<?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->bundlePrice;?>
</td></tr>
                                                <?php }?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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