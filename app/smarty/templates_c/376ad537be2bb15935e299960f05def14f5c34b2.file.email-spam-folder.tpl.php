<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 14:24:42
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-spam-folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8132868995193f6ecae38d5-65603565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '376ad537be2bb15935e299960f05def14f5c34b2' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-spam-folder.tpl',
      1 => 1369162296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8132868995193f6ecae38d5-65603565',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5193f6ecb69b24_70262181',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5193f6ecb69b24_70262181')) {function content_5193f6ecb69b24_70262181($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                        <li><a href="support/email">Email</a> <span class="divider">/</span></li>
                        <li><a href="support/email/spam">Spam</a> <span class="divider">/</span></li>
                        <li class="active">Spam Folder</li>
                    </ul>
                    <div id="tutorial">
                        <div id="spam-folder-img" class="tutorial-img visible-desktop">
                            <a class="step1" href="img/tutorials/spam/spam-mail.web-ster.com-1-big.png"><li>Step 1.</li></a>
                            <a class="step2" href="img/tutorials/spam/spam-mail.web-ster.com-2-big.png"><li>Step 2.</li></a>
                            <a class="step3" href="img/tutorials/spam/spam-mail.web-ster.com-3-big.png"><li>Step 3.</li></a>
                            <a class="step4" href="img/tutorials/spam/spam-mail.web-ster.com-4-big.png"><li>Step 4.</li></a>

                            <li class="step1-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                If you need help logging in, go to the <a href="support/email/webmail.php"><strong>Webmail tutorial.</strong></a>
                            </li>

                            <li class="step2-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                Here and you can view all the messages that got filtered as spam in the last 7 days. Sometimes a legitimate message gets accidentally filtered as spam and ends up here. To fix that click on the message to open it.
                            </li>

                            <li class="step3-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                This will move the message to your inbox and put that person’s address in your Whitelist which will allow messages from them in the future to come through.
                            </li>

                            <h5>Hover over the image to zoom.</h5>
                        </div>
                        <h3 class="blue">Spam Folder</h3>

                        <p>This tutorial shows you how to access your spam folder and allow a sender.</p>

                        <h5>Click on the steps to show the screen shots.</h5>

                        <div class="tutorial-txt visible-desktop">
                            <li><a class="step1" href="#"><strong>Step 1.</strong> Log into the webmail, click on the <strong>“Spam”</strong> folder on the lower left. </a></li>
                            <li><a class="step2" href="#"><strong>Step 2.</strong> This will open your spam folder. Click on a legitimate email.</a></li>
                            <li><a class="step3" href="#"><strong>Step 3.</strong> Then click on <strong>“Allow Sender”</strong> in the options.</a></li>
                        </div>
                        <div class="tutorial-txt hidden-desktop">
                            <li><a class="" href="img/tutorials/spam/spam-mail.web-ster.com-1-big.png"><strong>Step 1.</strong> Log into the webmail, click on the <strong>“Spam”</strong> folder on the lower left. </a></li>
                            <li><a class="" href="img/tutorials/spam/spam-mail.web-ster.com-1-big.png"><strong>Step 2.</strong> This will open your spam folder. Click on a legitimate email.</a></li>
                            <li><a class="" href="img/tutorials/spam/spam-mail.web-ster.com-1-big.png"><strong>Step 3.</strong> Then click on <strong>“Allow Sender”</strong> in the options.</a></li>
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