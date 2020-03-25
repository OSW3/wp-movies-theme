<?php 
/**
 * Template Name: Template Movies
 */
$args = [
    "post_type" => "movie"
];
$query = new WP_Query($args);
?>
<?php get_header() ?>
<div class="container">
    <h1><?= get_the_title() ?></h1>

    <?php if($query->have_posts()): ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Critique</th>
                <th>Voir</th>
            </tr>
        </thead>
        <tbody>

            <?php while($query->have_posts()): $query->the_post(); ?>
            <tr>
                <td><?= get_the_title() ?></td>
                <td><?= get_the_content() ?></td>
                <td><a href="<?= get_the_permalink() ?>">Voir</a></td>
            </tr>
            <?php endwhile; ?>

        </tbody>
    </table>
    <?php else: ?>
        <div class="alert alert-warning">
            Il n'y a aucun post !
        </div>
    <?php endif; ?>
</div>
<?php get_footer() ?>