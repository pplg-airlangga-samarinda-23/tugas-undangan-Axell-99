<?php
    //koneksi database
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "undangan";

    $connection = new mysqli($host, $username, $password, $database);

    if ($connection->connect_error) {
        echo "Koneksi Gagal :(";
    }
    ?>
