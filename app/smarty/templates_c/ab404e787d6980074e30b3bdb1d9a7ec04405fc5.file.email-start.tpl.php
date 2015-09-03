<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 11:51:47
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-start.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4132325855192c53e7304f8-75040709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab404e787d6980074e30b3bdb1d9a7ec04405fc5' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-start.tpl',
      1 => 1369162296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4132325855192c53e7304f8-75040709',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5192c53e813143_96434620',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5192c53e813143_96434620')) {function content_5192c53e813143_96434620($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <img style="width: 200px;" class="right" src="img/mail-generic.png">
                    <h3 class="orange">Email - Getting Started</h3>
                    <p>You can access your email a variety of different ways. The most common ways are using the <a href="http://home.canby.com" target="_blank">Canby Webmail</a> or setting up email in an email client program such as Windows Live Mail, Outlook or Mac Mail. <br><br>
                    Below are a few tutorials for the various ways to access or setup your email account:</p>
                    <div id="blocks">
                        <div class="block">
                            <a href="support/email/webmail.php">
                                <img src="img/canby_logo.png">
                                <div><strong>Canby Webmail</strong></div>
                            </a>
                        </div>
                        <div class="block">
                            <a href="support/email/windows-live-mail.php">
                                <img src="img/windows-live-mail_logo.png">
                                <div><strong>Windows Live Mail</strong></div>
                            </a>
                        </div>
                        <div class="block">
                            <a href="support/email/outlook-2010.php">
                                <img src="img/outlook-2010_logo.png">
                                <div><strong>Outlook 2010</strong></div>
                            </a>
                        </div>
                        <div class="block">
                            <a href="support/email/outlook-express.php">
                                <img src="img/outlook-express_logo.png">
                                <div><strong>Outlook Express</strong></div>
                            </a>
                        </div>
                        <div class="block">
                            <a href="support/email/android.php">
                                <img src="img/android_logo.png">
                                <div><strong>Android</strong></div>
                            </a>
                        </div>
                        <div class="block">
                            <a href="support/email/iOS.php">
                                <img src="img/iphone-email-icon.png">
                                <div><strong>iPhone</strong></div>
                            </a>
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