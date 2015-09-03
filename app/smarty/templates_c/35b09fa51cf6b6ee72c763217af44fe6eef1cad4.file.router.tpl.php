<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 14:16:28
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/router.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2057723857519a99e9353c37-53310102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35b09fa51cf6b6ee72c763217af44fe6eef1cad4' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/router.tpl',
      1 => 1369170987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2057723857519a99e9353c37-53310102',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519a99e93fe4d3_14840223',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519a99e93fe4d3_14840223')) {function content_519a99e93fe4d3_14840223($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <a href="img/router-connections.png"><img class="right" src="img/router-connections.png" alt="router connections"></a>

                    <h3 class="blue">Router Setup</h3>

                    <p>A router allows multiple computers to share one Internet connection, either with Ethernet cables or wireless. Here are the basic steps for hooking up a generic router on a DSL connection:<br></p>
                    <ul>
                        <li><strong>Step 1.</strong> Connect a regular telephone cord from a phone jack to your modem (usually the "DSL" port).  Also make sure the power cord is connected to the modem.
                        <li><strong>Step 2.</strong> Connect an Ethernet cord from your modem to your router. The router will usually have a specified port for the modem labeled "modem" or "Internet". For better help connecting your 3rd party router consult the manufacturer's documentation. There will also be a power cord required for the router.</li>
                        <li><strong>Step 3.</strong> Now you can connect any computers into the remaining Ethernet ports on the router as well as connect devices to your wireless network. Your router may have additional configuration required and it's best to use the support documentation provided by the manufacturer.</li>
                    </ul>
                    <div class="alert alert-info">
                        <strong>Note:</strong> If you have <a href="internet/wifi">Canby Telcom's Managed WiFi service</a> you will have been provided a router/modem all-in-one device. <br>
                        <a href="support/wifi/setup.php"><strong>Click here for more detailed support information on Canby Telcom's WiFi devices.</strong></a>
                    </div>
                    <h4 class="grey">More Information:</h4>
                    <p><a href="support/internet/dsl-modem.php">Setting up a DSL modem.</a></p>
                    <p><a href="support/wifi/wifi-win7-connect.php">Connecting a wireless computer to your network.</a></p>
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