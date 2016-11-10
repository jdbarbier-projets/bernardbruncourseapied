<?php get_header(); ?>

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



	 <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>><h2 class="largeheadline">
		  <?php the_title(); ?></h2>

			
	<div><span class="smallheadline1">
			Ecrit par : <?php the_author(); ?>  
			<em>
			
		    </em></span><span class="smallheadline2">-
		    Le <?php the_time('d F Y'); ?></span></div>	


	

			<div class="entry">
				<?php the_content(); ?>
              <?php wp_link_pages() ?>
			</div>

		<div class="postmetadata">
			
          
			<?php edit_post_link('Editer'); ?>
			<?php _e(" Posté dans la catégorie ", "magazinetheme"); ?>
				<?php the_category(', ') ?> <?php the_tags(', ') ?>
				 <strong>|</strong> 
				<?php comments_popup_link('Aucun commentaire &#187;', '1 Commentaire &#187;', '% Commentaires &#187;'); ?>
				
</div>
			
		<div class="navigationtest">
			 
<?php get_pagination() ?>  

		</div>	
			
		</div>

	<div class="marg">
	<?php comments_template(); ?></div><!-- end of post -->

<?php endwhile; ?>

<?php else : /* NO posts */

	if ( '' != get_404_template() )
	 get_template_part('404');
	else
		echo( "<h3><?php _e( 'Upss, not found...', 'magazinetheme' ); ?></h3>" );

endif; ?>
</div>
	
<?php get_sidebar(); ?>


<?php get_footer(); ?>
