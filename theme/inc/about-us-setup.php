<?php
/**
 * About Us Module Setup
 * 
 * This file contains functions to set up the About Us module,
 * including creating sample pages and setting up navigation.
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Create About Us related pages on theme activation
 */
function zelligcare_create_about_us_pages() {
    // Check if pages already exist
    $about_page = get_page_by_path('about');
    $team_page = get_page_by_path('team');
    $careers_page = get_page_by_path('practice-with-purpose');
    
    // Create About Us page
    if (!$about_page) {
        $about_page_id = wp_insert_post(array(
            'post_title'    => 'About Us',
            'post_content'  => '<!-- About Us content will be added here -->',
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_type'     => 'page',
            'post_name'     => 'about',
            'page_template' => 'page-about.php'
        ));
        
        if ($about_page_id && !is_wp_error($about_page_id)) {
            update_post_meta($about_page_id, '_wp_page_template', 'page-about.php');
        }
    }
    
    // Create Meet Our Team page
    if (!$team_page) {
        $team_page_id = wp_insert_post(array(
            'post_title'    => 'Meet Our Team',
            'post_content'  => '<!-- Team content will be added here -->',
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_type'     => 'page',
            'post_name'     => 'team',
            'page_template' => 'page-team.php'
        ));
        
        if ($team_page_id && !is_wp_error($team_page_id)) {
            update_post_meta($team_page_id, '_wp_page_template', 'page-team.php');
        }
    }
    
    // Create Practice With Purpose (Careers) page
    if (!$careers_page) {
        $careers_page_id = wp_insert_post(array(
            'post_title'    => 'Practice With Purpose',
            'post_content'  => '<!-- Careers content will be added here -->',
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_type'     => 'page',
            'post_name'     => 'practice-with-purpose',
            'page_template' => 'page-practice-with-purpose.php'
        ));
        
        if ($careers_page_id && !is_wp_error($careers_page_id)) {
            update_post_meta($careers_page_id, '_wp_page_template', 'page-practice-with-purpose.php');
        }
    }
}
add_action('after_switch_theme', 'zelligcare_create_about_us_pages');

/**
 * Create sample team members
 */
function zelligcare_create_sample_team_members() {
    // Check if team members already exist
    $existing_team = get_posts(array(
        'post_type' => 'team_member',
        'posts_per_page' => 1
    ));
    
    if (!empty($existing_team)) {
        return; // Team members already exist
    }
    
    // Sample team members data
    $team_members = array(
        array(
            'title' => 'Kaye Capin',
            'position' => 'Psychiatric Nurse Practitioner',
            'credentials' => 'PMHNP-BC',
            'content' => 'Kaye Capin is a dedicated psychiatric nurse practitioner with extensive experience in mental health care. She specializes in providing comprehensive psychiatric evaluations and medication management for patients of all ages.',
            'education' => 'Master of Science in Nursing - Psychiatric Mental Health Nurse Practitioner<br>University of Pennsylvania',
            'experience' => 'Over 10 years of experience in psychiatric nursing and mental health care.',
            'specialties' => 'Anxiety, Depression, Bipolar Disorder, ADHD, PTSD',
            'philosophy' => 'I believe in providing compassionate, evidence-based care that empowers patients to achieve optimal mental health and wellness.',
            'certifications' => 'Board Certified Psychiatric-Mental Health Nurse Practitioner<br>Basic Life Support (BLS) Certification',
            'languages' => 'English',
            'email' => 'kaye@zelligcare.com',
            'phone' => '(215) 318-1821',
            'locations' => 'Pennsylvania, Texas, Virginia (Telehealth)',
            'menu_order' => 1
        ),
        array(
            'title' => 'Sade Savage',
            'position' => 'Licensed Professional Counselor',
            'credentials' => 'LPC, NCC',
            'content' => 'Sade Savage is a compassionate licensed professional counselor dedicated to helping individuals navigate life\'s challenges. She provides a safe and supportive environment for clients to explore their thoughts, feelings, and behaviors.',
            'education' => 'Master of Arts in Counseling Psychology<br>Temple University',
            'experience' => '8 years of experience providing individual and group therapy.',
            'specialties' => 'Anxiety, Depression, Life Transitions, Trauma, Self-Esteem',
            'philosophy' => 'My approach is client-centered and integrative, drawing from various therapeutic modalities to meet each client\'s unique needs.',
            'certifications' => 'National Certified Counselor<br>Trauma-Informed Care Certification',
            'languages' => 'English',
            'email' => 'sade@zelligcare.com',
            'phone' => '(215) 318-1821',
            'locations' => 'Pennsylvania, Texas, Virginia (Telehealth)',
            'menu_order' => 2
        )
    );
    
    foreach ($team_members as $member_data) {
        $post_id = wp_insert_post(array(
            'post_title'    => $member_data['title'],
            'post_content'  => $member_data['content'],
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_type'     => 'team_member',
            'menu_order'    => $member_data['menu_order']
        ));
        
        if ($post_id && !is_wp_error($post_id)) {
            // Add custom fields
            foreach ($member_data as $key => $value) {
                if (!in_array($key, array('title', 'content', 'post_status', 'post_author', 'post_type', 'menu_order'))) {
                    update_field($key, $value, $post_id);
                }
            }
        }
    }
}
add_action('after_switch_theme', 'zelligcare_create_sample_team_members');

