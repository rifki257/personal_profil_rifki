<?php
     include '../../partials/header.php';
session_start();
include '../../app.php'; // koneksi databases

// cek from sudah di submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = escapeString($_POST['email']);
    $password = $_POST['password'];

    // cek apakah email dan password sesuai
    $qlogin = "SELECT * FROM users WHERE email='$email' AND password= '$password'";
    $result = mysqli_query($connect, $qlogin) or die(mysqli_error($connect));

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['admin_logged_in'] = true;
        header('Location:../../pages/dashboard/index.php');
        exit();
    } else {
        echo "<script>
                alert('email atau password salah');
                window.location.href='../../pages/user/login.php';
            </script>";
    }
}
