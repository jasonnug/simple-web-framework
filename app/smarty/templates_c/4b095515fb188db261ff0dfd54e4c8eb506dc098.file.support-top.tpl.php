<?php /* Smarty version Smarty-3.1.11, created on 2013-05-23 09:44:07
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/support-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1755917671519e4757d54414-62777957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b095515fb188db261ff0dfd54e4c8eb506dc098' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/support-top.tpl',
      1 => 1369260580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1755917671519e4757d54414-62777957',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menus' => 0,
    'menu' => 0,
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519e4757df2459_03057691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519e4757df2459_03057691')) {function content_519e4757df2459_03057691($_smarty_tpl) {?><div class="container">
    <div class="row-fluid">
        <div class="span12 top-section support-top">
            <div class="row-fluid">
                <div class="span6">
                </div>
                <div class="span6 top-content">
                    <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['menu']->value->menuName==$_smarty_tpl->tpl_vars['subSubMenu']->value){?>
                            <h1 class="orange"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['menu']->value->title, 'UTF-8');?>
 SUPPORT</h1>
                            <?php if ($_smarty_tpl->tpl_vars['subSubMenu']->value=="support-internet"){?>
                                <h4 class="gray">Quick Links: </h4>
                                <ul>
                                    <li><a href="support/internet/dsl-modem.php">Modem Troubleshooting</a></li>
                                    <li><a href="support/internet/lan-settings.php">LAN Settings</a></li>
                                    <li><a href="support/internet/dsl-visionnet.php">VisionNet Modem Setup</a></li>
                                </ul>
                            <?php }elseif($_smarty_tpl->tpl_vars['subSubMenu']->value=="support-email"){?>
                                <h4 class="gray">Quick Links: </h4>
                                <ul>
                                    <li><a href="support/email/start">Getting Started With Email</a></li>
                                    <li><a href="support/email/settings">POP/IMAP Settings</a></li>
                                    <li><a href="support/email/spam/folder.php">Accessing Your Spam Folder</a></li>
                                </ul>
                            <?php }elseif($_smarty_tpl->tpl_vars['subSubMenu']->value=="support-wifi"){?>
                                <h4 class="gray">Quick Links: </h4>
                                <ul>
                                    <li><a href="support/wifi/ssid.php">Wireless Password Help</a></li>
                                    <li><a href="support/wifi/wifi-win7-connect.php">Connecting a Wireless Computer</a></li>
                                    <li><a href="support/wifi/setup.php">Canby Telcom Managed WiFi</a></li>
                                </ul>
                            <?php }elseif($_smarty_tpl->tpl_vars['subSubMenu']->value=="support-tv"){?>
                                <h4 class="gray">Quick Links: </h4>
                                <ul>
                                    <li><a href="support/tv/remotes.php">Program your Remote</a></li>
                                    <li><a href="support/tv/guide-layout.php">Guide Layout</a></li>
                                    <li><a href="support/tv/dvr.php">DVR Functions</a></li>
                                </ul>
                            <?php }elseif($_smarty_tpl->tpl_vars['subSubMenu']->value=="support-virus"){?>
                                <h4 class="gray">Quick Links: </h4>
                                <ul>
                                    <li><a href="support/internet/lan-settings.php">Check Your LAN Settings</a></li>
                                    <li><a href="support/email/spam/folder.php">Access Your Spam Folder</a></li>
                                    <li><a href="support/virus/software.php">Recommended Software</a></li>
                                </ul>
                            <?php }?>
                        <?php }?>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>