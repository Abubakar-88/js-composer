<?php 


function arqam_stat_shortcodes($atts, $content = null){
    extract( shortcode_atts( array(
        'number' => '',
        'after_text' => '',
        'desc' => '',
    ), $atts) );

    $arqam_stat_desc_allowed_tags = array(
        'a' => array(
              'href' => array(),
              'title' => array(),
              'class' => array(),
            ),
            
            'br' => array(),
            'em' => array(),
            'strong' => array(),

      );
    $stat_markup ='
     <div class="arqam-stat-box">
        <h1><span>'.esc_attr($number).'</span>'.esc_html($after_text).'</h1>
        '.wp_kses($desc, $arqam_stat_desc_allowed_tags).'
     
     
     </div>

    
    ';
return $stat_markup;

}
add_shortcode( 'arqam_stat', 'arqam_stat_shortcodes' );