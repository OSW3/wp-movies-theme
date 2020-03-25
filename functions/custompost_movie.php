<?php

function create_post_movie()
{
    // Typage du custom post
    $post_type = "movie"; // post, page, revision, media
    $post_label = "Mes films";


    $labels = [
        'name'                  => $post_label,
        // 'singular_name'         => "",
        // 'menu_name'             => "",
        'name_admin_bar'        => "Les films",
        // 'parent_item_colon'     => "",
        // 'all_items'             => "",
        // 'add_new_item'          => "",
        // 'add_new'               => "",
        // 'new_item'              => "",
        // 'edit_item'             => "",
        // 'update_item'           => "",
        // 'view_item'             => "",
        // 'search_items'          => "",
        // 'not_found'             => "",
        // 'not_found_in_trash'    => "",
    ];


    // Parametres du custom post
    $args = [
        
        // Paramatres Minimum
        // --

        // Intitilé dans le menu admin
        'label'         => $post_label,
        // Rendre le type de post accessible dans l'admin
        'public'        => true,


        // Autres parametres
        // --

        'description'   => "Mes critique de films",
        'labels'        => $labels,
    ];

    register_post_type($post_type, $args);
}
add_action('init', "create_post_movie");