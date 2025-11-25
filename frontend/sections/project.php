<?php
$qProject = "SELECT * FROM projects";
$result = mysqli_query($connect, $qProject) or die(mysqli_error($connect));
?>

<section id="project" class="portfolio section light-background">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2 style="user-select: none; -webkit-user-select: none;">proyek</h2>
    <p style="user-select: none; -webkit-user-select: none;">
      periksa proyek</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
      <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active" style="user-select: none; -webkit-user-select: none;">All</li>
        <?php
        $qcategory = mysqli_query($connect, "SELECT DISTINCT category FROM projects");
        while ($row = mysqli_fetch_object($qcategory)):
          $category = strtolower($row->category); // untuk class filter
        ?>
          <li data-filter=".filter-<?= $category ?>"><?= ucfirst($row->category) ?></li>
        <?php endwhile; ?>
      </ul><!-- End Portfolio Filters -->

      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
        <?php while ($project = $result->fetch_object()):
          $categoryClass = 'filter-' . strtolower($project->category);
        ?>
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item <?= $categoryClass ?>">
            <div class="portfolio-content h-100">
              <div class="image-container" style="height: 250px; overflow: hidden; user-select: none; -webkit-user-select: none;">
                <img src="../storages/project/<?= $project->image ?>"
                  class="img-fluid w-100 h-100 object-fit-cover"
                  alt="<?= htmlspecialchars($project->title) ?>"
                  loading="lazy">
              </div>
              <div class="portfolio-info">
                <h4 style="user-select: none; -webkit-user-select: none;"><?= $project->title ?></h4>
                <p style="user-select: none; -webkit-user-select: none;"><?= $project->job ?></p>
                <a href="../storages/project/<?= $project->image ?>"
                  class="glightbox preview-link"
                  data-gallery="portfolio-gallery-app"
                  data-title="<?= htmlspecialchars($project->title) ?>"
                  data-description="<?= htmlspecialchars($project->description) ?>">
                  <i class="bi bi-zoom-in"></i>
                </a>

              </div>
            </div>
          </div><!-- End Portfolio Item -->
        <?php endwhile; ?>
      </div><!-- End Portfolio Container -->
    </div>
  </div>
</section>

<style>
  .object-fit-cover {
    object-fit: cover;
  }
</style>