<?php /* Smarty version Smarty-3.1.11, created on 2013-03-07 16:51:24
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3/smarty/templates/tv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23737004551365dc12b3c00-28386693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ef82d9c3783a01de4361b09d77ceaaec8290fb5' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3/smarty/templates/tv.tpl',
      1 => 1362703877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23737004551365dc12b3c00-28386693',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51365dc13abbf7_76053530',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'channelPackages' => 0,
    'channelPackage' => 0,
    'serviceAddons' => 0,
    'serviceAddon' => 0,
    'Channels' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51365dc13abbf7_76053530')) {function content_51365dc13abbf7_76053530($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
">
    <div class="container">
        <div class="row-fluid">
            <div class="span12 top-section tv-top">
                <div class="row-fluid">
                    <div class="span6">
                    </div>
                    <div class="span6">
                        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                <div class="top-content">
                                    <h1 style="position: relative; z-index: 1;"><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</h1>
                                    
                                    <p style="position: relative; z-index: 1;">
                                        <?php echo $_smarty_tpl->tpl_vars['page']->value->mainContent;?>
<br><br>
                                        <?php echo $_smarty_tpl->tpl_vars['page']->value->subContent;?>

                                    </p>
                                </div>
                            <?php }?>
                        <?php } ?>
                    </div>
                </div>
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
            <div class="row-fluid internet-content">
                <?php echo $_smarty_tpl->getSubTemplate ("left-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div class="span9">
                    <div class="">
                        <div class="head2" style="margin-bottom: -10px;"><span class="tv-heading blue">Channel Packages</span></div>
                        <?php  $_smarty_tpl->tpl_vars['channelPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channelPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channelPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channelPackage']->key => $_smarty_tpl->tpl_vars['channelPackage']->value){
$_smarty_tpl->tpl_vars['channelPackage']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->type=="Base"){?>
                                <div class="tv-package-block clearfix">
                                    <div class="tv-package-border clearfix">
                                        <div class="tv-price">
                                            <div class="biggest gray big-fitText">
                                                <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->priceText;?>

                                            </div>
                                            <div class="sub-heading gray med-fitText">
                                                per month
                                            </div>
                                        </div>
                                        <div class="tv-channels">
                                            <div class="biggest orange big-fitText">
                                                <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->count;?>

                                            </div>
                                            <div class="sub-heading orange med-fitText">
                                                channels
                                            </div>
                                        </div>
                                        <div class="tv-info">
                                            <div class="ltblue head2"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->title;?>
</div>
                                            <p><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->description;?>
</p>
                                            <a href="tv/channel-lineup" class="ltblue bold">See channel lineup</a>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        <?php } ?>
                        <div class="head2" style="margin-bottom: -15px;"><span class="tv-heading blue">Premium Channels</span></div>
                        <?php  $_smarty_tpl->tpl_vars['channelPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channelPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channelPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channelPackage']->key => $_smarty_tpl->tpl_vars['channelPackage']->value){
$_smarty_tpl->tpl_vars['channelPackage']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->type=="Premium"){?>
                                <div class="tv-package-block clearfix">
                                    <div class="tv-package-border clearfix">
                                        <div class="tv-price">
                                            <div class="biggest gray big-fitText">
                                                <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->priceText;?>

                                            </div>
                                            <div class="sub-heading gray med-fitText">
                                                per month
                                            </div>
                                        </div>
                                        <div class="tv-channels">
                                            <div class="biggest orange big-fitText">
                                                <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->count;?>

                                            </div>
                                            <div class="sub-heading orange med-fitText">
                                                channels
                                            </div>
                                        </div>
                                        <div class="tv-info">
                                            <div class="ltblue head2"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->title;?>
</div>
                                            <p><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->description;?>
</p>
                                            <a href="tv/channel-lineup" class="ltblue bold">See channel lineup</a>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        <?php } ?>
                        <div class="head2" style="margin-bottom: -15px;"><span class="tv-heading blue">Other</span></div>
                        <?php  $_smarty_tpl->tpl_vars['channelPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channelPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channelPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channelPackage']->key => $_smarty_tpl->tpl_vars['channelPackage']->value){
$_smarty_tpl->tpl_vars['channelPackage']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->type=="Latin"){?>
                                <div class="tv-package-block clearfix">
                                    <div class="tv-package-border clearfix">
                                        <div class="tv-price">
                                            <div class="biggest gray big-fitText">
                                                <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->priceText;?>

                                            </div>
                                            <div class="sub-heading gray med-fitText">
                                                per month
                                            </div>
                                        </div>
                                        <div class="tv-channels">
                                            <div class="biggest orange big-fitText">
                                                <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->count;?>

                                            </div>
                                            <div class="sub-heading orange med-fitText">
                                                channels
                                            </div>
                                        </div>
                                        <div class="tv-info">
                                            <div class="ltblue head2"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->title;?>
</div>
                                            <p><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->description;?>
</p>
                                            <a href="tv/channel-lineup" class="ltblue bold">See channel lineup</a>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        <?php } ?>
                        <?php  $_smarty_tpl->tpl_vars['serviceAddon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serviceAddon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceAddons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serviceAddon']->key => $_smarty_tpl->tpl_vars['serviceAddon']->value){
$_smarty_tpl->tpl_vars['serviceAddon']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName=="HDTV"){?>
                                <div class="tv-package-block clearfix">
                                    <div class="tv-package-border clearfix">
                                        <div class="tv-price">
                                            <div class="biggest gray big-fitText">
                                                <?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->priceText;?>

                                            </div>
                                            <div class="sub-heading gray med-fitText">
                                                per month
                                            </div>
                                        </div>
                                        <div class="tv-channels">
                                            <div class="biggest orange big-fitText">
                                                <?php echo $_smarty_tpl->tpl_vars['Channels']->value->HD;?>

                                            </div>
                                            <div class="sub-heading orange med-fitText">
                                                channels
                                            </div>
                                        </div>
                                        <div class="tv-info">
                                            <div class="ltblue head2"><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->title;?>
</div>
                                            <p><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description;?>
</p>
                                            <a href="tv/channel-lineup" class="ltblue bold">See channel lineup</a>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        <?php } ?>
                    </div>
                    <div class="shadow-bottom">
                        <div class="row-fluid">
                            <div class="span12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container shadow-bottom">
        <div class="row-fluid">
            <div class="span12">
            </div>
        </div>
    </div>
    
</div><?php }} ?>