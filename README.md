![License MIT](https://img.shields.io/github/license/francis94c/og-tags.svg) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/francis94c/og-tags/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/francis94c/og-tags/?branch=master) ![Splint Identifier](https://splint.cynobit.com/shields/iconIdentifier/A3RT16543N) ![Splint Version](https://splint.cynobit.com/shields/iconVersion/A3RT16543N) ![Latest Release](https://img.shields.io/github/release/francis94c/og-tags.svg) ![Commits](https://img.shields.io/github/last-commit/francis94c/og-tags.svg)

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
`$name`: (`string`) : Open Graph Tag Name.
`$content`: (`string`) : Open Graph Tag Content.
```php
echo og("image", "http://example.com/logo.png");
// Returns <meta property="og:image" content="http://example.com/logo.png"/>
```
#### Read Values from a Config File : `og_read_config($config_file_name, [$echo=false])` ####
`$config_file_name`: (`string`) : The name of the config file you want it to load values from. This means you must reate a seperate php file in the `application/config` folder to hold og tag information.
`[$echo]`: (`boolean`) : Optional, Whether to output the tags straight to the browser or return them as string. Default to `false`.

```php
echo og_read_config("my_og_tags");
// Depending on the contents of your config file.
// Returns <meta property="og:title" content="A Title"/> \n <meta property="og:image" content="http://example.com/logo.png"/> \n ......

// Or
og_read_config("my_og_tags", true); // to echo directly to the browser.
```

The config file should contain something like the below.

```php
$config["og_title"]            = "A Title";
$config["og_site_name"]        = "IMDb";
$config["og_audio"]            = "http://example.com/bond/theme.mp3";
$config["og_description"]      = "Sean Connery found fame and fortune as the suave, sophisticated British agent, James Bond.";
$config["og_determiner"]       = "the";
$config["og_locale"]           = "en_GB";
$config["og_locale:alternate"] = "fr_FR";
$config["og_image"]            = "http://example.com/rock.jpg";
$config["og_image:width"]      = "300";
$config["og_image:height"]     = "300";
```
All key names must be prefixed with 'og_'. Only scalar data type check applies to all elements here.

#### `og_image($url)` ####
`$url`: (`string`) : Page Canonical URL.
```php
echo og_image("http://example.com/logo.png");
// Returns <meta property="og:image" content="http://example.com/logo.png"/>
```
#### `og_title($title)` ####
`$title`: (`string`) : Page title.
```php
echo og_title("A Title");
// Returns <meta property="og:title" content="A Title"/>
```
#### `og_image_width($width)` ####
`$width`: (`int`) : Image Width.
Will Return `""` if `int` is not supplied.
```php
echo og_image_width(400);
// Returns <meta property="og:image:width" content="400"/>
```
#### `og_image_height($height)` ####
`$height`: (`int`) : Image Height.
Will Return `""` if `int` is not supplied.
```php
echo og_image_height(200);
// Returns <meta property="og:image:height" content="200"/>
```
#### `og_image_size($width, $height)` ####
`$width`: (`int`) : Image Width.
`$height`: (`int`) : Image Height.
Will return only valid values (`int`) of the two parameters `$width` and `$height`.
```php
echo og_image_size(500, 200);
// Returns <meta property="og:image:width" content="500"/> \n <meta property="og:image:height" content="200"/>
```
#### `og_image_secure_url($url)` ####
`$url`: (`string`) : Image URL on SSL.
```php
echo og_image_secure_url("https://example.com/logo.png");
// Returns <meta property="og:image:secure_url" content="https://example.com/logo.png"/>
```
#### `og_parse_image($image)` ####
`$image`: (`string`) : Local file path to a valid image.
This function will return only valid integer values read from a valid image file.
```php
echo og_parse_image("/var/www/logo.png");
// Returns <meta property="og:image:width" content="500"/> \n <meta property="og:image:height" content="200"/>
```
