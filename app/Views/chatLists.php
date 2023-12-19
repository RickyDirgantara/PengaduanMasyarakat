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
    <!-- Navbar End -->



    <!-- Testimonial Start -->
    <div class="container py-5">
    <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
        <h1 class="mb-0">Cek pesan anda disini</h1>
    </div>
   <!-- Chat Section Start -->
   <div class="content">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Sistem Chat</h6>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Judul</th>
                <th scope="col">Status</th>
                <th scope="col">Prioritas</th>
                <th scope="col">Aksi</th> <!-- Tambah kolom untuk tombol aksi -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($complaints as $complaint) : ?>
                <tr>
                    <td><?= $complaint['ComplaintID']; ?></td>
                    <td><?= $complaint['JudulPengaduan']; ?></td>
                    <td><?= $complaint['StatusPengaduan']; ?></td>
                    <td><?= $complaint['PrioritasPengaduan']; ?></td>
                    <td>
    <!-- Tombol Edit -->
    <a href="<?= base_url("chatsUser/{$complaint['ComplaintID']}"); ?>" class="btn btn-sm btn-info d-inline-block">Kirim Pesan</a>
</td>


                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
    </div>
    

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