<?php /* Template Name: Info Footer */ ?>
<?php $other_page = 381; ?> 
<!-- footer page ID  -->

    <h4 class="eusquera">Kontaktua</h4>
    <h4 class="castellano">Contacto</h4>

<div class="footer_query_content">
    <div class="footer-email footer-post">
        <a href="mailto:<?php the_field( 'email', $other_page ); ?>">
        <?php the_field( 'email', $other_page ); ?> 
        </a>
    </div> <!-- /.footer-email -->
    <div class="footer-telefono footer-post">
        <a href="tel:+34<?php the_field( 'telefono', $other_page ); ?>" target='_blank'><?php the_field( 'telefono', $other_page ); ?>
        </a>
    </div> <!-- /.footer-telefono -->
    <div class="footer-address footer-post">
        <a href="<?php the_field( 'direccion_url', $other_page ); ?>" target="_blank"><?php the_field( 'direccion', $other_page ); ?>
        </a>
    </div> <!-- /.footer-address -->
</div>
