<?php

include "./app/controller/authController.php"; 
include "./app/controller/daftarProductPageController.php";
include "./app/controller/productController.php";

checkSessionExistense();

$products = getAllProducts();

if (isset($_POST["hapus"])) {
    // The hapus button was clicked
    $product_id = $_POST["product_id"];

    deleteProductByProductId($product_id);
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
        <link rel="stylesheet" href="./css/daftarProduct.css" />
        <title>Queker - Daftar Produk</title>
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
                            <!-- <form action="" method="POST">
                                <input type="hidden" name="q" value="q">
                                <button type="submit" name="logout">Logout</button>
                            </form> -->
                            <a href="./admin.php">Home</a>
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
                            Berikut ini adalah daftar produk.
                        </h3>
                        <a href="./tambahProduct.php">Tambah Produk</a>
                    </div>
                </div>
                <div class="row2">
                    <div class="table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Produk</th>
                                    <th>Stok</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $count = 1;

                                    foreach ($products as $item) {
                                        echo '<tr>';
                                        echo '<td>' . $count . '</td>';
                                        echo '<td>' . $item['name'] . '</td>';
                                        echo '<td>' . $item['stock'] . '</td>';
                                        echo '<td>' . number_format($item['price'], 0, ',', '.') . '</td>';
                                        echo '<td><img src="images/' . $item['image'] . '" alt="" width="200px" /></td>';
                                        echo '<td><form action="" method="POST">';
                                        echo '<input type="hidden" name="product_id" value="' . $item['product_id'] . '">';
                                        echo '<button type="submit" name="hapus" class="btn-hapus">Hapus</button></td>';
                                        echo '</form>';
                                        echo '</tr>';

                                        $count++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
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