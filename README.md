# Zellig Care WordPress Theme

A WordPress theme conversion of the Zellig Care mental health services website.

## Prerequisites

- WordPress 5.0 or higher
- PHP 7.4 or higher
- MySQL 5.6 or higher
- Apache/Nginx web server (XAMPP, WAMP, MAMP, or similar)

## Installation

### Step 1: Install WordPress

1. Download WordPress from [wordpress.org/download](https://wordpress.org/download/)
2. Extract WordPress files to your web root directory:
   - For XAMPP: `C:\xampp\htdocs\zelligcare\`
   - For WAMP: `C:\wamp64\www\zelligcare\`
   - For MAMP: `/Applications/MAMP/htdocs/zelligcare/`

### Step 2: Install the Theme

1. Copy the `theme` folder to WordPress themes directory:
   ```
   wp-content/themes/zelligcare/
   ```
   
   The final structure should be:
   ```
   zelligcare/
   ├── wp-admin/
   ├── wp-content/
   │   └── themes/
   │       └── zelligcare/    (your theme files here)
   ├── wp-includes/
   ├── index.php
   ├── wp-config.php
   └── ...
   ```

### Step 3: Configure WordPress

1. Visit your site in a browser (e.g., `http://localhost/zelligcare/`)
2. Follow the WordPress installation wizard
3. Complete the database setup and create an admin account

### Step 4: Activate the Theme

1. Log in to WordPress admin dashboard
2. Navigate to **Appearance > Themes**
3. Find "Zellig Care" theme and click **Activate**

### Step 5: Set Up Pages

The theme includes functions that will automatically create the following pages:
- Services
- Contact Us
- Our Team
- Request an Appointment
- Refer a Patient
- Payment Options
- Reviews
- Library
- Privacy Policy
- Accessibility Statement
- Specialty pages (Anxiety, ADHD, Bipolar, etc.)

Pages will be created automatically when you visit the WordPress admin or frontend.

## Troubleshooting

### Error: "Call to undefined function get_header()"

This error occurs when WordPress is not installed or the theme is not in the correct location.

**Solution:**
1. Ensure WordPress is installed in the root directory
2. Verify the theme is in `wp-content/themes/zelligcare/`
3. Make sure you're accessing the site through WordPress (not directly accessing theme files)

### Theme Not Appearing

1. Check that the theme folder is named exactly `zelligcare` (lowercase)
2. Verify all theme files are in `wp-content/themes/zelligcare/`
3. Check file permissions (folders: 755, files: 644)

## Theme Features

- Responsive design
- Custom page templates for all site pages
- Automatic page creation
- WordPress menu support
- Widget areas
- Custom post type support
- Form handling (Contact Form 7 compatible)

## Support

For WordPress installation help, visit [wordpress.org/support](https://wordpress.org/support/)
