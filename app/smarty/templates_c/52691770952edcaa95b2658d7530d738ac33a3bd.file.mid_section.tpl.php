<?php /* Smarty version Smarty-3.1.11, created on 2012-12-14 08:22:46
         compiled from "..\smarty\templates\mid_section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2232550ca6833e61db0-84509668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52691770952edcaa95b2658d7530d738ac33a3bd' => 
    array (
      0 => '..\\smarty\\templates\\mid_section.tpl',
      1 => 1355502152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2232550ca6833e61db0-84509668',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50ca6833eddb12_64099801',
  'variables' => 
  array (
    'midlink1' => 0,
    'midimg1' => 0,
    'midover1' => 0,
    'midlink2' => 0,
    'midimg2' => 0,
    'midover2' => 0,
    'midlink3' => 0,
    'midimg3' => 0,
    'midover3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ca6833eddb12_64099801')) {function content_50ca6833eddb12_64099801($_smarty_tpl) {?><div class="mid-section">
    <div class="container">
        <div class="row">
            <div class="span4 mid-item">
                <a href="<?php echo $_smarty_tpl->tpl_vars['midlink1']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['midimg1']->value;?>
" oversrc="<?php echo $_smarty_tpl->tpl_vars['midover1']->value;?>
"></a>
                <div class="shadow-mid-bottom"></div>
            </div>
            <div class="span4 mid-item">
                <a href="<?php echo $_smarty_tpl->tpl_vars['midlink2']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['midimg2']->value;?>
" oversrc="<?php echo $_smarty_tpl->tpl_vars['midover2']->value;?>
"></a>
                <div class="shadow-mid-bottom"></div>
            </div>
            <div class="span4 mid-item">
                <a href="<?php echo $_smarty_tpl->tpl_vars['midlink3']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['midimg3']->value;?>
" oversrc="<?php echo $_smarty_tpl->tpl_vars['midover3']->value;?>
"></a>
                <div class="shadow-mid-bottom"></div>
            </div>
        </div>
    </div>
</div><?php }} ?>