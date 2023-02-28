<?php 


function arqam_benefit_box_shortcodes($atts, $content = null){
    extract( shortcode_atts( array(
        'choose_icon' => '',
        'title' => '',
    ), $atts) );
  
    $benefit_markup ='
     <div class="arqam-benefit-box">
          <i class="'.esc_attr($choose_icon).'"></i>
           <p>'.esc_html($title).'</p>
     </div>

    
    ';
return $benefit_markup;

}
add_shortcode( 'arqam_benefit_box', 'arqam_benefit_box_shortcodes' );