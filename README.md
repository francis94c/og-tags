![License MIT](https://img.shields.io/github/license/francis94c/og-tags.svg) ![Splint](https://img.shields.io/badge/splint--ci-francis94c%2Fog--tags-orange.svg) ![Latest Release](https://img.shields.io/github/release/francis94c/og-tags.svg) ![Commits](https://img.shields.io/github/last-commit/francis94c/og-tags.svg)

[![Open Graph Protocol](http://ogp.me/logo.png)](http://ogp.me/)

# og-tags
A Code Igniter library to easily generate and echo Open Graph Tags and other Social Meta Tags (Twitter, Facebook, etc.) in the header section of a HTML page.

### Installation ###
Download and Install Splint from https://splint.cynobit.com/downloads/splint and run the below from the root of your Code Igniter project.
```bash
splint install francis94c/og-tags
```

### Usage ###

Package supports [Descriptor Auto-loading](http://localhost/splint.cynobit.com/wiki/developer/descriptor_autoloading)

```php
$this->load->package("francis94c/og-tags"); // Descriptor Auto-load.

$this->load->splint("francis94c/og-tags", "%og"); // Specific Loading
```

---

### Helper Available functions ###

#### Universal Function: `og($name, $content)` ####

```php
echo og("image", "http://example.com/logo.png");
// Returns <meta property="og:image" content="http://example.com/logo.png"/>
```
#### `og_image($url)` ####
```php
echo og_image("http://example.com/logo.png");
// Returns <meta property="og:image" content="http://example.com/logo.png"/>
```
#### `og_title($title)` ####
```php
echo og_title("A Title");
// Returns <meta property="og:title" content="A Title"/>
```
