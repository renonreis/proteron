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
      <div class="col-12 text-center">
        <?php
          $location = get_field('google_maps');
          if($location) {
            echo '<p><svg xmlns="http://www.w3.org/2000/svg" width="29.618" height="38.496" viewBox="0 0 29.618 38.496" style="margin-right: 15px">
            <g id="Grupo_64" data-name="Grupo 64" transform="translate(833.209 -112.516)">
              <path id="Caminho_127" data-name="Caminho 127" d="M-818.4,112.52A14.842,14.842,0,0,1-803.9,124.2a14.3,14.3,0,0,1-1.582,10.028,78.949,78.949,0,0,1-10.873,14.806c-.492.553-.988,1.1-1.5,1.644-.422.449-.68.45-1.093,0a90.31,90.31,0,0,1-10.871-13.858,22.3,22.3,0,0,1-2.825-5.762,14.008,14.008,0,0,1,2.844-13.181,14.665,14.665,0,0,1,9.68-5.272c.284-.039.57-.067.857-.08S-818.687,112.52-818.4,112.52Zm.025,8.807a5.293,5.293,0,0,0-5.347,5.213,5.306,5.306,0,0,0,5.28,5.38,5.31,5.31,0,0,0,5.368-5.291A5.292,5.292,0,0,0-818.375,121.327Z" transform="translate(0 0)" fill="#db5c16"/>
            </g>
          </svg>' . $location['address'] . '</p>';
          }

        ?>
        <?php
          if( $location ): ?>
            <div class="acf-map" data-zoom="18">
                <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
            </div>
        <?php endif; ?>
      </div>
      <div class="col-12 text-center">
        <a href="<?php echo get_site_url(); ?>/projetos-e-obras/" class="btn-outros-projetos d-flex">CONFIRA outros projetos</a>
      </div>
    </div>
  </div>
</section>

<style type="text/css">
.acf-map {
    width: 100%;
    height: 400px;
    border: #ccc solid 1px;
    margin: 20px 0;
}

// Fixes potential theme css conflict.
.acf-map img {
  max-width: inherit !important;
}
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDV0vFnLWtIm0dJLGuBlSuwBOw4Alei5OE"></script>
<script type="text/javascript">
(function( $ ) {

/**
 * initMap
 *
 * Renders a Google Map onto the selected jQuery element
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @return  object The map instance.
 */
function initMap( $el ) {

    // Find marker elements within map.
    var $markers = $el.find('.marker');

    // Create gerenic map.
    var mapArgs = {
        zoom        : $el.data('zoom') || 18,
        mapTypeId   : google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map( $el[0], mapArgs );

    // Add markers.
    map.markers = [];
    $markers.each(function(){
        initMarker( $(this), map );
    });

    // Center map based on markers.
    centerMap( map );

    // Return map instance.
    return map;
}

/**
 * initMarker
 *
 * Creates a marker for the given jQuery element and map.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @param   object The map instance.
 * @return  object The marker instance.
 */
function initMarker( $marker, map ) {

    // Get position from marker.
    var lat = $marker.data('lat');
    var lng = $marker.data('lng');
    var latLng = {
        lat: parseFloat( lat ),
        lng: parseFloat( lng )
    };

    // Create marker instance.
    var marker = new google.maps.Marker({
        position : latLng,
        map: map
    });

    // Append to reference for later use.
    map.markers.push( marker );

    // If marker contains HTML, add it to an infoWindow.
    if( $marker.html() ){

        // Create info window.
        var infowindow = new google.maps.InfoWindow({
            content: $marker.html()
        });

        // Show info window when marker is clicked.
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open( map, marker );
        });
    }
}

/**
 * centerMap
 *
 * Centers the map showing all markers in view.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   object The map instance.
 * @return  void
 */
function centerMap( map ) {

    // Create map boundaries from all map markers.
    var bounds = new google.maps.LatLngBounds();
    map.markers.forEach(function( marker ){
        bounds.extend({
            lat: marker.position.lat(),
            lng: marker.position.lng()
        });
    });

    // Case: Single marker.
    if( map.markers.length == 1 ){
        map.setCenter( bounds.getCenter() );

    // Case: Multiple markers.
    } else{
        map.fitBounds( bounds );
    }
}

// Render maps on page load.
$(document).ready(function(){
    $('.acf-map').each(function(){
        var map = initMap( $(this) );
    });
});

})(jQuery);
</script>

<?php

get_footer();