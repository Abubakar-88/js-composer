<?php


function arqam_styled_map_shortcode($atts, $content = null) {
    
    extract( shortcode_atts( array(
        'lat' => '40.7433379',
        'lng' => '-74.0103219',
        'title' => esc_html__('Head office', 'arqam-toolkit'),
        'desc' => 'House 21, Grand St.<br/> New York, USA',
        'height' => '500',
    ), $atts) );  
    
    $dynamic_map_id = rand(42587942, 382947283);
    
    $arqam_styled_map_markup = '
    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" color="#ffffff"
    id="gmap_canvas" src="https://maps.google.com/maps?q=House%2021%2C%20Grand%20St.%2C%20New%20York%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" 
    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://embedgooglemap.net/131/"></a>
        </div><style>
        .mapouter{
            position:relative;
            text-align:right;
            height:500px;
            width:100%;
        }

            .gmap_canvas {
                overflow:hidden;
                background:none!important;
                height:500px;
                width:100%;
            }
                </style>
                </div>
    ';
    
    return $arqam_styled_map_markup;
    
}
add_shortcode('arqam_styled_map', 'arqam_styled_map_shortcode');