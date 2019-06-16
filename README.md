![License MIT](https://img.shields.io/github/license/francis94c/og-tags.svg) ![Splint](https://img.shields.io/badge/splint--ci-francis94c%2Fog--tags-orange.svg) ![Latest Release](https://img.shields.io/github/release/francis94c/og-tags.svg) ![Commits](https://img.shields.io/github/last-commit/francis94c/og-tags.svg)

[<p style="text-align:center;"><img src="http://ogp.me/logo.png" alt="Open Graph Protocol" title="Open Graph Protocol" /></p>](http://ogp.me/)

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
When successfully loaded, the following functions are available to you.
