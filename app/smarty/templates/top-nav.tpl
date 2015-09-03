{function is_active curPage=null pages=null}
    {foreach $pages as $key => $page}
        {if $page['pages']}
            {is_active curPage=$curPage pages=$page['pages']}
        {else}
            {if $page['url'] == $curPage}
                active
            {/if}
        {/if}
    {/foreach}
{/function}

{function draw_nav pages=null key=null level=0}
    {foreach $pages as $key => $page}
        {if $page['pages'] and $page['active']}
            <li class="dropdown {is_active curPage=$curPage pages=$page['pages']}">
                <a href="{$page['url']}" class="dropdown-toggle" data-toggle="dropdown" role="button" ariea-haspopup="true" aria-expanded="false">
                    {if $page['icon'] != ""}
                        <i class="fa fa-{$page['icon']} fa-fw"></i>
                    {/if}
                    {$page['title']} 
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    {draw_nav pages=$page['pages'] key=$key level=$level+1}
                </ul>
            </li>
        {else if $page['active']}
            <li>
                <a class="{if $curPage == $page['url']}active{/if}" href="{$app['_rel_url']}/{$page['url']}">
                    {if $page['icon'] != ""}
                        <i class="fa fa-{$page['icon']} fa-fw"></i> 
                    {/if}
                    {$page['title']}
                </a>
            </li>
        {/if}
    {/foreach}
{/function}

<nav id="admin-bar" class="navbar navbar-default navbar-fixed-top" 
    data-pageViewLevel="{$app['page_list'][$curPage]['view_level']}" 
    data-pageEditLevel="{$app['page_list'][$curPage]['edit_level']}" 
    data-userPermLevel="{$app['_user']['permissionLevel']}" 
    data-canEdit="{$app['_can_edit']}"
    >
    <div class="container-fluid">
        <div style="padding: 0 5%;">
            <ul class="nav navbar-nav">
                {draw_nav pages=$app['pages']}
            </ul>
        </div>
    </div>
</nav>