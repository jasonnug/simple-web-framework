<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 11:55:07
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4698425345192ce5f785611-54061582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '523444a41d20d6fceaa144ef0c22763375e90a76' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email-settings.tpl',
      1 => 1369162296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4698425345192ce5f785611-54061582',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5192ce5f811118_66905511',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5192ce5f811118_66905511')) {function content_5192ce5f811118_66905511($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <h3 class="orange">Email Settings</h3>
                    <p>These are the general server settings when setting up email as a POP or IMAP account.</p>
                    <h4 class="gray">Incoming Mail Server (POP or IMAP):</h4>
                    <div class="mail-settings">
                        <ul>
                            <li>Host name: <strong>mail.web-ster.com</strong></li>
                            <li>Username: <strong>your full email address</strong></li>
                            <li>Password: <strong>your password</strong></li>
                            <li>Server port: <strong>995 (POP) 993 (IMAP)</strong></li>
                            <li>SSL or secure connection: <strong>on</strong></li>
                        </ul>
                    </div>
                    <h4 class="gray">Outgoing Mail Server:</h4>
                    <div class="mail-settings">
                        <ul>
                            <li>Host name: <strong>mail.web-ster.com</strong></li>
                            <li>Username: <strong>your full email address</strong></li>
                            <li>Password: <strong>your password</strong></li>
                            <li>Server port: <strong>587</strong></li>
                            <li>SSL or secure connection: <strong>on</strong></li>
                        </ul>
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