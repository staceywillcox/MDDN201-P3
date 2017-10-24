<?php
// Custom Fields variables
         $title          = get_field('title');
         $username       = get_field('username');
         $category       = get_field('category');
         $genre          = get_field('genre');
         $thumbnail_image = get_field('thumbnail_image');

?>

<?php get_header(); ?>

    <!-- Posts Area -->
    <main class="posts_area">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

   <?php get_header(); ?>
      <div class="page-wrap"> 
      <section id="preview">
        <div id="vid">
        <img src="<?php echo $thumbnail_image; ?>">
          <div id="previewpageinfo">
              <h2><?php echo $title; ?> - Preview</h2>
              <a href="http://localhost/201tutorial/profile-2/"><img id="profile" src="http://localhost/201tutorial/wp-content/uploads/2017/10/profiledark.png"></a>
              <a href="http://localhost/201tutorial/profile-2/"><p><?php echo $username; ?></a></br>
              Uploaded 23 hours ago</br>
              <b><?php echo $category; ?> - <?php echo $genre; ?></b></p>
              <a href="http://localhost/201tutorial/vr/"><img id="vrbutton" src="http://localhost/201tutorial/wp-content/uploads/2017/10/vrdark.png"></a>
              </br>
          </div>
        </div>
      </section>
    </div>

  <?php endwhile; endif; ?>
    </main>
 <?php get_footer(); ?>