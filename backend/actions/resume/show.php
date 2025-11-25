<?php
    if(!isset($_GET['id'])){
        echo "
        <script>
        alert('tidak bias memilih id ini');
        window.location.href='../../pages/resume/index.php';
        </script>
        ";
    }

    $id = $_GET['id'];

    $qSelect = "SELECT * FROM resumes WHERE id='$id'";
    $result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

    $resume = $result->fetch_object();
    if(!$resume){
        die("data tidak di temukan");
    }
    ?>
