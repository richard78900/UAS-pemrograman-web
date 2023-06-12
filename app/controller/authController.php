<?php

include("./app/config/database.php");

session_start();

function login($username, $password) {
    global $conn;

    $sql = "SELECT * FROM users WHERE username = ?";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "s", $username);

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // this only works if the password is hashed
        // var_dump(password_verify($password, $user["password"]));

        if ($password === $user["password"]) {
            mysqli_stmt_close($stmt);

            $_SESSION["username"] = $user["username"];
            $_SESSION["user_id"] = $user["user_id"];

            // redirect to admin index
            header("Location: ./admin.php");
            exit();
        } else {
            echo "password incorect";
            exit();
        }
    } else {
        // is incorrect or no user found
        mysqli_stmt_close($stmt);
        // header("Location: ./login.php");
        echo "there is an error: no user found";
        exit();
    }
}

function logout($q) {
    if (!empty($q)) {
        session_unset();
        session_destroy();
        header("Location: ./login.php");
        exit();
    } else {
        echo "there is an error while attempting to logout the current session";
        exit();
    }
}