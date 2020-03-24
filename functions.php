<?php 
/**
 * Collection of themes functions
 */

$fn_dir = get_template_directory()."/functions/";
$fn_scan = scandir($fn_dir);

foreach ($fn_scan as $file)
{
    if (preg_match("/\.php$/", $file))
    {
        include_once $fn_dir.$file;
    }
}
