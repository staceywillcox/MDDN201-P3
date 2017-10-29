<?php
// Custom Fields variables
         $title          = get_field('title');
         $username       = get_field('username');
         $category       = get_field('category');
         $genre          = get_field('genre');
         $thumbnail_image = get_field('thumbnail_image');
         $description = get_field('description');

?>


    <!-- Posts Area -->
	  	<li class="g-24 grid-item <?php echo $genre; ?>" >	
		<a href="<?php the_permalink() ?>">	
		<img class="previewimg" src="<?php echo $thumbnail_image; ?>" >
				<div class="textbox">
				<div class="slide">
					<h2><?php echo $title; ?></h2>
					<p><?php  global $current_user;
      								get_currentuserinfo(); echo $current_user->user_login . "\n"; ?><br>
					<?php echo get_the_date(); ?><br>
					<?php echo the_category(' ') ?><br>
					 <?php if(function_exists('the_views')) { the_views(); } ?></p>
				</div>
				</div>
			</a>
		</li>
		
