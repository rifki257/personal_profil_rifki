            <?php
            include '../config/connection.php';
            $skills = "SELECT * FROM skills";
            $result = mysqli_query($connect, $skills) or die(mysqli_error($connect));
            ?>
            <section id="skill" class="stats section">
              <div class="container section-title" data-aos="fade-up">
                <h2 style="user-select: none; -webkit-user-select: none;">keterampilan</h2>
                <p style="user-select: none; -webkit-user-select: none;">periksa keterampilan</p>
              </div>
              <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                  <?php while ($item = $result->fetch_object()): ?>
                    <div class="col-lg-3 col-md-6">
                      <div class="stats-item align-items-center h-100">
                        <img src="../storages/skill/<?= $item->image ?>" alt="foto saya" class="profile-image mx-auto d-block mb-3" width="150" height="150" style="user-select: none; -webkit-user-select: none;">
                        <?php
                        $percent = $item->percent;
                        $color = 'bg-success';
                        if ($percent <= 40) {
                          $color = 'bg-danger';
                        } elseif ($percent <= 70) {
                          $color = 'bg-warning';
                        }
                        ?>
                        <div class="progress">
                          <div class="progress-bar <?= $color ?>" role="progressbar" style="width: <?= $item->percent ?>%; user-select: none; -webkit-user-select: none;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?= $item->percent ?>%</div>
                        </div>
                        <p class="stat-label text-capitalize my-2 text-center" style="user-select: none; -webkit-user-select: none;"><?= $item->skill ?></p>
                        <div class="container">
                          <button type="button" class="btn btn-secondary w-100" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="<?= $item->description ?>">
                            Tentang Skill
                          </button>
                        </div>
                      </div>

                    </div>
                  <?php endwhile; ?>
                </div>

              </div>

            </section>