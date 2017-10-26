<!--    /** 
   Template Name: Profile 
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
				<h4>Sandra Son</h4>
			</div>
			<ul>
				<a href="#myuploads">
					<li onclick="myuploadsbutton()">
						<img src="http://localhost/201tutorial/wp-content/uploads/2017/10/uploaddark.png"/>My Uploads
					</li>
				</a>
				<a href="#history">
					<li onclick="historybutton()">
						<img src="http://localhost/201tutorial/wp-content/uploads/2017/10/history.png"/>Veiwing History
					</li>
				</a>
				<a href="#favourites">
					<li onclick="favouritesbutton()">
						<img src="http://localhost/201tutorial/wp-content/uploads/2017/10/favourites.png">Favourites
					</li>
				</a>
				<a href="#settings">
					<li onclick="settingsbutton()">
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
		<!-- UPLOADS -->
		<div id="myuploads">
			<div class="g-65">
				<h1>Uploads</h1>	
				<h3>Uploaded Dreams</h3>
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
								<p><?php echo $username; ?><br>
								<?php echo get_the_time("g:i a"); ?><br>
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
		<!-- UPLOADS END -->

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
								<p><?php echo $username; ?><br>
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

		<!-- FAVOURITES START -->
		<div id="favourites">
			<div class="g-65">
				<h1>Favourites</h1>	
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
								<p><?php echo $username; ?><br>
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
		<!-- FAVOURITES END -->

		<!-- SETTINGS BEGIN -->
		<div id="settings">
		 	<!-- SETTINGS CONTENT -->
			<div class="g-65">
			<h1>Settings</h1>
				<div class="g-half">
					<ul class="flex-containercolumn">
						<li onclick="editaccount()"class="settingoptions">Edit Account</li>
						<li onclick="password()" class="settingoptions">Password and Login</li>
						<li onclick="privacy()" class="settingoptions">Privacy</li>
						<li onclick="notifications()" class="settingoptions">Notifications								
							<label class="switch">
								<input type="checkbox">
								<span class="slider"></span>
							</label>
						</li>	  		
					</ul>
				</div>

				<!-- SETTINGS WINDOW -->
				<div id="settingswindow" class="g-half">

					<!-- EDIT ACCOUNT -->
					<div id="editaccount">
						<ul>
							<li>
								<b>User name:</b> Sandra Son <span class="edit"><i>edit</i></span>
							</li>
							<li>
								<b>Profile Image</b> <span class="edit"><i>edit</i></span>
							</li>
							<li>
								<b>Bio</b><span class="edit"><i>edit</i></span>
							</li>
							<li>
								<b>Country:</b> New Zealand <span class="edit"><i>edit</i></span>
							</li>
							<li>
								<b>Social Media Links:</b><br>					
								<i>www.facebook.com/sandrason
								www.twitter.com/sandrason</i></span>
								<span class="edit"><i>edit</i></span>
							</li>
						</ul>
					</div>
					<!-- EDIT ACCOUNT ENDS -->	

					<!-- PASSWORD -->
					<div id="password">
						<ul>
							<li>
								<b>Password:</b> ******* <span class="edit"><i>edit</i></span>
							</li>
							<li>
								<b>Security Questions</b> <span class="edit"><i>edit</i></span>
								<p>What is your mothers maiden name?</p>
								<p>What is the name of your childhood pet?</p>
								<p>What is the name of your first teacher?</p>
							</li>
						</ul>
					</div>
					<!-- PASSWORD ENDS -->

					<!-- PRIVACY -->
					<div id="privacy">
						<ul>
							<li>
								<b>Who can see my uploads?:</b> Everyone <span class="edit"><i>edit</i></span>
							</li>
							<li>
								<b>Who can see my favourited dreams/nightmares?:</b> Everyone<span class="edit"><i>edit</i></span>
							</li>
						</ul>
					</div>
					<!-- PRIVACY ENDS-->

				</div> 
				<!-- SETTINGS WINDOW END -->

			</div>
			<!-- SETTINGS CONTENT END -->

		</div>	
		<!-- SETTINGS END -->

	</div>		
	<!-- MAIN CENTER CONTENT ENDS -->

<!-- </div> -->
<!-- MAIN PAGE ENDS-->

<?php get_footer(); ?>
</div>