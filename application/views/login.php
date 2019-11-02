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
    <title>LOGIN</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= site_url('media/') ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= site_url('media/') ?>css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?= site_url('media/') ?>css/colors/blue.css" id="theme" rel="stylesheet">

</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-block">
                <form action="<?= site_url('auth/login') ?>" method="post" class="form-horizontal form-material">
                    <div class="form-group">
                        <label for="username" class="col-md-12">Username</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Masukan Username" class="form-control form-control-line" name="username" id="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-12">Password</label>
                        <div class="col-md-12">
                            <input type="password" name="password" id="password" placeholder="Masukan Password" class="form-control form-control-line">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <script src="<?= site_url('media/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
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
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?= site_url('media/') ?>plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>