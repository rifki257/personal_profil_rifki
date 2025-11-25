<?php
include '../../app.php';

if (isset($_POST['tombol'])) {
    $skill = escapeString($_POST['skill']);
    $percent = escapeString($_POST['percent']);
    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time() . ".png";
    $description = escapeString($_POST['description']);
    
    // Pindahkan file ke folder penyimpanan
    move_uploaded_file($imageOld, "../../../storages/skill/$imageNew");

    // Simpan ke database dengan variabel $description
    $qInsert = "INSERT INTO skills(skill,percent,image,description) 
                VALUES('$skill','$percent','$imageNew','$description')";

    mysqli_query($connect, $qInsert) or exit(mysqli_error($connect));
    echo "
    <script>
    alert('Data berhasil ditambah');
    window.location.href = '../../pages/skill/index.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data gagal ditambah');
    window.location.href = '../../pages/skill/create.php';
    </script>
    ";
}
?>
