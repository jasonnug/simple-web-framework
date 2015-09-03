<?php /* Smarty version Smarty-3.1.11, created on 2013-03-15 10:35:44
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/ondemand.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1099566476513a2e7851a829-90619170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af9c1df96ca75af5127dfbf211390c874e87ff60' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/ondemand.tpl',
      1 => 1363368943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1099566476513a2e7851a829-90619170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_513a2e78564e73_51462406',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'movies' => 0,
    'movie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513a2e78564e73_51462406')) {function content_513a2e78564e73_51462406($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
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
                <?php echo $_smarty_tpl->getSubTemplate ("left-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div class="span9 clearfix">
                    <div class="row-fluid main-content">
                        <div class="ondemand-wrapper clearfix">
                            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                    <h1 class="orange"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['page']->value->title, 'UTF-8');?>
</h1>
                                    <p><?php echo $_smarty_tpl->tpl_vars['page']->value->mainDescription;?>
</p>
                                    <h3><?php echo $_smarty_tpl->tpl_vars['page']->value->subtitle;?>
</h3>
                                <?php }?>
                            <?php } ?>
                            
                            <div id="portfolio-filter" class="filter-fullwidth dropdown right hidden clearfix">
                                <div class="buttonlight">
                                    <span class="category">Category Selection</span>
                                </div>
                                <ul>
                                    <li data-category="catall">Now Playing OnDemand</li>
                                </ul> 
                            </div>
                            <div id="products" class="tp-portfolio left clearfix">
                                <?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value){
$_smarty_tpl->tpl_vars['movie']->_loop = true;
?>
                                    <div class="cell1x2 catall">
                                        <div class="thumbnails" data-mainthumb="img/ondemand/<?php echo $_smarty_tpl->tpl_vars['movie']->value->thumb;?>
" data-bwthumb="img/ondemand/<?php echo $_smarty_tpl->tpl_vars['movie']->value->thumb;?>
"></div>
                                        <div class="caption"><?php echo $_smarty_tpl->tpl_vars['movie']->value->title;?>
<br>Premiere Date: <?php echo $_smarty_tpl->tpl_vars['movie']->value->premiereDate;?>
</div> 
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['movie']->value->url;?>
" class="blog-link"></a>
                                        <div class="entry-info"> 
                                            <div class="media" data-typ="video" data-width="640" data-height="360" data-src='<iframe class="video_clip" width="640" height="360" src="http://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['movie']->value->trailer;?>
?hd=1&amp;wmode=opaque&amp;autohide=1&amp;showinfo=0" frameborder="0" webkitAllowFullScreen allowfullscreen></iframe>'></div>
                                            <div class="entry-title"><?php echo $_smarty_tpl->tpl_vars['movie']->value->title;?>
</div>
                                            <div class="entry-description">
                                                <table class="table table-condensed">
                                                    <tr><td>Genre: </td><td><?php echo $_smarty_tpl->tpl_vars['movie']->value->genre;?>
</td></tr>
                                                    <tr><td>Rating: </td><td><?php echo $_smarty_tpl->tpl_vars['movie']->value->rating;?>
</td></tr>
                                                    <tr><td>Runtime: </td><td><?php echo $_smarty_tpl->tpl_vars['movie']->value->runtime;?>
</td></tr>
                                                    <tr><td>Premiere Date: </td><td><?php echo $_smarty_tpl->tpl_vars['movie']->value->premiereDate;?>
</td></tr>
                                                    <tr><td>Studio: </td><td><?php echo $_smarty_tpl->tpl_vars['movie']->value->studio;?>
</td></tr>
                                                    <tr><td>Cast: </td><td><?php echo $_smarty_tpl->tpl_vars['movie']->value->cast;?>
</td></tr>
                                                    <tr><td>Synopsis: </td><td><?php echo $_smarty_tpl->tpl_vars['movie']->value->synopsis;?>
</td></tr>
                                                    <tr><td colspan=2><a href="<?php echo $_smarty_tpl->tpl_vars['movie']->value->url;?>
">More Info</a></td></tr>
                                                </table>
                                                <?php echo $_smarty_tpl->tpl_vars['movie']->value->synopsis;?>

                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
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
        <div class="row-fluid">
            <div class="span12">
            </div>
        </div>
    </div>
    
</div><?php }} ?>