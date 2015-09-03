<?php /* Smarty version Smarty-3.1.11, created on 2013-03-11 15:42:08
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/channel-lineup-hd-integrated.tpl" */ ?>
<?php /*%%SmartyHeaderCode:395158513e5dc0b3caf0-94843506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee14087333011f19a542ebe9c07d18ce0b3a81b8' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/channel-lineup-hd-integrated.tpl',
      1 => 1362766560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '395158513e5dc0b3caf0-94843506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subSubMenu' => 0,
    'channelPackages' => 0,
    'channelPackage' => 0,
    'ind' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_513e5dc0e279d3_82371859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513e5dc0e279d3_82371859')) {function content_513e5dc0e279d3_82371859($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
">
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
                        <h1>CHANNEL LINEUP</h1>
                        <?php  $_smarty_tpl->tpl_vars['channelPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channelPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channelPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channelPackage']->key => $_smarty_tpl->tpl_vars['channelPackage']->value){
$_smarty_tpl->tpl_vars['channelPackage']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->type=="Base"){?>
                                <div class="head2 ltblue"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->packageName;?>
</div>
                                <table class="table table-striped table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Channel</th><th>HD Channel*</th><th>Channel</th><th>HD Channel*</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable(0, null, 0);?>
                                        <?php while ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]&&$_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber<900){?>
                                        <tr>
                                            <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName){?>
                                                <td><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName;?>
</td>
                                            <?php }else{ ?>
                                                <td></td>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->HDName){?>
                                                <td style="border-right: 1px dotted #ccc;"><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->HDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->HDName;?>
</td>
                                            <?php }else{ ?>
                                                <td style="border-right: 1px dotted #ccc;"></td>
                                            <?php }?>
                                            <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                            <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName&&$_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber<900){?>
                                                <td><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName;?>
</td>
                                            <?php }else{ ?>
                                                <td></td>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->HDName&&$_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber<900){?>
                                                <td style="border-right: 1px dotted #ccc;"><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->HDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->HDName;?>
</td>
                                            <?php }else{ ?>
                                                <td style="border-right: 1px dotted #ccc;"></td>
                                            <?php }?>
                                        </tr>
                                        <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->packageName=="Viewers Choice"){?>
                                            <tr><th colspan=4>Digital Music Channels</th></tr>
                                            <?php while ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]&&$_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber>=900){?>
                                            <tr>
                                                <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName){?>
                                                    <td><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName;?>
</td>
                                                <?php }else{ ?>
                                                    <td></td>
                                                <?php }?>
                                                <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                                <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName&&$_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber>=900){?>
                                                    <td><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName;?>
</td>
                                                <?php }else{ ?>
                                                    <td></td>
                                                <?php }?>
                                                <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                                <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName&&$_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber>=900){?>
                                                    <td><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName;?>
</td>
                                                <?php }else{ ?>
                                                    <td></td>
                                                <?php }?>
                                                <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                                <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName&&$_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber>=900){?>
                                                    <td><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName;?>
</td>
                                                <?php }else{ ?>
                                                    <td></td>
                                                <?php }?>
                                            </tr>
                                            <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                            <?php }?>
                                        <?php }?>
                                    </tbody>
                                </table>
                                <p class="disclaimer">*HD Channel available with subscription to HD service and corresponding channel package.</p>
                                
                            <?php }else{ ?> 
                                <table class="table table-striped table-condensed">
                                    <thead>
                                        <tr>
                                            <th colspan=4><div class="head3 ltblue"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->packageName;?>
</div></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable(0, null, 0);?>
                                        <?php while ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]){?>
                                        <tr>
                                            <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName){?>
                                                <td><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName;?>
</td>
                                            <?php }else{ ?>
                                                <td></td>
                                            <?php }?>
                                            
                                            <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                            <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName){?>
                                                <td><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName;?>
</td>
                                            <?php }else{ ?>
                                                <td></td>
                                            <?php }?>
                                            <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                            <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName){?>
                                                <td><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName;?>
</td>
                                            <?php }else{ ?>
                                                <td></td>
                                            <?php }?>
                                            <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                            <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName){?>
                                                <td><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName;?>
</td>
                                            <?php }else{ ?>
                                                <td></td>
                                            <?php }?>
                                        </tr>
                                        <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                        <?php }?>
                                    </tbody>
                                </table>
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