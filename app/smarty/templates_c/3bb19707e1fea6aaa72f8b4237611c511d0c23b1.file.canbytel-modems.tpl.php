<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 11:48:36
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/canbytel-modems.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147477124351941915709e17-82111660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bb19707e1fea6aaa72f8b4237611c511d0c23b1' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/canbytel-modems.tpl',
      1 => 1369162102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147477124351941915709e17-82111660',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51941915770e85_45383407',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51941915770e85_45383407')) {function content_51941915770e85_45383407($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <h3 class="blue">Canby Telcom Modems</h3>

                    <div id="dsl">
                        <p>If you have High-Speed Internet over a DSL connection with Canby Telcom you will have one of the following modem types. Click on one for a setup guide and more information.</p>
                        <div id="dsl-modems" class="visible-desktop">
                            <h4 class="gray">Current modems</h4>
                            <div class="row-fluid">
                                <div class="span4 modem">
                                    <a href="support/internet/dsl-visionnet.php"><img src="img/modems/visionnetm504-bsg-front.png" /></a><br>
                                    <a href="support/internet/dsl-visionnet.php">VisionNet M504</a>
                                </div>
                                <div class="span4 modem">
                                    <a href="support/internet/dsl-visionnet-wifi.php"><img src="img/modems/visionnetm505n-bsg-wifi-front.png"></a><br>
                                    <a href="support/internet/dsl-visionnet-wifi.php">Wireless VisionNet M505N</a><br>
                                </div>
                                <div class="span4 modem">
                                    <a href="support/internet/dsl-clearaccess.php"><img src="img/modems/clearaccessag10w-front.png"></a><br>
                                    <a href="support/internet/dsl-clearaccess.php">Clear Access AG10W</a>
                                </div>
                            </div>
                            <h4 class="gray">Discontinued modems</h4>
                            <div class="row-fluid">
                                <div class="modem-other span3 clearfix">
                                    <a href="support/internet/dsl-bestdata502e.php"><img src="img/modems/bestdata502etop.png"></a><br>
                                    <a href="support/internet/dsl-bestdata502e.php">Best Data 502E</a>
                                </div>
                                <div class="modem-other span3 clearfix">
                                    <a href="support/internet/dsl-bestdataas540.php"><img src="img/modems/bestdataas540top.png"></a><br>
                                    <a href="support/internet/dsl-bestdataas540.php">Best Data AS540</a>
                                </div>
                                <div class="modem-other span3 clearfix">
                                    <a href="support/internet/dsl-bestdatadsl800eu.php"><img src="img/modems/bestdatadsl800eu-front.png"></a><br>
                                    <a href="support/internet/dsl-bestdatadsl800eu.php">Best Data DSL800EU</a>
                                </div>
                                <div class="modem-other span3 clearfix">
                                    <a href="support/internet/dsl-bestdata602.php"><img src="img/modems/bestdata602-top.png"></a><br>
                                    <a href="support/internet/dsl-bestdata602.php">Best Data DSL602</a>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-desktop">
                            <h4 class="gray">Current modems</h4>
                            <div class="row-fluid">
                                <div class="span4">
                                    <a href="support/internet/dsl-visionnet.php"><img style="width:100px; padding: 5px;" src="img/modems/visionnetm504-bsg-front.png" /> VisionNet M504</a>
                                </div>
                                <div class="span4">
                                    <a href="support/internet/dsl-visionnet-wifi.php"><img style="width:100px; padding: 5px;" src="img/modems/visionnetm505n-bsg-wifi-front.png"> Wireless VisionNet M505N</a>
                                </div>
                                <div class="span4">
                                    <a href="support/internet/dsl-clearaccess.php"><img style="width:100px; padding: 5px;" src="img/modems/clearaccessag10w-front.png"> Clear Access AG10W</a>
                                </div>
                            </div>
                            <h4 class="gray">Discontinued modems</h4>
                            <div class="row-fluid">
                                <div class="span3">
                                    <a href="support/internet/dsl-bestdata502e.php"><img style="width:60px; padding: 5px;" src="img/modems/bestdata502etop.png">Best Data 502E</a>
                                </div>
                                <div class="span3">
                                    <a href="support/internet/dsl-bestdataas540.php"><img style="width:60px; padding: 5px;" src="img/modems/bestdataas540top.png"> Best Data AS540</a>
                                </div>
                                <div class="span3">
                                    <a href="support/internet/dsl-bestdatadsl800eu.php"><img style="width:60px; padding: 5px;" src="img/modems/bestdatadsl800eu-front.png"> Best Data DSL800EU</a>
                                </div>
                                <div class="span3">
                                    <a href="support/internet/dsl-bestdata602.php"><img style="width:60px; padding: 5px;" src="img/modems/bestdata602-top.png"> Best Data DSL602</a>
                                </div>
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