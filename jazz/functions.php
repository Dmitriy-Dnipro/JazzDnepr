<?php
/**
 * Jazz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Jazz
 */

if ( ! function_exists( 'jazz_setup' ) ) :

	function jazz_setup() {

		load_theme_textdomain( 'jazz', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_action('init', 'jazz_custom_post');
		register_nav_menus( array(
			'header' => esc_html__( 'Header', 'jazz' ),
			'main'   => esc_html__( 'Main', 'jazz'),
			'footer' => esc_html__( 'Footer', 'jazz' ),
			'footer-accr' => esc_html__('Footer accreditation', 'jazz'),
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
		add_theme_support( 'custom-background', apply_filters( 'jazz_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'jazz_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jazz_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'jazz_content_width', 640 );
}
add_action( 'after_setup_theme', 'jazz_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jazz_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'jazz' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'jazz' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'jazz_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jazz_scripts() {
	$template = get_template_directory_uri();
	wp_enqueue_style( 'jazz-style', get_stylesheet_uri() );
	wp_enqueue_script( 'jazz-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'jazz-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_style('jazz-bootstrap', $template . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('jazz-slick', $template . '/assets/css/slick.css');
	wp_enqueue_style('jazz-slick-theme', $template . '/assets/css/slick-theme.css');
	wp_enqueue_style('jazz-reset', $template . '/assets/css/reset.css');
	wp_enqueue_style('jazz-fancybox-css', $template . '/assets/css/jquery.fancybox.min.css');
	wp_enqueue_style('jazz-css-aos', $template . '/assets/css/aos.css');
	wp_enqueue_style('jazz-css-coutdown', $template . '/assets/css/jquery.countdown.css');
	wp_enqueue_style('jazz-main-style', $template . '/assets/css/main.css');

	wp_enqueue_script( 'jazz-jquery-lib', $template . '/assets/js/jquery-3.3.1.js', array(), '20151215', true );
	wp_enqueue_script( 'jazz-jquery-coutdown', $template . '/assets/js/jquery.countdown.js', array(), '20151215', true );
	wp_enqueue_script( 'jazz-bootstrap', $template . '/assets/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jazz-aos', $template . '/assets/js/aos.js', array(), '20151215', true );
	wp_enqueue_script( 'jazz-slick', $template . '/assets/js/slick.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jazz-fancybox', $template . '/assets/js/jquery.fancybox.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jazz-control', $template . '/assets/js/control.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jazz_scripts' );

/*
* Custom post type
*/ 

function jazz_custom_post(){

	register_post_type('gallery', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Галерея', // основное название для типа записи
			'singular_name'      => 'Галерея', // название для одной записи этого типа
			'add_new'            => 'Добавить новую галерею', // для добавления новой записи
			'add_new_item'       => 'Добавление галереи', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование галереи', // для редактирования типа записи
			'new_item'           => 'Новая галерея', // текст новой записи
			'view_item'          => 'Смотреть галерею', // для просмотра записи этого типа.
			'search_items'       => 'Искать галерею', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине

		),
		'public'              => false,
		'show_ui'             => true, // зависит от public
		'menu_position'       => 28,
		'menu_icon'           => 'dashicons-format-gallery', 
		'supports'            => array('title','editor', 'thumbnail'),
		'has_archive'         => true,
	));

		register_taxonomy('gallery-category', array('gallery'), array(
			'hierarchical'  => true,
			'labels' => array(
			'name'               => 'Категория галереи', // основное название для типа записи
			'singular_name'      => 'Категорию галереи', // название для одной записи этого типа
			'add_new'            => 'Найти категорию галереи', // для добавления новой записи
			'add_new_item'       => 'Добавить новую категорию галереи', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать категорию галереи', // для редактирования типа записи
			'new_item'           => 'Новая категория галереи', // текст новой записи
			'view_item'          => 'Смотреть категорию  галереи', // для просмотра записи этого типа.
			'search_items'       => 'Искать категорию галареи', // для поиска по этим типам записи
		),
			'show_ui'       => true,
			'query_var'     => true,
			'show_admin_column' => true,

		));
	
		register_post_type('speaker', array(
			'label'  => null,
			'labels' => array(
				'name'               => 'Участиники', // основное название для типа записи
				'singular_name'      => 'Участник', // название для одной записи этого типа
				'add_new'            => 'Добавить нового участика', // для добавления новой записи
				'add_new_item'       => 'Добавление участников', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование участинка', // для редактирования типа записи
				'new_item'           => 'Новый участник', // текст новой записи
				'view_item'          => 'Смотреть участника', // для просмотра записи этого типа.
				'search_items'       => 'Искать участника', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
	
			),
			'public'              => true,
			'show_ui'             => true, // зависит от public
			'menu_position'       => 28,
			'menu_icon'           => 'dashicons-groups', 
			'supports'            => array('title','editor', 'thumbnail'),
			'has_archive'         => true,
		));

		register_post_type('days', array(
			'label'  => null,
			'labels' => array(
				'name'               => 'Дни мероприятия', // основное название для типа записи
				'singular_name'      => 'День мероприятия', // название для одной записи этого типа
				'add_new'            => 'Добавить новый день мероприятия', // для добавления новой записи
				'add_new_item'       => 'Добавление дней', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование дня', // для редактирования типа записи
				'new_item'           => 'Новый день', // текст новой записи
				'view_item'          => 'Смотреть день мероприятия', // для просмотра записи этого типа.
				'search_items'       => 'Искать день мероприятия', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
	
			),
			'public'              => true,
			'show_ui'             => true, // зависит от public
			'menu_position'       => 28,
			'menu_icon'           => 'dashicons-calendar-alt', 
			'supports'            => array('title','editor', 'thumbnail'),
			'has_archive'         => true,
		));

}

add_filter('wpseo_metadesc','custom_meta');
function custom_meta( $desc ){
	$url = $_SERVER['REQUEST_URI'];

    if ($url == '/speaker/') {
	  $desc = "В «Джазе на Днепре – 2019» примут участие звезды мировой величины: RICHARD BONA, THE HOT SARDINES, 
	  THE MESSENGER LEGACY... ";
    }else if($url == '/en/speaker/'){
	  $desc = "The stars of world magnitude will take part in “Jazz on the Dnieper - 2019”: RICHARD BONA, THE HOT SARDINES,
	  THE MESSENGER LEGACY ...";
	}else if($url == '/ua/speaker/'){
	  $desc = "У «Джазі на Дніпрі - 2019» візьмуть участь зірки світової величини: RICHARD BONA, THE HOT SARDINES,
	  THE MESSENGER LEGACY...";
	}
    return $desc;
}
add_filter('wpseo_title','custom_title');
function custom_title( $title ){
	$url = $_SERVER['REQUEST_URI'];
    if ($url == '/speaker/') {
        $title = "Участники международного джазового фестиваля (Jazz on the Dnieper)";
    }else if($url == '/en/speaker/'){
	    $title = "Participants of the international jazz festival (Jazz on the Dnieper)";
	}else if($url == '/ua/speaker/'){
		$title = "Учасники міжнародного джазового фестивалю (Jazz on the Dnieper)";
	} 
    return $title;
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

