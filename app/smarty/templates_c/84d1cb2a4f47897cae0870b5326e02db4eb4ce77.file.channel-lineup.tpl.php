<?php /* Smarty version Smarty-3.1.11, created on 2013-05-06 11:37:36
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/channel-lineup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18994206285187f31ce0d270-75983667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84d1cb2a4f47897cae0870b5326e02db4eb4ce77' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/channel-lineup.tpl',
      1 => 1367865456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18994206285187f31ce0d270-75983667',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5187f31d14ef49_99553045',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'channelPackages' => 0,
    'channelPackage' => 0,
    'ind' => 0,
    'channels' => 0,
    'ind2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5187f31d14ef49_99553045')) {function content_5187f31d14ef49_99553045($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
" class="biz">
    
    <div class="container shadow-top">
        <div class="row">
            <div class="span12">
            </div>
        </div>
    </div>
    
    <div class="mid-section">
        <div class="container">
            <div class="row-fluid">
                <?php echo $_smarty_tpl->getSubTemplate ("left-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div class="span9">
                    <div class="row-fluid main-content">
                        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                <h1 class="orange">CHANNEL LINEUP</h1>
                                <?php  $_smarty_tpl->tpl_vars['channelPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channelPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channelPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channelPackage']->key => $_smarty_tpl->tpl_vars['channelPackage']->value){
$_smarty_tpl->tpl_vars['channelPackage']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->packageName!="HD"){?>
                                    <table class="table table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th colspan=4><span class="head2 ltblue"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->title;?>
</span></th>
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
                                    <?php }?>
                                <?php } ?>
                                <table class="table table-striped table-condensed">
                                    <thead>
                                        <tr>
                                            <th colspan=4><span class="head2 ltblue">HD Channels</span></th>
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