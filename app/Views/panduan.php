<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pengaduan Masyarakat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Carousel Start -->
    <?= $this->include('layouts/navbar') ?>
    <!-- End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                <h1 class="mb-0">Berikut adalah beberapa fungsi umum dari portal layanan Sobat Sambat</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                        <i class="bi bi-emoji-frown text-white"></i>
                        </div>
                        <h4 class="mb-3">Pengumpulan Keluhan</h4>
                        <p class="m-0">Masyarakat dapat mengajukan keluhan atau laporan melalui formulir online yang disediakan oleh portal. Informasi yang diperlukan untuk keluhan dapat bervariasi tergantung pada tujuan portal tersebut.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">Pelacakan Status Pengaduan</h4>
                        <p class="m-0">Sistem ini umumnya menyediakan fitur pelacakan status sehingga pengguna dapat melihat kemajuan penanganan pengaduan mereka. Ini memberikan transparansi dan memberikan keyakinan kepada masyarakat bahwa pengaduannya sedang ditangani.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="bi bi-clipboard-data text-white"></i>
                        </div>
                        <h4 class="mb-3">Pengelolaan dan Analisis Data</h4>
                        <p class="m-0">Pihak berwenang atau organisasi yang bertanggung jawab dapat menggunakan portal ini untuk mengelola dan menganalisis data pengaduan secara efisien. Ini membantu mereka memahami tren, menilai kinerja, dan merancang strategi perbaikan.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                        <i class="bi bi-chat-left-dots text-white"></i>
                        </div>
                        <h4 class="mb-3">Umpan Balik</h4>
                        <p class="m-0">Setelah pengaduan selesai ditangani, sistem ini biasanya memberikan umpan balik kepada pengadu, memberi tahu mereka tentang tindakan yang telah diambil atau solusi yang diterapkan.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="bi bi-info-circle text-white"></i>
                        </div>
                        <h4 class="mb-3">Pemberitahuan dan Komunikasi</h4>
                        <p class="m-0">Portal ini sering kali menyediakan sistem pemberitahuan untuk memberi tahu pengadu tentang perkembangan terkait pengaduannya. Komunikasi yang efektif membantu membangun kepercayaan dan memberikan informasi yang diperlukan.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Keamanan dan Privasi</h4>
                        <p class="m-0">Portal pengaduan masyarakat harus menjaga keamanan dan privasi informasi yang dikirimkan oleh pengguna. Ini melibatkan implementasi langkah-langkah keamanan teknis dan kebijakan privasi yang ketat.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
               
                    
                    <img class="img-fluid" src="img/cobers.jpg" alt="">
                  
              
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    

 <!-- Footer Start -->
 <?= $this->include('layouts/footer') ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>