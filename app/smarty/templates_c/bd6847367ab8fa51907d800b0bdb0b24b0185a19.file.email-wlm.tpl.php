<?php /* Smarty version Smarty-3.1.11, created on 2013-05-15 13:41:26
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-wlm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4754859965193bce231b0f0-54463729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd6847367ab8fa51907d800b0bdb0b24b0185a19' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-wlm.tpl',
      1 => 1368650439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4754859965193bce231b0f0-54463729',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5193bce239d259_47654536',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5193bce239d259_47654536')) {function content_5193bce239d259_47654536($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                        <li class="active">Windows Live Mail</li>
                    </ul>
                    <div id="tutorial">
                        <div id="wlm-img" class="tutorial-img visible-desktop">
                            <a class="step1" href="img/tutorials/windows-live-mail/windows-live-mail-1.png"><li>Step 1.</li></a>
                            <a class="step2" href="img/tutorials/windows-live-mail/windows-live-mail-2-big.png"><li>Step 2.</li></a>
                            <a class="step3" href="img/tutorials/windows-live-mail/windows-live-mail-3-big.png"><li>Step 3.</li></a>
                            <a class="step4" href="img/tutorials/windows-live-mail/windows-live-mail-4-big.png"><li>Step 4.</li></a>
                            <a class="step5" href="img/tutorials/windows-live-mail/windows-live-mail-5-big.png"><li>Step 5.</li></a>
                            <a class="step6" href="img/tutorials/windows-live-mail/windows-live-mail-6-big.png"><li>Step 6.</li></a>
                            <a class="step7" href="img/tutorials/windows-live-mail/windows-live-mail-7-big.png"><li>Step 7.</li></a>

                            <li class="step1-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                If you don’t see Windows Live Mail in your programs list you can download it for free from: <a href="http://windows.microsoft.com/en-US/windows-live/essentials-other-programs" target="_blank"><strong>Microsoft.com/WindowsLive</strong></a>
                            </li>
                            <li class="step2-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                If your are opening Windows Live Mail for the first time it may take you directly to the email setup wizard. If so skip to step 4.
                            </li>
                            <li class="step4-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                Enter your <strong>email address</strong> and <strong>password</strong>.<br>
                                If you dont know your email password you must call into <a href="contact-us"><strong>tech support</strong></a>.<br>
                                Your <strong>full name</strong> (The display name is what people see as your name when receiving email from you.)<br>
                                Click the check box for <strong>“Manually configure server settings.”</strong><br>
                                Click <strong>“Next.”</strong><br>
                            </li>
                            <li class="step5-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                <strong>Incoming server information:</strong><br>
                                Server type is: <strong>POP</strong><br>
                                Server address: <strong>mail.web-ster.com</strong><br>
                                Requires a secure connection: <strong>Yes</strong><br>
                                Port: <strong>995</strong><br>
                                Authenticate using: <strong>Clear Text</strong><br>
                                Logon user name: your <strong>full email address</strong><br><br>
                                <strong>Outgoing server information:</strong><br>
                                Server address: <strong>mail.web-ster.com</strong><br>
                                Port: <strong>587</strong><br>
                                Check <strong>Requires a secure connection (SSL)</strong> and <strong>Requires authentication</strong>.<br>
                                Click <strong>Next.</strong><br>
                            </li>

                            <h5>Hover over the image to zoom.</h5>
                        </div>
                        <h3 class="blue">Windows Live Mail</h3>
                        <p>This tutorial shows you how to set up your email account in Windows Live Mail.</p>
                        <h5>Click on the steps to show the screen shots.</h5>
                        <div class="tutorial-txt visible-desktop">
                           <li><a class="step1" href="#"><strong>Step 1.</strong> Open <strong>Windows Live Mail</strong> from the <strong>Start Menu</strong> under <strong>All Programs</strong>. </a></li>
                           <li><a class="step2" href="#"><strong>Step 2.</strong> Click on the <strong>Accounts</strong> tab on the top. </a></li>
                           <li><a class="step3" href="#"><strong>Step 3.</strong> Click the <strong>Email+</strong> icon on the upper left.</a></li>
                           <li><a class="step4" href="#"><strong>Step 4.</strong> Add your email account.</a></li>
                           <li><a class="step5" href="#"><strong>Step 5.</strong> Configure server settings.</dd></a></li>
                           <li><a class="step6" href="#"><strong>Step 6.</strong> Click <strong>Finish.</strong></a></li>
                           <li><a class="step7" href="#"><strong>Step 7.</strong> That will take you to your inbox and now you are all set up!</a></li>
                        </div>
                        <div class="tutorial-txt hidden-desktop">
                           <li><a class="" href="img/tutorials/windows-live-mail/windows-live-mail-1.png"><strong>Step 1.</strong> Open <strong>Windows Live Mail</strong> from the <strong>Start Menu</strong> under <strong>All Programs</strong>. </a></li>
                           <li><a class="" href="img/tutorials/windows-live-mail/windows-live-mail-2-big.png"><strong>Step 2.</strong> Click on the <strong>Accounts</strong> tab on the top. </a></li>
                           <li><a class="" href="img/tutorials/windows-live-mail/windows-live-mail-3-big.png"><strong>Step 3.</strong> Click the <strong>Email+</strong> icon on the upper left.</a></li>
                           <li><a class="" href="img/tutorials/windows-live-mail/windows-live-mail-4-big.png"><strong>Step 4.</strong> Add your email account.</a></li>
                           <li><a class="" href="img/tutorials/windows-live-mail/windows-live-mail-5-big.png"><strong>Step 5.</strong> Configure server settings.</dd></a></li>
                           <li><a class="" href="img/tutorials/windows-live-mail/windows-live-mail-6-big.png"><strong>Step 6.</strong> Click <strong>Finish.</strong></a></li>
                           <li><a class="" href="img/tutorials/windows-live-mail/windows-live-mail-7-big.png"><strong>Step 7.</strong> That will take you to your inbox and now you are all set up!</a></li>
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