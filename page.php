<!-- it if for pages , as single is for post, 
pages don't have comment section mostly  -->

<?php
get_header();
?>


<div class="single-post">
  <?php 
  while (have_posts()){
    the_post() ?>
  
  <h1> <?php echo get_the_title(); ?> </h1>
  <p> <?php echo get_the_content(); ?> </p>
  <p> <?php echo get_the_date(); ?></p>
  <p> <?php echo get_the_author(); ?> </p>
  
  <?php 
  }
  ?>

</div>


<?php
get_footer();
?>