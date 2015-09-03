<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 09:18:08
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/fiber-clearaccess-wifi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1564590869519653072fbaa0-95597411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d42420428aae2e9a6d7351fa972ebe4e6edefe0' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/fiber-clearaccess-wifi.tpl',
      1 => 1369153087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1564590869519653072fbaa0-95597411',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519653073c2243_03350301',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519653073c2243_03350301')) {function content_519653073c2243_03350301($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                        <a href="img/modems/clearaccessag10w-front.png"><img style="width:400px;" class="padding" src="img/modems/clearaccessag10w-front.png" /></a><br>
                        <a href="img/modems/clearaccessag10w-back.png"><img style="width:400px;" class="padding" src="img/modems/clearaccessag10w-back.png" /></a>
                    </div>
                    <h3 class="blue">Clear Access AG10W WiFi Modem for a Fiber Connection</h3>
                    <p>These are basic instructions for setting up the Clear Access Modem using Canby Telcom's Managed WiFi service on a Fiber connection.</p>
                    <ul>
                        <li><strong>Step 1.</strong> Plug the ethernet cable from the designated wall jack into the <strong>LAN 1</strong> or <strong>WAN</strong> port on the Clear Access.</li>
                        <li><strong>Step 2.</strong> Plug the AC adapter from a power outlet into the Clear Access.</li>
                        <li><strong>Step 3.</strong> The router will take about a minute to boot up. The WLAN light should be on.</li>
                        <li><strong>Step 4.</strong> Plug your computer into the <strong>LAN 2</strong> port on the Clear Access.</li>
                        <li>Now you should just be able to get online with your computer. If your still having trouble <a href="support/internet/lan-settings.php"><strong>check your LAN settings</strong></a> and try rebooting your PC.</li>
                        <li><strong>Step 5.</strong> Connect any wireless computers/devices to the wireless network using the <a href="support/internet/ssid-password.php"><strong>SSID and password</strong></a> provided with your service.</li>
                    </ul>
                    <h4 class="gray">More Information: </h4>
                    <p><a href="support/internet/dsl-clearaccess-wifi.php">Clear Access WiFi setup on a DSL connection.</a></p>
                    <p><a href="support/interent/wifi-win7-connect.php">Connecting a computer to your wireless network.</a></p>
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