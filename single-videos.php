<?php
// Custom Fields variables
         $title          = get_field('title');
         $username       = get_field('username');
         $category       = get_field('category');
         $genre          = get_field('genre');
         $thumbnail_image = get_field('thumbnail_image');
         $description = get_field('description');
         $video         = get_field('video');

?>

<?php get_header(); ?>

    <!-- Posts Area -->
    <div class="page-wrap"> 
    <main class="posts_area">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <section id="preview">
        <div id="vid">
        <video width="1000" height="750" controls>
        <source src="<?php echo $video;?>" type="video/mp4">
        </video>
          <div class="previewpageinfo">
              <h2><?php echo $title; ?> - Preview</h2>
              <a href="http://localhost/201tutorial/profile-2/"><img id="profile" src="http://localhost/201tutorial/wp-content/uploads/2017/10/profiledark.png"></a>
              <a href="http://localhost/201tutorial/profile-2/"><p><?php  global $current_user;
                          get_currentuserinfo(); echo $current_user->user_login . "\n"; ?></br>
              <?php echo get_the_date(); ?> </br>
              <b><?php echo $category; ?> - <?php echo the_category(' ') ?></b></br>
              <?php if(function_exists('the_views')) { the_views(); } ?></p>
              <a href="http://localhost/201tutorial/vr-2/"><img id="vrbutton" src="http://localhost/201tutorial/wp-content/uploads/2017/10/vrdark.png"></a>
              </br>
              </p>

              <div>

                <p class="vidbio"><?php echo $description; ?></p>
              </div> 
          </div>
        </div>
      </section>


  <?php endwhile; endif; ?>
    </main>
</div>


  </body>
</html>