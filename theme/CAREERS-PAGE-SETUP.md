# Careers Page Setup Instructions

## Issue: Careers page not opening when clicked

The careers page template is ready, but you need to create the page in WordPress and assign the template.

## Steps to Fix:

### 1. Create the Careers Page in WordPress

1. Go to **WordPress Admin** → **Pages** → **Add New**
2. Set the page title: **"Careers"** or **"Practice With Purpose"**
3. Set the page slug/URL to: **"careers"** (in the Permalink section)
4. In the **Page Attributes** box (right sidebar), select **Template: "Careers"**
5. Click **Publish**

### 2. Verify the Page URL

The page should be accessible at:
- `yoursite.com/careers/` OR
- `yoursite.com/practice-with-purpose/`

### 3. Update Menu Links (if needed)

1. Go to **Appearance** → **Menus**
2. Find the "Careers" menu item in the About dropdown
3. Make sure it links to the page you just created
4. Save the menu

### 4. Clear Cache

If you're using a caching plugin, clear the cache after creating the page.

## Alternative: Auto-create Page

If you want the page to be created automatically, you can add this code to your theme's functions.php (temporary):

```php
// Auto-create careers page on theme activation
function zelligcare_create_careers_page() {
    if (!get_page_by_path('careers')) {
        $page = array(
            'post_title'    => 'Careers',
            'post_name'     => 'careers',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'page_template' => 'page-careers.php'
        );
        wp_insert_post($page);
    }
}
add_action('after_setup_theme', 'zelligcare_create_careers_page');
```

## Troubleshooting

- **404 Error**: Make sure permalinks are saved (Settings → Permalinks → Save)
- **Wrong Template**: Verify the template is selected in Page Attributes
- **Menu Not Working**: Check that the menu item links to the correct page URL
