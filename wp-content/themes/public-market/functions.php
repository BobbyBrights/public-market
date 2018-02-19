<?php

//require get_template_directory() . '/includes/function-admin.php';

add_action('after_setup_theme', 'custom_setup');

function custom_setup() {

    // Oculta a barra de admin no front
    add_filter('show_admin_bar', '__return_false');


    // Insere a opção de imagens destacadas
    add_theme_support('post-thumbnails');
    add_image_size('home-thumbnails', 480, 480, array('center'));

    // Insere a opção de menus
    add_theme_support('menus');


    /* Carrega scripts e estilos personalizados */
    add_action('wp_enqueue_scripts', 'custom_formats');
}

function custom_formats() {


    wp_register_script('esc-jquery', PW_THEME_URL . 'assets/js/vendor/jquery-1.12.0.min.js', null, null, true);
    wp_register_script('materialize', PW_THEME_URL . 'assets/js/materialize.min.js', array('esc-jquery'), null, true);
    wp_register_script('swiper', PW_THEME_URL . 'assets/js/swiper.min.js', array('esc-jquery'), null, true);
    wp_register_script('main', PW_THEME_URL . 'assets/js/main.js', array('jquery'), null, true);




    wp_enqueue_script('esc-jquery');
    wp_enqueue_script('materialize');
    wp_enqueue_script('swiper');
    wp_enqueue_script('main');

}



define('PW_URL', get_home_url()); /* <?php echo PW_URL; ?> */
define('PW_THEME_URL', get_bloginfo('template_url') . '/'); /* <?php echo PW_THEME_URL; ?> */
define('PW_SITE_NAME', get_bloginfo('name')); /* <?php echo PW_SITE_NAME; ?> */
define('PW_SITE_DESCRIPTION', get_bloginfo('description')); /* <?php echo PW_SITE_DESCRIPTION; ?> */


/* Numero de Caracters no preview de um Post */
function new_excerpt_length($length) {
	return 13;
}
add_filter('excerpt_length', 'new_excerpt_length');


/* Exemplo Configuração de Menu */
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer1-menu' => __( '1. Footer Menu' ),
      'footer2-menu' => __( '2. Footer Menu' ),
      'footer3-menu' => __( '3. Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


/* Configuração do Tema ACF */
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
		'page_title' 	=> 'Public Market',
		'menu_title'	=> 'Public Market',
		'menu_slug' 	=> 'public-market',
		'capability'	=> 'edit_posts',
        'parent_slug'   => '',
        'icon_url'      => '../wp-content/themes/flow/assets/img/icon-flow-wp.png', // Add this line and replace the second inverted commas with class of the icon you like
        'position' => 4
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Landing Page',
		'menu_title'	=> 'Landing Page',
		'parent_slug'	=> 'theme-social-settings',
		'capability'	=> 'edit_posts',
        'parent_slug'   => 'public-market',
	));



}
