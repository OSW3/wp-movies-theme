<?php
/**
 * The template for displaying all single posts and attachments
 */
the_post();
?>
<?php get_header() ?>
<div class="container">

    <h1><?= get_the_title() ?></h1>

    <div class="post_content">
        <?php the_content() ?>
    </div>

</div>
<?php get_footer() ?>
