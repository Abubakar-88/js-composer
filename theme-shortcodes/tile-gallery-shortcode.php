<?php 


function arqam_tile_gallery_shortcodes($atts, $content = null){
    extract( shortcode_atts( array(
        'images' => '',
        'height' => '310',
        'size' => 'large',
    ), $atts) );

   $image_ids = explode(',', $images);
   $image_count = count( $image_ids);
   $image_no = 0;

     if(!empty($images)){
        $arqam_tile_gallery_markup .= '
           <div class="arqam-tile-gallery arqam-tile-gallery-image'.esc_attr($height).'">';
           
           foreach($image_ids as $image) {

              $image_array = wp_get_attachment_image_src($image, $size);
              $image_no++;
              $arqam_tile_gallery_markup .= ' <div style="background-image:url('.esc_url($image_array[0]).'); 
              height:'.esc_attr($height).'px" class="tile-gallery-block tile-gallery-block-'.esc_attr($image_no).'"></div>';
           }
           
           $arqam_tile_gallery_markup .= '
           </div>
         
        ';

     }
     else{
       $arqam_tile_gallery_markup ='';
     }

return $arqam_tile_gallery_markup;

}
add_shortcode( 'arqam_tile_gallery', 'arqam_tile_gallery_shortcodes' );