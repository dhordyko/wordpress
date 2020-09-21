<?php
/**
 * Humescores functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Humescores
 */

if ( ! function_exists( 'humescores_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function humescores_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Humescores, use a find and replace
	 * to change 'humescores' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'humescores', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'custom-logo' );
	add_theme_support( 'custom-header', array(
 'video' => true,
 'uploads'=> true,
) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'humescores' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'humescores_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'humescores_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function humescores_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'humescores_content_width', 640 );
}
add_action( 'after_setup_theme', 'humescores_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function humescores_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'humescores' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'humescores' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	 register_sidebar( array(
    'name'          => 'Footer area one',
    'id'            => 'footer_area_one',
    'description'   => 'Foote Contactform',
    'before_widget' => '<section class="footer-area footer-area-one">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'name'          => 'Footer area two',
    'id'            => 'footer_area_two',
    'description'   => 'Footer Address Area',
    'before_widget' => '<section class="footer-area footer-area-two">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'name'          => 'Menu display area ',
    'id'            => 'menu_area_one',
    'description'   => 'This widget area discription',
    'before_widget' => '<section class="footer-area menu-page-menu">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'name'          => 'Footer area four',
    'id'            => 'footer_area_four',
    'description'   => 'This widget area discription',
    'before_widget' => '<div class="footer-area address-picture">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

   register_sidebar( array(
    'name'          => 'Home Page Area Slider',
    'id'            => 'home_page_area_slider',
    'description'   => 'Home page offer slider',
    'before_widget' => '<section class="home-page-offer">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
    register_sidebar( array(
    'name'          => 'Sidebar flowed link',
    'id'            => 'sidebar_menu',
    'description'   => 'Flowing sidebar',
    'before_widget' => '<section class="home-page-offer">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
    register_sidebar( array(
    'name'          => 'Calendar new',
    'id'            => 'calendar_news',
    'description'   => 'Flowing sidebar',
    'before_widget' => '<section class="calendar-news">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

 
    register_sidebar( array(
    'name'          => 'Calendar data event',
    'id'            => ' calendar-data-event',
    'description'   => 'Flowing sidebar',
    'before_widget' => '<section class="calendar-data">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
     register_sidebar( array(
    'name'          => 'Dish offer',
    'id'            => 'dish_offer',
    'description'   => 'special menu in main page',
    'before_widget' => '<div class="special_dish_offer">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
   register_sidebar( array(
    'name'          => 'Special offer menu',
    'id'            => 'special_offer_menu',
    'description'   => 'Flowing sidebar',
    'before_widget' => '<div class="special_offer_menu">',
    'after_widget'  => '</div>',

  ));
     register_sidebar( array(
    'name'          => 'Main page gallery',
    'id'            => 'main_page_gallery',
    'description'   => 'Bottom image gallery',
    'before_widget' => '<div class="main_page_gallery">',
    'after_widget'  => '</div>',

  ));
   register_sidebar( array(
    'name'          => 'Telephone',
    'id'            => 'telephone',
    'description'   => 'Contact telephone',
    'before_widget' => '<div class="telephone">',
    'after_widget'  => '</div>',

  ));


}
add_action( 'widgets_init', 'humescores_widgets_init' );



add_filter( 'smart-cf-register-fields', 'my_register_fields', 10, 5 );
function my_register_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
	if ( $type === 'post' ) {

		// Создаем блок настроек (метабокс).
		$Setting = SCF::add_setting( 'id-my-post', 'Настройки записи' );

		// Добавляем в метабокс произвольные поля.
		$Setting->add_group(
			// ID группы полей.
			'group-name-1',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				// Текстовое поле "Настроение"
				array(
					'name'        => 'field-1',
					'label'       => 'Настроение',
					'type'        => 'text',
					'instruction' => 'Какое настроение у Вас было при написании статьи?',
				),
				// Область текста "Почему?"
				array(
					'name'        => 'field-2',
					'label'       => 'Почему?',
					'type'        => 'textarea',
					'instruction' => 'Почему именно такое настроение?',
				),
			) );

		// Добавляем информацию о наших полях в общий массив.
		$settings[] = $Setting;
	}

	// Обязательно возвращаем данные.
	return $settings;
}


/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls          URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function humescores_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'humescores-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'humescores_resource_hints', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function humescores_scripts() {
	wp_enqueue_style( 'humescores-style', get_stylesheet_uri() );

	wp_enqueue_style( 'humescores-fonts', "https://fonts.googleapis.com/css2?family=Neuton:ital,wght@0,200;0,300;0,700;0,800;1,400&display=swap" );
	wp_enqueue_script( 'humescores-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
wp_enqueue_script( 'humescores-myscript', get_template_directory_uri() . '/js/myjs.js', array(), '20151215', true );
	wp_enqueue_script( 'humescores-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'humescores_scripts' );


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
