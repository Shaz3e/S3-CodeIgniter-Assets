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
<script type="text/javascript" src="<?php echo asset_url('js/scripts.js'); ?>"></script>

<?php // Conditional: Files ?>


<?php // All CSS files ?>
<link href="<?php echo asset_url('fonts/fonts.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo asset_url('font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo asset_url('css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo asset_url('css/bootstrap-theme.css'); ?>" rel="stylesheet" type="text/css">

<?php 
// Conditional: Files ?>
<link href="<?php echo asset_url('css/404.css'); ?>" rel="stylesheet" type="text/css">




<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo asset_url('js/html5.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo asset_url('js/respond.js'); ?>"></script>
	<link href="<?php echo asset_url('css/ie.css'); ?>" rel="stylesheet" type="text/css">
<![endif]-->



<?php
/**
 * Less Styles 
 * comment below lines on production
 */
?>
<link href="<?php echo asset_url('themes/style1/defaults.less'); ?>" rel="stylesheet/less" type="text/css">
<script type="text/javascript" src="<?php echo asset_url('js/less.js'); ?>"></script>

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


</head>


<body class="dc-wrapper">

<div class="dc-header dc-clear" id="dc-header">
	<div class="row">
    	<div class="dc-logo">
        	<a href="<?php echo base_url(); ?>" rel="bookmark">
        	<img src="<?php echo asset_url('images/logo.png'); ?>" alt="Shaz3e">
            </a>
        </div>
    </div>
</div>

