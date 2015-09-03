<?php /* Smarty version Smarty-3.1.11, created on 2013-05-20 14:37:20
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/fiber-clearaccess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8897847475196560bc46b97-49227734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61b7d0306557145eb75efafa6502f66787918e8c' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/fiber-clearaccess.tpl',
      1 => 1369085839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8897847475196560bc46b97-49227734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5196560bcb1af4_97910544',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5196560bcb1af4_97910544')) {function content_5196560bcb1af4_97910544($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <h3 class="blue">Clear Access AG10W Modem for a Fiber Connection</h3>
                    <p>The Clear Access AG10W is used for Canby Telcom's DSL/Fiber and/or Wireless service. These are basic instructions for setting up the Clear Access for Fiber service.</p>
                    <ul>
                        <li><strong>Step 1.</strong> Connect the ethernet cable from the designated wall jack into the <strong>LAN 1</strong> or <strong>WAN</strong> port on the Clear Access.</li>
                        <li><strong>Step 2.</strong> Plug the AC adapter from a power outlet into the Clear Access.</li>
                        <li><strong>Step 3.</strong> The router will take about a minute to boot up. The WLAN light should be on.</li>
                        <li><strong>Step 4.</strong> Connect your computer into the <strong>LAN 2</strong> port on the Clear Access.</li>
                        <li>Now you should just be able to get online with your computer. If your still having trouble <a href="support/internet/lan-settings.php"><strong>check your LAN settings</strong></a> and try rebooting your PC.</li>
                    </ul>
                    <h4 class="gray">More Information: </h4>
                    <p><a href="support/internet/dsl-clearaccess.php">Clear Access setup on a DSL connection.</a></p>
                    <p><a href="support/internet/dsl-clearaccess-wifi.php">Clear Access setup for Managed WiFi service on a DSL connection.</a></p>
                    <p><a href="support/internet/fiber-clearaccess-wifi.php">Clear Access setup for Managed WiFi service on a Fiber connection.</a></p>
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