<?php /* Smarty version Smarty-3.1.11, created on 2013-05-23 09:49:29
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/internet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:883416169519d448eb5d322-13173139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9917cd55b5841766f6c24a3ac56c490938a5ad19' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/internet.tpl',
      1 => 1369327764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '883416169519d448eb5d322-13173139',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519d448ec11b87_89301911',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'internetUses' => 0,
    'internetUse' => 0,
    'speedPackages' => 0,
    'speedPackage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519d448ec11b87_89301911')) {function content_519d448ec11b87_89301911($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
">
    <div class="container">
        <div class="row-fluid">
            <div class="span12 top-section internet-top">
                <div class="row-fluid">
                    <div class="span4">
                    </div>
                    <div class="span8">
                        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                <div class="top-content">
                                    <h1 class="orange">HIGH-SPEED INTERNET</h1>
                                    <p style="position: relative; z-index: 1;">
                                        <?php echo $_smarty_tpl->tpl_vars['page']->value->mainContent;?>

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
                    <div class="speed-choser">
                        <div class="row-fluid">
                            <div class="span3 internet-uses">
                                <br>
                                <span class="head3 orange">I use my Internet to:</span><br><br>
                                <?php  $_smarty_tpl->tpl_vars['internetUse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['internetUse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['internetUses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['internetUse']->key => $_smarty_tpl->tpl_vars['internetUse']->value){
$_smarty_tpl->tpl_vars['internetUse']->_loop = true;
?>
                                    <label class="checkbox internet-use-label"><input class="use-checkbox internet-use-checkbox-<?php echo $_smarty_tpl->tpl_vars['internetUse']->value->class;?>
" type="checkbox" name="internet-use" value=<?php echo $_smarty_tpl->tpl_vars['internetUse']->value->class;?>
> <?php echo $_smarty_tpl->tpl_vars['internetUse']->value->title;?>
</label>
                                <?php } ?>
                            </div>
                            <div class="span9 speed-packages clearfix">
                                <div class="packages-heading">INTERNET PACKAGES FOR YOU:</div>
                                <div class="row-fluid">
                                    <div id="speeds-list" class="span12 packages-list clearfix left">
                                        <table class="table left clearfix">
                                            <?php  $_smarty_tpl->tpl_vars['speedPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['speedPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['speedPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['speedPackage']->key => $_smarty_tpl->tpl_vars['speedPackage']->value){
$_smarty_tpl->tpl_vars['speedPackage']->_loop = true;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['speedPackage']->value->active=="true"){?>
                                                    <tr class="muted <?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->class;?>
-package"><td><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->title;?>
</td><td class="blue"><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->priceText;?>
</td>
                                                        <td>
                                                        <div class="arrow-button">
                                                            <a class="internet-learn-link button-right button-orange" href="#interent/<?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->packageName;?>
" data-speedlink="<?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->serviceName;?>
">Learn More</a><span class="arrow-button-right arrow-button-orange"></span>
                                                        </div>
                                                        </td>
                                                    </tr>
                                                <?php }?>
                                            <?php } ?>
                                        </table>
                                    </div>
                                    <?php echo $_smarty_tpl->getSubTemplate ("speed-packages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                                </div>
                            </div>
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