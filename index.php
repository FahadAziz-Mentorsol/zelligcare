<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

// Check if WordPress is installed
if (!file_exists(__DIR__ . '/wp-blog-header.php')) {
    die('
    <!DOCTYPE html>
    <html>
    <head>
        <title>WordPress Not Found</title>
        <style>
            body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; }
            h1 { color: #d63638; }
            .instructions { background: #f0f0f1; padding: 20px; border-left: 4px solid #2271b1; margin: 20px 0; }
            code { background: #f0f0f1; padding: 2px 6px; border-radius: 3px; }
        </style>
    </head>
    <body>
        <h1>WordPress Installation Required</h1>
        <div class="instructions">
            <p><strong>WordPress is not installed in this directory.</strong></p>
            <p>To use the Zellig Care theme, you need to:</p>
            <ol>
                <li>Download and install WordPress from <a href="https://wordpress.org/download/" target="_blank">wordpress.org</a></li>
                <li>Extract WordPress files to your web root directory (e.g., <code>C:\xampp\htdocs\zelligcare\</code>)</li>
                <li>Copy the <code>theme</code> folder to <code>wp-content/themes/zelligcare/</code></li>
                <li>Run the WordPress installation by visiting your site in a browser</li>
                <li>Activate the "Zellig Care" theme from Appearance > Themes</li>
            </ol>
            <p><strong>Current Structure:</strong></p>
            <ul>
                <li>Your theme files are in: <code>theme/</code></li>
                <li>They should be moved to: <code>wp-content/themes/zelligcare/</code></li>
            </ul>
            <p><strong>Quick Setup:</strong></p>
            <ol>
                <li>Download WordPress and extract it to this directory</li>
                <li>Move the <code>theme</code> folder to <code>wp-content/themes/zelligcare/</code></li>
                <li>Visit your site to run the WordPress installer</li>
            </ol>
        </div>
    </body>
    </html>
    ');
}

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
