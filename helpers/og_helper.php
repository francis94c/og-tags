<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CONSTANTS
 */
defined('TWITTER_CARD_SUMMARY')       OR define('TWITTER_CARD_SUMMARY', "summary");
defined('TWITTER_CARD_SUMMARY_LARGE') OR define('TWITTER_CARD_LARGE', "summary_large_image");
defined('TWITTER_CARD_APP')           OR define('TWITTER_CARD_APP', "app");
defined('TWITTER_CARD_PLAYER')        OR define('TWITTER_CARD_PLAYER', "player");

if (!function_exists('og_read_config')) {
  /**
   * [og_read_config description]
   * @param  [type] $config [description]
   * @return [type]         [description]
   */
  function og_read_config($config, $echo=false) {
    $ci =& get_instance();
    $ci->config->load($config, true);
    if ($ci->config->item($config) == null) return "";
    $og_vars = array_filter($ci->config->item($config), function ($value, $key) {
      if (!is_scalar($key)) return false;
      return preg_match("/^og_/", $key, $config);
    }, ARRAY_FILTER_USE_BOTH);
    if (!is_array($og_vars) || count($og_vars) == 0) return "";
    $og_tags = "";
    foreach ($og_vars as $key => $value) {
      if (!is_scalar($value)) continue;
      if ($echo) {
        echo og(substr($key, 3), $value);
      } else {
        $og_tags .= og(substr($key, 3), $value);
      }
    }
    if ($echo) return;
    return $og_tags;
  }
}

if (!function_exists('og')) {
  /**
   * [og description]
   * @param  [type] $name    [description]
   * @param  [type] $content [description]
   * @return [type]          [description]
   */
  function og($name, $content) {
    if (!is_scalar($name) || !is_scalar($content)) return "";
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
    if (!is_scalar($title)) return "";
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
    if (!is_scalar($type)) return "";
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
    if (!is_scalar($description)) return "";
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
    if (!is_scalar($url)) return "";
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
    if (!is_scalar($site_name)) return "";
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
    if (!is_scalar($url)) return "";
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
    if (!is_scalar($url)) return "";
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
    if (!is_scalar($image)) return "";
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
    if (!is_scalar($url)) return "";
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
    if (!is_scalar($determiner)) return "";
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
    if (!is_scalar($url)) return "";
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
    if (!is_scalar($locale)) return "";
    return "<meta property=\"og:locale\" content=\"$locale\" />" . PHP_EOL;
  }
}

if (!function_exists('og_twitter_card')) {
  /**
   * [og_twitter_card description]
   * @param  [type] $card [description]
   * @return [type]       [description]
   */
  function og_twitter_card($card) {
    if (!is_scalar($card)) return "";
    return "<meta name=\"twitter:card\" content=\"$card\"></meta>" . PHP_EOL;
  }
}

if (!function_exists('og_twitter_site')) {
  /**
   * [og_twitter_site description]
   * @param  [type] $site [description]
   * @return [type]       [description]
   */
  function og_twitter_site($site) {
    if (!is_scalar($site)) return "";
    return "<meta name=\"twitter:site\" content=\"$site\"></meta>" . PHP_EOL;
  }
}

if (!function_exists('og_twitter_creator')) {
  /**
   * [og_twitter_creator description]
   * @param  [type] $creator [description]
   * @return [type]          [description]
   */
  function og_twitter_creator($creator) {
    if (!is_scalar($creator)) return "";
    return "<meta name=\"twitter:creator\" content=\"$creator\"></meta>" . PHP_EOL;
  }
}
?>
