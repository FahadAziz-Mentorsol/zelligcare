<?php
/**
 * Zellig Care Theme Functions
 */

// Enqueue styles and scripts
function zelligcare_scripts() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('common-global', get_template_directory_uri() . '/css/common-global.css');
    // Font Awesome - matching original HTML (multiple versions for compatibility)
    wp_enqueue_style('font-awesome-6', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', array(), '6.2.0', 'all');
    wp_enqueue_style('font-awesome-5', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css', array(), '5.6.3', 'all');
    wp_enqueue_style('font-awesome-4', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all');
    // Google Fonts - matching original HTML
    wp_enqueue_style('google-fonts-cinzel', 'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&display=swap');
    wp_enqueue_style('google-fonts-jost', 'https://fonts.googleapis.com/css?family=Jost:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
    wp_enqueue_style('google-fonts-tenor', 'https://fonts.googleapis.com/css?family=Tenor+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
    wp_enqueue_style('google-fonts-jost-tenor-updated', 'https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Tenor+Sans&display=swap');
    wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    
    wp_enqueue_style('google-fonts-fraunces', 'https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,100..900;1,100..900&display=swap');
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
    // Load site-overrides.css last to ensure footer styles take precedence
    wp_enqueue_style('site-overrides', get_template_directory_uri() . '/css/site-overrides.css', array('overrides'), '1.0.0');
    wp_enqueue_style('mobile-header', get_template_directory_uri() . '/styles/mobile-header.css');
    
    // Enqueue specialty page CSS files conditionally
    if (is_page()) {
        $page_template = get_page_template_slug();
        $page_slug = get_post_field('post_name', get_queried_object_id());
        
        $specialty_css = array(
            'page-anxiety.php' => 'page-anxiety.css',
            'page-adhd.php' => 'page-adhd.css',
            'page-bipolar.php' => 'page-bipolar.css',
            'page-depression.php' => 'page-depression.css',
            'page-insomnia.php' => 'page-insomnia.css',
            'page-life-transitions.php' => 'page-life-transitions.css',
            'page-ocd.php' => 'page-ocd.css',
            'page-trauma-ptsd.php' => 'page-trauma-ptsd.css',
            'page-autism-neurodivergence.php' => 'page-autism-neurodivergence.css',
        );
        
        // Map page slugs to templates as fallback
        $slug_to_template = array(
            'anxiety' => 'page-anxiety.php',
            'adhd' => 'page-adhd.php',
            'bipolar' => 'page-bipolar.php',
            'depression' => 'page-depression.php',
            'insomnia' => 'page-insomnia.php',
            'life-transitions' => 'page-life-transitions.php',
            'ocd' => 'page-ocd.php',
            'trauma-ptsd' => 'page-trauma-ptsd.php',
            'autism-neurodivergence' => 'page-autism-neurodivergence.php',
        );
        
        // Try to get template from page template first, then fallback to slug
        $template_to_use = $page_template;
        if (empty($template_to_use) && !empty($page_slug) && isset($slug_to_template[$page_slug])) {
            $template_to_use = $slug_to_template[$page_slug];
        }
        
        if (!empty($template_to_use) && isset($specialty_css[$template_to_use])) {
            wp_enqueue_style(
                'specialty-' . str_replace(array('page-', '.php'), '', $template_to_use),
                get_template_directory_uri() . '/css/' . $specialty_css[$template_to_use],
                array('site-overrides'),
                '1.0.0'
            );
        }
    }
    
    // Scripts
    // Use WordPress bundled jQuery instead of CDN to avoid conflicts
    wp_deregister_script('jquery');
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

    // Sticky Header Script - Note: litlleLogo script is inline in header.php to match HTML
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
    
    // Conditionally load page-specific CSS
    // Check for About/Our Practice page
    if (is_page_template('page-about.php') || is_page('about') || is_page('our-practice')) {
        wp_enqueue_style('page-about', get_template_directory_uri() . '/css/page-about.css', array(), '1.0.0');
    }
    
    // Check for Careers page
    if (is_page_template('page-careers.php') || is_page('careers') || is_page('practice-with-purpose')) {
        wp_enqueue_style('page-careers', get_template_directory_uri() . '/css/page-careers.css', array(), '1.0.0');
    }
}
add_action('wp_enqueue_scripts', 'zelligcare_scripts');

// Add 'default' class to body for header positioning
function zelligcare_add_default_body_class($classes) {
    $classes[] = 'default';
    return $classes;
}
add_filter('body_class', 'zelligcare_add_default_body_class');

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

// Navigation module with dropdown support
require get_template_directory() . '/inc/navigation-module.php';

// Customizer additions
require get_template_directory() . '/inc/customizer.php';

// Load Jetpack compatibility file
require get_template_directory() . '/inc/jetpack.php';

// Fallback menu function
function zelligcare_fallback_menu() {
    echo '<ul class="nav-menu ry-nav">';
    echo '<li class="current-menu-item"><a href="' . home_url() . '">Home</a></li>';
    
    // Use the navigation module helper function for About dropdown
    echo zelligcare_render_about_dropdown();
    
    echo '<li><a href="' . home_url('/meet-our-team/') . '">Our Team</a></li>';
    
    // Use the navigation module helper function for Specialties dropdown
    echo zelligcare_render_specialties_dropdown();
    
    echo '<li><a href="' . home_url('/contact-us/') . '">Contact Us</a></li>';
    echo '</ul>';
}

// Auto-assign careers template to careers page
function zelligcare_assign_careers_template($template) {
    global $post;
    
    // Check by page slug
    if ($post && (is_page('careers') || is_page('practice-with-purpose'))) {
        $careers_template = locate_template('page-careers.php');
        if ($careers_template) {
            return $careers_template;
        }
    }
    
    // Check by page template meta
    if ($post && get_page_template_slug($post->ID) === 'page-careers.php') {
        $careers_template = locate_template('page-careers.php');
        if ($careers_template) {
            return $careers_template;
        }
    }
    
    return $template;
}
add_filter('template_include', 'zelligcare_assign_careers_template', 99);

// Extract content from HTML file for specialty pages
function zelligcare_get_specialty_content_from_html($html_file) {
    // Try multiple possible paths
    $possible_paths = array(
        get_template_directory() . '/../zelligcare.com/' . $html_file,
        get_template_directory() . '/../../zelligcare.com/' . $html_file,
        ABSPATH . '../zelligcare.com/' . $html_file,
        dirname(get_template_directory()) . '/zelligcare.com/' . $html_file,
    );
    
    $html_path = '';
    foreach ($possible_paths as $path) {
        if (file_exists($path)) {
            $html_path = $path;
            break;
        }
    }
    
    if (empty($html_path) || !file_exists($html_path)) {
        return '';
    }
    
    $html_content = file_get_contents($html_path);
    
    // The HTML is minified on one line, so we need a more flexible pattern
    // First, find the start position of the module-offer section
    $start_pos = strpos($html_content, '<div class="col-xs-12 module-offer inner-condition-template">');
    
    if ($start_pos === false) {
        return '';
    }
    
    // Find the matching closing divs - we need to count divs to find the right closing tag
    $content_start = $start_pos + strlen('<div class="col-xs-12 module-offer inner-condition-template">');
    $depth = 1;
    $pos = $content_start;
    $end_pos = false;
    
    while ($pos < strlen($html_content) && $depth > 0) {
        $next_open = strpos($html_content, '<div', $pos);
        $next_close = strpos($html_content, '</div>', $pos);
        
        if ($next_close === false) {
            break;
        }
        
        if ($next_open !== false && $next_open < $next_close) {
            $depth++;
            $pos = $next_open + 4;
        } else {
            $depth--;
            if ($depth === 0) {
                $end_pos = $next_close;
                break;
            }
            $pos = $next_close + 6;
        }
    }
    
    if ($end_pos === false) {
        // Fallback to regex if div counting fails
        $pattern = '/<div class="col-xs-12 module-offer inner-condition-template">(.*?)<\/div><\/div>\s*<\/div>/s';
        preg_match($pattern, $html_content, $matches);
        if (!empty($matches[1])) {
            $content = $matches[1];
        } else {
            return '';
        }
    } else {
        $content = substr($html_content, $content_start, $end_pos - $content_start);
    }
    
    // Extract just the group-block content if it exists
    $group_start = strpos($content, '<div class="col-xs-12 group-block">');
    if ($group_start !== false) {
        $group_start += strlen('<div class="col-xs-12 group-block">');
        $group_depth = 1;
        $group_pos = $group_start;
        $group_end = false;
        
        while ($group_pos < strlen($content) && $group_depth > 0) {
            $next_open = strpos($content, '<div', $group_pos);
            $next_close = strpos($content, '</div>', $group_pos);
            
            if ($next_close === false) {
                break;
            }
            
            if ($next_open !== false && $next_open < $next_close) {
                $group_depth++;
                $group_pos = $next_open + 4;
            } else {
                $group_depth--;
                if ($group_depth === 0) {
                    $group_end = $next_close;
                    break;
                }
                $group_pos = $next_close + 6;
            }
        }
        
        if ($group_end !== false) {
            $content = substr($content, $group_start, $group_end - $group_start);
        }
    }
    
    // Clean up the content - remove script tags and other unwanted elements
    $content = preg_replace('/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/mi', '', $content);
    $content = preg_replace('/<style\b[^<]*(?:(?!<\/style>)<[^<]*)*<\/style>/mi', '', $content);
    
    // Fix HTML entities (decode common ones)
    $content = str_replace('&rsquo;', "'", $content);
    $content = str_replace('&mdash;', '—', $content);
    $content = str_replace('&ldquo;', '"', $content);
    $content = str_replace('&rdquo;', '"', $content);
    $content = html_entity_decode($content, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    
    return trim($content);
}

// Force update all specialty pages with content from HTML files
function zelligcare_update_all_specialty_pages_content() {
    $specialties = array(
        array('slug' => 'anxiety', 'html_file' => 'anxiety.html'),
        array('slug' => 'adhd', 'html_file' => 'adhd.html'),
        array('slug' => 'bipolar', 'html_file' => 'bipolar.html'),
        array('slug' => 'depression', 'html_file' => 'depression.html'),
        array('slug' => 'insomnia', 'html_file' => 'insomnia.html'),
        array('slug' => 'life-transitions', 'html_file' => 'life-transitions.html'),
        array('slug' => 'ocd', 'html_file' => 'ocd.html'),
        array('slug' => 'trauma-ptsd', 'html_file' => 'trauma-ptsd.html'),
        array('slug' => 'autism-neurodivergence', 'html_file' => 'autism-neurodivergence.html'),
    );
    
    $updated = 0;
    // Disable content filtering to preserve raw HTML
    remove_filter('content_save_pre', 'wp_filter_post_kses');
    
    foreach ($specialties as $specialty) {
        $page = get_page_by_path($specialty['slug']);
        if ($page) {
            $content = zelligcare_get_specialty_content_from_html($specialty['html_file']);
            if (!empty($content)) {
                wp_update_post(array(
                    'ID' => $page->ID,
                    'post_content' => $content,
                ));
                $updated++;
            }
        }
    }
    
    // Re-enable content filtering
    add_filter('content_save_pre', 'wp_filter_post_kses');
    
    return $updated;
}

// Auto-create specialty pages and add to menu
function zelligcare_create_specialty_pages() {
    $specialties = array(
        array(
            'title' => 'Anxiety',
            'slug' => 'anxiety',
            'template' => 'page-anxiety.php',
            'html_file' => 'anxiety.html',
        ),
        array(
            'title' => 'ADHD',
            'slug' => 'adhd',
            'template' => 'page-adhd.php',
            'html_file' => 'adhd.html',
        ),
        array(
            'title' => 'Bipolar',
            'slug' => 'bipolar',
            'template' => 'page-bipolar.php',
            'html_file' => 'bipolar.html',
        ),
        array(
            'title' => 'Depression',
            'slug' => 'depression',
            'template' => 'page-depression.php',
            'html_file' => 'depression.html',
        ),
        array(
            'title' => 'Insomnia',
            'slug' => 'insomnia',
            'template' => 'page-insomnia.php',
            'html_file' => 'insomnia.html',
        ),
        array(
            'title' => 'Life Transitions',
            'slug' => 'life-transitions',
            'template' => 'page-life-transitions.php',
            'html_file' => 'life-transitions.html',
        ),
        array(
            'title' => 'OCD',
            'slug' => 'ocd',
            'template' => 'page-ocd.php',
            'html_file' => 'ocd.html',
        ),
        array(
            'title' => 'Trauma & PTSD',
            'slug' => 'trauma-ptsd',
            'template' => 'page-trauma-ptsd.php',
            'html_file' => 'trauma-ptsd.html',
        ),
        array(
            'title' => 'Autism & Neurodivergence',
            'slug' => 'autism-neurodivergence',
            'template' => 'page-autism-neurodivergence.php',
            'html_file' => 'autism-neurodivergence.html',
        ),
    );
    
    $created_pages = array();
    
    foreach ($specialties as $specialty) {
        // Check if page already exists by slug
        $page = get_page_by_path($specialty['slug']);
        
        // Get content from HTML file
        $page_content = zelligcare_get_specialty_content_from_html($specialty['html_file']);
        
        if (!$page) {
            $page_data = array(
                'post_title'    => $specialty['title'],
                'post_name'     => $specialty['slug'],
                'post_content'  => $page_content,
                'post_status'   => 'publish',
                'post_type'     => 'page',
                'post_author'   => 1,
            );
            
            $page_id = wp_insert_post($page_data);
            
            if ($page_id && !is_wp_error($page_id)) {
                // Assign the template
                update_post_meta($page_id, '_wp_page_template', $specialty['template']);
                $created_pages[] = $page_id;
            }
        } else {
            // Page exists, ensure template is set and update content if empty
            update_post_meta($page->ID, '_wp_page_template', $specialty['template']);
            
            // Always update content if we have it from HTML file
            if (!empty($page_content)) {
                $existing_content = get_post_field('post_content', $page->ID);
                // Update if empty or if content is different (to handle updates)
                if (empty(trim(strip_tags($existing_content))) || $existing_content !== $page_content) {
                    // Use wp_update_post with raw content - disable filters to preserve HTML
                    remove_filter('content_save_pre', 'wp_filter_post_kses');
                    wp_update_post(array(
                        'ID' => $page->ID,
                        'post_content' => $page_content,
                    ));
                    add_filter('content_save_pre', 'wp_filter_post_kses');
                }
            }
            
            $created_pages[] = $page->ID;
        }
    }
    
    // Add pages to menu if menu exists
    if (!empty($created_pages)) {
        zelligcare_add_specialties_to_menu($created_pages);
    }
    
    return $created_pages;
}

// Add specialty pages to the primary menu
function zelligcare_add_specialties_to_menu($page_ids = array()) {
    // Get the primary menu location
    $menu_locations = get_nav_menu_locations();
    
    if (isset($menu_locations['primary'])) {
        $menu_id = $menu_locations['primary'];
        $menu = wp_get_nav_menu_object($menu_id);
        
        if ($menu) {
            // Check if Specialties parent menu item exists
            $menu_items = wp_get_nav_menu_items($menu_id);
            $specialties_parent = null;
            
            foreach ($menu_items as $item) {
                if ($item->title === 'Specialties' && $item->menu_item_parent == 0) {
                    $specialties_parent = $item->ID;
                    break;
                }
            }
            
            // If no Specialties parent exists, create it
            if (!$specialties_parent) {
                $parent_item = wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title' => 'Specialties',
                    'menu-item-url' => '#',
                    'menu-item-status' => 'publish',
                    'menu-item-type' => 'custom',
                ));
                
                if (!is_wp_error($parent_item)) {
                    $specialties_parent = $parent_item;
                }
            }
            
            // Add specialty pages as children of Specialties
            if ($specialties_parent) {
                foreach ($page_ids as $page_id) {
                    // Check if menu item already exists for this page
                    $exists = false;
                    foreach ($menu_items as $item) {
                        if ($item->object_id == $page_id && $item->object == 'page') {
                            $exists = true;
                            // Update parent if needed
                            if ($item->menu_item_parent != $specialties_parent) {
                                wp_update_nav_menu_item($menu_id, $item->ID, array(
                                    'menu-item-parent-id' => $specialties_parent,
                                ));
                            }
                            break;
                        }
                    }
                    
                    // Create menu item if it doesn't exist
                    if (!$exists) {
                        wp_update_nav_menu_item($menu_id, 0, array(
                            'menu-item-title' => get_the_title($page_id),
                            'menu-item-object-id' => $page_id,
                            'menu-item-object' => 'page',
                            'menu-item-type' => 'post_type',
                            'menu-item-status' => 'publish',
                            'menu-item-parent-id' => $specialties_parent,
                        ));
                    }
                }
            }
        }
    }
}

// Auto-create careers page if it doesn't exist
function zelligcare_create_careers_page() {
    // Check if page already exists by slug
    $careers_page = get_page_by_path('careers');
    
    if (!$careers_page) {
        $page_data = array(
            'post_title'    => 'Careers',
            'post_name'     => 'careers',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_author'   => 1,
        );
        
        $page_id = wp_insert_post($page_data);
        
        // Assign the template
        if ($page_id && !is_wp_error($page_id)) {
            update_post_meta($page_id, '_wp_page_template', 'page-careers.php');
        }
    } else {
        // If page exists, ensure template is assigned
        $current_template = get_page_template_slug($careers_page->ID);
        if ($current_template !== 'page-careers.php') {
            update_post_meta($careers_page->ID, '_wp_page_template', 'page-careers.php');
        }
    }
}
// Run on admin init and also on init for frontend
add_action('admin_init', 'zelligcare_create_careers_page');
add_action('init', 'zelligcare_create_careers_page', 20);

// Auto-create specialty pages and add to menu
add_action('admin_init', 'zelligcare_create_specialty_pages');
add_action('init', 'zelligcare_create_specialty_pages', 20);

// Add admin notice with link to update content
add_action('admin_notices', 'zelligcare_specialty_content_update_notice');
function zelligcare_specialty_content_update_notice() {
    $screen = get_current_screen();
    if ($screen && ($screen->id === 'edit-page' || $screen->id === 'page')) {
        if (isset($_GET['updated'])) {
            $count = intval($_GET['updated']);
            echo '<div class="notice notice-success is-dismissible">';
            echo '<p><strong>Success!</strong> Updated ' . $count . ' specialty page(s) with content.</p>';
            echo '</div>';
        } else {
            $update_url = admin_url('admin-post.php?action=update_specialty_content');
            $update_url = wp_nonce_url($update_url, 'update_specialty_content');
            echo '<div class="notice notice-info is-dismissible">';
            echo '<p><strong>Specialty Pages:</strong> <a href="' . esc_url($update_url) . '" class="button button-primary">Update All Specialty Pages Content</a></p>';
            echo '</div>';
        }
    }
}

// Update the handler to use nonce
add_action('admin_post_update_specialty_content', 'zelligcare_handle_update_specialty_content');
function zelligcare_handle_update_specialty_content() {
    if (!current_user_can('edit_pages')) {
        wp_die('Unauthorized');
    }
    
    check_admin_referer('update_specialty_content');
    
    $updated = zelligcare_update_all_specialty_pages_content();
    wp_redirect(admin_url('edit.php?post_type=page&updated=' . $updated));
    exit;
}

// Flush rewrite rules when careers page is created
function zelligcare_flush_rewrite_rules_on_careers_creation() {
    $careers_page = get_page_by_path('careers');
    $flushed = get_option('zelligcare_careers_flushed');
    
    if ($careers_page && !$flushed) {
        flush_rewrite_rules(false);
        update_option('zelligcare_careers_flushed', true);
    }
}
add_action('init', 'zelligcare_flush_rewrite_rules_on_careers_creation', 25);

// Handle careers application form submission
function zelligcare_handle_careers_application() {
    // Verify nonce for security (optional but recommended)
    // if (!isset($_POST['_wpnonce']) || !wp_verify_nonce($_POST['_wpnonce'], 'careers_application')) {
    //     wp_die('Security check failed');
    // }
    
    // Sanitize form data
    $name = isset($_POST['applicant_name']) ? sanitize_text_field($_POST['applicant_name']) : '';
    $email = isset($_POST['applicant_email']) ? sanitize_email($_POST['applicant_email']) : '';
    $phone = isset($_POST['applicant_phone']) ? sanitize_text_field($_POST['applicant_phone']) : '';
    $cover_letter = isset($_POST['cover_letter']) ? sanitize_textarea_field($_POST['cover_letter']) : '';
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($cover_letter)) {
        wp_redirect(add_query_arg('careers_error', 'missing_fields', home_url('/careers/')));
        exit;
    }
    
    // Handle file uploads
    $resume_file = '';
    $cover_letter_file = '';
    
    if (!empty($_FILES['resume']['name'])) {
        $resume_upload = wp_handle_upload($_FILES['resume'], array('test_form' => false));
        if ($resume_upload && !isset($resume_upload['error'])) {
            $resume_file = $resume_upload['file'];
        }
    }
    
    if (!empty($_FILES['cover_letter_file']['name'])) {
        $cover_upload = wp_handle_upload($_FILES['cover_letter_file'], array('test_form' => false));
        if ($cover_upload && !isset($cover_upload['error'])) {
            $cover_letter_file = $cover_upload['file'];
        }
    }
    
    // Prepare email
    $to = get_option('admin_email'); // Or use a specific email
    $subject = 'New Careers Application: ' . $name;
    $message = "New careers application received:\n\n";
    $message .= "Name: " . $name . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Phone: " . $phone . "\n\n";
    $message .= "Cover Letter:\n" . $cover_letter . "\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    $attachments = array();
    
    if ($resume_file) {
        $attachments[] = $resume_file;
    }
    if ($cover_letter_file) {
        $attachments[] = $cover_letter_file;
    }
    
    // Send email
    $sent = wp_mail($to, $subject, $message, $headers, $attachments);
    
    // Clean up uploaded files after email is sent
    if ($resume_file && file_exists($resume_file)) {
        @unlink($resume_file);
    }
    if ($cover_letter_file && file_exists($cover_letter_file)) {
        @unlink($cover_letter_file);
    }
    
    if ($sent) {
        wp_redirect(add_query_arg('careers_success', '1', home_url('/careers/')));
    } else {
        wp_redirect(add_query_arg('careers_error', 'send_failed', home_url('/careers/')));
    }
    exit;
}
add_action('admin_post_submit_careers_application', 'zelligcare_handle_careers_application');
add_action('admin_post_nopriv_submit_careers_application', 'zelligcare_handle_careers_application');