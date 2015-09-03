<?php /* Smarty version Smarty-3.1.11, created on 2013-05-22 13:57:24
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/repair.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1894758657519d30a2e5af61-06483377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e186ccb892bc5cfc366ed3dddf33ae7699d204b' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/repair.tpl',
      1 => 1369256243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1894758657519d30a2e5af61-06483377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519d30a2ee97f6_18024561',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519d30a2ee97f6_18024561')) {function content_519d30a2ee97f6_18024561($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <img class="right margin20" style="width:200px;" src="img/computer-repair.png" />
                    <h3 class="blue">Computer Repair</h3>
                    <p>With Canby Telcom's Computer Repair Service you may bring your laptop or desktop in to have it cleaned up. If your computer is to the point where it is no longer usable and you are unable to repair it yourself, Canby Telcom's Tech Staff can usually repair it without harming your personal files or requiring a complete reformat. <a href="contact-us"><strong>Call into Tech Support</strong></a> for more information.</p>
                    <p>With <a href="mytech/mytech-remote"><strong>MyTech Remote</strong></a> you will get a discount on this service and we can often diagnose and repair the issue through our remote support software without you needing to bring in your computer.</p>
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