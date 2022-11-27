<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Ekana_Theme
 */

get_header();
?>


<div class="kzkBG" style="background-image: url(<?php echo get_theme_file_uri(); ?>/img/kzk/kzk-bg<?php $random = rand(2, 25);
																					echo $random; ?>.jpg)">
																					</div>
	<main id="primary" class="site-main" style="padding-top: 10vh; min-height: inherit;">
		<div class="post-wrapper" style="min-height: 49vh;">
			<section class="error-404 not-found">
				<header class="page-header">
					<h2 class="page-title"><?php esc_html_e('404'); ?>
					</h2>
					<h3>errorea</h3>
					<h4>
						<?php esc_html_e('Erori zara? Altxa zaitez eta saiatu berriro!'); ?>
					</h4>
				</header><!-- .page-header -->
				<?php get_search_form() ?>
				<!-- search-form-wrapper -->
			</section><!-- .error-404 -->
		</div> <!-- /post-wrapper-->
	</main><!-- #main -->

<!-- kzk_bg -->
<?php
get_footer();
