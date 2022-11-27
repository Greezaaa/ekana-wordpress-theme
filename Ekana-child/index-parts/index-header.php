<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ekana_Theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='shortcut icon' type='image/x-icon' href='<?php echo get_theme_file_uri("/img/logo_ekana_shadow.png"); ?>' />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/styleEkanaIndex.min.css'); ?>" text-type="text/css">
<?php wp_head(); ?>
</head>

<body <?php body_class('index-page'); ?>>
	<?php wp_body_open(); ?>
	<script src="<?php echo get_theme_file_uri('/js/jquery.js'); ?>" crossorigin="anonymous"></script>
	<script>
		$('body').append(' <div id="loadingDiv"><div class="lds-ripple"><div></div><div></div></div></div>');
		$(window).on('load', function() {
			setTimeout(removeLoader, 0000); //wait for page load PLUS two seconds.
		});
		function removeLoader() {
			$("#loadingDiv").fadeOut(500, function() {
				$("#loadingDiv").remove();
			});
		}
	</script>
	<div id="page-index" class="site-index">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'ekana_theme'); ?></a>

		<div class="selectorIdioma" style="display: none;" onclick="activeIdioma(); cambioIdioma();">/</div>
    <header id="indexMasthead" class="site-header">
			<nav id="site-navigation" class="main-navigation">
				<button role="button" class="menu-hamburger" onclick="menuToggle('active');" style="display: none;">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<div class="menu-bg">
					<div class="menu-contacto">
						<div class="menu-ekana-logo-letters-wrapper">
							<svg version="1.1" id="menu-ekana-logo-letters" x="0px" y="0px" viewBox="0 0 252 55" style="enable-background:new 0 0 252 55;" xml:space="preserve">
								<path id="e" class="logo-path" d="M36.7,0.6H0.8c-0.4,0-0.7,0.3-0.7,0.7v53.1c0,0.4,0.3,0.7,0.7,0.7h35.8c0.4,0,0.7-0.3,0.7-0.7V51
												c0-0.4-0.3-0.7-0.7-0.7H6V30.1h21.6c0.4,0,0.7-0.3,0.7-0.7v-3.3c0-0.4-0.3-0.7-0.7-0.7H6V5.3h30.6c0.4,0,0.7-0.3,0.7-0.7V1.3
												C37.4,0.9,37,0.6,36.7,0.6z" />
								<path id="k" class="logo-path" d="M93.6,1c-0.1-0.3-0.4-0.4-0.7-0.4h-5.6c-0.2,0-0.4,0.1-0.5,0.2l-25,24.6h-8.5V1.3c0-0.4-0.3-0.7-0.7-0.7
												h-4.5c-0.4,0-0.7,0.3-0.7,0.7v53.1c0,0.4,0.3,0.7,0.7,0.7h4.5c0.4,0,0.7-0.3,0.7-0.7V30.1h8.5l25,24.7c0.1,0.1,0.3,0.2,0.5,0.2H93
											c0.3,0,0.5-0.2,0.7-0.4s0-0.6-0.2-0.8l-26.3-26l26.3-26C93.7,1.6,93.7,1.3,93.6,1z" />
								<path id="ka" class="logo-path" d="M121.5,1c-0.1-0.3-0.4-0.4-0.7-0.4h0c-0.3,0-0.5,0.2-0.7,0.4L97.9,54.1c-0.1,0.2-0.1,0.5,0.1,0.7
												c0.1,0.2,0.4,0.3,0.6,0.3h4.6c0.3,0,0.5-0.2,0.7-0.4l17.1-40.4L138,54.6c0.1,0.3,0.4,0.4,0.7,0.4h4.6c0.2,0,0.5-0.1,0.6-0.3
												c0.1-0.2,0.2-0.4,0.1-0.7L121.5,1z" />
								<path id="n" class="logo-path" d="M197,0.6h-4.5c-0.4,0-0.7,0.3-0.7,0.7v41.4L149.3,0.8c-0.2-0.2-0.5-0.3-0.8-0.1
												c-0.3,0.1-0.4,0.4-0.4,0.7v53.1c0,0.4,0.3,0.7,0.7,0.7h4.5c0.4,0,0.7-0.3,0.7-0.7V12.9l42.5,42c0.1,0.1,0.3,0.2,0.5,0.2
												c0.1,0,0.2,0,0.3-0.1c0.3-0.1,0.4-0.4,0.4-0.7V1.3C197.7,0.9,197.4,0.6,197,0.6z" />
								<path id="na" class="logo-path" d="M252,54.1L229.5,1c-0.1-0.3-0.4-0.4-0.7-0.4h0c-0.3,0-0.5,0.2-0.7,0.4l-22.3,53.1
												c-0.1,0.2-0.1,0.5,0.1,0.7c0.1,0.2,0.4,0.3,0.6,0.3h4.6c0.3,0,0.5-0.2,0.7-0.4l17-40.4l17.2,40.4c0.1,0.3,0.4,0.4,0.7,0.4h4.6
												c0.2,0,0.5-0.1,0.6-0.3C252.1,54.5,252.1,54.3,252,54.1z" />
							</svg>
						</div> <!-- /menu-ekana-logo-letters-wrapper -->
						<hr>
						<p>Zure helburuak gureak ere badira</p>
						<?php $other_page = 381; ?>
						<div class="menu-contacto-info">
							<ul>
								<li class="menu-email">
									<a href="mailto:<?php the_field('email', $other_page); ?>">

										<svg xmlns="http://www.w3.org/2000/svg" class="icon " width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<rect x="3" y="5" width="18" height="14" rx="2" />
											<polyline points="3 7 12 13 21 7" />
										</svg>
										<span>|</span>
										<?php the_field('email', $other_page); ?>
									</a>
								</li> <!-- /.menu-email -->
								<li class="menu-telefono">
									<a href="tel:+34<?php the_field('telefono', $other_page); ?>">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
										</svg>
										<span>|</span>
										<?php the_field('telefono', $other_page); ?>
									</a>
								</li> <!-- /.menu-telefono -->
								<li class="menu-address">
									<a href="<?php the_field('direccion_url', $other_page); ?>" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<circle cx="12" cy="11" r="3" />
											<path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
										</svg>
										<span>|</span>
										<?php the_field('direccion', $other_page); ?>
									</a>
								</li> <!-- /.menu-address -->
							</ul>
						</div> <!-- /menu-contacto-info -->
						<div class="menu-social">
							<a href="<?php the_field('instagram', $other_page); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none" />
									<rect x="4" y="4" width="16" height="16" rx="4" />
									<circle cx="12" cy="12" r="3" />
									<line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
								</svg>
							</a>
							<a href="<?php the_field('facebook', $other_page); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none" />
									<path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
								</svg>
							</a>
							<a href="<?php the_field('youtube', $other_page); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none" />
									<rect x="3" y="5" width="18" height="14" rx="4" />
									<path d="M10 9l5 3l-5 3z" />
								</svg>
							</a>
						</div> <!-- /menu-social -->
					</div><!-- /menu-contacto -->


					<div id="primary-menu" class="menu">
						<ul class="castellano">
							<li>
								<a href="<?php echo home_url(); ?>">inicio</a>
							</li>
							<li>
								<a href="#somos">Historia</a>
							</li>
							<li>
								<a href="<?php echo home_url(); ?>/blog">Blog</a>
							</li>
							<li>

								<a href="<?php echo home_url(); ?>/kzk">
									<div class="link-content">
										<!-- <img src="<?php echo get_theme_file_uri(); ?>/img/logo-kzk.png" alt=""> -->

										<span> Proyecto KZK</span>
									</div>
								</a>
							</li>
							<li>
								<a href="#servicios">Servicios</a>
							</li>
							<li>
								<a href="#equipo">Equipo</a>
							</li>
							<li>
								<a href="#contacto">Contacto</a>
							</li>
						</ul>
						<ul class="eusquera">
							<li>
								<a href="<?php echo home_url(); ?>">Hasiera</a>
							</li>
							<li>
								<a href="#somos">Gure bidea</a>
							</li>
							<li>
								<a href="<?php echo home_url(); ?>/blog">Bloga</a>
							</li>
							<li>
								<a href="<?php echo home_url(); ?>/kzk">
									<div class="link-content">
										<!-- <img src="<?php echo get_theme_file_uri(); ?>/img/logo-kzk.png" alt=""> -->
										<span> KZK proiektua</span>
									</div>
								</a>
							</li>
							<li>
								<a href="#servicios">Zerbitzuak</a>
							</li>
							<li>
								<a href="#equipo">Taldea</a>
							</li>
							<li>
								<a href="#contacto">Kontaktatu</a>
							</li>
						</ul>
					</div>
				</div> <!-- menu-bg -->
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->