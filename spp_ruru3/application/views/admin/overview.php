
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>spp ruru : Admin</title>

    <!-- Fontfaces CSS-->
   <link href="<?php echo base_url('assets/CoolAdmin-master/css/font-face.css')?>" rel="stylesheet"
media="all">

<link href="<?php echo base_url('assets/CoolAdmin-master/vendor/font-awesome-4.7/css/font-
awesome.min.css')?>" rel="stylesheet" media="all">

<link href="<?php echo base_url('assets/CoolAdmin-master/vendor/font-awesome-5/css/fontawesome-
all.min.css')?>" rel="stylesheet" media="all">

<link href="<?php echo base_url('assets/CoolAdmin-master/vendor/mdi-font/css/material-design-iconic-
font.min.css')?>" rel="stylesheet" media="all">

<!-- Bootstrap CSS-->
<link href="<?php echo base_url('assets/CoolAdmin-master/vendor/bootstrap-4.1/bootstrap.min.css')?>"
rel="stylesheet" media="all">

   <!-- Vendor CSS-->
<link href="<?php echo base_url('assets/CoolAdmin-master/vendor/animsition/animsition.min.css')?>"
rel="stylesheet" media="all">

<link href="<?php echo base_url('assets/CoolAdmin-master/vendor/bootstrap-progressbar/bootstrap-
progressbar-3.3.4.min.css')?>" rel="stylesheet" media="all">

<link href="<?php echo base_url('assets/CoolAdmin-master/vendor/wow/animate.css')?>" rel="stylesheet"
media="all">
<link href="<?php echo base_url('assets/CoolAdmin-master/vendor/css-hamburgers/hamburgers.min.css')?>"
rel="stylesheet" media="all">
<link href="<?php echo base_url('assets/CoolAdmin-master/vendor/slick/slick.css')?>" rel="stylesheet"
media="all">
<link href="<?php echo base_url('assets/CoolAdmin-master/vendor/select2/select2.min.css')?>"
rel="stylesheet" media="all">

<link href="<?php echo base_url('assets/CoolAdmin-master/vendor/perfect-scrollbar/perfect-
scrollbar.css')?>" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="<?php echo base_url('assets/CoolAdmin-master/css/theme.css')?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo base_url('assets/CoolAdmin-master/images/icon/logo.png')?>" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-bar"></i>SPP</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-table"></i>Kelas</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-check-square"></i>Petugas</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Transaksi Pembayaran</a>
                        </li> 
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

       <?php $this->load->view('admin/_partials/sidebar') ?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url('assets/images/icons/nana.jpg') ?>" alt="Na Jaemin" />
                                                </div>
                                                <div class="content">
                                                    <h6>Na Jaemin</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url('assets/images/icons/renjun.jpg') ?>"alt="Huang Renjun" />
                                                </div>
                                                <div class="content">
                                                    <h6>Huang Renjun</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url('assets/images/icons/lele.jpg') ?>"alt="Zhong Chenle" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Zhong Chenle, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url('assets/images/icons/jeno.jpg') ?>"alt="Lee Jeno" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Lee Jeno, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url('assets/images/icons/mark.jpg') ?>"alt="Mark Lee" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Mark Lee, April 12,2020</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 7, 2020 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">Februari 5, 2020 07:00</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">Maret 18, 2020 06:00</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo base_url('assets/images/park.jpg')?>" alt="Jisung" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Park Jisung</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo base_url('assets/images/jisungg.jpg')?>" alt="Jisung" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">andy</a>
                                                    </h5>
                                                    <span class="email"></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>0</h2>
                                                <span>members online</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>0</h2>
                                                <span>items solid</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>0</h2>
                                                <span>this week</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>0</h2>
                                                <span>total earnings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
        </div>

    </div>

    <!-- Jquery JS-->
<script src="<?php echo base_url('assets/CoolAdmin-master/vendor/jquery-3.2.1.min.js')?>"></script>
<!-- Bootstrap JS-->
<script src="<?php echo base_url('assets/CoolAdmin-master/vendor/bootstrap-4.1/popper.min.js')?>"></script>
<script src="<?php echo base_url('assets/CoolAdmin-master/vendor/bootstrap-4.1/bootstrap.min.js')?>"></script>
<!-- Vendor JS -->
<script src="<?php echo base_url('assets/CoolAdmin-master/vendor/slick/slick.min.js')?>">
</script>
<script src="<?php echo base_url('assets/CoolAdmin-master/vendor/wow/wow.min.js')?>"></script>
<script src="<?php echo base_url('assets/CoolAdmin-master/vendor/animsition/animsition.min.js')?>"></script>

<script src="<?php echo base_url('assets/CoolAdmin-master/vendor/bootstrap-progressbar/bootstrap-
progressbar.min.js')?>">

</script>
<script src="<?php echo base_url('assets/CoolAdmin-master/vendor/counter-up/jquery.waypoints.min.js')?>"></script>
<script src="<?php echo base_url('assets/CoolAdmin-master/vendor/counter-up/jquery.counterup.min.js')?>">
</script>
<script src="<?php echo base_url('assets/CoolAdmin-master/vendor/circle-progress/circle-progress.min.js')?>"></script>
<script src="<?php echo base_url('assets/CoolAdmin-master/vendor/perfect-scrollbar/perfect-scrollbar.js')?>"></script>
<script src="<?php echo base_url('assets/CoolAdmin-master/vendor/chartjs/Chart.bundle.min.js')?>"></script>
<script src="<?php echo base_url('assets/CoolAdmin-master/vendor/select2/select2.min.js')?>">
</script>
<!-- Main JS-->
<script src="<?php echo base_url('assets/CoolAdmin-master/js/main.js')?>"></script>

</body>

</html>
<!-- end document-->
