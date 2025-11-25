<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database ="personal_profil_rifki";

    //membuat koneksi ke database
    $connect = mysqli_connect($hostname, $username, $password, $database);

    //memeriksa apakah koneksi berhasil
    if (!$connect){
        die("koneksi gagal:".mysqli_connect_error());
    }
    ?>