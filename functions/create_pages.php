<?php

function create_pages() {

    $page_title = "Accueil";

    // Check if page exists
    $page_exists    = get_page_by_title($page_title);
    $page_id        = $page_exists->ID ?? null;

    if ($page_id === null)
    {
        // Definition des paramètres de la pages
        $page = [
            'post_type'     => "page",
            'post_title'    => $page_title,
            'post_name'     => "homepage",
            'post_content'  => "le contenu de la page",
            'post_status'   => "publish",
            'post_author'   => 1,
        ];
    
        // Création de la page
        wp_insert_post($page);
    }
}
add_action('after_switch_theme', "create_pages");
