# Custom Feature Image Token

A simple WordPress plugin that provides two shortcodes:
- `[custom_featured_image_url]` to display the current post's featured image URL.
- `[acf_version_link]` to display a link from the ACF 'version' field (if set for the post).

## Description

Custom Feature Image Token adds two shortcodes:
- `[custom_featured_image_url]` returns the URL of the current post's featured image. This is particularly useful when you need to dynamically reference the featured image URL in various contexts within your WordPress site.
- `[acf_version_link]` returns the value of the Advanced Custom Fields (ACF) field named 'version' as a URL. If the field is not set, it returns a fallback '#'.

## Installation

1. Download the plugin files
2. Upload the plugin folder to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress

## Usage

### Featured Image URL

Use the shortcode `[custom_featured_image_url]` wherever you want to display the current post's featured image URL.

#### Example

```php
<img src="[custom_featured_image_url]" alt="Featured Image">
```

### ACF Version Link

Use the shortcode `[acf_version_link]` to output the value of the ACF field 'version' as a URL. This is useful for linking to a versioned resource or documentation if you use ACF to store such links.

#### Example

```php
<a href="[acf_version_link]">View Version</a>
```

## Requirements

- WordPress 5.0 or higher
- PHP 7.2 or higher
- Dynamic OO0

## Author

- **Vanhoyte**
- Website: [vanhoyte.com](https://vanhoyte.com)
- Plugin Page: [Custom Feature Image Token](https://vanhoyte.com/plugins/custom-feature-image-token/)
- GitHub: [Custom-Post-Type-Feature-Image-Token](https://github.com/mrvanhoyte/Custom-Post-Type-Feature-Image-Token)

## License

This plugin is licensed under the GPL v2 or later.

## Changelog

### 1.0
- Initial release
- Added shortcode `[custom_featured_image_url]`
- Added shortcode `[acf_version_link]` for outputting the ACF 'version' field as a link 