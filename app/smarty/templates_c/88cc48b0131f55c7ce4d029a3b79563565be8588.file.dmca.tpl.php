<?php /* Smarty version Smarty-3.1.11, created on 2013-05-22 14:35:34
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dmca.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32674161519d36e36ed0f5-40523290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88cc48b0131f55c7ce4d029a3b79563565be8588' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/dmca.tpl',
      1 => 1369258523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32674161519d36e36ed0f5-40523290',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519d36e3770396_67755842',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519d36e3770396_67755842')) {function content_519d36e3770396_67755842($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <h3 class="blue">DMCA Infringement</h3>
                    
                    <p>The DMCA stands for the <a href="http://en.wikipedia.org/wiki/Dmca" target="_blank">Digital Millenium Copyright Act</a> and is a set of laws that protect intellectual property from illegal digital distribution. Basically, if you download something illegally from the internet you are breaking DMCA laws. 
                        Canby Telcom will sometimes receive notices about these infringements from the property owners and we will then issue a <a href="support/virus/dmca-notice.php"><strong>DMCA Notice</strong></a> to the customer with the <a href="http://en.wikipedia.org/wiki/IP_address" target="blank"><strong>IP address</strong></a> that was found to be downloading the illegal file.</p>
                    <p>If you receive a <a href="support/virus/dmca-notice.php"><strong>DMCA Notice</strong></a> from Canby Telcom there is only three things you need to do:</p>
                    <ol>
                        <li>Check for and delete the infringing file.</li>
                        <li>Respond by written letter or email.</li>
                        <li>Take steps to prevent future infringements.</li>
                    </ol>
                    <p>Often you may not even be aware of the infringing file or how it was downloaded. That is fine, just make sure it's not on any of your computers and that is all we ask. What may have happened is that someone you don't know is using your internet connection and may be the culprit.</p>
                    <p>The most common way for someone to use your network is if you have a wireless router that is unsecure. To prevent this, you will need to consult the documentation for your router to password-protect your network. If you have <a href="internet/wifi"><strong>Canby Telcom's Managed WiFi service</strong></a> then your network is already secure. If that is the case then you may want to change your <a href="support/wifi/ssid.php"><strong>SSID or Password</strong></a>.</p>
                    <p>The other possibility is that you have <a href="support/virus"><strong>malware</strong></a> infecting your computer which is producing these illegal activities. Make sure your <a href="support/virus/software.php"><strong>software</strong></a> is up-to-date and you may want to run additional scans.</p>
                    <p>Once you have deleted the file, or have found that it is not on any of your computers, you will need to send a written response to Canby Telcom. You can fax your response to: <strong>503.266.8285</strong>, email <a href="mailto:support@canby.com"><strong>support@canby.com</strong></a> or bring it in to the Canby Telcom office personally at <a href="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=+&q=190+SE+2nd+Canby,+OR+97013&ie=UTF8&hq=&hnear=190+SE+2nd+Ave,+Canby,+Oregon+97013&t=m&z=17&vpsrc=0"><strong>190 SE 2nd Canby, OR 97013</strong></a>.</p>
                    <p>As always, if you have any additional questions or need help with any of these steps, please <a href="contact-us"><strong>contact Tech Support.</strong></a></p>
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