<?php /* Smarty version Smarty-3.1.11, created on 2013-05-23 09:44:11
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/support/virus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1175751207519e475b853aa1-66915770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '827a39545ad1304135add1711dcfbdcd460f012c' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/support/virus.tpl',
      1 => 1369260592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1175751207519e475b853aa1-66915770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519e475b8af635_99433458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519e475b8af635_99433458')) {function content_519e475b8af635_99433458($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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