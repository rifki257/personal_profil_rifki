<?php

$abouts = "SELECT * FROM abouts LIMIT 1";
$result = mysqli_query($connect, $abouts) or die(mysqli_error($connect));
?>
<style>
  /* ===== Sidebar Styling ===== */
  .left-sidebar {
    background: linear-gradient(to right, #3b82f6, #6366f1) !important;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0);
    transition: all 0.3s ease;
    height: 100vh;
    overflow-y: auto;
  }

  /* Logo Brand */
  .brand-logo {
    padding: 15px 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }

  .logo-img img {
    transition: transform 0.3s;
  }

  .logo-img:hover img {
    transform: scale(1.05);
  }

  /* Sidebar Items */
  .sidebar-nav {
    padding: 10px 0;
  }

  .sidebar-item {
    margin: 5px 0;
  }

  .sidebar-link {
    color: #e2e8f0 !important;
    padding: 12px 20px !important;
    border-radius: 8px !important;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
  }

  .sidebar-link:hover {
    background: rgba(255, 255, 255, 0.1) !important;
    transform: translateX(5px);
  }

  .sidebar-link.active {
    background: #3b82f6 !important;
    color: white !important;
  }

  .hide-menu {
    font-size: 0.95rem;
    font-weight: 500;
  }

  /* Icon (jika di-uncomment) */
  .sidebar-link i {
    margin-right: 10px;
    font-size: 1.1rem;
  }

  /* Close Button */
  .close-btn {
    color: #94a3b8;
    transition: all 0.3s;
  }

  .close-btn:hover {
    color: white;
    transform: rotate(90deg);
  }

  /* Scrollbar Styling */
  .scroll-sidebar {
    scrollbar-width: thin;
    scrollbar-color: #3b82f6 transparent;
  }

  .scroll-sidebar::-webkit-scrollbar {
    width: 5px;
  }

  .scroll-sidebar::-webkit-scrollbar-thumb {
    background: #3b82f6;
    border-radius: 10px;
  }
</style>

<body>
  <!--  Body Wrapper -->
  <div class="body-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>

        <div class="brand-logo  align-items-center justify-content-between">
          <a href="./index.php" class="text-nowrap logo-img">
            <?php
            $no = 1;
            while ($item = $result->fetch_object()):
            ?>
              <tr>
                <td>
                  <img src="../../../storages/about/<?= $item->image ?>" alt="Gambar" width="100" height="100" class="d-block mx-auto rounded-circle">
                </td>
              </tr>
            <?php
              $no++;
            endwhile;
            ?>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar text-capitalize" data-simplebar="">
          <ul id="sidebarnav">

            <li class="sidebar-item">
              <a class="sidebar-link" href="../dashboard/index.php" aria-expanded="false">
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../about/index.php" aria-expanded="false">
                <span class="hide-menu">About</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="../Blog/index.php" aria-expanded="false">
                <span class="hide-menu">Blog</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../contact/index.php" aria-expanded="false">
                <span class="hide-menu">Contact</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../project/index.php" aria-expanded="false">
                <span class="hide-menu">project</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../resume/index.php" aria-expanded="false">
                <span class="hide-menu">resume</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../skill/index.php" aria-expanded="false">
                <span class="hide-menu">skill</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../service/index.php" aria-expanded="false">
                <span class="hide-menu">service</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../socmed/index.php" aria-expanded="false">
                <span class="hide-menu">socmed</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../buletin/index.php" aria-expanded="false">
                <span class="hide-menu">Berlangganan</span>
              </a>
            </li>
          </ul>

        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->