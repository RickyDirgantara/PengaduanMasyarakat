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

    <!-- Navbar Start -->
    <?= $this->include('layouts/navbar') ?>
    <!--  Search End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h2 class="fw-bold text-primary text-uppercase">Form Laporan</h2>
            <h4 class="mb-0">Partisipasi Anda sangat berarti dalam meningkatkan kualitas layanan publik.</h4>
        </div>

        <div class="row g-5">
            <div class="col-lg-6 mx-auto wow slideInUp" data-wow-delay="0.3s">
                <form action="/create" method="post">
                    <div class="row g-3">
                        <div class="col-12">
                            <input type="text" name="JudulPengaduan" class="form-control border-0 bg-light px-4" placeholder="Judul Pengaduan" style="height: 55px;">
                        </div>
                        <div class="col-12">
                                    <select name="KategoriPengaduan" class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Pilih Kategori Laporan Anda</option>
                                        <option value="Kekerasan">Kekerasan</option>
                                        <option value="Kesehatan Mental">Kesehatan Mental</option>
                                        <option value="Kesehatan Reproduksi">Kesehatan Reproduksi</option>
                                    </select>
                                </div>
                        <div class="col-12">
                            <textarea name="DeskripsiPengaduan" class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Isi Laporan"></textarea>
                        </div>
                        <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Lapor</button>
                                </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


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