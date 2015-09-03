<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 09:56:20
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dial-up-tutorial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:583373155519aa2973ac352-14182905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c50cb2c08126da88b59adc31e12259bdf4a0339' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dial-up-tutorial.tpl',
      1 => 1369091559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '583373155519aa2973ac352-14182905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519aa297454e72_01040520',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519aa297454e72_01040520')) {function content_519aa297454e72_01040520($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <ul class="breadcrumb">
                        <li><a href="support/internet">Internet</a> <span class="divider">/</span></li>
                        <li><a href="support/internet/dial-up.php">Dial-up</a> <span class="divider">/</span></li>
                        <li class="active">Dial-up Connection Tutorial</li>
                    </ul>
                    <div id="tutorial">
                        <div id="dial-img" class="tutorial-img visible-desktop">
                            <a class="step1" href="img/tutorials/computer/dial/win7-1-big.png"><li>Step 1.</li></a>
                            <a class="step2" href="img/tutorials/computer/dial/win7-2-big.png"><li>Step 2.</li></a>
                            <a class="step2b" href="img/tutorials/computer/dial/win7-2b-big.png"><li>Step 2.b</li></a>
                            <a class="step3" href="img/tutorials/computer/dial/win7-3-big.png"><li>Step 3.</li></a>
                            <a class="step4" href="img/tutorials/computer/dial/dial-win7-1-big.png"><li>Step 4.</li></a>
                            <a class="step5" href="img/tutorials/computer/dial/dial-win7-2-big.png"><li>Step 5.</li></a>
                            <a class="step6" href="img/tutorials/computer/dial/dial-win7-3-big.png"><li>Step 6.</li></a>
                            <a class="step7" href="img/tutorials/computer/dial/dial-win7-4-big.png"><li>Step 7.</li></a>

                            <li class="step2-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                If the control panel is displayed with icons like <a href="#"><strong>THIS</strong></a> you can click <strong>Network and Sharing Center</strong> and skip to step 4.
                            </li>

                            <li class="step6-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                Enter the dial-up phone number for your servce provider. The dial-up phone number for Canby is <strong>503.263.4593</strong>. Your <strong>username</strong> and <strong>password</strong> should be provided to you. If you don't have this information please <a href="contact-us"><strong> contact Tech Support.</strong></a> <br><br> The "Connection name" is just a description of this connection and can be anything. Leave everything else the same.
                            </li>

                            <li class="step7-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                You can launch your internet browser or email and the dial-up connection will automatically initialize.
                            </li>

                            <h5>Hover over the image to zoom.</h5>
                        </div>

                        <h3 class="blue">Set Up a Dial-up Connection</h3>

                        <p class="visible-desktop">This tutorial shows you how to setup a dial-up connection on Windows 7. It will look similar in earlier verisons of Windows.</p>

                        <p class="hidden-desktop">This tutorial is for setting up a dial-up connection on Windows 7. It will be similar in earlier verisons of Windows.<br><br></p>

                        <h5 class="visible-desktop">Click on the steps to show the screen shots.</h5>

                        <div class="tutorial-txt visible-desktop">
                            <li><a class="step1" href="#"><strong>Step 1.</strong> Go to the <strong>Start Menu</strong> on the lower left and click <strong>Control Panel</strong>.</a></li>
                            <li><a class="step2" href="#"><strong>Step 2.</strong> Click <strong>Network and Internet</strong>.</a></li>
                            <li><a class="step3" href="#"><strong>Step 3.</strong> Click <strong>Network and Sharing Center</strong>.</a></li>
                            <li><a class="step4" href="#"><strong>Step 4.</strong> Click <strong>Set up a new connection or network.</strong></a></li>
                            <li><a class="step5" href="#"><strong>Step 5.</strong> Select <strong>Setup a dial-up connection</strong> and click <strong>Next</strong>.</a></li>
                            <li><a class="step6" href="#"><strong>Step 6.</strong> Enter your dial-up phone number, <strong>username</strong> and <strong>password</strong> and click <strong>Create</strong>.</a></li>
                            <li><a class="step7" href="#"><strong>Step 7.</strong> The setup is complete and the dial-up connection is ready to use.</a></li>
                        </div>
                        <div class="hidden-desktop">
                            <ol>
                                <li>Go to the <strong>Start Menu</strong> on the lower left and click <strong>Control Panel.</strong></li>
                                <li>Click <strong>Network and Internet.</strong></li>
                                <li>Click <strong>Network and Sharing Center.</strong></li>
                                <li>Click <strong>Set up a new connection or network.</strong></li>
                                <li>Select <strong>Setup a dial-up connection</strong> and click <strong>Next.</strong></li>
                                <li>Enter your dial-up phone number, <strong>username</strong> and <strong>password</strong> and click <strong>Create.</strong>
                                    <ul>
                                        <li>Your <strong>username</strong> and <strong>password</strong> should be provided to you. If you don't have this information please <a href="contact-us"><strong> contact Tech Support.</strong></a></li>
                                        <li>The <strong>Connection name</strong> is just a description of this connection and can be anything. Leave everything else the same.</li>
                                    </ul>
                                </li>
                                <li>The setup is complete and the dial-up connection is ready to use.</li>
                            </ol>
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