<?php

function goToIndexPage() {
    header("Location: ./index.php");
    exit();
}

function goToLoginPage() {
    header("Location: ./login.php");
    exit();
}

function goToAboutPage() {
    header("Location: ./about.php");
    exit();
}

function goToAdminHomePage() {
    header("Location: ./admin/index.php");
    exit();
}

function goToAdminTambahKuePage() {
    header("Location: ./admin/products/tambahKue.php");
    exit();
}

?>