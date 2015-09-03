<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 14:11:51
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dial-up.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1219282228519aa1598dc267-60018225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a597e4b06c7390e23fffa83f35d2465b95bd7a6' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dial-up.tpl',
      1 => 1369162295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1219282228519aa1598dc267-60018225',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519aa15993aa35_45919504',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519aa15993aa35_45919504')) {function content_519aa15993aa35_45919504($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <a href="img/dial-connection.png"><img class="right" src="img/dial-connection.png" alt="Dial-up connections."></a>

                    <h3 class="blue">Dial-up</h3>

                    <p>A router allows multiple computers to share one Internet connection, either with Ethernet cables or wireless. Here are the basic steps for hooking up a generic router on a DSL connection:<br></p>
                    <ul>
                        <li>All you need to connect is a regular telephone cord to your computer from a phone outlet.</li>
                        <li>If your computer has a modem it will have a regular telephone port where you will connect the cable.</li>
                        <li>Make sure the telephone outlet your connecting to has a dial-tone. To test this you can hook a regular phone to the outlet and listen for dial-tone.</li>
                    </ul>
                    
                    <a class="btn btn-info btn-large" href="support/internet/dial-up-tutorial.php">
                        <span class="big" style="margin: 0 5px 0 -5px;">?</span>
                        <strong>Tutorial: </strong>Once you have your computer connected you will need to <strong>Set Up a Dial-up Connection.</strong>
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