<?php
if(!defined('ABSPATH')){
    exit; //Exit if accessed directly
}

//class started
class arqamVCExtendAddonClass {
    function construct() {
        // We sately integrate with VC with this hook
        add_action( 'init', array( $this, 'arqamIntegrateWithVC') );
    }
}

 function arqamIntegrateWithVC(){
    if(!define( 'WPB_VC_VERSION' )){
        add_action('admin_notices', array($this, 'arqamShowVCVersionNotices'));
        return;
    }

    //visual compuser addons.
    include ARQAM_ACC_PATH . '/vc-addons/vc-slides.php';
    include ARQAM_ACC_PATH . '/vc-addons/vc-logo-carousel.php';
    include ARQAM_ACC_PATH . '/vc-addons/vc-service.php';
   include ARQAM_ACC_PATH . '/vc-addons/vc-cta.php';
    include ARQAM_ACC_PATH . '/vc-addons/vc-arqam-btn.php';
    include ARQAM_ACC_PATH . '/vc-addons/vc-stat.php';
   include ARQAM_ACC_PATH . '/vc-addons/vc-testimonial-box.php';
}

 function arqamShowVCVersionNotices(){
    $theme_data = wp_get_theme();
    echo '<div class="notice-warning">
     <p>'.sprintf(__('<strong>%s</strong> recommends <strong><a href="'.esc_url(site_url()). '/wp-admin/
     theme.php?page=tgmpa-install-plugin" target="_blank">Visual Composer
    </a></strong> plugin to be installed and activated on your site.', 'arqam-crazycafe'), $theme_data->get['Name']).'</p>
    
    </div>';
}

//Finaly initialize code
new arqamVCExtendAddonClass();