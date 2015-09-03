<h1>{$app['page_list'][$curPage]['title']}</h1>

<p>I'm Sorry, the page you were looking for is not available.</p>
<p>Try going back to <a class="bold" href="index.php">the home page</a> or one of these possibly related pages:</p>
<ul>
	{foreach $five_relevant as $rel_page}
	    <li><a href="{$rel_page['url']}">{$rel_page['title']} [internal.canbytel.com/{$rel_page['url']}] </a></li>
	{/foreach}
</ul>