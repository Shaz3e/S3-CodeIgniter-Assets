<?php
    /**
     * Remove this PHP block on live server
     */
    require('assets/lessc.inc.php');

    $inputFile = "assets/css/style.less";
    $outputFile = "assets/css/style.css";
    
    $less = new lessc;
    $less->setFormatter("compressed");
    $cache = $less->cachedCompile($inputFile);
    
    file_put_contents($outputFile, $cache["compiled"]);
    
    $last_updated = $cache["updated"];
    $cache = $less->cachedCompile($cache);
    
    if ($cache["updated"] > $last_updated) {
        file_put_contents($outputFile, $cache["compiled"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo isset($title) ? $title : 'My Application Title' ; ?></title>

<link href="<?php echo asset_url('css/style.css');?>" type="text/css" rel="stylesheet">
<link href="<?php echo asset_url('css/bootstrap.min.css');?>" type="text/css" rel="stylesheet">

<script type="text/javascript" src="<?php echo asset_url('js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo asset_url('js/bootstrap.bundle.min.js');?>"></script>
<script type="text/javascript" src="<?php echo asset_url('js/fontawesome-all.min.js');?>"></script>
<!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo asset_url('js/html5.js');?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('js/respond.js');?>"></script>
<![endif]-->
</head>
<body class="dc-wrapper">
<!--[if lt IE 9]>
    <div class="dc-broswer-alert">
        <p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/"><strong>upgrade your browser</strong></a> or <a href="http://www.google.com/chromeframe/?redirect=true"><strong>activate Google Chrome Frame</strong></a> to improve your experience.</p>
    </div>
<![endif]-->
<div>This is the header's div</div>