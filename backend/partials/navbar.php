
<?php

    $abouts = "SELECT * FROM abouts LIMIT 1";
    $result = mysqli_query($connect, $abouts) or die(mysqli_error($connect));
?>
<!--  Main wrapper -->
<div class="body-wrapper">
    <!--  Header Start -->
    <header class="app-header" style="background: linear-gradient(to right, #3b82f6, #6366f1); box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);">
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item d-block d-xl-none">
                    <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
            </ul>
            <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                            data-bs-toggle="dropdown" aria-expanded="false">

                            <?php
                            $no =1;
                            while($item =$result->fetch_object()):
                                ?>
                                <tr>
                                    <td>
                                        <img src="../../../storages/about/<?= $item->image?>" alt="Gambar" width="30" height="30" class="rounded-circle">
                                    </td>
                                </tr>
                                <?php
                                $no++;
                                endwhile;
                                ?>

                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                            <div class="message-body">
                                <a href="../../pages/about/index.php" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-user fs-6"></i>
                                    <p class="mb-0 fs-3">My Profile</p>
                                </a>
                                <a href="../../actions/auth/logout.php"
                                    class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--  Header End -->
    <div class="container-fluid">