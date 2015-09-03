<?php /* Smarty version Smarty-3.1.11, created on 2013-05-13 08:39:23
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/wholesale.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1964632973518c15d99a00d1-62286645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f9c5ff98a31bbe6e57b40ee7a59df868e678cc6' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/wholesale.tpl',
      1 => 1368459562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1964632973518c15d99a00d1-62286645',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_518c15d9ad10a6_62022254',
  'variables' => 
  array (
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518c15d9ad10a6_62022254')) {function content_518c15d9ad10a6_62022254($_smarty_tpl) {?><div id="content" data-page="Internet" class="biz">
    
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
                            <div class="packages-heading">Wholesale Ethernet Transport Service (ETS)</div>
                            <div class="row-fluid">
                                <div class="span12 main-content speed-packages">
                                    <div class="">
                                        <h5><?php echo $_smarty_tpl->tpl_vars['page']->value->subtitle;?>
</h5>
                                        <h4 class="gray">Description:</h4>
                                        <p><?php echo $_smarty_tpl->tpl_vars['page']->value->description1;?>
</p>
                                        <h4 class="gray">Service Elements:</h4>
                                        <p><?php echo $_smarty_tpl->tpl_vars['page']->value->description2;?>
</p>

                                        <table class="table table-condensed">
                                            <thead>
                                                <tr><th colspan=3 class="italic">Intrastate Ethernet Pricing</th></tr>
                                                <tr><th>Mbps</th><th>3 yr term Total</th><th>Non-Recurring Charge</th>
                                            </thead>
                                            <tbody>
                                                <tr><td>10</td><td>$555.00</td><td>$650.00</td></tr>
                                                <tr><td>20</td><td>$565.00</td><td>$650.00</td></tr>
                                                <tr><td>50</td><td>$628.00</td><td>$650.00</td></tr>
                                                <tr><td>100</td><td>$878.00</td><td>$650.00</td></tr>
                                                <tr><td>200</td><td>$953.00</td><td>$650.00</td></tr>
                                                <tr><td>500</td><td>$2,105.00</td><td>$650.00</td></tr>
                                                <tr><td>1 Gig</td><td>$2,855.00</td><td>$650.00</td></tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr><th>Mbps</th><th>5yr Term Total</th><th>Non-Recuring Charge</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>10</td><td>$500.00</td><td>$650.00</td></tr>
                                                <tr><td>20</td><td>$515.00</td><td>$650.00</td></tr>
                                                <tr><td>50</td><td>$575.00</td><td>$650.00</td></tr>
                                                <tr><td>100</td><td>$800.00</td><td>$650.00</td></tr>
                                                <tr><td>200</td><td>$860.00</td><td>$650.00</td></tr>
                                                <tr><td>500</td><td>$1,875.00</td><td>$650.00</td></tr>
                                                <tr><td>1 Gig</td><td>$2,575.00</td><td>$650.00</td></tr>
                                            </tbody>
                                        </table>
                                        <p>Reference Oregon Exchange Carrier Association (OECA) Access Service Tariff P.U.C OR. No. 2. for General Information, Terms, and Obligations.</p>
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