/**
 * Add About Us navigation menu setup
 */
function zelligcare_setup_about_us_navigation() {
    // Get or create the primary menu
    $locations = get_nav_menu_locations();
    $menu_name = 'primary';
    
    if (isset($locations[$menu_name]) && $locations[$menu_name] != 0) {
        $menu_id = $locations[$menu_name];
    } else {
        // Create menu if it doesn't exist
        $menu_id = wp_create_nav_menu('Primary Menu');
        
        if ($menu_id && !is_wp_error($menu_id)) {
            // Assign menu to theme location
            $locations[$menu_name] = $menu_id;
            set_theme_mod('nav_menu_locations', $locations);
        }
    }
    
    if ($menu_id && !is_wp_error($menu_id)) {
        // Add About Us menu items if they don't exist
        $menu_items = wp_get_nav_menu_items($menu_id);
        $existing_slugs = wp_list_pluck($menu_items, 'object');
        
        // About Us dropdown
        if (!in_array('about', $existing_slugs)) {
            $about_item = wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title'  => 'About',
                'menu-item-url'    => home_url('/about/'),
                'menu-item-status' => 'publish',
                'menu-item-type'   => 'custom',
                'menu-item-classes' => 'dropdown'
            ));
            
            if ($about_item && !is_wp_error($about_item)) {
                // Add submenu items
                $our_practice_item = wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title'  => 'Our Practice',
                    'menu-item-url'    => home_url('/about/'),
                    'menu-item-status' => 'publish',
                    'menu-item-type'   => 'custom',
                    'menu-item-parent-id' => $about_item
                ));
                
                $careers_item = wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title'  => 'Careers',
                    'menu-item-url'    => home_url('/practice-with-purpose/'),
                    'menu-item-status' => 'publish',
                    'menu-item-type'   => 'custom',
                    'menu-item-parent-id' => $about_item
                ));
            }
        }
        
        // Our Team
        if (!in_array('team', $existing_slugs)) {
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title'  => 'Our Team',
                'menu-item-url'    => home_url('/team/'),
                'menu-item-status' => 'publish',
                'menu-item-type'   => 'custom'
            ));
        }
    }
}
add_action('after_switch_theme', 'zelligcare_setup_about_us_navigation');

/**
 * Add custom fields for team members (if ACF is not available)
 */
function zelligcare_add_team_member_custom_fields() {
    // This function can be used to add custom fields if Advanced Custom Fields plugin is not available
    // For now, we'll assume ACF is available for the custom fields
}
add_action('init', 'zelligcare_add_team_member_custom_fields');

/**
 * Flush rewrite rules after creating custom post type
 */
function zelligcare_flush_rewrite_rules() {
    zelligcare_register_team_member_cpt();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'zelligcare_flush_rewrite_rules');
