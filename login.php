<?php

include "./app/controller/authController.php"; 
include "./app/controller/loginPageController.php";

checkSessionExistense();

if (isset($_POST["login"])) {
    // The login button was clicked
    $username = $_POST["username"];
    $password = $_POST["password"];

    login($username, $password);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta author="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
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
        <!-- SWA2 -->
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="./css/login.css" />
        <title>Queker - Admin Login</title>
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
                            <a href="index.php">Halaman Utama</a>
                            <!-- <a href="about.php">Tentang</a>
                            <a href="index.php#product1">Produk</a>
                            <a href="index.php#order1">Pesan</a> -->
                        </div>
                    </div>
                    <div class="burger bi bi-list"></div>
                </div>
            </div>
        </header>
        <!-- End navbar -->

        <!-- Login form -->
        <section style="height: 1px"></section>
        <section class="login-form section-margin" id="login-form">
            <div class="container">
                <div class="row1">
                    <div class="title-section">
                        <p class="label">Halo, Admin!</p>
                        <h3 class="heading">
                            Silakan login menggunakan kredensial Anda untuk lanjut ke halaman Admin.
                        </h3>
                    </div>
                </div>
                <div class="row2">
                    <form action="" method="POST" class="form-group">
                        <input
                            type="text"
                            name="username"
                            id="username"
                            placeholder="Masukkan Username!"
                        />
                        <input
                            type="password"
                            name="password"
                            id="password"
                            placeholder="Masukkan Password!"
                        />
                        <div class="btn-wrap">
                            <button
                                type="submit"
                                class="btn-contact"
                                id="btn-login"
                                name="login"
                            >
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End login form -->

        <!-- Footer -->
        <div class="section-margin">
        </div>
        <!-- End footer -->

        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-- SWA2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
        <!-- Custom JS -->
        <script type="module" src="./js/login.js"></script>
    </body>
</html>
