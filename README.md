![License MIT](https://img.shields.io/github/license/francis94c/og-tags.svg) ![Splint Identifier](https://img.shields.io/badge/dynamic/json.svg?color=brightgreen&label=[S]%20splint%20install&query=%24.identifier&url=https%3A%2F%2Fsplint.cynobit.com%2Fshields%2Fidentifier%2FA3RT16543N) ![Splint Version](https://img.shields.io/badge/dynamic/json.svg?color=brightgreen&label=[S]%20version&query=%24.version&url=https%3A%2F%2Fsplint.cynobit.com%2Fshields%2Fversion%2FA3RT16543N) ![Latest Release](https://img.shields.io/github/release/francis94c/og-tags.svg) ![Commits](https://img.shields.io/github/last-commit/francis94c/og-tags.svg)

[![Open Graph Protocol](http://ogp.me/logo.png)](http://ogp.me/)

# og-tags
A Code Igniter library to easily generate and echo Open Graph Tags and other Social Meta Tags (Twitter, Facebook, etc.) in the header section of a HTML page.

### Installation ###
Download and Install Splint from https://splint.cynobit.com/downloads/splint and run the below from the root of your Code Igniter project.
```bash
splint install francis94c/og-tags
```

### Usage ###

Package supports [Descriptor Auto-loading](https://splint.cynobit.com/wiki/developer/descriptor_autoloading)

```php
$this->load->package("francis94c/og-tags"); // Descriptor Auto-load.

$this->load->splint("francis94c/og-tags", "%og"); // Specific Loading
```

---

### Helper Functions ###

---

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
#### `og_image_width($width)` ####
Will Return `""` if `int` is not supplied.
```php
echo og_image_width(400);
// Returns <meta property="og:image:width" content="400"/>
```
#### `og_image_height($height)` ####
Will Return `""` if `int` is not supplied.
```php
echo og_image_height(200);
// Returns <meta property="og:image:height" content="200"/>
```
