<?php 
/**
 * Template Name: Index
 * --
 * The main template file
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <!-- #main-header -->
    <header id="main-header" class="main-header">
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <a class="navbar-brand" href="#">TitreDuSite</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">xxxxx</a>
                        </li>
                    </ul>
                </div>

            </nav>

        </div>
    </header><!-- End #main-header -->

    <!-- #main-content -->
    <div id="main-content" class="main-content">

    </div><!-- End #main-content -->

    <!-- #main-footer -->
    <footer id="main-footer" class="main-footer">
        <div class="container">

            <div class="footer-nav">
                <div class="row">

                    <div class="col-3">
                        <h4>About Us</h4>
                        <!-- Description de notre entreprise -->
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
                        <h4>Keep in touch</h4>
                        <!-- Form de contact -->
                    </div>

                </div>
            </div>

            <div class="footer-copyright">
                &copy; <?= date("Y") ?> xxxxxTitreDuSite
            </div>

        </div>
    </footer><!-- End #main-footer -->

</body>

</html>