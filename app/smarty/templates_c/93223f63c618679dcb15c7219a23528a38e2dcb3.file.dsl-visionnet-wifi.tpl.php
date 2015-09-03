<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 14:30:35
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dsl-visionnet-wifi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87303296451951c8641e8c3-92281998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93223f63c618679dcb15c7219a23528a38e2dcb3' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dsl-visionnet-wifi.tpl',
      1 => 1369162296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87303296451951c8641e8c3-92281998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51951c8647e731_29774084',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51951c8647e731_29774084')) {function content_51951c8647e731_29774084($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                        <a href="img/modems/visionnetm505n-bsg-wifi-front.png"><img style="width:400px;" class="padding" src="img/modems/visionnetm505n-bsg-wifi-front.png"></a><br>
                        <a href="img/modems/visionnetm505n-bsg-wifi-back.png"><img style="width:400px;" class="padding" src="img/modems/visionnetm505n-bsg-wifi-back.png"></a>
                    </div>
                    <h3 class="blue">Wireless VisionNet M505N for a DSL Connection</h3>
                    <p>The Wireless VisionNet M505N is used for Canby Telcom's Wireless service. These are basic instructions for setting up the Wireless VisionNet for DSL service.</p>
                    <ul><li><strong>Step 1.</strong> Connect the phone cable from a phone jack on the wall into the port labeled <strong>DSL</strong> on the back of the modem.</li>
                        <li><strong>Step 2.</strong> Plug the AC adapter from a power outlet into the port labeled <strong>POWER</strong>.</li>
                        <li><strong>Step 3.</strong> The modem will take about a minute to boot up. The <strong>DSL</strong> light should go solid.</li>
                        <li><strong>Step 4.</strong> Connect your computer into <strong>LAN 1</strong> on the modem.<br><br>
                            
                            <div class="alert alert-info"><strong>Note: </strong>If you have additional computers you want to connect directly to the VisionNet please <a href="contact-us"><strong>call Tech Support</strong></a> so we can make sure your device is configured correctly.</div>
                        
                        If you have TV service, sometimes your set-top boxes will be connected to ports 2-3.<br>
                        Now you should just be able to get online with this computer. If your still having trouble <a href="support/internet/lan-settings.php"><strong>check your LAN settings</strong></a> and try rebooting your PC.<br><br>
                        </li>
                        <li><strong>Step 5.</strong> Connect any wireless computers/devices to the wireless network using the <a href="support/internet/ssid-password.php"><strong>SSID and password</strong></a> provided with your service.</li>
                    </ul>                                            
                    <h4 class="gray">More Information:</h4>
                    <p><a href="support/internet/fiber-visionnet-wifi.php">VisionNet Modem instructions for a Fiber connection.</a></p>
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