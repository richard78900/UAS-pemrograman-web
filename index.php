<?php

include "./app/controller/indexPageController.php";
include "./app/controller/orderController.php";

$products = getAllProducts();

// The order button was clicked
if (isset($_POST["order"])) {
    $name = $_POST["nama"];
    $address = $_POST["alamat"];
    $message = $_POST["isipesan"];

    // insert new order
    insertNewOrder($name, $address, $message);
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
        <!-- Swiper -->
        <link
            rel="stylesheet"
            href="https://unpkg.com/swiper/swiper-bundle.min.css"
        />
        <!-- SWA2 -->
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="./css/index.css" />
        <title>Queker</title>
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
                            <a href="#home1" class="active">Halaman Utama</a>
                            <a href="./about.php">Tentang</a>
                            <a href="#product1">Produk</a>
                            <a href="#order1">Pesan</a>
                        </div>
                    </div>
                    <div class="burger bi bi-list"></div>
                </div>
            </div>
        </header>
        <!-- End navbar -->

        <!-- Home -->
        <section id="home1" style="height: 1px"></section>
        <section class="home" id="home">
            <div class="container">
                <div class="content-left">
                    <h1 class="heading">Need Sugar? Get Queker Instead!</h1>
                    <p class="sub-heading">
                        Selamat datang di Queker! Kami menawarkan berbagai macam
                        kue lezat yang terbuat dari bahan-bahan berkualitas
                        tinggi dan dirancang dengan detail dan penuh kasih
                        sayang. Produk kami selalu segar dan siap memenuhi
                        kebutuhan dan keinginan Anda dengan harga terjangkau.
                        Kunjungi toko kami dan nikmati kelezatan kue-kue kami
                        yang pastinya akan menggugah selera Anda!
                    </p>
                    <div class="btn-home">
                        <a href="#product1" class="btn-explore">Lihat Kue</a>
                        <a href="#order1" class="btn-learn">Pesan!</a>
                    </div>
                </div>
                <div class="content-right">
                    <!-- Swiper -->
                    <div class="swiper mySwiperHome">
                        <div class="swiper-wrapper">
                            <?php
                                foreach($products as $row) {
                                    echo '<div class="swiper-slide"><img src="images/' . $row['image'] . '" alt="" /></div>';
                                }
                            ?>
                        </div>
                    </div>
                    <!-- End swipper -->
                </div>
            </div>
        </section>
        <!-- End home -->

        <!-- Panel -->
        <section class="panel" id="panel">
            <div class="container">
                <div class="item">
                    <div class="icon">
                        <i class="bi bi-cart"></i>
                    </div>
                    <div class="text-panel">
                        <h5 class="title">Free Delivery</h5>
                        <p class="subtitle mr-5">
                            Beli kue favoritmu sekarang dan nikmati gratis
                            ongkir ke seluruh wilayah Manado! Jangan lewatkan
                            kesempatan ini untuk menikmati kue lezat kami tanpa
                            perlu khawatir ongkos kirim.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="text-panel">
                        <h5 class="title">Easy Payment</h5>
                        <p class="subtitle mr-5">
                            Nikmati kemudahan dalam pembayaran kue lezat kami!
                            Dengan opsi pembayaran yang fleksibel, pesan kue
                            impianmu sekarang dan bayar dengan cara yang paling
                            mudah untukmu.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <i class="bi bi-chat-dots"></i>
                    </div>
                    <div class="text-panel">
                        <h5 class="title">Easy Order</h5>
                        <p class="subtitle">
                            Pesan kue impianmu sekarang dengan mudah! Kami
                            menawarkan pengalaman pemesanan yang sederhana dan
                            cepat untuk memudahkanmu menikmati kue lezat kami.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End panel -->

        <!-- Product -->
        <section id="product1" style="height: 1px"></section>
        <section class="product" id="product">
            <div class="container">
                <div class="row1">
                    <div class="title-section">
                        <p class="label">Produk kami</p>
                        <h3 class="heading">
                            Nikmati sensasi renyah dan gurih dari kue kering
                            kami yang terbuat dari bahan-bahan berkualitas
                            tinggi!
                        </h3>
                    </div>
                    <div class="btn-slider">
                        <i class="bi bi-arrow-left-circle-fill"></i>
                        <i class="bi bi-arrow-right-circle-fill"></i>
                    </div>
                </div>
                <div class="row2">
                    <!-- Swiper -->
                    <div class="swiper mySwiperProduct">
                        <div class="swiper-wrapper">
                            <?php
                                foreach ($products as $item) {
                                    echo '<div class="swiper-slide card-product">';
                                    echo '<img src="images/' . $item['image'] . '" alt="" />';
                                    echo '<div class="card-body">';
                                    echo '<a href="#" class="product-name">' . $item['name'] . '</a>';
                                    echo '<p class="stock">Stok: ' . '<span class="stock1">' . $item['stock'] . '</span>' . '</p>';
                                    echo '<p class="price">Rp ' . number_format($item['price'], 0, ',', '.') . '</p>';
                                    echo '</div>';
                                    echo '<p href="#" class="btn-cart"><i class="bi bi-cart"></i></p>';
                                    echo '</div>';
                                }
                            ?>
                        </div>
                    </div>
                    <!-- End swipper -->
                </div>
            </div>
        </section>
        <!-- End product -->

        <!-- Order -->
        <section id="order1" style="height: 1px"></section>
        <section class="order section-margin" id="order">
            <div class="container">
                <div class="row1">
                    <div class="title-section">
                        <p class="label">Pesan sekarang!</p>
                        <h3 class="heading">
                            Segera pesan kue lezat kami sekarang dan nikmati
                            pengalaman rasa yang tak terlupakan!
                        </h3>
                    </div>
                </div>
                <div class="row2">
                    <form action="" method="POST" class="form-group" id="order-form">
                        <input
                            type="text"
                            name="nama"
                            id="nama"
                            placeholder="Masukkan nama Anda!"
                        />
                        <input
                            type="text"
                            name="alamat"
                            id="alamat"
                            placeholder="Masukkan alamat lengkap Anda!"
                        />
                        <textarea
                            name="isipesan"
                            id="isipesan"
                            placeholder="Pesanan Anda akan terlihat di sini."
                            cols="30"
                            rows="10"
                        ></textarea>
                        <div class="btn-wrap">
                            <button
                                type="button"
                                class="btn-contact"
                                id="btn-hapus"
                            >
                                Hapus
                            </button>
                            <button
                                type="submit"
                                class="btn-contact"
                                id="btn-order"
                                name="order"
                            >
                                Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End order -->

        <!-- Footer -->
        <footer class="footer section-margin" id="footer">
            <div class="container">
                <div class="row1">
                    <div class="content">
                        <p class="footer-logo">Que<span>ker</span></p>
                        <a href="#" class="email">info@queker.com</a>
                        <p class="phone">+628 888 888 8880</p>
                        <div class="footer-icons">
                            <a href="#"><i class="bi bi-whatsapp"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row2">
                    <p>&copy;Copyright 2023 | Rootkit</p>
                </div>
            </div>
        </footer>
        <!-- End footer -->

        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-- SWA2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
        <!-- Custom JS -->
        <script type="module" src="./js/index.js"></script>
    </body>
</html>
