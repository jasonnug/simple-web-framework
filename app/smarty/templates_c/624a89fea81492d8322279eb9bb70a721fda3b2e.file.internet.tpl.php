<?php /* Smarty version Smarty-3.1.11, created on 2013-05-23 09:25:08
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/biz/internet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:272475855519e42e4876531-52614735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '624a89fea81492d8322279eb9bb70a721fda3b2e' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/biz/internet.tpl',
      1 => 1369260591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272475855519e42e4876531-52614735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'speedPackages' => 0,
    'speedPackage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519e42e4963865_85690336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519e42e4963865_85690336')) {function content_519e42e4963865_85690336($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                            <h1 class="orange">HIGH-SPEED INTERNET</h1>
                            <p style="position: relative; z-index: 1;">
                                <?php echo $_smarty_tpl->tpl_vars['page']->value->mainContent;?>

                            </p>
                            <div class="speed-choser">
                                <div class="row-fluid">
                                    
                                    <div class="span12 speed-packages clearfix">
                                        <div class="packages-heading">HIGH-SPEED INTERNET PACKAGES:</div>
                                        <div class="row-fluid">
                                            <div id="speeds-list" class="span12 packages-list clearfix left">
                                                <table class="table left clearfix">
                                                    <?php  $_smarty_tpl->tpl_vars['speedPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['speedPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['speedPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['speedPackage']->key => $_smarty_tpl->tpl_vars['speedPackage']->value){
$_smarty_tpl->tpl_vars['speedPackage']->_loop = true;
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['speedPackage']->value->active=="true"){?>
                                                            <tr class="<?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->class;?>
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
                        <?php }?>
                    <?php } ?>
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