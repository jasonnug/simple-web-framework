<?php /* Smarty version Smarty-3.1.11, created on 2013-05-17 09:47:55
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dsl-bestdata502e.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21063427225196588c4288c1-35540904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79beb01c1bf826b97dcc34e2a1292a8565d3e566' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dsl-bestdata502e.tpl',
      1 => 1368809274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21063427225196588c4288c1-35540904',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5196588c494987_80184543',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5196588c494987_80184543')) {function content_5196588c494987_80184543($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                        <a href="img/modems/bestdata502etop.png"><img style="width:400px;" class="padding" src="img/modems/bestdata502etop.png"></a><br>
                        <a href="img/modems/bestdata502eback.png"><img style="width:400px;" class="padding" src="img/modems/bestdata502eback.png"></a>
                    </div>
                    <h3 class="blue">Best Data 502E</h3>
                    <p>This Best Data modem is used for DSL service. These are basic instructions for setting up the modem.</p>
                    <ul>
                        <li><strong>Step 1.</strong> Plug the phone cable from the phone jack into the port labeled <strong>ADSL</strong> on the back of the modem.</li>
                        <li><strong>Step 2.</strong> Plug the AC adapter from a power outlet into the modem.</li>
                        <li><strong>Step 3.</strong> The modem will take about a minute to boot up. The <strong>WAN-Link</strong> light should go solid.</li>
                        <li><strong>Step 4.</strong> Plug your computer or router into the <strong>LAN</strong> port on the modem. The <strong>LAN-100</strong> light should turn on.</li>
                    </ul>
                    <div class="alert alert-error">
                        <strong>NOTE:</strong> This modem is a discontinued model and if you are having any trouble with your internet service give <a class="" href="contact-us">Tech Support</a> a call to troubleshoot.
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