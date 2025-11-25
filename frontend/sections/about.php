            <?php
            include '../config/connection.php';

            $abouts = "SELECT * FROM abouts LIMIT 1 OFFSET 1";
            $result = mysqli_query($connect, $abouts) or die(mysqli_error($connect));
            $item = $result->fetch_object()
?>

            <section id="about" class="about section light-background">
              <div class="container section-title" data-aos="fade-up">
                <h2 style="user-select: none; -webkit-user-select: none;">Tentang</h2>
                <p style="user-select: none; -webkit-user-select: none;">tentang saya</p>
              </div>

              <div class="container">
                <div class="row gy-4">
                  <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card" style="width: 100%; min-height:400px;">
                      <div class="body-card d-flex justify-content-center align-items-center">
                        <img src="../storages/about/<?= $item->image ?>" alt="foto saya" class="profile-image" style="user-select: none; -webkit-user-select: none;" width="90%">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5">
                      <ul style="font-size: 20px;">
                        <li><i class="bi bi-person-circle"></i> <span class="text-capitalize" style="user-select: none; -webkit-user-select: none;">Nama: <?= $item->name ?></span></li>
                        <li><i class="bi bi-person-workspace"></i> <span class="text-capitalize" style="user-select: none; -webkit-user-select: none;">Pekerjaan: <?= $item->work ?></span></li>
                        <li><i class="bi bi-calendar-check"></i> <span>Tgl, Lahir: <?= date("d-m-Y", strtotime($item->born)) ?></span></li>
                        <li><i class="bi bi-signpost-split"></i> <span class="text-capitalize" style="user-select: none; -webkit-user-select: none;">Code Pos: <?= $item->zip_code ?></span></li>
                        <li><i class="bi bi-kanban-fill"></i> <span class="text-capitalize" style="user-select: none; -webkit-user-select: none; ">Projek: <?= $item->total_project ?></span></li>
                        <li><i class="bi bi-body-text"></i> <span class="flex-grow-1">Keterangan: <?= $item->description ?></span></li>
                      </ul>
                    </div>
                  </div>
                      </div>
                    </div>
                  </section>
                  <div class="col-lg-4" data-aos="fade-up" data-aos-delay="250">
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    </div>
                  </div>
                </div>

              </div>

            </section><!-- /About Section -->