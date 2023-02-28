<?php 


function arqam_promo_box_shortcode($atts, $content = null){
    extract( shortcode_atts( array(
        'title' => '',
        'desc' => '',
        'type' => 1,
        'link_to_page' => '',
        'external_link' => '',
        'link_text' => esc_html__('See open jobs', 'arqam-toolkit'),
    ), $atts) ); 
     
      if($type == 1){
           $link_source = get_page_link($link_to_page);
      }else{
        $link_source = $external_link;
      }
  

      $arqam_promo_box_content_allowed_tags = array(
        'a' => array(
              'href' => array(),
              'title' => array(),
              'class' => array(),
            ),
             
            'br' => array(),
            'em' => array(),
            'strong' => array(),

      );
    $arqam_promo_box_markup ='
       <div class="arqam-promo-box">
              <h2>'.esc_html($title).'</h2>
              '.wp_kses(wpautop($desc), $arqam_promo_box_content_allowed_tags).'
            <a href="'.esc_url($link_source).'" class="bordered-btn">'.esc_html($link_text).'</a>
        </div>
    ';
    $arqam_promo_box_markup .='';
return $arqam_promo_box_markup;

}
add_shortcode( 'arqam_promo_box', 'arqam_promo_box_shortcode' );