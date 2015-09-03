<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 14:14:46
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/lan-settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3530611825196713d87fff2-48940603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4adc068eeaab266e405cf1b3f351e9bea132577' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/lan-settings.tpl',
      1 => 1369162297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3530611825196713d87fff2-48940603',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5196713d8dede1_86752518',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5196713d8dede1_86752518')) {function content_5196713d8dede1_86752518($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <ul class="breadcrumb">
                        <li><a href="support/internet">Internet</a> <span class="divider">/</span></li>
                        <li><a href="support/internet/computer">Computer</a> <span class="divider">/</span></li>
                        <li class="active">LAN Settings</li>
                    </ul>  
                    <div id="tutorial">
                        <div id="lan-img" class="tutorial-img visible-desktop">
                            <div class="tutorial-imgs">
                                    <a class="step1" href="img/tutorials/computer/lan/win7-1-big.png"><li>Step 1.</li></a>
                                    <a class="step2" href="img/tutorials/computer/lan/win7-2-big.png"><li>Step 2.</li></a>
                                    <a class="step2b" href="img/tutorials/computer/lan/win7-2b-big.png"><li>Step 2.b</li></a>
                                    <a class="step3" href="img/tutorials/computer/lan/win7-3-big.png"><li>Step 3.</li></a>
                                    <a class="step4" href="img/tutorials/computer/lan/win7-4-big.png"><li>Step 4.</li></a>
                                    <a class="step5" href="img/tutorials/computer/lan/win7-5-big.png"><li>Step 5.</li></a>
                                    <a class="step5b" href="img/tutorials/computer/lan/win7-5b-big.png"><li>Step 5.b</li></a>
                                    <a class="step6" href="img/tutorials/computer/lan/win7-6-big.png"><li>Step 6.</li></a>
                                    <a class="step7" href="img/tutorials/computer/lan/win7-7-big.png"><li>Step 7.</li></a>
                            </div>

                            <li class="step2-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                If the control panel is displayed with icons like <a id="lan-settings-info1" href="#"><strong>THIS</strong></a> you can click <strong>Network and Sharing Center</strong> and skip to step 4.
                            </li>
                            <li class="step5-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                If the Local Area Connection has a red <strong style="color: red;">X</strong> like <a id="lan-settings-info2" href="#"><strong>THIS</strong></a> make sure there is an ethernet cable connected to your computer.
                            </li>
                            <li class="step7-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                Make sure <strong>"Obtain an IP address automatically"</strong> and <strong>"Obtain DNS server address automatically"</strong> are selected as shown.</a><br><br>
                                If it is then your computer is properly setup for an Ethernet connection. If you still can't get online double check your <a href="support/internet/router.php"><strong>router</strong></a> or <a href="support/internet/dsl-modem.php"><strong>modem</strong></a> or <a href="contact-us"><strong>contact tech support</strong></a>.
                            </li>
                            <h5>Hover over the image to zoom.</h5>
                        </div>

                        <h3 class="blue">LAN Settings</h3>

                        <p>This tutorial shows you how to check your Local Area Connection properties to make sure they are set correctly for an internet connection.</p>

                        <h5>Click on the steps to show the screen shots.</h5>

                        <div class="tutorial-txt visible-desktop">
                            <li><a class="step1" href="#"><strong>Step 1.</strong> Go to the <strong>Start Menu</strong> on the lower left and click <strong>Control Panel</strong>.</a></li>
                            <li><a class="step2" href="#"><strong>Step 2.</strong> Click <strong>Network and Internet</strong>.</a></li>
                            <li><a class="step3" href="#"><strong>Step 3.</strong> Click <strong>Network and Sharing Center</strong>.</a></li>
                            <li><a class="step4" href="#"><strong>Step 4.</strong> Click <strong>Change adapter settings</strong> on the left.</a></li>
                            <li><a class="step5" href="#"><strong>Step 5.</strong> Right-Click on <strong>Local Area Connection</strong> and click <strong>Properties</strong>.</a></li>
                            <li><a class="step6" href="#"><strong>Step 6.</strong> Select <strong>Internet Protocol Version 4</strong> and then click <strong>Properties</strong>.</a></li>
                            <li><a class="step7" href="#"><strong>Step 7.</strong> Check TCP/IP Settings</a></li>
                        </div>

                        <div class="hidden-desktop">
                            <ol class="hidden-desktop">
                                <li>Go to the <strong>Start Menu</strong> on the lower left and click <strong>Control Panel</strong>.</li>
                                <li>Click <strong>Network and Internet</strong>.</li>
                                <li>Click <strong>Network and Sharing Center</strong>.</li>
                                <li>Click <strong>Change adapter settings</strong> on the left.</li>
                                <li>Right-Click on <strong>Local Area Connection</strong> and click <strong>Properties</strong>.</li>
                                <li>Select <strong>Internet Protocol Version 4</strong> and then click <strong>Properties</strong>.</li>
                                <li>Check TCP/IP Settings</li>
                            </ol>
                            <p>Make sure "Obtain an IP address automatically" and "Obtain DNS server address automatically" are selected. If it is then your computer is properly setup for an Ethernet connection. If you still can't get online double check your <a href="support/internet/router.php">router</a> or <a href="support/internet/dsl-modem.php">modem</a> and try rebooting your computer.</p>
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