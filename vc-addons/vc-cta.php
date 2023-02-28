<?php
add_action( 'vc_before_init', 'arqam_cta_integrateWithVC' );
function arqam_cta_integrateWithVC() {

vc_map( 
    array(
    "name" => esc_html__( "Arqam Call to action", "arqam-toolkit" ),
    "base" => "arqam_cta",
    "category" => esc_html__( "Arqam", "arqam-toolkit"),
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Title", "arqam-toolkit" ),
            "param_name" => "title",
            "description" => esc_html__( "", "arqam-toolkit" )
        ),
        array(
            "type" => "textarea",
            "heading" => esc_html__( "Content", "arqam-toolkit" ),
            "param_name" => "desc",
            "description" => esc_html__( "", "arqam-toolkit" )
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Theme", "arqam-toolkit" ),
            "param_name" => "theme",
              "std" => esc_html__("1", "arqam-toolkit"),
            "value" => array(
                "General theme" => 1,
                "Colered theme" => 2,

              ),
            "description" => esc_html__( "", "arqam-toolkit" ),
       ),
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
          "std" => esc_html__("See open jobs", "arqam-toolkit"),
        
        "description" => esc_html__( "", "arqam-toolkit" ),
       ), 
    
    
        
    )
   )
);
}