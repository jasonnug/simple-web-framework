<?php /* Smarty version Smarty-3.1.11, created on 2013-05-13 08:30:20
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/ob-secureandreliable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1994812674518bebeade1b89-98414431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcb6a4d630199d8eb03f804b8b890840273d60da' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/ob-secureandreliable.tpl',
      1 => 1368459020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1994812674518bebeade1b89-98414431',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_518bebeaef8c35_21427243',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518bebeaef8c35_21427243')) {function content_518bebeaef8c35_21427243($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                            <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName=="biz-online-backup"){?>
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
                                    <div class="padding" style="padding: 20px 10px;">
                                        <h4 class="gray">Safe & Secure File Backup</h4>
                                        <ul>
                                            <li>Supports all file types.</li>
                                            <li>Offers full and incremental backup options.</li>
                                            <li>Choice of AES 128 or 256 bit encryption level.</li>
                                            <li>Choice of file compression level*</li>
                                            <li>Data is stored in an audited, off-site SSAE 16 type-II data center.</li>
                                        </ul>
                                        <h4 class="gray">Automatic & Reliable</h4>
                                        <ul>
                                            <li>Automatic software updates</li>
                                            <li>Automatic confirmations after each backup</li>
                                            <li>Notification when storage nears capacity</li>
                                        </ul>
                                        <h4 class="gray">24/7 Local Support</h4>
                                        <p>One number to call, with local support staff.</p>
                                        <p><span class="blue italic">call:</span> <span class="big orange">503.266.8111</span></p>
                                        <p><span class="blue italic">email:</span> <a href="emailto://business@canbytel.com">business@canbytel.com</a></p>
                                        <p><span class="blue italic">or:</span> <a class="big" href="business/contact">Contact us for a quote.</a></p>
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