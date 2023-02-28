<?php
add_action( 'vc_before_init', 'arqam_tile_gallery_integrateWithVC' );
function arqam_tile_gallery_integrateWithVC() {

vc_map( 
    array(
    "name" => esc_html__( "Arqam tile gallery", "arqam-toolkit" ),
    "base" => "arqam_tile_gallery",
    "category" => esc_html__( "Arqam", "arqam-toolkit"),
    "params" => array(
        array(
            "type" => "attach_images",
            "heading" => esc_html__( "Upload gallery images", "arqam-toolkit" ),
            "param_name" => "images",
            "description" => esc_html__( "", "arqam-toolkit" )
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Image height", "arqam-toolkit" ),
            "param_name" => "height",
              "std" => "310",
            "description" => esc_html__( "Type image height in number", "arqam-toolkit" ),
       ),
    )
  )
);
}