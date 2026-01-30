<?php
/**
 * Debug script to check page creation and template assignment
 */

// Include WordPress
require_once('../../../wp-config.php');

echo "<h2>WordPress Debug - Page Creation Check</h2>";

// Check if Practice With Purpose page exists
$page = get_page_by_path('practice-with-purpose');

if ($page) {
    echo "<h3>✅ Practice With Purpose page exists!</h3>";
    echo "<p><strong>Page ID:</strong> " . $page->ID . "</p>";
    echo "<p><strong>Page Title:</strong> " . $page->post_title . "</p>";
    echo "<p><strong>Page Status:</strong> " . $page->post_status . "</p>";
    echo "<p><strong>Page Slug:</strong> " . $page->post_name . "</p>";
    
    // Check template assignment
    $template = get_post_meta($page->ID, '_wp_page_template', true);
    echo "<p><strong>Assigned Template:</strong> " . $template . "</p>";
    
    // Check if template file exists
    $template_file = get_template_directory() . '/' . $template;
    if (file_exists($template_file)) {
        echo "<p><strong>Template File:</strong> ✅ Exists at " . $template_file . "</p>";
    } else {
        echo "<p><strong>Template File:</strong> ❌ NOT FOUND at " . $template_file . "</p>";
    }
    
    // Check permalink
    $permalink = get_permalink($page->ID);
    echo "<p><strong>Permalink:</strong> <a href='$permalink' target='_blank'>$permalink</a></p>";
    
} else {
    echo "<h3>❌ Practice With Purpose page does NOT exist!</h3>";
    
    // Try to create it
    echo "<p>Attempting to create page...</p>";
    
    $page_id = wp_insert_post(array(
        'post_title'    => 'Practice With Purpose',
        'post_content'  => '<!-- Careers content -->',
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name'     => 'practice-with-purpose',
        'page_template' => 'page-practice-with-purpose.php'
    ));
    
    if ($page_id && !is_wp_error($page_id)) {
        update_post_meta($page_id, '_wp_page_template', 'page-practice-with-purpose.php');
        echo "<p>✅ Page created successfully! ID: $page_id</p>";
        
        // Flush rewrite rules
        flush_rewrite_rules();
        echo "<p>✅ Rewrite rules flushed</p>";
        
        // Get permalink
        $permalink = get_permalink($page_id);
        echo "<p><strong>New Permalink:</strong> <a href='$permalink' target='_blank'>$permalink</a></p>";
    } else {
        echo "<p>❌ Error creating page: " . ($page_id ? $page_id->get_error_message() : 'Unknown error') . "</p>";
    }
}

echo "<hr>";

// Check other pages
$pages_to_check = array(
    'about' => 'About Us',
    'team' => 'Meet Our Team',
    'frequently-asked-questions' => 'FAQ'
);

echo "<h3>Other Pages Status:</h3>";
foreach ($pages_to_check as $slug => $title) {
    $page = get_page_by_path($slug);
    if ($page) {
        echo "<p>✅ $title - ID: " . $page->ID . " - <a href='" . get_permalink($page->ID) . "' target='_blank'>" . get_permalink($page->ID) . "</a></p>";
    } else {
        echo "<p>❌ $title - Not found</p>";
    }
}

echo "<hr>";

// Check permalink structure
$permalink_structure = get_option('permalink_structure');
echo "<h3>Permalink Structure:</h3>";
echo "<p>Current: " . ($permalink_structure ? $permalink_structure : 'Plain (default)') . "</p>";

if ($permalink_structure !== '/%postname%/') {
    echo "<p>⚠️ Permalink structure is not set to Post Name. This may cause issues.</p>";
    echo "<p>Updating permalink structure...</p>";
    
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%postname%/');
    $wp_rewrite->flush_rules();
    update_option('permalink_structure', '/%postname%/');
    
    echo "<p>✅ Permalink structure updated to Post Name</p>";
}

echo "<hr>";

// Check theme template files
echo "<h3>Template Files Check:</h3>";
$template_files = array(
    'page-about.php',
    'page-team.php', 
    'page-practice-with-purpose.php',
    'page-faq.php'
);

foreach ($template_files as $file) {
    $file_path = get_template_directory() . '/' . $file;
    if (file_exists($file_path)) {
        echo "<p>✅ $file - Exists</p>";
    } else {
        echo "<p>❌ $file - NOT FOUND</p>";
    }
}

echo "<hr>";
echo "<p><strong>Next Steps:</strong></p>";
echo "<ol>";
echo "<li>Visit your WordPress admin and check Pages section</li>";
echo "<li>Go to Settings → Permalinks and ensure 'Post name' is selected</li>";
echo "<li>Try accessing the page again</li>";
echo "<li>If still not working, check WordPress error logs</li>";
echo "</ol>";

?>
