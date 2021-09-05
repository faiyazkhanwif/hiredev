<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Change Password</title>
    <script src="https://kit.fontawesome.com/714da8de62.js" crossorigin="anonymous"></script>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('tool/img/favicon.png'); ?>" />
    <!-- Bootstrap icons-->
    <link type="text/css" href="<?= base_url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css'); ?>" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link type="text/css" href="<?= base_url('tool/css/styles.css" rel="stylesheet'); ?>" />
    
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
    </style>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient">
            <div class="container px-5">
                <a class="navbar-brand" href="<?= base_url() ?>users/browsedevs"><i class="fas fa-laptop-code"></i> &nbsp;<span class="fw-bolder">HireDev</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>users/browsedevs"><i class="fas fa-users"></i> Browse Devs &nbsp;&nbsp;</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>Users/about">About &nbsp;&nbsp;</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>User-home">Profile &nbsp;&nbsp;&nbsp;</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-info" href="<?= base_url() ?>User-home/hireddevs">Hired Devs</a></li>
                        &nbsp;&nbsp;&nbsp;
                        <li class="nav-item"><a class="nav-link btn btn-danger" href="<?= base_url() ?>Users/logout"><span><i class="fas fa-power-off"></i></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--=== Success msg ===-->
        <?php
        if ($this->session->flashdata('login_success')) {
            print '<div class= "success-msg">' . $this->session->flashdata('login_success') . '</div>';
        }
        if ($this->session->flashdata('success')) {
            print '<div class= "success-msg">' . $this->session->flashdata('success') . '</div>';
        }
        ?>

        <section class="py-5">
            <div class="container animate__animated animate__zoomIn">
                <!-- Contact form-->
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center mb-5">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fas fa-key"></i></div>
                        <h2 class="fw-bolder">Change Your Password</h2>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">

                            <?php
                            if ($this->session->flashdata('danger')) {
                                print '<div class= "alert-danger">' . $this->session->flashdata('danger') . '</div>';
                            }
                            ?>
                            <?= form_open('User_home/change_password/' . $this->uri->segment(3)) ?>
                            <div id="form-header"></div><br>

                            <div class="form-group">
                                <label for="oldpassword" class="fw-bolder">Current Password</label>
                                <?= form_password(['name' => 'oldpassword', 'placeholder' => '', 'class' => 'form-control']) ?>

                                <div class="text-danger form-error"><?= form_error('oldpassword') ?></div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="password" class="fw-bolder">New Password</label>
                                    <?= form_password(['name' => 'newpassword', 'placeholder' => '', 'class' => 'form-control']) ?>

                                    <div class="text-danger form-error"><?= form_error('newpassword') ?></div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="repassword" class="fw-bolder">Confirm Password</label>
                                    <?= form_password(['name' => 'repassword', 'placeholder' => '', 'class' => 'form-control']) ?>

                                    <div class="text-danger form-error"><?= form_error('repassword') ?></div>
                                </div>
                                <div class="text-secondary text-info small">*Password should be of 5-32 characters consisting of numbers, capital letters and special characters.</div>
                                <br>
                            </div>


                            <br>
                            <div class="form-group">
                                <?= form_submit(['name' => 'submit', 'value' => 'Update Password', 'class' => 'btn btn-primary btn my-btn']); ?>

                            </div>

                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="admin-index section-padding animate__animated animate__bounceInLeft">
            <div class="text-center">


            </div>
        </div>

    </main><!-- Footer-->
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