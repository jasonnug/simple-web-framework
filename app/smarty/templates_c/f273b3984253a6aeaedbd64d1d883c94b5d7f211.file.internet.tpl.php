<?php /* Smarty version Smarty-3.1.11, created on 2013-02-25 16:47:21
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.2/smarty/templates/internet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148311969651241d720328e9-43923293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f273b3984253a6aeaedbd64d1d883c94b5d7f211' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.2/smarty/templates/internet.tpl',
      1 => 1361839640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148311969651241d720328e9-43923293',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51241d720ac894_98691038',
  'variables' => 
  array (
    'internetUses' => 0,
    'internetUse' => 0,
    'speedPackages' => 0,
    'speedPackage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51241d720ac894_98691038')) {function content_51241d720ac894_98691038($_smarty_tpl) {?>
<div id="content" data-page="internet">
    <div class="container">
        <div class="row-fluid">
            <div class="span12 top-section internet-top">
                <a href="bundles"><img class="right" style="padding: 30px 40px 5px 0;" src="img/bundle-promo-internet.png"></a>
            </div>
        </div>
    </div>

    <div class="shadow-top">
        <div class="row">
            <div class="span12">

            </div>
        </div>
    </div>

    <div class="mid-section">
        <div class="container">
            <div class="row-fluid">
                <div class="span3">
                    <div class="left-nav">
                        <ul class="nav nav-list">
                            <li class="nav-header">INTERNET SERVICES</li>
                            <li class="active"><a href="internet">Speed Packages<img class="right noborder" style="padding: 4px 0; width:10px;" src="img/right-caret.png"></a></li>
                            <li><a href="wifi">Managed WiFi<img class="right noborder" style="padding: 4px 0; width:10px;" src="img/right-caret.png"></a></li>
                            <li><a href="mytech">MyTech<img class="right noborder" style="padding: 4px 0; width:10px;" src="img/right-caret.png"></a></li>
                            <li><a href="secureitplus">SecureIT<sup>SM</sup> Plus<img class="right noborder" style="padding: 4px 0; width:10px;" src="img/right-caret.png"></a></li>
                            <li><a href="filehopperplus">FileHopper<sup>SM</sup> Plus<img class="right noborder" style="padding: 4px 0; width:10px;" src="img/right-caret.png"></a></li>
                            <li><a href="wireguard">WireGuard<img class="right noborder" style="padding: 4px 0; width:10px;" src="img/right-caret.png"></a></li>
                            <li><a href="roku">Roku<img class="right noborder" style="padding: 4px 0; width:10px;" src="img/right-caret.png"></a></li>
                        </ul>
                    </div>
                    <div class="shadow-bottom">
                        <div class="row">
                            <div class="span12">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span9 clearfix">
                    <div class="speed-choser">
                        <div class="row-fluid clearfix">
                            <div class="span3">
                                <div class="internet-uses">
                                    <span class="head3">I use my Internet to:</span>
                                    <?php  $_smarty_tpl->tpl_vars['internetUse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['internetUse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['internetUses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['internetUse']->key => $_smarty_tpl->tpl_vars['internetUse']->value){
$_smarty_tpl->tpl_vars['internetUse']->_loop = true;
?>
                                        <label class="checkbox internet-use-label"><input class="internet-use-checkbox-<?php echo $_smarty_tpl->tpl_vars['internetUse']->value->class;?>
" type="checkbox" name="internet-use" value=<?php echo $_smarty_tpl->tpl_vars['internetUse']->value->class;?>
> <?php echo $_smarty_tpl->tpl_vars['internetUse']->value->title;?>
</label>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="span9 clearfix">
                                <div class="speed-packages clearfix">
                                    <div class="shadow-right left"></div>
                                    <div class="packages-heading">INTERNET PACKAGES FOR YOU:</div>
                                    <div class="packages-list">
                                        <table class="table left clearfix">
                                            <?php  $_smarty_tpl->tpl_vars['speedPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['speedPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['speedPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['speedPackage']->key => $_smarty_tpl->tpl_vars['speedPackage']->value){
$_smarty_tpl->tpl_vars['speedPackage']->_loop = true;
?>
                                                <tr><td><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->title;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->priceText;?>
</td><td><a href="#interent/<?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->packageName;?>
">Learn More</a></td></tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shadow-bottom">
                        <div class="row">
                            <div class="span12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shadow-bottom">
        <div class="row">
            <div class="span12">
            </div>
        </div>
    </div>
    
</div><?php }} ?>