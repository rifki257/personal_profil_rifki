<?php
// Koneksi ke database
include '../../../config/connection.php';

// Cek apakah form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($connect, $_POST['email']);

    if (!empty($email)) {
        // Simpan ke database (buat table newsletters kalau belum ada)
        $query = "INSERT INTO newsletters (email, created) VALUES ('$email', NOW())";
        if (mysqli_query($connect, $query)) {
            echo "<script>
        alert('Horee Ke kirim');
        window.location.href='../../index.php#contact'; // redirect ke halaman login
    </script>";
        } else {
            echo "Error: " . mysqli_error($connect);
        }
    } else {
        echo "Email tidak boleh kosong!";
    }
} else {
    echo "Invalid request!";
}
