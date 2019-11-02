<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= site_url('media/') ?>images/favicon.png">
    <title><?= $title ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= site_url('media/') ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= site_url('media/') ?>css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?= site_url('media/') ?>css/colors/blue.css" id="theme" rel="stylesheet">
    <script src="<?= site_url('media/') ?>plugins/jquery/jquery.min.js"></script>
</head>

<body class="fix-header fix-sidebar card-no-border">

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <div id="main-wrapper">

        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">

                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>

                            <img src="<?= site_url('media/') ?>images/logo-icon.png" alt="homepage" class="dark-logo" />

                        </b>

                        <span>

                            <img src="<?= site_url('media/') ?>images/logo-text.png" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                </div>

                <div class="navbar-collapse">

                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>

                    </ul>

                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= site_url('media/') ?>images/users/1.jpg" alt="user" class="profile-pic m-r-5" /><?= $this->session->userdata('fullname') ?></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <?php $this->load->view('sidebar') ?>
        <div class="page-wrapper">
            <?php isset($main) ? $this->load->view($main) : null; ?>

            <footer class="footer text-center">
                © <?= date('Y') ?> Ardhi Bashorie
            </footer>

        </div>

    </div>
    <script src="<?= site_url('media/') ?>plugins/bootstrap/js/tether.min.js"></script>
    <script src="<?= site_url('media/') ?>plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= site_url('media/') ?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= site_url('media/') ?>js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= site_url('media/') ?>js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?= site_url('media/') ?>plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= site_url('media/') ?>js/custom.min.js"></script>

    <script src="<?= site_url('media/') ?>plugins/flot/jquery.flot.js"></script>
    <script src="<?= site_url('media/') ?>plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?= site_url('media/') ?>js/flot-data.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?= site_url('media/') ?>plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>