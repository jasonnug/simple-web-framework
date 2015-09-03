<?php /* Smarty version Smarty-3.1.11, created on 2013-05-22 14:38:03
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dmca-notice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1222767455519d3a2957dc11-93293307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccd5a7c0c3ddede222a7cc54c7454837df01180b' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dmca-notice.tpl',
      1 => 1369258681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1222767455519d3a2957dc11-93293307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519d3a295ea3e1_57645634',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519d3a295ea3e1_57645634')) {function content_519d3a295ea3e1_57645634($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
">
    <?php echo $_smarty_tpl->getSubTemplate ("support-top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="container shadow-top">
        <div class="row">
            <div class="span12">
            </div>
        </div>
    </div>
    <div class="mid-section">
        <div class="container">
            <div class="row-fluid">
                <?php if ($_smarty_tpl->tpl_vars['subSubMenu']->value){?>
                    <?php echo $_smarty_tpl->getSubTemplate ("left-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    <div class="span9">
                <?php }else{ ?>
                    <div class="span12 padding">
                <?php }?>
                    <h3 class="blue">DMCA Notice</h3>
                    <p>A DMCA Notice will look something like this:</p>
                    <div style="background-color: #E2E2CE; padding: 30px 30px 70px 30px;">
                        <p>Dear *Customer Name*,</p>
                        <p>Canby Telcom/Web-ster Internet has received a complaint from *COMPLAINING PARTY* that activity may be taking place via your Internet connection that could constitute a violation of copyright law.  If you have a wireless network in your home, you will want to secure it immediately to prevent any further violations.</p>
                        <p> Canby Telcom is subject to the provisions of the Digital Millennium Copyright Act, which requires Canby Telcom to address these issues with its customers. Accordingly, a written statement assuring that the file(s) known as *INFRINGING FILE* do not exist on your computer(s) must be provided to Canby Telcom. If the software/files are on your computer, it needs to be removed immediately. If a letter from you is not received within five business days from the receipt of this letter, your Internet service may be disconnected. You may respond via fax, mail, or even email. Please refer to your terms and conditions located on the Canby Telcom website.</p>
                        <p>Any further notifications of alleged copyright violations via your Internet connection may result in immediate disconnection of service. All correspondence to Canby Telcom on this matter should be marked “ATTN: Technical Support Lead”.</p>
                        <p>Thank you for your prompt attention to this matter.</p>
                        <p>Sincerely,</p>
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