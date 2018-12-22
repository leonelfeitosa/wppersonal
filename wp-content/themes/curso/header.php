<!DOCTYPE html>
<html lang="en">

  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Personal Brandão</title>

    <?php wp_head(); ?>
      
    </head>

  <body id="page-top">

    <div class="container corfundo">
      

  
   
    <!-- Navigation -->
    
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">

  
 

       <?php $template_directory = get_template_directory_uri(); ?>


       <img src="<?php echo $template_directory;?>/img/logobrandao.png" class="img-fluid img"/>
        
        
        <a class="navbar-brand js-scroll-trigger" href="#page-top"> Personal Brandão</a>

        

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>

        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">          
          <?php                     
              
            add_filter( 'nav_menu_css_class', function($classes) {
              $classes[] = 'nav-item';
              return $classes;
            }, 10, 1 );
            
            function add_link_atts($atts) {
              $atts['class'] = "nav-link js-scroll-trigger";
              return $atts;
            }
            
            add_filter( 'nav_menu_link_attributes', 'add_link_atts');

            wp_nav_menu( array(
            'theme_location' => 'meu_menu_principal',           
            'menu_class' => 'navbar-nav ml-auto',
            'walker' => new WP_Bootstrap_Navwalker(),
            ));

           

           ?>            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Trabalhos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#parceiros">Parceiros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
            </li>
          </ul>
        </div>


      </div>
    </nav>

    <div class="row">
      <div class="col-md-9"></div> 
    <div class="col-md-3 magempesquisa">
    <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
    </div>
    </div>


    
   
    
