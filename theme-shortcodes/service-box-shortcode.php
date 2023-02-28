<?php 


function arqam_service_box_shortcodes($atts, $content = null){
    extract( shortcode_atts( array(
        'title' => '',
        'desc' => '',
        'type' => 1,
        'link_to_page' => '',
        'external_link' => '',
        'link_text' => esc_html__('See more', 'arqam-toolkit'),
        'icon_type' => 1,
        'upload_icon' => '',
        'choose_icon' => '',
        'box_background' => '',
    ), $atts) );

      if($type == 1){
           $link_source = get_page_link($link_to_page);
      }else{
        $link_source = $external_link;
      }
        $box_bg_array = wp_get_attachment_image_src($box_background, 'medium');
  

        $arqam_service_desc_allowed_tags = array(
          'a' => array(
                'href' => array(),
                'title' => array(),
                'class' => array(),
              ),
              
              'br' => array(),
              'em' => array(),
              'strong' => array(),
  
        );
    $arqam_service_box_markup ='
       <div class="arqam-service-box">
           <div style=background-image:url('.esc_url($box_bg_array[0]).') class="arqam-service-icon">
             <div class="arqam-service-table"> 
                 <div class="arqam-service-tablecell">';
                   
                 if($icon_type == 1) {
                     $service_icon_array = wp_get_attachment_image_src($upload_icon, 'thumbnail');
                     $arqam_service_box_markup .='<img src="'.esc_url($service_icon_array[0]).'" alt=""/>';
                 }else{
                    $arqam_service_box_markup .='<i class="'.esc_attr($choose_icon).'"></i>';
                 }
                    
            $arqam_service_box_markup .='         
                   
               </div>
             </div>
           </div>
           <div class="arqam-service-content">
               <h3>'.esc_html($title).'</h3>
                '.wp_kses(wpautop($desc), $arqam_service_desc_allowed_tags).'
                <a href="'.esc_url($link_source).'" class="service-more-btn">'.esc_html($link_text).'</a>
           </div>
       </div>
    
    ';
    $arqam_service_box_markup .='';
return $arqam_service_box_markup;

}
add_shortcode( 'arqam_service_box', 'arqam_service_box_shortcodes' );