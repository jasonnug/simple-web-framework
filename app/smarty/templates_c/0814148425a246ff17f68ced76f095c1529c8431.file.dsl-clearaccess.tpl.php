<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 09:21:58
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dsl-clearaccess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1349476336519541069ec258-38036330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0814148425a246ff17f68ced76f095c1529c8431' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dsl-clearaccess.tpl',
      1 => 1369153317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1349476336519541069ec258-38036330',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51954106a5f641_78098981',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51954106a5f641_78098981')) {function content_51954106a5f641_78098981($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <h3 class="blue">Clear Access AG10W for a DSL Connection</h3>
                    <p>These are basic instructions for setting up the Clear Access Modem for DSL service. </p>
                    <ul>
                        <li><strong>Step 1.</strong> Connect the phone cable from a phone jack on the wall into the port labeled <strong>DSL</strong> on the back of the modem.</li>
                        <li><strong>Step 2.</strong> Plug the AC adapter from a power outlet into the modem.</li>
                        <li><strong>Step 3.</strong> The modem will take about a minute to boot up. The <strong>DSL</strong> light should go solid.</li>
                        <li><strong>Step 4.</strong> Plug your computer into the <strong>LAN 1</strong> or <strong>WAN</strong> port on the modem. It's the port closest to the antenna.</li>
                        <li>Now you should just be able to get online with your computer. If your still having trouble <a href="internet/lan-settings.php"><strong>check your LAN settings</strong></a> and try rebooting your PC.</li>
                    </ul>
                    <h4 class="gray">More Information:</h4>
                    
                    <p><a href="support/internet/dsl-clearaccess-wifi.php">Clear Access AG10W for Managed WiFi on a DSL Connection.</a></p>
                    <p><a href="support/internet/fiber-clearaccess-wifi.php">Clear Access AG10W for Managed WiFi on a Fiber Connection.</a></p>
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