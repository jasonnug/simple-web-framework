<?php /* Smarty version Smarty-3.1.11, created on 2013-05-15 14:53:37
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/fiber-power.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6945741575193fe625e2e83-13921399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dc77074dd98b154ca83df649f10b27d903dd03e' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/fiber-power.tpl',
      1 => 1368654816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6945741575193fe625e2e83-13921399',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5193fe6263f8e8_36753934',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5193fe6263f8e8_36753934')) {function content_5193fe6263f8e8_36753934($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
">
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
                    <ul class="breadcrumb">
                        <li><a href="support/internet">Internet</a> <span class="divider">/</span></li>
                        <li><a href="support/internet/fiber.php">Fiber</a> <span class="divider">/</span></li>
                        <li class="active">Fiber Power</li>
                    </ul>
                    <a href="img/gfci.png"><img class="hidden-phone" style="float:right;width:40%;" src="img/gfci.png" /></a>
                    <h3 class="blue">Fiber Power</h3>
                    <a href="img/gfci.png"><img class="visible-phone" style="float:right;width:50%;" src="img/gfci.png" /></a>
                    <p> When you lose TV/internet service on fiber it often means that a recent power surge or outage has caused the GFCI outlet to "trip" and just needs to be reset. </p>
                    <ul>
                        <li>Look for the outlet where your fiber equipment is installed (usually in the garage or outside).</li>
                        <li>Check for the <strong>Reset Button</strong> and press it.</li>
                    </ul>
                    <p> It sometimes takes a couple minutes for the power to be restored and service to start working. If you can't find the GFCI outlet or still don't have TV/Internet please <a href="contact-us" class="bold">call tech support</a>.</p>
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