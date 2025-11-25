<?php
include '../config/connection.php';

// Query data about
$abouts = "SELECT * FROM abouts LIMIT 1";
$result_about = mysqli_query($connect, $abouts) or die(mysqli_error($connect));

// Query data social media
$socmeds = "SELECT * FROM socmeds";
$result_socmed = mysqli_query($connect, $socmeds) or die(mysqli_error($connect));
?>

<section id="hero" class="hero section dark-background">
    <?php while ($item = $result_about->fetch_object()): ?>
        <img src="../storages/about/<?= $item->image ?>" alt="foto saya" class="profile-image" style="user-select: none; -webkit-user-select: none;">
        <div class="container d-flex flex-column align-items-left">
            <h2 data-aos="fade-up" data-aos-delay="100" style="user-select: none; -webkit-user-select: none;"><?= $item->name ?></h2>
            <p data-aos="fade-up" data-aos-delay="200" class="text-capitalize" style="user-select: none; -webkit-user-select: none;"><?= $item->work ?></p>

            <!-- Loop untuk semua link social media -->
            <div class="social-links">
                <?php while ($soc = $result_socmed->fetch_object()): ?>
                    <a href="<?= $soc->link ?>" target="_blank">
                        <i style="font-size: 40px;" class="<?= $soc->icon ?> px-1"></i>
                    </a>
                <?php endwhile; ?>
            </div>

            <div data-aos="fade-up" data-aos-delay="300">
                <a href="https://drive.google.com/file/d/1yp49RF5ydpYV38nsEEaEYukCdGojXY3R/view?usp=sharing" target="_blank"
                    class="btn-get-started py-2 my-2"
                    style="user-select: none; -webkit-user-select: none; font-size: 10px;">
                    Download CV
                </a>
            </div>
        </div>
    <?php endwhile; ?>
</section>