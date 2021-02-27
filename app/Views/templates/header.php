<!DOCTYPE html>
<html>
    
    <head>
		<title>
            <?php
                if(empty($title)) $titleText = "Home | Panther Sports Academy";
                else $titleText = $title . " | Panther Sports Academy";

                echo $titleText;
            ?>
        </title>
		<!-- custom-theme -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); }
		</script>
		<!-- //custom-theme -->
		<link href="<?= base_url('css/bootstrap.css') ?>" rel="stylesheet" type="text/css" media="all" />
		<link href="<?= base_url('css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="<?= base_url('css/mainStyles.css') ?>" />
		<link rel='stylesheet' href="<?= base_url('css/dscountdown.css') ?>" type='text/css' media='all' />
		<link rel="stylesheet" href="<?= base_url('css/flexslider.css') ?>" type="text/css" media="screen" property="" />
		<!-- gallery -->
		<link href="<?= base_url('css/lsb.css') ?>" rel="stylesheet" type="text/css">
		<!-- //gallery -->
        <!-- Bootstrap Datepicker -->
        <link href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,900" rel="stylesheet">

	</head>	
	<body>
        <!-- banner -->
        <div class="header">
			
            <div class="w3layouts_header_right">
                <ul>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>7027027902</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>

            <div class="w3layouts_header_left">
                <ul>
                    <li>
                        <a href="<?= base_url('registration') ?>" class="btn btn-success" role="button">Register</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="banner">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header m-top-1">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a class="navbar-brand" href="<?= base_url() ?>">Panther Sports Academy</a></h1>
                    </div>
                    <div class="collapse navbar-collapse m-top-1" id="myNavbar">
                        <nav class="link-effect-2" id="link-effect-2">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="<?= (uri_string() == '/') ? 'active' : '' ?>">
                                    <a href="<?= base_url() ?>"><span data-hover="Home">Home</span></a>
                                </li>
                                <li class="<?= (uri_string() == 'about') ? 'active' : '' ?>">
                                    <a href="<?= base_url('about') ?>"><span data-hover="About Us">About Us</span></a>
                                </li>
                                <li class="<?= (uri_string() == 'events') ? 'active' : '' ?>">
                                    <a href="<?= base_url('events') ?>"><span data-hover="Events">Events</span></a>
                                </li>
                                <li class="<?= (uri_string() == 'contact') ? 'active' : '' ?>">
                                    <a href="<?= base_url('contact') ?>"><span data-hover="Contact Us">Contact Us</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </nav>
        </div>
        <!-- //banner -->