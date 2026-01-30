<?php
/**
 * Force create missing pages
 * Run this script once to create all necessary pages
 */

// Include WordPress
require_once('../../../wp-config.php');

// Create Practice With Purpose page
$page_title = 'Practice With Purpose';
$page_content = '<!-- Careers content will be added here -->';
$page_slug = 'practice-with-purpose';
$template_name = 'page-practice-with-purpose.php';

// Check if page already exists
$existing_page = get_page_by_path($page_slug);

if (!$existing_page) {
    // Create the page
    $page_id = wp_insert_post(array(
        'post_title'    => $page_title,
        'post_content'  => $page_content,
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name'     => $page_slug,
        'page_template' => $template_name
    ));
    
    if ($page_id && !is_wp_error($page_id)) {
        update_post_meta($page_id, '_wp_page_template', $template_name);
        echo "Practice With Purpose page created successfully! Page ID: $page_id\n";
    } else {
        echo "Error creating Practice With Purpose page\n";
    }
} else {
    echo "Practice With Purpose page already exists. Page ID: " . $existing_page->ID . "\n";
}

// Create About Us page if it doesn't exist
$about_page = get_page_by_path('about');
if (!$about_page) {
    $about_id = wp_insert_post(array(
        'post_title'    => 'About Us',
        'post_content'  => '<!-- About Us content -->',
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name'     => 'about',
        'page_template' => 'page-about.php'
    ));
    
    if ($about_id && !is_wp_error($about_id)) {
        update_post_meta($about_id, '_wp_page_template', 'page-about.php');
        echo "About Us page created successfully! Page ID: $about_id\n";
    }
}

// Create Team page if it doesn't exist
$team_page = get_page_by_path('team');
if (!$team_page) {
    $team_id = wp_insert_post(array(
        'post_title'    => 'Meet Our Team',
        'post_content'  => '<!-- Team content -->',
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name'     => 'team',
        'page_template' => 'page-team.php'
    ));
    
    if ($team_id && !is_wp_error($team_id)) {
        update_post_meta($team_id, '_wp_page_template', 'page-team.php');
        echo "Team page created successfully! Page ID: $team_id\n";
    }
}

// Create FAQ page if it doesn't exist
$faq_page = get_page_by_path('frequently-asked-questions');
if (!$faq_page) {
    $faq_id = wp_insert_post(array(
        'post_title'    => 'Frequently Asked Questions',
        'post_content'  => '<!-- FAQ content -->',
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name'     => 'frequently-asked-questions',
        'page_template' => 'page-faq.php'
    ));
    
    if ($faq_id && !is_wp_error($faq_id)) {
        update_post_meta($faq_id, '_wp_page_template', 'page-faq.php');
        echo "FAQ page created successfully! Page ID: $faq_id\n";
    }
}

echo "\nPage creation complete!\n";
echo "Visit your WordPress admin to see the pages.\n";
?>
