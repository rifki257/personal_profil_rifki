<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include_once '../../partials/navbar.php';

$queryTotalBlog = "SELECT COUNT(*) AS total_blog FROM blogs";
$resultTotalBlog = mysqli_query($connect, $queryTotalBlog);
$dataTotalBlog = mysqli_fetch_assoc($resultTotalBlog);
$totalBlog = $dataTotalBlog['total_blog'];

$queryTotalContact = "SELECT COUNT(*) AS total_contact FROM contacts";
$resultTotalContact = mysqli_query($connect, $queryTotalContact);
$dataTotalContact = mysqli_fetch_assoc($resultTotalContact);
$totalContact = $dataTotalContact['total_contact'];
?>

<style>
    .bg-dashboard {
        background-color: #3B82F6;
    }
</style>

<!-- content -->
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-12">
                <div class="card bg-dashboard" style="margin-top: 30px;">
                    <div class="card-header">
                        <h1 class="text-white text-center">Dashboard</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            <a href="../blog/index.php" style="text-decoration:none;">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5>Total Blog</h5>
                                        <h2><?= $totalBlog ?></h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="../contact/index.php" style="text-decoration:none;">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5>Total Kontak</h5>
                                        <h2><?= $totalContact ?></h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>