<?php


// Go Daddy Badge
function badge_shortcode($atts) {
    extract(shortcode_atts(array(
        'from' => 'from',
        'theme'=> 'theme'
    ), $atts));
    
    // check what source user entered
    switch ($from) {
        case 'godaddy':
            return '<div data-pro-badge-shopper-uuid=b96357fa-c86a-43ce-97d6-01196d0b2143 data-pro-badge-mode=dark style="width:200px"></div> <script defer src="https://pro.godaddy.com/static/js/badge.js"></script>';
            break;
        case 'buymeacoffee':
        switch ($theme){
        	case 'dark':
        	return '<style>.bmc-button img{width: 27px !important;margin-bottom: 1px !important;box-shadow: none !important;border: none !important;vertical-align: middle !important;}.bmc-button{line-height: 36px !important;height:37px !important;text-decoration: none !important;display:inline-flex !important;color:#ffffff !important;background-color:#000000 !important;border-radius: 3px !important;border: 1px solid transparent !important;padding: 1px 9px !important;font-size: 22px !important;letter-spacing: 0.6px !important;box-shadow: 0px 1px 2px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;margin: 0 auto !important;font-family:\'Cookie\', cursive !important;-webkit-box-sizing: border-box !important;box-sizing: border-box !important;-o-transition: 0.3s all linear !important;-webkit-transition: 0.3s all linear !important;-moz-transition: 0.3s all linear !important;-ms-transition: 0.3s all linear !important;transition: 0.3s all linear !important;}.bmc-button:hover, .bmc-button:active, .bmc-button:focus {-webkit-box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;text-decoration: none !important;box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;opacity: 0.85 !important;color:#ffffff !important;}</style><link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet"><a class="bmc-button" target="_blank" href="https://www.buymeacoffee.com/72oOgzX8K"><img src="https://www.buymeacoffee.com/assets/img/BMC-btn-logo.svg" alt="Buy me a coffee"><span style="margin-left:5px">Buy me a coffee</span></a>';
        	case 'light':
        	return '<style>.bmc-button img{width: 27px !important;margin-bottom: 1px !important;box-shadow: none !important;border: none !important;vertical-align: middle !important;}.bmc-button{line-height: 36px !important;height:37px !important;text-decoration: none !important;display:inline-flex !important;color:#000000 !important;background-color:#FFFFFF !important;border-radius: 3px !important;border: 1px solid transparent !important;padding: 1px 9px !important;font-size: 22px !important;letter-spacing: 0.6px !important;box-shadow: 0px 1px 2px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;margin: 0 auto !important;font-family:\'Cookie\', cursive !important;-webkit-box-sizing: border-box !important;box-sizing: border-box !important;-o-transition: 0.3s all linear !important;-webkit-transition: 0.3s all linear !important;-moz-transition: 0.3s all linear !important;-ms-transition: 0.3s all linear !important;transition: 0.3s all linear !important;}.bmc-button:hover, .bmc-button:active, .bmc-button:focus {-webkit-box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;text-decoration: none !important;box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;opacity: 0.85 !important;color:#000000 !important;}</style><link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet"><a class="bmc-button" target="_blank" href="https://www.buymeacoffee.com/72oOgzX8K"><img src="https://www.buymeacoffee.com/assets/img/BMC-btn-logo.svg" alt="Buy me a coffee"><span style="margin-left:5px">Buy me a coffee</span></a>';
        }
        	break;
     break;
    }
}
add_shortcode('badge', 'badge_shortcode');


function footer_social_icons_shortcode(){
    return '<h4 class="text-uppercase mb-4">On the Web</h4>
    <ul class="list-inline mb-0">
      <li class="list-inline-item">
        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
          <i class="fab fa-fw fa-twitter"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
          <i class="fab fa-fw fa-linkedin"></i>
        </a>
      </li>
       <li class="list-inline-item">
        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
          <i class="fab fa-fw fa-medium"></i>
        </a>
      </li>
       </li>
       <li class="list-inline-item">
        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
          <i class="fab fa-fw fa-git"></i>
        </a>
      </li>
    </ul>';
} 
add_shortcode('footer-social', 'footer_social_icons_shortcode');

?>
