<?php
include_once("Database.php");

// Fetch all users data from database
$invest = mysqli_query($mysqli, "SELECT * FROM invest ORDER BY id ASC");
$umur = mysqli_query($mysqli, "SELECT umur, invest, COUNT(*) as pumur FROM invest GROUP BY umur, invest DESC");
$status = mysqli_query($mysqli, "SELECT status, invest, COUNT(*) as pstatus FROM invest GROUP BY status, invest DESC");
$penghasilan = mysqli_query($mysqli, "SELECT penghasilan, invest, COUNT(*) as phasil FROM invest GROUP BY penghasilan, invest DESC");
$hutang = mysqli_query($mysqli, "SELECT hutang, invest, COUNT(*) as phutang FROM invest GROUP BY hutang, invest DESC");


if (isset($_POST['submit'])) {
    foreach ($invest as $key => $value) {
        foreach ($value as $key => $valueX) {
            if ($key == "invest") {
                $isiinvest[] = ($valueX);
            }
        }
    }

    foreach ($umur as $key => $value) {
        foreach ($value as $key => $valueX) {
            if ($key == 'pumur') {
                $isipumur[] = ($valueX);
            }
        }
    }

    foreach ($status as $key => $value) {
        foreach ($value as $key => $valueX) {
            if ($key == 'pstatus') {
                $isipstatus[] = ($valueX);
            }
        }
    }

    foreach ($penghasilan as $key => $value) {
        foreach ($value as $key => $valueX) {
            if ($key == 'phasil') {
                $isiphasil[] = ($valueX);
            }
        }
    }

    foreach ($hutang as $key => $value) {
        foreach ($value as $key => $valueX) {
            if ($key == 'phutang') {
                $isiphutang[] = ($valueX);
            }
        }
    }

    $kolom = count($isiinvest);

    for ($i = 0; $i < $kolom; $i++) {
        if ($isiinvest[$i] == 'Ya') {
            $classya[] = $isiinvest[$i];
        }
        if ($isiinvest[$i] == 'Tidak') {
            $classtidak[] = $isiinvest[$i];
        }
    };

    $jumlahya = count($classya);
    $jumlahtidak = count($classtidak);

    $kolomu = count($isipumur);
    $koloms = count($isipstatus);
    $kolomp = count($isiphasil);
    $kolomh = count($isiphutang);

    foreach ($_POST['umur'] as $select) {
        switch ($select) {
            case '1': //MUDA
                $umurya = $isipumur[0] / $jumlahya;
                $umurno = $isipumur[1] / $jumlahtidak;
                $hasil[0] = 'Muda (<35 Tahun)';
                break;
            case '2': //PARUH BAYA
                $umurya = $isipumur[2] / $jumlahya;
                $umurno = $isipumur[3] / $jumlahtidak;
                $hasil[0] = 'Paruh Baya (35-50 Tahun)';
                break;
            case '3': //TUA
                $umurya = $isipumur[4] / $jumlahya;
                $umurno = $isipumur[5] / $jumlahtidak;
                $hasil[0] = 'Tua (>50 Tahun)';
                break;
        }
    }

    foreach ($_POST['status'] as $select) {
        switch ($select) {
            case '1': //LAJANG
                $statusya = $isipstatus[0] / $jumlahya;
                $statusno = $isipstatus[1] / $jumlahtidak;
                $hasil[1] = 'Lajang';
                break;
            case '2': //MENIKAH
                $statusya = $isipstatus[2] / $jumlahya;
                $statusno = $isipstatus[3] / $jumlahtidak;
                $hasil[1] = 'Menikah';
                break;
        }
    }

    foreach ($_POST['penghasilan'] as $select) {
        switch ($select) {
            case '1': //RENDAH
                $hasilya = $isiphasil[0] / $jumlahya;
                $hasilno = $isiphasil[1] / $jumlahtidak;
                $hasil[2] = 'Rendah (<3 Juta)';
                break;
            case '2': //SEDANG
                $hasilya = $isiphasil[2] / $jumlahya;
                $hasilno = $isiphasil[3] / $jumlahtidak;
                $hasil[2] = 'Sedang (3-10 Juta)';
                break;
            case '3': //TINGGI
                $hasilya = $isiphasil[4] / $jumlahya;
                $hasilno = $isiphasil[5] / $jumlahtidak;
                $hasil[2] = 'Tinggi (>10 Juta)';
                break;
        }
    }

    foreach ($_POST['hutang'] as $select) {
        switch ($select) {
            case '1': //YA
                $hutangya = $isiphutang[2] / $jumlahya;
                $hutangno = $isiphutang[3] / $jumlahtidak;
                $hasil[3] = 'Ya';
                break;
            case '2': //TIDAK
                $hutangya = $isiphutang[0] / $jumlahya;
                $hutangno = $isiphutang[1] / $jumlahtidak;
                $hasil[3] = 'Tidak';
                break;
        }
    }

    $totalya = $umurya * $statusya * $hasilya * $hutangya * $jumlahya;
    $totalno = $umurno * $statusno * $hasilno * $hutangno * $jumlahtidak;

    if ($totalya > $totalno) {
        $investasi[0] = 'Ya';
        $investasi[1] = $totalya;
    } else {
        $investasi[0] = 'Tidak';
        $investasi[1] = $totalno;
    }
}
?>

