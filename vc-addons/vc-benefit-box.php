<?php

add_action( 'vc_before_init', 'arqam_benefit_box_integrateWithVC' );
function arqam_benefit_box_integrateWithVC() {
vc_map( 
    array(
    "name" => esc_html__( "Arqam Benefit box", "arqam-toolkit" ),
    "base" => "arqam_benefit_box",
    "category" => esc_html__( "Arqam", "arqam-toolkit"),
    "params" => array(
      
       array(
        "type" => "iconpicker",
        "heading" => esc_html__( "Choose icon", "arqam-toolkit" ),
        "param_name" => "choose_icon",
        "description" => esc_html__( "", "arqam-toolkit" ),
       
       ),
       array(
        "type" => "textfield",
        "heading" => esc_html__( "Title", "arqam-toolkit" ),
        "param_name" => "title",
        "description" => esc_html__( "", "arqam-toolkit" )
    ),
    
        
    )
   )
);
}