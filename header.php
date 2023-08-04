<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head() ?>

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/images/favicons/apple-icon-180x180.png">
	<link rel="shortcut icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/images/favicons/favicon-32x32.png">
	<link rel="shortcut icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/images/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/images/favicons/manifest">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ?>/images/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	

</head>
<body <?php body_class() ?>>

	<header>
		<div class="">

			<div class="">
				<div class="">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
					</a>

				</div>
				<div class="">

					<nav>
						<?php
						if( has_nav_menu('mainmenu') ) :
							wp_nav_menu([
								'theme_location' => 'mainmenu',
								'depth' => 1
							]);
						else:
							echo 'Accedi al pannello per popolare il menu...';
						endif;
						?>
					</nav>

				</div>
			</div>

		</div>
	</header>
