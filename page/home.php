<?php
// Template Name: Home

get_header('', 'hide-header');

?>

<main>
  <section class="home-banner">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-md-12 home-banner_logo">
          <a href="<?php echo get_site_url(); ?>">
            <img src="<?php the_field('home-banner_logo'); ?>" alt="Proteron Engenharia"/>
          </a>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <?php if( have_rows('proteron_construtora') ): ?>
            <?php while( have_rows('proteron_construtora') ): the_row();
            // Get sub field values.
            $image_desktop = get_sub_field('imagem_de_fundo_desktop');
            $image_mobile = get_sub_field('imagem_de_fundo_mobile');
            $titulo_inicio = get_sub_field('titulo_inicio');
            $titulo_destaque = get_sub_field('titulo_destaque');
            $titulo_final = get_sub_field('titulo_final');
            $texto_botao = get_sub_field('texto_botao');
            $url_botao = get_sub_field('url_botao');

            ?>
            <div class="home-banner_background">
              <picture>
                <source srcset="<?php echo $image_desktop; ?>" media="(max-width: 767px)">
                <img src="<?php echo $image_mobile; ?>" alt="" />
              </picture>
            </div>
            <div class="home-banner_content">
              <img src="<?php the_field('home-banner_simbolo'); ?>" class="home-banner_logotipo" alt=""/>
              <h2 class="home-banner_title">
                <span class="home-banner_first"><?php echo $titulo_inicio; ?></span>
                <?php echo $titulo_destaque; ?>
                <span class="home-banner_last"><?php echo $titulo_final; ?></span>
              </h2>
              <a href="<?php echo $url_botao; ?>" class="home-banner_button"><?php echo $texto_botao; ?></a>
            </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="col-md-4">
          <?php if( have_rows('proteron_materiais') ): ?>
            <?php while( have_rows('proteron_materiais') ): the_row();
            // Get sub field values.
            $image_desktop = get_sub_field('imagem_de_fundo_desktop');
            $image_mobile = get_sub_field('imagem_de_fundo_mobile');
            $titulo_inicio = get_sub_field('titulo_inicio');
            $titulo_destaque = get_sub_field('titulo_destaque');
            $titulo_final = get_sub_field('titulo_final');
            $texto_botao = get_sub_field('texto_botao');
            $url_botao = get_sub_field('url_botao');

            ?>
            <div class="home-banner_background">
              <picture>
                <source srcset="<?php echo $image_desktop; ?>" media="(max-width: 767px)">
                <img src="<?php echo $image_mobile; ?>" alt="" />
              </picture>
            </div>
            <div class="home-banner_content">
              <img src="<?php the_field('home-banner_simbolo'); ?>" class="home-banner_logotipo" alt=""/>
              <h2 class="home-banner_title">
                <span class="home-banner_first"><?php echo $titulo_inicio; ?></span>
                <?php echo $titulo_destaque; ?>
                <span class="home-banner_last"><?php echo $titulo_final; ?></span>
              </h2>
              <a href="<?php echo $url_botao; ?>" class="home-banner_button"><?php echo $texto_botao; ?></a>
            </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="col-md-4">
          <?php if( have_rows('proteron_paineis') ): ?>
            <?php while( have_rows('proteron_paineis') ): the_row();
            // Get sub field values.
            $image_desktop = get_sub_field('imagem_de_fundo_desktop');
            $image_mobile = get_sub_field('imagem_de_fundo_mobile');
            $titulo_inicio = get_sub_field('titulo_inicio');
            $titulo_destaque = get_sub_field('titulo_destaque');
            $titulo_final = get_sub_field('titulo_final');
            $texto_botao = get_sub_field('texto_botao');
            $url_botao = get_sub_field('url_botao');

            ?>
            <div class="home-banner_background">
              <picture>
                <source srcset="<?php echo $image_desktop; ?>" media="(max-width: 767px)">
                <img src="<?php echo $image_mobile; ?>" alt="" />
              </picture>
            </div>
            <div class="home-banner_content">
              <img src="<?php the_field('home-banner_simbolo'); ?>" class="home-banner_logotipo" alt=""/>
              <h2 class="home-banner_title">
                <span class="home-banner_first"><?php echo $titulo_inicio; ?></span>
                <?php echo $titulo_destaque; ?>
                <span class="home-banner_last"><?php echo $titulo_final; ?></span>
              </h2>
              <a href="<?php echo $url_botao; ?>" class="home-banner_button"><?php echo $texto_botao; ?></a>
            </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php
get_footer('', 'hide-footer');