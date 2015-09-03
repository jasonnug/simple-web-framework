<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 11:51:44
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4417522245192b6c354a650-56632143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'facaa557cbe3161f47c0b0fa1b65330dacea7272' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/email.tpl',
      1 => 1369162296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4417522245192b6c354a650-56632143',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5192b6c360f108_91266472',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5192b6c360f108_91266472')) {function content_5192b6c360f108_91266472($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <h3 class="orange">Email</h3>
                    <p>When you start Internet service with Canby Telcom you will be provided at least one new email account. 
                    With each email account there is an associated password. If you don’t have this 
                    information, would like to change or add any email accounts please <a href="contact-us">call 
                    in to tech support.</a></p>

                    <ul>
                        <li>
                            <a href="support/email/start"><h4>Getting Started with Email</h4></a>
                            <p>Once you know you're email account and password you can access it a number of different ways. <a href="email/start.php">Click here</a> for an introduction to your email account and various tutorials on setting and accessing your email.</p>
                        </li>
                        <li>
                            <a href="support/email/spam"><h4>Spam Filter and Settings</h4></a>
                            <p>For more information on accessing your spam filter and accessing the spam folder and settings <a href="support/email/spam">click here.</a></p>
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