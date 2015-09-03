<?php /* Smarty version Smarty-3.1.11, created on 2013-05-22 11:44:38
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/tv-guide.tpl" */ ?>
<?php /*%%SmartyHeaderCode:614307457519d0ed3558842-98586705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dd5608e505a7939be477bc8cbf5e63e96b03599' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/tv-guide.tpl',
      1 => 1369248277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '614307457519d0ed3558842-98586705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519d0ed35ee468_18591702',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519d0ed35ee468_18591702')) {function content_519d0ed35ee468_18591702($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <a href="support/tv/guide-layout.php"><img class="right margin20" src="img/guide-sm.png" /></a>

                    <h3 class="blue">Guide</h3>
                    <p>Guide is the place to quickly find out what’s on now and what’s playing later. You can set reminders or recordings for upcoming programs in Guide.</p>

                    <h4 class="gray">Go To Guide</h4>
                    <ul>
                        <li>There are two ways to go to Guide.</li>
                        <li>Press <strong>GUIDE</strong> or Press <strong>MENU</strong>, highlight Guide, and press OK.</li>
                    </ul>
                    <h4 class="gray">Parts of Guide</h4>
                    <ul>
                        <li>A diagram of the Guide screen is shown on <a href="support/tv/guide-layout.php"><strong>Guide Layout</strong></a>.</li>
                    </ul>
                    <h4 class="gray">Getting Around Guide</h4>
                    <ul>
                        <li>To navigate Guide…
                            <ul>
                                <li>Jump to a channel by entering the channel with the Number Pad (0-9).</li>
                                <li>Press <strong>Page Up</strong> or <strong>Page Down</strong> to jump up or down one screen of listings.</li>
                                <li>Press <strong>Page Forward</strong> or <strong>Page Back</strong> to jump 12 hours ahead in listings and up to 12 hours back.</li>
                                <li>Press <strong>OK</strong> to choose the program you have highlighted. If it is on now, Guide will tune you to the channel.</li>
                                <li>Press <strong>Exit</strong> to leave the Guide.</li>
                            </ul>
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