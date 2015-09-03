<?php /* Smarty version Smarty-3.1.11, created on 2013-05-20 15:52:25
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/bundlecustomizer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1129044289515efcd476f405-36431923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3f64f2b5f0de941794cd61a6c3785c3b81bd70b' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/bundlecustomizer.tpl',
      1 => 1369086265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1129044289515efcd476f405-36431923',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_515efcd48da2d7_61193472',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'curPage' => 0,
    'pages' => 0,
    'page' => 0,
    'bundles' => 0,
    'bundle' => 0,
    'telephoneServices' => 0,
    'telephoneService' => 0,
    'longDistanceServices' => 0,
    'longDistance' => 0,
    'serviceAddons' => 0,
    'serviceAddon' => 0,
    'callingFeatures' => 0,
    'callingFeature' => 0,
    'subFeature' => 0,
    'speedPackages' => 0,
    'speedPackage' => 0,
    'channelPackages' => 0,
    'channelPackage' => 0,
    'stbno' => 0,
    'featureSet' => 0,
    'feature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515efcd48da2d7_61193472')) {function content_515efcd48da2d7_61193472($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/plugins/modifier.replace.php';
?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
" data-curPage="<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
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
                <div class="span12">
                    <div class="row-fluid">
                        <div class="span12">
                            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                    <div class="main-content">
                                        
                                        <img class="right" style="width:120px;" alt="bundles icon" src="img/service-icons/bundles-shadow.png">
                                        <h1 class="orange"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['page']->value->title, 'UTF-8');?>
</h1>
                                        <?php if ($_smarty_tpl->tpl_vars['page']->value->subtitle){?>
                                            <h4 class="gray"><?php echo $_smarty_tpl->tpl_vars['page']->value->subtitle;?>
</h4>
                                        <?php }?>
                                        <p style="position: relative; z-index: 1;">
                                            <?php echo $_smarty_tpl->tpl_vars['page']->value->description1;?>

                                        </p>
                                        <div class="row-fluid">
                                            <div class="bigger blue span3 hidden-phone" style="padding-top:10px; padding-right: 15px;">
                                                1. Start with a bundle: <br>
                                                <div class="right margin10"><img style="width:60px;" src="img/orange-arrow-right.png"></div>
                                            </div>
                                            <div class="bigger orange span3 visible-phone" style="padding-top:10px; padding-right: 15px;"></div>
                                            <?php  $_smarty_tpl->tpl_vars['bundle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bundle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->key => $_smarty_tpl->tpl_vars['bundle']->value){
$_smarty_tpl->tpl_vars['bundle']->_loop = true;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['bundle']->value->page=="bundle-and-save"){?>
                                                    <div class="span3 well">
                                                        <h3 class="ltblue"><?php echo $_smarty_tpl->tpl_vars['bundle']->value->title;?>
 </h3>
                                                        <?php if ($_smarty_tpl->tpl_vars['bundle']->value->bundleName=="Double Play"){?>
                                                            <label class="radio">
                                                                <input type="radio" name="packageRadios" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['bundle']->value->bundleName,' ','-');?>
" class="bundle-package-radio" data-type="<?php echo $_smarty_tpl->tpl_vars['bundle']->value->bundleName;?>
" value="<?php echo $_smarty_tpl->tpl_vars['bundle']->value->bundleName;?>
">
                                                                <span class="tooltip-right bold ltblue" title="<?php echo $_smarty_tpl->tpl_vars['bundle']->value->description;?>
" >
                                                                    <?php echo $_smarty_tpl->tpl_vars['bundle']->value->subtitle;?>
<br>
                                                                </span>
                                                            </label>
                                                        <?php }else{ ?>
                                                            <label class="radio">
                                                                <input type="radio" name="packageRadios" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['bundle']->value->bundleName,' ','-');?>
" class="bundle-package-radio" data-type="<?php echo $_smarty_tpl->tpl_vars['bundle']->value->bundleName;?>
" value="<?php echo $_smarty_tpl->tpl_vars['bundle']->value->bundleName;?>
">
                                                                <span class="tooltip-right bold ltblue" title="<?php echo $_smarty_tpl->tpl_vars['bundle']->value->description;?>
" >
                                                                    <?php echo $_smarty_tpl->tpl_vars['bundle']->value->subtitle;?>
<br>
                                                                    <span class="orange"><?php echo $_smarty_tpl->tpl_vars['bundle']->value->IncludedServices['TVService']->totalCount;?>
 channels</span>
                                                                </span>
                                                            </label>
                                                        <?php }?>
                                                    </div>
                                                <?php }?>
                                            <?php } ?>
                                            
                                        </div>
                                        <hr>
                                        <form id="bundle-form" name="bundle-form" method="post" action="bundles/customize/submit.php">
                                            <div id="bundle-customizer-pages" class="span12 clearfix" style="background-color: #fff;">
                                                <div class="row-fluid">
                                                    <div class="span12 bigger bold blue align-center" style="padding-top:10px; padding-right: 15px;">2. Then Customize:</div>
                                                    <br><br><br>
                                                    
                                                </div>
                                                <div class="row-fluid">
                                                    <div class="span8">
                                                        <ul class="breadcrumb well" style="margin-bottom:5px;">
                                                            <li id="telephone-bundle-nav" class="active bundle-nav-li"><a href="#" class="bundle-nav">Telephone</a> <span class="divider">/</span></li>
                                                            <li id="internet-bundle-nav" class="bundle-nav-li"><a href="#" class="bundle-nav">Internet</a> <span class="divider">/</span></li>
                                                            <li id="television-bundle-nav" class="bundle-nav-li"><a href="#" class="bundle-nav">Television</a> <span class="divider">/</span></li>
                                                            <li id="other-bundle-nav" class="bundle-nav-li"><a href="#" class="bundle-nav">Other</a> <span class="divider">/</span></li>
                                                            
                                                            <li id="submit-bundle-nav" class="bundle-nav-li"><a href="#" class="bundle-nav">Submit</a></li>
                                                        </ul>
                                                        <div id="telephone-bundle-page" class="bundle-page">
                                                            <h3 class="orange">Telephone Service</h3>
                                                            <h4 class="gray">Voice Line options: </h4>
                                                            <?php  $_smarty_tpl->tpl_vars['telephoneService'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['telephoneService']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['telephoneServices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['telephoneService']->key => $_smarty_tpl->tpl_vars['telephoneService']->value){
$_smarty_tpl->tpl_vars['telephoneService']->_loop = true;
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['telephoneService']->value->type=="residential"&&$_smarty_tpl->tpl_vars['telephoneService']->value->active=="true"){?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['telephoneService']->value->bundlePrice=="included"){?>
                                                                        <label class="radio telephone-radio">
                                                                            <input type="radio" name="telRadios" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['telephoneService']->value->serviceName,' ','-');?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['telephoneService']->value->price;?>
" value="<?php echo $_smarty_tpl->tpl_vars['telephoneService']->value->serviceName;?>
" checked>
                                                                            <span class="tooltip-right bold gray" title="<?php echo $_smarty_tpl->tpl_vars['telephoneService']->value->description;?>
" ><?php echo $_smarty_tpl->tpl_vars['telephoneService']->value->title;?>
 <span class="tel-bundle-price gray bold">(included)</span></span>
                                                                        </label>
                                                                    <?php }elseif($_smarty_tpl->tpl_vars['telephoneService']->value->bundlePrice!="NA"){?>
                                                                        <label class="radio telephone-radio">
                                                                            <input type="radio" name="telRadios" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['telephoneService']->value->serviceName,' ','-');?>
" value="<?php echo $_smarty_tpl->tpl_vars['telephoneService']->value->serviceName;?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['telephoneService']->value->price;?>
">
                                                                            <span class="tooltip-right bold gray" title="<?php echo $_smarty_tpl->tpl_vars['telephoneService']->value->description;?>
" ><?php echo $_smarty_tpl->tpl_vars['telephoneService']->value->title;?>
 <span class="tel-bundle-price bold gray">$<?php echo $_smarty_tpl->tpl_vars['telephoneService']->value->bundlePrice;?>
</span></span>
                                                                        </label>
                                                                    <?php }?>
                                                                <?php }?>
                                                            <?php } ?>
                                                            <label class="radio">
                                                                <input type="radio" name="telRadios" id="no-telephone-service" data-price=0 value="none">
                                                                <span class="tooltip-right" title="No telephone line." >none</span>
                                                            </label>
                                                            <a href="telephone" target="blank">Click here for more info on telephone lines.</a>
                                                            <div id="telephone-bundle-options">
                                                                <h4 class="gray">Long Distance:</h4>
                                                                <?php  $_smarty_tpl->tpl_vars['longDistance'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['longDistance']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['longDistanceServices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['longDistance']->key => $_smarty_tpl->tpl_vars['longDistance']->value){
$_smarty_tpl->tpl_vars['longDistance']->_loop = true;
?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['longDistance']->value->bundlePrice=="included"&&$_smarty_tpl->tpl_vars['longDistance']->value->active=="true"){?>
                                                                        <label class="radio">
                                                                            <input type="radio" name="ldRadios" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['longDistance']->value->serviceName,' ','-');?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['longDistance']->value->price;?>
" value="<?php echo $_smarty_tpl->tpl_vars['longDistance']->value->serviceName;?>
" checked>
                                                                            <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['longDistance']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['longDistance']->value->title;?>
 <span class="ld-bundle-price bold gray">(included)</span></span>
                                                                        </label>
                                                                    <?php }elseif($_smarty_tpl->tpl_vars['longDistance']->value->bundlePrice!="NA"&&$_smarty_tpl->tpl_vars['longDistance']->value->bundlePrice>0&&$_smarty_tpl->tpl_vars['longDistance']->value->active=="true"){?>
                                                                        <label class="radio">
                                                                            <input type="radio" name="ldRadios" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['longDistance']->value->serviceName,' ','-');?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['longDistance']->value->price;?>
" value="<?php echo $_smarty_tpl->tpl_vars['longDistance']->value->serviceName;?>
">
                                                                            <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['longDistance']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['longDistance']->value->title;?>
 <span class="ld-bundle-price bold gray"></span></span>
                                                                        </label>
                                                                    <?php }?>
                                                                <?php } ?>
                                                                <h4 class="gray">Voice Mail:</h4>
                                                                <?php  $_smarty_tpl->tpl_vars['serviceAddon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serviceAddon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceAddons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serviceAddon']->key => $_smarty_tpl->tpl_vars['serviceAddon']->value){
$_smarty_tpl->tpl_vars['serviceAddon']->_loop = true;
?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['serviceAddon']->value->type=="voice mail"&&$_smarty_tpl->tpl_vars['serviceAddon']->value->active=="true"){?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['serviceAddon']->value->bundlePrice=="included"){?>
                                                                            <label class="radio">
                                                                                <input type="radio" name="vmRadios" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName,' ','-');?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->price;?>
" value="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName;?>
" checked>
                                                                                <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->title;?>
 <span class="vm-bundle-price bold gray">(included)</span></span>
                                                                            </label>
                                                                        <?php }elseif($_smarty_tpl->tpl_vars['serviceAddon']->value->bundlePrice!="NA"&&$_smarty_tpl->tpl_vars['serviceAddon']->value->bundlePrice>0){?>
                                                                            <label class="radio">
                                                                                <input type="radio" name="vmRadios" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName,' ','-');?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->price;?>
" value="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName;?>
">
                                                                                <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->title;?>
 <span class="vm-bundle-price bold gray"></span></span>
                                                                            </label>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                <?php } ?>
                                                                <h4 class="gray">Calling Features:</h4>
                                                                <?php  $_smarty_tpl->tpl_vars['bundle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bundle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->key => $_smarty_tpl->tpl_vars['bundle']->value){
$_smarty_tpl->tpl_vars['bundle']->_loop = true;
?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['bundle']->value->type=="telephone"&&$_smarty_tpl->tpl_vars['bundle']->value->active=="true"){?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['bundle']->value->bundlePrice=="included"){?>
                                                                            <label class="radio">
                                                                                <input type="radio" name="cfRadios" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['bundle']->value->bundleName,' ','-');?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['bundle']->value->price;?>
" value="<?php echo $_smarty_tpl->tpl_vars['bundle']->value->bundleName;?>
" checked>
                                                                                <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['bundle']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['bundle']->value->title;?>
 <span class="cf-bundle-price bold gray">(included)</span></span>
                                                                            </label>
                                                                        <?php }elseif($_smarty_tpl->tpl_vars['bundle']->value->bundlePrice>0){?>
                                                                            <label class="radio">
                                                                                <input type="radio" name="cfRadios" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['bundle']->value->bundleName,' ','-');?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['bundle']->value->price;?>
" value="<?php echo $_smarty_tpl->tpl_vars['bundle']->value->bundleName;?>
">
                                                                                <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['bundle']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['bundle']->value->title;?>
 <span class="cf-bundle-price bold gray">(add $<?php echo $_smarty_tpl->tpl_vars['bundle']->value->bundlePrice;?>
)</span></span>
                                                                            </label>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                <?php } ?>
                                                                <!-- Button to trigger modal -->
                                                                <a href="#cfPopUp" role="button" data-toggle="modal">Choose your calling features</a>

                                                                <!-- Modal -->
                                                                <div id="cfPopUp" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                    <div class="modal-header">
                                                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                      <h3 id="myModalLabel" class="blue">Calling Features</h3>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Choose 8 calling features for FREE with the SimpleChoice 8 bundle:</p>
                                                                        
                                                                        <?php  $_smarty_tpl->tpl_vars['callingFeature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['callingFeature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['callingFeatures']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['callingFeature']->key => $_smarty_tpl->tpl_vars['callingFeature']->value){
$_smarty_tpl->tpl_vars['callingFeature']->_loop = true;
?>
                                                                            <?php if ($_smarty_tpl->tpl_vars['callingFeature']->value->subFeatures){?>
                                                                                <?php  $_smarty_tpl->tpl_vars['subFeature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subFeature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['callingFeature']->value->subFeatures; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subFeature']->key => $_smarty_tpl->tpl_vars['subFeature']->value){
$_smarty_tpl->tpl_vars['subFeature']->_loop = true;
?>
                                                                                    <label class="checkbox">
                                                                                        <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['subFeature']->value['description'];?>
">
                                                                                            <input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['subFeature']->value['featureTitle'];?>
" name="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['subFeature']->value['featureTitle'],' ','_');?>
" class="cf-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['subFeature']->value['featureTitle'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['subFeature']->value['featurePrice'];?>
"> 
                                                                                            <strong class="gray"><?php echo $_smarty_tpl->tpl_vars['subFeature']->value['featureTitle'];?>
</strong> 
                                                                                            <?php if ($_smarty_tpl->tpl_vars['subFeature']->value['featurePrice']){?> 
                                                                                                (<?php echo $_smarty_tpl->tpl_vars['subFeature']->value['featurePrice'];?>
)
                                                                                            <?php }?>
                                                                                        </span>
                                                                                    </label>
                                                                                <?php } ?>
                                                                            <?php }elseif($_smarty_tpl->tpl_vars['callingFeature']->value->featurePrice=="Free"){?>
                                                                                <label class="checkbox muted">
                                                                                    <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['callingFeature']->value->description;?>
">
                                                                                        <input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['callingFeature']->value->featureName;?>
" name="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['callingFeature']->value->featureName,' ','_');?>
" class="cf-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['callingFeature']->value->featureName;?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['callingFeature']->value->featurePrice;?>
" disabled> 
                                                                                        <strong class="gray"><?php echo $_smarty_tpl->tpl_vars['callingFeature']->value->featureName;?>
</strong> 
                                                                                        <?php if ($_smarty_tpl->tpl_vars['callingFeature']->value->featurePrice){?>
                                                                                            (<?php echo $_smarty_tpl->tpl_vars['callingFeature']->value->featurePrice;?>
)
                                                                                        <?php }?>
                                                                                    </span>
                                                                                </label>
                                                                            <?php }else{ ?>
                                                                                <label class="checkbox">
                                                                                    <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['callingFeature']->value->description;?>
">
                                                                                        <input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['callingFeature']->value->featureName;?>
" name="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['callingFeature']->value->featureName,' ','_');?>
" class="cf-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['callingFeature']->value->featureName;?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['callingFeature']->value->featurePrice;?>
"> 
                                                                                        <strong class="gray"><?php echo $_smarty_tpl->tpl_vars['callingFeature']->value->featureName;?>
</strong> 
                                                                                        <?php if ($_smarty_tpl->tpl_vars['callingFeature']->value->featurePrice){?>
                                                                                            (<?php echo $_smarty_tpl->tpl_vars['callingFeature']->value->featurePrice;?>
)
                                                                                        <?php }?>
                                                                                    </span>
                                                                                </label>
                                                                            <?php }?>
                                                                        <?php } ?>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <div class="orange left align-left"><span class="numCF bigger">0</span> selected</div>
                                                                        <button class="btn" data-dismiss="modal" aria-hidden="true">Done</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="internet-bundle-page" class="bundle-page">
                                                            <h3 class="orange">High-Speed Internet</h4>
                                                            <p>Choose your Internet speed package. Fiber speeds (FOz) available to customers within our Fiber to the Home Network. Don't have FOz? <a href="contact">Contact us today to find out if FOz is available in your area.</a> </p>
                                                            <a class="right hidden-phone" href="internet/foz"><img style="width: 200px;" src="img/foz-logo.png"></a>
                                                            <a class="right visible-phone" href="internet/foz">FOz Fiber Optic Zone</a>
                                                            <div id="bundle-speed-packages">
                                                                <?php  $_smarty_tpl->tpl_vars['speedPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['speedPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['speedPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['speedPackage']->key => $_smarty_tpl->tpl_vars['speedPackage']->value){
$_smarty_tpl->tpl_vars['speedPackage']->_loop = true;
?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['speedPackage']->value->active=="true"){?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['speedPackage']->value->bundlePrice=="included"){?>
                                                                            <label class="radio">
                                                                                <input type="radio" name="speedRadios" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['speedPackage']->value->serviceName,' ','-');?>
" class="internet-price-item" data-price="<?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->price;?>
" value="<?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->speed;?>
" checked>
                                                                                <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->description;?>
">
                                                                                    <strong class="gray"><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->speed;?>
 <span id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['speedPackage']->value->serviceName,' ','-');?>
-bundle-price" class="inet-bundle-price">included</span></strong>
                                                                                </span>
                                                                            </label>
                                                                        <?php }elseif($_smarty_tpl->tpl_vars['speedPackage']->value->bundlePrice>0){?>
                                                                            <label class="radio">
                                                                                <input type="radio" name="speedRadios" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['speedPackage']->value->serviceName,' ','-');?>
" class="internet-price-item" data-price="<?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->price;?>
" value="<?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->speed;?>
">
                                                                                <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->description;?>
">
                                                                                    
                                                                                    <strong class="gray"><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->speed;?>
 <span id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['speedPackage']->value->serviceName,' ','-');?>
-bundle-price" class="inet-bundle-price">add $<?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->bundlePrice;?>
</span></strong>
                                                                                </span>
                                                                            </label>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                <?php } ?>
                                                            </div>
                                                            <label class="radio">
                                                                <input type="radio" name="speedRadios" data-price="0" value="none"><span class="tooltip-right" title="No internet service.">none</span>
                                                            </label>
                                                            <a href="internet" target="blank">Click here for more info on internet speeds.</a>
                                                        </div>
                                                        <div id="television-bundle-page" class="bundle-page">
                                                            <h3 class="orange">Digital Television</h3>
                                                            <h4 class="gray">Channel Packages:</h4>
                                                            <?php  $_smarty_tpl->tpl_vars['channelPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channelPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channelPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channelPackage']->key => $_smarty_tpl->tpl_vars['channelPackage']->value){
$_smarty_tpl->tpl_vars['channelPackage']->_loop = true;
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->active=="true"&&$_smarty_tpl->tpl_vars['channelPackage']->value->type=="Base"){?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->bundlePrice=="included"){?>
                                                                        <label class="radio">
                                                                            <input type="radio" name="channelRadios" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['channelPackage']->value->packageName,' ','-');?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->price;?>
" value="<?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->packageName;?>
 <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->totalCount;?>
 channels" checked>
                                                                            <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->description;?>
">
                                                                                <strong class="gray"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->title;?>
</strong> - <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->totalCount;?>
 channels <span class="tv-bundle-price gray bold"></span>
                                                                            </span>
                                                                        </label>
                                                                    <?php }elseif($_smarty_tpl->tpl_vars['channelPackage']->value->bundlePrice>0){?>
                                                                        <label class="radio">
                                                                            <input type="radio" name="channelRadios" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['channelPackage']->value->packageName,' ','-');?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->price;?>
" value="<?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->packageName;?>
 <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->totalCount;?>
 channels">
                                                                            <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->description;?>
"><strong class="gray"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->title;?>
</strong> - <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->totalCount;?>
 channels <span class="tv-bundle-price gray bold"></span></span>
                                                                        </label>
                                                                    <?php }?>
                                                                <?php }?>
                                                            <?php } ?>
                                                            <label class="radio">
                                                                <input id="no-tv-service" type="radio" name="channelRadios" value="none" data-price=0>
                                                                <span class="tooltip-right" title="Select this if you don't want to add Television to your bundle.">none</span>
                                                            </label>
                                                            <a href="television" target="blank">Click here for more info on television packages.</a>
                                                            <div id="tv-bundle-options">
                                                                <h4 class="gray">Premium Channels:</h4>
                                                                <?php  $_smarty_tpl->tpl_vars['channelPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channelPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channelPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channelPackage']->key => $_smarty_tpl->tpl_vars['channelPackage']->value){
$_smarty_tpl->tpl_vars['channelPackage']->_loop = true;
?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->active=="true"&&$_smarty_tpl->tpl_vars['channelPackage']->value->type=="Premium"){?>
                                                                        <label class="checkbox">
                                                                            <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->description;?>
"><input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->packageName;?>
" name="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['channelPackage']->value->packageName,' ','_');?>
" class="premium-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->title;?>
 - <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->totalCount;?>
 channels" data-price="<?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->price;?>
"> <strong class="gray"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->title;?>
</strong> - <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->totalCount;?>
 channels <span class="bold gray">($<?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->price;?>
)</span></span>
                                                                        </label>
                                                                    <?php }?>
                                                                <?php } ?>
                                                                <h4 class="gray">Choose Your Set Top Boxes:</h4>
                                                                <p>Add and upgraded your STBs. Limit of <?php echo $_smarty_tpl->tpl_vars['page']->value->dvrLimit;?>
 DVRs and a total of <?php echo $_smarty_tpl->tpl_vars['page']->value->stbLimit;?>
 set top boxes per household*. Other requirements and restrictions based on location and connection quality may apply.</p>
                                                                <strong class="blue italic">The only carrier in town that includes 2 Standard Definition Set Top Boxes with TV service!</strong>
                                                                <br><br>
                                                                <div class="clearfix"></div>
                                                                <div id="bundle-stb-container" class="shapeshift-container clearfix" style="position: relative;" data-stblimit=<?php echo $_smarty_tpl->tpl_vars['page']->value->stbLimit;?>
 data-hdlimit=4 data-dvrlimit=<?php echo $_smarty_tpl->tpl_vars['page']->value->dvrLimit;?>
>
                                                                    <?php $_smarty_tpl->tpl_vars['stbno'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['stbno']->step = 1;$_smarty_tpl->tpl_vars['stbno']->total = (int)ceil(($_smarty_tpl->tpl_vars['stbno']->step > 0 ? $_smarty_tpl->tpl_vars['page']->value->stbLimit+1 - (1) : 1-($_smarty_tpl->tpl_vars['page']->value->stbLimit)+1)/abs($_smarty_tpl->tpl_vars['stbno']->step));
if ($_smarty_tpl->tpl_vars['stbno']->total > 0){
for ($_smarty_tpl->tpl_vars['stbno']->value = 1, $_smarty_tpl->tpl_vars['stbno']->iteration = 1;$_smarty_tpl->tpl_vars['stbno']->iteration <= $_smarty_tpl->tpl_vars['stbno']->total;$_smarty_tpl->tpl_vars['stbno']->value += $_smarty_tpl->tpl_vars['stbno']->step, $_smarty_tpl->tpl_vars['stbno']->iteration++){
$_smarty_tpl->tpl_vars['stbno']->first = $_smarty_tpl->tpl_vars['stbno']->iteration == 1;$_smarty_tpl->tpl_vars['stbno']->last = $_smarty_tpl->tpl_vars['stbno']->iteration == $_smarty_tpl->tpl_vars['stbno']->total;?>
                                                                        <div id="bundle-stb-<?php echo $_smarty_tpl->tpl_vars['stbno']->value;?>
" class="bundle-stb" style="position: absolute;">
                                                                            <h4>STB <?php echo $_smarty_tpl->tpl_vars['stbno']->value;?>
 - <span class="stb-selected"></span></h4>
                                                                            <div class="bundle-stb-inner">
                                                                                <?php  $_smarty_tpl->tpl_vars['serviceAddon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serviceAddon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceAddons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serviceAddon']->key => $_smarty_tpl->tpl_vars['serviceAddon']->value){
$_smarty_tpl->tpl_vars['serviceAddon']->_loop = true;
?>
                                                                                    <?php if ($_smarty_tpl->tpl_vars['serviceAddon']->value->type=="STB"){?>
                                                                                        <?php if ($_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName=="SDTV"){?>
                                                                                            <label class="radio">
                                                                                                <?php if ($_smarty_tpl->tpl_vars['stbno']->value==1||$_smarty_tpl->tpl_vars['stbno']->value==2){?>
                                                                                                    <input type="radio" class="stbRadio" name="stb<?php echo $_smarty_tpl->tpl_vars['stbno']->value;?>
Radios" id="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName;?>
" value="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName;?>
" checked>
                                                                                                    <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->title;?>
"><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName;?>
 <span class="bold gray">(included)</span></span>
                                                                                                <?php }else{ ?>
                                                                                                    <input type="radio" class="stbRadio" name="stb<?php echo $_smarty_tpl->tpl_vars['stbno']->value;?>
Radios" id="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName;?>
" value="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName;?>
">
                                                                                                    <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->title;?>
"><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName;?>
 <span class="bold gray">($<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->price;?>
)</span></span>
                                                                                                <?php }?>
                                                                                            </label>
                                                                                        <?php }else{ ?>
                                                                                            <label class="radio">
                                                                                                <input type="radio" class="stbRadio" name="stb<?php echo $_smarty_tpl->tpl_vars['stbno']->value;?>
Radios" id="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName;?>
" value="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName;?>
">
                                                                                                <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->title;?>
"><?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName;?>
 <span class="bold gray">($<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->price;?>
)</span></span>
                                                                                            </label>
                                                                                        <?php }?>
                                                                                    <?php }?>
                                                                                <?php } ?>
                                                                                <a id="stb-remove-button-<?php echo $_smarty_tpl->tpl_vars['stbno']->value;?>
" class="red right stb-remove-button" href="#">(remove STB)</a>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                        </div>
                                                                    <?php }} ?>
                                                                    <a id="bundle-stb-add" class="" href="#">
                                                                        Add<br><br>
                                                                        <span style="font-size: 180%;">+</span>
                                                                    </a>
                                                                </div>
                                                                 <a class="bold disclaimer" href="internet/foz">*FOz connection required</a>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div id="other-bundle-page" class="bundle-page">
                                                            <h3 class="orange">Other Services</h3>
                                                            <p>Enhance your bundle with these great services. SecureIT&#x2120; Plus, FileHopper&#x2120; Plus, Managed WiFi and MyTech Remote services only available with High-Speed Internet.</p>
                                                            <div id="other-service-addons">
                                                                <?php  $_smarty_tpl->tpl_vars['serviceAddon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serviceAddon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceAddons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serviceAddon']->key => $_smarty_tpl->tpl_vars['serviceAddon']->value){
$_smarty_tpl->tpl_vars['serviceAddon']->_loop = true;
?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['serviceAddon']->value->active=="true"&&($_smarty_tpl->tpl_vars['serviceAddon']->value->type=="internet"||$_smarty_tpl->tpl_vars['serviceAddon']->value->type=="telephone")&&$_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName!="MyTechPlus Remote"){?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['serviceAddon']->value->price>0){?>
                                                                            <label class="checkbox">
                                                                                <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description;?>
"><input type="checkbox" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName,' ','-');?>
" name="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName;?>
" class="other-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->title;?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->price;?>
"> <?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->title;?>
 (<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->price;?>
)</span> <a href="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->link;?>
" target="blank">(more info)</a>
                                                                            </label>
                                                                        <?php }elseif($_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName=="FileHopper Plus"){?>
                                                                            <label class="checkbox">
                                                                                <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->description3;?>
"><input type="checkbox" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName,' ','-');?>
" name="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName;?>
" class="other-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->title;?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->price;?>
"> <?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->title;?>
</span> <a href="<?php echo $_smarty_tpl->tpl_vars['serviceAddon']->value->link;?>
" target="blank">(more info)</a>
                                                                            </label>
                                                                            <div id="file-hopper-sizes" class="hidden" style="margin-left: 20px;">
                                                                            <?php  $_smarty_tpl->tpl_vars['featureSet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['featureSet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceAddon']->value->FeatureSets; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['featureSet']->key => $_smarty_tpl->tpl_vars['featureSet']->value){
$_smarty_tpl->tpl_vars['featureSet']->_loop = true;
?>
                                                                                <?php if ($_smarty_tpl->tpl_vars['featureSet']->value->setName=="FileHopper Sizes"){?>
                                                                                    
                                                                                    <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featureSet']->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                                                                                        <label class="radio">
                                                                                            <input type="radio" name="FileHopperRadios" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['featureSet']->value->setName,' ','-');?>
" class="file-hopper-radio" value="<?php echo $_smarty_tpl->tpl_vars['feature']->value['featurePrice'];?>
">
                                                                                            <span id="<?php echo $_smarty_tpl->tpl_vars['feature']->value['featureTitle'];?>
" class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['feature']->value['featureDesc'];?>
"><?php echo $_smarty_tpl->tpl_vars['feature']->value['featureTitle'];?>
 (<?php echo $_smarty_tpl->tpl_vars['feature']->value['featurePrice'];?>
)</span>
                                                                                        </label>
                                                                                    <?php } ?>
                                                                                <?php }?>
                                                                            <?php } ?>
                                                                            </div>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                <?php } ?>
                                                            </div>
                                                            <?php  $_smarty_tpl->tpl_vars['bundle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bundle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->key => $_smarty_tpl->tpl_vars['bundle']->value){
$_smarty_tpl->tpl_vars['bundle']->_loop = true;
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['bundle']->value->type=="other"&&$_smarty_tpl->tpl_vars['bundle']->value->active=="true"){?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['bundle']->value->bundleName=="MyTechPlus-Remote"){?>
                                                                        <h5 class="gray">Get all of the above (including FileHopper<sup>sm</sup> Plus 5GB) with: </h5>
                                                                        <label class="checkbox">
                                                                            <span class="tooltip-right" title="<?php echo $_smarty_tpl->tpl_vars['bundle']->value->description;?>
"><input type="checkbox" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['bundle']->value->bundleName,' ','-');?>
" name="<?php echo $_smarty_tpl->tpl_vars['bundle']->value->bundleName;?>
" class="other-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['bundle']->value->title;?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['bundle']->value->price;?>
"> <?php echo $_smarty_tpl->tpl_vars['bundle']->value->title;?>
 (<?php echo $_smarty_tpl->tpl_vars['bundle']->value->price;?>
)</span> <a href="<?php echo $_smarty_tpl->tpl_vars['bundle']->value->link;?>
" target="blank">(more info)</a>
                                                                        </label>
                                                                    <?php }?>
                                                                <?php }?>
                                                            <?php } ?>
                                                        </div>
                                                        
                                                        <div id="submit-bundle-page" class="bundle-page clearfix">
                                                            <h3 class="orange">Submit Your Order</h3>
                                                            <p>Please review your order and enter your name, address, email and phone number and click "Submit Order!" in the lower right. We will contact you within the next business day to review your service request. Thank you!</p>
                                                            <div class="control-group">
                                                                <label class="control-label" for=submitName>Name</label>
                                                                <div class="controls">
                                                                    <input type="text" id="submitName" name="submit_first_name" class="input-medium" placeholder="First" required>
                                                                    <input type="text" id="submitName" name="submit_last_name" class="input-medium" placeholder="Last" required>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for=submitAddress>Service Address (where the service will be installed)</label>
                                                                <div class="controls">
                                                                    <input type="text" id="submitAddress" name="submit_address" class="input-xlarge" placeholder="Address">
                                                                </div>
                                                                <div class="controls">
                                                                    <input type="text" id="submitCity" name="submit_city" class="input-small" placeholder="City">
                                                                    <input type="text" id="submitState" name="submit_state" class="input-mini" placeholder="State">
                                                                    <input type="text" id="submitZip" name="submit_zip" class="input-small" placeholder="Zipcode">
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for=submitAddress>Mailing Address (if differen't)</label>
                                                                <div class="controls">
                                                                    <input type="text" id="submitMailAddress" name="submit_mail_address" class="input-xlarge" placeholder="Address">
                                                                </div>
                                                                <div class="controls">
                                                                    <input type="text" id="submitMailCity" name="submit_mail_city" class="input-small" placeholder="City">
                                                                    <input type="text" id="submitMailState" name="submit_mail_state" class="input-mini" placeholder="State">
                                                                    <input type="text" id="submitMailZip" name="submit_mail_zip" class="input-small" placeholder="Zipcode">
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="controls" for=submitEmail>Email</label>
                                                                <div class="controls">
                                                                    <input type="email" id="submitEmail" name="submit_email" class="input-xlarge" placeholder="Email" required>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="controls" for=submitPhone>Phone Number</label>
                                                                <div class="controls">
                                                                    <input type="tel" id="submitPhone" name="submit_phone" class="input-xlarge" placeholder="Phone Number" required>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="controls" for=submitComments>Comments</label>
                                                                <div class="controls">
                                                                    <textarea name="submit_comments" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div> 
                                                    <div id="bundle-info-right" class="span4 margin well" style="">
                                                        
                                                        <table class="table table-condensed">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan=2>
                                                                        <div id="bundletype" class="biggest ltblue" style="margin-bottom: 10px;"></div>
                                                                        <span id="servicestext" class="ltblue"></span>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr><td colspan=2><span class="big gray">Telephone:</span></td></tr>
                                                            </tbody>
                                                            <tbody id="telephone-none" style="display:none;">
                                                                <tr><td colspan=2>none <br><a href="#" id="ePhone-disc" class="disclaimer italic"></a></td></tr>
                                                            </tbody>
                                                            <tbody id="telephone-submit">
                                                                <tr>
                                                                    <td><span id="telephone-service-submit"></span></td><td class="align-right"><span id="telephone-service-price" class="deleted"></span></td>
                                                                </tr>
                                                                <tr id="ld-submit-row">
                                                                    <td><span id="long-distance-submit"></span></td><td class="align-right"><span id="long-distance-price" class="deleted"></span></td>
                                                                </tr>
                                                                <tr id="vm-submit-row">
                                                                    <td><span id="voice-mail-submit"></span></td><td class="align-right"><span id="voice-mail-price" class="deleted"></span></td>
                                                                </tr>
                                                                <tr id="cf-submit-row">
                                                                    <td><span id="calling-features-submit"></span></td><td class="align-right"><span id="calling-features-price" class="deleted"></span></td>
                                                                </tr>
                                                            </tbody>
                                                            <tbody>
                                                                <tr><td colspan=2><span class="big gray">High-Speed Internet:</span></td></tr>
                                                            </tbody>
                                                            <tbody id="internet-none" style="display:none;">
                                                                <tr><td colspan=2>none</td></tr>
                                                            </tbody>
                                                            <tbody id="internet-submit-table">
                                                                <tr><td><span id="internet-submit"></span></td><td class="align-right"><span id="internet-price" class="deleted"></span></td></tr>
                                                            </tbody>
                                                            <tbody>
                                                                <tr><td colspan=2><span class="big gray">Television:</span></td></tr>
                                                            </tbody>
                                                            <tbody id="tv-none" style="display:none;">
                                                                <tr><td colspan=2>none</td></tr>
                                                            </tbody>
                                                            <tbody id="tv-service-submit">
                                                                <tr><td><span id="tv-submit"></span></td><td class="align-right"><span id="tv-price" class="deleted"></span></td></tr>
                                                            </tbody>
                                                            <tbody id="tv-premium-submit">
                                                                <?php  $_smarty_tpl->tpl_vars['channelPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channelPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channelPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channelPackage']->key => $_smarty_tpl->tpl_vars['channelPackage']->value){
$_smarty_tpl->tpl_vars['channelPackage']->_loop = true;
?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['channelPackage']->value->type=="Premium"){?>
                                                                        <tr id="<?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->packageName;?>
-submit">
                                                                            <td><span class="premium-name"></span></td><td class="align-right"><span class="premium-price"></span></td>
                                                                        </tr>
                                                                    <?php }?>
                                                                <?php } ?>
                                                            </tbody>
                                                            <tbody id="tv-stbs-submit">
                                                                <tr id="sd-stb-row">
                                                                    <td><span id="sd-stb-no"></span> Standard Definition STBs</td>
                                                                    <td class="align-right"><span id="sd-stb-cost"></span><input id="submit-numSD" type="hidden" name="numSDSTBs"></td>
                                                                </tr>
                                                                <tr id="hd-stb-row">
                                                                    <td><span id="hd-stb-no"></span> High Definition STBs</td>
                                                                    <td class="align-right"><span id="hd-stb-cost"></span><input id="submit-numHD" type="hidden" name="numHDSTBs"></td>
                                                                </tr>
                                                                <tr id="sd-dvr-row">
                                                                    <td><span id="sd-dvr-no"></span> SD DVRs (Digital Video Recorders)</td>
                                                                    <td class="align-right"><span id="sd-dvr-cost"></span><input id="submit-numDVR" type="hidden" name="numSDDVRs"></td>
                                                                </tr>
                                                                <tr id="hd-dvr-row">
                                                                    <td><span id="hd-dvr-no"></span> HD DVRs (Digital Video Recorders)</td>
                                                                    <td class="align-right"><span id="hd-dvr-cost"></span><input id="submit-numHDDVR" type="hidden" name="numHDDVRs"></td>
                                                                </tr>
                                                            </tbody>
                                                            <tbody id="other-submit">
                                                                <tr><td colspan=2><span class="big gray">Other Services:</span></td></tr>
                                                                <?php  $_smarty_tpl->tpl_vars['serviceAddon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serviceAddon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceAddons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serviceAddon']->key => $_smarty_tpl->tpl_vars['serviceAddon']->value){
$_smarty_tpl->tpl_vars['serviceAddon']->_loop = true;
?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['serviceAddon']->value->active=="true"&&($_smarty_tpl->tpl_vars['serviceAddon']->value->type=="internet"||$_smarty_tpl->tpl_vars['serviceAddon']->value->type=="telephone")&&($_smarty_tpl->tpl_vars['serviceAddon']->value->price>0||$_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName=="FileHopper Plus")){?>
                                                                        <tr id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName,' ','-');?>
-submit">
                                                                            <td>
                                                                                <span id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName,' ','-');?>
-text"></span>
                                                                            </td>
                                                                            <td class="align-right">
                                                                                <span id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['serviceAddon']->value->serviceName,' ','-');?>
-price"></span>
                                                                            </td>
                                                                        </tr>
                                                                    <?php }?>
                                                                <?php } ?>
                                                            </tbody>
                                                            <tbody>
                                                                <tr class="bold gray">
                                                                    <td>Normal Price: </td>
                                                                    <td class="align-right">
                                                                        <span id="totalbundleprice" class="deleted"></span><br>
                                                                        <span id="discounttype" class="red smaller"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="bold bigger orange">
                                                                    <td>Bundle Price: </td><td class="align-right"><span id="bundleprice" class=""></span></td>
                                                                </tr>
                                                                <tr class="bold big rgreen">
                                                                    <td>Annual Savings: </td><td class="align-right"><span id="annual-savings"></span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div> 
                                                <div id="bundle-progress" class="progress progress-striped">
                                                    <div class="bar" style="width: 20%;"></div>
                                                </div>
                                                <div class="clearfix margin padding">
                                                    <div id="bundle-back" class="arrow-button left padding">
                                                        <span class="arrow-button-left arrow-button-blue"></span><a id="bundle-back-button" class="button-left button-blue" href="#">Next</a>
                                                    </div>
                                                    <div id="bundle-next" class="arrow-button right padding">
                                                        <a id="bundle-next-button" class="button-right button-orange" href="#">Next</a><span class="arrow-button-right arrow-button-orange"></span>
                                                    </div>
                                                    <div id="bundle-submit" class="arrow-button right padding">
                                                        <input type="hidden" name="action" value="bundle-submit">
                                                        
                                                        <input id="bundle-submit-button" class="button-right button-orange" type="submit" value="Submit Order!">
                                                    </div>
                                                </div> 
                                            </div> 
                                        </form>
                                    </div>
                                <?php }?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="shadow-bottom">
                        <div class="row-fluid">
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