<?php /* Smarty version Smarty-3.1.11, created on 2013-05-23 09:44:10
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/support/tv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170033189519e475a789cb4-93593800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ab516b85f93a2bcc6f7051d1c7cd9cb2396142' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/support/tv.tpl',
      1 => 1369260592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170033189519e475a789cb4-93593800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519e475a7edcc5_70965458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519e475a7edcc5_70965458')) {function content_519e475a7edcc5_70965458($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <h3 class="blue">TV Support</h3>

                    <p>Canby Telcom is one of the first service providers in the US to offer television service using internet protocol television (IPTV). The television service uses a fully digitalized signal using a broadband connection. You will have a set-top box (STB) connected for each of your televisions and those STBs will be getting a signal from a modem or a fiber connection. If you are having any issues with your TV service as far as connectivity, picture quality, or services please <a href="contact-us"><strong>contact us</strong></a> for help.</p>

                    <p><a href="docs/DTV-Guide-2010-Web.pdf" target="_blank"><img src="img/pdf-icon.gif"> <strong>Click here for the full Digital TV User Guide</strong></a></p>
                    <br>
                    <ul>
                        <li>
                            <a href="support/tv/remote-basics.php"><h4>Remote Control Basics</h4></a>
                            <p>If you are looking for a basic reference for using your remote control, such as turning your TV on/off, changing channels, adjusting the volume, and more, <a href="support/tv/remote-basics.php">click here.</a></p>
                        </li>
                        <li>
                            <a href="support/tv/remotes.php"><h4>Remote Control Programming Instructions</h4></a>
                            <p>If you have set up a new TV you will need to program your Canby Telcom remote to work with it. <a href="support/tv/remotes.php">Click here</a> for setup instructions on programming the remote for your TV, and other remote references.</p>
                        </li>
                        <li>
                            <a href="support/tv/guide.php"><h4>Navigating the Guide</h4></a>
                            <p>The Guide shows the channel listing for current and future programming. You bring it up using the "Guide" button on your remote and you can navigate it using the arrow buttons. For more information on accessing and navigating the guide <a href="tv/guide.php">click here.</a></p>
                        </li>
                        <li>
                            <a href="support/tv/dvr.php"><h4>Using the DVR</h4></a>
                            <p>The DVR (Digital Video Recorder) allows you to record currently running programs, future events or automatically record series. It also allows you to pause and rewind live TV. For more information on the DVR service as well as steps for various functions <a href="support/tv/dvr.php">click here.</a></p>
                        </li>
                    </ul>
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