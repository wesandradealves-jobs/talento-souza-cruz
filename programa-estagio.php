  <header id="header" class="b">
    <?php wp_nav_menu( array( 'theme_location' => 'programa-estagio', 'depth' => '0', 'menu_class' => '', 'container' => '', 'menu_id' => 'navMobile' ) ); ?>
    <div class="wrap flex">
      <div class="flex100"><a href="<?php echo site_url(); ?>" id="logo" title="<?php bloginfo('name'); ?>" class="b" style="background-image:url(<?php the_field('logo_do_header'); ?>)"><?php bloginfo('name'); ?></a></div>
      <div class="flex100">
        <?php wp_nav_menu( array( 'theme_location' => 'programa-estagio', 'depth' => '0', 'menu_class' => 'flex', 'container' => '' ) ); ?>
      </div>
    </div>
  </header>
  <main class="b">
    <section id="banner" class="b section" style="background: <?php the_field('cor_primaria_do_banner_estagio'); ?>;background: -moz-linear-gradient(top, <?php the_field('cor_primaria_do_banner_estagio'); ?> 0%, <?php the_field('cor_secundaria_do_banner_estagio') ?> 53%, <?php the_field('cor_secundaria_do_banner_estagio') ?> 100%);background: -webkit-linear-gradient(top, <?php the_field('cor_primaria_do_banner_estagio'); ?> 0%,<?php the_field('cor_secundaria_do_banner_estagio') ?> 53%,<?php the_field('cor_secundaria_do_banner_estagio') ?> 100%);background: linear-gradient(to bottom, <?php the_field('cor_primaria_do_banner_estagio'); ?> 0%,<?php the_field('cor_secundaria_do_banner_estagio') ?> 53%,<?php the_field('cor_secundaria_do_banner_estagio') ?> 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=<?php the_field('cor_primaria_do_banner_estagio'); ?>, endColorstr=<?php the_field('cor_secundaria_do_banner_estagio') ?>,GradientType=0 );">
      <div class="flex wrap">
        <div class="flex60">
          <div class="b pecas">
            <div style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2016/02/pecas-1.png?v=<?php echo rand(5, 15); ?>);" class="b pecas-frase"><?php the_field('texto_das_peças'); ?></div>
            <style type="text/css">
              .pecas::after{
                background-image:url(<?php the_field('custom_peca'); ?>);
              }
            </style>
          </div>
        </div>
        <div class="flex40">
          <div class="b titulo"><?php the_field('titulo_do_banner'); ?></div>
          <div class="b texto"><?php the_field('texto_do_banner'); ?></div>
          <div class="b texto"><?php the_field('pre_requisitos'); ?></div>
          <a class="b btn btn_default" href="<?php the_field('inscreva_estagio'); ?>" title="Inscreva-se">Inscreva-se</a>
        </div>
      </div>
    </section>
    <section id="a-empresa" class="b section">
      <div class="wrap flex">
        <div class="flex flex100">
          <div class="flex30"><?php echo "<img src='".site_url()."/wp-content/uploads/2016/02/Objeto-Inteligente-de-Vetor.png?v=".rand(5, 15); ?>' /></div>
          <div class="flex70">
            <div class="b titulo"><?php the_field('titulo_a_empresa'); ?></div>
            <div class="b texto"><?php the_field('texto_a_empresa'); ?></div>
            <div class="b quote"><?php the_field('quote_a_empresa'); ?></div>
          </div>
        </div>
      </div>
    </section>
    <section id="por-que" class="b section">
      <div class="wrap">
        <h1 class='b titulo'>Por que trabalhar<br/>na souza?</h1>
        <ul class="flex">
          <?php
          $args = array('post_type' => 'porque-trabalhar');
          $query = new WP_Query($args);
          $count = 0;
          while($query -> have_posts()) : $query -> the_post();
          $count++;
          ?>
          <?php
          echo "<li class='flex50 flex'><div class='flex30'><span class='flex count_ribbon'><span class='flex100'>";
          echo $count;
          echo "</span></span></div><div class='flex70'>";
          // the_title( '<h1 class="b">', '</h1>' );
          the_content( '<h1 class="b">', '</h1>' );
          echo "</div></li>";
          ?>
          <?php endwhile; wp_reset_query(); ?>
        </ul>
      </div>
    </section>
    <section class="b section" id="areas">
      <div class="wrap">
        <h1 class="b titulo">Áreas</h1>
        <div id="slides" class="b">
          <ul class="flex innernavigation">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $offset = 0;
            $args = array('post_type' => 'areas', 'posts_per_page'=>4, 'offset' => $offset, 'order' => 'ASC');
            $query = new WP_Query($args);
            while($query -> have_posts()) : $query -> the_post();
            ?>
            <?php
            echo "<li class='flex25'><a class='flex innernav' data-type='".strtolower(str_replace(' ', '_', get_the_title('', false)))."' href='javascript:void(0)' title=".get_the_title()." style='background-image:url(". wp_get_attachment_url(get_post_thumbnail_id($post->ID)).")'><span class='flex100'>".get_the_title()."</span></a></li>";
            ?>
          <?php endwhile; wp_reset_query(); ?>
        </ul>

        <!--  -->
        <ul id="content" class="b flex innernavcontent">
          <?php
          $args = array('post_type' => 'areas', 'order' => 'ASC');
          $query = new WP_Query($args);
          while($query -> have_posts()) : $query -> the_post();
          ?>
          <?php echo "<li data-value='".strtolower(str_replace(' ', '_', get_the_title('', false)))."' class='flex flex100'><div class='flex100'><h1>".get_the_title()."</h1><br/><p>".get_the_content()."</p></div></li>" ?>
        <?php endwhile; wp_reset_query(); ?>
      </ul>
      <!--  -->

      <ul class="flex innernavigation">
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 4;
        $offset = 4;
        $args = array('post_type' => 'areas', 'posts_per_page'=>4, 'offset' => $offset, 'order' => 'ASC');
        $query = new WP_Query($args);
        while($query -> have_posts()) : $query -> the_post();
        ?>
        <?php
        echo "<li class='flex25'><a class='flex innernav' data-type='".strtolower(str_replace(' ', '_', get_the_title('', false)))."' href='javascript:void(0)' title=".get_the_title()." style='background-image:url(". wp_get_attachment_url(get_post_thumbnail_id($post->ID)).")'><span class='flex100'>".get_the_title()."</span></a></li>";
        ?>
      <?php endwhile; wp_reset_query(); ?>
    </ul>
    </div>
    </div>
    </section>
    <section class="b section" id="o-programa">
      <div class="wrap">
        <h1 class="b titulo">O Programa</h1>
        <?php echo "<p>".get_field('o_programa')."</p>"; ?>
        <div id="slides" class="section b flex">
          <ul class="flex flex100 innernavigation">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $offset = 0;
            $args = array('post_type' => 'programas', 'posts_per_page'=>3, 'offset' => $offset, 'order' => 'ASC');
            $query = new WP_Query($args);
            while($query -> have_posts()) : $query -> the_post();
            ?>
            <?php
            echo "<li class='flex33'><a class='flex innernav' data-type='".strtolower(str_replace(' ', '_', get_the_title('', false)))."' href='javascript:void(0)' title='".get_the_title()."'><span class='flex100'><img class='b' src='".wp_get_attachment_url(get_post_thumbnail_id($post->ID))."' alt='".get_the_title()."'/><h1 class='b'>".get_the_title()."</h1></span></a></li>";
            ?>
          <?php endwhile; wp_reset_query(); ?>
        </ul>

        <!--  -->
        <ul id="content" class="b flex flex100 innernavcontent">
          <?php
          $args = array('post_type' => 'programas', 'order' => 'ASC');
          $query = new WP_Query($args);
          while($query -> have_posts()) : $query -> the_post();
          ?>
          <?php echo "<li data-value='".strtolower(str_replace(' ', '_', get_the_title('', false)))."' class='flex flex100'><div class='flex100'><p>".get_the_content()."</p></div></li>" ?>
        <?php endwhile; wp_reset_query(); ?>
      </ul>
      <!--  -->

      <ul class="flex flex100 innernavigation">
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 3;
        $offset = 3;
        $args = array('post_type' => 'programas', 'posts_per_page'=>3, 'offset' => $offset, 'order' => 'ASC');
        $query = new WP_Query($args);
        while($query -> have_posts()) : $query -> the_post();
        ?>
        <?php
        echo "<li class='flex33'><a class='flex innernav' data-type='".strtolower(str_replace(' ', '_', get_the_title('', false)))."' href='javascript:void(0)' title='".get_the_title()."'><span class='flex100'><img class='b' src='".wp_get_attachment_url(get_post_thumbnail_id($post->ID))."' alt='".get_the_title()."'/><h1 class='b'>".get_the_title()."</h1></span></a></li>";
        ?>
      <?php endwhile; wp_reset_query(); ?>
    </ul>
    </div>
    <div id="o-programa-footer" class="section flex">
      <div class="flex30">
        <?php the_field('pre_requisitos'); ?>
        <?php the_field('etapas_seletivas'); ?>
      </div>
      <div class="flex70">
        <h1 class="b">Remuneração por Estado</h1>
        <div id="remuneracoes" class="b">
          <ul class="flex flex100 innernavigation">
            <?php
            $args = array('post_type' => 'remuneracao-estagio', 'order' => 'ASC');
            $query = new WP_Query($args);
            while($query -> have_posts()) : $query -> the_post();
            ?>
            <?php
            echo "<li class='flex14'><a class='flex innernav' data-type='".strtolower(str_replace(' ', '_', get_the_title('', false)))."' href='javascript:void(0)' title=".get_the_title()." ><span class='flex100'><h1 class='b'>".get_the_title()."</h1></span></a></li>";
            ?>
          <?php endwhile; wp_reset_query(); ?>
        </ul>
        <!--  -->
        <ul id="content" class="b flex innernavcontent">
          <?php
          $args = array('post_type' => 'remuneracao-estagio', 'order' => 'ASC');
          $query = new WP_Query($args);
          while($query -> have_posts()) : $query -> the_post();
          ?>
          <?php
          echo "<li data-value='".strtolower(str_replace(' ', '_', get_the_title('', false)))."' class='flex flex100'>
          <div class='flex50'><p>".types_render_field("beneficio-estagio", array("raw"=>"true"))."</p></div>
          <div class='flex50'><p>".types_render_field("bolsa-auxilio-estagio", array("raw"=>"true"))."</p></div>
          </li>";
          ?>
        <?php endwhile; wp_reset_query(); ?>
      </ul>
      <!--  -->
    </div>
    </div>
    </div>
    </div>
    </section>
    <section class="b section" id="depoimentos">
      <div class="wrap">
        <h1 class="b titulo">Quem já faz toda<br/>a diferença</h1>
        <div id="slides" class="b">
          <ul class="bxslider">
            <?php
            $args = array('post_type' => 'depoimento-estagio', 'order' => 'ASC');
            $query = new WP_Query($args);
            while($query -> have_posts()) : $query -> the_post();
            ?>
            <?php
            echo "<li><img class='b' src='".wp_get_attachment_url(get_post_thumbnail_id($post->ID))."' alt='".get_the_title()."'/>";
            the_title( '<h1 class="b">', '</h1>' );
            echo "<h2 class='b'>".types_render_field("setor-quem-depos-estagio", array("raw"=>"true"))."</h2>";
            the_content( '<p class="b">', '</p></li>' );
            ?>
          <?php endwhile; wp_reset_query(); ?>
          </ul>
        </div>
        <div id="inscreva-se" class="flex">
          <div class="flex flex100" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2016/02/clusters.png?v=<?php echo rand(5, 15); ?>);">
            <a class="b btn btn_default" href="<?php the_field('inscreva_estagio'); ?>" title="Inscreva-se">Inscreva-se</a>
          </div>
        </div>
      </div>
    </section>
</main>

