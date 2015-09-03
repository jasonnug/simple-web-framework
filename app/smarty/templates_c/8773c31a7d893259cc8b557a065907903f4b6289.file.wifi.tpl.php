<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 14:26:40
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/wifi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:404742070519aac6a0175e0-21512552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8773c31a7d893259cc8b557a065907903f4b6289' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/wifi.tpl',
      1 => 1369162294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '404742070519aac6a0175e0-21512552',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519aac6a093de7_32778367',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519aac6a093de7_32778367')) {function content_519aac6a093de7_32778367($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <img class="right margin20" style="width:150px;" src="img/wifi_sticker.png" />

                    <h3 class="blue">Wireless Network Setup</h3>
                    <p>A wireless router allows you to connect multiple devices/computers to your Internet wirelessly. Canby Telcom offers a wireless service which is fully supported and managed. For more information on the features of this service <a href="internet/wifi">visit the Managed WiFi features page</a> or <a href="contact-us">contact our Customer Care Department</a>.</p>

                    <ul>
                        <li>
                            <a class="" href="support/internet/router.php"><h4>General Wireless Router Setup</h4></a>
                            <p>If you have your own wireless router and need help with setup <a class="" href="support/internet/router.php">click here</a> for basic instruction. If you need more specific instruction and help with your 3rd party router please contact the manufacturer's documentation and support.</p>
                        </li>
                        <li>
                            <a href="support/wifi/setup.php"><h4>Canby Telcom WiFi Device Setup</h4></a>
                            <p>If you have Canby Telcom's Managed WiFi service we provide you with a router and will help you set up and troubleshoot your network. <a href="support/wifi/setup.php">Click here</a> for specific setup instructions on the different wireless devices from Canby Telcom.</p>
                        </li>
                        <li>
                            <a href="support/wifi/ssid.php"><h4>SSID and Password</h4></a>
                            <p><a href="support/wifi/ssid.php">Click here</a> for more information about connecting to your wireless network using your SSID and password.</p>
                        </li>
                        <li>
                            <a href="support/wifi/wifi-win7-connect.php"><h4>Connecting a Wireless Computer</h4></a>
                            <p>Once you have your wireless network setup you will need to connect your laptop or other wireless devices to your network. <a href="support/wifi/wifi-win7-connect.php">Click here</a> for a tutorial connecting a computer to your wireless network.</p>
                        </li>
                    </ul>
                    
                    
                    
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