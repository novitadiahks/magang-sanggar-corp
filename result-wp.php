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
    <title>Ruang Digital | Weighted Product</title>
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
                            <div class="brand">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                    </tr>
                                    <?php
                                    $i = 0;
                                    while ($row = mysqli_fetch_array($result1)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row["id_brand"]; ?></td>
                                            <td><?php echo $row["nm_brand"]; ?></td>
                                        <?php
                                        $i++;
                                    }
                                        ?>
                                </table>
                            </div>
                            <br>
                            <div class="alt-kriteria">
                                <h3>Alternatif kriteria</h3>
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                    </tr>
                                    <?php
                                    $i = 0;
                                    while ($row = mysqli_fetch_array($result3)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row["id_ak"]; ?></td>
                                            <td><?php echo $row["ak_harga"]; ?></td>
                                            <td><?php echo $row["ak_kualitas"]; ?></td>
                                            <td><?php echo $row["ak_fitur"]; ?></td>
                                            <td><?php echo $row["ak_populer"]; ?></td>
                                            <td><?php echo $row["ak_purnajual"]; ?></td>
                                            <td><?php echo $row["ak_keawetan"]; ?></td>
                                        <?php
                                        $i++;
                                    }
                                        ?>
                                </table>
                                <br>
                            </div>
                            <div>
                                <h3>Kepentingan : </h3>
                                <table>
                                    <tr>
                                        <td>Harga</td>
                                        <td><?php echo $_POST["harga"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kualitas</td>
                                        <td><?php echo $_POST["Kualitas"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Fitur</td>
                                        <td><?php echo $_POST["Fitur"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Populer</td>
                                        <td><?php echo $_POST["Populer"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Purnajual</td>
                                        <td><?php echo $_POST["Purnajual"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Keawetan</td>
                                        <td><?php echo $_POST["Keawetan"]; ?></td>
                                    </tr>
                                </table>
                                <br>
                            </div>
                            <div class="hitung-bobot">
                                <h3>Bobot</h3>
                                <?php $total = $_POST["harga"] + $_POST["Kualitas"] + $_POST["Fitur"] + $_POST["Populer"] + $_POST["Purnajual"] + $_POST["Keawetan"];
                                $bobot = array($_POST["harga"] / $total, $_POST["Kualitas"] / $total, $_POST["Fitur"] / $total, $_POST["Populer"] / $total, $_POST["Purnajual"] / $total, $_POST["Keawetan"] / $total);
                                $bobot_k = array($_POST["harga"], $_POST["Kualitas"], $_POST["Fitur"], $_POST["Populer"], $_POST["Purnajual"], $_POST["Keawetan"]);

                                $pangkat = array();
                                if ($bobot_k[0] = 5) {
                                    $pangkat[0] = $bobot[0] * -1;
                                }
                                for ($x = 0; $x < 5; $x++) {
                                    if ($bobot_k[$x + 1] < 5) {
                                        $pangkat[$x + 1] = $bobot[$x + 1] * 1;
                                    }
                                }

                                for ($x = 0; $x < 6; $x++) {
                                    echo $bobot[$x] . "<br>";
                                }
                                echo "<br>";
                                ?>
                                <h3>Pangkat</h3>
                                <?php
                                for ($x = 0; $x < 6; $x++) {
                                    echo $pangkat[$x] . "<br>";
                                }
                                ?>
                            </div>
                            <div class="nilai_s">
                                <h3>Nilai S</h3>
                                <?php
                                $s_harga;
                                $s_kualitas;
                                $s_fitur;
                                $s_populer;
                                $s_purnajual;
                                $s_keawetan;
                                foreach ($result3 as $key => $value) {
                                    foreach ($value as $key => $valueX) {
                                        if ($key == "ak_harga") {
                                            $pangkat_ak_harga = pow($valueX, $pangkat[0]);
                                            $s_harga[] = ($pangkat_ak_harga);
                                            // echo $pangkat_ak_harga . "<br>";
                                            // print_r($valueX);
                                            // echo " " .  $key . "</br>";
                                        }
                                        if ($key == "ak_kualitas") {
                                            $pangkat_ak_kualitas = pow($valueX, $pangkat[1]);
                                            $s_kualitas[] = ($pangkat_ak_kualitas);
                                            // echo $pangkat_ak_kualitas . "<br>";
                                            // print_r($valueX);
                                            // echo " " .  $key . "</br>";
                                        }
                                        if ($key == "ak_fitur") {
                                            $pangkat_ak_fitur = pow($valueX, $pangkat[2]);
                                            $s_fitur[] = ($pangkat_ak_fitur);
                                            // echo $pangkat_ak_fitur . "<br>";
                                            // print_r($valueX);
                                            // echo " " .  $key . "</br>";
                                        }
                                        if ($key == "ak_populer") {
                                            $pangkat_ak_populer = pow($valueX, $pangkat[3]);
                                            $s_populer[] = ($pangkat_ak_populer);
                                            // echo $pangkat_ak_populer . "<br>";
                                            // print_r($valueX);
                                            // echo " " .  $key . "</br>";
                                        }
                                        if ($key == "ak_purnajual") {
                                            $pangkat_ak_purnajual = pow($valueX, $pangkat[4]);
                                            $s_purnajual[] = ($pangkat_ak_purnajual);
                                            // echo $pangkat_ak_purnajual . "<br>";
                                            // print_r($valueX);
                                            // echo " " .  $key . "</br>";
                                        }
                                        if ($key == "ak_keawetan") {
                                            $pangkat_ak_keawetan = pow($valueX, $pangkat[5]);
                                            $s_keawetan[] = ($pangkat_ak_keawetan);
                                            // echo $pangkat_ak_keawetan . "<br>" . "<br>";
                                            // print_r($valueX);
                                            // echo " " .  $key . "</br>" . "</br>";
                                        }
                                    }
                                }
                                $hasil_s;
                                for ($j = 0; $j < 4; $j++) {
                                    $nilai_s = $s_harga[$j] * $s_kualitas[$j] * $s_fitur[$j] * $s_populer[$j] * $s_purnajual[$j] * $s_keawetan[$j];
                                    echo "<br>";
                                    $hasil_s[] = $nilai_s;
                                    print_r($nilai_s);
                                }

                                ?>
                            </div>
                            <div class="hasil-v">
                                <h3>Hasil V</h3>
                                <?php
                                $hitung_v =  array_sum($hasil_s);
                                $hasil_v;
                                $final_v;
                                for ($a = 0; $a < 4; $a++) {
                                    $hasil_v[] = $hasil_s[$a] / $hitung_v;
                                }
                                $hitung_rank = $hasil_v;
                                $rank = ["samsung" => $hasil_v[0], "iphone" => $hasil_v[1], "vivo" => $hasil_v[2], "oppo" => $hasil_v[3]];
                                foreach ($rank as $key => $value) {
                                    echo "<br>" . $key . " : " . $value;
                                }
                                ?>

                            </div>
                            <div class="ranking">
                                <br>

                                <h3>Hasil Rank</h3>
                                <?php
                                arsort($rank);
                                foreach ($rank as $key => $value) {
                                ?>
                                    <table>
                                        <tr>

                                            <td> <?php echo $key ?> </td>
                                            <td> - <?php echo $value ?></td>
                                        </tr>
                                    </table>
                                <?php
                                }
                                ?>
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