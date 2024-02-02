<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "a_225720112029";

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Koneksi Gagal: " . $conn->connect_error);
    }
?>
