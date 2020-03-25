<?php

function create_post_movie()
{
    // Typage du custom post
    $post_type = "movie"; // post, page, revision, media
    $post_label = "Mes films";

    $labels = [
        'name'                  => $post_label,
        'singular_name'         => "Film",
        'menu_name'             => $post_label,
        'name_admin_bar'        => "Les films",
        // 'parent_item_colon'     => "",
        // 'all_items'             => "",
        'add_new_item'          => "Ajout d'un film",
        // 'add_new'               => "Ajouter un film",
        // 'new_item'              => "Ajout d'un film",
        // 'edit_item'             => "",
        // 'update_item'           => "",
        'view_item'             => "Un film",
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
        'supports'      => ['title', 'editor'],
    ];

    register_post_type($post_type, $args);
}
add_action('init', "create_post_movie");


function create_custom_metabox()
{
    add_meta_box(
        "my_custom_metabox",    // ID de la metabox
        "Titre de la metabox",  // Titre
        "show_my_custom_fields" // Callback
    );
}
add_action('add_meta_boxes', "create_custom_metabox");

function show_my_custom_fields($post)
{
    ?>
    <input type="text" name="director" value="<?= get_post_meta($post->ID, 'director', true) ?>">
    <?php
}