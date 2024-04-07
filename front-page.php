<!-- in wordpress , it is instructed that home-page calls front-page.php first if it is available otherwise it calls index.php
 -->
 <?php
get_header()
?>

<body>

  <div class="container  mt-3 mb-4 ">
    <!------Introduction------>
    <div class="row">
      <div class="col-lg-8 col-md-8 col-12 mt-5 pt-5 ps-5 bg-intro">
        <p class="h2 ms-5 mt-5">Hi, I'm <span class="h1 text-danger">Iqra Rasheed</span> </p>
        <p class="h3 ms-5 mt-3">from Pakistan.</p>
        <p class="h2 ms-5 mt-3">A <span class="text-danger">Junior</span> Front-End-Developer.</p>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="<?php echo get_theme_file_uri('Assets/pexels-andrea-piacquadio-3756679.jpg" class="img-fluid mt-5 ms-1 rounded object-fit-cover" alt="image-girl') ?>" style="width:100%; height:90%;">
      </div>
    </div>
  </div>
  <!--displaying posts on wordpress -->

  <!-- have_posts checks the posts exits and the_post target each post , if we use get function then it means it will just fetch the post but will not display it , so we have to write echo first, we can use simple the_date function as well, loop runs once for each post-->

  <div class="main"><!-- main-div and it have two div/section insides -->

    <!-- section 1 -->
    <section class="all-posts">
      <h1> All Posts </h1>
      <?php
      
      while (have_posts()) {
        the_post()  ?>

        <h3> Post Name: <?php the_title(); ?></h3>
        <div class="post-thumbnail">
        <?php echo get_the_post_thumbnail(); ?>
        </div>
        <p> Published on: <?php echo get_the_date(); ?></p>
        <p> By Author: <?php the_author(); ?></p>
        <a class="page-readmore" href="<?php the_permalink(); ?>"><p>Read More</p></a>
        <hr>
      
      <?php
      }
      ?>

    </section>

    <!-- section 2 -->
    <!-- when we have to simply fetch posts we use above loop but when we have to fetch any post-type like page then we use below method,if we want to fetch all pages then we will use -1 , otherwise use the number of how many u want to use,  in associative array we use arrow with equal  -->
    <!-- wp_query is class and with class we use new keyword, it will follow the arguments given to it, argument is in form  of array , -->
    <section class="all-pages">
      <h1>All Pages</h1>
      <?php
      
      $all_pages = new WP_Query(array(
        'post_type' => 'page',
        'posts_per_page' => -1,
        'orderby'=> 'date', //if you want to show them in order of date on which they have been created , use date
        'order' => 'DESC', //in which order you want to show them in ASC or DESC
      ));

      while ($all_pages->have_posts()) {
        $all_pages->the_post()  ?>

        <h3> Post Name: <?php echo get_the_title(); ?></h3>
        <p> Published on: <?php echo get_the_date(); ?></p>
        <p> By Author: <?php echo get_the_author(); ?></p>
        <a class="page-readmore" href="<?php the_permalink(); ?>"><p>Read More</p></a><!-- If you want your user to click on , and move to other side to read that thing, use permalink in anchor ta-->
        <hr>
      <?php }
      ?>
    </section>

  </div>

  <!-------About me section---------->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p class="h1 text-center mt-5 mb-4 about-hover">About Me</p>
      </div>
    </div>
    <div class="row">
      <!------picture------->
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <img src="<?php echo get_theme_file_uri('Assets/pexels-andrea-piacquadio-3756679.jpg') ?>" alt="image-girl" class="img-fluid object-fit-cover" style="width:100%; height:100%">
      </div>
      <!------About me info------->
      <div class="col-8 col-md-8 col-12 mt-5">
        <div class="card rounded card-hover">
          <div class="card-body ">
            <p class="fs-5 mt-3 px-4 py-0">I'm <span class="fw-bold text-danger">Iqra Rasheed</span> a budding front-end developer on an exciting journey of continuous learning and growth. I'm passionate about crafting user-friendly and visually appealing web experiences that leave a positive impact.
              <br>
            <p class="fs-5 mt-1 px-4 py-0">
              As a junior developer, I'm eagerly soaking up knowledge and honing my skills in HTML, CSS, and JavaScript. While I might not have an extensive portfolio just yet, I believe in the power of hands-on experience, and I'm constantly working on small projects to apply what I learn. Every line of code I write is a step forward in my development journey.
            </p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!------Skills section------->
    <div class="row mt-3 mb-5">
      <div class="col-12">
        <p class="h1 mt-5 text-center mb-4 about-hover">My Skills</p>
      </div>
    </div>
    <div class="row ">
      <!------HTML5------->
      <div class="col-lg-4 col-md-6 col-12 mt-5">
        <div class="card card-hover pt-4 align-items-center me-2">
          <div class=" bg-light rounded-circle text-center pt-2 ms-5 me-5" style="width:150px; height:150px;">
            <i class="fa-brands fa-html5 fa-2xl mt-5" style="color: #d75904; font-size: 80px;"></i>
            <p class="h5 mt-4">HTML5</p>
          </div>
          <div class="card-body text-center mt-3 mb-3">
            <p class="card-text">With a solid grasp of HTML5, I've crafted engaging designs for websites. As I move forward, I am excited to delve deeper into HTML5's potential, continually refining my skills to create even more compelling and innovative web experiences.</p>
          </div>
        </div>
      </div>
      <!------CSS3------->
      <div class="col-lg-4 col-md-6 col-12 mt-5 ">
        <div class="card card-hover pt-4 align-items-center me-2">
          <div class=" bg-light rounded-circle text-center pt-3 ms-5 me-5" style="width:150px; height:150px;">
            <i class="fa-brands fa-css3-alt fa-2xl mt-5" style="color: #235fc7;font-size: 80px;"></i>
            <p class="h5 mt-4">CSS3</p>
          </div>
          <div class="card-body  text-center mt-3 mb-3">
            <p class="card-text">I'm skilled in CSS3 for crafting visually appealing websites with adaptable layouts and lively animations. I make designs interactive using CSS3 techniques. As I progress, I'm dedicated to creating even more dynamic web experiences.</p>
          </div>
        </div>
      </div>
      <!------Javascript------->
      <div class="col-lg-4 col-md-6 col-12 mt-5">
        <div class="card card-hover pt-4 align-items-center me-2">
          <div class=" bg-light rounded-circle text-center pt-3 ms-5 me-5" style="width:150px; height:150px;">
            <i class="fa-brands fa-js fa-2xl mt-5" style="color: #eed63a;font-size: 80px;"></i>
            <p class="h5 mt-4">JavaScript</p>
          </div>
          <div class="card-body text-center mt-3 mb-3">
            <p class="card-text">
              I'm in the process of learning JavaScript, steadily improving my skills. As I gain more knowledge, I am actively applying it by adding basic interactive elements to websites and enhancing the overall user experience.
            </p>
          </div>
        </div>
      </div>
      <!------Bootstrap 5------->
      <div class="col-lg-4 col-md-6 col-12 mt-5">
        <div class="card card-hover pt-4 align-items-center me-2">
          <div class=" bg-light rounded-circle text-center pt-3 ms-5 me-5" style="width:150px; height:150px;">
            <i class="fa-brands fa-bootstrap fa-2xl mt-5" style="color: #3357e6;font-size: 80px;"></i>
            <p class="h5 mt-4">Bootstrap 5</p>
          </div>
          <div class="card-body text-center mt-3 mb-3">
            <p class="card-text">Using Bootstrap 5, I design responsive layouts for websites, ensuring screen compatibility. With hands-on experience crafting small websites, I've harnessed Bootstrap 5's ability to create consistent, appealing designs.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!------Projects section------->
    <div class="row mt-3 mb-5">
      <div class="col-12">
        <p class="h1 mt-5 text-center mb-4 about-hover">My Projects</p>
        <p class="text-center fs-5">As I'm beginner I have not worked on many projects, but I'm excited to show you some of my work.</p>
      </div>
    </div>
    <div class="row">
      <!------project 1------->
      <div class="col-lg-4 col-md-6 col-12 mb-5">
        <div class="card card-hover">
          <img src="<?php echo get_theme_file_uri('Assets/GUI.png" class="card-img-top object-fit-cover') ?>" alt="Google-Meet-Interface" style="height:220px;">
          <div class="card-body text-center mt-2">
            <h5 class="card-title">Google-Meet-Interface</h5>
            <p class="card-text mt-3 mb-2 pb-3">In this project, I skillfully recreated the Google Meet interface from scratch using HTML5 and CSS3.</p>
            <p>Explore the code on GitHub: <br><a href="https://github.com/Iqra327/Google-Meet-Interface/tree/master" target="blank">https://github.com/Iqra327/Google-Meet-Interface/tree/master</a></p>
          </div>
        </div>
      </div>
      <!------project 2------->
      <div class="col-lg-4 col-md-6 col-12 mb-5">
        <div class="card card-hover">
          <img src="<?php echo get_theme_file_uri('Assets/Figma-Bitesized.jpg') ?>" class="card-img-top object-fit-cover" alt="Figma-Bitesized-Design-img" style="height:220px;">
          <div class="card-body text-center mt-2">
            <h5 class="card-title">Figma-Bitesized-Design</h5>
            <p class="card-text mt-2 mb-2">I recreated the Figma-Bitesized website using HTML5, CSS3, and Bootstrap 5, showcasing my skills in web development and responsive design.</p>
            <p>Explore the code on GitHub: <br><a href="https://github.com/Iqra327/Figma-Bitesized-Design/tree/master" target="_blank">https://github.com/Iqra327/Figma-Bitesized-Design/tree/master</a></p>
          </div>
        </div>
      </div>
      <!------project 3------->
      <div class="col-lg-4 col-md-6 col-12 mb-5">
        <div class="card card-hover pb-4">
          <img src="<?php echo get_theme_file_uri('Assets/Buyhive-Full.jpg') ?>" class="card-img-top object-fit-cover" alt="Buyhive-Landing-Page-img" style="height:220px;">
          <div class="card-body text-center mt-2">
            <h5 class="card-title">Buyhive-Landing-Page</h5>
            <p class="card-text mt-2 mb-2">
              I recreated the BuyHive landing page using HTML5, CSS3, and Bootstrap 5, demonstrating my ability to replicate designs and employ web development tools.</p>
            <p>Explore the code on GitHub: <br><a href="https://github.com/Iqra327/buyhive/tree/master" target="_blank">https://github.com/Iqra327/buyhive/tree/master</a></p>
          </div>
        </div>
      </div>
      <!------project 4------->
      <div class="col-lg-4 col-md-6 col-12">
        <div class="card card-hover pb-4">
          <img src="<?php echo get_theme_file_uri('Assets/MCBLOG-Full.jpg') ?>" class="card-img-top object-fit-cover" alt="MC Blog Design" style="height:220px;">
          <div class="card-body text-center mt-2">
            <h5 class="card-title">MC-Blog</h5>
            <p class="card-text mt-3 mb-4">I recreated the MC-Blog website using HTML5, CSS3, and Bootstrap 5, showcasing my ability to blend design and coding for effective web development.</p>
            <p>Explore the code on GitHub: <br><a href="https://github.com/Iqra327/MC-Blog-Design/tree/master" target="_blank">https://github.com/Iqra327/MC-Blog-Design/tree/master</a></p>
          </div>
        </div>
      </div>
    </div>
    <!------contact section------->
    <div class="row mt-3 mb-5">
      <div class="col-12">
        <p class="h1 mt-5 text-center mb-4 about-hover">Contact</p>
      </div>
    </div>
    <!------contact info------->
    <div class="row mb-5">
      <div class="col-12">
        <div class="card card-hover">
          <div class="card-body text-center mt-3">
            <p class="">Feel free to get in touch with me for any inquiries, collaborations, or discussions. I'm always open to connecting with fellow creators and professionals.</p>
            <button class="border-1 px-3 py-2 button-hover mt-3"><a href="Assets/Iqra's Resume.pdf" target="_blank" class="download-btn text-decoration-none" download>Download CV</a></button>
            <p class="mt-4 fs-5 ">Email: <a href="mailto:iqrarasheed219@gmail.com">iqrarasheed219@gmail.com</a></p>
            <p class="fs-5">Phone No: <a href="tel:03123456789">03123456789</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- adding sidebar -->
<!-- dynamic_sidebar is a function to call sidebar here, and sidebar-1 is the id we assign to it -->
  <div class="">
  <?php dynamic_sidebar('sidebar-1'); ?>
  </div>
  <?php
  get_footer()
  ?>