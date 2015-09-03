<?php /* Smarty version Smarty-3.1.11, created on 2013-05-22 14:19:26
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/software.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1650260747519d33bbeee9a9-76584198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bc9c95f9dd19a5e56bb736dc6000d053701645d' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/software.tpl',
      1 => 1369257565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1650260747519d33bbeee9a9-76584198',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519d33bc014fc4_46581683',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519d33bc014fc4_46581683')) {function content_519d33bc014fc4_46581683($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <div class="row-fluid">
                        <div class="span3">
                            <a href="internet/secureitplus" target="blank">
                                <img class="padding" style="float: none;" src="img/secureit-icon.png" /><br>
                                <strong>SecureIT Plus&#x2120; Virus Protection</strong>
                            </a><br>
                            <p>SecureIT Virus Protection service which includes: anti-virus and anti-spyware, firewall, Microsoft patch updates, pop-up blocking, free 24/7 technical support and more. <br><a href="contact-us">Contact Canby Telcom</a> for more information.</p>
                        </div>
                        <div class="span3">
                            <a href="http://www.avg.com/us-en/homepage" target="blank">
                                <img class="padding" style="float: none;" src="img/avg-icon.png" /><br>
                                <strong>AVG Anti-Virus</strong>
                            </a><br>
                            <p>Anti-virus program that is great for basic protection. They also offer an Internet Security Suite.</p>
                        </div>
                        <div class="span3">
                            <a href="http://www.avast.com/en-us/index" target="blank">
                                <img class="padding" style="float: none;" src="img/avast-icon.png" /><br>
                                <strong>Avast Anti-Virus</strong>
                            </a><br>
                            <p>Anti-virus protection as well as other producs.</p>
                        </div>
                        <div class="span3">
                            <a href="http://www.malwarebytes.org" target="blank">
                                <img class="padding" style="float: none;" src="img/mbam-icon.png" /><br>
                                <strong>Malwarebytes</strong>
                            </a><br>
                            <p>Anti-malware manual scanning program that is great for cleaning up an infected computer.</p>
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