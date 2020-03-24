<?php

function add_bootstrap()
{
    if (!is_admin())
    {
        // Bootstrap CSS
        wp_enqueue_style(
            'bootstrap',                                                                // Nom de la ressource
            "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", // Adresse de la ressource
            [],                                                                         // Liste des dépendances de la ressource
            "4.4.1"                                                                     // Numero de version de la ressource
        );

        // Bootstrap JS
        wp_enqueue_script(
            'bootstrap',                                                                // Nom de la ressource
            "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",   // Adresse de la ressource
            ["jquery-latest", "popperjs"],                                              // Liste des dépendances de la ressource
            "4.4.1",                                                                    // Numero de version de la ressource
            true                                                                        // True pour ajouter les script en pied de page du site
        );

        // PopperJS
        wp_enqueue_script(
            'popperjs',                                                                 // Nom de la ressource
            "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",     // Adresse de la ressource
            [],                                                                         // Liste des dépendances de la ressource
            "1.16.0",                                                                   // Numero de version de la ressource
            true                                                                        // True pour ajouter les script en pied de page du site
        );

        // Jquery
        wp_enqueue_script(
            'jquery-latest',                                                            // Nom de la ressource
            "https://code.jquery.com/jquery-3.4.1.min.js",                              // Adresse de la ressource
            [],                                                                         // Liste des dépendances de la ressource
            "3.4.1",                                                                    // Numero de version de la ressource
            true                                                                        // True pour ajouter les script en pied de page du site
        );
    }
}

add_action('wp_loaded', "add_bootstrap");