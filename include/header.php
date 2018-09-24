<?php 
	$filepath = basename($_SERVER['PHP_SELF'], ".php");
	if($filepath == "index"){
		$title = "Blog";
	}else{
		$title = str_replace("-", " ", $filepath);
	}
	$siteURL = 'http://localhost/brownbag-blog/';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?=ucfirst($title);?> Brownbag</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
    <link rel="shortcut icon" href="assets/img/icons/favicon.png" type="image/x-icon" />
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/style.min.css" rel="stylesheet" />
	<link href="assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="assets/css/theme/default.css" id="theme" rel="stylesheet" />
	<link href="assets/css/animate.min.css" rel="stylesheet" />
             <!-- owlcarousel start -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
             <!-- owlcarousel end -->
	<!-- ================== END BASE CSS STYLE ================== -->
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
    <div id="page-container" class="fade">
		<div id="top-nav" class="top-nav">
		    <div class="container">
		        <div class="collapse navbar-collapse">
		            <ul class="nav navbar-nav">
		                <li class="f-s-12 p-10"><span id="datetimedisplay"></span></li>
		                <li class="f-s-12 p-10">Latest: Health Benefits of Ghee</li>
		            </ul>
		            <ul class="nav navbar-nav navbar-right">
		                <li><a href="#">Career</a></li>
		                <li><a href="#">Our Forum</a></li>
		                <li><a href="#">Newsletter</a></li>
		                <li><a href="#"><i class="fa fa-facebook f-s-14"></i></a></li>
		                <li><a href="#"><i class="fa fa-twitter f-s-14"></i></a></li>
		                <li><a href="#"><i class="fa fa-instagram f-s-14"></i></a></li>
		                <li><a href="#"><i class="fa fa-dribbble f-s-14"></i></a></li>
		                <li><a href="#"><i class="fa fa-google-plus f-s-14"></i></a></li>
		            </ul>
		        </div>
		    </div>
		</div>
        <div id="header" class="header">
            <div class="container">
                <div class="header-container">
                    <div class="navbar-header">
                        <button type="button" class="iconbarwidth navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="header-logo">
                            <a href="<?=$siteURL;?>index">
                                <span class="hidden-xs"><img class="brand" src="<?=$siteURL;?>assets/img/icons/logo.png" style="border-radius:2px; border:1px solid #666;padding:5px;height:35px;background:#0D5776"></span>
                                <span>Dwarka<span class="text-theme-white">Moms</span></span>
                                <small>Brownbag Grocery Service</small>
                            </a>
                        </div>
                    </div>
                    <div class="header-nav">
                        <div class=" collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav">
                                <li class="active"><a href="<?=$siteURL;?>index">Home</a></li>
                                 <li><a href="#">Brownbag</a></li>
                                
                                <li class="dropdown dropdown-hover">
                                    <a href="#" data-toggle="dropdown">
                                        Category 
                                        <i class="fa fa-angle-down"></i> 
                                        <span class="arrow top"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?=$siteURL;?>health">Health</a></li>
                                        <li><a href="#">Category2</a></li>
                                        <li><a href="#">Category3</a></li>
                                        <li><a href="#">Category4</a></li>
                                        <li><a href="#">Category5</a></li>
                                        <li><a href="#">Category6</a></li>
                                        <li><a href="#">Category7</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?=$siteURL;?>recipe">Recipe</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-nav">
                        <ul class="nav pull-right">
                            <li>
                                <a href="#">
                                    <img src="<?=$siteURL;?>assets/img/icons/offer-icon.png" class="img-responsive" alt="" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        