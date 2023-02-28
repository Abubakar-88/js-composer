<?php

add_action( 'vc_before_init', 'arqam_btn_integrateWithVC' );
function arqam_btn_integrateWithVC() {
vc_map( 
    array(
    "name" => esc_html__( "Arqam button", "arqam-toolkit" ),
    "base" => "arqam_btn",
    "category" => esc_html__( "Arqam", "arqam-toolkit"),
    "params" => array(
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Link type", "arqam-toolkit" ),
            "param_name" => "type",
              "std" => esc_html__("1", "arqam-toolkit"),
            "value" => array(
                "Link to page" => 1,
                "External link" => 2,

              ),
            "description" => esc_html__( "", "arqam-toolkit" ),
       ),
       array(
        "type" => "dropdown",
        "heading" => esc_html__( "Link to page", "arqam-toolkit" ),
        "param_name" => "link_to_page",
        "value" => arqam_toolkit_get_page_as_list(),
        "description" => esc_html__( "", "arqam-toolkit" ),
        "dependency" => array(
            "element" => "type",
            "value" => array("1"),
          )
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "External link", "arqam-toolkit" ),
            "param_name" => "external_link",
            "dependency" => array(
                "element" => "type",
                "value" => array("2"),

            ),
            "description" => esc_html__( "", "arqam-toolkit" ),
       ),
       array(
        "type" => "textfield",
        "heading" => esc_html__( "Link text", "arqam-toolkit" ),
        "param_name" => "link_text",
          "std" => esc_html__("Read more about us", "arqam-toolkit"),
        
        "description" => esc_html__( "", "arqam-toolkit" ),
       ),
       
    
        
    )
   )
);
}