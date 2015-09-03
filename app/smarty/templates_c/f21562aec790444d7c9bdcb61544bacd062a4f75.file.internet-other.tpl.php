<?php /* Smarty version Smarty-3.1.11, created on 2013-05-06 11:52:47
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/internet-other.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11343802785187fbff0b06f7-39318748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f21562aec790444d7c9bdcb61544bacd062a4f75' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/internet-other.tpl',
      1 => 1367866334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11343802785187fbff0b06f7-39318748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'serviceAddons' => 0,
    'serviceAddon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5187fbff198dd6_30465373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5187fbff198dd6_30465373')) {function content_5187fbff198dd6_30465373($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
" class="biz">
    <div class="container shadow-top">
        <div class="row">
            <div class="span12">
            </div>
        </div>
    </div>
    <div class="mid-section">
        <div class="container">
            <div class="row-fluid internet-content">
                <?php echo $_smarty_tpl->getSubTemplate ("left-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div class="span9">
                    <div class="row-fluid main-content">
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
                                    <?php if ($_smarty_tpl->tpl_vars['serviceAddon']->value->type=="internet other"){?>
                                        <div class="well">
                                            <h3 class="gray"><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName;?>
</h3>
                                            <h4 class="blue"><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->priceText;?>
</h4>
                                            <p><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description;?>
</p>
                                        </div>
                                    <?php }?>
                                <?php } ?>
                            <?php }?>
                        <?php } ?>
                        
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
        <div class="row-fluid">
            <div class="span12">
            </div>
        </div>
    </div>
    
</div><?php }} ?>