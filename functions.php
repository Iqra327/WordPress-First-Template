<?php
function firstwebsite_files()
{
  wp_enqueue_style('bootstrap-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css');
  wp_enqueue_style('fontawesome-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

  wp_enqueue_style('firstwebsite_main_style', get_stylesheet_uri());

  wp_enqueue_script('main_js', get_theme_file_uri('/main.js'), NULL, '1.0', false);
}

add_action('wp_enqueue_scripts', 'firstwebsite_files');

// register_nav_menu('primary', 'Main Menu'); //it adds menu in appearence of dashboard.
// register_nav_menu('secondary', 'secondary Menu'); //secondary or primary are name use to call or acces menu on front-end and footer menu name shows in dashboard, names can be anything.

//another method to add multiple menus

function firstwebsite_theme_features()
{
  register_nav_menus(array(
    'primary' =>'Main Menu',
    'secondary' => 'Secondary Menu',
    'useful' => 'Useful Links'
  ));

  //adding function to add logo to our site through site//it is recommended to add function to already created function
  add_theme_support('custom-logo');

  add_theme_support('post-thumbnails'); //to show picture feature in the dashboard post

}

//now we have to call function through add hook

add_action('after_setup_theme', 'firstwebsite_theme_features');

//after_setup_theme means that menus should register after theme is loaded 


//how to register widgets area in dashboard apearence, register sidebar

//register_sidebar is a function to register sidebar and we pass arguments  in it in the form of array, name is the name to appear on website , it can have space in it , and id is used to call it and it can't have space in it

//we assign it class to apply css on , we assign it class in/by section, before_widget means that before widget is add there is a section of class to apply css . and after_widget means that section ends after the widget is created . you can use section or div to assign class

//we also call this function where we want to use it 

function website_sidebars(){
  register_sidebar(array(
    'name' => ('Sidebar 1'),
    'id'  => 'sidebar-1',
    'before_widget' => '<section id="first-sidebar" class="sidebar1">',
    'after_widget' => '</section>,'
  ));
}

add_action('widgets_init', 'website_sidebars');