<?php

include("./app/config/database.php");

function insertNewOrder($name, $address, $message) {
    global $conn;
    if ($conn) {
        $name = $name;
        $address = $address;
        $message = $message;
    
        $sql = "INSERT INTO orders (name, address, message) VALUES (?, ?, ?)";
    
        $stmt = mysqli_prepare($conn, $sql);
    
        // s = string
        // d = decimal
        // in this case its sss because all of value are strings
        mysqli_stmt_bind_param($stmt, "sss", $name, $address, $message);
    
        if (mysqli_stmt_execute($stmt)) {
            // after inserting new value the user should redirect to the whatsapp to place their order
            $destinationNumber = "123456789"; // this is the phone number of the owner

            $fullMessage = "Pemesan: " .$name ."\nAlamat: " .$address ."\nDetail Pesanan: " .$message;

            // encode so it will work
            $encodedMessage = urlencode($fullMessage);

            $url = "https://api.whatsapp.com/send/?phone={$destinationNumber}&text={$encodedMessage}&type=phone_number&app_absent=0";

            // redirect to whatsapp
            header("Location: {$url}");
            exit();
        } else {
            echo "there is an error while inserting new value";
            exit();
        }
        
        // close the stmt conn
        mysqli_stmt_close($stmt);
    } else {
        echo "there is an error.";
        exit();
    }    
}

function deleteOrderByOrderId($order_id) {
    global $conn;
    if ($conn) {
        $sql = "DELETE FROM orders WHERE order_id = ?";
    
        $stmt = mysqli_prepare($conn, $sql);
    
        // s = string
        // d = decimal
        mysqli_stmt_bind_param($stmt, "d", $order_id);
    
        if (mysqli_stmt_execute($stmt)) {
            header("Location: ./daftarOrder.php");
            exit();
        } else {
            echo "there is an error while deleting the value";
            exit();
        }
    } else {
        echo "there is an error.";
        exit();
    }
}