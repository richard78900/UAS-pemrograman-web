<?php

include("./app/config/database.php");

function insertNewUser($name, $username, $password, $image) {
    global $conn;

    // validate input
    if(empty($name) or empty($username) or empty($password) or empty($image["name"])) {
        echo "you cant input null value";
        exit();
    }

    $image_name = generateRandomName($image["name"]);
    if ($conn) {
        // check if the username already exists
        $checkSql = "SELECT COUNT(*) FROM users WHERE username = ?";
        $checkStmt = mysqli_prepare($conn, $checkSql);
        mysqli_stmt_bind_param($checkStmt, "s", $username);
        mysqli_stmt_execute($checkStmt);
        mysqli_stmt_bind_result($checkStmt, $count);
        mysqli_stmt_fetch($checkStmt);
        mysqli_stmt_close($checkStmt);

        if ($count > 0) {
            echo "username already exists.";
            exit();
        }
        
        $sql = "INSERT INTO users (name, username, password, image) VALUES (?, ?, ?, ?)";
    
        $stmt = mysqli_prepare($conn, $sql);
    
        // s = string
        // d = decimal
        mysqli_stmt_bind_param($stmt, "ssds", $name, $username, $password, $image_name);
    
        if (mysqli_stmt_execute($stmt)) {
            // save the image in the image folder
            $targetDir = './images/';
            $targetFile = $targetDir . basename($image_name);
            move_uploaded_file($image['tmp_name'], $targetFile);

            header("Location: ./daftarUser.php");
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

function deleteUserByUserId($user_id) {
    global $conn;

    // validate input
    if(empty($user_id)) {
        echo "user id is required";
        exit();
    }

    if ($conn) {
        // Get the image name before deleting the user
        $getImageSql = "SELECT image FROM users WHERE user_id = ?";
        $getImageStmt = mysqli_prepare($conn, $getImageSql);
        mysqli_stmt_bind_param($getImageStmt, "d", $user_id);
        mysqli_stmt_execute($getImageStmt);
        mysqli_stmt_bind_result($getImageStmt, $image);
        mysqli_stmt_fetch($getImageStmt);
        mysqli_stmt_close($getImageStmt);
        
        $sql = "DELETE FROM users WHERE user_id = ?";
    
        $stmt = mysqli_prepare($conn, $sql);
    
        // s = string
        // d = decimal
        mysqli_stmt_bind_param($stmt, "d", $user_id);
    
        if (mysqli_stmt_execute($stmt)) {
            if (!empty($image)) {
                $targetDir = './images/';
                $targetFile = $targetDir . $image;
                if (file_exists($targetFile)) {
                    unlink($targetFile);
                }
            }

            header("Location: ./daftarUser.php");
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