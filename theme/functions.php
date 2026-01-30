<?php
/**
 * Zellig Care Theme Functions
 */

// Enqueue styles and scripts
function zelligcare_scripts() {
    // Main stylesheet
    wp_enqueue_style('zelligcare-style', get_stylesheet_uri());
    
    // Original styles from index.html
    wp_enqueue_style('zelligcare-original-styles', get_template_directory_uri() . '/css/original-styles.css', array(), '1.0.0');
    
    // Bootstrap CSS (Local version matching the static site)
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
    
    // Google Fonts
    wp_enqueue_style('google-fonts-jost', 'https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap');
    wp_enqueue_style('google-fonts-cinzel', 'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&display=swap');
    
    // Missing global styles from static site
    wp_enqueue_style('common-global', get_template_directory_uri() . '/css/common-global.css');
    wp_enqueue_style('site-overrides', get_template_directory_uri() . '/css/site-overrides.css');
    
    // jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_style('homepage-page', get_template_directory_uri() . '/css/homepage-page.css');
    wp_enqueue_style('about-us', get_template_directory_uri() . '/css/about-us.css');
    
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
        // Sticky logo functionality
        litlleLogo = document.getElementById('litlleLogo');
        if (litlleLogo) {
            var myScrollFunc = function () {
                var y = window.scrollY;
                if (y >= 150) {
                    litlleLogo.style.display = 'block'
                } else {
                    litlleLogo.style.display = 'none'
                }
            };
            window.addEventListener('scroll', myScrollFunc);
        }
        
        // Sticky header functionality
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
        
        // Mobile menu functionality
        document.addEventListener('DOMContentLoaded', function() {
            var hamburger = document.querySelector('.hamburger');
            var mobileMenu = document.querySelector('.mobile_menu');
            
            if (hamburger && mobileMenu) {
                hamburger.addEventListener('click', function() {
                    hamburger.classList.toggle('is-active');
                    mobileMenu.style.display = mobileMenu.style.display === 'block' ? 'none' : 'block';
                });
            }
            
            // Logo click functionality
            var logo = document.querySelector('.ry-logo img');
            if (logo) {
                logo.addEventListener('click', function() {
                    window.location.href = '" . home_url('/') . "';
                });
            }
            
            // Bootstrap dropdown functionality
            if (typeof $ !== 'undefined' && $.fn.dropdown) {
                $('.dropdown-toggle').dropdown();
            }
            
            // Custom dropdown hover functionality for desktop
            var dropdowns = document.querySelectorAll('.dropdown');
            dropdowns.forEach(function(dropdown) {
                dropdown.addEventListener('mouseenter', function() {
                    if (window.innerWidth > 768) {
                        var menu = this.querySelector('.dropdown-menu');
                        if (menu) {
                            menu.style.display = 'block';
                            menu.style.opacity = '1';
                            menu.style.visibility = 'visible';
                            menu.style.transform = 'translateY(0)';
                        }
                    }
                });
                
                dropdown.addEventListener('mouseleave', function() {
                    if (window.innerWidth > 768) {
                        var menu = this.querySelector('.dropdown-menu');
                        if (menu) {
                            menu.style.display = 'none';
                            menu.style.opacity = '0';
                            menu.style.visibility = 'hidden';
                            menu.style.transform = 'translateY(-10px)';
                        }
                    }
                });
                
                // Mobile click functionality
                var toggle = dropdown.querySelector('.dropdown-toggle');
                if (toggle) {
                    toggle.addEventListener('click', function(e) {
                        if (window.innerWidth <= 768) {
                            e.preventDefault();
                            var menu = dropdown.querySelector('.dropdown-menu');
                            if (menu) {
                                menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
                            }
                        }
                    });
                }
            });
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

// Load About Us module setup
require get_template_directory() . '/inc/about-us-setup.php';

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

// Register Team Member Custom Post Type
function zelligcare_register_team_member_cpt() {
    $labels = array(
        'name'                  => _x('Team Members', 'Post Type General Name', 'zelligcare'),
        'singular_name'         => _x('Team Member', 'Post Type Singular Name', 'zelligcare'),
        'menu_name'             => __('Team Members', 'zelligcare'),
        'name_admin_bar'        => __('Team Member', 'zelligcare'),
        'archives'              => __('Team Member Archives', 'zelligcare'),
        'attributes'            => __('Team Member Attributes', 'zelligcare'),
        'parent_item_colon'     => __('Parent Team Member:', 'zelligcare'),
        'all_items'             => __('All Team Members', 'zelligcare'),
        'add_new_item'          => __('Add New Team Member', 'zelligcare'),
        'add_new'               => __('Add New', 'zelligcare'),
        'new_item'              => __('New Team Member', 'zelligcare'),
        'edit_item'             => __('Edit Team Member', 'zelligcare'),
        'update_item'           => __('Update Team Member', 'zelligcare'),
        'view_item'             => __('View Team Member', 'zelligcare'),
        'view_items'            => __('View Team Members', 'zelligcare'),
        'search_items'          => __('Search Team Member', 'zelligcare'),
        'not_found'             => __('Not found', 'zelligcare'),
        'not_found_in_trash'    => __('Not found in Trash', 'zelligcare'),
        'featured_image'        => __('Featured Image', 'zelligcare'),
        'set_featured_image'    => __('Set featured image', 'zelligcare'),
        'remove_featured_image' => __('Remove featured image', 'zelligcare'),
        'use_featured_image'    => __('Use as featured image', 'zelligcare'),
        'insert_into_item'      => __('Insert into team member', 'zelligcare'),
        'uploaded_to_this_item' => __('Uploaded to this team member', 'zelligcare'),
        'items_list'            => __('Team Members list', 'zelligcare'),
        'items_list_navigation' => __('Team Members list navigation', 'zelligcare'),
        'filter_items_list'     => __('Filter team members list', 'zelligcare'),
    );
    $args = array(
        'label'                 => __('Team Member', 'zelligcare'),
        'description'           => __('Team Members for Zellig Care', 'zelligcare'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 25,
        'menu_icon'             => 'dashicons-groups',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type('team_member', $args);
}
add_action('init', 'zelligcare_register_team_member_cpt', 0);

// Add image sizes for team members
function zelligcare_add_image_sizes() {
    add_image_size('team-member', 400, 400, true);
    add_image_size('team-member-large', 600, 600, true);
}
add_action('after_setup_theme', 'zelligcare_add_image_sizes');

// Force create pages on theme activation
function zelligcare_theme_activation() {
    // Create pages on theme activation
    zelligcare_force_create_pages();
    
    // Set permalink structure to post name
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%postname%/');
    $wp_rewrite->flush_rules();
    
    // Update permalink option
    update_option('permalink_structure', '/%postname%/');
}
register_activation_hook(__FILE__, 'zelligcare_theme_activation');

// Update permalink structure on init
function zelligcare_set_permalinks() {
    // Check if permalink structure is set to post name
    if (get_option('permalink_structure') !== '/%postname%/') {
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
        $wp_rewrite->flush_rules();
        update_option('permalink_structure', '/%postname%/');
    }
}
add_action('init', 'zelligcare_set_permalinks');

// Handle careers form submission
function zelligcare_handle_careers_form() {
    if (!isset($_POST['first_name']) || !isset($_POST['email'])) {
        wp_send_json_error('Please fill in all required fields.');
    }
    
    // Sanitize form data
    $first_name = sanitize_text_field($_POST['first_name']);
    $last_name = sanitize_text_field($_POST['last_name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $position = sanitize_text_field($_POST['position']);
    $experience = sanitize_text_field($_POST['experience']);
    $cover_letter = sanitize_textarea_field($_POST['cover_letter']);
    
    // Validate required fields
    if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($position) || empty($experience)) {
        wp_send_json_error('Please fill in all required fields.');
    }
    
    // Handle file uploads
    $resume_path = '';
    $cover_letter_path = '';
    
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
        $resume = $_FILES['resume'];
        $allowed_types = array('application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        
        if (!in_array($resume['type'], $allowed_types)) {
            wp_send_json_error('Invalid file type for resume. Please upload PDF, DOC, or DOCX files only.');
        }
        
        if ($resume['size'] > 5 * 1024 * 1024) { // 5MB limit
            wp_send_json_error('Resume file size must be less than 5MB.');
        }
        
        $upload_dir = wp_upload_dir();
        $filename = time() . '_' . sanitize_file_name($resume['name']);
        $resume_path = $upload_dir['path'] . '/' . $filename;
        
        if (!move_uploaded_file($resume['tmp_name'], $resume_path)) {
            wp_send_json_error('Error uploading resume file.');
        }
    }
    
    if (isset($_FILES['cover_letter_file']) && $_FILES['cover_letter_file']['error'] == UPLOAD_ERR_OK) {
        $cover_letter_file = $_FILES['cover_letter_file'];
        $allowed_types = array('application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        
        if (in_array($cover_letter_file['type'], $allowed_types) && $cover_letter_file['size'] <= 5 * 1024 * 1024) {
            $upload_dir = wp_upload_dir();
            $filename = time() . '_' . sanitize_file_name($cover_letter_file['name']);
            $cover_letter_path = $upload_dir['path'] . '/' . $filename;
            move_uploaded_file($cover_letter_file['tmp_name'], $cover_letter_path);
        }
    }
    
    // Create email content
    $to = get_option('admin_email');
    $subject = 'New Job Application: ' . $position;
    $headers = array('Content-Type: text/html; charset=UTF-8');
    
    $message = "
    <html>
    <body>
        <h2>New Job Application</h2>
        <p><strong>Name:</strong> {$first_name} {$last_name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Position:</strong> {$position}</p>
        <p><strong>Years of Experience:</strong> {$experience}</p>
        <p><strong>Cover Letter:</strong></p>
        <p>" . nl2br($cover_letter) . "</p>
    </body>
    </html>
    ";
    
    // Send email
    $sent = wp_mail($to, $subject, $message, $headers);
    
    if ($sent) {
        wp_send_json_success('Thank you for your application! We will review your information and contact you soon.');
    } else {
        wp_send_json_error('There was an error submitting your application. Please try again.');
    }
}
add_action('wp_ajax_zelligcare_careers_form', 'zelligcare_handle_careers_form');
add_action('wp_ajax_nopriv_zelligcare_careers_form', 'zelligcare_handle_careers_form');

// Page redirection function
function zelligcare_page_redirection() {
    // Check if user is trying to access specific URLs
    $current_url = $_SERVER['REQUEST_URI'];
    $current_path = parse_url($current_url, PHP_URL_PATH);
    
    // Remove trailing slash for comparison
    $current_path = rtrim($current_path, '/');
    
    // Handle both clean URLs and index.php URLs
    if ($current_path === '/practice-with-purpose' || $current_path === '/index.php/practice-with-purpose') {
        // Check if page exists
        $page = get_page_by_path('practice-with-purpose');
        if (!$page) {
            // Create the page immediately
            zelligcare_create_missing_page('practice-with-purpose', 'page-practice-with-purpose.php');
            // Redirect to clean URL
            wp_redirect(home_url('/practice-with-purpose/'));
            exit;
        }
    }
    
    if ($current_path === '/about' || $current_path === '/index.php/about') {
        $page = get_page_by_path('about');
        if (!$page) {
            zelligcare_create_missing_page('about', 'page-about.php');
            wp_redirect(home_url('/about/'));
            exit;
        }
    }
    
    if ($current_path === '/team' || $current_path === '/index.php/team') {
        $page = get_page_by_path('team');
        if (!$page) {
            zelligcare_create_missing_page('team', 'page-team.php');
            wp_redirect(home_url('/team/'));
            exit;
        }
    }
    
    if ($current_path === '/frequently-asked-questions' || $current_path === '/index.php/frequently-asked-questions') {
        $page = get_page_by_path('frequently-asked-questions');
        if (!$page) {
            zelligcare_create_missing_page('frequently-asked-questions', 'page-faq.php');
            wp_redirect(home_url('/frequently-asked-questions/'));
            exit;
        }
    }
}
add_action('template_redirect', 'zelligcare_page_redirection');

// Force create pages on admin init
function zelligcare_force_create_pages() {
    // Only run in admin or when specific conditions are met
    if (is_admin() || isset($_GET['create_pages'])) {
        $pages_to_create = array(
            'about' => 'page-about.php',
            'team' => 'page-team.php',
            'practice-with-purpose' => 'page-practice-with-purpose.php',
            'frequently-asked-questions' => 'page-faq.php'
        );
        
        foreach ($pages_to_create as $path => $template) {
            $page = get_page_by_path($path);
            if (!$page) {
                zelligcare_create_missing_page($path, $template);
            }
        }
    }
}
add_action('admin_init', 'zelligcare_force_create_pages');

// Create missing pages
function zelligcare_create_missing_page($path, $template) {
    $page_titles = array(
        'about' => 'About Us',
        'team' => 'Meet Our Team',
        'meet-our-team' => 'Meet Our Team',
        'practice-with-purpose' => 'Practice With Purpose',
        'careers' => 'Practice With Purpose',
        'frequently-asked-questions' => 'Frequently Asked Questions',
        'faq' => 'Frequently Asked Questions'
    );
    
    $page_content = array(
        'about' => '<!-- About Us content -->',
        'team' => '<!-- Team content -->',
        'meet-our-team' => '<!-- Team content -->',
        'practice-with-purpose' => '<!-- Careers content -->',
        'careers' => '<!-- Careers content -->',
        'frequently-asked-questions' => '<!-- FAQ content -->',
        'faq' => '<!-- FAQ content -->'
    );
    
    // Use simple template for practice-with-purpose as fallback
    if ($path === 'practice-with-purpose') {
        $template = 'page-practice-simple.php';
    }
    
    $page_id = wp_insert_post(array(
        'post_title'    => $page_titles[$path],
        'post_content'  => $page_content[$path],
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name'     => $path,
        'page_template' => $template
    ));
    
    if ($page_id && !is_wp_error($page_id)) {
        update_post_meta($page_id, '_wp_page_template', $template);
        
        // Log successful creation
        error_log("Created page: $path with template: $template, ID: $page_id");
    } else {
        // Log error
        error_log("Error creating page: $path - " . ($page_id ? $page_id->get_error_message() : 'Unknown error'));
    }
    
    return $page_id;
}

// Add current page highlighting
function zelligcare_add_active_menu_class($classes, $item) {
    if (is_page() && $item->url === get_permalink()) {
        $classes[] = 'current-menu-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'zelligcare_add_active_menu_class', 10, 2);

// Add body class for current page
function zelligcare_add_body_class($classes) {
    if (is_page('about') || is_page('practice-with-purpose')) {
        $classes[] = 'about-page';
    }
    if (is_page('team') || is_page('meet-our-team')) {
        $classes[] = 'team-page';
    }
    return $classes;
}
add_filter('body_class', 'zelligcare_add_body_class');
