<?php $other_page = 381; ?>
<footer id="indexFooter" class="site-footer" style="background-image: url(<?php echo get_theme_file_uri(); ?>/img/ekana-footer-medium.webp);">
	<div class="footer-line">

	</div>
	<div class="footer-logo">
		<svg version="1.1" id="ekana-logo-footer" x="0px" y="0px" viewBox="0 0 120 120" style="enable-background:new 0 0 120 120;" xml:space="preserve">
			<polygon class="logo_path" points="104.8,51 61.6,94.1 61,94.7 60.4,94.1 26.7,60.2 26.1,59.6 26.7,59 58.5,27.2 59.1,26.6 59.7,27.2 72.5,39.9 73.1,40.5 72.5,41.1 52,61.2 62.1,71.3 93.9,39.9 58.6,4.5 4.3,59.2 60.9,116.2 115.5,61.8 " />
		</svg>
	</div> <!-- /footer-logo -->
	<div class="footer-content">
		<div class="footer-articulos">
			<?php include 'template-parts/last-post.php'; ?>
		</div> <!-- /.footer-ultimos-articulos -->
		<div class="footer-eventos">
			<?php include 'template-parts/last-event.php'; ?>
		</div> <!-- /.footer-ultimos-articulos -->
		<div id="contacto" class="footer-contacto">
			<?php include 'template-parts/contact-info.php'; ?>
		</div> <!-- /.footer-contacto -->
	</div> <!-- /.footer-content -->
	<div class="footer-social">
		<a href="<?php echo the_field('instagram', $other_page); ?>" style="--t: 0.6s">
			<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
				<path stroke="none" d="M0 0h24v24H0z" fill="none" />
				<rect x="4" y="4" width="16" height="16" rx="4" />
				<circle cx="12" cy="12" r="3" />
				<line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
			</svg>
		</a>
		<a href="<?php the_field('facebook', $other_page); ?>" style="--t: 0.4s">
			<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
				<path stroke="none" d="M0 0h24v24H0z" fill="none" />
				<path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
			</svg>
		</a>
		<a href="<?php the_field('youtube', $other_page); ?>" style="--t: 0.7s">
			<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
				<path stroke="none" d="M0 0h24v24H0z" fill="none" />
				<rect x="3" y="5" width="18" height="14" rx="4" />
				<path d="M10 9l5 3l-5 3z" />
			</svg>
		</a>
	</div><!-- /footer-social-->
	<div class="footer-avisos">
		<a href="<?php echo home_url(); ?>">
			<div class="logoTextWrapper">
				<svg version="1.1" id="ekana-text" x="0px" y="0px" viewBox="0 0 252 55" style="enable-background:new 0 0 252 55;" xml:space="preserve">
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
				</svg> 2016 - <?php echo date("Y"); ?>
			</div>
		</a>
		<span class="sep"> | </span>
		<a href="<?php echo home_url(); ?>/avisos-legales/">Avisos legales</a>
	</div> <!-- /.footer-avisos -->
</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>