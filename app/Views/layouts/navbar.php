<div class="container-fluid position-relative p-0">
<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
    <a href="index.html" class="navbar-brand p-0">
        <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Layanan Sobat Sambat</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="/" id="home" class="nav-item nav-link <?= ($activeLink == '/') ? 'active' : ''; ?>">Home</a>
            <a href="/panduan" id="panduan" class="nav-item nav-link <?= ($activeLink == 'panduan') ? 'active' : ''; ?>">Panduan</a>
            <a href="/laporan" id="laporan" class="nav-item nav-link <?= ($activeLink == 'laporan') ? 'active' : ''; ?>">Buat Laporan</a>
        </div>             
        <?php if (session()->get('user_id')) : ?>
    <!-- Tampilkan informasi pengguna jika sedang login -->
    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Welcome, <?= session()->get('user_nama'); ?></a>
        <div class="dropdown-menu m-0">
            <a href="/complaintsUser" class="dropdown-item">
                Status Laporan
                <?php if (!empty($notifications)) : ?>
    <span>!</span>
<?php endif; ?>
            </a>
            <a href="/logout" class="dropdown-item">Logout</a>
        </div>
    </div>    
        <?php else : ?>
            <!-- Tombol login jika belum login -->
            <button type="button" class="btn btn-outline-dark py-2 px-4 ms-3 animated slideInLeft" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i class="bi bi-door-open"></i> Login
            </button>
            <!-- Tombol register jika belum login -->
            <a href="/register" class="btn btn-outline-dark py-2 px-4 ms-3 animated slideInRight" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a>
        <?php endif; ?>
    </div>
</nav>


        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="https://pilarpkbijateng.or.id/wp-content/uploads/2020/11/GAMBAR-min.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Portal Layanan Sobat Sambat</h4>
                            <h6 class="display-1 text-white mb-md-4 animated zoomIn">Sampaikan keluhan dan pengaduan Anda dengan mudah melalui portal ini.</h6>
                            <a href="/laporan" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Lapor!</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="https://pilarpkbijateng.or.id/wp-content/uploads/2020/11/GAMBAR-1-min.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Masyarakat Berkomentar</h5>
                            <h6 class="display-1 text-white mb-md-4 animated zoomIn">Suara Anda penting. Laporkan permasalahan masyarakat melalui Laporan Warga kami.</h6>
                            <a href="/laporan" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Lapor!</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->

    <!-- login modal -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                    <form action="login" method="post">
                            <div class="row g-3">
                                <div class="col-12">
    
                                    <input type="email" name="AlamatEmail" class="form-control bg-light border-0" placeholder="Email" style="height: 55px;">
                                   
                                </div>
                                <div class="col-12">
                                <input type="password" name="KataSandi" class="form-control bg-light border-0" placeholder="Password" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  



    <div class="modal fade" id="registerModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                    <div class="input-group" style="max-width: 600px;">
                
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                    <form action="/register" method="post">
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" name="Nama" class="form-control bg-light border-0" placeholder="Username" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" name="AlamatEmail" class="form-control bg-light border-0" placeholder="@Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                <input type="password" name="KataSandi" class="form-control bg-light border-0" placeholder="Password" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
     
                    </div>

     
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
    // Contoh: Tambahkan notifikasi dinamis saat dokumen dimuat
    document.addEventListener("DOMContentLoaded", function() {
        // Gantilah ini dengan logika sesuai dengan proyek Anda
        var hasUnreadNotifications = <?php echo json_encode($hasUnreadNotifications); ?>;

        if (hasUnreadNotifications) {
            // Tambahkan elemen notifikasi ke elemen dropdown
            var notificationBadge = document.createElement("span");
            notificationBadge.className = "badge bg-danger";
            notificationBadge.textContent = "New";

            // Gantilah dengan ID atau kelas yang sesuai dengan proyek Anda
            var statusLaporanLink = document.querySelector(".dropdown-item[href='/complaintsUser']");
            statusLaporanLink.appendChild(notificationBadge);
        }
    });
</script>
