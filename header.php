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
				<div class="contacts_box">
					<span class="email">info@uber-partners.com.ua</span>
					<span class="telephone"><a href="tel:+380442288186">(044) 228-81-86</a></span>
					<span class="telephone"><a href="tel:+380688483041">(068) 848-30-41</a></span>
				</div>
			</div>
		</div>
	</div>
</header>

<main id="main" class="main" role="main">