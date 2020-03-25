<?php
/**
 * Template Name: Tmpl Contact
 */
?>

<?php get_header() ?>
<div class="container">
    <div class="row">
        <div class="col-4 offset-4">

            <h1>Contact</h1>

            <?= do_shortcode('[contact-form-7 id="14" title="Contact form 1"]') ?>

        </div>
    </div>
</div>
<?php get_footer() ?>