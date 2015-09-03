<?php /* Smarty version Smarty-3.1.11, created on 2013-05-13 08:27:20
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/vc-productmaterials.tpl" */ ?>
<?php /*%%SmartyHeaderCode:349506026518bc7a2383b04-94984477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30b7efc6b9871f6074c945cb0a34111cef605afa' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/vc-productmaterials.tpl',
      1 => 1368458839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '349506026518bc7a2383b04-94984477',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_518bc7a24a43a6_79969252',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518bc7a24a43a6_79969252')) {function content_518bc7a24a43a6_79969252($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
" class="biz">
    <div class="container">
        <div class="row-fluid">
            <div class="span12 top-section vc-top">
                <div class="row-fluid">
                    <div class="span4">
                    </div>
                    <div class="span8">
                        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName=="biz-voice-connect"){?>
                                <div class="top-content">
                                    <h1 class="orange">VOICE CONNECT</h1>
                                    <h4 class="gray"><?php echo $_smarty_tpl->tpl_vars['page']->value->subtitle;?>
</h4>
                                    <p style="position: relative; z-index: 1;">
                                        <?php echo $_smarty_tpl->tpl_vars['page']->value->mainDescription;?>

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
            <div class="row-fluid">
                <?php echo $_smarty_tpl->getSubTemplate ("left-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div class="span9">
                    <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                            <div class="packages-heading"><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</div>
                            <div class="row-fluid">
                                <div class="span12 main-content speed-packages">
                                    <div class="padding" style="padding: 20px 20px;">
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr><th class="big blue">User Guides</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><img src="img/pdf-icon.gif"> <a href="docs/VoiceConnect_BasicSeat.pdf">Basic Seat User Training</a></td></tr>
                                                <tr><td><img src="img/pdf-icon.gif"> <a href="docs/Premium-Auto-Attendant-GuideCT.pdf">Premium Auto Attendant Guide</a></td></tr>
                                                <tr><td><img src="img/pdf-icon.gif"> <a href="docs/Voice-Connect-BGAdmin-Guide-lg.pdf">Business Group Administrator Guide</a></td></tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr><th class="big blue">Handsets and Devices</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><img src="img/pdf-icon.gif"> <a href="docs/QuickReference-6755i.pdf">Aastra 6755i Quick Reference</a></td></tr>
                                                <tr><td><img src="img/pdf-icon.gif"> <a href="docs/QuickReference-6739i.pdf">Aastra 6739i Quick Reference</a></td></tr>
                                                <tr><td><img src="img/pdf-icon.gif"> <a href="docs/QuickReference-6757i.pdf">Aastra 6757i Quick Reference</a></td></tr>
                                                <tr><td><img src="img/pdf-icon.gif"> <a href="docs/QuickReference_Polycom-SoundstationIP5000.pdf">Polycom Soundstation IP5000 Quick Reference</a></td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    <?php } ?>
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

    <div class="container shadow-bottom">
        <div class="row">
            <div class="span12">
            </div>
        </div>
    </div>
    
</div><?php }} ?>