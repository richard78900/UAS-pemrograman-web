<?php

include("./app/config/database.php");

function insertNewProduct($name, $stock, $price, $image, $insert_by) {
    global $conn;
    $image_name = generateRandomName($image["name"]);
    if ($conn) {
        $sql = "INSERT INTO products (name, stock, price, image, insert_by) VALUES (?, ?, ?, ?, ?)";
    
        $stmt = mysqli_prepare($conn, $sql);
    
        // s = string
        // d = decimal
        mysqli_stmt_bind_param($stmt, "sddsd", $name, $stock, $price, $image_name, $insert_by);
    
        if (mysqli_stmt_execute($stmt)) {
            // save the image in the image folder
            $targetDir = './images/';
            $targetFile = $targetDir . basename($image_name);
            move_uploaded_file($image['tmp_name'], $targetFile);

            header("Location: ./daftarProduct.php");
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

function deleteProductByProductId($product_id) {
    global $conn;
    if ($conn) {
        // get image name before deleting the product
        $getImageSql = "SELECT image FROM products WHERE product_id = ?";
        $getImageStmt = mysqli_prepare($conn, $getImageSql);
        mysqli_stmt_bind_param($getImageStmt, "d", $product_id);
        mysqli_stmt_execute($getImageStmt);
        mysqli_stmt_bind_result($getImageStmt, $image);
        mysqli_stmt_fetch($getImageStmt);
        mysqli_stmt_close($getImageStmt);

        $sql = "DELETE FROM products WHERE product_id = ?";
    
        $stmt = mysqli_prepare($conn, $sql);
    
        // s = string
        // d = decimal
        mysqli_stmt_bind_param($stmt, "d", $product_id);
    
        if (mysqli_stmt_execute($stmt)) {
            if (!empty($image)) {
                $targetDir = './images/';
                $targetFile = $targetDir . $image;
                if (file_exists($targetFile)) {
                    unlink($targetFile);
                }
            }

            header("Location: ./daftarProduct.php");
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

function generateRandomName($originalName) {
    $extension = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));
    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $randomString = '';
    for ($i = 0; $i < 8; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    $newName = $randomString . '.' . $extension;
    return $newName;
}