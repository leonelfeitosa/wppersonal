<?php 
//require_once get_template_directory_uri() . '/inc/wp-bootstrap-navwalker.php';
if ( ! file_exists( get_template_directory() . '/inc/wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
    require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
}
// Função para carregamento dos scripts
function carrega_scripts(){

	// Enfileirando estilos e scripts próprios

	

	wp_enqueue_style( 'boottrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.css', array(), '1.0', 'all');
	//font
	wp_enqueue_style( 'font', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all');
	
	wp_enqueue_style( 'template1', get_template_directory_uri() . '/css/creative.min.css', array(), '1.0', 'all');
	wp_enqueue_style( 'template2', get_template_directory_uri() . '/vendor/magnific-popup/magnific-popup.css', array(), '1.0', 'all');

	wp_enqueue_script( 'template3', get_template_directory_uri(). '/vendor/jquery/jquery.min.js', array(), null, true);
	wp_enqueue_script( 'template4', get_template_directory_uri(). '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), null, true);
	wp_enqueue_script( 'template5', get_template_directory_uri(). '/vendor/jquery-easing/jquery.easing.min.js', array(), null, true);
	wp_enqueue_script( 'template6', get_template_directory_uri(). '/vendor/scrollreveal/scrollreveal.min.js', array(), null, true);
	wp_enqueue_script( 'template7', get_template_directory_uri(). '/vendor/magnific-popup/jquery.magnific-popup.min.j', array(), null, true);
	wp_enqueue_script( 'template8', get_template_directory_uri(). '/js/creative.min.js', array(), null, true);
	wp_enqueue_script( 'template9', get_template_directory_uri(). '/js/conteudo-site.js', array(), null, true);

	wp_enqueue_style( 'css', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');

	
	// Enfileirando Bootstrap
	wp_enqueue_style( 'font1', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800', array(), '3.3.7', 'all');
	wp_enqueue_script( 'font2', 'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic', array('jquery'), null, true);	
}
add_action( 'wp_enqueue_scripts', 'carrega_scripts' );

// Função para registro de nossos menus


register_nav_menus(
	array(
		'meu_menu_principal' => 'Menu Principal',		
	)
);


// Adicionando suporte ao tema
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('video', 'image'));

// Registrando sidebars
if (function_exists('register_sidebar')){
	register_sidebar(
		array(
			'name'		=> 'Barra Lateral 1',
			'id'		=> 'sidebar-1',
			'description'	=> 'Barra lateral da página home',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);
	register_sidebar(
		array(
			'name'		=> 'Barra Lateral 2',
			'id'		=> 'sidebar-2',
			'description'	=> 'Barra lateral da página blog',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);
}

