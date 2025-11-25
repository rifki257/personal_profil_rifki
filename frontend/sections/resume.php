<?php
include '../config/connection.php';
$resumes = "SELECT * FROM resumes";
$result = mysqli_query($connect, $resumes) or die(mysqli_error($connect));
?>

<section id="resume" class="services-2 section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2 style="text-transform: uppercase;">resume</h2>
        <p style="text-transform: uppercase;">
            periksa resume</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-4">
            <?php while ($item = $result->fetch_object()): ?>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="flex-grow-1 d-flex align-items-center">
                            <div>
                                <i class="<?= $item->icon ?> icon flex-shrink-0"></i>
                            </div>
                            <div>
                                <h4 class="title text-uppercase">
                                    <div href="#" class="stretched-link"><?= $item->place ?></div>
                                </h4>
                                <p class="description text-capitalize"><?= $item->date ?></p>
                            </div>
                            <div class="ms-auto position-relative mt-4 " style="z-index: 10;">
                                <button type="button"
                                    class="btn btn-secondary w-100"
                                    data-bs-container="body"
                                    data-bs-toggle="popover"
                                    data-bs-placement="top"
                                    data-bs-content="<?= htmlspecialchars($item->description, ENT_QUOTES) ?>">
                                    Detail
                                </button>
                            </div>
                        </div>

                        <!-- tombol popover -->

                    </div>
                </div><!-- End Service Item -->
            <?php endwhile; ?>
        </div>
    </div>
</section>