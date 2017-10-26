<?php
   /** 
   Template Name: Dreams
   */ 
   ?> 
<?php get_header(); ?>

<!-- PAGE CONTENT -->
		<div class="page-wrap">
			<div class="center">
				<div class="g-row">
					
							<?php $parent_dreams = 21; // Change this ID to match the ID value of the "Sepeda" category ?>
							<?php $categories = get_categories( "child_of=$parent_dreams" ); ?> 

							<?php if ($categories) : ?>
								<?php $genre          = get_field('genre'); ?>
							    <div class="catagories">
									<ul>
							        <li><b>Categories:</b></li>
							        <li class="all">All</li>
							       <!-- Loop through the sub-categories of 'Sepeda' and print the names and links -->
							        <?php foreach ($categories as $dream) { 
							            echo "<li class='$dream->slug button'>" . $dream->name . "</a></li>";
							        } ?>

							        <?php wp_reset_query();  // Restore global post data  ?> 
							    </ul>
							<?php endif; ?>





<!-- 						 <a class="all" ><li><strong>Catagories:</strong></li></a>
							
						        <?php
							          // Custom Fields variables
						        	$args           = array(
						        		'taxonomy' => 'category',
						        		'style' => ' ',
						        		'child_of' => 21,
						        		// 'parent' => -1,
						        		'title_li' => '',
						        		'hide_empty' => 0,
						        		'orderby' => 'name',
						        		'echo' => false,
						        		'show_count' => 1, //shows how many videos have that category
						        		'hierarchical' => 0 //0 means doesn't show parents
						        		

						        		);
						        	$nightmare_genre        = get_field('nightmare_genre');
							         $dream_genre        = get_field('dream_genre');
							         $class        = get_field('class');
						    	?>

							<a class="<?php echo $class; ?>"><?php echo wp_list_categories($args); ?></a> 
 -->
							
						</ul>
					</div>

    <!-- Posts Area -->
	<div class="dreamscenter">
		<h3>Most Watched Dreams</h3>
		<!-- grid item starts -->
		
			<ul class="grid">
			<div class="grid-sizer"></div>

	      <!-- php loop begins  -->
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

							  	<li class="g-24 grid-item <?php echo $genre; ?>" >	
							  	<a href="<?php the_permalink() ?>">	
							  		<img class="previewimg" src="<?php echo $thumbnail_image; ?>" >
									<div class="textbox">
										<div class="slide">
											<h2><?php echo $title; ?></h2>
											<p><?php echo $username; ?><br>
											Uploaded 23 hours ago<br>
											<?php echo the_category(' ') ?><br>
											968,252 Views</p>
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
			</div>
			

			<?php get_footer(); ?>