<!DOCTYPE html>
<!-- 
Template Name: Pangong - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/
License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>RuangDigital | Naive Bayes</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- vector map CSS -->
    <link href="vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- Toastr CSS -->
    <link href="vendors/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>


    <!-- HK Wrapper -->
    <div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-menu"></i></a>
            <a class="navbar-brand" href="dashboard1.html">
                <img class="brand-img d-inline-block mr-5" src="dist/img/logo.png" alt="brand" />RuangDigital
            </a>
            <ul class="navbar-nav hk-navbar-content">

                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="dist/img/avatar10.jpg" alt="user" class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <div class="media-body">
                                <span>Madelyn Shane<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                        <a class="dropdown-item" href="inbox.html"><i class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
                        <div class="dropdown-divider"></div>
                        <div class="sub-dropdown-menu show-on-hover">
                            <a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
                            <div class="dropdown-menu open-left-side">
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log
                                out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <form role="search" class="navbar-search">
            <div class="position-relative">
                <a href="javascript:void(0);" class="navbar-search-icon"><i class="ion ion-ios-search"></i></a>
                <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
                <a id="navbar_search_close" class="navbar-search-close" href="#"><i class="ion ion-ios-close"></i></a>
            </div>
        </form>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <nav class="hk-nav hk-nav-light">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item active">
                            <a class="nav-link" href="dashboard.html">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#pages_drp">
                                <i class="ion ion-ios-copy"></i>
                                <span class="nav-link-text">Sistem Pendukung Keputusan</span>
                            </a>
                            <ul id="pages_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="wp.html">Weighted Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ahp.html">Analytical Hierarchy Process</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="nb.html">Naive Bayes</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <div class="hasil">
                                <div class="tabel">
                                    <table>
                                        <thead>
                                            <th>Atribut Dicari</th>
                                            <th>Nilai Atribut</th>
                                            <th>Hasil Akhir</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Investasi</td>
                                                <td>Ya</td>
                                                <td><?php echo $totalya; ?></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Tidak</td>
                                                <td><?php echo $totalno; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="kesimpulan">
                                    <p>
                                        Hasilnya, Orang dengan Umur : <?php echo $hasil[0]; ?>,<br>
                                        Status : <?php echo $hasil[1]; ?>,<br>
                                        Penghasilan : <?php echo $hasil[2]; ?>,<br>
                                        Hutang Konsumtif : <?php echo $hasil[3]; ?>,<br>
                                        Kemungkinan Besar Investasi : <?php echo $investasi[0]; ?><br>
                                        dengan Nilai Terbesar = <?php echo $investasi[1]; ?>
                                    </p>
                                </div>
                                <div>
                                    <a class="btn btn-outline-dark" href="form.php" role="button">Perhitungan</a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->

            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="#" class="text-dark">Hencework</a> © 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>

    <!-- Owl JavaScript -->
    <script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>

</body>

</html>