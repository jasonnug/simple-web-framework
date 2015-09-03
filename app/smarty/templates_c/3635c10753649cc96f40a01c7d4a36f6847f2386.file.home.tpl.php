<?php /* Smarty version Smarty-3.1.11, created on 2013-05-23 09:30:04
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/support/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1637603912519e440c0b88a8-21163451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3635c10753649cc96f40a01c7d4a36f6847f2386' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/support/home.tpl',
      1 => 1369260592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1637603912519e440c0b88a8-21163451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519e440c138a39_76045673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519e440c138a39_76045673')) {function content_519e440c138a39_76045673($_smarty_tpl) {?>
<div id="content" data-page="internet">
    <div class="container">
        <div class="row-fluid">
            <div class="span12 top-section support-top">
                <div class="row-fluid">
                    <div class="span5">
                    </div>
                    <div class="span7 top-content">
                        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                <h1 class="orange"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['page']->value->title, 'UTF-8');?>
</h1>
                                <p>Welcome to Canby Telcom's online Technical Support. Some of the more common information people look for are:</p>
                                <ul>
                                    <li><a href="email/settings">Email settings</a></li>
                                    <li><a href="email/start">Getting Started with Email</a></li>
                                    <li><a href="internet">High-Speed Internet Troubleshooting</a></li>
                                </ul>
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
                <?php if ($_smarty_tpl->tpl_vars['subSubMenu']->value){?>
                    <?php echo $_smarty_tpl->getSubTemplate ("left-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    <div class="span9">
                <?php }else{ ?>
                    <div class="span12 padding">
                <?php }?>
                    <img class="right img-polaroid" src="img/help-pic.png">
                    <h3 class="blue">24/7 Friendly, Local Support</h3>
                    <p>You can chat with a Technical Support Specialist right away by clicking on the <strong>"Live Help"</strong> tab to the left.</p>
                    <p>If you have any further questions and would like to <a href="contact-us" class="bold">contact Technical Support</a> directly you can call us or send email.<br>
                        <a href="mailto:support@web-ster.com">support@web-ster.com</a><br>
                        
                    </p>
                    
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