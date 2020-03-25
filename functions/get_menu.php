<?php 


function get_menu( $menu_name )
{
    $output = [];

    $menu_items = wp_get_nav_menu_items($menu_name);

    if ($menu_items)
    {
        foreach ($menu_items as $item)
        {
            array_push($output, [
                'id' => $item->ID,
                'title' => $item->title,
                'url' => $item->url,
            ]);
        }
    }

    return $output;
}