<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 11:55:10
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-webmail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12335207745193a83a138de0-76869827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e7d5831cf289f1cb2a0c56d809461470eb993d5' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-webmail.tpl',
      1 => 1369162296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12335207745193a83a138de0-76869827',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5193a83a1924d8_34234346',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5193a83a1924d8_34234346')) {function content_5193a83a1924d8_34234346($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                        <li><a href="support/email/start">Getting Started</a> <span class="divider">/</span></li>
                        <li class="active">Canby Webmail</li>
                    </ul>
                    <div id="tutorial">
                        <div id="webmail-img" class="tutorial-img visible-desktop">
                            <a class="step1" href="img/tutorials/webmail/webmail-1-big.png"><li>Step 1.</li></a>
                            <a class="step2" href="img/tutorials/webmail/webmail-2-big.png"><li>Step 2.</li></a>
                            <a class="step3" href="img/tutorials/webmail/webmail-3-big.png"><li>Step 3.</li></a>
                            <a class="step4" href="img/tutorials/webmail/webmail-4-big.png"><li>Step 4.</li></a>
                        
                            <li class="step4-info">
                                <a class="close right" style="width:auto;" data-dismiss="alert" href="#">&times;</a>
                                <strong>Note:</strong> This will only show messages that are on the mail server. If you don't see all your email here you may have an email program set up on a home computer where all your received messages are being stored.</strong>
                            </li>

                            <h5>Hover over the image to zoom.</h5>
                        </div>
                        <h3 class="blue">Canby Webmail</h3>
                        
                        <p>This tutorial shows you how to access your email with the <a href="http://home.canby.com" target="blank">Canby Webmail</a>.</p>
                        <h5>Click on the steps to show the screen shots.</h5>

                        <div class="tutorial-txt visible-desktop">
                            <li><a class="step1" href="#"><strong>Step 1.</strong> Open your favorite web browser (e.g. Internet Explorer, Firefox, Chrome, etc.) and go to <strong>home.canby.com.</strong></a></li>
                            <li><a class="step2" href="#"><strong>Step 2.</strong> Enter your email address and password and click <strong>login</strong>.</a></li>
                            <li><a class="step3" href="#"><strong>Step 3.</strong> Click on the button that says: <strong>Webmail.</strong></a></li>
                            <li><a class="step4" href="#"><strong>Step 4.</strong> That will open a new window with your inbox.</a></li>
                        </div>
                        
                        <div class="hidden-desktop">
                            <a class="step1" href="img/tutorials/webmail/webmail-1-big.png"><strong>Step 1.</strong> Open your favorite web browser (e.g. Internet Explorer, Firefox, Chrome, etc.) and go to <strong>home.canby.com.</strong></a><br>
                            <a class="step2" href="img/tutorials/webmail/webmail-2-big.png"><strong>Step 2.</strong> Enter your email address and password and click <strong>login</strong>.</a><br>
                            <a class="step3" href="img/tutorials/webmail/webmail-3-big.png"><strong>Step 3.</strong> Click on the button that says: <strong>Webmail.</strong></a><br>
                            <a class="step4" href="img/tutorials/webmail/webmail-4-big.png"><strong>Step 4.</strong> That will open a new window with your inbox.</a><br>
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