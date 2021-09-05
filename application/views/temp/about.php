<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>About HireDev</title>
    <script src="https://kit.fontawesome.com/714da8de62.js" crossorigin="anonymous"></script>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('tool/img/favicon.png'); ?>" />
    <!-- Bootstrap icons-->
    <link type="text/css" href="<?= base_url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css'); ?>" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link type="text/css" href="<?= base_url('tool/css/styles.css'); ?>" rel="stylesheet" />

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

<body class="d-flex flex-column h-100 ">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient">
            <div class="container px-5">
                <a class="navbar-brand" href="<?= base_url() ?>Home"><i class="fas fa-laptop-code"></i> &nbsp;<span class="fw-bolder">HireDev</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="about.html">About &nbsp;&nbsp;&nbsp;</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript:window.history.go(-1);"><i class="fas fa-chevron-circle-left"></i> Go Back</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>

        <header class="py-5">
            <div class="container px-5 animate__animated animate__zoomIn">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xxl-6">
                        <div class="text-center">
                            <h1 class="fw-bolder mb-3 text-primary"><i class="fas fa-laptop-code"></i> HireDev</h1>
                            <p class="lead fw-normal text-muted mb-4">Started as a web programming project, currently an unicorn startup of South Asia serving thousands of clients by creating bridges between talented developers around the world with business owners!</p>
                            <a class="btn btn-primary btn-lg" href="#scroll-target">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About section one-->
        <section class="py-5 bg-light" id="scroll-target">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center animate__animated animate__fadeInLeft animate__delay-1s">
                    <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" width="400" src="<?= base_url() ?>tool/img/userpic.png" alt="..." /></div>
                    <div class="col-lg-6">
                        <h2 class="fw-bolder"><i class="fas fa-users"></i> Our Clients</h2>
                        <p class="lead fw-normal text-muted mb-0">From home businesses, to fortune 500 companies, we have had clients whose needs ranged from small projects to large ERP systems. Our platform is here to fulfill your development needs by connecting you with talented developers around the world!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section two-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center animate__animated animate__fadeInRight animate__delay-2s">
                    <div class="col-lg-4 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" width="320" src="<?= base_url() ?>tool/img/user-alt-solid.png" alt="..." /></div>
                    
                    <div class="col-lg-6">
                        <h2 class="fw-bolder"><i class="fas fa-code"></i> Our Developers</h2>
                        <p class="lead fw-normal text-muted mb-0">We have created a platform where talented developers around the world can easily get access to businesses. Our developers also go through a rigorous hiring procedure which ensures that the developers are master of their crafts. </p>
                    </div>
                    <div class="col-lg-2">

                    </div>
                </div>
            </div>
        </section>
        <!-- Team members section-->
        <section class="py-5 bg-light">
            <div class="container px-5 my-5 animate__animated animate__zoomIn animate__delay-3s">
                <div class="text-center">
                    <h2 class="fw-bolder"><i class="fas fa-search-dollar text-primary"></i> Our Founders</h2>
                    <p class="lead fw-normal text-muted mb-5">"We had a vision, you are transforming it into a reality"</p>
                </div>
                <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" width="250" src="<?= base_url() ?>tool/img/arif.jpg" alt="..." />
                            <h5 class="fw-bolder">Ariful Hasan Khan</h5>
                            <div class="fst-italic text-muted">Founder &amp; CEO</div>
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" width="250" src="<?= base_url() ?>tool/img/rahman.jpg" alt="..." />
                            <h5 class="fw-bolder">Asfaqur Rahman</h5>
                            <div class="fst-italic text-muted">Founder &amp; CTO</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-primary py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; HireDev 2021</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="#!">About</a>
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