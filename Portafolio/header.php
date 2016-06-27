<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo(title); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
</head>
<body>
<?php 
	wp_nav_menu(
		array (
			'theme_location' => 'top-menu',
			'container' => 'nav',
			'menu_class' => 'nav__list'
			)
		);
 ?>