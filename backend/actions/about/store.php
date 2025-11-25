<?php

include '../../app.php';

if (isset($_POST['tombol'])) {
    $name = escapeString($_POST['name']);
    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time().'.png';  
    $born = escapeString($_POST['born']);
    $zip_code = escapeString($_POST['zip_code']);
    $email = escapeString($_POST['email']);
    $phone = escapeString($_POST['phone']);
    $total_project = escapeString($_POST['total_project']);
    $work = escapeString($_POST['work']);
    $address = escapeString($_POST['address']);
    $description = escapeString($_POST['description']);



    $storages = '../../../storages/about/';
    if (move_uploaded_file($imageOld, $storages.$imageNew)) {
        $qInsert = "INSERT INTO  abouts(name, image, born, zip_code, email, phone, total_project, work, address, description) VALUES('$name','$imageNew', '$born', '$zip_code', '$email', '$phone', '$total_project', '$work', '$address', '$description')";

        mysqli_query($connect, $qInsert) or exit(mysqli_error($connect));
        echo "
    <script>
    alert('Data berhasil ditambah');
    window.location.href = '../../pages/about/index.php';
    </script>
    ";
    } else {
        echo "
    <script>
    alert('Data gagal ditambah');
    window.location.href = '../../pages/about/create.php';
    </script>
    ";
    }
}
