<?php 


function arqam_logo_carousel_shortcodes($atts, $content = null){
         extract( shortcode_atts( array(
            'logos' => '',
            'loop' => 'true',
            'desktop_count' => '5',
            'tablet_count' => '3',
            'mobile_count' => '2',
            'autoplay' => 'true',
            'autoplaytimeout' => 5000,
            'nav' => 'false',
         ), $atts) );
         $logo_ids = explode(',', $logos);

      $arqam_logo_carousel_markup = '
      <script>
         jQuery(document).ready(function($){
            jQuery(".arqam-logo-carousel").owlCarousel({
            margin: 30,
            loop: '.$loop.',
            autoplay: '.$autoplay.',
            autoplaytimeout: '.$autoplaytimeout.',
            nav: '.$nav.',
            navText: ["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"],
             responsive:{
                0:{
                   items: '.$mobile_count.',
                },
                600:{
                   items: '.$tablet_count.',
                },
                1000:{
                   items: '.$desktop_count.',
                }   
             }              
            });
         });

      </script>

      ';
      $arqam_logo_carousel_markup .= '
      <div class="arqam-logo-carousel">';
         foreach($logo_ids as $logo) {
               $logo_array = wp_get_attachment_image_src($logo, 'medium');
            $arqam_logo_carousel_markup .= '
               <div class="arqam-logo-item-table">
                  <div class="arqam-logo-item-tablecell">
                     <img src="'.esc_url($logo_array[0]).'" alt=""/>
                  </div>
               </div>
            
            ';
         }

      $arqam_logo_carousel_markup .= '
      </div>
      ';

      return $arqam_logo_carousel_markup;

}
add_shortcode( 'arqam_logo_carousel', 'arqam_logo_carousel_shortcodes' );