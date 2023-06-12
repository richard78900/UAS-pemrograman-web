<?php

include("./app/config/database.php");

function getAllAuthors() {
    global $conn;
    // var_dump($conn);
    // exit();

    // check if there is a connection
    if ($conn) {
        // if there is then try query the authors
        $sql = "SELECT * FROM authors";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $data = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }

            mysqli_free_result($result);

            // return the data
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