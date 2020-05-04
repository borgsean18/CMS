<?php
 function dogimage_function() {
    return '<img src="https://assets.publishing.service.gov.uk/government/uploads/system/uploads/image_data/file/51370/s960_Dog-Microchipping-April_2016.jpg" 
   alt="dog" width="150" />';
}

add_shortcode('dogimage', 'dogimage_function');


function sampleTitle_function() {
    return '<h2>Welcome to my page of shortcodes!</h2>';
}

add_shortcode('sampleTitle', 'sampleTitle_function');


function sampleText_function() {
    return '<p>Everything that is displayed on this page is displayed with the use
    of shortcodes. I created these short codes myself through <u>functions.php</u></p>';
}

add_shortcode('sampleText', 'sampleText_function');


function catImage_function() {
    return '<img src="https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/article_thumbnails/other/cat_relaxing_on_patio_other/1800x1200_cat_relaxing_on_patio_other.jpg" 
    alt="cat" width="150" />';
}

add_shortcode('catImage', 'catImage_function');


function blogPost_function() {
    return '<p>We provide the latest movies. Purchase a ticket and snack and enjoy the movie.</p>';
}

add_shortcode('blogPost', 'blogPost_function');


function descText_function() {
    return '<p>The dog and cat images above are both displayed through a shortcode each!</p>';
}

add_shortcode('descText', 'descText_function');


function moreDescText_function() {
    return '<p>After creating the function in <u>functions.php</u> I go to the page I want to use the shortcode in,
    and I enter the shortcode I created. That shortcode displays the content you are seeing here in the front end of the website.</p>';
}

add_shortcode('moreDescText', 'moreDescText_function');
?>

