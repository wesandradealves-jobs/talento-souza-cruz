<?php 
  get_header(); 
?>
<?php if ( is_front_page() ) : ?>
  <main>
    <?php if ( have_posts () ) : while (have_posts()):the_post();?>
      <?php 
        include(get_template_directory()."/".get_post( $post )->post_name.".php");
      ?>
    <?php endwhile; ?>
  <?php endif; ?>
  </main>
<?php else : ?>
  <main>
    <?php if ( have_posts () ) : while (have_posts()):the_post();?>
      <?php 
        include(get_template_directory()."/".get_post( $post )->post_name.".php");
      ?>
    <?php endwhile; ?>
  <?php endif; ?>
  </main>
  <!-- footer -->
  <footer class="b">
    <div class="wrap">
      <div class="flex">
        <div class="flex100 flex">
          <div class="flex50">
              <a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>" class="b"><img  src="<?php echo site_url(); ?>/wp-content/uploads/2016/02/logo_c.png" /></a>
          </div>
          <div class="flex50">
            <p class="b">Powered by <a href="http://www.ejcm.com.br/" title="Empresa Júnior PUC-RIO"><b>Empresa Júnior PUC-RIO</b></a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
<?php endif; ?>
  </div>
    <div id="fb-root"></div>
    <?php wp_footer(); ?>
  </body>
</html>
