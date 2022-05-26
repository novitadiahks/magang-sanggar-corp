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
    <title>RuangDigital | Analytical Hierarchy Process</title>
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
                                            <a class="nav-link" href="wp">Weighted Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ahp">Analytical Hierarchy Process</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="nb">Naive Bayes</a>
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
                            <?php

                            include_once("count-ahp.php");

                            $alternatif = array($alter1, $alter2, $alter3, $alter4, $alter5, $alter6);
                            $h_harga = 0;
                            $h_kualitas = 0;
                            $h_fitur= 0;
                            $h_populer = 0;
                            $h_purna = 0;
                            $h_awet = 0;
                            
                            for ($a = 0; $a < 6; $a++) {
                                for ($b = 0; $b < 6; $b++) {
                                    $t_harga = $alternatif[$a][0];
                                    $t_kualitas = $alternatif[$a][1];
                                    $t_fitur =  $alternatif[$a][2];
                                    $t_populer =  $alternatif[$a][3];
                                    $t_purna =  $alternatif[$a][4];
                                    $t_awet =  $alternatif[$a][5];
                                }
                                $h_harga += $t_harga;
                                $h_kualitas += $t_kualitas;
                                $h_fitur += $t_fitur;
                                $h_populer += $t_populer;
                                $h_purna += $t_purna;
                                $h_awet += $t_awet;
                            }
                            echo "<br>";
                            echo $h_harga;
                            echo "<br>";
                            echo $h_kualitas;
                            echo "<br>";
                            echo $h_fitur;
                            echo "<br>";
                            echo $h_populer;
                            echo "<br>";
                            echo $h_purna;
                            echo "<br>";
                            echo $h_awet;
                            echo "<br>";

                            $eigen_alt = array(
                                array($alternatif[0][0] / $h_harga, $alternatif[0][1] / $h_kualitas, $alternatif[0][2] / $h_fitur, $alternatif[0][3] / $h_populer, $alternatif[0][4] / $h_purna, $alternatif[0][5] / $h_awet),
                                array($alternatif[1][0] / $h_harga, $alternatif[1][1] / $h_kualitas, $alternatif[1][2] / $h_fitur, $alternatif[1][3] / $h_populer, $alternatif[1][4] / $h_purna, $alternatif[1][5] / $h_awet),
                                array($alternatif[2][0] / $h_harga, $alternatif[2][1] / $h_kualitas, $alternatif[2][2] / $h_fitur, $alternatif[2][3] / $h_populer, $alternatif[2][4] / $h_purna, $alternatif[2][5] / $h_awet),
                                array($alternatif[3][0] / $h_harga, $alternatif[3][1] / $h_kualitas, $alternatif[3][2] / $h_fitur, $alternatif[3][3] / $h_populer, $alternatif[3][4] / $h_purna, $alternatif[3][5] / $h_awet),
                                array($alternatif[4][0] / $h_harga, $alternatif[4][1] / $h_kualitas, $alternatif[4][2] / $h_fitur, $alternatif[4][3] / $h_populer, $alternatif[4][4] / $h_purna, $alternatif[4][5] / $h_awet),
                                array($alternatif[5][0] / $h_harga, $alternatif[5][1] / $h_kualitas, $alternatif[5][2] / $h_fitur, $alternatif[5][3] / $h_populer, $alternatif[5][4] / $h_purna, $alternatif[5][5] / $h_awet)
                            );
                            echo "<br>";
                            for ($c = 0; $c < 6; $c++) {
                                for ($d = 0; $d < 6; $d++) {
                                    echo $eigen_alt[$c][$d] . "<br>";
                                }
                                echo "<br>";
                            }

                            $t_eigen_alt = array(array_sum($eigen_alt[0]), array_sum($eigen_alt[1]), array_sum($eigen_alt[2]), array_sum($eigen_alt[3]), array_sum($eigen_alt[4]), array_sum($eigen_alt[5]));
                            echo "<br>";

                            for ($x = 0; $x < 6; $x++) {
                                echo $t_eigen_alt[$x] . "<br>";
                            }
                            echo "<br>";
                            $r_eigen_alt;

                            for ($z = 0; $z < 6; $z++) {
                                $r_eigen_alt[] = $t_eigen_alt[$z] / 6;
                                echo $r_eigen_alt[$z] . "<br>";
                            }

                            $lambda_alter = ($h_harga * $r_eigen_alt[0]) + ($h_kualitas * $r_eigen_alt[1]) + ($h_fitur * $r_eigen_alt[2]) + ($h_populer * $r_eigen_alt[3]) + ($h_purna * $r_eigen_alt[4]) + ($h_awet * $r_eigen_alt[5]);
                            echo "<br>" . $lambda_alter;

                            $ci_alter = ($lambda_alter - 6) / (6 - 1);
                            echo "<br>" . $ci_alter;

                            $cr_alter = $ci_alter / 1.24;
                            echo "<br>" . $cr_alter;
                            echo "<br>";

                            echo "======================================================================================================================";
                            echo "<br>";


                            $harga = array(
                                array(1, 5, 0.333333333, 0.5),
                                array(0.2, 1, 0.2, 0.2),
                                array(3, 5, 1, 2),
                                array(2, 5, 0.5, 1)
                            );

                            $h_harga_sam = 0;
                            $h_harga_ip = 0;
                            $h_harga_xia =0; 
                            $h_harga_opp =0;

                            for ($a = 0; $a < 4; $a++) {
                                for ($b = 0; $b < 4; $b++) {
                                    $t_harga_sam = $harga[$a][0];
                                    $t_harga_ip = $harga[$a][1];
                                    $t_harga_xia = $harga[$a][2];
                                    $t_harga_opp = $harga[$a][3];
                                }
                                $h_harga_sam += $t_harga_sam;
                                $h_harga_ip += $t_harga_ip;
                                $h_harga_xia += $t_harga_xia;
                                $h_harga_opp += $t_harga_opp;
                            }

                            echo "<br>";
                            echo $h_harga_sam;
                            echo "<br>";
                            echo $h_harga_ip;
                            echo "<br>";
                            echo $h_harga_xia;
                            echo "<br>";
                            echo $h_harga_opp;
                            echo "<br>";

                            $eigen_harga = array(
                                array($harga[0][0] / $h_harga_sam, $harga[0][1] / $h_harga_ip, $harga[0][2] / $h_harga_xia, $harga[0][3] / $h_harga_opp),
                                array($harga[1][0] / $h_harga_sam, $harga[1][1] / $h_harga_ip, $harga[1][2] / $h_harga_xia, $harga[1][3] / $h_harga_opp),
                                array($harga[2][0] / $h_harga_sam, $harga[2][1] / $h_harga_ip, $harga[2][2] / $h_harga_xia, $harga[2][3] / $h_harga_opp),
                                array($harga[3][0] / $h_harga_sam, $harga[3][1] / $h_harga_ip, $harga[3][2] / $h_harga_xia, $harga[3][3] / $h_harga_opp),
                            );
                            echo "<br>";
                            for ($c = 0; $c < 4; $c++) {
                                for ($d = 0; $d < 4; $d++) {
                                    echo $eigen_harga[$c][$d] . "<br>";
                                }
                                echo "<br>";
                            }
                            echo "<br>";
                            $t_eigen_harga = array(array_sum($eigen_harga[0]), array_sum($eigen_harga[1]), array_sum($eigen_harga[2]), array_sum($eigen_harga[3]));
                            for ($x = 0; $x < 4; $x++) {
                                echo $t_eigen_harga[$x] . "<br>";
                            }
                            echo "<br>";
                            $r_eigen_harga;

                            for ($z = 0; $z < 4; $z++) {
                                $r_eigen_harga[] = $t_eigen_harga[$z] / 4;
                                echo $r_eigen_harga[$z] . "<br>";
                            }


                            $lambda_harga = ($h_harga_sam * $r_eigen_harga[0]) + ($h_harga_ip * $r_eigen_harga[1]) + ($h_harga_xia * $r_eigen_harga[2]) + ($h_harga_opp * $r_eigen_harga[3]);
                            echo "<br>" . $lambda_harga;

                            $ci_harga = ($lambda_harga - 4) / (4 - 1);
                            echo "<br>" . $ci_harga;

                            $cr_harga = $ci_harga / 0.90;
                            echo "<br>" . $cr_harga;
                            echo "<br>";

                            echo "======================================================================================================================";
                            echo "<br>";

                            $kualitas = array(
                                array(1, 0.333333333, 5, 5),
                                array(3, 1, 7, 7),
                                array(0.2, 0.142857143, 1, 2),
                                array(0.2, 0.142857143, 0.5, 1)
                            );

                            $h_k_sam = 0;
                                $h_k_ip = 0;
                                $h_k_xia = 0;
                                $h_k_opp = 0;
                            for ($a = 0; $a < 4; $a++) {
                                for ($b = 0; $b < 4; $b++) {
                                    $t_k_sam = $kualitas[$a][0];
                                    $t_k_ip = $kualitas[$a][1];
                                    $t_k_xia = $kualitas[$a][2];
                                    $t_k_opp = $kualitas[$a][3];
                                }
                                $h_k_sam += $t_k_sam;
                                $h_k_ip += $t_k_ip;
                                $h_k_xia += $t_k_xia;
                                $h_k_opp += $t_k_opp;
                            }


                            echo "<br>";
                            echo $h_k_sam;
                            echo "<br>";
                            echo $h_k_ip;
                            echo "<br>";
                            echo $h_k_xia;
                            echo "<br>";
                            echo $h_k_opp;
                            echo "<br>";

                            $eigen_kual = array(
                                array($kualitas[0][0] / $h_k_sam, $kualitas[0][1] / $h_k_ip, $kualitas[0][2] / $h_k_xia, $kualitas[0][3] / $h_k_opp),
                                array($kualitas[1][0] / $h_k_sam, $kualitas[1][1] / $h_k_ip, $kualitas[1][2] / $h_k_xia, $kualitas[1][3] / $h_k_opp),
                                array($kualitas[2][0] / $h_k_sam, $kualitas[2][1] / $h_k_ip, $kualitas[2][2] / $h_k_xia, $kualitas[2][3] / $h_k_opp),
                                array($kualitas[3][0] / $h_k_sam, $kualitas[3][1] / $h_k_ip, $kualitas[3][2] / $h_k_xia, $kualitas[3][3] / $h_k_opp)
                            );

                            echo "<br>";
                            for ($c = 0; $c < 4; $c++) {
                                for ($d = 0; $d < 4; $d++) {
                                    echo $eigen_kual[$c][$d] . "<br>";
                                }
                                echo "<br>";
                            }

                            echo "<br>";
                            $t_eigen_kual = array(array_sum($eigen_kual[0]), array_sum($eigen_kual[1]), array_sum($eigen_kual[2]), array_sum($eigen_kual[3]));
                            for ($x = 0; $x < 4; $x++) {
                                echo $t_eigen_kual[$x] . "<br>";
                            }

                            echo "<br>";
                            $r_eigen_kual;

                            for ($z = 0; $z < 4; $z++) {
                                $r_eigen_kual[] = $t_eigen_kual[$z] / 4;
                                echo $r_eigen_kual[$z] . "<br>";
                            }

                            $lambda_kualitas = ($h_k_sam * $r_eigen_kual[0]) + ($h_k_ip * $r_eigen_kual[1]) + ($h_k_xia * $r_eigen_kual[2]) + ($h_k_opp * $r_eigen_kual[3]);
                            echo "<br>" . $lambda_kualitas;

                            $ci_kual = ($lambda_kualitas - 4) / (4 - 1);
                            echo "<br>" . $ci_kual;

                            $cr_kual = $ci_kual / 0.90;
                            echo "<br>" . $ci_kual;
                            echo "<br>";

                            echo "======================================================================================================================";
                            echo "<br>";
                            echo "<br>";

                            $fitur = array(
                                array(1, 2, 5, 7),
                                array(0.5, 1, 5, 9),
                                array(0.2, 0.142857143, 1, 2),
                                array(0.142857143, 0.111111111, 0.5, 1)
                            );
                            $h_f_sam = 0;
                                $h_f_ip = 0;
                                $h_f_xia = 0;
                                $h_f_opp = 0;

                            for ($a = 0; $a < 4; $a++) {
                                for ($b = 0; $b < 4; $b++) {
                                    $t_f_sam = $fitur[$a][0];
                                    $t_f_ip = $fitur[$a][1];
                                    $t_f_xia = $fitur[$a][2];
                                    $t_f_opp = $fitur[$a][3];
                                }
                                $h_f_sam += $t_f_sam;
                                $h_f_ip += $t_f_ip;
                                $h_f_xia += $t_f_xia;
                                $h_f_opp += $t_f_opp;
                            }

                            echo "<br>";
                            echo $h_f_sam;
                            echo "<br>";
                            echo $h_f_ip;
                            echo "<br>";
                            echo $h_f_xia;
                            echo "<br>";
                            echo $h_f_opp;
                            echo "<br>";

                            $eigen_fitur = array(
                                array($fitur[0][0] / $h_f_sam, $fitur[0][1] / $h_f_ip, $fitur[0][2] / $h_f_xia, $fitur[0][3] / $h_f_opp),
                                array($fitur[1][0] / $h_f_sam, $fitur[1][1] / $h_f_ip, $fitur[1][2] / $h_f_xia, $fitur[1][3] / $h_f_opp),
                                array($fitur[2][0] / $h_f_sam, $fitur[2][1] / $h_f_ip, $fitur[2][2] / $h_f_xia, $fitur[2][3] / $h_f_opp),
                                array($fitur[3][0] / $h_f_sam, $fitur[3][1] / $h_f_ip, $fitur[3][2] / $h_f_xia, $fitur[3][3] / $h_f_opp)
                            );

                            echo "<br>";
                            for ($c = 0; $c < 4; $c++) {
                                for ($d = 0; $d < 4; $d++) {
                                    echo $eigen_fitur[$c][$d] . "<br>";
                                }
                                echo "<br>";
                            }

                            echo "<br>";
                            $t_eigen_fitur = array(array_sum($eigen_fitur[0]), array_sum($eigen_fitur[1]), array_sum($eigen_fitur[2]), array_sum($eigen_fitur[3]));
                            for ($x = 0; $x < 4; $x++) {
                                echo $t_eigen_fitur[$x] . "<br>";
                            }

                            echo "<br>";
                            $r_eigen_fitur;

                            for ($z = 0; $z < 4; $z++) {
                                $r_eigen_fitur[] = $t_eigen_fitur[$z] / 4;
                                echo $r_eigen_fitur[$z] . "<br>";
                            }

                            $lambda_fitur = ($h_f_sam * $r_eigen_fitur[0]) + ($h_f_ip * $r_eigen_fitur[1]) + ($h_f_xia * $r_eigen_fitur[2]) + ($h_f_opp * $r_eigen_fitur[3]);
                            echo "<br>" . $lambda_fitur;

                            $ci_fitur = ($lambda_fitur - 4) / (4 - 1);
                            echo "<br>" . $ci_kual;

                            $cr_fitur = $ci_fitur / 0.90;
                            echo "<br>" . $ci_fitur;
                            echo "<br>";

                            echo "======================================================================================================================";
                            echo "<br>";
                            echo "<br>";

                            $populer = array(
                                array(1, 2, 3, 3),
                                array(0.5, 1, 5, 5),
                                array(0.333333333, 0.2, 1, 2),
                                array(0.333333333, 0.2, 0.5, 1)
                            );

                            $h_pop_sam = 0;
                                $h_pop_ip = 0;
                                $h_pop_xia = 0;
                                $h_pop_opp = 0;

                            for ($a = 0; $a < 4; $a++) {
                                for ($b = 0; $b < 4; $b++) {
                                    $t_pop_sam = $populer[$a][0];
                                    $t_pop_ip = $populer[$a][1];
                                    $t_pop_xia = $populer[$a][2];
                                    $t_pop_opp = $populer[$a][3];
                                }
                                $h_pop_sam += $t_pop_sam;
                                $h_pop_ip += $t_pop_ip;
                                $h_pop_xia += $t_pop_xia;
                                $h_pop_opp += $t_pop_opp;
                            }

                            echo "<br>";
                            echo $h_pop_sam;
                            echo "<br>";
                            echo $h_pop_ip;
                            echo "<br>";
                            echo $h_pop_xia;
                            echo "<br>";
                            echo $h_pop_opp;
                            echo "<br>";

                            $eigen_populer = array(
                                array($populer[0][0] / $h_pop_sam, $populer[0][1] / $h_pop_ip, $populer[0][2] / $h_pop_xia, $populer[0][3] / $h_pop_opp),
                                array($populer[1][0] / $h_pop_sam, $populer[1][1] / $h_pop_ip, $populer[1][2] / $h_pop_xia, $populer[1][3] / $h_pop_opp),
                                array($populer[2][0] / $h_pop_sam, $populer[2][1] / $h_pop_ip, $populer[2][2] / $h_pop_xia, $populer[2][3] / $h_pop_opp),
                                array($populer[3][0] / $h_pop_sam, $populer[3][1] / $h_pop_ip, $populer[3][2] / $h_pop_xia, $populer[3][3] / $h_pop_opp)
                            );

                            echo "<br>";
                            for ($c = 0; $c < 4; $c++) {
                                for ($d = 0; $d < 4; $d++) {
                                    echo $eigen_populer[$c][$d] . "<br>";
                                }
                                echo "<br>";
                            }

                            echo "<br>";
                            $t_eigen_populer = array(array_sum($eigen_populer[0]), array_sum($eigen_populer[1]), array_sum($eigen_populer[2]), array_sum($eigen_populer[3]));
                            for ($x = 0; $x < 4; $x++) {
                                echo $t_eigen_populer[$x] . "<br>";
                            }

                            echo "<br>";
                            $r_eigen_populer;

                            for ($z = 0; $z < 4; $z++) {
                                $r_eigen_populer[] = $t_eigen_populer[$z] / 4;
                                echo $r_eigen_populer[$z] . "<br>";
                            }

                            $lambda_populer = ($h_pop_sam * $r_eigen_populer[0]) + ($h_pop_ip * $r_eigen_populer[1]) + ($h_pop_xia * $r_eigen_populer[2]) + ($h_pop_opp * $r_eigen_populer[3]);
                            echo "<br>" . $lambda_populer;

                            $ci_populer = ($lambda_populer - 4) / (4 - 1);
                            echo "<br>" . $ci_populer;

                            $cr_populer = $ci_populer / 0.90;
                            echo "<br>" . $cr_populer;
                            echo "<br>";

                            echo "======================================================================================================================";
                            echo "<br>";
                            echo "<br>";

                            $purna = array(
                                array(1, 7, 5, 7),
                                array(0.142857143, 1, 3, 5),
                                array(0.2, 0.333333333, 1, 2),
                                array(0.142857143, 0.2, 0.5, 1)
                            );

                            $h_pur_sam = 0;
                            $h_pur_ip = 0;
                            $h_pur_xia = 0;
                            $h_pur_opp = 0;

                            for ($a = 0; $a < 4; $a++) {
                                for ($b = 0; $b < 4; $b++) {
                                    $t_pur_sam = $purna[$a][0];
                                    $t_pur_ip = $purna[$a][1];
                                    $t_pur_xia = $purna[$a][2];
                                    $t_pur_opp = $purna[$a][3];
                                }
                                $h_pur_sam += $t_pur_sam;
                                $h_pur_ip += $t_pur_ip;
                                $h_pur_xia += $t_pur_xia;
                                $h_pur_opp += $t_pur_opp;
                            }

                            echo "<br>";
                            echo $h_pur_sam;
                            echo "<br>";
                            echo $h_pur_ip;
                            echo "<br>";
                            echo $h_pur_xia;
                            echo "<br>";
                            echo $h_pur_opp;
                            echo "<br>";

                            $eigen_purnajual = array(
                                array($purna[0][0] / $h_pur_sam, $purna[0][1] / $h_pur_ip, $purna[0][2] / $h_pur_xia, $purna[0][3] / $h_pur_opp),
                                array($purna[1][0] / $h_pur_sam, $purna[1][1] / $h_pur_ip, $purna[1][2] / $h_pur_xia, $purna[1][3] / $h_pur_opp),
                                array($purna[2][0] / $h_pur_sam, $purna[2][1] / $h_pur_ip, $purna[2][2] / $h_pur_xia, $purna[2][3] / $h_pur_opp),
                                array($purna[3][0] / $h_pur_sam, $purna[3][1] / $h_pur_ip, $purna[3][2] / $h_pur_xia, $purna[3][3] / $h_pur_opp)
                            );

                            echo "<br>";
                            for ($c = 0; $c < 4; $c++) {
                                for ($d = 0; $d < 4; $d++) {
                                    echo $eigen_purnajual[$c][$d] . "<br>";
                                }
                                echo "<br>";
                            }

                            echo "<br>";
                            $t_eigen_purnajual = array(array_sum($eigen_purnajual[0]), array_sum($eigen_purnajual[1]), array_sum($eigen_purnajual[2]), array_sum($eigen_purnajual[3]));
                            for ($x = 0; $x < 4; $x++) {
                                echo $t_eigen_purnajual[$x] . "<br>";
                            }

                            echo "<br>";
                            $r_eigen_purnajual;

                            for ($z = 0; $z < 4; $z++) {
                                $r_eigen_purnajual[] = $t_eigen_purnajual[$z] / 4;
                                echo $r_eigen_purnajual[$z] . "<br>";
                            }

                            $lambda_purnajual = ($h_pur_sam * $r_eigen_purnajual[0]) + ($h_pur_ip * $r_eigen_purnajual[1]) + ($h_pur_xia * $r_eigen_purnajual[2]) + ($h_pur_opp * $r_eigen_purnajual[3]);
                            echo "<br>" . $lambda_purnajual;

                            $ci_purnajual = ($lambda_purnajual - 4) / (4 - 1);
                            echo "<br>" . $ci_purnajual;

                            $cr_purnajual = $ci_purnajual / 0.90;
                            echo "<br>" . $cr_purnajual;
                            echo "<br>";

                            echo "======================================================================================================================";
                            echo "<br>";
                            echo "<br>";

                            $keawetan = array(
                                array(1, 3, 7, 9),
                                array(0.333333333, 1, 5, 9),
                                array(0.142857143, 0.2, 1, 3),
                                array(0.111111111, 0.111111111, 0.333333333, 1)
                            );

                            $h_ke_sam = 0;
                                $h_ke_ip = 0;
                                $h_ke_xia = 0;
                                $h_ke_opp = 0;
                            for ($a = 0; $a < 4; $a++) {
                                for ($b = 0; $b < 4; $b++) {
                                    $t_ke_sam = $keawetan[$a][0];
                                    $t_ke_ip = $keawetan[$a][1];
                                    $t_ke_xia = $keawetan[$a][2];
                                    $t_ke_opp = $keawetan[$a][3];
                                }
                                $h_ke_sam += $t_ke_sam;
                                $h_ke_ip += $t_ke_ip;
                                $h_ke_xia += $t_ke_xia;
                                $h_ke_opp += $t_ke_opp;
                            }

                            echo "<br>";
                            echo $h_ke_sam;
                            echo "<br>";
                            echo $h_ke_ip;
                            echo "<br>";
                            echo $h_ke_xia;
                            echo "<br>";
                            echo $h_ke_opp;
                            echo "<br>";

                            $eigen_awet = array(
                                array($keawetan[0][0] / $h_ke_sam, $keawetan[0][1] / $h_ke_ip, $keawetan[0][2] / $h_ke_xia, $keawetan[0][3] / $h_ke_opp),
                                array($keawetan[1][0] / $h_ke_sam, $keawetan[1][1] / $h_ke_ip, $keawetan[1][2] / $h_ke_xia, $keawetan[1][3] / $h_ke_opp),
                                array($keawetan[2][0] / $h_ke_sam, $keawetan[2][1] / $h_ke_ip, $keawetan[2][2] / $h_ke_xia, $keawetan[2][3] / $h_ke_opp),
                                array($keawetan[3][0] / $h_ke_sam, $keawetan[3][1] / $h_ke_ip, $keawetan[3][2] / $h_ke_xia, $keawetan[3][3] / $h_ke_opp)
                            );

                            echo "<br>";
                            for ($c = 0; $c < 4; $c++) {
                                for ($d = 0; $d < 4; $d++) {
                                    echo $eigen_awet[$c][$d] . "<br>";
                                }
                                echo "<br>";   
                            }

                            echo "<br>";
                            $t_eigen_awet = array(array_sum($eigen_awet[0]), array_sum($eigen_awet[1]), array_sum($eigen_awet[2]), array_sum($eigen_awet[3]));
                            for ($x = 0; $x < 4; $x++) {
                                echo $t_eigen_awet[$x] . "<br>";
                            }

                            echo "<br>";
                            $r_eigen_awet;

                            for ($z = 0; $z < 4; $z++) {
                                $r_eigen_awet[] = $t_eigen_awet[$z] / 4;
                                echo $r_eigen_awet[$z] . "<br>";
                            }

                            $lambda_keawetan = ($h_ke_sam * $r_eigen_awet[0]) + ($h_ke_ip * $r_eigen_awet[1]) + ($h_ke_xia * $r_eigen_awet[2]) + ($h_ke_opp * $r_eigen_awet[3]);
                            echo "<br>" . $lambda_keawetan;

                            $ci_keawetan = ($lambda_keawetan - 4) / (4 - 1);
                            echo "<br>" . $ci_keawetan;

                            $cr_keawetan = $ci_keawetan / 0.90;
                            echo "<br>" . $cr_keawetan;
                            echo "<br>";

                            echo "======================================================================================================================";
                            echo "<br>";
                            echo "<br>";

                            echo "<h1> Ranking </h1>";
                            echo "<br>";
                            $r_sam = ($r_eigen_alt[0] * $r_eigen_harga[0]) + ($r_eigen_alt[0] * $r_eigen_kual[0]) + ($r_eigen_alt[0] * $r_eigen_fitur[0]) + ($r_eigen_alt[0] * $r_eigen_populer[0]) + ($r_eigen_alt[0] * $r_eigen_purnajual[0]) + ($r_eigen_alt[0] * $r_eigen_awet[0]);
                            $r_iph = ($r_eigen_alt[0] * $r_eigen_harga[1]) + ($r_eigen_alt[0] * $r_eigen_kual[1]) + ($r_eigen_alt[0] * $r_eigen_fitur[1]) + ($r_eigen_alt[0] * $r_eigen_populer[1]) + ($r_eigen_alt[0] * $r_eigen_purnajual[1]) + ($r_eigen_alt[0] * $r_eigen_awet[1]);
                            $r_xia = ($r_eigen_alt[0] * $r_eigen_harga[2]) + ($r_eigen_alt[0] * $r_eigen_kual[2]) + ($r_eigen_alt[0] * $r_eigen_fitur[2]) + ($r_eigen_alt[0] * $r_eigen_populer[2]) + ($r_eigen_alt[0] * $r_eigen_purnajual[2]) + ($r_eigen_alt[0] * $r_eigen_awet[2]);
                            $r_opp = ($r_eigen_alt[0] * $r_eigen_harga[3]) + ($r_eigen_alt[0] * $r_eigen_kual[3]) + ($r_eigen_alt[0] * $r_eigen_fitur[3]) + ($r_eigen_alt[0] * $r_eigen_populer[3]) + ($r_eigen_alt[0] * $r_eigen_purnajual[3]) + ($r_eigen_alt[0] * $r_eigen_awet[3]);
                            echo "<br>";
                            echo "Samsung = " . $r_sam . "<br>";
                            echo "iPhone = " . $r_iph . "<br>";
                            echo "Xiaomi = " . $r_xia . "<br>";
                            echo "Oppo = " . $r_opp . "<br>";
                            echo "<br>";
                            $rank = array($r_sam, $r_iph, $r_xia, $r_opp);
                            rsort($rank);

                            for ($x = 0; $x < 4; $x++) {
                                echo "Rank " . $x + 1 . " = " . $rank[$x] . "<br>";
                            }
                            ?>
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