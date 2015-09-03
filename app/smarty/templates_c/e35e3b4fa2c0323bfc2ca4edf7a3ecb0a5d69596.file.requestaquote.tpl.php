<?php /* Smarty version Smarty-3.1.11, created on 2013-05-14 11:39:44
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/requestaquote.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165044154251926754e75134-76311034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e35e3b4fa2c0323bfc2ca4edf7a3ecb0a5d69596' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/requestaquote.tpl',
      1 => 1368556783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165044154251926754e75134-76311034',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51926754f11653_64686141',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51926754f11653_64686141')) {function content_51926754f11653_64686141($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                            <div class="packages-heading"><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</div>
                            <div class="row-fluid">
                                <div class="span12 main-content biz-main">
                                    <form class="" name="busform" method="post" action="business/quoterequest/quotesubmit.php">
                                        <div class="row-fluid">
                                            <div class="span6">
                                                <h3 class="gray">Contact Information</h3>
                                                <div class="control-group">
                                                    <label class="control-label" for="first_name"><font color="red">*</font>Name: </label>
                                                    <div class="controls">
                                                        <input type="text" id="first_name" class="span5" name="first_name" placeholder="First Name" required>
                                                        <input type="text" id="last_name" class="span6" name="last_name" placeholder="Last Name" required>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="title">Title: </label>
                                                    <div class="controls">
                                                        <input type="text" id="title" class="span11" name="title" placeholder="Title">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="company">Company: </label>
                                                    <div class="controls">
                                                        <input type="text" id="company" class="span11" name="company" placeholder="Company">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="address">Address: </label>
                                                    <div class="controls" style="margin-bottom: 10px">
                                                        <input type="text" id="address" class="span9" name="address" placeholder="Address">
                                                    </div>
                                                    <div class="controls">
                                                        <input type="text" id="city" class="span5" name="city" placeholder="City">
                                                        <input type="text" id="state" class="span2" name="state" placeholder="State">
                                                        <input type="text" id="zipcode" class="span5" name="zipcode" placeholder="Zipcode">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="email"><font color="red">*</font>Email: </label>
                                                    <div class="controls">
                                                        <input type="email" id="email" class="span10" name="email" placeholder="Email" required>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="phone"><font color="red">*</font>Phone Number: </label>
                                                    <div class="controls">
                                                        <input type="tel" id="phone" name="phone" placeholder="Phone" required>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="span6">
                                                <h3 class="gray">About Your Business</h3>
                                                <div class="control-group">
                                                    <label class="control-label" for="num_locations">Number of Locations: </label>
                                                    <div class="controls">
                                                        <input type="text" id="num_locations" class="span10" name="num_locations" placeholder="Number of Locations">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="industry">Industry: </label>
                                                    <div class="controls">
                                                        <select title="industry" name="industry" id="industry" class="span10">
                                                            <option value="" selected="selected" disabled="disabled"></option>
                                                            <option value="Apparel">Apparel</option>
                                                            <option value="Banking">Banking</option>
                                                            <option value="Biotechnology">Biotechnology</option>
                                                            <option value="Communications">Communications</option>
                                                            <option value="Consulting">Consulting</option>
                                                            <option value="Entertainment">Entertainment</option>
                                                            <option value="Finance">Financial Services</option>
                                                            <option value="Government">Government</option>
                                                            <option value="Healthcare">Healthcare</option>
                                                            <option value="Hospitality">Hospitality</option>
                                                            <option value="Manufacturing">Manufacturing</option>
                                                            <option value="Restaurant">Restaurant/QSR</option>
                                                            <option value="Retail">Retail</option>
                                                            <option value="Telecommunications">Telecommunications</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="business_type">Type of Business: </label>
                                                    <div class="controls">
                                                        <select name="business_type" id="business_type" class="span10">
                                                            <option value="" selected="selected" disabled="disabled"></option>
                                                            <option value="SOHO">Small Office/Home Office</option>
                                                            <option value="SMB">Small-to-Medium Business</option>
                                                            <option value="SME">Small-to-Medium Enterprise</option>
                                                            <option value="Large Enterprise">Large Enterprise</option>
                                                            <option value="ASP">ASP</option>
                                                            <option value="CLEC">CLEC</option>
                                                            <option value="Equipment Vendor">Equipment Vendor</option>
                                                            <option value="Internet Service Provider">Internet Service Provider</option>
                                                            <option value="System Integrator">System Integrator</option>
                                                            <option value="Telecom Agent">Telecom Agent</option>
                                                            <option value="Telecom Reseller">Telecom Reseller</option>
                                                            <option value="VAR">VAR</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="source">How did you hear about us?</label>
                                                    <div class="controls">
                                                        <select name="source" id="source" class="span10">
                                                            <option value="" selected="selected" disabled="disabled"></option>
                                                            <option value="Agent">Agent</option>
                                                            <option value="Print Advertisement">Print Advertisement</option>
                                                            <option value="Email">Email</option>
                                                            <option value="Tradeshow">Tradeshow</option>
                                                            <option value="Webinar">Webinar</option>
                                                            <option value="Search Engine/Banner Ad">Search Engine/Banner Ad</option>
                                                            <option value="Customer Referral">Customer Referral</option>
                                                            <option value="Word of Mouth">Word of Mouth</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <p class="disclaimer"><font color="red">*</font>Required</p>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="needs">Please let us know of any specific needs: </label>
                                            <div class="controls">
                                                <textarea rows="3" style="width: 70%;" name="needs" wrap="soft"></textarea>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <input id="button" class="btn btn-success" name="submit" type="submit" value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="shadow-bottom">
                                <div class="row-fluid">
                                    <div class="span12">
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    <?php } ?>
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