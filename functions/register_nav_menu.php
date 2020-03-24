<?php

function add_register_nav_menu()
{
    // active la gestion des menus
    register_nav_menu("fake-menu", "Fake Menu");
}
add_action('init', "add_register_nav_menu");