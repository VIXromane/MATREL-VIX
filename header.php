<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon.png">

		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,700,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<?php wp_head(); ?>
	</head>
	<body>
	<header>
		<div class="row" id="top-menu-logo"><!--MENU TOP -->
			<div class="top-bar-left">
				<ul class="menu">
					<li id="logo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/logo.png"/></a></li>
					<li id="baseline">
						Équipements et systèmes  pour la finition<br/>
						et la présentation des documents
					</li>
				</ul>
			</div>
			<div class="top-bar-right">
				<ul class="menu phone">
					<li>Tél : 04 74 93 42 42</li>
					<li>Fax : 04 74 93 44 88</li>
				</ul>
			</div>
		</div><!--FIN MENU TOP -->

		<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
		    <button class="menu-icon" type="button" data-toggle></button>
		    <div class="title-bar-title">Menu</div>
		    </div>
		    <div class="top-bar navigation" id="main-menu">
				<nav class="row"><!--NAVIGATION-->
				    <ul class="menu vertical medium-horizontal expanded medium-text-center" data-responsive-menu="drilldown medium-dropdown">
					    <li class="rubrique"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/home.png" height="30" width="37"/>ACCUEIL</a></li>
					    <li class="rubrique"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/qui-sommes-nous.png" height="30" width="37"/>QUI SOMMES-NOUS</a></li>
					    <li class="rubrique"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/produits.png" height="30" width="37"/>NOS PRODUITS</a>
						    <!--<ul class="submenu menu vertical" data-submenu>
							<li><a href="#">Thermo-relieurs système FastBack</a></li>
							<li><a href="#">Thermo-relieurs "dos carrés collés"</a></li>
							<li><a href="#">Perfo-relieur - Perforateur</a></li>
							<li><a href="#">Système de brochage numérique</a></li>
							<li><a href="#">Assembleuses - Taqueuses</a></li>
							<li><a href="#">Modules de brochage</a></li>
							<li><a href="#">Massicots</a></li>
							<li><a href="#">Pelliculeuse - Plastifieuse</a></li>
							<li><a href="#">Vernisseuses</a></li>
							<li><a href="#">Plieuses de table</a></li>
							<li><a href="#">Plieuse professionnelle</a></li>
							<li><a href="#">Raineuse/plieuse/perforation</a></li>
							<li><a href="#">Raineuses par emboutissage</a></li>
							<li><a href="#">Raineuses rotatives</a></li>
							<li><a href="#">Piqueuses - Agrafeuses</a></li>
							<li><a href="#">Foreuses</a></li>
							<li><a href="#">Margeurs</a></li>
							<li><a href="#">Compteuses de feuilles</a></li>
							<li><a href="#">Coupeuse de cartes</a></li>
							<li><a href="#">Perforateur</a></li>
						    </ul>-->
					    </li>
					    <li class="rubrique"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/contact.png" height="30" width="37"/>CONTACTEZ-NOUS</a></li>
					    <li class="rubrique"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/documentations.png" height="30" width="37"/>DOCUMENTATIONS</a></li>
					    <li class="rubrique catalogue"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/download.png" height="30" width="37"/>CATALOGUE</a></li>
				    </ul>
				</nav><!--FIN NAVIGATION-->
	    </div>
	</header>
	<div class="row"><!--FIL ARIANE-->
			<h6 class=" large-12 medium-12 small-12 columns">Raineuse/plieuse/perforation <i class="fa fa-angle-left"></i> <strong>CF 375</strong></h6>
	</div>



	<section class="container">
