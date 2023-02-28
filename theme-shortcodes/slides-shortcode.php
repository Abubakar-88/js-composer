<?php 

function arqam_slides_shortcodes($atts){
    extract( shortcode_atts( array(
        'count' => 2,
        'loop' => 'true',
        'slider_id' => '',
        'height' => '730',
        'autoplay' => 'true',
        'autoplayTimeout' => 5000,
        'nav' => 'true',
        'dots' => 'true',
    ), $atts) );
     if($count == 1) {
        $q = new WP_Query(array('posts_per_page' => $count, 'post_type' => 'slide', 'p'=> $slider_id));
     }else{
        $q = new WP_Query(array('posts_per_page' => $count, 'post_type' => 'slide')); 
     }
         
       if($count == 1) {
           $list = '';
       } else{
        $list = '
        <script>
           jQuery(window).load(function(){
               jQuery("#arqam-slider").owlCarousel({
                    items: 1,
                    loop: '.$loop.',
                    autoplay: '.$autoplay.',
                    autoplayTimeout: '.$autoplayTimeout.',
                    nav: '.$nav.',
                    dots: '.$dots.',
                    navText: ["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"]
                });
                jQuery(".preloader-wrapper").fadeOut();
           });
             
        </script>';
       } 
       $arqam_slides_content_allowed_tags = array(
        'a' => array(
              'href' => array(),
              'title' => array(),
              'class' => array(),
            ),
             
            'br' => array(),
            'em' => array(),
            'strong' => array(),

      );
    
    $list .=' <div style="height:'.esc_attr($height).'px" class="arqam-slides-wrapper">';

    $enable_preloader = cs_get_option('enable_preloader');
    if($enable_preloader == true) {} {
    $list .='
    <div class="preloader-wrapper">
      <div class="loader">Loading...</div>
   </div>';
  }
   $list .='
    <div id="arqam-slider" class="arqam-slides">';
        while($q->have_posts()) : $q->the_post();
            $idd = get_the_ID();
            if(get_post_meta($idd, 'arqam_slide_options', true)){
                $slide_meta = get_post_meta($idd, 'arqam_slide_options', true);
            }else{
                $slide_meta = array();
            }
            if(array_key_exists('enable_overlay', $slide_meta)){
                $enable_overlay = $slide_meta['enable_overlay'];
            }else{
               $enable_overlay = true;
            }
            if(array_key_exists('overlay_percentage', $slide_meta)){
                $overlay_percentage = $slide_meta['overlay_percentage'];
            }else{
               $overlay_percentage = .7;
            }
            if(array_key_exists('overlay_color', $slide_meta)){
                $overlay_color = $slide_meta['overlay_color'];
            }else{
               $overlay_color = '#181a1f';
            }
            $post_content = get_the_content();
            $list .= '
            <div style="background-image:url('.esc_url(get_the_post_thumbnail_url($idd, 'large')).');height:'.esc_attr($height).'px" class="arqam-slide-item">';
            if($enable_overlay == true){
                $list .= '<div style="opacity=:'.esc_attr($overlay_percentage).'; background-color:'.esc_attr($overlay_color).'"class="slide-overlay"></div>';
            }
           
            
            $list .= '
                <div class="arqam-slide-table">
                    <div class="arqam-slide-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>'.esc_html(get_the_title($idd)).'</h2>
                                        '.wp_kses(wpautop( $post_content), $arqam_slides_content_allowed_tags).' ';
                                            
                        if(!empty($slide_meta['buttons'])) {
                            $list .= '<div class="arqam-slide-buttons">';
                                foreach($slide_meta['buttons'] as $button) {
                                if($button['link_type'] == 1) {
                                    $btn_link = get_page_link($button['link-to-page']);
                                }else{
                                    $btn_link = $button['link-to-external'];
                                }

                                    $list .= '<a href="'.esc_url($btn_link).'" class="'.esc_attr($button['type']).'-btn arqam-slide-btn">'.esc_html($button['text']).'</a>';
                                }
                            $list .= '</div>';
                        }                 


                        $list .= '


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            ';        
        endwhile;
    $list .= '</div></div>';
    wp_reset_query();
    return $list;
}
add_shortcode('arqam_slides', 'arqam_slides_shortcodes');  