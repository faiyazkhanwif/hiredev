<!--=== Success msg ===-->
<?php
if ($this->session->flashdata('reg_success')) {
    print '<div class= "success-msg">' . $this->session->flashdata('reg_success') . '</div>';
}
?>
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
                        <li class="nav-item"><button type="button" onclick="window.location='<?= base_url() ?>Users/login'" class="btn btn-light">Login</button></li>
                    </ul>
                </div>
            </div>
        </nav>

        <br>

        <div class="login-form-area animate__animated animate__zoomIn">
            <div class="container">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fas fa-user-plus"></i></div>
                            <h2 class="fw-bolder">Sign Up</h2>
                            
                        </div>
                        <div class="reg-form">
                            <div class="form-header"></div>

                            <?= form_open('Users/registration') ?>

                            <div class="form-group">
                                <label for="name"></label>
                                <?= form_input(['name' => 'name', 'placeholder' => 'Name', 'value' => set_value('name'), 'class' => 'form-control']) ?>

                                <div class="text-danger form-error small"><?= form_error('name') ?></div>
                            </div>
                            <div class="form-group">
                                <label for="contact"></label>
                                <?= form_input(['name' => 'contact', 'placeholder' => 'Phone number', 'value' => set_value('contact'), 'class' => 'form-control']) ?>

                                <div class="text-danger form-error small"><?= form_error('contact') ?></div>
                            </div>
                            <div class="form-group">
                                <label for="email"></label>
                                <?= form_input(['name' => 'email', 'placeholder' => 'Email address', 'value' => set_value('email'), 'class' => 'form-control']) ?>

                                <div class="text-danger form-error small"><?= form_error('email') ?></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="password"></label>
                                    <?= form_password(['name' => 'password', 'placeholder' => 'Password', 'class' => 'form-control']) ?>

                                    <div class="text-danger form-error small"><?= form_error('password') ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="repassword"></label>
                                    <?= form_password(['name' => 'repassword', 'placeholder' => 'Re-type Password', 'class' => 'form-control']) ?>

                                    <div class="text-danger form-error small"><?= form_error('repassword') ?></div>
                                </div>
                                <div class="text-secondary text-info small"><i>*Password should be of 5-32 characters consisting of numbers, capital letters and special characters.</i></div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="form-check">
                                    <?= form_checkbox(['name' => 'conditionBox', 'class' => 'form-check-input', 'value' => TRUE]); ?>
                                    <label class="form-check-label small" for="term">
                                        I have agreed to HireDev's <a href="<?= base_url() ?>Users/terms" target="_blank" class="text-primary">terms and conditions</a>.
                                    </label>
                                </div>
                                <div class="text-danger form-error small"><?= form_error('conditionBox') ?></div>
                            </div>
                            <br>
                            <div class="form-group text-center d-grid">
                                <?= form_submit(['name' => 'submit', 'value' => 'Sign Up', 'class' => 'btn btn-primary btn-lg']); ?>
                            </div>

                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <br>
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