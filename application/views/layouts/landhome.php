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
    <link rel="icon" type="image/x-icon" href="tool/img/favicon.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="tool/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

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

        /* Center the loader */
        #loader {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 1;
            width: 120px;
            height: 120px;
            margin: -76px 0 0 -76px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #0275d8;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Add animation to "page content" */
        .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
        }

        @-webkit-keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }

            to {
                bottom: 0px;
                opacity: 1
            }
        }

        @keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        #myDiv {
            display: none;
            text-align: center;
        }
    </style>
</head>



<body class="d-flex flex-column h-100" onload="myFunction()" style="margin:0;">
    <div id="loader"></div>
    <div class="animate-bottom" id="myDiv">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient">
                <div class="container px-5">
                    <a class="navbar-brand" href="<?= base_url() ?>Home"><i class="fas fa-laptop-code"></i> &nbsp;<span class="fw-bolder">HireDev</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="about.html">About &nbsp;&nbsp;&nbsp;</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>Users/devjoin">Join Us &nbsp;&nbsp;&nbsp;</a></li>
                            <li class="nav-item"><button type="button" onclick="window.location='Users/login';" class="btn btn-light">Hire now!</button></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header class="bg-primary bg-gradient py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Find amazing devs from around the world!</h1>
                                <br>
                                <p class="lead fw-normal text-white-50 mb-4 txt1">Our devs are here to transform your vision into a reality.</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-light btn-lg px-4 me-sm-3" href="#features">Learn more!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                            <div>
                                <i class="far fa-file-code fa-8x" style="color: white;"></i>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fas fa-database fa-8x" style="color: white;"></i>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div>
                                <i class="fas fa-code-branch fa-8x" style="color: white;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <h2 class="fw-bolder mb-0">Plan, Design, Build</h2>
                            <br>
                            <br>
                            <br>

                            <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-layer-group fa-8x"></i></div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fas fa-user-alt"></i></div>
                                    <h2 class="h5">1. Hire</h2>
                                    <p class="mb-0">Hire a professional developer whose skillset matches your needs.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="far fa-paper-plane "></i></div>
                                    <h2 class="h5">2. Plan and Design</h2>
                                    <p class="mb-0">Plan and choose your preferred design which suites your business requirements.</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="far fa-clock"></i></div>
                                    <h2 class="h5">3. Development</h2>
                                    <p class="mb-0">Wait for your dev to finish developing your dream project.</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fas fa-check"></i></div>
                                    <h2 class="h5">4. Finish Up</h2>
                                    <p class="mb-0">Receive the project once it is finished being developed with love!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"HireDev is the perfect platform for anyone who wants to find a developer. Highly recommended! Been a customer for a long time."</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="far fa-thumbs-up fa-2x"></i> &nbsp;
                                    <div class="fw-bold">
                                        John jones
                                        <span class="fw-bold text-primary mx-1">/</span>
                                        CEO, SomeCompany
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Meet some of our most successful developers!</h2>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">

                                <div class="card-body p-4">
                                    <img class="rounded mx-auto d-block" src="tool/img/user-alt-solid1.png" alt="..." />
                                    <br>
                                    <br>
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Full Stack Web Developer</div>
                                    <br>
                                    <br>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!">
                                        <h5 class="card-title mb-3">Ariful Hasan Khan</h5>
                                    </a>
                                    <br>
                                    <p class="card-text mb-0">Specializes in frameworks like Angular JS, Laravel, Codeigniter.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">

                                            <div class="small">

                                                <div class="text-muted">100+ clients</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">

                                <div class="card-body p-4">
                                    <img class="rounded mx-auto d-block" src="tool/img/user-alt-solid1.png" alt="..." />
                                    <br>
                                    <br>
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Android App Developer</div>
                                    <br>
                                    <br>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!">
                                        <h5 class="card-title mb-3">Hasanath Jamy</h5>
                                    </a>
                                    <br>
                                    <p class="card-text mb-0">Specializes in Java, React Native, Android Studio.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">

                                            <div class="small">

                                                <div class="text-muted">100+ clients</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">

                                <div class="card-body p-4">
                                    <img class="rounded mx-auto d-block" src="tool/img/user-alt-solid1.png" alt="..." />
                                    <br>
                                    <br>
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">System Developer</div>
                                    <br>
                                    <br>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!">
                                        <h5 class="card-title mb-3">Nagib MD Sarfaraz</h5>
                                    </a>
                                    <br>
                                    <p class="card-text mb-0">Specializes in ERP system like Oracle JDE and databases.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">

                                            <div class="small">

                                                <div class="text-muted">50+ clients</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Call to action-->
                    <aside class="bg-info bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                            <div class="mb-4 mb-xl-0">
                                <div class="fs-3 fw-bold text-white">Got skills? Join us now!</div>
                                <div class="text-white-50">Send us your email address. You will be contacted by a HireDev representative soon.</div>
                            </div>
                            <div class="ms-xl-4">
                                <div class="input-group mb-2">
                                    <!--<input class="form-control" type="text" placeholder="Email address" aria-label="Email address" aria-describedby="button-newsletter" />-->
                                    <button class="btn btn-lg btn-outline-light" onclick="window.location='Users/devjoin';" id="button-newsletter" type="button"><span class="fw-bolder">Join Us</span></button>
                                </div>
                                <!--<div class="small text-white-50">We care about privacy, and will never share your data.</div>-->
                            </div>
                        </div>
                    </aside>
                </div>
            </section>
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
                            <a class="link-light small" href="users/terms">Terms</a>
                        </div>
                    </div>
                </div>
            </footer>
        </main>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script>
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 3000);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
        }
    </script>
</body>

</html>