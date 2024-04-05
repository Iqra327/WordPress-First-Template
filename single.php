<!-- it is by-default name from wordpress , it is already defined for opening other posts, you have to write it single.php, no other name -->

<?php
get_header();
?>


<div class="single-post">
  <?php 
  while (have_posts()){
    the_post() ?>
  
  <h1> <?php echo get_the_title(); ?> </h1>
  <?php echo get_the_post_thumbnail();?>
  <p> <?php echo get_the_content(); ?> </p>
  <p> <?php echo get_the_date(); ?></p>
  <p> <?php echo get_the_author(); ?> </p>
  <?php comments_template(); ?> <!--for adding comments -->

  <?php 
  }
  ?>

</div>


<?php
get_footer();
?>