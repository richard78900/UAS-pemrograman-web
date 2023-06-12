<?php

include("./app/config/database.php");

function checkSessionExistense() {
    // check if there is session
    // if there is then allow user.
    // if isnt go to the login page.
    if (!isset($_SESSION["username"])) {
        header("Location: ./login.php");
        exit();
    }
}

function countAllProducts() {
    global $conn;
    // var_dump($conn);
    // exit();

    // check if there is a connection
    if ($conn) {
        // if there is then try query the products
        $sql = "SELECT count(*) count FROM products";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $data = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }

            mysqli_free_result($result);

            // return the data
            // var_dump($data);
            // exit();
            return $data;
        } else {
            echo "there is no data";
            exit();
        }
    } else {
        echo "there is an error";
        exit();
    }
}

function countAllOrders() {
    global $conn;
    // var_dump($conn);
    // exit();

    // check if there is a connection
    if ($conn) {
        // if there is then try query the products
        $sql = "SELECT count(*) count FROM orders";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $data = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }

            mysqli_free_result($result);

            // return the data
            // var_dump($data);
            // exit();
            return $data;
        } else {
            echo "there is no data";
            exit();
        }
    } else {
        echo "there is an error";
        exit();
    }
}

function countAllUsers() {
    global $conn;
    // var_dump($conn);
    // exit();

    // check if there is a connection
    if ($conn) {
        // if there is then try query the products
        $sql = "SELECT count(*) count FROM users";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $data = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }

            mysqli_free_result($result);

            // return the data
            // var_dump($data);
            // exit();
            return $data;
        } else {
            echo "there is no data";
            exit();
        }
    } else {
        echo "there is an error";
        exit();
    }
}