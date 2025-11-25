<?php

if (!isset($_GET['id'])) {
    echo "
        <script>
        alert('tidak bias memilih id ini');
        window.location.href='../../pages/skill/index.php';
        </script>
        ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM skills WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or exit(mysqli_error($connect));

$skill = $result->fetch_object();
if (!$skill) {
    exit('data tidak di temukan');
}
