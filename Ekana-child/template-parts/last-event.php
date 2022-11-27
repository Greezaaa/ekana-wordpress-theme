<?php
$args = array(
    'post_type' => 'agendakzk',
    'posts_per_page' => 3
);
?>
<a href="<?php echo home_url(); ?>/kzk">
    <h4 class="eusquera">KZK Agenda</h4>
    <h4 class="castellano">Agenda KZK</h4>
</a>
<div class="footer_query_content">
    <?php
    $q = new WP_Query($args);
    if ($q->have_posts()) :
        while ($q->have_posts()) {
            $q->the_post();
    ?>
            <div class="footer-post">
                <a href="<?php echo get_the_permalink() ?>">
                    <?php echo the_title(); ?>
                </a>
            </div>
    <?php
        }

    else :
        echo '<h4>Oraingoz ez dago ekintzarik</h4>';
    endif;


    ?>
</div>