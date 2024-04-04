<!DOCTYPE html>
<html>
  <head lang="en">
     <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>My Portfolio</title>
        <link rel="stylesheet" href="style.css">


         <!-------Navbar-------->
    <nav class="navbar navbar-expand-lg navbar-light ps-5 shadow-sm fixed-top" style="background-color: antiquewhite;">
      <div class="container-fluid">
        <div class="custom-logo">
         <?php echo get_custom_logo(); ?> <!--calling custom-logo to display it on page , use echo to print the image-->
        </div>
      
        <a class="navbar-brand h1 ps-4 mt-2 about-hover fs-4" href="#">
           <?php bloginfo('name'); ?>     <!-- to display name at the logo side  -->
          <p class="fs-6">
            <?php bloginfo('description'); ?>
          </P>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <!-- <ul class="navbar-nav ms-auto me-5 pe-4">
            <li class="nav-item me-2 fs-5">
              <a class="nav-link about-hover" href="#">About</a>
            </li>
            <li class="nav-item me-2 fs-5">
              <a class="nav-link about-hover" href="#">Skills</a>
            </li>
            <li class="nav-item me-2 fs-5">
              <a class="nav-link about-hover" href="#">Project</a>
            </li>
            <li class="nav-item me-2 fs-5">
              <a class="nav-link about-hover" href="#">Contact</a>
            </li>
          </ul> -->
          <?php
          wp_nav_menu(array(
            'themelocation' => 'primary',
            'menu_class' => 'navbar-2'//menu_class is a function and navbar-2 is name of class to apply styling, name can be anything.
          ))
          ?>
        </div>
      </div>
    </nav>

    <?php wp_head();  ?> 
    <!-- we write it to tell it that we have add all styling in function.php -->
  </head>