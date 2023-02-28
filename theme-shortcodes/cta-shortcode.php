<?php 


function arqam_cta_shortcodes($atts, $content = null){
    extract( shortcode_atts( array(
        'title' => '',
        'desc' => '',
        'type' => 1,
        'theme' => 1,
        'link_to_page' => '',
        'external_link' => '',
        'link_text' => 'See more',
    ), $atts) );  
      if($type == 1){
           $link_source = get_page_link($link_to_page);
      }else{
        $link_source = $external_link;
      }
      $arqam_cta_desc_allowed_tags = array(
        'a' => array(
              'href' => array(),
              'title' => array(),
              'class' => array(),
            ),
                    'img' => array(
              'alt' => array(),
              'src' => array(),
            ),
            'br' => array(),
            'em' => array(),
            'strong' => array(),

      );

    $arqam_cta_markup ='
       <div class="arqam-cta-box arqam-cta-box-theme'.$theme.'">
              <h2>'.esc_html($title).'</h2>
              '.wp_kses(wpautop($desc), $arqam_cta_desc_allowed_tags).'
            <a href="'.esc_url($link_source).'" class="bordered-btn">'.esc_html($link_text).'</a>
        </div>
    ';
    $$arqam_cta_markup .='';
return $arqam_cta_markup;

}
add_shortcode( 'arqam_cta', 'arqam_cta_shortcodes' );