<?php
add_action( 'vc_before_init', 'arqam_integrateWithVC' );
function arqam_integrateWithVC() {
 vc_map( array(
  "name" => esc_html__( "Arqam slider", "arqam-toolkit" ),
  "base" => "arqam_slides",
  "class" => "",
  "category" => esc_html__( "Arqam", "arqam-toolkit"),
  "params" => array(
        array(
        "type" => "textfield",
        "heading" => esc_html__( "Count", "arqam-toolkit" ),
        "param_name" => "count",
        "value" => esc_html__( "2", "arqam-toolkit" ),
        "description" => esc_html__( "Select slides count. if you want to show unlimited slides type -1.", "arqam-toolkit" )
        ),
      array(
        "type" => "dropdown",
        "heading" => esc_html__( "Select Slide", "arqam-toolkit" ),
        "param_name" => "slider_id",
          "value" => arqam_toolkit_get_slide_as_list(),
        "description" => esc_html__( "Select yes or no for enable loop.", "arqam-toolkit" ),
        "dependency" => array(
            "element" => "count",
            "value" => array("1"),

        )
     ),
     
     array(
        "type" => "textfield",
        "heading" => esc_html__( "Slider height", "arqam-toolkit" ),
        "param_name" => "height",
        "std" => esc_html__( "730", "arqam-toolkit" ),
        "description" => esc_html__( "Type slider height in px numbers only.", "arqam-toolkit" ),
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
    "dependency" => array(
        "element" => "count",
        "value" => array( "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"),

    )
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
    "dependency" => array(
        "element" => "count",
        "value" => array( "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"),

    )
  ),
  array(
    "type" => "dropdown",
    "heading" => esc_html__( "Slide Time", "arqam-toolkit" ),
    "param_name" => "autoplayTimeout",
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
        "element" => "count",
        "value" => array( "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"),

    ),
    "dependency" => array(
        "element" => "autoplay",
        "value" => array("true"),
true
    )
   ),
     
   array(
    "type" => "dropdown",
    "heading" => esc_html__( "Enable navigation icon?", "arqam-toolkit" ),
    "param_name" => "nav",
    "std" => esc_html__( "true", "arqam-toolkit" ),
      "value" => array(
          'Yes' => 'true',
          'No' => 'false',
      ),
    "description" => esc_html__( "Select yes or no for navigation icon.", "arqam-toolkit" ),
    "dependency" => array(
        "element" => "count",
        "value" => array( "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"),

    )
  ),
    
  array(
    "type" => "dropdown",
    "heading" => esc_html__( "Enable dots?", "arqam-toolkit" ),
    "param_name" => "dots",
    "std" => esc_html__( "true", "arqam-toolkit" ),
      "value" => array(
          'Yes' => 'true',
          'No' => 'false',
      ),
    "description" => esc_html__( "Select yes or no for dots.", "arqam-toolkit" ),
    "dependency" => array(
        "element" => "count",
        "value" => array( "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"),

    )
  ),

 )
 ) 
);
}
