<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 10:30:23
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/pc-connect-visionnet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:632337282519bad24479615-71704320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'beabfa091d3450322f0c2450ed9b80f09a952b2d' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/pc-connect-visionnet.tpl',
      1 => 1369157412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '632337282519bad24479615-71704320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519bad24524537_27300096',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519bad24524537_27300096')) {function content_519bad24524537_27300096($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <a href="img/tutorials/computer/pc-eth-visionnet.png"><img style="width:50%;" class="right" src="img/tutorials/computer/pc-eth-visionnet.png" /></a>

                    <h3 class="blue">Connecting a PC to Your Router</h3>
                    <p><strong>Step 1.</strong> Once you have the VisionNet connected to power and the internet, connect an ethernet cord to the port on the back of your computer as shown. </p>
                    <p><strong>Step 2.</strong> Connect the other end of the ethernet cord to the VisionNet gateway into Ethernet <strong>Port 1</strong>. Your computer should automatically establish a network connection and get online.</p>
                    <p><strong>Note:</strong> If you want to connect other computer/devices into the additional ports on the VisionNet you will need to contact <a href="index.php"><strong>tech support</strong></a> so we can enable those ports.</p>
                    
                    <a class="btn btn-large btn-warning" href="support/internet/lan-settings.php">
                        <span class="big" style="margin: 0 6px 0 -5px;">?</span>
                        If your still having trouble connecting to the Internet you may need to <strong>check your LAN settings</strong>.
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