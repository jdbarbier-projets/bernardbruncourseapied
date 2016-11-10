<h2 class="post_title">
	<?php if (is_page() || is_single()) { ?>
		<?php the_title(); ?>
	<?php } else { ?>
		<a href="<?php the_permalink() ?>" title="<?php _e('Permanent Link to', 'default'); ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	<?php } ?>
</h2>
<span class="post_content">
<?php the_content(__('Read the rest of this entry &raquo;', 'default')); ?>
</span>
<?php if (!is_page()) { ?>
<div class="info">
	<span class="date"><img src="<?php bloginfo('template_url'); ?>/images/calendaricon.png" />&nbsp;Ecrit le <?php the_time(__('j F Y', 'default')) ?> dans la catégorie &nbsp;<?php the_category(', ') ?></span>
</div>
<?php } ?>
<?php if (!is_page()) { ?>
<!--div class="moreinfo">
    <span class="cats"><img src="<?php bloginfo('template_url'); ?>/images/categoryicon.png" />&nbsp;<?php the_category(', ') ?></span>
    <?php the_tags('<span class="tags">', ', ', '</span>'); ?>
</div-->
<?php } ?>