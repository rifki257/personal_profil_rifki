<?php 
include '../../app.php';
include './show.php'; //patch//

if(isset($_POST['tombol'])){
$date = escapeString($_POST['date']);
$job = escapeString($_POST['job']);
$place = escapeString($_POST['place']);
$description = escapeString($_POST['description']);
$icon = escapeString($_POST['icon']);


    //update sesuai id
    $qUpdate = "UPDATE resumes SET date='$date', job='$job', place='$place', description='$description', icon='$icon' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if($result){
        echo "
        <script>
            alert('data berhasil diubah')
            window.location.href='../../pages/resume/index.php';
            </script>
            ";
    }else{
        echo "
        <script>
        alert('data gagal diubah');
        window.location.href='../../pages/resume/edit.php';
        </script>
        ";
    }
}
?>