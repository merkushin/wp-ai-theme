<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Header section -->
	<header class="bg-white shadow py-4">
		<div class="container mx-auto px-4 flex justify-between items-center">
			<div>
				<h1 class="text-3xl font-bold"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<p class="text-lg"><?php bloginfo( 'description' ); ?></p>
			</div>
			<?php wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class'     => 'flex items-center',
			) ); ?>
		</div>
	</header>

