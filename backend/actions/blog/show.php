<?php
    if(!isset($_GET['id'])){
        echo "
        <script>
        alert('tidak bias memilih id ini');
        window.location.href='../../pages/blog/index.php';
        </script>
        ";
    }

    $id = $_GET['id'];

    $qSelect = "SELECT * FROM blogs WHERE id='$id'";
    $result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

    $blog = $result->fetch_object();
    if(!$blog){
        die("data tidak di temukan");
    }
    ?>
