<?php /* Smarty version Smarty-3.1.11, created on 2013-05-15 13:46:13
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-outlook-2010.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8167680095193c5add7c5e7-29184942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1078f262f1ed479f35aba31f0ce8b6cb9240460' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-outlook-2010.tpl',
      1 => 1368650772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8167680095193c5add7c5e7-29184942',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5193c5addfe215_64282100',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5193c5addfe215_64282100')) {function content_5193c5addfe215_64282100($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                        <li><a href="support/email">Email</a> <span class="divider">/</span></li>
                        <li><a href="support/email/start">Getting Started</a> <span class="divider">/</span></li>
                        <li class="active">Outlook 2010</li>
                    </ul>
                    <div id="tutorial">
                        <div id="outlook2010-img" class="tutorial-img visible-desktop">
                            <a class="step1" href="img/tutorials/outlook-2010/Outlook-2010-1-click-file-big.png"><li>Step 1.</li></a>
                            <a class="step2" href="img/tutorials/outlook-2010/Outlook-2010-2-click-add-account-big.png"><li>Step 2.</li></a>
                            <a class="step3" href="img/tutorials/outlook-2010/Outlook-2010-3-click-internet-account-big.png"><li>Step 3.</li></a>
                            <a class="step4" href="img/tutorials/outlook-2010/Outlook-2010-4-click-manually-configure-big.png"><li>Step 4.</li></a>
                            <a class="step5" href="img/tutorials/outlook-2010/Outlook-2010-5-add-new-account-big.png"><li>Step 5.</li></a>
                            <a class="step6" href="img/tutorials/outlook-2010/Outlook-2010-6-test-account-settings-big.png"><li>Step 6.</li></a>
                            <a class="step7" href="img/tutorials/outlook-2010/Outlook-2010-7-click-finish-big.png"><li>Step 7.</li></a>
                            <a class="step8" href="img/tutorials/outlook-2010/Outlook-2010-8-inbox-big.png"><li>Step 8.</li></a>
                            <h5>Hover over the image to zoom.</h5>
                            <li class="step5-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                Enter your <strong>full name</strong> and <strong>email address</strong>.<br>
                                Acount type: <strong>POP3</strong><br>
                                Incoming mail server: <strong>mail.web-ster.com</strong><br>
                                Outgoing mail server (smtp): <strong>mail.web-ster.com</strong><br>
                                User Name: your <strong>full email address</strong><br>
                                Password: your <strong>password</strong> (if you don’t know your password <a href="contact-us"><strong>call tech support</strong></a>.)<br>
                                Leave everything else the way it is by default (pictured.)<br>
                                Click <strong>“Next.”</strong><br>
                            </li>
                        </div>
                        <div class="blue head3">Outlook 2010</div>

                        <p>This tutorial shows you how to set up your email account in Outlook 2010.</p>

                        <h5>Click on the steps to show the screen shots.</h5>

                        <div class="tutorial-txt visible-desktop">
                            <li><a class="step1" href="#"><strong>Step 1.</strong> Open Outlook 2010 and click on <strong>File</strong>.</a></li>
                            <li><a class="step2" href="#"><strong>Step 2.</strong> Click on <strong>+ Add Account</strong>.</a></li>
                            <li><a class="step3" href="#"><strong>Step 3.</strong> Select <strong>Internet E-mail</strong> and click <strong>Next</strong>.</a></li>
                            <li><a class="step4" href="#"><strong>Step 4.</strong> Select <strong>Manually configure server settings...</strong> and click <strong>Next</strong>.</a></li>
                            <li><a class="step5" href="#"><strong>Step 5.</strong> E-Mail Settings</a></li>
                            <li><a class="step6" href="#"><strong>Step 6.</strong> You will see this <strong>Test Account Settings</strong> which should complete successfully. Click <strong>Close</strong>.</a></li>
                            <li><a class="step7" href="#"><strong>Step 7.</strong> Click <strong>Finish</strong>.</a></li>
                            <li><a class="step8" href="#"><strong>Step 8.</strong> That will take you to your inbox and now you are all set up!</a></li>
                        </div>
                        <div class="tutorial-txt hidden-desktop">
                            <li><a class="" href="img/tutorials/outlook-2010/Outlook-2010-1-click-file-big.png"><strong>Step 1.</strong> Open Outlook 2010 and click on <strong>File</strong>.</a></li>
                            <li><a class="" href="img/tutorials/outlook-2010/Outlook-2010-2-click-add-account-big.png"><strong>Step 2.</strong> Click on <strong>+ Add Account</strong>.</a></li>
                            <li><a class="" href="img/tutorials/outlook-2010/Outlook-2010-3-click-internet-account-big.png"><strong>Step 3.</strong> Select <strong>Internet E-mail</strong> and click <strong>Next</strong>.</a></li>
                            <li><a class="" href="img/tutorials/outlook-2010/Outlook-2010-4-click-manually-configure-big.png"><strong>Step 4.</strong> Select <strong>Manually configure server settings...</strong> and click <strong>Next</strong>.</a></li>
                            <li><a class="" href="img/tutorials/outlook-2010/Outlook-2010-5-add-new-account-big.png"><strong>Step 5.</strong> E-Mail Settings</a></li>
                            <li><a class="" href="img/tutorials/outlook-2010/Outlook-2010-6-test-account-settings-big.png"><strong>Step 6.</strong> You will see this <strong>Test Account Settings</strong> which should complete successfully. Click <strong>Close</strong>.</a></li>
                            <li><a class="" href="img/tutorials/outlook-2010/Outlook-2010-7-click-finish-big.png"><strong>Step 7.</strong> Click <strong>Finish</strong>.</a></li>
                            <li><a class="" href="img/tutorials/outlook-2010/Outlook-2010-8-inbox-big.png"><strong>Step 8.</strong> That will take you to your inbox and now you are all set up!</a></li>
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