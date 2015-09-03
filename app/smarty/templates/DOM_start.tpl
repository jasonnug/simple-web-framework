{*
*       File: smarty/templates/DOM_start.tpl
*       Description: Template to start the Document Object Model
*       Date: 2/14/13
*       Author: Jason Nugent
*}
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
    <base href="{$app['_base_url']}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- Page Title -->
    {if $curPage}
        <title>{$app['page_list'][$curPage]['title']|replace:"&#x2120;":""} | Simple Web Framework</title>
    {else}
        <title>Simple Web Framework</title>
    {/if}

    <!-- Content tags and viewport -->
    <meta name="description" content="This framework provides the basic set of libraries and functionality for building a website using Smarty templates, HTML5, CSS3, JS as well as routing using json indexed pages.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {* Google Chart api *}
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Hosted Styles -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/helper-styles.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
<body>
    <!--[if lt IE 8]>
            <p class="chromeframe well z-jump">
                <div class="menu-logo left clearfix">
                    <a href="http://canbytel.com"><img src="img/canbytelcom.png"></a>
                </div>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
            </p>
            <div class="hidden">
        <![endif]-->
    
        <div id="wrapper">