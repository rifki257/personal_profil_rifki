<?php
    include '../../app.php';
    include './show.php';

    $storages = "../../../storages/project/";

    //hapus gambar
    if(!empty($project->image) && file_exists($storages . $project->image)) {
        unlink(($storages . $project->image));
    }

    //hapus data
    $qDelete = "DELETE FROM projects WHERE id = '$project->id'";
    $result = mysqli_query($connect, $qDelete)or die(mysqli_error($connect));

    //cek apakah data berhasil di hapus
    if($result){
        echo "
        <script>
        alert('data berhasil dihapus');
        window.location.href='../../pages/project/index.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal dihapus');
        window.location.href='../../pages/project/index.php';
        </script>";
    }
    ?>