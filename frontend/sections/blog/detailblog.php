<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Detail Blog</title>
    <meta name="description" content="">
    <meta name="keywords" content="">


    <link href="../../temp-user/assets/img/logokumihumihu.jpg" rel="icon">
    <link href="../../temp-user/assets/img/logokumihumihu.jpg" rel="apple-touch-icon">


    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <link href="../../temp-user/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../temp-user/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../temp-user/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../temp-user/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../temp-user/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="../../temp-user/assets/css/main.css" rel="stylesheet">


</head>
<?php
include '../../../config/connection.php';
include '../../partials/header.php';
if (!isset($_GET['id'])) {
    die("ID blog tidak ditemukan");
}
$id = intval($_GET['id']); // keamanan

$query = "SELECT * FROM blogs WHERE id = $id";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));

if (mysqli_num_rows($result) === 0) {
    die("Blog tidak ditemukan");
}

$item = $result->fetch_object();

?>

<body class="index-page">
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

    <!-- blog -->
    <main class="main">
        <section id="team" class="team section light-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up" style="user-select: none; -webkit-user-select: none;">
                <h2 style="user-select: none; -webkit-user-select: none;">BLOg</h2>
                <div class="d-flex justify-content-between align-items-center" style="user-select: none; -webkit-user-select: none;">
                    <p class="mb-0">detail BLOG</p>
                    <button class="btn btn-danger">
                        <a href="../../sections/semuablog.php" style="font-size: 100%; user-select: none; -webkit-user-select: none; color:white;">Kembali</a>
                    </button>
                </div>
            </div>
            <div class="container">
                <div class="row gy-5">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-lg-8 col-md-8 mx-auto" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member">
                                        <img src="../../../storages/blog/<?= $item->image ?>" alt="foto saya" class="profile-image me-3 my-5" width="100%" style="user-select: none; -webkit-user-select: none;">
                                        <div class="member-info text-center">
                                            <h4 class="mb-1" style="user-select: none; -webkit-user-select: none;"><?= $item->tittle ?></h4>
                                            <div class="d-flex justify-content-between mb-2">
                                                <span><?= date('d-m-Y', strtotime($item->date)) ?></span>
                                                <span><?= $item->author ?></span>
                                            </div>
                                            <span class="mb-2 " style="user-select: none; -webkit-user-select: none;text-align: left; display: block;"><?= $item->description ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- akhir blog -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Preloader -->
    <!-- <div id="preloader"></div> -->
    <!-- Vendor JS Files -->
    <script src="../../temp-user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../temp-user/assets/vendor/php-email-form/validate.js"></script>
    <script src="../../temp-user/assets/vendor/aos/aos.js"></script>
    <script src="../../temp-user/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../temp-user/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../../temp-user/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../../temp-user/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../../temp-user/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <!-- Main JS File -->
    <script src="../../temp-user/assets/js/main.js"></script>
</body>

</html>