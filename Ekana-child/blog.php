<?php /* Template Name: blog-posts */ ?>
<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ekana_Theme
 */

get_header();
?>
<main id="primary" class="site-main">
  <div class="blog_background" style="background-image: url(<?php echo get_theme_file_uri(); ?>/img/kzk/kzk-bg<?php $random = rand(2, 25); echo $random; ?>.jpg)">
  </div>
  <div class="blog_header">
    <h1>Ideietatik Ekana!</h1>
    <p>Ez da blog arrunt bat! Ekana unibertsoko erdigunea eta elkargunea da, gure Agora txikia da. Ekanako profesionalek eta bertako kolaboratzaileek beraien ideiak, ondorioak eta iritzia erakusteko eta transmititzeko txokoa. Jakintza zientifikoan oinarritutako komunikazio irekia bideragarri egingo dugu modu honetan, zuen gogoetei eta proposamenei espazio bat eskainiz eta erantzun bat emanez.</p>
    <p>
      Ekanaren KZK proiektuaren espresioan, arduradun eta oinarri da blog hau, Jarduera Fisikoaren eta Kirolaren praktika indartzea helburutzat izango duena, hauekin erlazionatutako esparru ezberdinen inguruko gaiak jorratuz.
    </p>
    <p style="text-align: left; display:inline">Ekanako blogak, bere programazioan hiru azpiegitura desberdintzen ditu:</p>
      <p><b>Txakalaldia:</b> Gure kirolariei eginiko elkarrizketa laburrak, beraien entrenamenduetako eta konpetizioetako aspektu ezberdinak landuz.</p>
      <p><b>Laborategia:</b> Jarduera Fisikoaren eta Kirolaren Zientzietan oinarritutako ikerketak eta hauen gogoetak.</p>
      <p><b>KZK askea:</b> Jarduera Fisikoarekin eta Kirolarekin erlazionaturiko beste edozein gairekin erlazioanaturiko ideiak.</p>
  </div>
  <?php
  //querry
  $the_query = new WP_Query(
    array(
      'post_type' => 'post',
      // 'category' => array( 12, 9 , 8  ), //nombre de la categoria
      'posts_per_page' => -1, //numero de post a mostrar
      'order'    => 'DATE', //ordenar por data 

    )
  );
  ?>
  <?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <div class="articulo_blog">
        <div class="articulo-content">
          <h2 >
            <a class="_title-link" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <div class="_info">
            <div class="__author">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
              </svg>
              <span> | </span>
              <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                <?php the_author(); ?>
              </a>
            </div>
            <div class="__cat">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z" />
                <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z" />
              </svg>
              <span> | </span>
              <?php the_category('cat'); ?>
            </div>
            <div class="__post-date">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
              </svg>
              <span> | </span>
              <?php echo get_the_date('d | m | Y'); ?>
            </div>
            <!-- .post-date -->
          </div>
          <!-- _info -->
          <div class="articulo_excerpt">
            <?php
            global $post;
            if ($post->post_excerpt) {
              the_excerpt();
            } else {
              $char_limit = 100; //character limit
              $content = $post->post_content; //contents saved in a variable
              echo substr(strip_tags($content), 0, $char_limit);
            }
            ?>
          </div>
          <!-- .articulo_excerpt -->
          <div class="post-read-more">
            <a class="post-read-more-link" href="<?php the_permalink(); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
              </svg>
              Irakurri artikulua</a>
            <!-- .post-read-more-link -->
          </div>
          <!--.post-read-more -->
        </div>
        <!-- articulo-content -->
        <div class="_background" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
        </div>
      </div>
      <!-- articulo -->
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  <?php else : ?>
    <div class="post-no-news">
      <?php __('Algo ha ido mal y no hemos encontrado ninguna entrada. Intenta de nuevo recargando la pagina ;)'); ?>
    </div><!-- .post-no-news -->
  <?php endif; ?>
  <!-- post-wrapper -->
</main><!-- #main -->
<?php
get_footer();
