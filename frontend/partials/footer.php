    <?php
    include '../config/connection.php';
    $abouts = "SELECT * FROM abouts";
    $result = mysqli_query($connect, $abouts) or die(mysqli_error($connect));
    $contacts = "SELECT * FROM contacts";
    $result_contacts = mysqli_query($connect, $contacts) or die(mysqli_error($connect));
    $socmeds = "SELECT * FROM socmeds";
    $result_socmeds = mysqli_query($connect, $socmeds) or die(mysqli_error($connect));


    $data_items = [];
    while ($row = mysqli_fetch_assoc($result_contacts)) {
    }
    ?>
    <footer id="footer" class="footer dark-background">

      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">RIFKI</span>
            </a>
            <div class="footer-contact pt-3">
              <p><strong>Alamat:</strong> <span class="text-capitalize"><?= $item->address ?></span></p>
              <p><strong>Phone:</strong> <span><?= $item->phone ?></span></p>
              <p><strong>Email:</strong> <span><?= $item->email ?></span></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Tautan</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-newsletter">
            <h4>Buletin kami</h4>
            <p>Berlangganan buletin kami dan terima berita terbaru tentang produk dan layanan kami!</p>
            <form action="actions/newsletter/newsletter.php" method="post">
              <div class="input-group">
                <input type="email" class="form-control" name="email" placeholder="Masukkan email" required>
                <button type="submit" class="btn btn-primary">Subscribe</button>
              </div>
            </form>
            <!-- socmed -->
            <div class="social-links d-flex mt-4">
              <?php while ($socmed = mysqli_fetch_object($result_socmeds)): ?>
                <a href="<?= $socmed->link ?>" target="_blank">
                  <i class="<?= $socmed->icon ?>"></i>
                </a>
              <?php endwhile; ?>
            </div>


          </div>
        </div>

        <div class="container copyright text-center mt-4">
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            <a href="https://bootstrapmade.com/">PortFolio</a> Distribusikan Oleh <a href=“https://themewagon.com>Rifki
          </div>
        </div>

    </footer>