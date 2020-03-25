<?php

function shortcode_aboutus($attr, $content)
{
    var_dump( $content );

    return "Lorem ipsum bla bla bla....";
}
add_shortcode('about_shortcode', "shortcode_aboutus");