<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 14:16:48
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dsl-visionnet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1647624124519519177f6428-21537497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78aef5fab9179c1c5c21449bd097f43a34cf950e' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dsl-visionnet.tpl',
      1 => 1369162296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1647624124519519177f6428-21537497',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519519178dde80_39439837',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519519178dde80_39439837')) {function content_519519178dde80_39439837($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                        <a href="img/modems/visionnet504-bsg-front.png"><img style="width:400px;" class="padding" src="img/modems/visionnet504-bsg-front.png" /></a><br>
                        <a href="img/modems/visionnet504-bsg-connections.png"><img style="width:400px;" class="padding" src="img/modems/visionnet504-bsg-connections.png" /></a>
                    </div>

                    <h3 class="blue">VisionNet M504 DSL Modem</h3>

                    <p>The VisionNet M504 is used for High-Speed Internet and Television service. Here are the basic steps for setting up your modem:</p>
                    <ul>
                        <li><strong>Step 1.</strong> Plug the phone cable from the phone jack into the port labeled DSL on the back of the modem.</li>
                        <li><strong>Step 2.</strong> Plug the AC adapter from a power outlet into the port labeled POWER.</li>
                        <li><strong>Step 3.</strong> The modem will take about a minute to boot up. The <strong>DSL</strong> light should go solid.</li>
                        <li><strong>Step 4.</strong> Plug your computer or router into <strong>port 1</strong> on the modem. <br>
                        If you have TV service, your STBs will be connected to ports 2-4.</li>
                    </ul>
                    <p>Your computer or router should pull an internet connection right away. If not you may need to reboot your router/PC and <a href="support/internet/lan-settings.php">check your LAN settings.</a></p>
                    <div class="alert alert-info">
                        <strong>NOTE:</strong> If you have TV service, this modem should be installed by an Installation and Repair Technician. If you are still having trouble connecting to the internet or with TV service, please call <a href="contact-us">Tech Support</a>.
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