<?php 


function arqam_testimonial_box_shortcodes($atts, $content = null){
    extract( shortcode_atts( array(
        'title' => '',
        'position' => '',
        'desc' => '',
        'photo' => '',
    ), $atts) );
      
         
    $arqam_testimonial_box_desc_allowed_tags = array(
        'a' => array(
              'href' => array(),
              'title' => array(),
              'class' => array(),
            ),
            
            'br' => array(),
            'em' => array(),
            'strong' => array(),

      );

       $photo_array = wp_get_attachment_image_src($photo, 'medium');

    $arqam_testimonial_box_markup ='
      <div class="single-testimonial-box">
          <img src="'.esc_url($photo_array[0]).'" alt="'.esc_html($title).'"/>
          <h3>'.esc_html($title).'<span>'.esc_html($position).'</span></h3>
          '.wp_kses(wpautop($desc), $arqam_testimonial_box_desc_allowed_tags).'
      </div>
    
    ';
return $arqam_testimonial_box_markup;

}
add_shortcode( 'arqam_testimonial_box', 'arqam_testimonial_box_shortcodes' );