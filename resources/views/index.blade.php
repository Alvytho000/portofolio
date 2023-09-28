<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhafa Ahmad Alvito UI/UX Designer</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container flex-lg-column">
            <a class="navbar-brand mx-lg-auto mb-lg-4" href="#">
                <span class="h3 fw-bold d-block d-lg-none">Dhafa Ahmad Alvito</span>
                <img src="{{ asset('assets/images/NFS.jpg') }}" class="d-none d-lg-block rounded-circle" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#reviews">Reviews</a>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- //NAVBAR -->

    <!-- CONTENT WRAPPER -->
    <div id="content-wrapper">

        <!-- HOME -->
        <section id="home" class="full-height px-lg-5">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="display-4 fw-bold" data-aos="fade-up">SAYA ADALAH <span class="text-brand">PROGRAMMER</span> DARI INDONESIA</h1>
                        <p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300">Saya Dhafa Ahmad Alvito, Dan saya menciptakan pengalaman berkinerja tinggi dan menyenangkan yang disesuaikan dan berfokus pada konversi</p>
                        <div data-aos="fade-up" data-aos-delay="600">
                            <a href="#work" class="btn btn-brand me-3">Jelajahi Pekerjaan Saya</a>
                            <a href="#" class="link-custom">Telepon: 0821 1365 1565</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- //HOME -->

        <!-- SERVICES -->
        <section id="services" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">LAYANAN</h6>
                        <h1>Layanan yang Saya Berikan</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-4" data-aos="fade-up">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="las la-tools"></i>
                            </div>
                            <h5 class="mt-4 mb-2">UX Developer</h5>
                            <p>Sebagai seorang pengembang UX yang siap membantu Anda merancang dan meningkatkan pengalaman pengguna dan kepuasaan pengguna.</p>
                            <a href="#" class="link-custom">Read More</a>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="las la-palette"></i>
                            </div>
                            <h5 class="mt-4 mb-2">UI Developer</h5>
                            <p>Sebagai seorang pengembang UI yang siap membantu Anda menciptakan antarmuka pengguna yang menarik dan efisien.</p>
                            <a href="#" class="link-custom">Read More</a>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="las la-laptop-code"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Web Developer</h5>
                            <p>Sebagai seorang pengembang web yang siap membantu Anda membangun dan mengembangkan situs web yang fungsional dan menarik.</p>
                            <a href="#" class="link-custom">Read More</a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- SERVICES -->

        <!-- WORK -->
        <section id="work" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">Pekerjaan</h6>
                        <h1>Proyek Terbaru Saya</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4 p-3">
                                <img class="rounded-4" src="./assets/images/project-1.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Startup Landing Page</h4>
                                <p>Saya telah merancang dan mengembangkan berbagai halaman awal (landing page) yang efektif untuk berbagai startup. Setiap halaman dirancang dengan fokus pada tujuan startup untuk menarik perhatian pengunjung dan mengubah mereka menjadi pelanggan potensial yang tertarik.</p>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4 p-3">
                                <img class="rounded-4" src="./assets/images/project-2.png" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Mobile App</h4>
                                <p>Saya telah berkesempatan untuk mengembangkan berbagai aplikasi seluler yang memadukan desain yang menarik dengan fungsionalitas yang kuat dan dirancang dengan cermat untuk memberikan pengalaman pengguna yang intuitif dan memuaskan.</p>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4 p-3">
                                <img class="rounded-4" src="./assets/images/project-3.png" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Web Application</h4>
                                <p>Saya telah mengambil peran yang signifikan dalam pengembangan berbagai aplikasi web yang beragam, dari sistem manajemen konten hingga aplikasi bisnis yang kompleks, responsif dan sukses, dan mengembangkan aplikasi web yang inovatif dan efisien.</p>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4 p-3">
                                <img class="rounded-4" src="./assets/images/project-4.png" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Maintenance and repair</h4>
                                <p>Saya memiliki pengalaman yang luas dalam melakukan pemeliharaan dan perbaikan berbagai jenis proyek. Saya telah bekerja dengan berbagai klien untuk memastikan sistem mereka berfungsi dengan baik, mengatasi masalah yang muncul, dan meningkatkan kinerja keseluruhan.</p>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- //WORK -->

        <!-- ABOUT -->
        <section id="about" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">ABOUT</h6>
                        <h1>My Education & Experiance</h1>
                    </div>
                </div>

                <div class="row gy-5">
                    <div class="col-lg-6">

                        <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Education</h3>
                        <div class="row gy-4">

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Rekayasa Perangkat Lunak</h4>
                                    <p class="text-brand mb-2">SMKN 5 Kabupaten Tangerang (2023 - 2024)</p>
                                    <p class="mb-0">All we are more and design lorem ipsum dolor creativity sit amet
                                        consectetur adipisicing elit</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Rekayasa Perangkat Lunak</h4>
                                    <p class="text-brand mb-2">SMKN 5 Kabupaten Tangerang (2022 - 2023)</p>
                                    <p class="mb-0">All we are more and design lorem ipsum dolor creativity sit amet
                                        consectetur adipisicing elit</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Experiance</h3>
                        <div class="row gy-4">

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>IT Softwrare Solutions For Business</h4>
                                    <p class="text-brand mb-2">LKS 2022 (2022)</p>
                                    <p class="mb-0">All we are more and design lorem ipsum dolor creativity sit amet
                                        consectetur adipisicing elit</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- //ABOUT -->

        <!-- REVIEWS -->
        {{-- <section id="reviews" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">REVIEWS</h6>
                        <h1>What our subscribers say</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-4" data-aos="fade-up">

                        <div class="review shadow-effect bg-base p-4 rounded-4">
                            <div class="text-brand h5">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                            </div>
                            <p class="my-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel quae
                                facilis fugiat molestias ab illum excepturi, qui optio modi asperiores, delectus
                                maiores!</p>
                            <div class="person">
                                <h5 class="mb-0">Dhafa Ahmad Alvito</h5>
                                <p class="mb-0">Twitter</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">

                        <div class="review shadow-effect bg-base p-4 rounded-4">
                            <div class="text-brand h5">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                            </div>
                            <p class="my-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel quae
                                facilis fugiat molestias ab illum excepturi, qui optio modi asperiores, delectus
                                maiores!</p>
                            <div class="person">
                                <h5 class="mb-0">Dhafa Ahmad Alvito</h5>
                                <p class="mb-0">Twitter</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">

                        <div class="review shadow-effect bg-base p-4 rounded-4">
                            <div class="text-brand h5">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                            </div>
                            <p class="my-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel quae
                                facilis fugiat molestias ab illum excepturi, qui optio modi asperiores, delectus
                                maiores!</p>
                            <div class="person">
                                <h5 class="mb-0">Jon Doe</h5>
                                <p class="mb-0">Twitter</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section> --}}
        <!-- //REVIEWS -->

        <!-- BLOG -->
        {{-- <section id="blog" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">BLOG</h6>
                        <h1>My BLog Posts</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-4" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./assets/images/blog-post-1.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <p class="text-brand mb-2">20 Dec, 2022</p>
                                <h5 class="mb-4">Design a creative landing page using Bootstrap 5</h5>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./assets/images/blog-post-2.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <p class="text-brand mb-2">20 Dec, 2022</p>
                                <h5 class="mb-4">Design a creative landing page using Bootstrap 5</h5>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./assets/images/blog-post-3.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <p class="text-brand mb-2">20 Dec, 2022</p>
                                <h5 class="mb-4">Design a creative landing page using Bootstrap 5</h5>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
        <!-- //BLOG -->

        <!-- CONTACT -->
        <section id="contact" class="full-height px-lg-5">
            <div class="container">

                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 pb-4" data-aos="fade-up">
                        <h6 class="text-brand">CONTACT</h6>
                        <h1>Interested in working together? Let's talk
                        </h1>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                        <form action="#" class="row g-lg-3 gy-3">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="form-group col-12">
                                <input type="text" class="form-control" placeholder="Enter subject">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="" rows="4" class="form-control" placeholder="Enter your message"></textarea>
                            </div>
                            <div class="form-group col-12 d-grid">
                                <button type="submit" class="btn btn-brand">Contact me</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </section>
        <!-- //CONTACT -->

        <!-- FOOTER -->
        <footer class="py-5 px-lg-5">
            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">Designed by <a href="#" class="fw-bold">V.Corp</a> | &copy; Copyright Alright Reserved</p>
                    </div>
                    <div class="col-auto">
                        <div class="social-icons">
                            <a href="#"><i class="lab la-twitter"></i></a>
                            <a href="#"><i class="lab la-instagram"></i></a>
                            <a href="#"><i class="lab la-facebook-f"></i></a>
                            <a href="#"><i class="lab la-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //FOOTER -->

    </div>
    <!-- //CONTENT WRAPPER -->

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
