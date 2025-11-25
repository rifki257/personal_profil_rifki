<?php 
include '../../app.php';
include './show.php'; //patch//

if(isset($_POST['tombol'])){
$imageNew = $blog->image;
$storages = "../../../storages/blog/";
$date = escapeString($_POST['date']);
$author = escapeString($_POST['author']);
$tittle = escapeString($_POST['tittle']);
$description = escapeString($_POST['description']);


//buat cek apakah user mengupload gambar baru//
if (!empty($_FILES['image']['tmp_name'])){
    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time() . ' .png';

    //hapus gambar
    if (!empty($blog->image) && file_exists($storages . $blog->image)) {
        unlink($storages . $blog->image);
    }
    //simpan gambar baru
    move_uploaded_file($imageOld, $storages . $imageNew);
}
    //update sesuai id
    $qUpdate = "UPDATE blogs SET image='$imageNew', date='$date', author='$author', tittle='$tittle', description='$description' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if($result){
        echo "
        <script>
            alert('data berhasil diubah')
            window.location.href='../../pages/blog/index.php';
            </script>
            ";
    }else{
        echo "
        <script>
        alert('data gagal diubah');
        window.location.href='../../pages/blog/edit.php';
        </script>
        ";
    }
}
?>