<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 14:30:23
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/wifi-setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1169659199519b9b99b1cae9-85708018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76d3b45b405666e854c694392792eec77317625b' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/wifi-setup.tpl',
      1 => 1369171822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1169659199519b9b99b1cae9-85708018',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519b9b99c182f7_00107649',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519b9b99c182f7_00107649')) {function content_519b9b99c182f7_00107649($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <h3 class="blue">Canby Telcom Managed WiFi Routers</h3>

                    <div id="wifi">
                        <p>If you have <a href="internet/wifi">Canby Telcom's Managed WiFi</a> service with us you will have a router. Below are the possible router types you may have. Click on one for a setup guide and information.</p>

                        <div class="row-fluid">
                            <div class="span6">
                                <a href="support/internet/dsl-visionnet-wifi.php"><h4>Wireless VisionNet M505N</h4></a>
                                <a href="support/internet/dsl-visionnet-wifi.php"><img class="margin20" style="width:50%;" src="img/modems/visionnetm505n-bsg-wifi-front.png"></a>
                                <ul>
                                    <li><a href="support/internet/dsl-visionnet-wifi.php"><strong>DSL Installation</strong></a></li>
                                    <li><a href="support/internet/fiber-visionnet-wifi.php"><strong>Fiber Installation</strong></a></li>
                                    <li><a href="support/internet/wifi-win7-connect.php"><strong>Connecting a wireless computer</strong></a></li>
                                </ul>
                            </div>
                            <div class="span6">
                                <a href="support/internet/dsl-clearaccess.php"><h4>Clear Access AG10W</h4></a>
                                <a href="support/internet/dsl-clearaccess.php"><img class="margin20" style="width:50%;" src="img/modems/clearaccessag10w-front.png"></a>
                                <ul>
                                    <li><a href="support/internet/dsl-clearaccess-wifi.php"><strong>DSL Installation</strong></a></li>
                                    <li><a href="support/internet/fiber-clearaccess-wifi.php"><strong>Fiber Installation</strong></a></li>
                                    <li><a href="support/internet/wifi-win7-connect.php"><strong>Connecting a wireless computer</strong></a></li>
                                </ul>
                            </div>
                        </div>
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