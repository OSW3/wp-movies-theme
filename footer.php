<?php
/**
 * The template for displaying the footer
 */
?>

    </div><!-- End #main-content -->

<!-- #main-footer -->
<footer id="main-footer" class="main-footer">
    <div class="container">

        <div class="footer-nav">
            <div class="row">

                <div class="col-3">
                    <h4>About Us</h4>
                    <!-- Description de notre entreprise -->
                    <!-- <?= do_shortcode('[about_shortcode class="test" truc="bidule"]') ?> -->
                    <?= do_shortcode('[about_shortcode]Ceci est le contenu du shortcode !![/about_shortcode]') ?>
                </div>

                <div class="col-3">
                    <h4>Navigation</h4>
                    <!-- Menu-footer -->
                </div>

                <div class="col-3">
                    <h4>Hot news</h4>
                    <!-- 3 derniers articles du blog -->
                </div>

                <div class="col-3">
                    <h4>Get in touch</h4>
                    <!-- Form de contact -->
                    <?= do_shortcode('[contact-form-7 id="14" title="Contact form 1"]') ?>
                </div>

            </div>
        </div>

        <div class="footer-copyright">
            &copy; <?= date("Y") ?> <?= bloginfo('name') ?>
        </div>

    </div>
</footer><!-- End #main-footer -->

<?php wp_footer() ?>

</body>
</html>