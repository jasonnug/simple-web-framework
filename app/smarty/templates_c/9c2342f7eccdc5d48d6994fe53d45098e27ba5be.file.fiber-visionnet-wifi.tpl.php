<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 14:33:00
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/fiber-visionnet-wifi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7902627885196640ad7ee52-74174369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c2342f7eccdc5d48d6994fe53d45098e27ba5be' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/fiber-visionnet-wifi.tpl',
      1 => 1369171978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7902627885196640ad7ee52-74174369',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5196640ae07473_95749999',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5196640ae07473_95749999')) {function content_5196640ae07473_95749999($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <div class="right">
                        <a href="img/modems/visionnetm505n-bsg-wifi-front.png"><img style="width:400px;" class="padding" src="img/modems/visionnetm505n-bsg-wifi-front.png" /></a><br>
                        <a href="img/modems/visionnetm505n-bsg-wifi-back.png"><img style="width:400px;" class="padding" src="img/modems/visionnetm505n-bsg-wifi-back.png" /></a>
                    </div>

                    <h3 class="blue">WiFi VisionNet M504 on a Fiber Connection</h3>

                    <p>The Wireless VisionNet M505N is used for Canby Telcom's Wireless service. These are basic instructions for setting up the Wireless VisionNet for fiber service.</p>
                    <ul>
                        <li><strong>Step 1.</strong> Connect an ethernet cable from the designated wall jack to <strong>port 4</strong> (or <strong>"Omni Port"</strong>) on the back of the VisionNet.</li>
                    </ul>
                    <div class="alert alert-error"><strong>Note:</strong> Make sure there are no other ethernet cables connected to the VisionNet except into the "Omni Port" before you connect power.</div>
                    <ul>
                        <li><strong>Step 2.</strong> Plug the AC adapter from a power outlet into the port labeled <strong>POWER</strong>.</li>
                        <li><strong>Step 3.</strong> The modem will take about a minute to boot up. The <strong>Internet</strong> light should turn on.</li>
                        <li><strong>Step 4.</strong> Connect your computer into <strong>LAN 1</strong> on the modem. If you have additional computers you want to connect directly to the VisionNet please <a href="contact-us"><strong>contact Tech Support</strong></a> so we can make sure your device is configured correctly.<br><br>
                            Now you should just be able to get online with this computer. If your still having trouble <a href="support/internet/lan-settings.php"><strong>check your LAN settings</strong></a> and try rebooting your PC.<br><br>
                        </li>
                        <li><strong>Step 5.</strong> Connect any wireless computers/devices to the wireless network using the <a href="support/wifi/ssid.php"><strong>SSID and password</strong></a> provided with your service. </li>
                    </ul>
                    <div class="alert alert-info">
                        <strong>NOTE:</strong> If you have TV service, this modem should be installed by an Installation and Repair Technician. If you are still having trouble connecting to the Internet or with TV service, please call <a href="contact-us">Tech Support</a>.
                    </div>
                    <h4 class="gray">More Information:</h4>
                    <p><a href="support/internet/dsl-visionnet-wifi.php">WiFi VisionNet setup on a DSL connection.</a></p>
                    <p><a href="support/wifi/wifi-win7-connect.php">Connecting a computer to your wireless network.</a></p>
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