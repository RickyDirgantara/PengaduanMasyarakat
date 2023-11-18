
    
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

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Form Edit Complaints</h6>
                            <div class="form-floating mb-3">
                            <div class="container">
        <form action="<?= base_url('update/' . $complaint['ComplaintID']); ?>" method="post">
            <div class="mb-3">
                <label for="JudulPengaduan" class="form-label">Judul Pengaduan</label>
                <input type="text" class="form-control" id="JudulPengaduan" name="JudulPengaduan" value="<?= $complaint['JudulPengaduan']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="DeskripsiPengaduan" class="form-label">Deskripsi Pengaduan</label>
                <textarea class="form-control" id="DeskripsiPengaduan" name="DeskripsiPengaduan" rows="4" required><?= $complaint['DeskripsiPengaduan']; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="StatusPengaduan" class="form-label">Status Pengaduan</label>
                <select class="form-select" id="StatusPengaduan" name="StatusPengaduan" required>
                    <option value="Dalam Proses" <?= ($complaint['StatusPengaduan'] == 'Dalam Proses') ? 'selected' : ''; ?>>Dalam Proses</option>
                    <option value="Selesai" <?= ($complaint['StatusPengaduan'] == 'Selesai') ? 'selected' : ''; ?>>Selesai</option>
                    <option value="Ditutup" <?= ($complaint['StatusPengaduan'] == 'Ditutup') ? 'selected' : ''; ?>>Ditutup</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="PrioritasPengaduan" class="form-label">Prioritas Pengaduan</label>
                <select class="form-select" id="PrioritasPengaduan" name="PrioritasPengaduan" required>
                    <option value="Tinggi" <?= ($complaint['PrioritasPengaduan'] == 'Tinggi') ? 'selected' : ''; ?>>Tinggi</option>
                    <option value="Sedang" <?= ($complaint['PrioritasPengaduan'] == 'Sedang') ? 'selected' : ''; ?>>Sedang</option>
                    <option value="Rendah" <?= ($complaint['PrioritasPengaduan'] == 'Rendah') ? 'selected' : ''; ?>>Rendah</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

                        </div>
                    </div>
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