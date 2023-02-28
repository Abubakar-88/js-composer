<?php 


function arqam_contact_box_shortcode($atts, $content = null){
    extract( shortcode_atts( array(
        'title' => '',
        'desc' => '',
        'choose_icon' => '',
        
    ), $atts) ); 

    
    $arqam_contact_box_desc_allowed_tags = array(
        'a' => array(
              'href' => array(),
              'title' => array(),
              'class' => array(),
            ),
            
            'br' => array(),
            'em' => array(),
            'strong' => array(),

      );
     
    $arqam_contact_box_markup ='
       <div class="arqam-contact-box-area">
            <i class="'.esc_attr($choose_icon).'"></i>
              <h3>'.esc_html($title).'</h3>
              '.wp_kses(wpautop($desc), $arqam_contact_box_desc_allowed_tags).'
            
        </div>
    ';
    $arqam_contact_box_markup .='';
return $arqam_contact_box_markup;

}
add_shortcode( 'arqam_contact_box', 'arqam_contact_box_shortcode' );