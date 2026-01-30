# About Us Module - Zellig Care WordPress Theme

This document provides comprehensive information about the About Us module that has been integrated into the Zellig Care WordPress theme.

## Overview

The About Us module includes:
- Main About Us page template
- Meet Our Team page template  
- Individual team member profile pages
- Custom post type for team members
- Responsive design and styling
- Navigation menu integration

## Files Created/Modified

### New Files
- `page-about.php` - About Us main page template
- `page-team.php` - Meet Our Team page template
- `single-team-member.php` - Individual team member page template
- `css/about-us.css` - Dedicated styles for About Us module
- `inc/about-us-setup.php` - Setup and configuration functions

### Modified Files
- `functions.php` - Added custom post type registration and setup includes
- `header.php` - Navigation structure (already compatible)

## Setup Instructions

### 1. Theme Activation
When you activate the Zellig Care theme, the following will be automatically created:
- About Us page (`/about/`)
- Meet Our Team page (`/team/`)
- Careers page (`/careers/`)
- Sample team members (Kaye Capin and Sade Savage)
- Navigation menu items

### 2. Custom Post Type
The theme registers a "Team Member" custom post type with the following features:
- Custom fields for position, credentials, education, experience, etc.
- Featured image support
- Custom image sizes (team-member: 400x400, team-member-large: 600x600)
- Menu order support for team member arrangement

### 3. Page Templates
- **About Us Page**: Uses `page-about.php` template
- **Team Page**: Uses `page-team.php` template  
- **Team Member Pages**: Uses `single-team-member.php` template

### 4. Navigation Setup
The theme automatically sets up navigation menu items:
- About (dropdown with "Our Practice" and "Careers")
- Our Team

## Custom Fields

### Team Member Custom Fields
The following custom fields are available for team members (requires Advanced Custom Fields plugin or similar):

- `position` - Job title/position
- `credentials` - Professional credentials
- `education` - Educational background
- `experience` - Work experience
- `specialties` - Areas of specialty
- `philosophy` - Treatment philosophy
- `certifications` - Professional certifications
- `languages` - Languages spoken
- `email` - Contact email
- `phone` - Contact phone
- `locations` - Service locations
- `short_bio` - Short biography for team listing

### About Us Page Fields
- `about_sections` - Repeater for content sections
- `mission_statement` - Mission statement text
- `vision_statement` - Vision statement text
- `core_values` - Repeater for core values

## Styling

### CSS Structure
The `css/about-us.css` file contains:
- Responsive design breakpoints
- Animation and transition effects
- Accessibility features
- Print styles
- Mobile-first approach

### Key Features
- Gradient backgrounds
- Hover effects and animations
- Card-based layouts
- Professional typography
- Consistent color scheme

## URL Structure

- About Us: `/about/`
- Meet Our Team: `/team/`
- Individual Team Member: `/team-member/[member-name]/`
- Careers: `/careers/`

## Content Management

### Adding New Team Members
1. Go to WordPress Admin → Team Members → Add New
2. Fill in the team member's name and bio
3. Add featured image (recommended: 600x600px)
4. Fill in custom fields in the "Team Member Details" section
5. Set menu order for display positioning
6. Publish

### Editing About Us Content
1. Go to Pages → About Us
2. Edit the main content using WordPress editor
3. Add sections using the "About Sections" repeater field
4. Set mission, vision, and core values using respective fields
5. Update page

### Managing Team Page
1. Go to Pages → Meet Our Team
2. Edit the introductory content
3. Team members are automatically pulled from the Team Member CPT
4. Arrange team members using menu order

## Responsive Design

The module is fully responsive with breakpoints at:
- 992px (tablets and larger)
- 768px (tablets)
- 576px (mobile phones)
- Print styles for printing

## Browser Compatibility

- Chrome (latest 2 versions)
- Firefox (latest 2 versions)
- Safari (latest 2 versions)
- Edge (latest 2 versions)
- Internet Explorer 11 (limited support)

## Performance Considerations

- Images are optimized with proper sizing
- CSS is minified in production
- Lazy loading for images
- Efficient JavaScript usage
- Minimal HTTP requests

## Accessibility

- Semantic HTML5 structure
- ARIA labels where appropriate
- Keyboard navigation support
- Screen reader compatibility
- Focus indicators
- Color contrast compliance

## Troubleshooting

### Common Issues

1. **Team members not showing on team page**
   - Check that team members are published
   - Verify custom post type is registered
   - Check page template assignment

2. **Styling issues**
   - Ensure `about-us.css` is being loaded
   - Check for CSS conflicts
   - Verify responsive breakpoints

3. **Navigation not updating**
   - Check menu location assignment
   - Verify menu items are published
   - Check theme location settings

4. **Custom fields not showing**
   - Install and activate Advanced Custom Fields plugin
   - Verify field group settings
   - Check field names match template usage

### Debug Mode
Add this to `wp-config.php` to enable debugging:
```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
```

## Customization

### Adding New Custom Fields
1. Use Advanced Custom Fields plugin
2. Create field group for "Team Member"
3. Add fields with appropriate field names
4. Update template files to display new fields

### Modifying Styles
1. Edit `css/about-us.css`
2. Or add custom CSS in WordPress Customizer
3. Use child theme for extensive modifications

### Template Modifications
1. Copy template files to child theme
2. Make modifications as needed
3. Maintain WordPress coding standards

## Support

For issues or questions:
1. Check this documentation first
2. Review WordPress codex for relevant functions
3. Check theme files for proper implementation
4. Test with default WordPress theme to isolate issues

## Version History

### v1.0.0
- Initial release
- Basic About Us functionality
- Team member custom post type
- Responsive design
- Navigation integration

## Future Enhancements

Potential future features:
- Team member categories
- Testimonials integration
- Social media links for team members
- Advanced filtering options
- Team member search functionality
- Multilingual support

---

**Note**: This module requires WordPress 5.0+ and PHP 7.0+ for optimal performance. Advanced Custom Fields plugin is recommended for full functionality.
