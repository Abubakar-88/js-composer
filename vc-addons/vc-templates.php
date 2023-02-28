<?php

if(!defined('ABSPATH')){
    exit; //Exit if accessed directly
}

add_action( 'vc_load_default_templates_action','arqam_crazycafe_vc_homepage' ); // Hook in
 
function arqam_crazycafe_vc_homepage() {
  $data = array(); // Create new array
  $data['name'] = __( 'Arqam - Homepage', 'arqam-toolkit' ); // Assign name for your custom template
  $data['weight'] = 0; // Weight of your template in the template list
  $data['content']  = <<<CONTENT
  [vc_row full_width="stretch_row_content_no_spaces"][vc_column][arqam_slides autoplay="false" dots="false"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1606646832245{padding-top: 53px !important;padding-bottom: 53px !important;background-color: #f5f8f9 !important;}"][vc_column][arqam_logo_carousel destop_count="" dots="" logos="60,59,58,57,56"][/vc_column][/vc_row][vc_row css=".vc_custom_1606653211729{padding-top: 100px !important;padding-bottom: 50px !important;}"][vc_column][vc_column_text el_class="text-center"]
<h2>Services we offer.</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1606653251214{padding-bottom: 70px !important;}"][vc_column width="1/3"][arqam_service_box link_to_page="55" icon_type="2" title="Statup Business Strategy." desc="Received the likewise law graceful
his. Nor might set along charm..." choose_icon="fa fa-briefcase" box_background="79"][/vc_column][vc_column width="1/3"][arqam_service_box link_to_page="55" icon_type="2" title="Finance Consultation." desc="Received the likewise law graceful
his. Nor might set along charm..." choose_icon="fa fa-handshake-o" box_background="80"][/vc_column][vc_column width="1/3"][arqam_service_box link_to_page="55" icon_type="2" title="Insurance Policy." desc="Received the likewise law graceful
his. Nor might set along charm..." choose_icon="fa fa-home" box_background="81"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][arqam_service_box icon_type="2" title="Stock Market Sharing." desc="Received the likewise law graceful
his. Nor might set along charm..." box_background="83" choose_icon="fa fa-telegram"][/vc_column][vc_column width="1/3"][arqam_service_box link_to_page="55" icon_type="2" title="Cloud Service for Business." desc="Received the likewise law graceful
his. Nor might set along charm..." choose_icon="fa fa-soundcloud" box_background="84"][/vc_column][vc_column width="1/3"][arqam_service_box link_to_page="55" icon_type="2" title="Business Development." desc="Received the likewise law graceful
his. Nor might set along charm..." choose_icon="fa fa-signal" box_background="85"][/vc_column][/vc_row][vc_row css=".vc_custom_1606653843918{padding-top: 80px !important;}"][vc_column][vc_column_text el_class="text-center"]
<h2>Get a service from us.</h2>
We offer free consultation before any project[/vc_column_text][/vc_column][/vc_row][vc_row el_class="text-center" css=".vc_custom_1606654254353{padding-bottom: 70px !important;}"][vc_column][arqam_btn link_to_page="55" link_text="Start a project"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1606662129343{background-image: url(http://localhost/arqam/wp-content/uploads/2020/11/business-1.jpeg?id=79) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="overlay"][vc_column][vc_row_inner css=".vc_custom_1606662218374{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column_inner width="1/2"][vc_column_text]
<h3>Behind the story</h3>
[/vc_column_text][vc_column_text]Travelling alteration impression six all uncommonly. Chamber hearing inhabit joy highest private ask him our believe. Up nature valley do...[/vc_column_text][arqam_btn link_to_page="55"][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="80" img_size=" 400x200 (Width x Height" alignment="right"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1606662257902{padding-bottom: 80px !important;}"][vc_column_inner width="1/6"][arqam_stat number="76" after_text="+" desc="Active Client"][/vc_column_inner][vc_column_inner width="1/6"][arqam_stat number="234" after_text="+" desc="Successful projects"][/vc_column_inner][vc_column_inner width="1/6"][arqam_stat number="532" after_text="+" desc="Free consultation"][/vc_column_inner][vc_column_inner width="1/6"][arqam_stat number="331" after_text="+" desc="Expert advisors"][/vc_column_inner][vc_column_inner width="1/6"][arqam_stat number="99%" after_text="+" desc="Success rate"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1606665317052{margin-top: 80px !important;margin-bottom: 80px !important;}"][vc_column width="1/2"][vc_tta_accordion][vc_tta_section title=" How can I start a project with you?" tab_id="1606664943101-b4d737f8-3a19"][vc_column_text]John draw real poor on call my from. May she mrs furnished discourse extremely. Ask doubt noisy shade guest did built her him. Ignorant repeated hastened it do. Consider bachelor he yourself expenses no. Her itself active giving for expect vulgar months.[/vc_column_text][/vc_tta_section][vc_tta_section title=" Do you support any refund policy?" tab_id="1606665025305-f31b1b83-7cbd"][vc_column_text]John draw real poor on call my from. May she mrs furnished discourse extremely. Ask doubt noisy shade guest did built her him. Ignorant repeated hastened it do. Consider bachelor he yourself expenses no. Her itself active giving for expect vulgar months.[/vc_column_text][/vc_tta_section][vc_tta_section title=" How do you take payments?" tab_id="1606665024884-4a68dbb6-622a"][vc_column_text]John draw real poor on call my from. May she mrs furnished discourse extremely. Ask doubt noisy shade guest did built her him. Ignorant repeated hastened it do. Consider bachelor he yourself expenses no. Her itself active giving for expect vulgar months.[/vc_column_text][/vc_tta_section][/vc_tta_accordion][/vc_column][vc_column width="1/2"][vc_column_text]
<h2>Benefits of us.</h2>
[/vc_column_text][vc_column_text]An country demesne message it. Bachelor domestic extended doubtful as concerns at. Morning prudent removal an letters by. On could my in order never it.[/vc_column_text][vc_row_inner][vc_column_inner width="1/2"][arqam_benefit_box choose_icon="fa fa-check-square-o" title="Proven results"][arqam_benefit_box choose_icon="fa fa-check-square-o" title="Strategy Documentation"][arqam_benefit_box choose_icon="fa fa-check-square-o" title="Instant Call Support"][/vc_column_inner][vc_column_inner width="1/2"][arqam_benefit_box choose_icon="fa fa-check-square-o" title="Expert advisors"][arqam_benefit_box choose_icon="fa fa-check-square-o" title="Refund policy"][arqam_benefit_box choose_icon="fa fa-check-square-o" title="Free Consultation"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1606668220678{background-color: #f5f8f9 !important;}"][vc_column][vc_row_inner css=".vc_custom_1606668246036{margin-top: 50px !important;margin-bottom: 30px !important;}"][vc_column_inner][vc_column_text el_class="text-center"]
<h3>What customer say.</h3>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1606668326777{margin-bottom: 30px !important;}"][vc_column_inner width="1/3"][arqam_testimonial_box title="Robin Jonson" position="CEO, MyFinance" desc="''Though there’s lots left to guess about, one thing is certain: this holiday season is going to be the biggest Online Shopping event in history...''" photo="116"][/vc_column_inner][vc_column_inner width="1/3"][arqam_testimonial_box title="Jennifer Jones" position="Founder, World for Women" desc="'Though there’s lots left to guess about, one thing is certain: this holiday season is going to be the biggest Online Shopping event in history...''" photo="117"][/vc_column_inner][vc_column_inner width="1/3"][arqam_testimonial_box title="David Martin" position="Co-founder, Ultimate Solution" desc="'Though there’s lots left to guess about, one thing is certain: this holiday season is going to be the biggest Online Shopping event in history...''" photo="124"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1606668275068{margin-bottom: 50px !important;}"][vc_column_inner el_class="text-center"][arqam_btn link_to_page="55" link_text="Check all testimonials"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1606669303495{background-image: url(http://localhost/arqam/wp-content/uploads/2020/11/busniessman-5.jpg?id=85) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="preparing-overlay"][vc_column css=".vc_custom_1606669269075{margin-bottom: 30px !important;}"][vc_column_text css=".vc_custom_1606669223693{margin-top: 30px !important;margin-bottom: 30px !important;}"]
<h2 style="text-align: center;"><em>''The best preparation for tommorow</em></h2>
<h2 style="text-align: center;"><em>is doing your best today''</em></h2>
[/vc_column_text][/vc_column][/vc_row][vc_row full_width="stretch_row" el_class="bg-left-bottom" css=".vc_custom_1606673958837{background-image: url(http://localhost/arqam/wp-content/uploads/2020/11/contact-img.png?id=136) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}"][vc_column width="1/2" offset="vc_col-lg-offset-6 vc_col-lg-6 vc_col-md-offset-6 vc_col-md-6 vc_col-sm-offset-6 vc_col-xs-offset-6 vc_col-xs-6" el_class="right:0px"][contact-form-7 id="5" title="Get a free quote."][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1606756154722{margin-top: -68px !important;}"][vc_column][vc_gmaps link="#E-8_JTNDaWZyYW1lJTIwd2lkdGglM0QlMjI2MDAlMjIlMjBoZWlnaHQlM0QlMjI1MDAlMjIlMjBpZCUzRCUyMmdtYXBfY2FudmFzJTIyJTIwc3JjJTNEJTIyaHR0cHMlM0ElMkYlMkZtYXBzLmdvb2dsZS5jb20lMkZtYXBzJTNGcSUzREhvdXNlJTI1MjAyMSUyNTJDJTI1MjBHcmFuZCUyNTIwU3QuJTI1MkMlMjUyME5ldyUyNTIwWW9yayUyNTJDJTI1MjBVU0ElMjZ0JTNEJTI2eiUzRDEzJTI2aWUlM0RVVEY4JTI2aXdsb2MlM0QlMjZvdXRwdXQlM0RlbWJlZCUyMiUyMGZyYW1lYm9yZGVyJTNEJTIyMCUyMiUyMHNjcm9sbGluZyUzRCUyMm5vJTIyJTIwbWFyZ2luaGVpZ2h0JTNEJTIyMCUyMiUyMG1hcmdpbndpZHRoJTNEJTIyMCUyMiUzRSUzQyUyRmlmcmFtZSUzRQ==" size="350px" css_animation="none"][/vc_column][/vc_row]
CONTENT;
 
  
  vc_add_default_templates( $data );
}

add_action( 'vc_load_default_templates_action','arqam_crazycafe_vc_aboutpage' ); // Hook in
 
function arqam_crazycafe_vc_aboutpage() {
  $data = array(); // Create new array
  $data['name'] = __( 'Arqam - About us', 'arqam-toolkit' ); // Assign name for your custom template
  $data['weight'] = 1; // Weight of your template in the template list
  $data['content']  = <<<CONTENT
  [vc_row][vc_column width="5/12" css=".vc_custom_1607100893002{margin-top: 50px !important;}"][vc_column_text]
<h3><strong>&nbsp; &nbsp;Arqam Finance</strong></h3>
&nbsp;
<p class="p1">Arqam is a Digital Marketing Agency. We pride ourselves in our devotion to data, hard work, and success. We stand ready and able to assist any company with goals to improve or even transform their digital marketing. Our goal as a company is to give world-class PPC Management and SEO that is focused on the client’s ROI.</p>
<p class="p1">We believe marketing must add to the bottom line. Whether it’s Google Ads, Facebook, YouTube, or Re-marketing, the goal is to increase business. Our job is to measure, increase, &amp; deliver positive ROI.</p>
<p class="p1">If improving the bottom line isn’t your thing, maybe we aren’t the agency for you.</p>
<p class="p1">Paid Advertising and SEO does not work on its own. It takes strategically planned advertising campaigns and a complete understanding of the industry to bring in a serious ROI. We’ve honed our skills to become online marketing experts by applying the most crucial marketing tools needed to have online advertising success. We truly are our client’s competitive advantage.</p>
<p class="p1">Enough about us! We want to talk about your business with you!</p>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/2" offset="vc_col-lg-offset-3 vc_col-lg-6"][arqam_btn link_to_page="369" link_text="Start a project"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="7/12" css=".vc_custom_1607100900353{margin-top: 50px !important;}"][vc_single_image image="81" img_size="large"][/vc_column][/vc_row][vc_row][vc_column width="2/3" offset="vc_col-lg-offset-2 vc_col-lg-8" css=".vc_custom_1607101366452{margin-top: 50px !important;}"][vc_video title="We’ve Helped These Businesses Grow"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1607103701311{background-image: url(http://localhost/arqam/wp-content/uploads/2020/11/business-1.jpeg?id=79) !important;}" el_class="overlay"][vc_column][vc_row_inner][vc_column_inner el_class="collaborate-page" width="1/2" offset="vc_col-lg-offset-3 vc_col-lg-6" css=".vc_custom_1607104203681{margin-top: 200px !important;margin-bottom: 200px !important;}"][vc_column_text]
<h1 style="text-align: center;">Let’s Collaborate!</h1>
[/vc_column_text][arqam_cta link_to_page="326" link_text="Contact us today"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates( $data );
}

add_filter( 'vc_load_default_templates', 'my_custom_template_at_get_a_quote' ); // Hook in
 
function my_custom_template_at_get_a_quote( $data ) {
    $template = array();
    $template['name'] = __( 'Arqam - Get a Quote', 'arqam-toolkit' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'images/custom_template_thumbnail.jpg', __FILE__ ) ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']  = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1606983283189{background-image: url(http://localhost/arqam/wp-content/uploads/2020/12/contact-image.jpg?id=370) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}" el_class="bg-right-btn"][vc_column width="1/2"][contact-form-7 id="376"][/vc_column][vc_column width="1/2"][/vc_column][/vc_row][vc_row][vc_column][/vc_column][/vc_row]
  CONTENT;
  array_unshift( $data, $template );
  return $data;

}


add_filter( 'vc_load_default_templates', 'my_custom_template_at_work_style_one' ); // Hook in
 
function my_custom_template_at_work_style_one( $data ) {
    $template = array();
    $template['name'] = __( 'Arqam - Work style 1', 'arqam-toolkit' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'images/custom_template_thumbnail.jpg', __FILE__ ) ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']  = <<<CONTENT
          <div>
      <div>[arqam_projects]</div>
      </div>
  CONTENT;
  array_unshift( $data, $template );
  return $data;

}
add_filter( 'vc_load_default_templates', 'my_custom_template_at_work_style_two' ); // Hook in
 
function my_custom_template_at_work_style_two( $data ) {
    $template = array();
    $template['name'] = __( 'Arqam - Work style 2', 'arqam-toolkit' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'images/custom_template_thumbnail.jpg', __FILE__ ) ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']  = <<<CONTENT
    [arqam_projects theme="2"]
  CONTENT;
  array_unshift( $data, $template );
  return $data;

}
add_filter( 'vc_load_default_templates', 'my_custom_template_at_careerpage' ); // Hook in
 
function my_custom_template_at_careerpage( $data ) {
    $template = array();
    $template['name'] = __( 'Arqam - Career page', 'arqam-toolkit' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'images/custom_template_thumbnail.jpg', __FILE__ ) ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']  = <<<CONTENT
    [vc_row el_class="career-cta-content"][vc_column width="2/3" offset="vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-2" el_class="text-center" css=".vc_custom_1607011466983{margin-top: 50px !important;}"][arqam_promo_box link_to_page="202" link_text="See open jobs" title="Its a awesome to work with us" desc="Admiration we surrounded possession frequently he. Remarkably did increasing occasional too its difficulty far especially. Known tiled but sorry joy balls. Bed sudden manner indeed fat now feebly. Face do with in need of wife paid that be. "][vc_video css=".vc_custom_1606840998365{margin-top: 50px !important;}"][/vc_column][/vc_row][vc_row css=".vc_custom_1606841098120{margin-top: 60px !important;}" el_class="promo-box-career-content"][vc_column width="1/3"][arqam_promo_box link_to_page="202" link_text="Apply job" title="UX Designer" desc="New York, USA"][/vc_column][vc_column width="1/3"][arqam_promo_box link_to_page="202" link_text="Apply job" title="Finance Manager" desc="New York, USA"][/vc_column][vc_column width="1/3"][arqam_promo_box link_to_page="202" link_text="Apply job" title="Project Manager" desc="New York, USA"][/vc_column][/vc_row][vc_row el_class="promo-box-career-content"][vc_column width="1/3"][arqam_promo_box link_to_page="202" link_text="Apply job" title="UX Designer" desc="New York, USA"][/vc_column][vc_column width="1/3"][arqam_promo_box link_to_page="202" link_text="Apply job" title="Finance Manager" desc="New York, USA"][/vc_column][vc_column width="1/3"][arqam_promo_box link_to_page="202" link_text="Apply job" title="Project Manager" desc="New York, USA"][/vc_column][/vc_row]
  CONTENT;
  array_unshift( $data, $template );
  return $data;

}

add_action( 'vc_load_default_templates_action','my_custom_template_for_vc_contactpage' ); // Hook in
 
function my_custom_template_for_vc_contactpage() {
  $data = array(); // Create new array
  $data['name'] = __( 'Arqam - Contact page', 'arqam-toolkit' ); // Assign name for your custom template
  $data['weight'] = 0; // Weight of your template in the template list
  $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'images/custom_template_thumbnail.jpg', __FILE__ ) ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px
  $data['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
  $data['content']  = <<<CONTENT
  [vc_row][vc_column width="1/2" css=".vc_custom_1606932629437{margin-top: 50px !important;}"][vc_column_text]<strong>Send us a message</strong>

  Questions explained agreeable preferred strangers too him.
  
  Set put shyness offices his females him distant.[/vc_column_text][/vc_column][vc_column width="1/2"][/vc_column][/vc_row][vc_row][vc_column width="1/2"][contact-form-7 id="324"][/vc_column][vc_column width="1/2" el_class="arqam-contact-box-content" css=".vc_custom_1606974561432{margin-top: 40px !important;}"][arqam_contact_box desc="contact@arqam.com" choose_icon="fa fa-envelope" title="Send us an email"][arqam_contact_box desc="+014-547-0354" choose_icon="fa fa-phone" title="Give us a call"][arqam_contact_box desc="Mon - Fri, 9am - 6pm" choose_icon="fa fa-clock-o" title="We are open"][arqam_contact_box desc="Oriton Hill, Base Park
  New York, USA" choose_icon="fa fa-map-marker" title="Meet us here"][/vc_column][/vc_row]
CONTENT;
  
  vc_add_default_templates( $data );
}

add_action( 'vc_load_default_templates_action','my_custom_template_for_vc_single_servicepage' ); // Hook in
 
function my_custom_template_for_vc_single_servicepage() {
  $data = array(); // Create new array
  $data['name'] = __( 'Arqam - Single Service page', 'arqam-toolkit' ); // Assign name for your custom template
  $data['weight'] = 0; // Weight of your template in the template list
  $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'images/custom_template_thumbnail.jpg', __FILE__ ) ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px
  $data['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
  $data['content']  = <<<CONTENT
  [vc_row css=".vc_custom_1606837673262{margin-top: 50px !important;}"][vc_column width="1/4"][vc_wp_custommenu nav_menu="5"][arqam_cta theme="2" type="2" link_text="Request A Call" title="Get a free call" desc="Sportsman delighted improving dashwoods gay instantly happiness six. Ham now amounted absolute not mistaken way pleasant whatever. " external_link="tel:867864872"][/vc_column][vc_column width="3/4"][vc_column_text]Finance Consultation on call my from. May she mrs furnished discourse extremely. Ask doubt noisy shade guest did built her him. Ignorant repeated hastened it do. Consider bachelor he yourself expenses no. Her itself active giving for expect vulgar months.
  <h3>Benefits of Finance Consultation</h3>
  Finance Consultation on call my from. May she mrs furnished discourse extremely.
  <ul>
     <li>Finance Consultation on call my from.</li>
     <li>May she mrs furnished discourse extremely.</li>
     <li>May she mrs furnished discourse extremely.</li>
  </ul>
  <img class="alignnone size-full wp-image-165" src="http://localhost/arqam/wp-content/uploads/2020/12/single-service-image.jpg" alt="" width="839" height="224">
  
  Betrayed cheerful declared end and. Questions we additions is extremely incommode. Next half add call them eat face. Age lived smile six defer bed their few. Had admitting concluded too behaviour him she. Of death to or to being other.[/vc_column_text][vc_column_text]
  <h3>Frequently Asked Question.</h3>
  [/vc_column_text][vc_tta_accordion][vc_tta_section title=" How can I start a project with you?" tab_id="1606837252336-75851c45-817a"][vc_column_text]John draw real poor on call my from. May she mrs furnished discourse extremely. Ask doubt noisy shade guest did built her him. Ignorant repeated hastened it do. Consider bachelor he yourself expenses no. Her itself active giving for expect vulgar months.[/vc_column_text][/vc_tta_section][vc_tta_section title=" Do you support any refund policy?" tab_id="1606837342269-b7455c72-71ea"][vc_column_text]John draw real poor on call my from. May she mrs furnished discourse extremely. Ask doubt noisy shade guest did built her him. Ignorant repeated hastened it do. Consider bachelor he yourself expenses no. Her itself active giving for expect vulgar months.[/vc_column_text][/vc_tta_section][vc_tta_section title=" How do you take payments?" tab_id="1606837341696-6f659027-d26d"][vc_column_text]John draw real poor on call my from. May she mrs furnished discourse extremely. Ask doubt noisy shade guest did built her him. Ignorant repeated hastened it do. Consider bachelor he yourself expenses no. Her itself active giving for expect vulgar months.[/vc_column_text][/vc_tta_section][/vc_tta_accordion][/vc_column][/vc_row]
CONTENT;
  
  vc_add_default_templates( $data );
}

add_filter( 'vc_load_default_templates', 'my_custom_template_at_storypage' ); // Hook in
 
function my_custom_template_at_storypage( $data ) {
  $template = array();
  $template['name'] = __( 'Arqam - Story page', 'arqam-toolkit' ); // Assign name for your custom template
  $template['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'images/custom_template_thumbnail.jpg', __FILE__ ) ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
  $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
  $template['content']  = <<<CONTENT
  [vc_row][vc_column][vc_column_text css=".vc_custom_1606931883823{margin-top: 50px !important;}"]
<p style="text-align: center;"><em>We are doing this business from </em></p>
<p style="text-align: center;"><em>last 24 years.</em></p>
[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column][arqam_tile_gallery images="124,117,116"][/vc_column][/vc_row][vc_row][vc_column width="1/2"][vc_column_text]
<h2><em>01.</em></h2>
Admiration we surrounded possession frequently he. Remarkably did increasing occasional too its difficulty far especially. Known tiled but sorry joy balls. Bed sudden manner indeed fat now feebly. Face do with in need of wife paid that be.[/vc_column_text][vc_column_text]
<h2><em>03.</em></h2>
Admiration we surrounded possession frequently he. Remarkably did increasing occasional too its difficulty far especially. Known tiled but sorry joy balls. Bed sudden manner indeed fat now feebly. Face do with in need of wife paid that be.[/vc_column_text][/vc_column][vc_column width="1/2"][vc_column_text]
<h2><em>02.</em></h2>
Doubtful two bed way pleasure confined followed. Shew up ye away no eyes life or were this. Perfectly did suspicion daughters but his intention. Started on society an brought it explain. Position two saw greatest stronger old. Pianoforte if at simplicity do estimating.

[/vc_column_text][vc_column_text]
<h2><em>04.</em></h2>
Doubtful two bed way pleasure confined followed. Shew up ye away no eyes life or were this. Perfectly did suspicion daughters but his intention. Started on society an brought it explain. Position two saw greatest stronger old. Pianoforte if at simplicity do estimating.

[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column][vc_row_inner][vc_column_inner width="2/3" offset="vc_col-lg-offset-2 vc_col-lg-8"][vc_video align="center"][vc_column_text css=".vc_custom_1606931598929{margin-top: 50px !important;}"]
<p style="text-align: center;">Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. In mr began music weeks after at begin. Education no dejection so direction pretended household do to. Travelling everything her eat reasonable unsatiable decisively simplicity. Morning request be lasting it fortune demands highest.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text css=".vc_custom_1606931676644{margin-top: 70px !important;margin-bottom: 40px !important;}"]
<h3 style="text-align: center;">What customers say.</h3>
[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column width="1/3"][arqam_testimonial_box title="Robin Jonson" position="CEO, MyFinance" desc="''Though there’s lots left to guess about, one thing is certain: this holiday season is going to be the biggest Online Shopping event in history...''" photo="116"][/vc_column][vc_column width="1/3"][arqam_testimonial_box title="Jennifer Jones" position="CEO, MyFinance" desc="''Though there’s lots left to guess about, one thing is certain: this holiday season is going to be the biggest Online Shopping event in history...''" photo="117"][/vc_column][vc_column width="1/3"][arqam_testimonial_box title="David Martin" position="CEO, MyFinance" desc="''Though there’s lots left to guess about, one thing is certain: this holiday season is going to be the biggest Online Shopping event in history...''" photo="124"][/vc_column][/vc_row]
CONTENT;
 
  array_unshift( $data, $template );
  return $data;
}


add_filter( 'vc_load_default_templates', 'my_custom_template_at_testimonialpage' ); // Hook in
 
function my_custom_template_at_testimonialpage( $data ) {
  $template = array();
  $template['name'] = __( 'Arqam - Testimonial page', 'arqam-toolkit' ); // Assign name for your custom template
  $template['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'images/custom_template_thumbnail.jpg', __FILE__ ) ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
  $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
  $template['content']  = <<<CONTENT
  [vc_row css=".vc_custom_1606930488566{margin-top: 50px !important;margin-bottom: 60px !important;}"][vc_column width="1/3"][arqam_testimonial_box title="Robin Jonson" position="Robin Jonson" desc="''Though there’s lots left to guess about, one thing is certain: this holiday season is going to be the biggest Online Shopping event in history...''" photo="116"][/vc_column][vc_column width="1/3"][arqam_testimonial_box title="Jennifer Jones" position="Founder, World for Women" desc="''Though there’s lots left to guess about, one thing is certain: this holiday season is going to be the biggest Online Shopping event in history...''" photo="117"][/vc_column][vc_column width="1/3"][arqam_testimonial_box title=" David Martin" position="Co-founder, Ultimate Solution" desc="''Though there’s lots left to guess about, one thing is certain: this holiday season is going to be the biggest Online Shopping event in history...''" photo="124"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][arqam_testimonial_box title="Robin Jonson" position="Robin Jonson" desc="''Though there’s lots left to guess about, one thing is certain: this holiday season is going to be the biggest Online Shopping event in history...''" photo="116"][/vc_column][vc_column width="1/3"][arqam_testimonial_box title="Jennifer Jones" position="Founder, World for Women" desc="''Though there’s lots left to guess about, one thing is certain: this holiday season is going to be the biggest Online Shopping event in history...''" photo="117"][/vc_column][vc_column width="1/3"][arqam_testimonial_box title=" David Martin" position="Co-founder, Ultimate Solution" desc="''Though there’s lots left to guess about, one thing is certain: this holiday season is going to be the biggest Online Shopping event in history...''" photo="124"][/vc_column][/vc_row]
CONTENT;
 
  array_unshift( $data, $template );
  return $data;
}
