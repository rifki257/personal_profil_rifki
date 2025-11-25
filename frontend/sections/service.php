            <?php
            include '../config/connection.php';
            $services = "SELECT * FROM services";
            $result = mysqli_query($connect, $services) or die(mysqli_error($connect));
            ?>
            <section id="services" class="services light-background ">

              <!-- Section Title -->
              <div class="container section-title" data-aos="fade-up"  style="user-select: none; -webkit-user-select: none;">
                <h2>melayani</h2>
                <p>periksa layanan<br></p>
              </div><!-- End Section Title -->

              <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-5 justify-content-center">
                  <?php while ($item = $result->fetch_object()): ?>
                    <div class="col-xl-4 col-md-6 " data-aos="zoom-in " data-aos-delay="200 ">
                      <div class="service-item" style="user-select: none; -webkit-user-select: none;">
                        <div style="display: flex; justify-content: center;">
                          <img src="../storages/service/<?= $item->image ?>" class="img-fluid w-90" alt="">
                        </div>
                        <div class="details" style="padding-top: 30px;">
                          <div class="icon">
                            <i class="<?= $item->icon ?>"></i>
                          </div>
                          <h3 class="text-capitalize"><?= $item->job ?></h3>
                          <p class="text-capitalize"><?= $item->description ?></p>
                        </div>
                      </div>
                    </div><!-- End Service Item -->
                  <?php endwhile; ?>
                </div>

              </div>

            </section>