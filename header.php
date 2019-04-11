<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<title><?php echo "Uber-Partners | "; the_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="logotype col-lg-2 col-md-2 col-sm-6 col-6">
				<?php if ( has_custom_logo() ) : the_custom_logo(); endif; ?>	
			</div>
			<div class="main_menu col-lg-9 col-md-8 d-none d-lg-block">
				<?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
				<div class="row">
					<div class="col-lg-12 contacts_header">
						<span>info@uber-partners.com.ua</span>
						<span><a href="tel:+380442288186">(044) 228-81-86</a></span>
						<span><a href="tel:+380688483041">(068) 848-30-41</a></span>
					</div>
				</div>
			</div>
			<div class="burger_open_box d-lg-none col-md-10 col-sm-6 col-6">
				<span class="burger_open d-lg-none" id="burger_open">&#9776;</span>
			</div>
		</div>
	</div>
	<div id="burger_nav" class="burger_nav">
		<span class="burger_close" id="burger_close">&times;</span>
		<?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
	</div>
</header>

<main id="main" class="main" role="main">