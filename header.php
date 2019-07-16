<!doctype html>
<html class="no-js" lang="en">

<head>
	
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo get_bloginfo( 'name' ); ?> | <?php echo get_bloginfo( 'description' ); ?></title>
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="Crystal Grave">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900|Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightgallery.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<meta name="p:domain_verify" content="c7378c5f45667c2d17e4abade152f44e"/>
</head>

<body>
    <nav>
        <div class="menu container">
            <ul>
                <div class="nav-links-top">
                    <li class="nav-logo"><a href="<?php echo get_home_url(); ?>"><img class="nav-logo-img" src="<?php echo get_template_directory_uri(); ?>/img/crystalgravelogo.png" alt=""></a></li>
                    <li>
                        <a class="menu-icon" onclick="menu(this)">
                        <div>
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                        </a>
                    </li>
                </div>
                <div class="nav-links">
                    <li><a href="<?php echo get_home_url(); ?>/about">About</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/work">Work</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/contact">Contact</a></li>
                </div>
            </ul>
        </div>
    </nav>

