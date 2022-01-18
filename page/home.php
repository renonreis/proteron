<?php
// Template Name: Home

get_header('', 'hide-header');

?>

<main>
  <section class="home-banner">
    <div class="container-full">
      <div class="row text-center">
        <div class="col-md-12 home-banner_logo">
          <a href="<?php echo get_site_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-proteron.png" alt="Proteron Engenharia"/>
          </a>
        </div>
        <div class="col-md-4 home-banner_content">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/proteron-contrucoes-mobile.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/proteron-contrucoes.jpg" alt="" />
          </picture>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-proteron-light.png" alt=""/>
          <h2 class="home-banner_title">
            <span class="home-banner_first">A SUA</span>
            CONSTRUTORA E INCORPORADORA
            <span class="home-banner_last">DE CONFIANÇA</span>
          </h2>
          <a href="" class="home-banner_button">Confira</a>
        </div>
        <div class="col-md-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-proteron-light.png" alt=""/>
          <h2 class="home-banner_title">
            <span class="home-banner_first">A SUA</span>
            CONSTRUTORA E INCORPORADORA
            <span class="home-banner_last">DE CONFIANÇA</span>
          </h2>
          <a href="" class="home-banner_button">Confira</a>
        </div>
        <div class="col-md-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-proteron-light.png" alt=""/>
          <h2 class="home-banner_title">
            <span class="home-banner_first">A SUA</span>
            CONSTRUTORA E INCORPORADORA
            <span class="home-banner_last">DE CONFIANÇA</span>
          </h2>
          <a href="" class="home-banner_button">Confira</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php
get_footer('', 'hide-footer');