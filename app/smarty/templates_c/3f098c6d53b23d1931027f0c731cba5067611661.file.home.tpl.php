<?php /* Smarty version Smarty-3.1.11, created on 2013-03-05 14:29:56
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3/smarty/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67697399951314e40a880a6-33627316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f098c6d53b23d1931027f0c731cba5067611661' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3/smarty/templates/home.tpl',
      1 => 1362500970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67697399951314e40a880a6-33627316',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51314e40aad643_25601457',
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
<?php if ($_valid && !is_callable('content_51314e40aad643_25601457')) {function content_51314e40aad643_25601457($_smarty_tpl) {?><div class="container top-section">
    <div class="home-img">
        <div class="row-fluid">
            <div class="vertfiller30"></div>
            <div class="">
                <div class="span6">
                    <a class="res-link" href="residential"><img src="img/residential.png" oversrc="img/residential-hover.png"></a>
                </div>
                <div class="span6">
                    <a class="bus-link" href="#"><img src="img/business.png" oversrc="img/business-hover.png"></a>
                </div>
            </div>
            <div class="vertfiller5"></div>
        </div>
    </div>
</div>

<div class="container shadow-top">
    <div class="row">
        <div class="span12">
        </div>
    </div>
</div>

<div class="mid-section">
    <div class="container">
        <div class="row-fluid">
            <div class="span4 mid-item">
                <a href="<?php echo $_smarty_tpl->tpl_vars['midlink1']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['midimg1']->value;?>
" oversrc="<?php echo $_smarty_tpl->tpl_vars['midover1']->value;?>
"></a>
                
            </div>
            <div class="span4 mid-item">
                <a href="<?php echo $_smarty_tpl->tpl_vars['midlink2']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['midimg2']->value;?>
" oversrc="<?php echo $_smarty_tpl->tpl_vars['midover2']->value;?>
"></a>
                
            </div>
            <div class="span4 mid-item">
                <a href="<?php echo $_smarty_tpl->tpl_vars['midlink3']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['midimg3']->value;?>
" oversrc="<?php echo $_smarty_tpl->tpl_vars['midover3']->value;?>
"></a>
                
            </div>
        </div>
    </div>
</div>

<div class="container shadow-bottom">
    <div class="row">
        <div class="span12">

        </div>
    </div>
</div><?php }} ?>