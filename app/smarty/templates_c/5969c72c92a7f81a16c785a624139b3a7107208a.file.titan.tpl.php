<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 16:44:51
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/titan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155430788519c066fe2fce3-21932907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5969c72c92a7f81a16c785a624139b3a7107208a' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/titan.tpl',
      1 => 1369179890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155430788519c066fe2fce3-21932907',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519c066fef1120_62225668',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519c066fef1120_62225668')) {function content_519c066fef1120_62225668($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <a href="img/remotes/titan-layout.png"><img class="right" style="width: 50%;" src="img/remotes/titan-layout.png" /></a>

                    <h3 class="blue">Titan Remote</h3> 
                    <p>To program the remote for your TV you will need to locate the codes for your TV manufacturer which can be found <a target="blank" href="support/tv/titan-remote-codes.php"><strong>here</strong></a>. Once you locate the brand of your TV in the list, there will be a list of codes to try. Start with the first code and use the following steps:</p>
                    <ol>
                        <li>Locate the <a target="blank" href="support/tv/titan-remote-codes.php"><strong>codes for your TV</strong></a>.</li>
                        <li>Turn your TV on manually or with the manufacturer's remote. </li>
                        <li>Press the <strong style="color: red;">TV</strong> button.</li>
                        <li>Press and hold the <strong style="color: red;">Setup</strong> button until the <strong>TV</strong> button light blinks twice.
                        <li>Enter the 5 digit code.</li>
                        <li>Press the <strong style="color: red;">Master Power</strong> button to test if the code worked.</li>
                        <li>If the TV turns off then the programming should be successful.</li>
                        <li>If not then repeat these steps with the next code.</li>
                    </ol>
                    <p>If you can't get any of the codes to work or have any other questions regarding issues with your remote please <a href="contact-us"><strong>contact tech support</strong></a>.</p>
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