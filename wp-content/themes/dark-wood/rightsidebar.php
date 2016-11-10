<div id="rightsidebar" class="sidebar">
<ul>
<li id="search" class="widget widget_search">
    <h2>Rechercher</h2>
    <form method="get" id="searchform" action="<?php bloginfo('home'); ?>" >
	<label class="hidden" for="s">Search for:</label>
			<div><input type="text" value="" name="s" id="s" />
			<input type="submit" id="searchsubmit" value="Search" />
	</div>
	</form>
</li>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>

<?php endif; ?>
</ul>
</div>