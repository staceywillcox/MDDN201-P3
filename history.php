<!--    /** 
   Template Name: History 
   */ --> 

<?php get_header(); ?>
<!-- MAIN PAGE -->
<div class="page-wrap">
	<!-- MAIN CENTER CONTENT -->
	<div class="center">

		<!-- MENU STARTS -->
		<div class="g-20">
			<div class="smallprofile">
				<img id="profileavatar" src="http://localhost/201tutorial/wp-content/uploads/2017/10/profiledark.png">
				<h4><?php  global $current_user; get_currentuserinfo(); echo $current_user->user_login . "\n"; ?></h4>
			</div>
			<ul>
				<a href="http://localhost/201tutorial/profile-2/">
					<li>
						<img src="http://localhost/201tutorial/wp-content/uploads/2017/10/uploaddark.png"/>My Uploads
					</li>
				</a>
				<a href="http://localhost/201tutorial/history-2/">
					<li>
						<img src="http://localhost/201tutorial/wp-content/uploads/2017/10/history.png"/>Veiwing History
					</li>
				</a>
				<a href="http://localhost/201tutorial/favourites-2/">
					<li>
						<img src="http://localhost/201tutorial/wp-content/uploads/2017/10/favourites.png">Favourites
					</li>
				</a>
				<a href="http://localhost/201tutorial/settings-2/">
					<li>
						<img src="http://localhost/201tutorial/wp-content/uploads/2017/10/settings.png"/>Settings
					</li>
				</a>
			</ul>
		</div>
		<!-- MENU END -->
		<?php
		$date1 = strtotime('<?php echo the_time("Y F j g:i"); ?>');
		$date2 = strtotime(date('Y-m-d H:i'));
		$seconds_diff = $date2 - $date1;
		date_default_timezone_set('Pacific/Auckland');

		?>
		

		<!-- HISTORY STARTS -->
		<div id="history">
			<div class="g-65">
				<h1>History</h1>	
				<h3>Viewed Videos</h3>
				<ul class="grid">
					<?php $loop = new WP_Query( array( 'post_type' => 'videos', 'meta_key' => 'category', 'meta_value' => 'dream', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>
						<?php while( $loop->have_posts() ) : $loop->the_post();?>
						    <?php
						    // Custom Fields variables
							    $title          = get_field('title');
							    $username       = get_field('username');
							    $category       = get_field('category');
							    $genre          = get_field('genre');
							    $thumbnail_image = get_field('thumbnail_image');
						   	?>
					<li class="thumbnail grid-item <?php echo $genre; ?>">
						<a href="preview.html">		
						  	<img class="previewimg" src="<?php echo $thumbnail_image; ?>" >
						  	<div class="thumbnailtext">
								<h2><?php echo $title; ?></h2>
								<p><?php  global $current_user;
      										get_currentuserinfo(); echo $current_user->user_login . "\n"; ?><br>
								Uploaded 5 days ago<br>
								<?php echo $category; ?> - <?php echo the_category(' ') ?><br>
								522,003 Views</p>
							</div>
						</a>
					</li>
								
						<?php endwhile; ?>
	          		<?php wp_reset_postdata(); // reset the query ?>
				</ul>	
			</div>
		</div>
		<!-- HISTORY END -->
	</div>		
	<!-- MAIN CENTER CONTENT ENDS -->

<!-- </div> -->
<!-- MAIN PAGE ENDS-->

<?php get_footer(); ?>
</div>