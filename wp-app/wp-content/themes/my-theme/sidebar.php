<!-- Ahora abre el archivo sidebar.php y el siguiente código. Hace que la barra lateral y los widgets aparezcan
 en su tema dondequiera que se llame a get_sidebar(). -->

<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
  <aside id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
    <?php dynamic_sidebar( 'sidebar' ); ?>
  </aside>
<?php endif; ?>
