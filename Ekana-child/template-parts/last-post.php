<?php 
    $args = array(
        'post_type' => 'post',
        'posts_per_page'=> 3
);
?>

<a href="<?php echo home_url(); ?>/blog">
    <h4 class="eusquera">Artikuluak</h4>
    <h4 class="castellano">Artículos</h4>
</a>
<div class="footer_query_content"><?php
    $q = new WP_Query($args);
     if($q->have_posts()):
            while($q->have_posts()){
                $q->the_post();
        ?>
        <div class="footer-post">
                     <a href="<?php echo get_the_permalink() ?>"><?php echo the_title(); ?></a>
                </div>
        <?php 
            }
             
        else:
            ?>
            <h4 class="castellano">No hay articulos</h4>
            <h4 class="eusquera">Artikulurik ez</h4>
            <?php 
        endif;
 
 
 ?>     
</div>
