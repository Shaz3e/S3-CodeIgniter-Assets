<?php
/*======================================================================*\
|| #################################################################### ||
|| # Package - S3 CodeIgniter Template based on Shaz3e S3 Framework     ||
|| # Copyright (C) 2010  shaz3e.com. All Rights Reserved.               ||
|| # Authors - Shahrukh A. Khan (Shaz3e) and DiligentCreators           ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of shaz3e.com                         ||
|| # for more information visit http://www.shaz3e.com/                  ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses websites - http://www.shaz3e.com        ||
|| # A project of DiligentCreators - Construcing Ideas...               ||
|| #################################################################### ||
\*======================================================================*/
?>
<!doctype html>
<html>
<head>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, intial-scale=1, maximum-scale=1, user-scaleable=no">
<meta charset="utf-8">

<title><?php echo $title; ?></title>

<?php //All JS Files ?>
<script type="text/javascript" src="<?php echo asset_url('js/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset_url('js/jquery-noconflict.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset_url('js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset_url('js/menu.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset_url('js/scripts.js'); ?>"></script>

<?php // All CSS files ?>
<link href="<?php echo asset_url('fonts/fonts.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo asset_url('font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo asset_url('css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo asset_url('css/bootstrap-theme.css'); ?>" rel="stylesheet" type="text/css">

<?php 
// Conditional: Files ?>
<link href="<?php echo asset_url('css/404.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo asset_url('css/offline.css'); ?>" rel="stylesheet" type="text/css">

<?php
/**
 * Less Styles 
 * comment below lines on production
 */
?>
<link href="<?php echo asset_url('themes/style1/style.less'); ?>" rel="stylesheet/less" type="text/css">
<script type="text/javascript" src="<?php echo asset_url('js/less.js'); ?>"></script>

<?php
	require('assets/lessc.inc.php');

	$inputFile = "assets/themes/style1/style.less";
	$outputFile = "assets/themes/style1/style.css";
	
	$less = new lessc;
	$less->setFormatter("compressed");
	$cache = $less->cachedCompile($inputFile);
	
	file_put_contents($outputFile, $cache["compiled"]);
	
	$last_updated = $cache["updated"];
	$cache = $less->cachedCompile($cache);
	
	if ($cache["updated"] > $last_updated) {
		file_put_contents($outputFile, $cache["compiled"]);
	}
	
	echo '<link href="' . asset_url('themes/style1/style.css') . '" rel="stylesheet" type="text/css">';
?>

<?php // Favicons ?>
<link rel="shortcut icon" href="<?php echo asset_url('images/favicon/favicon.ico'); ?>">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo asset_url('images/favicon/apple-touch-icon-57x57.png'); ?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo asset_url('images/favicon/apple-touch-icon-114x114.png'); ?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo asset_url('images/favicon/apple-touch-icon-72x72.png'); ?>">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo asset_url('images/favicon/apple-touch-icon-144x144.png'); ?>">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo asset_url('images/favicon/apple-touch-icon-60x60.png'); ?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo asset_url('images/favicon/apple-touch-icon-120x120.png'); ?>">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo asset_url('images/favicon/apple-touch-icon-76x76.png'); ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo asset_url('images/favicon/apple-touch-icon-152x152.png'); ?>">
<link rel="icon" type="image/png" href="<?php echo asset_url('images/favicon/favicon-196x196.png" sizes="196x196'); ?>">
<link rel="icon" type="image/png" href="<?php echo asset_url('images/favicon/favicon-160x160.png" sizes="160x160'); ?>">
<link rel="icon" type="image/png" href="<?php echo asset_url('images/favicon/favicon-96x96.png" sizes="96x96'); ?>">
<link rel="icon" type="image/png" href="<?php echo asset_url('images/favicon/favicon-16x16.png" sizes="16x16'); ?>">
<link rel="icon" type="image/png" href="<?php echo asset_url('images/favicon/favicon-32x32.png" sizes="32x32'); ?>">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo asset_url('images/favicon/mstile-144x144.png'); ?>">
<meta name="msapplication-config" content="<?php echo asset_url('images/favicon/browserconfig.xml'); ?>">

<!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo asset_url('js/html5.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('js/respond.js'); ?>"></script>
    <link href="<?php echo asset_url('css/ie.css'); ?>" rel="stylesheet" type="text/css">
<![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41080686-1', 'auto'); // Change the UA code with yours and remove this line
  ga('send', 'pageview');

</script>

</head>


<body class="dc-wrapper">
<!--[if lt IE 9]>
    <div class="dc-broswer-alert">
    	<p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/"><strong>upgrade your browser</strong></a> or <a href="http://www.google.com/chromeframe/?redirect=true"><strong>activate Google Chrome Frame</strong></a> to improve your experience.</p>
    </div>
<![endif]-->


<div class="dc-fixed-header">
	<!-- Header Starts -->
    <section class="dc-header dc-clear" id="dc-header">
        <div class="row">
        	
            <div class="dc-logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo asset_url('themes/style1/images/logo.png'); ?>"></a></div>

        </div>
    </section>
    <!-- Header Ends -->


	<!-- Menu Starts -->
    <section class="dc-menu dc-clear">
        <div class="row" id="dc-menu">
        	<div class="block">
            	<div class="dcMenu">
                    <div id="dcToggleNav" class="dcToggleNav">
                        <a href="#"><span>|||</span></a>
                    </div>
                    <nav>
                        <ul>
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="#">Menu 1</a>
                            	<ul>
                                	<li><a href="#">Menu 1.1</a></li>
                                	<li><a href="#">Menu 1.2</a></li>
                                	<li><a href="#">Menu 1.3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Menu 2</a>
                            	<ul>
                                	<li><a href="#">Menu 2.1</a></li>
                                	<li><a href="#">Menu 2.2</a></li>
                                	<li><a href="#">Menu 2.3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">List Items</a>
                            	<ul>
                                	<li><a href="#">List Item 1.0</a>
                                        <ul>
                                            <li><a href="#">Menu 1.1</a></li>
                                            <li><a href="#">Menu 1.2</a></li>
                                            <li><a href="#">Menu 1.3</a></li>
                                        </ul>
                                    </li>
                                	<li><a href="#">List Item 2.0</a>
                                        <ul>
                                            <li><a href="#">Menu 2.1</a></li>
                                            <li><a href="#">Menu 2.2</a></li>
                                            <li><a href="#">Menu 2.3</a></li>
                                        </ul>
                                    </li>
                                	<li><a href="#">List Item 3.0</a>
                                        <ul>
                                            <li><a href="#">Menu 2.1</a></li>
                                            <li><a href="#">Menu 2.2</a></li>
                                            <li><a href="#">Menu 2.3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">5 level Drop Down</a>
                                    	<ul>
                                        	<li><a href="#">1st Level</a>
                                                <ul>
                                                    <li><a href="#">2nd Level</a>
                                                        <ul>
                                                            <li><a href="#">3rd Level</a>
                                                                <ul>
                                                                    <li><a href="#">4th Level</a>
                                                                        <ul>
                                                                            <li><a href="#">5th Level</a>
                                                                                <ul>
                                                                                    <li><a href="#">This is not the end</a></li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>        
    </section>
	<!-- Menu Ends -->
</div>
