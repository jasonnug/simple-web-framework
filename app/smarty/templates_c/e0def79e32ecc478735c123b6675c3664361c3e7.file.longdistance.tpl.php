<?php /* Smarty version Smarty-3.1.11, created on 2013-04-02 10:33:05
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/longdistance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1668479369515b08de930ac0-78768691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0def79e32ecc478735c123b6675c3664361c3e7' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/longdistance.tpl',
      1 => 1364923984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1668479369515b08de930ac0-78768691',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_515b08deadd546_00290139',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'longDistanceServices' => 0,
    'longDistance' => 0,
    'ind' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515b08deadd546_00290139')) {function content_515b08deadd546_00290139($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                        <div class="span12 main-content">
                            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                    <h1 class="orange"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['page']->value->title, 'UTF-8');?>
</h1>
                                    
                                    <div class="features-wrapper">
                                        <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable(1, null, 0);?>
                                        <?php  $_smarty_tpl->tpl_vars['longDistance'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['longDistance']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['longDistanceServices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['longDistance']->key => $_smarty_tpl->tpl_vars['longDistance']->value){
$_smarty_tpl->tpl_vars['longDistance']->_loop = true;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['longDistance']->value->active=="true"&&$_smarty_tpl->tpl_vars['longDistance']->value->type=="residential"){?>
                                                <div class="feature-wrapper">
                                                    <?php if ($_smarty_tpl->tpl_vars['longDistance']->value->description||$_smarty_tpl->tpl_vars['longDistance']->value->disclaimer){?>
                                                        <div class="feature-heading">
                                                            <a data-info="feature-<?php echo $_smarty_tpl->tpl_vars['ind']->value;?>
" class="feature-name feature-link" href="#">
                                                                <?php echo $_smarty_tpl->tpl_vars['longDistance']->value->title;?>

                                                                <span class="right feature-price"><?php echo $_smarty_tpl->tpl_vars['longDistance']->value->priceText;?>
</span>
                                                            </a>
                                                        </div>
                                                    <?php }else{ ?>
                                                        <div class="feature-heading">
                                                            <span class="feature-name"><?php echo $_smarty_tpl->tpl_vars['longDistance']->value->title;?>
</span>
                                                            <span class="right feature-price"><?php echo $_smarty_tpl->tpl_vars['longDistance']->value->priceText;?>
</span>
                                                        </div>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['longDistance']->value->description||$_smarty_tpl->tpl_vars['longDistance']->value->disclaimer){?>
                                                        <div id="feature-<?php echo $_smarty_tpl->tpl_vars['ind']->value;?>
" class="feature-info">
                                                            <p><?php echo $_smarty_tpl->tpl_vars['longDistance']->value->description;?>
</p>
                                                            <?php if ($_smarty_tpl->tpl_vars['longDistance']->value->disclaimer){?>
                                                                <p class="disclaimer"><?php echo $_smarty_tpl->tpl_vars['longDistance']->value->disclaimer;?>
</p>
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                </div>
                                            <?php }?>
                                            <?php $_smarty_tpl->tpl_vars["ind"] = new Smarty_variable($_smarty_tpl->tpl_vars['ind']->value+1, null, 0);?>
                                        <?php } ?>
                                    </div>
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