<?php /* Smarty version Smarty-3.1.11, created on 2013-05-17 10:41:31
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dsl-bestdata602.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28611059851966bb4452c33-30877740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a1014b8d4b6dd26a2982a03e1b1488b77507613' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dsl-bestdata602.tpl',
      1 => 1368812490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28611059851966bb4452c33-30877740',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51966bb44c02c5_98616238',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51966bb44c02c5_98616238')) {function content_51966bb44c02c5_98616238($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                <?php if ($_smarty_tpl->tpl_vars['subSubMenu']->value){?>
                    <?php echo $_smarty_tpl->getSubTemplate ("left-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    <div class="span9">
                <?php }else{ ?>
                    <div class="span12 padding">
                <?php }?>
                    <div class="right">
                        <a href="img/modems/bestdata602-top.png"><img style="width:300px;" class="padding" src="img/modems/bestdata602-top.png" /></a><br>
                        <a href="img/modems/bestdata602back.png"><img style="width:300px;" class="padding" src="img/modems/bestdata602back.png" /></a>
                    </div>
                    <h3 class="blue">Best Data 602</h3>
                    <p>This Best Data modem is used for DSL service. These are basic instructions for setting up the modem.</p>
                    <ul>
                        <li><strong>Step 1.</strong> Plug the phone cable from the phone jack into the port labeled <strong>DSL</strong> on the back of the modem.</li>
                        <li><strong>Step 2.</strong> Plug the AC adapter from a power outlet into the modem.</li>
                        <li><strong>Step 3.</strong> The modem will take about a minute to boot up. The <strong>DSL</strong> light should go solid.</li>
                        <li><strong>Step 4.</strong> Plug your computer or router into the <strong>ETHERNET</strong> port on the modem. The <strong>ETHERNET</strong> light should turn on.</li>
                    </ul>
                    <div class="alert alert-error">
                        <strong>NOTE:</strong> This is a discontinued modem and if you are having any trouble with your TV or internet service please give <a href="contact-us">Tech Support</a> a call to troubleshoot.
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