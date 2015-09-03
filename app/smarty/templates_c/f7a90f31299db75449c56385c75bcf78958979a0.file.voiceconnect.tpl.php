<?php /* Smarty version Smarty-3.1.11, created on 2013-05-13 09:01:42
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/voiceconnect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2124488173518ab65003cc28-96885757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7a90f31299db75449c56385c75bcf78958979a0' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/voiceconnect.tpl',
      1 => 1368459532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2124488173518ab65003cc28-96885757',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_518ab6501378c4_78285205',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'serviceAddons' => 0,
    'serviceAddon' => 0,
    'featureSet' => 0,
    'feature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518ab6501378c4_78285205')) {function content_518ab6501378c4_78285205($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
" class="biz">
    <div class="container">
        <div class="row-fluid">
            <div class="span12 top-section vc-top">
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
                                    <h1 class="orange">VOICE CONNECT</h1>
                                    <h4 class="gray"><?php echo $_smarty_tpl->tpl_vars['page']->value->subtitle;?>
</h4>
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
                    <div class="packages-heading"><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</div>
                    <div class="row-fluid">
                        <div class="span12 main-content speed-packages">
                            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                    
                                    
                                    <div class="padding" style="padding: 20px 10px;">
                                        <img class="right padding" src="img/lady-with-a-headset.png">
                                        <?php  $_smarty_tpl->tpl_vars['serviceAddon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serviceAddon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceAddons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serviceAddon']->key => $_smarty_tpl->tpl_vars['serviceAddon']->value){
$_smarty_tpl->tpl_vars['serviceAddon']->_loop = true;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName==$_smarty_tpl->tpl_vars['page']->value->serviceName){?>
                                                <?php  $_smarty_tpl->tpl_vars['featureSet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['featureSet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceAddon']->value->FeatureSets; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['featureSet']->key => $_smarty_tpl->tpl_vars['featureSet']->value){
$_smarty_tpl->tpl_vars['featureSet']->_loop = true;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['featureSet']->value->type=="component"){?>
                                                        <h4 class="gray"><?php echo $_smarty_tpl->tpl_vars['featureSet']->value->title;?>
</h5>
                                                        <?php if ($_smarty_tpl->tpl_vars['featureSet']->value->description){?>
                                                            <?php echo $_smarty_tpl->tpl_vars['featureSet']->value->description;?>

                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['featureSet']->value->features){?>
                                                            <ul>
                                                                <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featureSet']->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                                                                    <li><?php echo $_smarty_tpl->tpl_vars['feature']->value["featureTitle"];?>
</li>
                                                                <?php } ?>
                                                            </ul>
                                                        <?php }?>
                                                    
                                                    <?php }?>
                                                <?php } ?>
                                                
                                            <?php }?>
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