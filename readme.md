## S3 CodeIgniter-Assets
**Create beautiful responsive CodeIgniter Applications more easier and faster.**

[![S3Framework](http://img.shields.io/badge/S3Framework-Stable-blue.svg)](http://www.shaz3e.com)
[![Version](http://img.shields.io/badge/Version-3.0.1-green.svg)](http://www.shaz3e.com)
[![License](http://img.shields.io/badge/LICENSE-MIT-blue.svg)](http://opensource.org/licenses/mit-license.html)
[![Build Status](https://travis-ci.org/Shaz3e/S3-CodeIgniter-Assets.svg)](https://travis-ci.org/Shaz3e/S3-CodeIgniter-Assets)

### Why you should use it?
**S3 CodeIgniter Assets** is easy to use for custom Header & Footer auto load in your PHP Application and rapid build your responsive application.

### Features
- Bootstrap 4.x Supported
- Fontawesome v5.0.9 Supported
- Less Complier

### How to use it?
All you need to do is to  download it and extract all files to your **root application**

 - Open autoload.php under application/config/autoload.php
  - **Find** `$autoload['helper'] = array();`
  - **Replace** `$autoload['helper'] = array('url', 'assets');`
 - Open config.php under application/config/config.php
  - **Find** `$config['base_url']	= 'index.php';`
  - **Replace** `$config['base_url']	= '/';`
 - Change controller name
  - Open routs.php under application/config/routs.php
  - **Fine** `$route['default_controller'] = 'Welcome';`
  - **Replace** `$route['default_controller'] = 'home';`

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