<?php

add_action( 'vc_before_init', 'arqam_logo_carousel_integrateWithVC' );
function arqam_logo_carousel_integrateWithVC() {
vc_map( 
    array(
    "name" => esc_html__( "Arqam logo carousel", "arqam-toolkit" ),
    "base" => "arqam_logo_carousel",
    "category" => esc_html__( "Arqam", "arqam-toolkit"),
    "params" => array(
        array(
            "type" => "attach_images",
            "heading" => esc_html__( "Upload logos", "arqam-toolkit" ),
            "param_name" => "logos",
            "description" => esc_html__( "", "arqam-toolkit" )
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Desktop count", "arqam-toolkit" ),
            "param_name" => "desktop_count",
              "std" => "5",
            "description" => esc_html__( "", "arqam-toolkit" ),
       ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Tablet count", "arqam-toolkit" ),
            "param_name" => "tablet_count",
              "std" => "3",
            "description" => esc_html__( "", "arqam-toolkit" ),
       ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Mobile count", "arqam-toolkit" ),
            "param_name" => "mobile_count",
              "std" => "2",
            "description" => esc_html__( "", "arqam-toolkit" ),
       ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Enable Loop?", "arqam-toolkit" ),
            "param_name" => "loop",
            "std" => esc_html__( "true", "arqam-toolkit" ),
              "value" => array(
                  'Yes' => 'true',
                  'No' => 'false',
              ),
            "description" => esc_html__( "Select yes or no for enable loop.", "arqam-toolkit" ),
            
       ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Enable autoplay?", "arqam-toolkit" ),
            "param_name" => "autoplay",
            "std" => esc_html__( "true", "arqam-toolkit" ),
              "value" => array(
                  'Yes' => 'true',
                  'No' => 'false',
              ),
            "description" => esc_html__( "Select yes or no for autoplay.", "arqam-toolkit" ),
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Logo carousel Time", "arqam-toolkit" ),
            "param_name" => "autoplaytimeout",
            "std" => esc_html__( "5000", "arqam-toolkit" ),
              "value" => array(
                  '1 Second' => '1000',
                  '2 Second' => '2000',
                  '3 Second' => '3000',
                  '4 Second' => '4000',
                  '5 Second' => '5000',
                  '6 Second' => '6000',
                  '7 Second' => '7000',
                  '8 Second' => '8000',
                  '9 Second' => '9000',
                  '10 Second' => '10000',
                  '11 Second' => '11000',
                  '12 Second' => '12000',
                  '13 Second' => '13000',
                  '14 Second' => '14000',
                  '15 Second' => '15000',
              ),
              
            "description" => esc_html__( "Select slider time.", "arqam-toolkit" ), 
            "dependency" => array(
                "element" => "autoplay",
                "value" => array("true"),

            ),
           
        ),
        
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Enable navigation icon?", "arqam-toolkit" ),
            "param_name" => "nav",
            "std" => esc_html__( "false", "arqam-toolkit" ),
              "value" => array(
                  'Yes' => 'true',
                  'No' => 'false',
              ),
            "description" => esc_html__( "Select yes or no for navigation icon.", "arqam-toolkit" ),
            
        ),
       
    )
  )
);
}