<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 14:14:43
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/computer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1804728725196913ee7cc41-72474551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7179a6e0b1c386f1a1682407d42bf8ca4fd39364' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/computer.tpl',
      1 => 1369162295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1804728725196913ee7cc41-72474551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5196913eeee701_08662696',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5196913eeee701_08662696')) {function content_5196913eeee701_08662696($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <a href="img/pc-eth.png"><img class="" style="float:right;width:50%;" src="img/pc-eth.png" /></a>

                    <h3 class="blue">Computer</h3>
                    

                    <p>Connect an Ethernet cord to the port on the back of your computer as shown. Connect the other end of the ethernet cord to your <a href="support/internet/router.php"><strong>router</strong></a> or <a href="support/internet/dsl-modem.php"><Strong>modem</strong></a> depending on what you are using. You could also have a <a href="support/internet/fiber.php"><strong>fiber connection</strong>.</a></p> 

                    <p>Your computer should automatically establish a connection. If it doesn't, try restarting your computer.</p>
                    <br><br>
                    <a class="btn btn-large btn-info" href="support/internet/lan-settings.php">
                        <div class="big left" style="margin: 0 10px 0 -5px;">?</div>
                        <strong>Tutorial: </strong>If your still having trouble connecting to the Internet check your LAN settings.
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