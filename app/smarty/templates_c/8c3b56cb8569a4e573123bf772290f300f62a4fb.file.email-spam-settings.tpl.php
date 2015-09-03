<?php /* Smarty version Smarty-3.1.11, created on 2013-05-15 14:06:17
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-spam-settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12340580735193f8b5552680-06285849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c3b56cb8569a4e573123bf772290f300f62a4fb' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-spam-settings.tpl',
      1 => 1368651976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12340580735193f8b5552680-06285849',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5193f8b55f47a3_48444519',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5193f8b55f47a3_48444519')) {function content_5193f8b55f47a3_48444519($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                        <li><a href="support/email/spam">Spam</a> <span class="divider">/</span></li>
                        <li class="active">Spam Settings</li>
                    </ul>
                    <div id="tutorial">
                        <div id="spam-settings-img" class="tutorial-img visible-desktop">

                            <a class="step1" href="img/tutorials/spam/spam-settings-mail.web-ster.com-1-big.png"><li>Step 1.</li></a>
                            <a class="step2" href="img/tutorials/spam/spam-settings-mail.web-ster.com-2-big.png"><li>Step 2.</li></a>
                            <a class="step3" href="img/tutorials/spam/spam-settings-mail.web-ster.com-3-big.png"><li>Step 3.</li></a>
                            <a class="step4" href="img/tutorials/spam/spam-settings-mail.web-ster.com-4-big.png"><li>Step 4.</li></a>

                            <li class="step1-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                If you need help logging in, go to the <a href="support/email/webmail.php"><strong>Webmail tutorial.</strong></a>
                            </li>
                            <li class="step2-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                Here you can adjust your spam protection level. By default it’s set to “Normal with Quarantine enabled” which is the recommended setting. “Quarantine enabled” means that the spam messages will go to your <a href="support/email/spam/folder.php"><strong>Spam folder</strong></a> for 7 days instead of being deleted immediately. If you have any questions about adjusting these settings please <a href="contact-us"><strong>contact tech support</strong></a>. <br><br>You can also add addresses to your <strong>Whitelist</strong> and <strong>Blacklist</strong> as well as add terms to the <strong>Subject Blacklist</strong>. The Whitelist is a list of addresses that you always want to receive mail from. The Blacklist is, the opposite, a list of addresses you never want to receive mail from. The Subject Blacklist is a list of terms you want to block from the subject of messages coming in (ex. “pharmaceutical”, “offers”, etc.)
                            </li>
                            <li class="step4-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                You can enter a domain address if you want to allow all messages from that domain (ex. “@domain.com”). It’s the same process to add an address (or domain) to your <strong>Blacklist</strong> or adding terms to the <strong>Subject Blacklist</strong>.
                            </li>
                            <h5>Hover over the image to zoom.</h5>
                        </div>
                        <h3 class="blue">Spam Settings</h3>

                        <p>This tutorial shows you how to access your spam settings and add addresses to your Whitelist/Blacklist.</p>

                        <h5>Click on the steps to show the screen shots.</h5>

                        <div class="tutorial-txt visible-desktop">
                            <li><a class="step1" href="#"><strong>Step 1.</strong> Log into webmail.</a></li>
                            <li><a class="step2" href="#"><strong>Step 2.</strong> Click on <strong>"Spam Settings"</strong>.</a></li>
                            <li><a class="step3" href="#"><strong>Step 3.</strong> To add an address to your Whitelist click on <strong>“From: Whitelist.”</strong></a></li>
                            <li><a class="step4" href="#"><strong>Step 4.</strong> Enter the email address in the field and click <strong>“Add.”</strong></a></li>
                        </div>

                        <div class="tutorial-txt hidden-desktop">
                            <li><a class="" href="img/tutorials/spam/spam-settings-mail.web-ster.com-1-big.png"><strong>Step 1.</strong> Log into webmail.</a></li>
                            <li><a class="" href="img/tutorials/spam/spam-settings-mail.web-ster.com-2-big.png"><strong>Step 2.</strong> Click on <strong>"Spam Settings"</strong>.</a></li>
                            <li><a class="" href="img/tutorials/spam/spam-settings-mail.web-ster.com-3-big.png"><strong>Step 3.</strong> To add an address to your Whitelist click on <strong>“From: Whitelist.”</strong></a></li>
                            <li><a class="" href="img/tutorials/spam/spam-settings-mail.web-ster.com-4-big.png"><strong>Step 4.</strong> Enter the email address in the field and click <strong>“Add.”</strong></a></li>
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