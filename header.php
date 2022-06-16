<!DOCTYPE html>
<html <?php language_attributes();?> class="no-js">
<head>

  <meta charset="<?php bloginfo('charset');?>">
  <title><?php wp_title('');?><?php if (wp_title('', false)) {echo ' :';}?> <?php bloginfo('name');?></title>

  <link href="//www.google-analytics.com" rel="dns-prefetch">
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet">

 
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
  <!---font Awesome--->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <?php wp_head() ?>


 </head>
 

 <body id="page-top" <?php body_class();?> >
  
  
  <div class="page-wrap">

     <div class="top-Icons">
      <div class="icon-wrap1">
        <div class="mail">
          <a href="mailto:booking@imperal-reisen.at">booking@imperal-reisen.at</a>
        </div>
        <div class="phone">
          <a href="tel:43 123 456 789">+43 123 456 789</a>
        </div>
        <div class="location">
          <a href="https://www.google.com/maps/search/Musterstra%C3%9Fe+23,+4866+Musterstadt/@48.2989812,14.2913998,17z">Musterstraße 23, 4866 Musterstadt</a>
        </div>
      </div>

      
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-default fixed-top " id="mainNav">
        <div class="container">
          
           <div class="menu-btn"><button class="c-hamburger c-hamburger--htx"><span>toggle menu</span> </button></div>
            <div class="logo animsition-link"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/header_logo.jpg" alt="Name"></a></div>
              
            <div class="collapse navbar-collapse " id="navbarResponsive">
                <?php
                      wp_nav_menu( array(
                          'theme_location'  => 'primary',
                          'depth'           => 2,
                          'container'       => 'div',
                          'container_class' => 'collapse navbar-collapse',
                          'container_id'    => 'bs-example-navbar-collapse-1',
                          'menu_class'      => 'navbar-nav ml-auto animsition-link',
                          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                          'walker'          => new WP_Bootstrap_Navwalker(),
                      ) );
                ?>

                
            </div>

            
            
        </div>
    </nav>
  


 
