<?php

function show_adminbar()
{
    show_admin_bar(false);
}
add_action('after_setup_theme', "show_adminbar");