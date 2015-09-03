<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 16:39:51
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/remotes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2003266818519c0322b97fc3-85325049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38dc03f8ba71459f4c7e32347ae6d8420efdbe52' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/remotes.tpl',
      1 => 1369179589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2003266818519c0322b97fc3-85325049',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519c0322c1f540_45155033',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519c0322c1f540_45155033')) {function content_519c0322c1f540_45155033($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <h3 class="blue">Remote Control Setup</h3>

                    <p>When you sign up for TV service you will be provided a remote for each <a href="http://en.wikipedia.org/wiki/Set-top_box" target="_blank"><strong>Set-Top Box</strong></a> installed. The Installation and Repair Technician will make sure the remote is set up for you but incase you get a new TV or your remote had to be replaced you may need to reprogram it.</p>
                    <p>Below are the possible remote types you may have. Click on one for a setup guide and some information.</p>
                    <div class="row-fluid">
                        <div class="span1"></div>
                        <div class="span2">
                            <a href="support/tv/titan.php"><h4>Titan</h4></a><br>
                            <a href="support/tv/titan.php"><img src="img/remotes/titan.png" /></a>
                        </div>
                        <div class="span2"></div>
                        <div class="span2">
                            <a href="support/tv/polaris.php"><h4>Polaris</h4></a><br>
                            <a href="support/tv/polaris.php"><img src="img/remotes/polaris.png" /></a>
                        </div>
                        <div class="span2"></div>
                        <div class="span2">
                            <a href="support/tv/millenium.php"><h4>Millenium</h4></a><br>
                            <a href="support/tv/millenium.php"><img src="img/remotes/millenium.png" /></a>
                        </div>
                        <div class="span1"></div>
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