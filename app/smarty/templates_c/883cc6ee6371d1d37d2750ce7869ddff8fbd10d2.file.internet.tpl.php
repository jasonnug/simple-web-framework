<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 14:14:19
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/internet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2261750435193fa8050af98-03743647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '883cc6ee6371d1d37d2750ce7869ddff8fbd10d2' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/internet.tpl',
      1 => 1369170858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2261750435193fa8050af98-03743647',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5193fa80588d09_80215851',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5193fa80588d09_80215851')) {function content_5193fa80588d09_80215851($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <h3 class="blue">Internet Troubleshooting<img style="width:20%; margin:10px;" class="right" src="img/internet-pic.png" /></h3>
                    <p>There are various types of internet connection you may have. You might have a DSL modem, a fiber connection or connect using a dial-up modem. Provided with your internet subscription is a speed rate usually in <strong>megabits per second</strong> (e.g. 3.0 Mbps). </p>

                    <div class="alert alert-info">
                        <p><strong>Note: </strong>If you are connected to the internet but think you aren't getting the full speed visit the <a href="support/internet/speed.php"><strong>internet speed troubleshooting page.</strong></a></p>
                    </div>
                    
                    <ul>
                        <li>
                            <a href="support/internet/dsl-modem.php"><h4>DSL Modem</h4></a>
                            <p>If you have DSL (<a href="http://en.wikipedia.org/wiki/Digital_Subscriber_Line" target="_blank">digital subscriber line</a>) service you will have been provided a modem (<a href="http://en.wikipedia.org/wiki/Modem" target="_blank">modulator-demodulator</a>). For modem information and setup instructions <a href="support/internet/dsl.php">click here</a>.</p>
                        </li>
                        <li>
                            <a href="support/internet/fiber.php"><h4>Fiber Optic Connection</h4></a>
                            <p>If you have <a href="internet/foz">FOz (Fiber Optic Zone)</a> service with Canby Telcom you will have Ethernet connections installed for your Internet connection and don't need a modem. When fiber is installed in your house, there will be an Ethernet jack installed specifically for Internet. Fore more information and troubleshooting tips <a href="support/internet/fiber.php">click here.</a></p>
                        </li>
                        <li>
                            <a href="support/internet/dial-up.php"><h4>Dial-Up Connection</h4></a>
                            <p>If you have a dial-up connection you will be using your computer's internal modem and will not need one from your privider. Dial-up connections are the most basic form of Internet connection and only need a telephone line with a dial tone. For help setting up your dial-up connection <a href="support/internet/dial-up.php">click here.</a></p>
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