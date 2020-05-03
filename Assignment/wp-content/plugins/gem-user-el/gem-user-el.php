<?php
    /*
    Plugin Name: Gem User El
    Plugin URI: http://shadowfiend-design.info/gem
    Description: Display the User El for the author box
    Author: Shadowfiend
    Version: 1.0
    Author URI: http://shadowfiend-design.info
    */
    if ( ! function_exists( 'gem_contact_data' ) ) {  
        function gem_contact_data($contactmethods) {
        
            unset($contactmethods['aim']);
            unset($contactmethods['yim']);
            unset($contactmethods['jabber']);
            $contactmethods['publicemail'] = 'Public Email';
            $contactmethods['twitter'] = 'Twitter Username';
            $contactmethods['facebook'] = 'Facebook URL';
            $contactmethods['youtube'] = 'Youtube Username';
            $contactmethods['googleplus'] = 'Google+ (Entire URL)';
             
            return $contactmethods;
        }
    }
    add_filter('user_contactmethods', 'gem_contact_data');
?>