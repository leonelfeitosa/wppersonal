<?php get_header(); ?>

<img class="masthead text-center text-white d-flex" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""/>

<section id="services" class="p-0">
  <br>
  <div class="container">
  <div class="row">
  
    <div class="noticia col-md-9">
    <?php echo do_shortcode("[wp_blog_designer]");  ?>
    </div>
    <aside class="barra-lateral col-md-3">    
    <?php get_sidebar()?>
    </aside>     
    </div>  
    </div>

    </section>  
    
    <?php get_footer(); ?>