<?php
/**
 * Zellig Care Theme Functions
 */

// Enqueue styles and scripts
function zelligcare_scripts() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('common-global', get_template_directory_uri() . '/css/common-global.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
    wp_enqueue_style('google-fonts-cinzel', 'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&display=swap');
    wp_enqueue_style('google-fonts-jost', 'https://fonts.googleapis.com/css?family=Jost:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
    wp_enqueue_style('google-fonts-tenor', 'https://fonts.googleapis.com/css?family=Tenor+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
    wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    
    wp_enqueue_style('google-fonts-fraunces', 'https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,100..900;1,100..900&display=swap');
    wp_enqueue_style('site-overrides', get_template_directory_uri() . '/css/site-overrides.css');
    wp_enqueue_style('homepage-page', get_template_directory_uri() . '/css/homepage-page.css');
    
    // Theme styles
    wp_enqueue_style('zelligcare-style', get_stylesheet_uri());
    wp_enqueue_style('dependencies', get_template_directory_uri() . '/styles/dependencies.css');
    wp_enqueue_style('default', get_template_directory_uri() . '/styles/default.css');
    wp_enqueue_style('site', get_template_directory_uri() . '/styles/site.css');
    wp_enqueue_style('header-style-14', get_template_directory_uri() . '/styles/header-style-14.css');
    wp_enqueue_style('color-scheme-1', get_template_directory_uri() . '/styles/color_scheme_1.css');
    wp_enqueue_style('homepage-slider', get_template_directory_uri() . '/styles/homepage-slider.css');
    wp_enqueue_style('homepage-cta-style-4', get_template_directory_uri() . '/styles/homepage-cta-style-4.css');
    wp_enqueue_style('homepage-cta', get_template_directory_uri() . '/styles/homepage-cta.css');
    wp_enqueue_style('homepage-welcome-style-7', get_template_directory_uri() . '/styles/homepage-welcome-style-7.css');
    wp_enqueue_style('homepage-services', get_template_directory_uri() . '/styles/homepage-services.css');
    wp_enqueue_style('homepage-services-style-7', get_template_directory_uri() . '/styles/homepage-services-style-7.css');
    wp_enqueue_style('homepage-team-style-8', get_template_directory_uri() . '/styles/homepage-team-style-8.css');
    wp_enqueue_style('inner-team-style-1', get_template_directory_uri() . '/styles/inner-team-style-1.css');
    wp_enqueue_style('inner-team-style-3', get_template_directory_uri() . '/styles/inner-team-style-3.css');
    wp_enqueue_style('brand-and-insurance', get_template_directory_uri() . '/styles/brand-and-insurance.css');
    wp_enqueue_style('homepage-insurance-style1', get_template_directory_uri() . '/styles/homepage-insurance-style1.css');
    wp_enqueue_style('homepage-appointment-style-1', get_template_directory_uri() . '/styles/homepage-appointment-style-1.css');
    wp_enqueue_style('footer-2', get_template_directory_uri() . '/styles/footer-2.css');
    wp_enqueue_style('updates-css', get_template_directory_uri() . '/styles/updates-css.css');
    wp_enqueue_style('overrides', get_template_directory_uri() . '/styles/overrides.css');
    wp_enqueue_style('mobile-header', get_template_directory_uri() . '/styles/mobile-header.css');
    
    // Scripts
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', true);
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true);
    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), null, false);
    wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBhDrnT7O9YqoL7Yn3hF0Z1d2e3f4g5h6i7j8k9l0', array(), null, true);
    wp_enqueue_script('userway', 'https://cdn.userway.org/widget.js', array(), null, true);
    wp_add_inline_script('userway', 'var _userway_config = { position: 3, size: "small", account: "sSEkA4Kkqq" };');
    
    wp_enqueue_script('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
    wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
    wp_enqueue_script('touchswipe', get_template_directory_uri() . '/js/touchswipe.min.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js', array('jquery'), null, true);
    wp_enqueue_script('zelligcare-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);
    wp_enqueue_script('zelligcare-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);
    
    // Common and utility scripts
    wp_enqueue_script('zelligcare-common', get_template_directory_uri() . '/js/common.js', array('jquery'), null, true);
    wp_enqueue_script('zelligcare-datepicker', get_template_directory_uri() . '/js/datePickerWidget.js', array('jquery'), null, true);
    
    // Theme-specific scripts
    wp_enqueue_script('zelligcare-main', get_template_directory_uri() . '/scripts/main.js', array('jquery'), null, true);
    wp_enqueue_script('zelligcare-dependencies', get_template_directory_uri() . '/scripts/dependencies.js', array('jquery'), null, true);
    wp_enqueue_script('zelligcare-menu', get_template_directory_uri() . '/scripts/menu.js', array('jquery'), null, true);
    wp_enqueue_script('zelligcare-slider-pro', get_template_directory_uri() . '/scripts/slider-pro.js', array('jquery'), null, true);
    wp_enqueue_script('zelligcare-masonry', get_template_directory_uri() . '/scripts/masonry.js', array('jquery'), null, true);
    wp_enqueue_script('zelligcare-brands', get_template_directory_uri() . '/scripts/brands.js', array('jquery'), null, true);
    wp_enqueue_script('zelligcare-inner-contact-map', get_template_directory_uri() . '/scripts/inner-contact-map.js', array('jquery'), null, true);
    wp_enqueue_script('zelligcare-homepage-cta-style-4', get_template_directory_uri() . '/scripts/homepage-cta-style-4.js', array('jquery'), null, true);
    wp_enqueue_script('zelligcare-homepage-insurance-style1', get_template_directory_uri() . '/scripts/homepage-insurance-style1.js', array('jquery'), null, true);
    wp_enqueue_script('zelligcare-homepage-meet-the-team-style2', get_template_directory_uri() . '/scripts/homepage-meet-the-team-style2.js', array('jquery'), null, true);
    wp_enqueue_script('zelligcare-inner-team-style-1', get_template_directory_uri() . '/scripts/inner-team-style-1.js', array('jquery'), null, true);
    wp_enqueue_script('zelligcare-inner-team-style-3', get_template_directory_uri() . '/scripts/inner-team-style-3.js', array('jquery'), null, true);
    
    // Initialize AOS
    wp_add_inline_script('aos', 'AOS.init({
        duration: 800,
        once: true
    });');

    // Sticky Header Script
    wp_add_inline_script('zelligcare-main', "
        window.addEventListener('scroll', function() {
            var header = document.querySelector('.module-43');
            if (header) {
                if (window.scrollY > 0) {
                    header.classList.add('custom-sticky');
                } else {
                    header.classList.remove('custom-sticky');
                }
            }
        });
    ");
    
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'zelligcare_scripts');

// Theme setup
function zelligcare_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');
    
    // Let WordPress manage the document title.
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');
    
    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'zelligcare'),
        'footer' => esc_html__('Footer Menu', 'zelligcare'),
    ));
    
    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('zelligcare_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    )));
    
    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'zelligcare_setup');

// Register widget area
function zelligcare_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'zelligcare'),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area', 'zelligcare'),
        'id'            => 'footer-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'zelligcare_widgets_init');

// Custom template tags for this theme
require get_template_directory() . '/inc/template-tags.php';

// Custom functions that act independently of the theme templates
require get_template_directory() . '/inc/extras.php';

// Customizer additions
require get_template_directory() . '/inc/customizer.php';

// Load Jetpack compatibility file
require get_template_directory() . '/inc/jetpack.php';

// Fallback menu function
function zelligcare_fallback_menu() {
    echo '<ul class="nav-menu ry-nav">';
    echo '<li class="current-menu-item"><a href="' . home_url() . '">Home</a></li>';
    echo '<li class="dropdown"><a href="' . home_url('/about/') . '">About</a></li>';
    echo '<li><a href="' . home_url('/team/') . '">Our Team</a></li>';
    echo '<li class="dropdown"><a href="#">Specialties</a></li>';
    echo '<li><a href="' . home_url('/contact/') . '">Contact</a></li>';
    echo '</ul>';
}
