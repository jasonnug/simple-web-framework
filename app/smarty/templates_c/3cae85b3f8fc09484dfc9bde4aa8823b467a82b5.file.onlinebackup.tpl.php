<?php /* Smarty version Smarty-3.1.11, created on 2013-05-13 08:28:40
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/onlinebackup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1676356196518bd2334c04f9-87961223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cae85b3f8fc09484dfc9bde4aa8823b467a82b5' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/onlinebackup.tpl',
      1 => 1368458919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1676356196518bd2334c04f9-87961223',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_518bd2335db339_77453530',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518bd2335db339_77453530')) {function content_518bd2335db339_77453530($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
" class="biz">
    <div class="container">
        <div class="row-fluid">
            <div class="span12 top-section ob-top">
                <div class="row-fluid">
                    <div class="span4">
                    </div>
                    <div class="span8">
                        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                <div class="top-content">
                                    <h1 class="orange">ONLINE BACKUP</h1>
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
                                    <div style="padding: 20px 10px;">
                                        <img class="right" style="width:250px; padding: 10px;" src="img/emerchecklist.png">
                                        <h4 class="gray">What would happen if all your business data disappeared?</h4>
                                        <ul>
                                            <li>140,000 disk drives fail every week.</li>
                                            <li>6% or all U.S. PCs will fail in a given year.</li>
                                            <li>60% of companies that lose their data shut down within one year.</li>
                                            <li>93% of companies that lost their data for 10-days filed for bankruptcy within one year of the disaster, and 50% filed for bankruptcy immediately.</li>
                                        </ul>
                                        <h4 class="gray">Real Business Benefits!</h4>
                                        <h5 class="gray">Focus on your business - not your systems.</h5>
                                        <ul>
                                            <li>No equipment to buy</li>
                                            <li>No more updates, patches, or upgrades for your backup software.</li>
                                            <li>No additional staffing needed - Online Backup administrators easily manage and control all functionality from any web browser</li>
                                            <li>Scalable to meet your business and data size needs.</li>
                                            <li>Access your uploaded files securely from any Internet-enabled connection – tablet, smart phone, desk or laptop.</li>
                                        </ul>
                                        <p>All of this is managed for you and included in the low monthly fee.</p>
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