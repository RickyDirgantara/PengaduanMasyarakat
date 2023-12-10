<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
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

    <link href="<?= base_url('dashmin/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('dashmin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('dashmin/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('dashmin/css/style.css') ?>" rel="stylesheet">
</head>
<body>
<div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

 <!-- Sidebar Start -->
 <?= $this->include('admin/layouts/sidebar') ?>
        <!-- Sidebar End -->
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
    <a href="<?= base_url("chats/{$complaint['ComplaintID']}"); ?>" class="btn btn-sm btn-info d-inline-block">Kirim Pesan</a>
</td>


                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



  


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('dashmin/lib/chart/chart.min.js') ?>"></script>
    <script src="<?= base_url('dashmin/lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('dashmin/lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('dashmin/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('dashmin/lib/tempusdominus/js/moment.min.js') ?>"></script>
    <script src="<?= base_url('dashmin/lib/tempusdominus/js/moment-timezone.min.js') ?>"></script>
    <script src="<?= base_url('dashmin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') ?>"></script>


    <!-- Template Javascript -->
    <script src="<?= base_url('dashmin/js/main.js') ?>"></script>
</body>

</html>