<!--    /** 
   Template Name: Home Page 
   */ --> 
<?php get_header(); ?>
<div class="page-wrap">	
	<div class="g-row">
		<div class="center">
			<div class="g-60">
				 <iframe id="previewvid" src="https://www.youtube.com/embed/p-zGIS-WWZQ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>

			<div class="g-39">
				<h2 id="popular">Popular on REMcast</h2>
				<div class="previewinfo">
					<h2>#1 Evil Lizard - Preview</h2>
					<a href=" http://localhost/201tutorial/profile-2/"><img id="profile" src="http://localhost/201tutorial/wp-content/uploads/2017/10/profiledark.png"></a>
					<a href=" http://localhost/201tutorial/profile/"><p><?php  global $current_user; get_currentuserinfo(); echo $current_user->user_login . "\n"; ?></a></br>
					<?php echo get_the_date(); ?></br>
					5,000 Views </br></p>
					<a href="http://localhost/201tutorial/vr-2/"><img id="vrbutton" src="http://localhost/201tutorial/wp-content/uploads/2017/10/vrdark.png"></a></br>
					<p>This is a suspenseful and thrilling nightmare, the dark environment creates a very daunting feeling. #panic #reptiles #lizard #thriller #blackandwhite</p>
				</div>
			</div>
				

			<ul class="grid" id="lightSlider">
				<?php $loop = new WP_Query( array( 'post_type' => 'videos', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>
			    <?php while( $loop->have_posts() ) : $loop->the_post();?>
			        	
			    <?php
			          // Custom Fields variables
			         $title          = get_field('title');
			         $username       = get_field('username');
			         $category       = get_field('category');
			         $genre          = get_field('genre');
			         $thumbnail_image = get_field('thumbnail_image');
			    ?>

			
				<li class="grid-item <?php echo $genre; ?>">
					<a href="<?php the_permalink() ?>">
						<div class="g-48">		
				  			<img class="previewimg" src="<?php echo $thumbnail_image; ?>" >
				  			<div class="ranking">
				  				<h1><?php echo get_the_id() - 108; ?></h1>
				  			</div>
							<div class="textbox">
								<div class="slide">
									<h2><?php echo $title; ?></h2>
									<p><?php  global $current_user; get_currentuserinfo(); echo $current_user->user_login . "\n"; ?><br>
										<?php echo get_the_date(); ?><br>
										<?php echo $category; ?> - <?php echo the_category(' ') ?></br>
										<?php if(function_exists('the_views')) { the_views(); } ?></p>
								</div>
							</div>
						</div>
					</a>
				</li>
				<?php endwhile; ?>
	          	<?php wp_reset_postdata(); // reset the query ?>
			</ul>
		</div>
	</div>
</div>
<?php get_footer(); ?>