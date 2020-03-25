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

    <table class="table">
        <tbody>
            <tr>
                <td>Director</td>
                <td><?= get_post_meta( get_the_ID(), 'director', true ) ?></td>
            </tr>
        </tbody>
    </table>

</div>
<?php get_footer() ?>
