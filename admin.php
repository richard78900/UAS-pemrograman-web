<?php

include "./app/controller/authController.php"; 
include "./app/controller/adminPageController.php";

checkSessionExistense();

if (isset($_POST["logout"])) {
    // The logout button was clicked
    $q = $_POST["q"];

    logout($q);
}

$countProducts = countAllProducts();
$countOrders = countAllOrders();
$countUsers = countAllUsers();

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
        <link rel="stylesheet" href="./css/admin.css" />
        <title>Queker - Admin</title>
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
                            <form action="" method="POST">
                                <input type="hidden" name="q" value="q">
                                <button type="submit" name="logout">Logout</button>
                            </form>
                            <!-- <a href="about.php">Tentang</a> -->
                            <!-- <a href="index.php#product1">Produk</a> -->
                            <!-- <a href="index.php#order1">Pesan</a> -->
                        </div>
                    </div>
                    <div class="burger bi bi-list"></div>
                </div>
            </div>
        </header>
        <!-- End navbar -->

        <!-- Welcome -->
        <section id="order1" style="height: 1px"></section>
        <section class="order section-margin" id="order">
            <div class="container">
                <div class="row1">
                    <div class="title-section">
                        <p class="label">Halo, <?php echo $_SESSION['username'] ?>!</p>
                        <h3 class="heading">
                            Selamat datang di halaman Admin.
                        </h3>
                    </div>
                </div>
                <!-- <div class="row2">
                    <form action="" method="POST" class="form-group" enctype="multipart/form-data">
                        <input
                            type="text"
                            name="nama"
                            id="nama"
                            placeholder="Masukkan nama produk!"
                        />
                        <input
                            type="number"
                            name="stok"
                            id="stok"
                            placeholder="Masukkan stok!"
                        />
                        <input
                            type="number"
                            name="harga"
                            id="harga"
                            placeholder="Masukkan harga!"
                        />
                        <input
                            type="file"
                            name="img"
                            id="img"
                        />
                        <div class="btn-wrap">
                            <button
                                type="submit"
                                class="btn-contact"
                                id="btn-order"
                                name="submit-product"
                            >
                                Add
                            </button>
                        </div>
                    </form>
                </div> -->
                <div class="row2">
                    <a href="./daftarProduct.php">
                        <h3>Daftar Produk</h3>
                        <h1>
                            <?php 
                                foreach ($countProducts as $item) {
                                    echo $item['count'];
                                }
                            ?>
                        </h1>
                    </a>
                    <a href="./daftarOrder.php">
                        <h3>Daftar Order</h3>
                        <h1>
                            <?php 
                                foreach ($countOrders as $item) {
                                    echo $item['count'];
                                }
                            ?>
                        </h1>
                    </a>
                    <a href="./daftarUser.php">
                        <h3>Daftar User</h3>
                        <h1>
                            <?php 
                                foreach ($countUsers as $item) {
                                    echo $item['count'];
                                }
                            ?>
                        </h1>
                    </a>
                </div>
            </div>
        </section>
        <!-- End welcome -->

        <!-- Footer -->
        <div class="section-margin">
        </div>
        <!-- End footer -->

        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-- SWA2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
        <!-- Custom JS -->
        <script type="module" src="./js/admin.js"></script>
    </body>
</html>