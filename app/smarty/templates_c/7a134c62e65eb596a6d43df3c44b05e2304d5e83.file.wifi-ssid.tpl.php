<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 14:26:45
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/wifi-ssid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:434132145519ba0058e1c93-50005732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a134c62e65eb596a6d43df3c44b05e2304d5e83' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/wifi-ssid.tpl',
      1 => 1369162297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '434132145519ba0058e1c93-50005732',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519ba005958674_49268770',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519ba005958674_49268770')) {function content_519ba005958674_49268770($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <h3 class="blue">SSID (Network Name) and Password</h3>
                    
                    <p>The <strong>SSID</strong> (service set identifier) is the name of your wireless network. This is viewable to anyone with a wireless device within reachable distance of your network. It's recommended you set up a <strong>password</strong> so not just anybody can connect to your network. </p>
                    <p>If you have <a href="internet/wifi">Canby Telcom's Managed WiFi</a> service with us your SSID and password will already be set up and proviced for you. By default it will look similar to:</p>
                    <ul>
                        <li><strong>SSID:</strong> CANBYTEL$$$$</li>
                        <li><strong>Password:</strong> CANBY$$$$$$<br>
                        <div class="disclaimer">$ will be a unique number.</div></li>
                    </ul>
                    
                    <p>The <strong>SSID</strong> is the name of your wireless network. This is what you will look for when connecting wireless computers and devices.</p>
                    <p>The <strong>Password</strong> is the secret key you will enter when first connecting a device to your wireless network. Each computer or device you connect will need to use this password.</p>
                    <div class="alert alert-info">
                        <strong>Note: </strong>It's recommended that you change your SSID and password to something more familiar and easy to remember (while still being secure). <br>
                        If you have lost this information or would like to change your SSID and/or password please <a href="contact-us">call in to Tech Support.</a>
                    </div>
                    <a href="support/wifi/wifi-win7-connect.php" class="btn btn-large btn-warning">
                        <span class="big margin5" style="margin-left:-5px;">?</span>
                        <strong>Tutorial:</strong> Once you have your wireless router setup and you know your SSID and password you will need to connect your wireless computer to your network.</strong>
                    </a>
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