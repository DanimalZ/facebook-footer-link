<?php

function ffl_add_footer($content){

    global $ffl_options;

    if (array_key_exists('enable', $ffl_options) == false) {
    $ffl_options['enable'] = 0;
    }
    if (array_key_exists('show_in_feed', $ffl_options) == false) {
        $ffl_options['show_in_feed'] = 0;
    }

    $footer_output = '<hr>';
    $footer_output .= '<div class=" footer_content">';
    $footer_output .= '<span class="dashicons dashicons-facebook"></span> Find me On <a style="color:'.$ffl_options['link_color'].'" target="_blank" href="'.$ffl_options['facebook_url'].'">Facebook</a>';
    $footer_output .= '<div>';


    if($ffl_options['show_in_feed']){
        if(is_single() || is_home() && $ffl_options['enable']){
            return $content. $footer_output;
        }

    } else{
        if(is_single() && $ffl_options['enable']){
            return $content. $footer_output;
        }

    }


    return $content;
}

add_filter('the_content', 'ffl_add_footer');
