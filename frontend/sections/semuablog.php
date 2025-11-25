<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Semua Blog</title>
    <meta name="description" content="">
    <meta name="keywords" content="">


    <link href="../temp-user/assets/img/logokumihumihu.jpg" rel="icon">
    <link href="../temp-user/assets/img/logokumihumihu.jpg" rel="apple-touch-icon">


    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <link href="../temp-user/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../temp-user/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../temp-user/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../temp-user/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../temp-user/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="../temp-user/assets/css/main.css" rel="stylesheet">


</head>
<?php
include '../../config/connection.php';
$blogs = "SELECT * FROM blogs";
$result = mysqli_query($connect, $blogs) or die(mysqli_error($connect));
include '../partials/header.php';
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
                    <p class="mb-0">ALL BLOG</p>
                    <button class="btn btn-danger">
                        <a href="../index.php#blog" style="font-size: 100%; user-select: none; -webkit-user-select: none; color: white; ">Kembali</a>
                    </button>
                </div>
            </div>
            <div class="container">
                <div class="row gy-5">
                    <?php while ($item = $result->fetch_object()): ?>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <div class="member">
                                            <img src="../../storages/blog/<?= $item->image ?>" alt="foto saya" class="profile-image d-block mx-auto" style="height:200px; object-fit:cover; width:100%; border-radius:8px;">
                                            <div class="member-info text-center">
                                                <h4 class="mb-1" style="user-select: none; -webkit-user-select: none;"><?= $item->tittle ?></h4>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <span><?= date('d-m-Y', strtotime($item->date)) ?></span>
                                                    <span><?= $item->author ?></span>
                                                </div>
                                                <div style="max-width: 600px; margin: 0 auto;">
                                                    <a href="blog/detailblog.php?id=<?= $item->id ?>" style="display: block;">
                                                        <button
                                                            type="button"
                                                            style="width: 100%; background: blue; color: white; padding: 7px; border: none; border-radius: 5px; font-size: 13px; user-select: none; -webkit-user-select: none;">Lihat Lebih Detail
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    </main>
    <!-- akhir blog -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Preloader -->
    <!-- <div id="preloader"></div> -->
    <!-- Vendor JS Files -->
    <script src="../temp-user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../temp-user/assets/vendor/php-email-form/validate.js"></script>
    <script src="../temp-user/assets/vendor/aos/aos.js"></script>
    <script src="../temp-user/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../temp-user/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../temp-user/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../temp-user/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../temp-user/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <!-- Main JS File -->
    <script src="../temp-user/assets/js/main.js"></script>
</body>

</html>