<?php

function create_pages() {

    // Création des pages
    $pages = [

        // - Contact
        [
            'post_type'     => "page",
            'post_title'    => "Nous contacter",
            'post_name'     => "contact",
            'post_content'  => "le contenu de la page",
            'post_status'   => "publish",
            'post_author'   => 1,
            'is_homepage'   => false
        ],

        // - Accueil
        [
            'post_type'     => "page",
            'post_title'    => "Accueil",
            'post_name'     => "homepage",
            'post_content'  => "le contenu de la page",
            'post_status'   => "publish",
            'post_author'   => 1,
            'is_homepage'   => true
        ],

        // - Mentions Legal
        [
            'post_type'     => "page",
            'post_title'    => "Mentions Légale",
            'post_name'     => "terms",
            'post_content'  => "le contenu de la page",
            'post_status'   => "publish",
            'post_author'   => 1,
            'is_homepage'   => false
        ]
    ];

    foreach ($pages as $page)
    {
        // Check if page exists
        $page_exists    = get_page_by_title($page['post_title']);
        $page_id        = $page_exists->ID ?? null;

        if ($page_id === null)
        {
            // Création de la page
            wp_insert_post($page);
        }

        // Define page as Homepage
        if ($page_id != null && $page['is_homepage'])
        {
            update_option( 'page_on_front', $page_id );
            update_option( 'show_on_front', 'page' );
        }
    }
}
add_action('after_switch_theme', "create_pages");
