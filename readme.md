## S3 CodeIgniter-Assets
**Create beautiful responsive CodeIgniter Applications more easier and faster.**

[![S3Framework](http://img.shields.io/badge/S3Framework-Stable-blue.svg)](http://www.shaz3e.com)
[![Version](http://img.shields.io/badge/Version-2.2.7-green.svg)](http://www.shaz3e.com)
[![License](http://img.shields.io/badge/LICENSE-MIT-blue.svg)](http://opensource.org/licenses/mit-license.html)
[![Build Status](https://travis-ci.org/Shaz3e/S3-CodeIgniter-Assets.svg)](https://travis-ci.org/Shaz3e/S3-CodeIgniter-Assets)

### Why you should use it?
**S3 CodeIgniter Assets** is easy to use for custom Header & Footer auto load in your PHP Application and rapid build your responsive application.
**S3 CodeIgniter** is using S3 Framework Themes intigrated with Bootstrap and lesscss compiler

### Features
 - 12 Columns Grid System
 - 300+ Module Positions
 - Full width Modules
 - Suitable with any design
 - IE7 and IE8 Supported
 - Choose from Different Styles
 - Custom theme's module styles with themes/style1/theme_modules.less file
 - Less Development Mode Enable / Disable
 - Use Google Analytics Code
 - Compatible with CI 3.1.x

### How to use it?
All you need to do is to  download it and extract all files to your **root application**

 - Open autoload.php under application/config/autoload.php
  - **Find** $autoload['helper'] = array();
  - **Replace** $autoload['helper'] = array('url', 'assets');
 - Open config.php under application/config/config.php
  - **Find** $config['base_url']	= 'index.php';
  - **Replace** $config['base_url']	= '/';

How to use Active menu classes in template
 - Open autoload.php under application/config/autoload.php
  - **Find** $autoload['helper'] = array();
  - **Replace** $autoload['helper'] = array('url', 'assets', 'menu');
  - `<li class="<?php echo activate_menu('home'); ?>"><a href="<?php echo base_url(); ?>">Home</a></li>` where active_menu('home') = home controller change it accordingly.


more details about How to use header/footer/assets in CodeIgniter [Read Full Tutorial](http://blog.shaz3e.com/how-to-use-header-footer-assets-in-codeigniter/).

### Download, Fork, Commit.
If you think you can make this better, please Download, Fork, & Commit. We'd love to see your ideas.
 
### License

The S3 Responsive Template System is opensource software released under the [MIT](http://opensource.org/licenses/mit-license.html).