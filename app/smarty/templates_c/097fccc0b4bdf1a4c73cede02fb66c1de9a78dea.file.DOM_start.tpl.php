<?php /* Smarty version Smarty-3.1.11, created on 2014-01-14 11:12:12
         compiled from "/var/www/html/marketing.canbytel.com/amp/app/smarty/templates/DOM_start.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16135530352d58c0cef2028-70626387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '097fccc0b4bdf1a4c73cede02fb66c1de9a78dea' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/amp/app/smarty/templates/DOM_start.tpl',
      1 => 1389649457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16135530352d58c0cef2028-70626387',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'curPage' => 0,
    'pages' => 0,
    '_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52d58c0d08dde2_62550752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d58c0d08dde2_62550752')) {function content_52d58c0d08dde2_62550752($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/marketing.canbytel.com/amp/app/smarty/plugins/modifier.replace.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if lte IE 9]>     <html class="lte-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<head>
    <!-- Base Reference -->
    <base href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- Page Title -->
    <?php if ($_smarty_tpl->tpl_vars['curPage']->value){?>
        <title><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->tpl_vars['curPage']->value]->title,"&#x2120;",'');?>
 | Simple Web Framework</title>
    <?php }else{ ?>
        <title>Simple Web Framework with PHP, Smarty, JS, CSS and HTML5</title>
    <?php }?>

    <!-- Content tags and viewport -->
    <meta name="description" content="This framework provides the basic set of libraries and functionality for building a website using Smarty templates, HTML5, CSS3, JS as well as using XML indexed pages and menus.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- JS Browser Selector -->
    <script src="js/css_browser_selector.js" type="text/javascript"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Hosted Styles -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/helper-styles.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Font Awesome -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

</head>
<body>
    <!--[if lt IE 8]>
            <p class="chromeframe well z-jump">
                <div class="menu-logo left clearfix">
                    <a href="http://canbytel.com"><img src="img/canbytelcom.png"></a>
                </div>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.
            </p>
            
            <div class="hidden">
        <![endif]-->
        <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)&&$_smarty_tpl->tpl_vars['_error']->value!=''){?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $_smarty_tpl->tpl_vars['_error']->value;?>

            </div>
        <?php }?>
    
        <div id="wrapper"><?php }} ?>