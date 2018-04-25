  <header id="header" class="b">
    <?php wp_nav_menu( array( 'theme_location' => 'programa-trainee', 'depth' => '0', 'menu_class' => '', 'container' => '', 'menu_id' => 'navMobile' ) ); ?>
    <div class="wrap flex">
      <div class="flex10"><a href="<?php echo site_url(); ?>" id="logo" title="<?php bloginfo('name'); ?>" class="b" style="background-image:url(<?php the_field('logo_header_trainee'); ?>)"><?php bloginfo('name'); ?></a></div>
      <div class="flex90">
        <?php wp_nav_menu( array( 'theme_location' => 'programa-trainee', 'depth' => '0', 'menu_class' => 'flex', 'container' => '' ) ); ?>
      </div>
    </div>
  </header>
  <main class="b">
    <section id="banner" class="b section">
      <div class="flex wrap">
        <div class="flex50">
          <h1 class="b titulo"><?php the_field('titulo_do_banner_trainee'); ?></h1>
          <div class="b texto"><?php the_field('texto_do_banner_trainee'); ?></div>
        </div>
        <div class="flex50">
          <div class="b pecas" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2016/02/Objeto-Inteligente-de-Vetor-03.png?v=<?php echo rand(5, 15); ?>);">
            <div class="b pecas-frase" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2016/02/Objeto-Inteligente-de-Vetor-02.png?v=<?php echo rand(5, 15); ?>);"><?php the_field('texto_da_peça_trainee'); ?></div>
            <style type="text/css">
              .pecas::after{
                background-image:url(<?php the_field('custom_peca_trainee'); ?>);
              }
            </style>
          </div>
        </div>
      </div>
    </section>
    <section id="a-empresa" class="b section">
      <div class="wrap flex">
        <div class="flex20">
          <div>
            <img src="<?php the_field('logo', 2); ?>" alt="<?php wp_title(); ?>" width="100%" height="auto" class="b" />
            <div class="quote">
              <p class="b">O Melhor lugar do mundo para trabalhar</p>
            </div>
          </div>
        </div>
        <div class="flex80">
          <div>
            <h1 class="b titulo">A Empresa</h1>
            <?php the_field('texto_a_empresa', 15); ?>
            <div id="por-que" class="b">
              <p><strong>POR QUE TRABALHAR NA SOUZA?</strong></p>
              <div id="slider" class="b">
                <ul id="porque_trabalhar_trainee_slider_pager" class="flex">
                    <?php
                      $args = array('post_type' => 'porque-trabalhar');
                      $query = new WP_Query($args);
                      $count = -1;
                      while($query -> have_posts()) : $query -> the_post();
                      $count++;
                      echo "<li><a data-slide-index='".$count."' href='javascript:void(0)'>".$count."</a></li>";
                      endwhile;
                    ?>
                </ul>
                <ul id="porque_trabalhar_trainee_slider">
                    <?php
                        $args = array('post_type' => 'porque-trabalhar');
                        $query = new WP_Query($args);
                        while($query -> have_posts()) : $query -> the_post();
                        echo "<li><div>".get_the_content( '<h1 class="b">', '</h1>' )."</div></li>";
                        endwhile; wp_reset_query();
                    ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="o-programa" class="b section">
      <div class="wrap flex">
        <div class="flex100">
          <h1 class="b titulo">O Programa</h1>
          <div class="flex">
            <div class="flex50">
              <?php the_field('o_programa_trainee'); ?>
              <div class="quote"><?php the_field('quote_trainee'); ?></div>
            </div>
            <div class="flex50">
              <img src="<?php echo get_field('selo_do_programa_trainee'); ?>" alt="O Programa" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="areas" class="b section">
      <div class="wrap">
        <div class="flex">
          <div class="flex100"><h1 class="b titulo">Áreas de Oportunidade</h1></div>
          <div id="areas-de-oportunidade" class="flex flex100">
            <?php
            $args = array('post_type' => 'area-trainee', 'order' => 'ASC');
            $query = new WP_Query($args);
            while($query -> have_posts()) : $query -> the_post();
            ?>
            <?php
              $content = get_the_content();
              $beneficios = types_render_field("beneficios-area-trainee", array( 'raw' => true));
              $pre_requisitos = types_render_field("pre-requisitos-area-trainee", array( 'raw' => true));
              echo "<div class='flex50'>
                <div class='flex' style='background-image:url(".wp_get_attachment_url(get_post_thumbnail_id($post->ID)).");'>
                  <div class='flex100'><h1 class='b'>".get_the_title()."</h1></div>
                  <div class='flex100'><div><a class='close' href='javascript:void(0)'><!-- --></a><ul class='areas-de-oportunidade-slide'>";
                  if($content){
                    echo "<li><h2 class='b'><strong>".get_the_title()."</strong></h2><br/>".$content."</li>";
                  }
                  if($beneficios){
                    echo "<li>".$beneficios."</li>";
                  } 
                  if($pre_requisitos){
                    echo "<li>".$pre_requisitos."</li>";
                  }
              echo "</ul></div></div>
                </div>
              </div>";
            ?>
            <?php endwhile; wp_reset_query(); ?>
          </div>
          <div class="flex100 separator">
            <h2 class="b">Diretoria de Tabaco</h2>
          </div>
          <div id="diretoria_de_tabaco" class="flex flex100">
            <div class="flex50">
              <?php the_field('a_diretoria_de_tabaco'); ?>
              <div class="quote"><?php the_field('quote_diretoria_de_tabaco'); ?></div>
            </div>
            <div class="flex50">
              <h1 class="b">Remuneração</h1>
              <div id="remuneracoes" class="b">
                <ul class="flex flex100 innernavigation">
                  <?php
                    $args = array('post_type' => 'remuneracao-trainee', 'order' => 'ASC');
                    $query = new WP_Query($args);
                    while($query -> have_posts()) : $query -> the_post();
                  ?>
                  <?php
                    echo "<li class='flex33'><a class='flex innernav' data-type='".strtolower(str_replace(' ', '_', get_the_title('', false)))."' href='javascript:void(0)' title='".get_the_title()."' ><span class='flex100'><h1 class='b'>".get_the_title()."</h1></span></a></li>";
                  ?>
                <?php endwhile; ?>
              </ul>
              <!--  -->
              <ul id="content" class="b flex innernavcontent">
                <?php
                  $args = array('post_type' => 'remuneracao-trainee', 'order' => 'ASC');
                  $query = new WP_Query($args);
                  while($query -> have_posts()) : $query -> the_post();
                ?>
                <?php
                  echo "<li data-value='".strtolower(str_replace(' ', '_', get_the_title('', false)))."' class='flex flex100'>
                  <div class='flex50'><p>".types_render_field("beneficio_trainee", array("raw"=>"true"))."</p></div>
                  <div class='flex50'><p>".types_render_field("salario_trainee", array("raw"=>"true"))."</p></div>
                  </li>";
                ?>
                <?php endwhile; wp_reset_query(); ?>
              </ul>
              <!--  -->
            </div>            
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="depoimentos" class="b section">  
        <div class="wrap">  
            <div class="flex">  
                <div class="flex100"> 
                    <h1 class="b titulo">Depoimentos</h1>
                    <div id="slides" class="b">
                      <ul class="bxslider2">
                        <?php
                        $args = array('post_type' => 'depoimento-trainee', 'order' => 'ASC');
                        $query = new WP_Query($args);
                        while($query -> have_posts()) : $query -> the_post();
                        ?>
                        <?php
                        echo "<li><div class='flex'><div class='flex40'><img class='b' src='".wp_get_attachment_url(get_post_thumbnail_id($post->ID))."' alt='".get_the_title()."'/></div><div class='flex60'>";
                        the_title( '<h1 class="b">', '</h1>' );
                        the_content( '<p class="b">', '</p></div></div></li>' );
                        ?>
                        <?php endwhile; wp_reset_query(); ?>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <secion id="inscreva-se" class="b section">
      <div class="wrap">
        <h1 class="b titulo">Inscreva-se</h1>
        <div class="flex">
          <?php
          $args = array('post_type' => 'inscreva-se-trainee', 'order' => 'ASC');
          $query = new WP_Query($args);
          while($query -> have_posts()) : $query -> the_post();
          ?>
          <?php
            echo "
              <div class='flex50 flex'>
                <div class='flex40'><img class='b' src='".wp_get_attachment_url(get_post_thumbnail_id($post->ID))."' alt='".get_the_title()."'/></div>
                <div class='flex60'>
                  <h2 class='b'>".get_the_title()."</h2>";
                  echo "<a class='b btn btn_default' href='".types_render_field("url-inscreva-se-trainee", array("raw"=>"true"))."'>".types_render_field("botao-inscreva-se-trainee", array("raw"=>"true"))."</a></div></div>";
          ?>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </secion>
  </main>
