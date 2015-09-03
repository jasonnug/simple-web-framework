<?php /* Smarty version Smarty-3.1.11, created on 2013-05-22 08:37:29
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/millenium.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88578433519c0a7f728114-56396299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b71d7e35397e8df057111cabb8a619432d6aed7' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/millenium.tpl',
      1 => 1369237048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88578433519c0a7f728114-56396299',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519c0a7f7fb302_76055721',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519c0a7f7fb302_76055721')) {function content_519c0a7f7fb302_76055721($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <a href="img/remotes/millenium-setup.png"><img class="right" style="width:20%;" src="img/remotes/millenium-setup.png" /></a>

                    <h3 class="blue">Millenium Remote</h3>

                    <div class="alert alert-error">
                        <strong>NOTE:</strong> This is a discontinued model of remote and is not currently fully functional with TV service. It's recommended you bring remotes of this model into the Canby Telcom office to replace for <a href="support/tv/titan.php"><strong>Titan</strong></a> remotes.<br>
                        If you have any questions about replacing your remote please <a href="contact-us"><strong>contact Tech Support</strong></a>.
                    </div>
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