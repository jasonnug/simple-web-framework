<?php /* Smarty version Smarty-3.1.11, created on 2013-05-22 13:51:43
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/virus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1981236842519d2d0cc65515-89424687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27ea0ae2aadf5922afc5da33e40ef6b5f6ad347d' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/virus.tpl',
      1 => 1369255872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1981236842519d2d0cc65515-89424687',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519d2d0cceda43_08625513',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519d2d0cceda43_08625513')) {function content_519d2d0cceda43_08625513($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <img class="right" src="img/error-warning.png" />

                    <h3 class="blue">Virus and Malware</h3>

                    <p>Malware is any kind of virus, spyware, adware etc. that is either malicious or unwanted. Malware can cause performance problems on your computer as well as contribute to the loss of important files and personal information including identity theft. It's recommended you have some sort of anti-virus software installed with your computer. </p>

                    <a href="support/internet/software.php"><strong>Click here for recommended software.</strong></a><br><br>

                    If your computer is beyond your ability to work with and you need help, Canby Telcom has a <a href="support/internet/repair.php"><strong>repair service.</strong></a>
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