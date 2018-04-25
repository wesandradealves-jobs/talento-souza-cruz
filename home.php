<style class="text/css">
  <?php
    if( get_field('thumb_programa_estagio',2) ) {
      echo "#menu-home li:nth-child(1){background-image:url(".get_field('thumb_programa_estagio',2).");}";
    }
    if( get_field('thumb_programa_trainee',2) ) {
      echo "#menu-home li:nth-child(2){background-image:url(".get_field('thumb_programa_trainee',2).");}";
    }
    if( get_field('thumb_programa_technical_trainee',2) ) {
      echo "#menu-home li:nth-child(3){background-image:url(".get_field('thumb_programa_technical_trainee',2).");}";
    }
  
    if(get_field("ativar_estagio", 15) == "Não"){
      echo "#menu-home li:nth-child(1){opacity:.5;pointer-events:none;}";
    }
    if(get_field("ativar_trainee", 17) == "Não"){
      echo "#menu-home li:nth-child(2){opacity:.5;pointer-events:none;}";
    }
    if(get_field("ativar_technical_trainee", 230) == "Não"){
      echo "#menu-home li:nth-child(3){opacity:.5;pointer-events:none;}";
    }
  ?>
</style>
<section id="home" class="b">
  <div class="wrap">
    <header class="flex">
      <div class="flex50">
        <div class="b">
          <a id="logo" class="b" title="<?php bloginfo('name'); ?>" style="background-image:url(<?php the_field('logo'); ?>);"><span class="b"><?php bloginfo('name'); ?></span></a>
        </div>
        <div class="b">
          <p class="b"><?php bloginfo('description'); ?></p>
        </div>
        <div class="b">
          <p class="b"><span>Clique e escolha</span><br/>o programa do seu interesse:</p>
        </div>
      </div>
      <div class="flex50">
        <div id="pecas" class="flex" style="background-image:url(<?php the_field('pecas'); ?>);">
          <div class="flex100"><?php the_field('frase_das_peças'); ?></div>
        </div>
      </div>
    </header>
    <footer class="flex">
      <div class="flex100">
        <?php wp_nav_menu( array( 'theme_location' => 'home', 'depth' => '0', 'menu_class' => 'flex', 'container' => '' ) ); ?>
      </div>
    </footer>
  </div>
</section>
