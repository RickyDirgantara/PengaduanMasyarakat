<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="dashmin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="dashmin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="dashmin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="dashmin/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?= $this->include('admin/layouts/sidebar') ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">


            <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Complaint Management</h6>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Tanggal</th>
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
                    <td><?= $complaint['DeskripsiPengaduan']; ?></td>
                    <td><?= $complaint['TanggalPengaduan']; ?></td>
                    <td><?= $complaint['StatusPengaduan']; ?></td>
                    <td><?= $complaint['PrioritasPengaduan']; ?></td>
                    <td>
    <!-- Tombol Edit -->
    <a href="/edit/<?= $complaint['ComplaintID']; ?>" class="btn btn-sm btn-primary d-inline-block">Edit</a>
    <!-- Tombol Delete -->
    <a href="/delete/<?= $complaint['ComplaintID']; ?>" class="btn btn-sm btn-danger d-inline-block">Delete</a>
    <a href="<?= base_url("createFollowUps/{$complaint['ComplaintID']}"); ?>" class="btn btn-sm btn-info d-inline-block">Tindak Lanjut</a>
</td>


                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
    

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="dashmin/lib/chart/chart.min.js"></script>
    <script src="dashmin/lib/easing/easing.min.js"></script>
    <script src="dashmin/lib/waypoints/waypoints.min.js"></script>
    <script src="dashmin/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="dashmin/lib/tempusdominus/js/moment.min.js"></script>
    <script src="dashmin/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="dashmin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="dashmin/js/main.js"></script>
</body>

</html>