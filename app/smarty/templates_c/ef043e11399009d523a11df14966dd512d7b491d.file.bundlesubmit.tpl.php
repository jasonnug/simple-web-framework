<?php /* Smarty version Smarty-3.1.11, created on 2013-05-13 09:36:11
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/bundlesubmit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:444245848517aa9b03973b3-61132286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef043e11399009d523a11df14966dd512d7b491d' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/bundlesubmit.tpl',
      1 => 1368462968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '444245848517aa9b03973b3-61132286',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_517aa9b08f8a64_00987833',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517aa9b08f8a64_00987833')) {function content_517aa9b08f8a64_00987833($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <div class="row-fluid">
                        <div class="span12">
                            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                    <div class="main-content">
                                        <img class="right" style="width:120px;" alt="bundles icon" src="img/service-icons/bundles-shadow.png">
                                        <h1 class="orange"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['page']->value->title, 'UTF-8');?>
</h1>
                                        <?php if ($_smarty_tpl->tpl_vars['page']->value->subtitle){?>
                                            <h4 class="gray"><?php echo $_smarty_tpl->tpl_vars['page']->value->subtitle;?>
</h4>
                                        <?php }?>
                                        <p style="position: relative; z-index: 1;">
                                            <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

                                        </p>
                                        <p><a href="contact"><?php echo $_smarty_tpl->tpl_vars['page']->value->description1;?>
</a></p>
                                        <p>Office hours are 8am to 5:30pm, Monday through Friday. 503.266.8111.</p>
                                        
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