<?php

/**
 * A Simple Category Template
 */

get_header(); ?>

<section id="primary" class="site-content">
    <?php if (get_field('kzk-goiko-irudia')) : ?>
        <div class="header-image" style="background-image: url(<?php the_field('kzk-goiko-irudia'); ?>); ">
        <svg version="1.1"  x="0px" y="0px" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512" xml:space="preserve">
            <style type="text/css">
                .st0 {
                    fill: url(#SVGID_1_);
                }

                .st1 {
                    fill: url(#SVGID_2_);
                }

                .st2 {
                    fill: url(#SVGID_3_);
                }
            </style>
            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="10.9981" y1="256" x2="157.9575" y2="256">
                <stop offset="0" style="stop-color: #94c1d4" />
                <stop offset="1" style="stop-color: #457a98" />
            </linearGradient>
            <path class="st0" d="M157.7,171.2c-0.3-0.8-1.2-1.4-2.1-1.4h-17.7c-0.6,0-1.2,0.2-1.6,0.6l-79.4,77.8H29.8V172c0-1.2-1-2.3-2.3-2.3	H13.3c-1.2,0-2.3,1-2.3,2.3V340c0,1.2,1,2.3,2.3,2.3h14.3c1.2,0,2.3-1,2.3-2.3v-76.6H57l79.4,78.2c0.4,0.4,1,0.7,1.6,0.7h17.7 c0.9,0,1.7-0.6,2.1-1.4c0.3-0.8,0.2-1.8-0.5-2.5L73.7,256l83.6-82.3C157.8,173,158,172,157.7,171.2z" />
            <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="183.2015" y1="256" x2="316.7981" y2="256">
                <stop offset="0" style="stop-color: #d76133" />
                <stop offset="1" style="stop-color: #eec143" />
            </linearGradient>
            <path class="st1" d="M189.6,172.1v12.5c0,1.4,0.8,2.5,1.7,2.5h95.1L183.7,338c-0.5,0.7-0.6,1.8-0.4,2.7c0.3,0.9,0.9,1.5,1.6,1.5 h127.9c2.1,0,3.9-1.7,3.9-3.9V326c0-1.6-1.3-2.9-2.9-2.9H215l101.3-149.2c0.3-0.5,0.5-1.1,0.5-1.7c0-0.3,0-0.6-0.1-0.9	c-0.3-0.9-0.9-1.5-1.6-1.5H191.3C190.4,169.7,189.6,170.8,189.6,172.1z" />
            <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="353.9981" y1="256" x2="501.0019" y2="256">
                <stop offset="0" style="stop-color: #69b495" />
                <stop offset="1" style="stop-color: #81ba89" />
            </linearGradient>
            <path class="st2" d="M500.8,171.2c-0.3-0.8-1.2-1.4-2.1-1.4H481c-0.6,0-1.2,0.2-1.6,0.6L400,248.3h-27.1V172c0-1.2-1-2.3-2.3-2.3 h-14.3c-1.2,0-2.3,1-2.3,2.3V340c0,1.2,1,2.3,2.3,2.3h14.3c1.2,0,2.3-1,2.3-2.3v-76.6H400l79.4,78.2c0.4,0.4,1,0.7,1.6,0.7h17.7 c0.9,0,1.7-0.6,2.1-1.4c0.3-0.8,0.2-1.8-0.5-2.5L416.7,256l83.6-82.3C501,173,501.2,172,500.8,171.2z" />
        </svg>
    </div>
    <?php endif; ?>
    <!-- header-image -->
    <div id="content" role="main" class="contenido-evento">
        <?php
        // Check if there are any posts to display
        if (have_posts()) : ?>
            <?php
            // The Loop
            while (have_posts()) : the_post(); ?>
                <div class="evento">
                    <div class="title-background">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                    </div>
                    <!-- title-backgerround -->
                    <ul class="info-corta">
                        <li>
                            <?php if (get_field('kzk-eguna-start')) : ?>

                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <rect x="4" y="5" width="16" height="16" rx="2" />
                                    <line x1="16" y1="3" x2="16" y2="7" />
                                    <line x1="8" y1="3" x2="8" y2="7" />
                                    <line x1="4" y1="11" x2="20" y2="11" />
                                    <line x1="11" y1="15" x2="12" y2="15" />
                                    <line x1="12" y1="15" x2="12" y2="18" />
                                </svg>
                                <span>|</span>
                                <?php the_field('kzk-eguna-start'); ?> <br>
                                <!-- Eguna (Fecha-Inicio)  -->
                            <?php endif; ?>
                            <?php if (get_field('kzk-eguna-end')) : ?>
                                 <?php the_field('kzk-eguna-end'); ?>
                                <!-- Eguna (Fecha-final) -->
                                <!-- kzk-eguna -->
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php if (get_field('kzk-ordua')) : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="12" r="9" />
                                    <polyline points="12 7 12 12 15 15" />
                                </svg>
                                <span>|</span>
                                <?php the_field('kzk-ordua'); ?>h
                            <?php endif; ?>
                            <?php if (get_field('kzk-ordua-fin')) : ?>
                                - <?php the_field('kzk-ordua-fin'); ?>h
                                <!-- Ordua (Hora) -->
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php if (get_field('kzk-lukua')) : ?>
                                <a href="<?php the_field('kzk-lukua-url'); ?>" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <circle cx="12" cy="11" r="3" />
                                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                    </svg>
                                    <span>|</span>
                                    <?php the_field('kzk-lukua'); ?>
                                </a>
                                <!-- Lekua (Lugar de reunión) con url -->
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php if (get_field('kzk-mahikideak')) : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                </svg>
                                <span>|</span>
                                <?php the_field('kzk-mahikideak'); ?>
                                <!-- Mahikideak (Tertulianos) -->
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php if (get_field('kzk-nork-emanda')) : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                </svg>
                                <span>|</span>
                                <?php the_field('kzk-nork-emanda'); ?>
                                <!-- kzk-nork-emanda -->
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php if (get_field('kzk-kontaktu-email')) : ?>
                                <a href="mailto:<?php the_field('kzk-kontaktu-email'); ?>" target="_blanck">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <rect x="3" y="5" width="18" height="14" rx="2" />
                                        <polyline points="3 7 12 13 21 7" />
                                    </svg>
                                    <span>|</span>
                                    <?php the_field('kzk-kontaktu-email'); ?>
                                </a>
                                <!-- Kontaktu emaila (eMail de contacto) -->
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php if (get_field('kzk-kontaktu-telefonoa')) : ?>
                                <a href="tel:<?php the_field('kzk-kontaktu-telefonoa'); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                        <path d="M15 7a2 2 0 0 1 2 2" />
                                        <path d="M15 3a6 6 0 0 1 6 6" />
                                    </svg>
                                    <span>|</span>
                                    <?php the_field('kzk-kontaktu-telefonoa'); ?>
                                </a>
                                <!-- Kontaktu telefonoa (Teléfono de contacto) -->
                            <?php endif; ?>
                        </li>
                        <li class="descripcion-li">
                        <div class="kzk-descripcion">
                            <?php the_field('kzk-deskribapen'); ?>
                        </div>
                        <!-- kzk-descripcion -->
                        </li>
                        <li class="kzk-prezioa">
                            <?php if (get_field('kzk-prezioa')) : ?>
                                <span><?php the_field('kzk-prezioa'); ?></span>
                                <!-- Prezioa (precio)  -->
                            <?php endif; ?>
                        </li>
                    </ul>
                    <!-- info-corta -->
                                       <!-- kzk-content -->
                </div>
                <!-- evento -->
                <div class="kzk-content">
                    <?php the_content(); ?>
                </div>
                <div class="postmeta">
                    <?php
                    the_post_navigation(
                        array(
                            'prev_text' => '<span class="nav-subtitle">' . esc_html__('Aurrekoa:', 'ekana_theme') . '</span> <span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-subtitle">' . esc_html__('Hurrengoa:', 'ekana_theme') . '</span> <span class="nav-title">%title</span>',
                        )
                    );
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
                </div>
                <!-- post-meta -->
            <?php endwhile; // End of the loop. 
            ?>
    </div>
    <!-- content -->
<?php else : //si no hay eventos activos se mostrarara este mensaje 
?>
    <p>Lo sentimos, pero actualemente no hay eventos activos</p>
<?php endif; ?>

</section>
<?php get_footer(); ?>