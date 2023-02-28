<?php
add_action( 'vc_before_init', 'arqam_stat_integrateWithVC' );
function arqam_stat_integrateWithVC() {

vc_map( 
    array(
    "name" => esc_html__( "Arqam statics box", "arqam-toolkit" ),
    "base" => "arqam_stat",
    "category" => esc_html__( "Arqam", "arqam-toolkit"),
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Statics number", "arqam-toolkit" ),
            "param_name" => "number",
            "description" => esc_html__( "", "arqam-toolkit" ),
       ),
       
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Statics number after text", "arqam-toolkit" ),
            "param_name" => "after_text",
            "description" => esc_html__( "", "arqam-toolkit" ),
       ),
       
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Statics description", "arqam-toolkit" ),
            "param_name" => "desc",
            "description" => esc_html__( "", "arqam-toolkit" ),
       ),
       
       
    
        
    )
   )
);

}