<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>HireDev</title>
    <script src="https://kit.fontawesome.com/714da8de62.js" crossorigin="anonymous"></script>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('tool/img/favicon.png'); ?>" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('tool/css/styles.css'); ?>" rel="stylesheet" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <style>
        nav .navbar-nav li a {
            color: white !important;
            font-family: Arial, Helvetica, sans-serif;
        }

        .txt1 {
            color: white !important;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient">
            <div class="container px-5">
                <a class="navbar-brand" href="<?= base_url() ?>Home"><i class="fas fa-laptop-code"></i> &nbsp;<span class="fw-bolder">HireDev</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><button type="button" onclick="window.location='http://localhost/hiredev/'" class="btn btn-light">Home</button></li>
                    </ul>
                </div>
            </div>
        </nav>

        <br>

        <div class="login-form-area">
            <div class="container">

                <div class="login-form animate__animated animate__zoomIn">

                    <br>
                    <div class="row">
                        <!--=== Error msg ===-->
                        <?php
                        if ($this->session->flashdata('login_fail')) {
                            print '<div class= "error-msg alert alert-danger">' . $this->session->flashdata('login_fail') . '</div>';
                        }

                        if ($this->session->flashdata('no_access')) {
                            print '<div class= "error-msg alert alert-danger">' . $this->session->flashdata('no_access') . '</div>';
                        }
                        ?>
                        <!--=== Success msg ===-->
                        <?php
                        if ($this->session->flashdata('reg_success')) {
                            print '<div class= "success-msg alert alert-success">' . $this->session->flashdata('reg_success') . '</div>';
                        }
                        ?>
                    </div>
                    <div class="row">
                        <div class="col-lg-1">

                        </div>
                        <div class="col-lg-4">
                            <div class="form-header">
                                <br>
                                <br>
                                <br>
                                <h2>Log in</h2>
                                <br>
                            </div>
                            <?= form_open('Users/login'); ?>
                            <div class="form-group">
                                <label for="email"><b>Your Email</b></label>

                                <?= form_input(['name' => 'email', 'placeholder' => 'Enter your email', 'value' => set_value('email'), 'class' => 'form-control']); ?>

                                <?= form_error('email', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password"><b>Password</b></label>

                                <?= form_password(['name' => 'password', 'placeholder' => 'Enter your password', 'value' => '', 'class' => 'form-control']); ?>

                                <?= form_error('password', '<div class="text-danger">', '</div>'); ?>

                            </div>
                            <!--
                            <div class="small">
                                <span class="text-muted">Forgot password? &nbsp;</span><a class="text-danger" href="">Click here</a>
                            </div> -->

                            <br>
                            <br>
                            <div class="form-group">
                                <?= form_submit(['name' => 'submit', 'value' => 'Login', 'class' => 'btn btn-primary my-btn']); ?>&nbsp
                                <?= form_reset(['name' => 'reset', 'value' => 'Reset', 'class' => 'btn btn-danger my-btn-res']) ?>
                            </div>
                            <br>
                            <div class="form-group" id="acc">
                                <span>Don’t have an account?</span>
                                <a href="<?= base_url() ?>Users/registration" class="text-info">Register now</a>
                            </div>
                            <?= form_close(); ?>
                        </div>
                        <div class="col-lg-1">

                        </div>
                        <!--=== Login with social apps ===-->
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                            <br>
                            <br>
                            <br>
                            <br>
                            <div>
                                <i class="far fa-file-code fa-8x text-primary"></i>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fas fa-database fa-8x text-dark"></i>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div>
                                <i class="fas fa-code-branch fa-8x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Footer-->
    <footer class="bg-primary py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; HireDev 2021</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="<?= base_url() ?>Users/about">About</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="<?= base_url() ?>users/terms">Terms</a>
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