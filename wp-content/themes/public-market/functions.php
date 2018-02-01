<?php

//require get_template_directory() . '/includes/function-admin.php';

add_action('after_setup_theme', 'custom_setup');

function custom_setup() {

    // Oculta a barra de admin no front
    add_filter('show_admin_bar', '__return_false');

    // Executa as função ao instalar o tema
    add_action('init', 'custom_init');

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
    wp_register_script('enllax', PW_THEME_URL . 'assets/js/jquery.enllax.min.js', array('esc-jquery'), null, true);
    wp_register_script('asPieProgress', PW_THEME_URL . 'assets/js/jquery-asPieProgress.js', array('esc-jquery'), null, true);
    wp_register_script('main', PW_THEME_URL . 'assets/js/main.js', array('jquery'), null, true);




    wp_enqueue_script('esc-jquery');
    wp_enqueue_script('materialize');
    wp_enqueue_script('enllax');
    wp_enqueue_script('asPieProgress');
    wp_enqueue_script('main');

}


function custom_init() {
    // ============================
    // CRIA O CUSTOM POST TYPE BLOG
    // ============================
    $attr = array(
        'public' => true, //Tira as propriedades de exibição do site, não terá uma url para esse tipo de post
        'show_ui' => true, //Permite que seja exibido no admin
        'supports' => array('title', 'editor', 'page-attributes', 'thumbnail'), // Exibe as informações necessárias, nesse caso: Título, Editor de Texto, Ordenação, Imagem destacada
        'taxonomies' => array('post_tag'),
        'labels' => array(
            'name' => 'Codes',
            'singular_name' => 'Codes'
        ),
    );
    register_post_type(CPT_CODES, $attr);

    $attr2 = array(
        'public' => true, //Tira as propriedades de exibição do site, não terá uma url para esse tipo de post
        'show_ui' => true, //Permite que seja exibido no admin
        'supports' => array('title', 'editor', 'page-attributes', 'thumbnail'), // Exibe as informações necessárias, nesse caso: Título, Editor de Texto, Ordenação, Imagem destacada
        'taxonomies' => array('post_tag'),
        'labels' => array(
            'name' => 'Policies',
            'singular_name' => 'Policies'
        ),
    );
    register_post_type(CPT_POLICIES, $attr2);

    $attr3 = array(
        'public' => true, //Tira as propriedades de exibição do site, não terá uma url para esse tipo de post
        'show_ui' => true, //Permite que seja exibido no admin
        'labels' => array(
            'name' => 'Press',
            'singular_name' => 'Press'
        ),
    );
    register_post_type(CPT_PRESS, $attr3);

    // Permite que o wordpress não verifique sempre as opções de reescrita de URL, com isso sobrecarga desnecessária
    // Ele somente fará a verificação se o valor for diferente da definição
    // Isso permite que eu possa alterar a url de todos os posts de um tipo, desde que eu identifique na definição da função como 'second' ou sucessivamente
    if (get_option('custom_permalinks') !== CUSTOM_PERMALINKS) {
        update_option('custom_permalinks', CUSTOM_PERMALINKS);
        flush_rewrite_rules();
    }



    register_taxonomy("blog-categories", array(CPT_CODES), array(
        "hierarchical" => true,
        "label" => "Categories",
        "singular_label" => "Category",
        "rewrite" => array(
            'slug' => 'codes',
            'with_front' => false)
            )
    );
	register_taxonomy("blog-categories", array(CPT_POLICIES), array(
        "hierarchical" => true,
        "label" => "Categories",
        "singular_label" => "Category",
        "rewrite" => array(
            'slug' => 'policies',
            'with_front' => false)
            )
    );
	register_taxonomy("blog-categories", array(CPT_PRESS), array(
        "hierarchical" => true,
        "label" => "Categories",
        "singular_label" => "Category",
        "rewrite" => array(
            'slug' => 'press',
            'with_front' => false)
            )
    );
}
define('CPT_CODES', 'codes');
define('CPT_POLICIES', 'policies');
define('CPT_PRESS', 'press');
define('CUSTOM_PERMALINKS', 2);



define('PW_URL', get_home_url()); /* <?php echo PW_URL; ?> */
define('PW_THEME_URL', get_bloginfo('template_url') . '/'); /* <?php echo PW_THEME_URL; ?> */
define('PW_SITE_NAME', get_bloginfo('name')); /* <?php echo PW_SITE_NAME; ?> */
define('PW_SITE_DESCRIPTION', get_bloginfo('description')); /* <?php echo PW_SITE_DESCRIPTION; ?> */


/* Numero de Caracters no preview de um Post */
function new_excerpt_length($length) {
	return 13;
}
add_filter('excerpt_length', 'new_excerpt_length');


/* Exemplo Configuração de Sidebar */
function widget_setup() {

    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<div class="widget-box"><div class="title-widget">',
            'before_title' => '<h4>',
            'after_title' => '</h4></div><div class="body-widget">',
            'after_widget' => '</div></div>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Sidebar-blog-scetion',
            'id' => 'sidebar-2',
            'class' => 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<div class="widget-box-blog"><div class="title">',
            'before_title' => '<h4>',
            'after_title' => '</h4></div><div class="body-widget">',
            'after_widget' => '</div><div class="gradient_Rrt"></div></div>'
        )
    );


}
add_action('widgets_init','widget_setup');


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
		'page_title' 	=> 'Social Links',
		'menu_title'	=> 'Social Media',
		'parent_slug'	=> 'theme-social-settings',
		'capability'	=> 'edit_posts',
        'parent_slug'   => 'public-market',
	));



}
