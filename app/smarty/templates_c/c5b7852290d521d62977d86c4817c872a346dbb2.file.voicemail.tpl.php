<?php /* Smarty version Smarty-3.1.11, created on 2013-05-01 09:18:44
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/voicemail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1906905068515b16db0a58a8-61626801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5b7852290d521d62977d86c4817c872a346dbb2' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/voicemail.tpl',
      1 => 1367425123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1906905068515b16db0a58a8-61626801',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_515b16db16b1f4_68657318',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'serviceAddons' => 0,
    'pageService' => 0,
    'serviceAddon' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515b16db16b1f4_68657318')) {function content_515b16db16b1f4_68657318($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                        <div class="span12 main-content">
                            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                    <h1 class="orange"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['page']->value->title, 'UTF-8');?>
</h1>
                                    <?php  $_smarty_tpl->tpl_vars['serviceAddon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serviceAddon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceAddons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serviceAddon']->key => $_smarty_tpl->tpl_vars['serviceAddon']->value){
$_smarty_tpl->tpl_vars['serviceAddon']->_loop = true;
?>
                                        <?php  $_smarty_tpl->tpl_vars['pageService'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pageService']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value->services; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pageService']->key => $_smarty_tpl->tpl_vars['pageService']->value){
$_smarty_tpl->tpl_vars['pageService']->_loop = true;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['pageService']->value==$_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName){?>
                                                <hr>
                                                <h4 class="ltblue"><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->title;?>
<span class="right gray"><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->priceText;?>
</span></h4>
                                                <?php if ($_smarty_tpl->tpl_vars['serviceAddon']->value->subtitle){?>
                                                    <h5 class="gray"><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->subtitle;?>
</h5>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['serviceAddon']->value->description){?>
                                                    <p><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description;?>
</p>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['serviceAddon']->value->disclaimer){?>
                                                    <p class="disclaimer"><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->disclaimer;?>
</p>
                                                <?php }?>
                                            <?php }?>
                                        <?php } ?>
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