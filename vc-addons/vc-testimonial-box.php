<?php
add_action( 'vc_before_init', 'arqam_testimonial_box_integrateWithVC' );
function arqam_testimonial_box_integrateWithVC() {

vc_map( 
    array(
    "name" => esc_html__( "Arqam Testimonial box", "arqam-toolkit" ),
    "base" => "arqam_testimonial_box",
    "category" => esc_html__( "Arqam", "arqam-toolkit"),
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Title", "arqam-toolkit" ),
            "param_name" => "title",
            "description" => esc_html__( "", "arqam-toolkit" )
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Position/Location", "arqam-toolkit" ),
            "param_name" => "position",
            "description" => esc_html__( "", "arqam-toolkit" )
        ),
        array(
            "type" => "textarea",
            "heading" => esc_html__( "Testimonial", "arqam-toolkit" ),
            "param_name" => "desc",
            "description" => esc_html__( "", "arqam-toolkit" )
        ),
        array(
            "type" => "attach_image",
            "heading" => esc_html__( "Photo", "arqam-toolkit" ),
            "param_name" => "photo",
            "description" => esc_html__( "", "arqam-toolkit" )
        ),
    
        
    )
   )
);
}