<?php
/**
 * Create all necessary WordPress pages for Zellig theme
 * Run this script once to create all pages with proper templates
 */

// Include WordPress
require_once('../../../wp-config.php');

// Pages to create with their templates
$pages_to_create = array(
    'about' => array(
        'title' => 'About Us',
        'content' => '<!-- About Us content will be managed through WordPress editor -->',
        'template' => 'page-about.php'
    ),
    'practice-with-purpose' => array(
        'title' => 'Practice With Purpose',
        'content' => '<!-- Careers content will be managed through WordPress editor -->',
        'template' => 'page-practice-with-purpose.php'
    ),
    'meet-our-team' => array(
        'title' => 'Our Team',
        'content' => '<!-- Team content will be managed through WordPress editor -->',
        'template' => 'page-team.php'
    ),
    'faq' => array(
        'title' => 'Frequently Asked Questions',
        'content' => '<!-- FAQ content will be managed through WordPress editor -->',
        'template' => 'page-faq.php'
    ),
    'services' => array(
        'title' => 'Services',
        'content' => '<!-- Services content will be managed through WordPress editor -->',
        'template' => 'page.php'
    ),
    'payment-options' => array(
        'title' => 'Payment Options',
        'content' => '<!-- Payment options content will be managed through WordPress editor -->',
        'template' => 'page.php'
    ),
    'contact-us' => array(
        'title' => 'Contact Us',
        'content' => '<!-- Contact content will be managed through WordPress editor -->',
        'template' => 'page.php'
    ),
    'accessibility-statement' => array(
        'title' => 'Accessibility Statement',
        'content' => '<!-- Accessibility statement content will be managed through WordPress editor -->',
        'template' => 'page.php'
    ),
    'privacy-policy' => array(
        'title' => 'Privacy Policy',
        'content' => '<!-- Privacy policy content will be managed through WordPress editor -->',
        'template' => 'page.php'
    ),
    'sitemap' => array(
        'title' => 'Sitemap',
        'content' => '<!-- Sitemap content will be managed through WordPress editor -->',
        'template' => 'page.php'
    )
);

echo "Creating Zellig theme pages...\n\n";

foreach ($pages_to_create as $slug => $page_data) {
    // Check if page already exists
    $existing_page = get_page_by_path($slug);
    
    if (!$existing_page) {
        // Create the page
        $page_id = wp_insert_post(array(
            'post_title'    => $page_data['title'],
            'post_content'  => $page_data['content'],
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_type'     => 'page',
            'post_name'     => $slug,
            'page_template' => $page_data['template']
        ));
        
        if ($page_id && !is_wp_error($page_id)) {
            // Set the page template
            update_post_meta($page_id, '_wp_page_template', $page_data['template']);
            echo "✓ Created '{$page_data['title']}' page (Slug: {$slug}, ID: {$page_id})\n";
        } else {
            echo "✗ Error creating '{$page_data['title']}' page\n";
        }
    } else {
        // Update existing page template if needed
        $current_template = get_post_meta($existing_page->ID, '_wp_page_template', true);
        if ($current_template !== $page_data['template']) {
            update_post_meta($existing_page->ID, '_wp_page_template', $page_data['template']);
            echo "✓ Updated template for '{$page_data['title']}' page (Slug: {$slug}, ID: {$existing_page->ID})\n";
        } else {
            echo "✓ '{$page_data['title']}' page already exists (Slug: {$slug}, ID: {$existing_page->ID})\n";
        }
    }
}

echo "\nPage creation complete!\n";
echo "Please check your WordPress admin to verify all pages were created correctly.\n";
echo "You can now edit the page content through the WordPress admin panel.\n";
?>
