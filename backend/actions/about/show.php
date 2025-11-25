<?php

if (!isset($_GET['id'])) {
    echo "
        <script>
        alert('tidak bias memilih id ini');
        window.location.href='../../pages/about/index.php';
        </script>
        ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM abouts WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or exit(mysqli_error($connect));

$about = $result->fetch_object();
if (!$about) {
    exit('data tidak di temukan');
}
