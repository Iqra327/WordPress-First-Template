<?php
get_header()
?>
<div class="blog-page">
<?php
      
      while (have_posts()) {
        the_post()  ?>
        <div class="blog-div">
        <div class="post-thumbnail">
        <?php echo get_the_post_thumbnail(); ?>
        </div>
        
        <div class="post-content">
        <h3> Post Name: <?php the_title(); ?></h3>
        <p> Published on: <?php echo get_the_date(); ?></p>
        <p> By Author: <?php the_author(); ?></p>
        <a class="page-readmore" href="<?php the_permalink(); ?>"><p>Read More</p></a>
      </div>
        </div>
        <hr>        
      <?php
      }
      ?>
      <!-- to display pagination -->
      <div class="pagination"> 
      <?php echo get_the_posts_pagination(); ?>
      </div>
      

</div>


  <?php
  get_footer()
  ?>