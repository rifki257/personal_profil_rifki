<?php
include '../../app.php';
include './show.php'; // ini harus set variabel $skill (data lama)

// Ambil id dari URL
$id = intval($_GET['id']);

if (isset($_POST['tombol'])) {
    $skillName = escapeString($_POST['skill']);
    $percent = escapeString($_POST['percent']);
    $imageNew = $skill->image; // dari data lama
    $storages = "../../../storages/skill/";
    $description = escapeString($_POST['description']);
    
    // Cek upload gambar baru
    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';

        // Hapus gambar lama
        if (!empty($skill->image) && file_exists($storages . $skill->image)) {
            unlink($storages . $skill->image);
        }
        // Simpan gambar baru
        move_uploaded_file($imageOld, $storages . $imageNew);
    }

    // Update data
    $qUpdate = "UPDATE skills SET skill='$skillName', percent='$percent', image='$imageNew', description='$description' WHERE id='$id'";
    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));

    if ($result) {
        echo "
        <script>
            alert('Data berhasil diubah');
            window.location.href='../../pages/skill/index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal diubah');
            window.location.href='../../pages/skill/edit.php';
        </script>";
    }
}
