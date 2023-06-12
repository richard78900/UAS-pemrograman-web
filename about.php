<?php

include './app/controller/aboutPageController.php';

$authors = getAllAuthors();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>About - Queker</title>
        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Roboto:wght@300&display=swap"
            rel="stylesheet"
        />
        <!-- Icon -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
            integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <!-- Custom CSS -->
        <link rel="stylesheet" href="./css/about.css" />
    </head>
    <body>
        <!-- Navbar -->
        <header>
            <div class="navbar">
                <div class="container">
                    <div class="navbar-logo">Que<span>ker</span></div>
                    <div class="navbar-wrapper">
                        <div class="burger-exit bi bi-x"></div>
                        <div class="navbar-menu">
                            <a href="./index.php">Halaman Utama</a>
                            <a href="#" class="active">Tentang</a>
                            <a href="index.php#product1">Produk</a>
                            <a href="index.php#order1">Pesan</a>
                        </div>
                    </div>
                    <div class="burger bi bi-list"></div>
                </div>
            </div>
        </header>
        <!-- End navbar -->

        <!-- About -->
        <section id="about1" style="height: 1px"></section>
        <section class="about" id="about">
            <div class="container">
                <div class="row1">
                    <p class="label">Tentang kami</p>
                    <h3 class="heading">
                        Empat orang teman dengan kecintaan yang sama terhadap
                        kue dan berkomitmen memberikan pengalaman yang luar
                        biasa bagi pelanggan kami.
                    </h3>
                </div>
                <div class="row2">
                    <?php    
                        foreach ($authors as $item) {
                            echo '<div class="about container row2">';
                            echo '<div class="img-box"><div class="detail"><a href="#">' . $item['name'] . '</a></div><img src="images/' . $item['image'] . '" alt="" /></div>';
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </section>
        <!-- End about -->

        <!-- Custom JS -->
        <script type="module" src="./js/about.js"></script>
    </body>
</html>
