<?php /* Smarty version Smarty-3.1.11, created on 2013-03-12 08:32:06
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/tv2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1041961915513e5951e67b63-90640309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08532e937497a62a01c5ed75f06f81a60c2986da' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/tv2.tpl',
      1 => 1363102325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1041961915513e5951e67b63-90640309',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_513e5952065cf4_35423246',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'channelPackages' => 0,
    'channelPackage' => 0,
    'i' => 0,
    'ind' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513e5952065cf4_35423246')) {function content_513e5952065cf4_35423246($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
">
    <div class="container">
        <div class="row-fluid">
            <div class="span12 top-section tv-top">
                <div class="row-fluid">
                    <div class="span5">
                    </div>
                    <div class="span7">
                        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                <div class="top-content">
                                    <h1 class="orange"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['page']->value->title, 'UTF-8');?>
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
            <div class="row-fluid tv-content">
                <?php echo $_smarty_tpl->getSubTemplate ("left-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div class="span9">
                    <div class="">
                        <div class="head2" style="margin-bottom: -30px;"><span class="tv-heading gray">Channel Packages</span></div>
                        <hr>
                        <div class="margin clearfix"></div>
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
                        <div class="accordion" id="packages-accordion">
                            <?php  $_smarty_tpl->tpl_vars['channelPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channelPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channelPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channelPackage']->key => $_smarty_tpl->tpl_vars['channelPackage']->value){
$_smarty_tpl->tpl_vars['channelPackage']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->type=="Base"){?>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#packages-accordion" href="#collapse<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                <h3><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->packageName;?>

                                                    <span class="right orange"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->count;?>
 <span class="italic">channels</span></span>
                                                </h3>
                                            </a>
                                        </div>
                                        <div id="collapse<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                <h4 class="gray"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->priceText;?>
 <span class="italic">per month</span></h4>
                                                <p><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->description;?>
</p>
                                                <table class="table table-striped table-condensed">
                                                    <thead>
                                                        <tr>
                                                            <th colspan=4><div class="gray">Channels Included:</div></th>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-angle"></div>
                                <?php }?>
                                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                            <?php } ?>
                        </div>
                        <div class="head3" style="margin-bottom: -40px;"><span class="tv-heading gray">Premium Channels</span></div>
                        <hr>
                        <div class="margin clearfix"></div>
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['channelPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channelPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channelPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channelPackage']->key => $_smarty_tpl->tpl_vars['channelPackage']->value){
$_smarty_tpl->tpl_vars['channelPackage']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->type=="Premium"){?>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#packages-accordion" href="#collapse<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                            <h4><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->packageName;?>

                                                <span class="right orange"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->count;?>
 <span class="italic">channels</span></span>
                                            </h4>
                                        </a>
                                    </div>
                                    <div id="collapse<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <h4 class="gray"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->priceText;?>
 <span class="italic">per month</span></h4>
                                            <p><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->description;?>
</p>
                                            <table class="table table-striped table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th colspan=4><div class="gray">Channels Included:</div></th>
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
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                        <?php } ?>
                        <div class="head3" style="margin-bottom: -40px;"><span class="tv-heading gray">Other</span></div>
                        <hr>
                        <div class="margin clearfix"></div>
                        <?php  $_smarty_tpl->tpl_vars['channelPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channelPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channelPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channelPackage']->key => $_smarty_tpl->tpl_vars['channelPackage']->value){
$_smarty_tpl->tpl_vars['channelPackage']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->type=="Latin"){?>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#packages-accordion" href="#collapse<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                            <h4><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->packageName;?>

                                                <span class="right orange"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->count;?>
 <span class="italic">channels</span></span>
                                            </h4>
                                        </a>
                                    </div>
                                    <div id="collapse<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <h4 class="gray"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->priceText;?>
 <span class="italic">per month</span></h4>
                                            <p><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->description;?>
</p>
                                            <table class="table table-striped table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th colspan=4><div class="gray">Channels Included:</div></th>
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
                                        </div>
                                    </div>
                                </div>
                            <?php }elseif($_smarty_tpl->tpl_vars['channelPackage']->value->type=="HD"){?>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#packages-accordion" href="#collapse<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                            <h4><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->packageName;?>

                                                <span class="right orange"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->count;?>
 <span class="italic">channels</span></span>
                                            </h4>
                                        </a>
                                    </div>
                                    <div id="collapse<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <h4 class="gray"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->priceText;?>
 <span class="italic">per month</span></h4>
                                            <p><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->description;?>
</p>
                                            <table class="table table-striped table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th colspan=4><div class="gray">Channels Included:</div></th>
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
                                                        <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->HDName){?>
                                                            <td><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->HDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName;?>
</td>
                                                        <?php }else{ ?>
                                                            <td></td>
                                                        <?php }?>
                                                        <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                                        <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->HDName&&$_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber<900){?>
                                                            <td><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->HDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName;?>
</td>
                                                        <?php }else{ ?>
                                                            <td></td>
                                                        <?php }?>
                                                        <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                                        <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->HDName&&$_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber<900){?>
                                                            <td><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->HDNumber;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDName;?>
</td>
                                                        <?php }else{ ?>
                                                            <td></td>
                                                        <?php }?>
                                                        <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                                        <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->HDName&&$_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->SDNumber<900){?>
                                                            <td><strong><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->channels[$_smarty_tpl->tpl_vars['ind']->value]->HDNumber;?>
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
                                            <p><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->disclaimer;?>
</p>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
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