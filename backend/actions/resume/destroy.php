<?php
    include '../../app.php';
    include './show.php';

    //hapus data
    $qDelete = "DELETE FROM resumes WHERE id = '$resume->id'";
    $result = mysqli_query($connect, $qDelete)or die(mysqli_error($connect));

    //cek apakah data berhasil di hapus
    if($result){
        echo "
        <script>
        alert('data berhasil dihapus');
        window.location.href='../../pages/resume/index.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal dihapus');
        window.location.href='../../pages/resume/index.php';
        </script>";
    }
    ?>