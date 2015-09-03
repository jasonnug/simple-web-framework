<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 14:11:49
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/fiber.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8075935935193fc6b68d383-69709843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3d0f6ed73b24933f71977574b32bd3e60d472c2' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/fiber.tpl',
      1 => 1369162297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8075935935193fc6b68d383-69709843',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5193fc6b75e6c0_56090918',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5193fc6b75e6c0_56090918')) {function content_5193fc6b75e6c0_56090918($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <a href="img/fiber-connections.png"><img class="hidden-phone" style="float:right;width:50%;" src="img/fiber-connections.png" /></a>
                    <a href="img/fiber-connections.png"><img class="visible-phone" style="float:right;width:50%;" src="img/fiber-connections.png" /></a>
                    <h3 class="blue">Fiber</h3>
                    <p>With a fiber connection the setup is pretty easy because you don't need a modem. There should be an Ethernet jack installed in your house that is wired for the internet. All you do is connect an Ethernet cord from that jack to either your computer or router depending on what you want to connect.</p>
                    <div class="alert alert-info"><strong>NOTE:</strong> If you have Canby Telcom's <a href="internet/wifi">Managed WiFi</a> service, you will have been provided a router.<br><a href="support/wifi"><strong>Click here for more detailed instructions on setting up Canby Telcom's Managed WiFi.</strong></a></div>

                    <a class="btn btn-large btn-warning" href="support/internet/fiber-power.php">
                        <div class="big left" style="margin: 0 6px 0 -5px;">?</div>
                        If you are already hooked up but have lost Internet/TV service you may need to <strong>check the power outlet</strong> for your fiber equipment.
                    </a>
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