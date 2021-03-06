<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>RuangDigital | Weighted Product</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                        <div class="perbandingan d-flex justify-content-center">
                            <section class="hk-sec-wrapper">
                                <form action="result-ahp.php" method="POST">
                                    <table>
                                        <thead>
                                            <th>Kriteria 1</th>
                                            <th>Perbandingan</th>
                                            <th>Kriteria 2</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Harga</td>
                                                <td>
                                                    <select name="harga1[]" class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">Harga Sama Penting Dengan Kualitas (Nilai=1)</option>
                                                        <option value="2">Harga Sedikit Lebih Penting Dari Kualitas (Nilai=3)</option>
                                                        <option value="3">Harga Lebih Penting Dengan Kualitas (Nilai=5)</option>
                                                        <option value="4">Harga Lebih Mutlak Penting Dengan Kualitas (Nilai=7)</option>
                                                        <option value="5">Harga Mutlak Penting Dari Kualitas (Nilai=9)</option>
                                                        <option value="6">Harga Nilai Berdekatan Dengan Kualitas (Nilai=2)</option>
                                                        <option value="7">Kualitas Sedikit Lebih Penting Dari Harga (Nilai=1/3)</option>
                                                        <option value="8">Kualitas Lebih Penting Dengan Harga (Nilai=1/5)</option>
                                                        <option value="9">Kualitas Lebih Mutlak Penting Dengan Harga (Nilai=1/7)</option>
                                                        <option value="10">Kualitas Mutlak Penting Dari Harga (Nilai=1/9)</option>
                                                        <option value="11">Kualitas Nilai Berdekatan Dengan Harga (Nilai=1/2)</option>
                                                    </select>
                                                </td>
                                                <td>Kualitas</td>
                                            </tr>
                                            <tr>
                                                <td>Harga</td>
                                                <td>
                                                    <select name="harga2[]" class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">Harga Sama Penting Dengan Fitur (Nilai=1)</option>
                                                        <option value="2">Harga Sedikit Lebih Penting Dari Fitur (Nilai=3)</option>
                                                        <option value="3">Harga Lebih Penting Dengan Fitur (Nilai=5)</option>
                                                        <option value="4">Harga Lebih Mutlak Penting Dengan Fitur (Nilai=7)</option>
                                                        <option value="5">Harga Mutlak Penting Dari Fitur (Nilai=9)</option>
                                                        <option value="6">Harga Nilai Berdekatan Dengan Fitur (Nilai=2)</option>
                                                        <option value="7">Fitur Sedikit Lebih Penting Dari Harga (Nilai=1/3)</option>
                                                        <option value="8">Fitur Lebih Penting Dengan Harga (Nilai=1/5)</option>
                                                        <option value="9">Fitur Lebih Mutlak Penting Dengan Harga (Nilai=1/7)</option>
                                                        <option value="10">Fitur Mutlak Penting Dari Harga (Nilai=1/9)</option>
                                                        <option value="11">Fitur Nilai Berdekatan Dengan Harga (Nilai=1/2)</option>
                                                    </select>
                                                </td>
                                                <td>Fitur</td>
                                            </tr>
                                            <tr>
                                                <td>Harga</td>
                                                <td>
                                                    <select name="harga3[]" class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">Harga Sama Penting Dengan Populer (Nilai=1)</option>
                                                        <option value="2">Harga Sedikit Lebih Penting Dari Populer (Nilai=3)</option>
                                                        <option value="3">Harga Lebih Penting Dengan Populer (Nilai=5)</option>
                                                        <option value="4">Harga Lebih Mutlak Penting Dengan Populer (Nilai=7)</option>
                                                        <option value="5">Harga Mutlak Penting Dari Populer (Nilai=9)</option>
                                                        <option value="6">Harga Nilai Berdekatan Dengan Populer (Nilai=2)</option>
                                                        <option value="7">Populer Sedikit Lebih Penting Dari Harga (Nilai=1/3)</option>
                                                        <option value="8">Populer Lebih Penting Dengan Harga (Nilai=1/5)</option>
                                                        <option value="9">Populer Lebih Mutlak Penting Dengan Harga (Nilai=1/7)</option>
                                                        <option value="10">Populer Mutlak Penting Dari Harga (Nilai=1/9)</option>
                                                        <option value="11">Populer Nilai Berdekatan Dengan Harga (Nilai=1/2)</option>
                                                    </select>
                                                </td>
                                                <td>Populer</td>
                                            </tr>
                                            <tr>
                                                <td>Harga</td>
                                                <td>
                                                    <select name="harga4[]" class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">Harga Sama Penting Dengan Purna Jual (Nilai=1)</option>
                                                        <option value="2">Harga Sedikit Lebih Penting Dari Purna Jual (Nilai=3)</option>
                                                        <option value="3">Harga Lebih Penting Dengan Purna Jual (Nilai=5)</option>
                                                        <option value="4">Harga Lebih Mutlak Penting Dengan Purna Jual (Nilai=7)</option>
                                                        <option value="5">Harga Mutlak Penting Dari Purna Jual (Nilai=9)</option>
                                                        <option value="6">Harga Nilai Berdekatan Dengan Purna Jual (Nilai=2)</option>
                                                        <option value="7">Purna Jual Sedikit Lebih Penting Dari Harga (Nilai=1/3)</option>
                                                        <option value="8">Purna Jual Lebih Penting Dengan Harga (Nilai=1/5)</option>
                                                        <option value="9">Purna Jual Lebih Mutlak Penting Dengan Harga (Nilai=1/7)</option>
                                                        <option value="10">Purna Jual Mutlak Penting Dari Harga (Nilai=1/9)</option>
                                                        <option value="11">Purna Jual Nilai Berdekatan Dengan Harga (Nilai=1/2)</option>
                                                    </select>
                                                </td>
                                                <td>Purna Jual</td>
                                            </tr>
                                            <tr>
                                                <td>Harga</td>
                                                <td>
                                                    <select name="harga5[]" class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">Harga Sama Penting Dengan Keawetan (Nilai=1)</option>
                                                        <option value="2">Harga Sedikit Lebih Penting Dari Keawetan (Nilai=3)</option>
                                                        <option value="3">Harga Lebih Penting Dengan Keawetan (Nilai=5)</option>
                                                        <option value="4">Harga Lebih Mutlak Penting Dengan Keawetan (Nilai=7)</option>
                                                        <option value="5">Harga Mutlak Penting Dari Keawetan (Nilai=9)</option>
                                                        <option value="6">Harga Nilai Berdekatan Dengan Keawetan (Nilai=2)</option>
                                                        <option value="7">Keawetan Sedikit Lebih Penting Dari Harga (Nilai=1/3)</option>
                                                        <option value="8">Keawetan Lebih Penting Dengan Harga (Nilai=1/5)</option>
                                                        <option value="9">Keawetan Lebih Mutlak Penting Harga Keawetan (Nilai=1/7)</option>
                                                        <option value="10">Keawetan Mutlak Penting Dari Harga (Nilai=1/9)</option>
                                                        <option value="11">Keawetan Nilai Berdekatan Dengan Harga (Nilai=1/2)</option>
                                                    </select>
                                                </td>
                                                <td>Keawetan</td>
                                            </tr>
                                            <!-----------------------KUALITAS------------------------------------------------>
                                            <tr>
                                                <td>Kualitas</td>
                                                <td>
                                                    <select name="kualitas1[]" class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">Kualitas Sama Penting Dengan Fitur (Nilai=1)</option>
                                                        <option value="2">Kualitas Sedikit Lebih Penting Dari Fitur (Nilai=3)</option>
                                                        <option value="3">Kualitas Lebih Penting Dengan Fitur (Nilai=5)</option>
                                                        <option value="4">Kualitas Lebih Mutlak Penting Dengan Fitur (Nilai=7)</option>
                                                        <option value="5">Kualitas Mutlak Penting Dari Fitur (Nilai=9)</option>
                                                        <option value="6">Kualitas Nilai Berdekatan Dengan Fitur (Nilai=2)</option>
                                                        <option value="7">Fitur Sedikit Lebih Penting Dari Kualitas (Nilai=1/3)</option>
                                                        <option value="8">Fitur Lebih Penting Dengan Kualitas (Nilai=1/5)</option>
                                                        <option value="9">Fitur Lebih Mutlak Penting Kualitas Keawetan (Nilai=1/7)</option>
                                                        <option value="10">Fitur Mutlak Penting Dari Kualitas (Nilai=1/9)</option>
                                                        <option value="11">Fitur Nilai Berdekatan Dengan Kualitas (Nilai=1/2)</option>
                                                    </select>
                                                </td>
                                                <td>Fitur</td>
                                            </tr>
                                            <tr>
                                                <td>Kualitas</td>
                                                <td>
                                                    <select name="kualitas2[]" class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">Kualitas Sama Penting Dengan Populer (Nilai=1)</option>
                                                        <option value="2">Kualitas Sedikit Lebih Penting Dari Populer (Nilai=3)</option>
                                                        <option value="3">Kualitas Lebih Penting Dengan Populer (Nilai=5)</option>
                                                        <option value="4">Kualitas Lebih Mutlak Penting Dengan Populer (Nilai=7)</option>
                                                        <option value="5">Kualitas Mutlak Penting Dari Populer (Nilai=9)</option>
                                                        <option value="6">Kualitas Nilai Berdekatan Dengan Populer (Nilai=2)</option>
                                                        <option value="7">Populer Sedikit Lebih Penting Dari Kualitas (Nilai=1/3)</option>
                                                        <option value="8">Populer Lebih Penting Dengan Kualitas (Nilai=1/5)</option>
                                                        <option value="9">Populer Lebih Mutlak Penting Kualitas Keawetan (Nilai=1/7)</option>
                                                        <option value="10">Populer Mutlak Penting Dari Kualitas (Nilai=1/9)</option>
                                                        <option value="11">Populer Nilai Berdekatan Dengan Kualitas (Nilai=1/2)</option>
                                                    </select>
                                                </td>
                                                <td>Populer</td>
                                            </tr>
                                            <tr>
                                                <td>Kualitas</td>
                                                <td>
                                                    <select name="kualitas3[]" class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">Kualitas Sama Penting Dengan Purna Jual (Nilai=1)</option>
                                                        <option value="2">Kualitas Sedikit Lebih Penting Dari Purna Jual (Nilai=3)</option>
                                                        <option value="3">Kualitas Lebih Penting Dengan Purna Jual (Nilai=5)</option>
                                                        <option value="4">Kualitas Lebih Mutlak Penting Dengan Purna Jual (Nilai=7)</option>
                                                        <option value="5">Kualitas Mutlak Penting Dari Purna Jual (Nilai=9)</option>
                                                        <option value="6">Kualitas Nilai Berdekatan Dengan Purna Jual (Nilai=2)</option>
                                                        <option value="7">Purna Jual Sedikit Lebih Penting Dari Kualitas (Nilai=1/3)</option>
                                                        <option value="8">Purna Jual Lebih Penting Dengan Kualitas (Nilai=1/5)</option>
                                                        <option value="9">Purna Jual Lebih Mutlak Penting Kualitas Keawetan (Nilai=1/7)</option>
                                                        <option value="10">Purna Jual Mutlak Penting Dari Kualitas (Nilai=1/9)</option>
                                                        <option value="11">Purna Jual Nilai Berdekatan Dengan Kualitas (Nilai=1/2)</option>
                                                    </select>
                                                </td>
                                                <td>Purna Jual</td>
                                            </tr>
                                            <tr>
                                                <td>Kualitas</td>
                                                <td>
                                                    <select name="kualitas4[]" class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">Kualitas Sama Penting Dengan Keawetan (Nilai=1)</option>
                                                        <option value="2">Kualitas Sedikit Lebih Penting Dari Keawetan (Nilai=3)</option>
                                                        <option value="3">Kualitas Lebih Penting Dengan Keawetan (Nilai=5)</option>
                                                        <option value="4">Kualitas Lebih Mutlak Penting Dengan Keawetan (Nilai=7)</option>
                                                        <option value="5">Kualitas Mutlak Penting Dari Keawetan (Nilai=9)</option>
                                                        <option value="6">Kualitas Nilai Berdekatan Dengan Keawetan (Nilai=2)</option>
                                                        <option value="7">Keawetan Sedikit Lebih Penting Dari Kualitas (Nilai=1/3)</option>
                                                        <option value="8">Keawetan Lebih Penting Dengan Kualitas (Nilai=1/5)</option>
                                                        <option value="9">Keawetan Lebih Mutlak Penting Kualitas Keawetan (Nilai=1/7)</option>
                                                        <option value="10">Keawetan Mutlak Penting Dari Kualitas (Nilai=1/9)</option>
                                                        <option value="11">Keawetan Nilai Berdekatan Dengan Kualitas (Nilai=1/2)</option>
                                                    </select>
                                                </td>
                                                <td>Keawetan</td>
                                            </tr>
                                            <!-- --------------------FITUR---------------------------------------------- -->
                                            <tr>
                                                <td>Fitur</td>
                                                <td>
                                                    <select name="fitur1[]" class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">Fitur Sama Penting Dengan Populer (Nilai=1)</option>
                                                        <option value="2">Fitur Sedikit Lebih Penting Dari Populer (Nilai=3)</option>
                                                        <option value="3">Fitur Lebih Penting Dengan Populer (Nilai=5)</option>
                                                        <option value="4">Fitur Lebih Mutlak Penting Dengan Populer (Nilai=7)</option>
                                                        <option value="5">Fitur Mutlak Penting Dari Populer (Nilai=9)</option>
                                                        <option value="6">Fitur Nilai Berdekatan Dengan Populer (Nilai=2)</option>
                                                        <option value="7">Populer Sedikit Lebih Penting Dari Fitur (Nilai=1/3)</option>
                                                        <option value="8">Populer Lebih Penting Dengan Fitur (Nilai=1/5)</option>
                                                        <option value="9">Populer Lebih Mutlak Penting Fitur Keawetan (Nilai=1/7)</option>
                                                        <option value="10">Populer Mutlak Penting Dari Fitur (Nilai=1/9)</option>
                                                        <option value="11">Populer Nilai Berdekatan Dengan Fitur (Nilai=1/2)</option>
                                                    </select>
                                                </td>
                                                <td>Populer</td>
                                            </tr>
                                            <tr>
                                                <td>Fitur</td>
                                                <td>
                                                    <select name="fitur2[]" class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">Fitur Sama Penting Dengan Purna Jual (Nilai=1)</option>
                                                        <option value="2">Fitur Sedikit Lebih Penting Dari Purna Jual (Nilai=3)</option>
                                                        <option value="3">Fitur Lebih Penting Dengan Purna Jual (Nilai=5)</option>
                                                        <option value="4">Fitur Lebih Mutlak Penting Dengan Purna Jual (Nilai=7)</option>
                                                        <option value="5">Fitur Mutlak Penting Dari Purna Jual (Nilai=9)</option>
                                                        <option value="6">Fitur Nilai Berdekatan Dengan Purna Jual (Nilai=2)</option>
                                                        <option value="7">Purna Jual Sedikit Lebih Penting Dari Fitur (Nilai=1/3)</option>
                                                        <option value="8">Purna Jual Lebih Penting Dengan Fitur (Nilai=1/5)</option>
                                                        <option value="9">Purna Jual Lebih Mutlak Penting Fitur Keawetan (Nilai=1/7)</option>
                                                        <option value="10">Purna Jual Mutlak Penting Dari Fitur (Nilai=1/9)</option>
                                                        <option value="11">Purna Jual Nilai Berdekatan Dengan Fitur (Nilai=1/2)</option>
                                                    </select>
                                                </td>
                                                <td>Purna Jual</td>
                                            </tr>
                                            <tr>
                                                <td>Fitur</td>
                                                <td>
                                                    <select name="fitur3[]" class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">Fitur Sama Penting Dengan Keawetan (Nilai=1)</option>
                                                        <option value="2">Fitur Sedikit Lebih Penting Dari Keawetan (Nilai=3)</option>
                                                        <option value="3">Fitur Lebih Penting Dengan Keawetan (Nilai=5)</option>
                                                        <option value="4">Fitur Lebih Mutlak Penting Dengan Keawetan (Nilai=7)</option>
                                                        <option value="5">Fitur Mutlak Penting Dari Keawetan (Nilai=9)</option>
                                                        <option value="6">Fitur Nilai Berdekatan Dengan Keawetan (Nilai=2)</option>
                                                        <option value="7">Keawetan Sedikit Lebih Penting Dari Fitur (Nilai=1/3)</option>
                                                        <option value="8">Keawetan Lebih Penting Dengan Fitur (Nilai=1/5)</option>
                                                        <option value="9">Keawetan Lebih Mutlak Penting Fitur Keawetan (Nilai=1/7)</option>
                                                        <option value="10">Keawetan Mutlak Penting Dari Fitur (Nilai=1/9)</option>
                                                        <option value="11">Keawetan Nilai Berdekatan Dengan Fitur (Nilai=1/2)</option>
                                                    </select>
                                                </td>
                                                <td>Keawetan</td>
                                            </tr>
                                            <!-- --------------------POPULER---------------------------------------------- -->
                                            <tr>
                                                <td>Populer</td>
                                                <td>
                                                    <select name="populer1[]" class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">Populer Sama Penting Dengan Purna Jual (Nilai=1)</option>
                                                        <option value="2">Populer Sedikit Lebih Penting Dari Purna Jual (Nilai=3)</option>
                                                        <option value="3">Populer Lebih Penting Dengan Purna Jual (Nilai=5)</option>
                                                        <option value="4">Populer Lebih Mutlak Penting Dengan Purna Jual (Nilai=7)</option>
                                                        <option value="5">Populer Mutlak Penting Dari Purna Jual (Nilai=9)</option>
                                                        <option value="6">Populer Nilai Berdekatan Dengan Purna Jual (Nilai=2)</option>
                                                        <option value="7">Purna Jual Sedikit Lebih Penting Dari Populer (Nilai=1/3)</option>
                                                        <option value="8">Purna Jual Lebih Penting Dengan Populer (Nilai=1/5)</option>
                                                        <option value="9">Purna Jual Lebih Mutlak Penting Populer Keawetan (Nilai=1/7)</option>
                                                        <option value="10">Purna Jual Mutlak Penting Dari Populer (Nilai=1/9)</option>
                                                        <option value="11">Purna Jual Nilai Berdekatan Dengan Populer (Nilai=1/2)</option>
                                                    </select>
                                                </td>
                                                <td>Purna Jual</td>
                                            </tr>
                                            <tr>
                                                <td>Populer</td>
                                                <td>
                                                    <select name="populer2[]" class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">Populer Sama Penting Dengan Keawetan (Nilai=1)</option>
                                                        <option value="2">Populer Sedikit Lebih Penting Dari Keawetan (Nilai=3)</option>
                                                        <option value="3">Populer Lebih Penting Dengan Keawetan (Nilai=5)</option>
                                                        <option value="4">Populer Lebih Mutlak Penting Dengan Keawetan (Nilai=7)</option>
                                                        <option value="5">Populer Mutlak Penting Dari Keawetan (Nilai=9)</option>
                                                        <option value="6">Populer Nilai Berdekatan Dengan Keawetan (Nilai=2)</option>
                                                        <option value="7">Keawetan Sedikit Lebih Penting Dari Populer (Nilai=1/3)</option>
                                                        <option value="8">Keawetan Lebih Penting Dengan Populer (Nilai=1/5)</option>
                                                        <option value="9">Keawetan Lebih Mutlak Penting Populer Keawetan (Nilai=1/7)</option>
                                                        <option value="10">Keawetan Mutlak Penting Dari Populer (Nilai=1/9)</option>
                                                        <option value="11">Keawetan Nilai Berdekatan Dengan Populer (Nilai=1/2)</option>
                                                    </select>
                                                </td>
                                                <td>Keawetan</td>
                                            </tr>
                                            <!-- --------------------PURNA JUAL---------------------------------------------- -->
                                            <tr>
                                                <td>Purna Jual</td>
                                                <td>
                                                    <select name="purna1[]" class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">Purna Jual Sama Penting Dengan Keawetan (Nilai=1)</option>
                                                        <option value="2">Purna Jual Sedikit Lebih Penting Dari Keawetan (Nilai=3)</option>
                                                        <option value="3">Purna Jual Lebih Penting Dengan Keawetan (Nilai=5)</option>
                                                        <option value="4">Purna Jual Lebih Mutlak Penting Dengan Keawetan (Nilai=7)</option>
                                                        <option value="5">Purna Jual Mutlak Penting Dari Keawetan (Nilai=9)</option>
                                                        <option value="6">Purna Jual Nilai Berdekatan Dengan Keawetan (Nilai=2)</option>
                                                        <option value="7">Keawetan Sedikit Lebih Penting Dari Purna Jual (Nilai=1/3)</option>
                                                        <option value="8">Keawetan Lebih Penting Dengan Purna Jual (Nilai=1/5)</option>
                                                        <option value="9">Keawetan Lebih Mutlak Penting Purna Jual Keawetan (Nilai=1/7)</option>
                                                        <option value="10">Keawetan Mutlak Penting Dari Purna Jual (Nilai=1/9)</option>
                                                        <option value="11">Keawetan Nilai Berdekatan Dengan Purna Jual (Nilai=1/2)</option>
                                                    </select>
                                                </td>
                                                <td>Keawetan</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <input type="submit" name="submit" value="Get Selected Values" />
                                </form>
                            </section>
                        </div>
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
                            <p>Pampered by<a href="#" class="text-dark">Hencework</a> ?? 2019</p>
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