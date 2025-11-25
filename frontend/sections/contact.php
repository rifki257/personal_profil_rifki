    <?php
    include '../config/connection.php';
    $abouts = "SELECT * FROM abouts";
    $result = mysqli_query($connect, $abouts) or die(mysqli_error($connect));
    $contacts = "SELECT * FROM contacts";
    $result_contacts = mysqli_query($connect, $contacts) or die(mysqli_error($connect));
    $item = $result->fetch_object();

    $data_items = [];
    while ($row = mysqli_fetch_assoc($result_contacts)) {
        $data_items[] = $row; // Simpan data ke array
    }
    ?>
    <section id="contact" class="contact section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2 style="user-select: none; -webkit-user-select: none;">kontak</h2>
            <p style="user-select: none; -webkit-user-select: none;">kontak & pesan</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6 ">
                    <div class="row gy-4">

                        <div class="col-lg-12">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3 style="user-select: none; -webkit-user-select: none;">Address</h3>
                                <p class="text-capitalize" style="user-select: none; -webkit-user-select: none;  text-align: justify; max-width: 100%;"><?= $item->address ?></p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3 style="user-select: none; -webkit-user-select: none;">Call Us</h3>
                                <p style="user-select: none; -webkit-user-select: none;"><?= $item->phone ?></p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3 style="user-select: none; -webkit-user-select: none;">Email Us</h3>
                                <p style="user-select: none; -webkit-user-select: none;"><?= $item->email ?></p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>
                </div>

                <div class="col-lg-6 ">
                    <form action="actions/contact/create_contact.php" method="post">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Nama" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Alamat Email" required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="phone" placeholder="No. Telphone" required="">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subjek" required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="massage" rows="4" placeholder="Pesan" required=""></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-secondary" name="tombol">Kirim Pesan</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section>