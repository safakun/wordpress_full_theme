<?php 

if ( ! function_exists('browny_star_setup')) {
    function browny_star_setup() {
        // добавляем пользовательский логотип
        add_theme_support('custom-logo', [
            'height'      => 50,
            'width'       => 143,
            'flex-width'  => false,
            'flex-height' => false,
            'header-text' => '',
            'unlink-homepage-logo' => false,
        ]);
        // ддбавляем динамический title
        add_theme_support('title-tag');
        // включаем миниатюры для постов и страниц
        add_theme_support('post-thumbnails'); 

    }
    add_action('after_setup_theme', 'browny_star_setup');
}

/*
Подключение стилей и скриптов
*/ 

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'browny_star_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function browny_star_scripts() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
// font awesome
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array('main'));
    // fontawesomeicons   https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css
    wp_enqueue_style('fontawesomeicons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array('main'));
    // linear icons
    // wp_enqueue_style('linearicons', get_template_directory_uri() . '/assets/css/linearicons.css', array('fontawesome'));
    // flaticon
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array('fontawesomeicons'));
    // animate 
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array('flaticon'));


    // owl carousel assets/css/owl.carousel.min.css"
    wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array('animate'));
    // owl theme assets/css/owl.theme.default.min.css
    wp_enqueue_style('owltheme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array('owlcarousel'));
    // bootstrap assets/css/bootstrap.min.css
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array('owltheme'));
    // bootsnav assets/css/bootsnav.css 
    wp_enqueue_style('bootsnav', get_template_directory_uri() . '/assets/css/bootsnav.css', array('bootstrap'));
// style.css
    wp_enqueue_style('brownystar', get_template_directory_uri() . '/assets/css/style.css', array('bootsnav'));
   // responsive assets/css/responsive.css
   wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array('brownystar'));
	// wp_enqueue_script( 'carvilla-digital', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );

    // переподключаем Jquery 
    wp_deregister_script('jquery');
   // wp_register_script('jquery', '');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', '2.2.4', true);
    // modernizr
    wp_enqueue_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array('jquery'), 'v.1.2', true);
    // bootstrap js
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('modernizr'), 'v.1.2', true);
    // bootsnav assets/js/bootsnav.js
    wp_enqueue_script('bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js', array('bootstrap'), 'v.1.2', true);
    // sticky   assets/js/jquery.sticky.js
    wp_enqueue_script('sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('bootsnav'), 'v.1.2', true);
    // progressbar  assets/js/progressbar.js
    wp_enqueue_script('progressbar', get_template_directory_uri() . '/assets/js/progressbar.js', array('sticky'), 'v.1.2', true);
    // appear   assets/js/jquery.appear.js
    wp_enqueue_script('appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array('progressbar'), 'v.1.2', true);


    // owlcarousel  assets/js/owl.carousel.min.js
    wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('appear'), '2.2.0', true);
    // easing https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js
    wp_enqueue_script('easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array('owlcarousel'), '1.4.1', true);
    // custom assets/js/custom.js
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('easing'), '1.0', true);


} 


/*
Регистрация нескольких меню
*/

function browny_star_menus() {
    // собираем несколько областей меню
    $locations = array(
        'header' => __('Header menu', 'browny_star'),
        'footer' => __('Footer menu', 'browny_star'),
    );
    // регистрируем области меню
    register_nav_menus($locations);
}
// хук события
add_action('init', 'browny_star_menus');

// добавить класс scroll ко всем пунктам меню 
add_filter('nav_menu_css_class', 'custom_nav_menu_css_class', 10, 1); 

// получаем весь список классов пунктов меню
function custom_nav_menu_css_class($classes) {
    // добавляем к списку классов свой класс
    $classes[] = 'scroll';

    return $classes;
}
