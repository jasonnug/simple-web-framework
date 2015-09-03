<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 11:55:02
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-spam.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13919699705192ca4db89163-92063415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aba82d24480b5065989cba443da831b783a9d42e' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-spam.tpl',
      1 => 1369162296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13919699705192ca4db89163-92063415',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5192ca4dc11729_85633160',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5192ca4dc11729_85633160')) {function content_5192ca4dc11729_85633160($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <h3 class="orange">Spam</h3>
                    <p>Your email account has a built in spam filter so that scams, advertising and other unwanted email will not go to your inbox. You can access your spam folder and settings by going to the <a href="http://home.canby.com" target="blank">Canby Webmail</a>.</p>
                    <p>Below are some tutorials for using the webmail spam filter:</p>
                    <ul>
                        <li>
                            <a href="support/email/webmail.php"><h5>Logging into Canby Webmail</h5></a>
                            <p>This tutorial shows you how to log into the Canby Webmail.</p>
                        </li>
                        <li>
                            <a href="support/email/spam/folder.php"><h5>Accessing your Spam Folder</h5></a>
                            <p>Spam filtering isn't perfect and sometimes legitimate mail you need will accidentally get flagged as spam. This tutorial shows you how to access your spam folder and allow messages that you don't want to be filtered.</p>
                        </li>
                        <li>
                            <a href="support/email/spam/settings.php"><h5>Spam Settings</h5></a>
                            <p>This tutorial shows you how to access all the spam settings that are available as well as add addresses to your Whitelist/Blacklist.</p>
                        </li>
                    </ul>
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