<?php /* Smarty version Smarty-3.1.11, created on 2013-05-21 10:53:49
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214511134651916f12f1f873-86523646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7adad54ef822280e9a745ad5f5f369acd59cce03' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/contact.tpl',
      1 => 1369158829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214511134651916f12f1f873-86523646',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51916f130dd0e4_09998287',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'menuGroup' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51916f130dd0e4_09998287')) {function content_51916f130dd0e4_09998287($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
" data-menugroup="<?php echo $_smarty_tpl->tpl_vars['menuGroup']->value;?>
">

    <div class="container visible-desktop">
        <div class="row-fluid">
            <div class="span12 top-section support-top">
                <div class="row-fluid">
                    <div class="span5">
                    </div>
                    <div class="span7 top-content">
                        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                <img class="right" style="width:205px;" src="img/mail-generic.png">
                                <h1 class="orange">CONTACT US</h1>
                                <address>
                                    <h4 class="blue">Canby Telcom</h4>
                                    
                                    <a href="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=+&q=190+SE+2nd+Canby,+OR+97013&ie=UTF8&hq=&hnear=190+SE+2nd+Ave,+Canby,+Oregon+97013&t=m&z=17&vpsrc=0">190 SE 2nd Ave<br>
                                    Canby, OR 97013</a>
                                </address>
                                <span class="blue big">Call 503.266.8111 or </span> 
                                <p><a class="big" href="contact-us/contact-form">Submit a question using our Contact Form! </a></p>
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

    <div class="mid-section mid-section-nosub">
        <div class="container">
            <div class="row-fluid">
                <?php echo $_smarty_tpl->getSubTemplate ("left-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div class="span9">
                    
                    
                    <h3 class="gray">Business Hours</h3>
                    Monday - Friday, 8:00am - 5:30pm<br>
                    
                    
                    <h3 class="gray">Customer Care Center</h3>
                    <span class="blue big">503.266.8111</span><br>
                    <a href="mailto:care@canbytel.com">care@canbytel.com</a>
                    <p>For product, services, and billing information.<br>
                    Service is available Monday-Friday, 8:00 am – 5:30 pm.</p>
                    
                    <h3 class="gray">Telephone Repair</h3>
                    <span class="gray big">503.266.2258</span>
                    <p>Service is available 24 hours/day.</p>
                    
                    <h3 class="gray">Internet & Television Technical Support</h3>
                    <span class="gray big">503.266.8111</span>
                    <p><a href="mailto:support@canby.com">support@canby.com</a><br>
                    Service is available 24 hours/day.</p>
                    <p><a href="support">Visit our support site</a> for online help and tutorials.</p>
                    
                    <p><strong>Closed Captioning:</strong> For assistance call: <strong>503.266.8111</strong> or you may fax your request to 503.266.8207 or by email to <a href="mailto:caption_complaints@canbytel.com">caption_complaints@canbytel.com</a>. For written complaints contact: Canby Telcom, Attn: Debbie Jewell - Closed Captioning, PO Box 880, Canby, OR 97013.</p>
                        
                    <p><strong>DMCA/Copyright</strong> infringements should be directed to <a href="mailto:dmca@canby.com">dmca@canby.com</a></p>
                        
                    <p>For Human Resources and employment opportunities information visit our <a href="about/employment">Employment page</a></p>
                    <br><br>
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