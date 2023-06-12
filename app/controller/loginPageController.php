<?php

function checkSessionExistense() {
    // check if there is session
    // if there is then dont allow user to access the login page.
    // the user have to logout first in order to access the login page.
    if (isset($_SESSION["username"])) {
        header("Location: ./admin.php");
        exit();
    }
}