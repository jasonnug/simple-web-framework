<?php /* Smarty version Smarty-3.1.11, created on 2013-05-22 13:34:48
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/tv-dvr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:683802988519d134dd90623-41910177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '828b6ea016c0cf9abf0857bcfc25a8ca674bea1b' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/support/tv-dvr.tpl',
      1 => 1369254887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '683802988519d134dd90623-41910177',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519d134de09857_89114573',
  'variables' => 
  array (
    'subSubMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519d134de09857_89114573')) {function content_519d134de09857_89114573($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                    <img class="right margin20" src="img/tv/record-guide.png" />

                    <h3 class="blue">Using the DVR</h3>

                    <p>DVR (Digital Video Recorder) allows you to record programs digitally without the need for tapes or discs, as well as pause live TV.</p>
                    <div class="alert alert-info">
                        <strong>Note:</strong> If your set top box does not support Recording, please <a href="contact-us">contact our Customer Care center</a> at <strong>503.266.8111</strong> for an upgrade.
                    </div>

                    <h4 class="gray">General Guidelines About Recordings</h4>
                    <p>As previously mentioned, your TV can even be turned off and a scheduled recording will still take place. You can record one program and watch a different program simultaneously. If two programs are being recorded at the same time, you can only watch one of the recording programs or a program off your DVR list.</p>
                    <strong>Here is some of the basic information for recording and accessing digial video recordings:</strong>
                    <h6>Click on the link below to show more info</h6>
                    <div id="dvr-accordion" class="accordion">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#dvr-accordion" href="#dvr1">
                                    <strong>To Set a Recording...</strong>
                                </a>
                            </div>
                            <div id="dvr1" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <ul>
                                        <li>While watching a program, press Record <img src="img/tv/record-button.png" />. Recording will begin immediately.</li>
                                        <li>You can also start a quick record in Guide.</li>
                                        <li>Highlight a program you want to record using the Arrow Keys and press Record <img src="img/tv/record-button.png" />.</li>
                                        <li>You will see a red icon <img src="img/tv/record.png" /> next to the program in the guide.</li>
                                        <li>If the program is currently on, recording will begin immediately. If the program comes on in the future, your system will record the program for you automatically. Your TV can even be turned off and recording will take place.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#dvr-accordion" href="#dvr2">
                                    <strong>Set a Series Recording</strong>
                                </a>
                            </div>
                            <div id="dvr2" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <ul>
                                        <li>If you choose to record a program that is part of a regular series, you will be offered the option to record the series. This allows you to record every episode of a favorite program.</li>
                                        <li><strong>Step 1: Pick A Program:</strong> Find any episode of the series you want to record. Highlight the program listing and press <strong>OK</strong>.</li>
                                        <li><strong>Step 2: Set The Recording</strong> Highlight <img src="img/tv/record-series-label.png" /> and press <strong>OK</strong>.</li>
                                        <li><strong>Step 3: Return To Guide</strong> Once you have set the series recording you will be returned to Guide. The program listing now shows an icon next to the program’s name <img src="img/tv/series-record.png" />. Every upcoming episode of the series will be recorded.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#dvr-accordion" href="#dvr3">
                                    <strong>Edit a Recording</strong>
                                </a>
                            </div>
                            <div id="dvr3" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <ul>
                                        <li>Once you have created a recording, you can adjust exactly when the recording begins or ends to make sure nothing is missed in case the broadcaster’s time doesn’t match up with yours exactly.</li>
                                        <li><strong>Step 1: Pick An Upcoming Recording</strong> Locate the program to be recorded. Highlight its listing and press <strong>OK</strong>.</li>
                                        <li><strong>Step 2: Edit Recording</strong> From the options shown for this program, highlight <img src="img/tv/edit-recording-label.png" /> and press <strong>OK</strong>.</li>
                                        <li><strong>Step 3: Pad Start and End Times</strong> Use the <strong>Up</strong> and <strong>Down</strong> arrow keys to choose <span style="color:#22578D;">Start</span> or <span style="color:#22578D;">End</span> and press <strong>OK</strong>.</li>
                                        <li>Once you see arrowheads above and below the <span style="color:#22578D;">Start</span> or <span style="color:#22578D;">End</span> box, use the <strong>Up</strong> and <strong>Down</strong> arrow keys to adjust the <span style="color:#22578D;">Start</span> time or <span style="color:#22578D;">End</span> time.</li>
                                        <li><span style="color:#22578D;">Start</span> adjusts the amount of recording time added to the recording prior to when it’s scheduled to begin so that you don’t miss any of the beginning of the program.</li>
                                        <li><span style="color:#22578D;">End</span> adjusts the amount of recording time added to the recording after it is scheduled to end so you don’t miss any of the end of the program.</li>
                                        <li>Once you have adjusted the start and end time, highlight <span style="color:#22578D;">OK</span> and press <strong>OK</strong> to save your changes.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#dvr-accordion" href="#dvr4">
                                    <strong>Edit a Series Recording</strong>
                                </a>
                            </div>
                            <div id="dvr4" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <ul>
                                        <li>Once you have created a series recording, you can adjust which episodes of the series are recorded and which are skipped.</li>
                                        <li><strong>Step 1: Pick A Series Recording</strong> Locate any program in the series to be recorded. Highlight its listing and press <strong>OK</strong>.</li>
                                        <li><strong>Step 2: Edit Series Recording</strong> From the options shown for this program, highlight <img src="img/tv/edit-recording-label.png" /> and press <strong>OK</strong>.</li>
                                        <li><strong>Step 3: Adjust Series Recording Options</strong> Use the <strong>Up</strong> and <strong>Down</strong> arrow keys to choose any of the options and press <strong>OK</strong>.</li>
                                        <li>Once you see arrowheads above and below the options setting box, use the <strong>Up</strong> and <strong>Down</strong> arrow keys to adjust that setting.</li>
                                        <li><span style="color:#22578D;">Channels</span> determines whether the series is recorded when aired on the channel originally set to record, or record the series no matter what channel airs it.</li>
                                        <li><span style="color:#22578D;">Preference</span> determines whether to record the program when shown in standard definition or only when shown in high definition.</li>
                                        <li><span style="color:#22578D;">Episodes</span> determines whether to record re-runs and new episodes of the series or only new episodes.</li>
                                        <li><span style="color:#22578D;">Start</span> and <span style="color:#22578D;">End</span> determines how much time to add at the start and end time of the recording so that none of the program is missed.</li>
                                        <li><span style="color:#22578D;">Limit To</span> determines how many episodes of the series are saved. If set to anything other than all, the system will delete the oldest recorded episode of the series once the limit is reached.</li>
                                        <li>Once you have adjusted the series settings, highlight <span style="color:#22578D;">OK</span> and press <strong>OK</strong> to save your changes.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#dvr-accordion" href="#dvr5">
                                    <strong>Cancel a Series Recording</strong>
                                </a>
                            </div>
                            <div id="dvr5" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <ul>
                                        <li>You can cancel any event you have previously scheduled directly from Guide.</li>
                                        <li><strong>Step 1: Pick The Program</strong> Highlight the program with the event you want to cancel and press <strong>OK</strong>.</li>
                                        <li><strong>Step 2: Cancel the Event</strong> Highlight <img src="img/tv/cancel-series-label.png" /> and press <strong>OK</strong>.</li>
                                        <li><strong>Step 3: Return to Guide</strong> After you press <strong>OK</strong>, you will return to the Guide. The program listing will no longer display the event icon.</li>
                                    </ul>
                                </div>
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