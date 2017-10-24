<!--    /** 
   Template Name: Upload
   */ --> 

   <?php get_header(); ?>
			<div class="page-wrap">
				<div class="center">
				<?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>
					</div>
				</div>	
   <?php get_footer(); ?>