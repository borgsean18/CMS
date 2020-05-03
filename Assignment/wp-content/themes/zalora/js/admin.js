/* -----------------------------------------------------------------------------
 * Page Template Meta-box
 * -------------------------------------------------------------------------- */
;(function( $, window, document, undefined ){
	"use strict";
	
	$( document ).ready( function () {
        $(function() {
            if ($('input[name=post_format]:checked', '#post-formats-select').val() == 0) {
                $("#shadowfiend_format_options").hide();
            }else {
                var value = $('input[name=post_format]:checked', '#post-formats-select').val(); 
                $("#shadowfiend_format_options").show();
                if (value == "gallery"){
                    $("#shadowfiend_media_embed_code_post_description").parents(".rwmb-field").css("display", "none");
                    $("#shadowfiend_image_upload_description").parents(".rwmb-field").css("display", "none");
                    $("#shadowfiend_gallery_content_description").parents(".rwmb-field").css("display", "block");
                    $("#shadowfiend_popup_frame_description").parents(".rwmb-field").css("display", "none");
                }else if ((value == "video")||(value == "audio")){
                    $("#shadowfiend_media_embed_code_post_description").parents(".rwmb-field").css("display", "block");
                    $("#shadowfiend_image_upload_description").parents(".rwmb-field").css("display", "none");
                    $("#shadowfiend_gallery_content_description").parents(".rwmb-field").css("display", "none");
                    $("#shadowfiend_popup_frame_description").parents(".rwmb-field").css("display", "block");
                }else if (value == "image"){
                    $("#shadowfiend_media_embed_code_post_description").parents(".rwmb-field").css("display", "none");
                    $("#shadowfiend_image_upload_description").parents(".rwmb-field").css("display", "block");
                    $("#shadowfiend_gallery_content_description").parents(".rwmb-field").css("display", "none");
                    $("#shadowfiend_popup_frame_description").parents(".rwmb-field").css("display", "none");
                }
            }
            $('#post-formats-select input').on('change', function() { 
                var value = $('input[name=post_format]:checked', '#post-formats-select').val(); 
                if (value == 0){
                    $("#shadowfiend_format_options").hide();
                }else {
                    $("#shadowfiend_format_options").show();
                } 
                if (value == "gallery"){
                    $("#shadowfiend_media_embed_code_post_description").parents(".rwmb-field").css("display", "none");
                    $("#shadowfiend_image_upload_description").parents(".rwmb-field").css("display", "none");
                    $("#shadowfiend_gallery_content_description").parents(".rwmb-field").css("display", "block");
                    $("#shadowfiend_popup_frame_description").parents(".rwmb-field").css("display", "none");
                }else if ((value == "video")||(value == "audio")){
                    $("#shadowfiend_media_embed_code_post_description").parents(".rwmb-field").css("display", "block");
                    $("#shadowfiend_image_upload_description").parents(".rwmb-field").css("display", "none");
                    $("#shadowfiend_gallery_content_description").parents(".rwmb-field").css("display", "none");
                    $("#shadowfiend_popup_frame_description").parents(".rwmb-field").css("display", "block");
                }else if (value == "image"){
                    $("#shadowfiend_media_embed_code_post_description").parents(".rwmb-field").css("display", "none");
                    $("#shadowfiend_image_upload_description").parents(".rwmb-field").css("display", "block");
                    $("#shadowfiend_gallery_content_description").parents(".rwmb-field").css("display", "none");
                    $("#shadowfiend_popup_frame_description").parents(".rwmb-field").css("display", "none");
                }
            });
        });
	} );
})( jQuery, window , document );