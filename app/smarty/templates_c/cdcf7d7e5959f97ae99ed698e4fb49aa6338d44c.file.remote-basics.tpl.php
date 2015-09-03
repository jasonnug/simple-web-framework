<?php /* Smarty version Smarty-3.1.11, created on 2013-05-22 08:39:58
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/remote-basics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:884418894519bf3c884a995-95293046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdcf7d7e5959f97ae99ed698e4fb49aa6338d44c' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/remote-basics.tpl',
      1 => 1369237198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '884418894519bf3c884a995-95293046',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519bf3c88ce4a2_98902212',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519bf3c88ce4a2_98902212')) {function content_519bf3c88ce4a2_98902212($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <div class="row-fluid">
                        <div class="span7">
                            <h3 class="blue">Remote Control Basics </h3>
                            <h4>Turn Your Set Top Box or TV On or Off</h4>
                            <ul>
                                <li>The device selection buttons tell your remote whether you want to control your set top box or your television.</li>
                                <li>To turn your TV on or off, press the TV button then the POWER button.</li>
                            </ul>
                                <div class="alert alert-info">
                                    <strong>Note:</strong> Your remote control must have the remote code programmed in before it can send the correct signals for your TV. For help programming your remote <a href="support/tv/remotes.php"><strong>click here</strong></a>.
                                </div>
                            <ul>
                                <li>To turn your set top box on or off, press the STB button and then the Power button.</li>
                            </ul>
                            <div class="alert alert-info">
                                <strong>Note:</strong> It is not necessary to turn your set top box off.
                            </div>
                            <ul>
                                <li>If pressing Power turned the wrong device on or off, press the Power button again, press the appropriate device selection button (AUDIO, VCR, TV or STB) and press Power once more.</li>
                            </ul>

                            <h4>Change Channels</h4>
                            <ul>
                                <li>The <strong>CH+/-</strong> button will change channels up or down one at a time.</li>
                                <li>The Number Pad can be used to directly enter a channel number.</li>
                                <li><strong>Guide</strong> will display the Guide which displays a listing of programming up to 3 days in advance. If the program is on now, you tune to the channel showing it. If not, you can set a scheduled event to remind you when it does come on. </li>
                            </ul>
                            <div class="alert alert-info">
                                <strong>Note: </strong> If your set top box supports recording, you can schedule a recording for the program. For more information on using the Guide, <a href="support/tv/guide.php"><strong>click here.</strong></a>
                            </div>

                            <h4>Adjust Volume</h4>
                            <ul>
                                <li>The <strong>VOL+/-</strong> button will adjust the volume gradually.</li>
                                <li>The <strong>MUTE</strong> button will toggle the sound on and off.</li>
                            </ul>

                            <h4>System Buttons</h4>
                            <ul>
                                <li>There are a number of buttons on your remote that display different features of your service.</li>
                                <li><strong>MENU</strong> displays the Menubar when in cable <strong>[STB]</strong> mode, and in <strong>[TV]</strong> mode you will see your TV’s menu. The Menubar provides quick access to every feature supported by your service.</li>
                                <li><strong>INFO</strong> displays the Infobar, a feature that lets you see information on what you’re watching, what’s coming on next, and what’s on other channels.</li>
                                <li><strong>EXIT</strong> causes your set top box to exit whatever screen you are seeing and return you to normal TV viewing. If you ever get lost on a screen, it is always safe to press <strong>EXIT</strong> and then start over.</li>
                            </ul>
                        </div>
                        <div class="span5">
                            <a href="img/remotes/titan-layout-full.png"><img class="right" style="" src="img/remotes/titan-layout-full.png" /></a>
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