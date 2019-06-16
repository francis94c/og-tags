<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('og')) {
  /**
   * [og description]
   * @param  [type] $name    [description]
   * @param  [type] $content [description]
   * @return [type]          [description]
   */
  function og($name, $content) {
    return "<meta property=\"og:$name\" content=\"$content\" />" . PHP_EOL;
  }
}

if (!function_exists('og_title')) {
  /**
   * [og_title description]
   * @param  [type] $title [description]
   * @return [type]        [description]
   */
  function og_title($title) {
    return "<meta property=\"og:title\" content=\"$title\" />" . PHP_EOL;
  }
}

if (!function_exists('og_type')) {
  /**
   * [og_type description]
   * @param  [type] $type [description]
   * @return [type]       [description]
   */
  function og_type($type) {
    return "<meta property=\"og:type\" content=\"$type\" />" . PHP_EOL;
  }
}

if (!function_exists('og_description')) {
  /**
   * [og_description description]
   * @param  [type] $description [description]
   * @return [type]              [description]
   */
  function og_description($description) {
    return "<meta property=\"og:description\" content=\"$description\" />" . PHP_EOL;
  }
}

if (!function_exists('og_url')) {
  /**
   * [og_url description]
   * @param  [type] $url [description]
   * @return [type]      [description]
   */
  function og_url($url) {
    return "<meta property=\"og:url\" content=\"$url\" />" . PHP_EOL;
  }
}

if (!function_exists('og_site_name')) {
  /**
   * [og_site_name description]
   * @param  [type] $site_name [description]
   * @return [type]            [description]
   */
  function og_site_name($site_name) {
    return "<meta property=\"og:site_name\" content=\"$site_name\" />" . PHP_EOL;
  }
}

if (!function_exists('og_image')) {
  /**
   * [og_image description]
   * @param  [type] $url [description]
   * @return [type]      [description]
   */
  function og_image($url) {
    return "<meta property=\"og:image\" content=\"$url\" />" . PHP_EOL;
  }
}

if (!function_exists('og_image_width')) {
  /**
   * [og_image_width description]
   * @param  [type] $width [description]
   * @return [type]        [description]
   */
  function og_image_width($width) {
    return is_int($width) ? "<meta property=\"og:image:width\" content=\"$width\" />" . PHP_EOL : "";
  }
}

if (!function_exists('og_image_height')) {
  /**
   * [og_image_height description]
   * @param  [type] $height [description]
   * @return [type]         [description]
   */
  function og_image_height($height) {
    return is_int($height) ?  "<meta property=\"og:image:height\" content=\"$height\" />" . PHP_EOL : "";
  }
}

if (!function_exists('og_image_size')) {
  /**
   * [og_image_size description]
   * @param  [type] $width  [description]
   * @param  [type] $height [description]
   * @return [type]         [description]
   */
  function og_image_size($width, $height) {
    return is_int($width) && is_int($height) ? "<meta property=\"og:image:width\" content=\"$width\" />" .
    PHP_EOL . "  <meta property=\"og:image:height\" content=\"$height\" />" : "";
  }
}

if (!function_exists('og_determiner')) {
  function og_image_secure_url($url) {
    return "<meta property=\"og:image:secure_url\" content=\"$url\" />" . PHP_EOL;
  }
}

if (!function_exists('og_parse_image')) {
  /**
   * [og_parse_image description]
   * @param  [type] $image [description]
   * @return [type]        [description]
   */
  function og_parse_image($image) {
    if (is_int(exif_imagetype($image))) {
      $image_size = getimagesize($image);
      if ($image_size && is_int($image_size[0])) {
        return "<meta property=\"og:image:width\" content=\"$image_size[0]\" />" .
        PHP_EOL . "  <meta property=\"og:image:height\" content=\"$image_size[1]\" />"
        . PHP_EOL;
      }
    }
    return "";
  }
}

if (!function_exists('og_image_secure_url')) {
  /**
   * [og_image description]
   * @param  [type] $url [description]
   * @return [type]      [description]
   */
  function og_image_secure_url($url) {
    return "<meta property=\"og:image:secure_url\" content=\"$url\" />" . PHP_EOL;
  }
}

if (!function_exists('og_determiner')) {
  /**
   * [og_determiner description]
   * @param  [type] $determiner [description]
   * @return [type]             [description]
   */
  function og_determiner($determiner) {
    return "<meta property=\"og:determiner\" content=\"$determiner\" />" . PHP_EOL;
  }
}

if (!function_exists('og_audio')) {
  /**
   * [og_audio description]
   * @param  [type] $url [description]
   * @return [type]      [description]
   */
  function og_audio($url) {
    return "<meta property=\"og:audio\" content=\"$url\" />" . PHP_EOL;
  }
}

if (!function_exists('og_locale')) {
  /**
   * [og_locale description]
   * @param  [type] $locale [description]
   * @return [type]         [description]
   */
  function og_locale($locale) {
    return "<meta property=\"og:locale\" content=\"$locale\" />" . PHP_EOL;
  }
}
?>
