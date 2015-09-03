<?php /* Smarty version Smarty-3.1.11, created on 2013-05-23 09:51:33
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/foz.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301259360519e49157bea55-04428359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78d2aa186c8d0feeae731ce68c4d08337400a9b6' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/foz.tpl',
      1 => 1369260580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301259360519e49157bea55-04428359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'bullet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519e49158ac199_02659298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519e49158ac199_02659298')) {function content_519e49158ac199_02659298($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
">
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
                    <div class="row-fluid">
                        <div class="span12">
                            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                <h1 class="orange"><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
 - <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['page']->value->subtitle, 'UTF-8');?>
</h1>
                                <img class="right" style="width: 200px;" alt="FOz Logo" src="img/foz-logo.png">
                                <p style="position: relative; z-index: 1;">
                                    <?php echo $_smarty_tpl->tpl_vars['page']->value->mainContent;?>

                                </p>
                                <p><?php echo $_smarty_tpl->tpl_vars['page']->value->content['content1'];?>
</p>
                                <ul>
                                    <?php  $_smarty_tpl->tpl_vars['bullet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bullet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value->bullets; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bullet']->key => $_smarty_tpl->tpl_vars['bullet']->value){
$_smarty_tpl->tpl_vars['bullet']->_loop = true;
?>
                                        <li><strong class="gray"><?php echo $_smarty_tpl->tpl_vars['bullet']->value['heading'];?>
</strong><br>
                                            <?php echo $_smarty_tpl->tpl_vars['bullet']->value['content'];?>
</li>
                                    <?php } ?>
                                </ul>
                                <div class="row-fluid hidden-phone">
                                    <div class="span3">
                                        <img src="img/20-10-web-300x220.gif">
                                    </div>
                                    <div class="span3">
                                        <img src="img/40-20-web-300x220.gif">
                                    </div>
                                    <div class="span3">
                                        <img src="img/60-30-web-300x238.gif">
                                    </div>
                                </div>
                                <p><?php echo $_smarty_tpl->tpl_vars['page']->value->content['content2'];?>
</p>
                                <p><?php echo $_smarty_tpl->tpl_vars['page']->value->content['content3'];?>
</p>
                                <p><?php echo $_smarty_tpl->tpl_vars['page']->value->content['content4'];?>
 Learn more about Fiber-to-the-Home at <a href="ftth">www.canbytel.com/FTTH</a>.</p>
                                <p><?php echo $_smarty_tpl->tpl_vars['page']->value->content['content5'];?>
</p>
                                <p><?php echo $_smarty_tpl->tpl_vars['page']->value->content['content6'];?>
</p>
                                <p><?php echo $_smarty_tpl->tpl_vars['page']->value->content['content7'];?>
</p>
                            <?php }?>
                        <?php } ?>
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

    <div class="container shadow-bottom">
        <div class="row">
            <div class="span12">
            </div>
        </div>
    </div>
    
</div><?php }} ?>