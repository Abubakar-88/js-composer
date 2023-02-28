<?php 


function arqam_btn_shortcodes($atts, $content = null){
    extract( shortcode_atts( array(
        'type' => 1,
        'link_to_page' => '',
        'external_link' => '',
        'link_text' => esc_html('Read more about us', 'arqam-toolkit'),
    ), $atts) );

      if($type == 1){
           $link_source = get_page_link($link_to_page);
      }else{
        $link_source = $external_link;
      }
  
    $arqam_btn_markup ='
      <a href="'.esc_url($link_source).'" class="bordered-btn">'.esc_html($link_text).'</a>

    
    ';
return $arqam_btn_markup;

}
add_shortcode( 'arqam_btn', 'arqam_btn_shortcodes' );