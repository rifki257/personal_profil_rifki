<?php
include_once '../../app.php';

if (isset($_POST['tombol'])) {
    $icon = escapeString($_POST['icon']);
    $job = escapeString($_POST['job']);
    $description = escapeString($_POST['description']);
    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time() . '.png';

    $storages = '../../../storages/service/';
    if (move_uploaded_file($imageOld, $storages . $imageNew)) {
        $qInsert = "INSERT INTO services(icon, job, description,image) VALUES('$icon', '$job', '$description','$imageNew')";
    if (mysqli_query($connect, $qInsert)) 
        echo "<script>alert('Data berhasil ditambahkan');
        window.location.href = '../../pages/service/index.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambah'); 
        window.location.href = '../../pages/service/create.php';</script>";
    }
}
