<?php
/**
 * The template for displaying all Projetos e Obras
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_4
 */

get_header();

$tipo = get_field('tipo', $id)[0];
?>

<section class="banner-projeto-obra">
  <div class="banner-projeto-obra_background">
    <img width="352" height="352" class="banner-projeto-obra_image" src="<?php the_post_thumbnail_url('project_image');?>" alt="<?php the_title_attribute();?>">
  </div>
  <div class="container">
    <div class="row">
      <div class="col banner-projeto-obra_content text-center text-white">
        <p><?php echo $tipo->post_title; ?></p>
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>

<section class="content-projeto-obra">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <?php the_content(); ?>
      </div>
      <div class="col-8">
      <?php
        $images = get_field('galeria');
        if( $images ): ?>
          <div id="slider" class="flexslider">
            <ul class="slides">
              <?php foreach( $images as $image ): ?>
                <li>
                  <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();