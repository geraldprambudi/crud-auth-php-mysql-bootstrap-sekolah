<?php
    $server = "localhost";
    $user   = "admin";
    $password= "123456";
    $nama_database = "pendaftaran_siswa";

    $db = mysqli_connect($server, $user, $password, $nama_database);

    if (!$db) {
        die('Gagal terhubung dengan database ' . mysqli_connect_error());
    } else {
        echo "Koneksi sukses dengan " . $nama_database;
    }
?>