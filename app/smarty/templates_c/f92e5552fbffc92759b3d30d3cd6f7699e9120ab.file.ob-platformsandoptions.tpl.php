<?php /* Smarty version Smarty-3.1.11, created on 2013-05-13 08:31:59
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/ob-platformsandoptions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:681708262518c1056025ad5-95809735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f92e5552fbffc92759b3d30d3cd6f7699e9120ab' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/ob-platformsandoptions.tpl',
      1 => 1368459118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '681708262518c1056025ad5-95809735',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_518c105612a132_14346579',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518c105612a132_14346579')) {function content_518c105612a132_14346579($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                                        <h4 class="gray">Multi-Platform Capability</h4>
                                        <p>Online Backup will protect all file types on PCs and MACs, as well as both Windows® and Linux server platforms. It will do so automatically on the schedule and frequency you set and send your securely encrypted data to off-site, world class data centers with full redundancy.</p>
                                        <h4 class="gray">Online Backup Options:</h4>
                                        <table class="table">
                                            <thead>
                                                <tr><th class="blue">Desktop</th><th class="blue">Server*</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td class="italic">All file for PC, or Macitosh</td><td class="italic">Windows® or Linux©</td></tr>
                                                <tr><td>10 GB</td><td>50 GB</td></tr>
                                                <tr><td>25 GB</td><td>100 GB</td></tr>
                                            </tbody>
                                        </table>
                                        <h4 class="gray">System Requirements and Specifiations </h4>
                                        <h5 class="gray">Online Backup - Workstation</h5>
                                        <ul>
                                            <li>Windows XP SP3, Vista, 7</li>
                                            <li>Requires Pentium III or higher, 512 MB RAM, 1 GB disk space.</li>
                                            <li>Mac OS X 10.6, Intel powered, 512 MB memory, 512 MB RAM, 1 GB disk space.</li>
                                        </ul>
                                        <h5 class="gray">Online Backup - Server</h5>
                                        <ul>
                                            <li>Windows server 128 MB RAM , 25 MB disk space</li>
                                            <li>Supports Windows Server 2003, 2008, 2010</li>
                                            <li>Linux server 128 MB RAM, 25 MB disk space</li>
                                            <li>Supports Red Hat, SuSe, Debian, Ubuntu, CentOS, and Fedora.</li>
                                        </ul>
                                        <p class="disclaimer">Other options available on request.<br>
                                        *Plug-ins for direct backup of Microsoft® Exchange, Microsoft SQL servers, and MySQL.</p>
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