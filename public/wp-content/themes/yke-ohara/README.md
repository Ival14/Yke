# Yke O'hara Photography Theme

## Overview
A custom, high-performance WordPress theme for Yke O'hara, featuring advanced scroll-based layout transformations and easy content management.

## Content Management
- **Photography Uploads:** Use the "Galleries" custom post type and Media Library.
- **Text Content:** Edit via Pages, Posts, and ACF Options (if installed).

## Animation Integration
- GSAP + ScrollTrigger for scroll-based effects.
- Replicates Codrops logic from:
  - [OnScrollLayoutFormations](https://github.com/codrops/OnScrollLayoutFormations/)
  - [ScrollBasedLayoutAnimations](https://github.com/codrops/ScrollBasedLayoutAnimations/)

## Theme Structure
- `index.php`: Main template, hero section, galleries.
- `header.php` / `footer.php`: Site header/footer.
- `functions.php`: Theme setup, scripts, custom post types.
- `main.js`: Animation logic.
- `style.css`: Base styles.

## Required Plugins
- [Advanced Custom Fields (ACF)](https://www.advancedcustomfields.com/) for custom fields/options.

## Customization
- All content is manageable via the WordPress dashboard.
- Animations can be extended in `main.js`.

## Performance
- Optimized for fast load times and smooth animations.

## License
GPL-2.0+

# Yke O'hara Theme User Guide

## Scroll-Based Animation Classes & Effects

Add these classes to your blocks, images, and galleries in the WordPress dashboard (Block Editor > Advanced > Additional CSS class(es)) to enable advanced scroll-based animations:

### Text & Headings
- **content__text**: Animates paragraphs and main text (fade in, translate up, scale slightly on scroll).
- **type-tiny**: Animates small captions/subtitles (fade in, translate up, scale slightly).
- **content__title**: Animates section titles (dramatic fade in, translate up).
- **h2, h4**: Heading tags are automatically animated (fade in, translate up).

### Images & Galleries
- **grid__img**: For images inside grid layouts. Animates with scale, fade, and vertical movement as grid forms on scroll.
- **hero-image**: For the main hero image. Animates with a subtle scale effect as the user scrolls.
- **gallery**: Add to a container wrapping a gallery block. The gallery section fades in and translates up on scroll.
- **wp-post-image**: For individual gallery images (WordPress usually adds this automatically for featured images). Animates with parallax movement and scale.

## How to Use
1. In the WordPress Block Editor, select your block (text, image, gallery, etc.).
2. Go to the "Advanced" section in the block settings.
3. Add the desired class from above to the "Additional CSS class(es)" field.
4. Update and view your page—scroll-based animations will be applied automatically.

---

For more advanced layouts, use the recommended classes in combination. If you need custom fields for images or text, use the Advanced Custom Fields (ACF) plugin and assign the classes in your template or block settings.

For questions or further customization, contact your developer or refer to the theme documentation.
