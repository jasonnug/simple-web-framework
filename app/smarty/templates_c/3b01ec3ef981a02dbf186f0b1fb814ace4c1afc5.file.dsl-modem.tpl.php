<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 14:11:59
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dsl-modem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72125509051940713053922-87054797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b01ec3ef981a02dbf186f0b1fb814ace4c1afc5' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dsl-modem.tpl',
      1 => 1369162296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72125509051940713053922-87054797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519407130dfc71_39871006',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519407130dfc71_39871006')) {function content_519407130dfc71_39871006($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
">
    <?php echo $_smarty_tpl->getSubTemplate ("support-top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                    <a href="img/modem-hookup.png"><img class="right" style="width: 40%;" src="img/modem-hookup.png" /></a>

                    <h3 class="blue">DSL Modem</h3>
	
                    <p>With a DSL Internet connection you will be provided a modem. Additionally you will need a regular telephone cable, an Ethernet cable and a telephone jack where the DSL signal is available. General steps for connecting a modem are:</p>
                    <ul>
                        <li><strong>Step 1.</strong> Connect a regular telephone cable from the telephone jack to the modem. Usually the modem's port will say "DSL" for this connection.</li>
                        <li><strong>Step 2.</strong> Plug the modem's power cable from a power outlet to the modem. The modem will begin it's boot up process. Most modems will have a <strong>DSL</strong> (or DSL-link) light. That light should blink as the modem is trying to connect and then go solid.
                        <li><strong>Step 3.</strong> Connect an Ethernet cord from the modem to your computer or router. Your computer or router should automatically establish the connection and get online.</li></li>
                        
                    </ul>
                    <h4 class="gray">More Information and Tutorials:</h4>
                    <p><a href="support/internet/canbytel-modems.php">Canby Telcom DSL modem setup and troubleshooting.</a></p>
                    <p><a href="support/internet/wifi">Canby Telcom's Managed WiFi router setup and troubleshooting.</a></p>
                    <p><a href="support/internet/computer.php">Connecting a computer to your network.</a></p>
                    <p><a href="support/internet/router.php">General router setup</a>.</p>
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