 - Open autoload.php under application/config/autoload.php
  - **Find** $autoload['helper'] = array();
  - **Replace** $autoload['helper'] = array('url', 'assets');
 - Open config.php under application/config/config.php
  - **Find** $config['base_url']	= 'index.php';
  - **Replace** $config['base_url']	= '';