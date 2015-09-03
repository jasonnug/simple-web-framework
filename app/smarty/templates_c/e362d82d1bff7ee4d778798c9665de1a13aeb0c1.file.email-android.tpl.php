<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 10:42:09
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-android.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4138473035193da3a8e0782-29324030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e362d82d1bff7ee4d778798c9665de1a13aeb0c1' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-android.tpl',
      1 => 1369158128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4138473035193da3a8e0782-29324030',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5193da3a968c63_17202544',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5193da3a968c63_17202544')) {function content_5193da3a968c63_17202544($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                        <li class="active">Android</li>
                    </ul>
                    <div id="tutorial">
                        <div id="android-img" class="tutorial-img visible-desktop margin10">
                            <a class="step1" href="img/tutorials/android/android-1-big.png"><li>Step 1.</li></a>
                            <a class="step1b" href="img/tutorials/android/android-1b-big.png"><li>Step 1.b</li></a>
                            <a class="step2" href="img/tutorials/android/android-2-big.png"><li>Step 2.</li></a>
                            <a class="step3" href="img/tutorials/android/android-3-big.png"><li>Step 3.</li></a>
                            <a class="step4" href="img/tutorials/android/android-4-big.png"><li>Step 4.</li></a>
                            <a class="step5" href="img/tutorials/android/android-5-big.png"><li>Step 5.</li></a>
                            <a class="step6" href="img/tutorials/android/android-6-big.png"><li>Step 6.</li></a>
                            <a class="step7" href="img/tutorials/android/android-7-big.png"><li>Step 7.</li></a>
                            <a class="step8" href="img/tutorials/android/android-8-big.png"><li>Step 8.</li></a>

                            <li class="step1-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                If you are opening the Email app for the first time you will be automatically taken to the "Account Setup" screen. If you've set up an account before you will need to go to the <strong>Settings</strong> and <a id="android-add-account-link" href="#"><strong>Add Account</strong></a>.
                            </li>

                            <li class="step2-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                If you don't know your <strong>email</strong> and/or <strong>password</strong>, please <a href="contact-us"><strong>contact Tech Support</strong></a>.
                            </li>

                            <li class="step4-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                Username is <strong>your full email address</strong>.<br>
                                The password is the same as your <strong>email password</strong>.<br>
                                The POP3 server is <strong>mail.web-ster.com</strong>.<br>
                                Security type is <strong>None</strong>.<br>
                                Port is <strong>110</strong>.<br>
                                Delete email from server <strong>Never</strong>.<br>
                                Select <strong>"Next"</strong>.

                            <li class="step5-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                SMTP server is <strong>mail.web-ster.com</strong>.<br>
                                Security type is <strong>None</strong>.<br>
                                Port is <strong>587</strong>.<br>
                                Require sign-in needs to be <strong>checked</strong>.<br>
                                Username is <strong>your full email address</strong>.<br>
                                Password is the same as your <strong>email password</strong>.<br>
                                Select <strong>"Next"</strong>.
                            </li>

                            <li class="step6-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                You can leave these settings as they are and select <strong>"Next"</strong>.<br><br>
                                Inbox checking frequency is how often it will check for new mail. The more often, the more is uses your battery. The less often, the longer it takes for you to receive email.<br><br>
                                "Send email from this account by default" is only applicable if your setting up more than one account.<br><br>
                                "Notify me when email arrives" if checked, will give you a notification when you get a new email.<br><br>
                                "Sync email from this account" needs to be checked if you what to get mail.
                            </li>

                            <li class="step7-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                This is the name that is shown when you are sending mail.
                            </li>

                            <h5>Hover over the image to zoom.</h5>
                        </div>
                        <div class="green head3">Android</div>

                        <p>This tutorial shows you how to set up your email account in the default email app on Android. This tutorial goes through a tablet interface but a smart phone interface should look similar.</p>

                        <h5>Click on the steps to show the screen shots.</h5>

                        <div class="tutorial-txt visible-desktop">
                            <li><a class="step1" href="#"><strong>Step 1.</strong> Open the <strong>Email</strong> app.</a></li>
                            <li><a class="step2" href="#"><strong>Step 2.</strong> Enter your <strong>email address</strong> and <strong>password</strong> and select <strong>"Manual Setup"</strong>.</a></li>
                            <li><a class="step3" href="#"><strong>Step 3.</strong> Select <strong>POP3</strong>.</a></li>
                            <li><a class="step4" href="#"><strong>Step 4.</strong> Enter the <strong>Incoming</strong> server settings.</a></li>
                            <li><a class="step5" href="#"><strong>Step 5.</strong> Enter the <strong>Outgoing</strong> server settings.</a></li>
                            <li><a class="step6" href="#"><strong>Step 6.</strong> Account options.</a></li>
                            <li><a class="step7" href="#"><strong>Step 7.</strong> Enter your display name and select <strong>"Next"</strong>.</a></li>
                            <li><a class="step8" href="#"><strong>Step 8.</strong> That will take you to your inbox and now you are all set up!</a></li>
                        </div>

                        <div class="tutorial-txt hidden-desktop">
                            <li><a class="" href="img/tutorials/android/android-1-big.png"><strong>Step 1.</strong> Open the <strong>Email</strong> app.</a></li>
                            <li><a class="" href="img/tutorials/android/android-2-big.png"><strong>Step 2.</strong> Enter your <strong>email address</strong> and <strong>password</strong> and select <strong>"Manual Setup"</strong>.</a></li>
                            <li><a class="" href="img/tutorials/android/android-3-big.png"><strong>Step 3.</strong> Select <strong>POP3</strong>.</a></li>
                            <li><a class="" href="img/tutorials/android/android-4-big.png"><strong>Step 4.</strong> Enter the <strong>Incoming</strong> server settings.</a></li>
                            <li><a class="" href="img/tutorials/android/android-5-big.png"><strong>Step 5.</strong> Enter the <strong>Outgoing</strong> server settings.</a></li>
                            <li><a class="" href="img/tutorials/android/android-6-big.png"><strong>Step 6.</strong> Account options.</a></li>
                            <li><a class="" href="img/tutorials/android/android-7-big.png"><strong>Step 7.</strong> Enter your display name and select <strong>"Next"</strong>.</a></li>
                            <li><a class="" href="#"><strong>Step 8.</strong> That will take you to your inbox and now you are all set up!</a></li>
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