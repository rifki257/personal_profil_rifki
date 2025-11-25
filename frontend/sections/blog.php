<?php
include '../config/connection.php';
$blogs = "SELECT * FROM blogs LIMIT 3";
$result = mysqli_query($connect, $blogs) or die(mysqli_error($connect));
?>
<section id="blog" class="team section ">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up" style="user-select: none; -webkit-user-select: none;">
    <h2 style="user-select: none; -webkit-user-select: none;">Blog</h2>
    <div class="d-flex justify-content-between align-items-center" style="user-select: none; -webkit-user-select: none;">
      <p class="mb-0">periksa blog</p>
      <button class="btn btn-danger">
        <a href="sections/semuablog.php" style="font-size: 100%; user-select: none; -webkit-user-select: none; color: white;">Lihat Selengkapnya</a>
      </button>
    </div>
  </div>
  <!-- End Section Title -->
  <div class="container">
    <div class="row py-5">
      <?php while ($item = $result->fetch_object()): ?>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <div data-aos="fade-up" data-aos-delay="100">
                <div class="member "> <!-- Changed to flex row -->
                  <img src="../storages/blog/<?= $item->image ?>" alt="foto saya" class="profile-image" height="400" style="display:block; margin:0 auto;">
                  <div class="member-info" style="width: 40vh;">
                    <h4 class="mb-1"><?= $item->tittle ?></h4>
                    <div class="d-flex justify-content-between mb-2">
                      <span><?= date('d-m-Y', strtotime($item->date)) ?></span>
                      <span><?= $item->author ?></span>
                    </div>
                    <div style="max-width: 600px; margin: 0 auto;">
                      <a href="sections/blog/detailblog.php?id=<?= $item->id ?>" style="display: block;">
                        <button
                          type="button"
                          style="width: 100%; background: blue; color: white; padding: 7px; border: none; border-radius: 5px; font-size: 13px; user-select: none; -webkit-user-select: none;">
                          Lihat Lebih Detail
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