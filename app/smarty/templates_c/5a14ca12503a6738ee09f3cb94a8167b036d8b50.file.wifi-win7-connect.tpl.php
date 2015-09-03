<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 14:16:30
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/wifi-win7-connect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1575474029519ba7f6232f98-39732084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a14ca12503a6738ee09f3cb94a8167b036d8b50' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/wifi-win7-connect.tpl',
      1 => 1369162298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1575474029519ba7f6232f98-39732084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519ba7f62b03b5_38286126',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519ba7f62b03b5_38286126')) {function content_519ba7f62b03b5_38286126($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <div id="tutorial">
                        <div id="wifi-win7-img" class="tutorial-img visible-desktop">
                            <a class="step1" href="img/tutorials/computer/wifi/wifi-win7-1-big.png"><li>Step 1.</li></a>
                            <a class="step2" href="img/tutorials/computer/wifi/wifi-win7-2-big.png"><li>Step 2.</li></a>
                            <a class="step3" href="img/tutorials/computer/wifi/wifi-win7-3-big.png"><li>Step 3.</li></a>
                            <a class="step4" href="img/tutorials/computer/wifi/wifi-win7-4-big.png"><li>Step 4.</li></a>
                            <a class="step5" href="img/tutorials/computer/wifi/wifi-win7-5-big.png"><li>Step 5.</li></a>
                            <a class="step6" href="img/tutorials/computer/wifi/wifi-win7-6-big.png"><li>Step 6.</li></a>
                            <a class="step6b" href="img/tutorials/computer/wifi/wifi-win7-6b-big.png"><li>Step 6.b</li></a>

                            <li class="step2-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                Your <strong>SSID</strong> is the name of your wireless network. 
                            </li>
                            <li class="step4-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                The <strong>network security key</strong> is the password for your wireless network (sometimes called a "passphrase"). Some networks don't require a password. <br>
                            </li>
                            <li class="step6-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                You should be able to get online now. If you get <a class="step6-i" href="#"><strong>"Netork Security Key Mismatch"</strong></a> double check your <strong>Network Key</strong> and try again. If you are still having trouble connecting you will need to contact the person who manages your network. <br>
                            </li>

                            <h5>Hover over the image to zoom.</h5>
                        </div>
                        <h3 class="blue">Connecting a Wireless Computer</h3>

                        <p>This tutorial shows you how to connect to your wireless network with your <strong>wireless password</strong> (sometimes called "network key" or "passphrase"). This tutorial is for Windows 7, other versions of Windows will look similar.</p>

                        <h5 class="gray">Click on the steps to show the screen shots.</h5>

                        <div class="tutorial-txt">
                                <li><a class="step1" href="#"><strong>Step 1.</strong> On the lower right of your screen click on the icon for your wireless connection.</a></li>
                                <li><a class="step2" href="#"><strong>Step 2.</strong> Click on your <strong>SSID</strong>.</a></li>
                                <li><a class="step3" href="#"><strong>Step 3.</strong> Click <strong>Connect</strong>.</a></li>
                                <li><a class="step4" href="#"><strong>Step 4.</strong> Type your <strong>password</strong> and click <strong>OK</strong>.</a></li>
                                <li><a class="step5" href="#"><strong>Step 5.</strong> Wait for authentication.</a></li>
                                <li><a class="step6" href="#"><strong>Step 6.</strong> Now you are connected.</a></li>
                        </div>
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