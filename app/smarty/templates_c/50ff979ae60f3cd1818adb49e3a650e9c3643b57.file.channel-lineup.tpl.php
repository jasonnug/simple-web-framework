<?php /* Smarty version Smarty-3.1.11, created on 2013-03-07 16:36:49
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3/smarty/templates/channel-lineup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17241878915138d9c654cd58-41589298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50ff979ae60f3cd1818adb49e3a650e9c3643b57' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3/smarty/templates/channel-lineup.tpl',
      1 => 1362703009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17241878915138d9c654cd58-41589298',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5138d9c65eb063_66199457',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'channelPackages' => 0,
    'channelPackage' => 0,
    'ind' => 0,
    'page' => 0,
    'channels' => 0,
    'ind2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5138d9c65eb063_66199457')) {function content_5138d9c65eb063_66199457($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                        <h1>Channel Lineup</h1>
                        <?php  $_smarty_tpl->tpl_vars['channelPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channelPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channelPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channelPackage']->key => $_smarty_tpl->tpl_vars['channelPackage']->value){
$_smarty_tpl->tpl_vars['channelPackage']->_loop = true;
?>
                            <table class="table table-striped table-condensed">
                                <thead>
                                    <tr>
                                        <th colspan=4><div class="head2 ltblue"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->packageName;?>
</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->lineUpDesc){?>
                                    <tr><td colspan=4 style="font-style: italic;"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->lineUpDesc;?>
</td></tr>
                                    <?php }?>
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
                                        <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                        <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName&&$_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber<900){?>
                                            <td><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName;?>
</td>
                                        <?php }else{ ?>
                                            <td></td>
                                        <?php }?>
                                        <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                        <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName&&$_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber<900){?>
                                            <td><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName;?>
</td>
                                        <?php }else{ ?>
                                            <td></td>
                                        <?php }?>
                                        <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                        <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName&&$_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber<900){?>
                                            <td><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName;?>
</td>
                                        <?php }else{ ?>
                                            <td></td>
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
                            
                        <?php } ?>
                        <table class="table table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th colspan=4><div class="head2 ltblue">HD Channels</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value->HDDescription){?>
                                    <tr><td colspan=4 style="font-style: italic;"><?php echo $_smarty_tpl->tpl_vars['page']->value->HDDescription;?>
</td></tr>
                                <?php }?>
                                <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable(0, null, 0);?>
                                <?php while ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->tpl_vars['ind']->value]){?>
                                    <tr>
                                        <?php $_smarty_tpl->tpl_vars["ind2"] = new Smarty_variable(1, null, 0);?>
                                        <?php while ($_smarty_tpl->tpl_vars['ind2']->value<=4&&$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->tpl_vars['ind']->value]){?>
                                            <?php if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->tpl_vars['ind']->value]->HDName){?>
                                                <?php $_smarty_tpl->tpl_vars["ind2"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind2']->value+1, null, 0);?>
                                                <td><strong><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->tpl_vars['ind']->value]->HDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->tpl_vars['ind']->value]->HDName;?>
</td>
                                            <?php }?>
                                            <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                        <?php }?>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
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