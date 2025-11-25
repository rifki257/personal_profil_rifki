<?php
// koneksi database
include '../../../config/connection.php';
include '../../../config/escapeString.php';

// cek apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = escapeString($_POST['name']);
    $email    = escapeString($_POST['email']);
    $phone   = escapeString($_POST['phone']);
    $subject = escapeString($_POST['subject']);
    $massage = escapeString($_POST['massage']);

    if (!empty($name) && !empty($phone) && !empty($subject) && !empty($massage)) {
        // query simpan ke database
        $query = "INSERT INTO contacts (name, email, phone, subject, massage) 
                VALUES ('$name', '$email', '$phone', '$subject', '$massage')";

        if (mysqli_query($connect, $query)) {
            echo "<script>
        alert('Pesan Berhasil Di Kirim');
        window.location.href='../../index.php#contact'; // redirect ke halaman login
    </script>";
            exit;
        } else {
            echo "Error: " . mysqli_error($connect);
        }
    } else {
        echo "Semua field wajib diisi!";
    }
} else {
    echo "Invalid request!";
}
