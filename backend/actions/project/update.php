<?php 
include '../../app.php';
include './show.php'; //patch//

if(isset($_POST['tombol'])){
$imageNew = $project->image;
$storages = "../../../storages/project/";
$title = escapeString($_POST['title']);
$job = escapeString($_POST['job']);
$category = escapeString($_POST['category']);
$description = escapeString($_POST['description']);

//buat cek apakah user mengupload gambar baru//
if (!empty($_FILES['image']['tmp_name'])){
    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time() . ' .png';

    //hapus gambar
    if (!empty($project->image) && file_exists($storages . $project->image)) {
        unlink($storages . $project->image);
    }
    //simpan gambar baru
    move_uploaded_file($imageOld, $storages . $imageNew);
}
    //update sesuai id
    $qUpdate = "UPDATE projects SET image='$imageNew', title='$title', job='$job', category='$category', description='$description' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if($result){
        echo "
        <script>
            alert('data berhasil diubah')
            window.location.href='../../pages/project/index.php';
            </script>
            ";
    }else{
        echo "
        <script>
        alert('data gagal diubah');
        window.location.href='../../pages/project/edit.php';
        </script>
        ";
    }
}
?>