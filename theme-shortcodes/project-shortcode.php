<?php 


function arqam_projects_shortcodes($atts, $content = null){
    extract( shortcode_atts( array(
        'theme' => '1',
    ), $atts) );  
     
    $project_categories = get_terms('project_cat');

    $dynamic_number = rand(9798237, 328762873);
    $arqam_projects_markup ='

       <script>
         jQuery(document).ready(function($){
            $(".arqam-project-s-active li").click(function(){
                $(".arqam-project-s-active li").removeClass("active");
                $(this).addClass("active");

              var selector = $(this).attr("data-filter");
              $(".project-list-'.$dynamic_number.'").isotope({
                  filter: selector,
              });
          });
         });
         jQuery(window).load(function(){
            jQuery(".project-list-'.$dynamic_number.'").isotope();

         });
       
       
       </script>


    <div class="row arqam-project-area">';
            if($theme == '1') {
            $arqam_projects_markup .='
            <div class="col-md-3">';
            $project_list_class = 'arqam-project-shorting';
            }else{
                $arqam_projects_markup .='
                <div class="col-md-12">';
                $project_list_class = 'arqam-project-shorting-2';
            }

          $arqam_projects_markup .='
            <ul class="arqam-project-s-active '.esc_attr($project_list_class).' arqam-project-shorting-'.esc_attr($theme).'">
               <li class="active" data-filter="*">All Works</li>';
                 if(!empty($project_categories) && ! is_wp_error($project_categories)) {
                     foreach($project_categories as $category){
                        $arqam_projects_markup .='<li data-filter=".'.esc_html($category->slug).'">'.esc_html($category->name).'</li>';
                     }
                 }
               

               $arqam_projects_markup .='
            </ul>';
            $arqam_projects_markup .='
          </div>';
            if($theme == '1') {
               $project_column_width = 'col-md-9';
               $project_inner_column_width = 'col-md-4';
            }else{
                $project_column_width = 'col-md-12';
                $project_inner_column_width = 'col-md-3';
            }
            $arqam_projects_markup .='
            <div class="'.esc_attr($project_column_width).'">';

          $arqam_projects_markup .='
            <div class="row project-list-'.esc_attr($dynamic_number).'">';
            $projects_array = new WP_Query(array('posts_per_page' => -1, 'post_type' => 'project'));
            while($projects_array ->have_posts()) : $projects_array ->the_post();

            $project_category  = get_the_terms(get_the_ID(), 'project_cat');
            if($project_category  && ! is_wp_error($project_category )){
                 $project_cat_list = array();
                 foreach($project_category as $category) {
                    $project_cat_list[] = $category->slug;
                 }
                 $project_assigned_cat = join(" ", $project_cat_list);
                 
            }else {
                $project_assigned_cat = '';   
            }
            $arqam_projects_markup .='
              <div class="'.esc_attr($project_inner_column_width).' '.esc_attr($project_assigned_cat).'">
                 <a href="'.esc_url(get_the_permalink()).'" class="single-work-box">
                     <div class="work-box-bg" style="background-image:url('.esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')).')">
                        <i class="fa fa-link"></i>
                     </div>
                   <p>'.esc_html(get_the_title()).'</p>
                 </a>
              </div>';
            endwhile;
            wp_reset_query();

              $arqam_projects_markup .='
            </div>
          
            </div>
        
     </div>
        ';
    $arqam_projects_markup .='';
return $arqam_projects_markup;

}
add_shortcode( 'arqam_projects', 'arqam_projects_shortcodes' );