<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin</title>
    <script src="https://kit.fontawesome.com/714da8de62.js" crossorigin="anonymous"></script>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('tool/img/favicon.png'); ?>" />
    <!-- Bootstrap icons-->
    <link type="text/css" href="<?= base_url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css'); ?>" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link type="text/css" href="<?= base_url('tool/css/styles.css'); ?>" rel="stylesheet" />

    <!-- Material Design Bootstrap -->
    <link href="<?= base_url('tool/css/mdb.min.css'); ?>" rel="stylesheet">
    
    <link href="<?= base_url('tool/css/style.min.css'); ?>" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <style>
        .map-container {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-container iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
    </style>
    <style>
        nav .navbar-nav li a {
            color: white !important;
            font-family: Arial, Helvetica, sans-serif;
        }

        .txt1 {
            color: white !important;
        }

        .card {
            border-radius: 20px;
            background: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);

            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        footer {
            margin-top: auto;
        }
    </style>
</head>

<body class="grey lighten-3">
    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

        <a class="logo-wrapper waves-effect" href="<?= base_url() ?>Admin">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3" style="background-color: #007bff!important;"><i class="fas fa-laptop-code"></i></div> &nbsp;<span class="fw-bolder" style="font-size:large;"> <b>HireDev</b></span>
        </a>

        <div class="list-group list-group-flush">
            <a href="<?= base_url() ?>Admin" class="list-group-item active waves-effect">
                <i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;Home
            </a>
            <br>
            <a href="<?= base_url('admin/allusers') ?>" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-users text-primary"></i>&nbsp;&nbsp;&nbsp;Users</a>
            <br>
            <a href="<?= base_url('admin/devs') ?>" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-code text-primary"></i>&nbsp;&nbsp;&nbsp;Devs</a>
            <br>
            <a href="<?= base_url('admin/hires') ?>" class="list-group-item list-group-item-action waves-effect">
            &nbsp;<i class="fas fa-dollar-sign text-primary"></i>&nbsp;&nbsp;&nbsp;&nbsp;Hires</a>
            <br>
            <a href="<?= base_url('admin/devapplications') ?>" class="list-group-item list-group-item-action waves-effect">
                <i class="far fa-envelope text-primary"></i>&nbsp;&nbsp;&nbsp;Dev Applications</a>
            <br>
            <a href="<?= base_url('admin/editadminprofile/' . $this->session->userdata('id') . '') ?>" class="list-group-item list-group-item-action waves-effect">
                <i class="far fa-id-card text-primary"></i>&nbsp;&nbsp;&nbsp;Edit Admin Profile</a>
            <br>
            <a href="<?= base_url('admin/change_password/' . $this->session->userdata('id') . '') ?>" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-key text-primary"></i>&nbsp;&nbsp;&nbsp;Change Password</a>
        </div>

    </div>
    <!-- Sidebar -->
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient" style="background-color: #007bff!important;">
            <div class="container px-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item"><a class="nav-link btn btn-danger rounded-pill" href="<?= base_url() ?>Users/logout"><span><i class="fas fa-power-off "></i></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--========== Content-area ==========-->
        <br>
        <div class="admin-area">
            <div class="container-fluid">
                <div class="row">

                    <div>
                        <div class="animate__animated animate__fadeInRight">
                            <?php $this->load->view($admin_view); ?><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- Footer-->
    <footer class="bg-primary py-4 mt-auto" style="background-color: #007bff!important;">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">

                </div>
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; HireDev 2021</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>