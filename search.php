<?php get_header(); ?>
<div class="page-wrap">
	<div class="center">
		<div class="g-row">
			<h3 class="search-title">
			
			<?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"
			</h3>
			<ul class="grid">

			<?php 

			if(have_posts()):
				while( have_posts() ): the_post(); ?>

			<?php get_template_part('content', 'search'); ?>

			<?php endwhile; 

			 endif; 

			 ?>	
			</ul>	
		</div>
	</div>
</div>			 

<?php get_footer(); ?>
