<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Startup - Startup Website Template</title>
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

    <link href="<?= base_url('lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('lib/animate/animate.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
</head>

<body>
  


    <!-- Navbar Start -->
    <?= $this->include('layouts/navbar') ?>
    <!-- Navbar End -->



    <!-- Testimonial Start -->
    <div class="container py-5">
    <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
        <h1 class="mb-0">Cek pesan anda disini</h1>
    </div>
   <!-- Chat Section Start -->
   <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="card bg-light" style="max-width: 400px;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Sistem Pesan</h5>
                    </div>
                    <div class="card-body text-center">
                    <?php if (empty($chats)): ?>
    <p class="text-muted">No chat messages available.</p>
<?php else: ?>
    <ul class="list-group">
    <?php foreach ($chats as $chat): ?>
            <li class="list-group-item"><?= $chat['message']; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
                        <form action="/sendUser/<?= $complaintID ?>" method="post">
                        <?php foreach ($complaints as $complaint): ?>      
        <?php endforeach; ?>
                
                    <?php if (!empty($admins)): ?>
    <?php foreach ($admins as $admin): ?>
    <?php endforeach; ?>
<?php endif; ?>
                            <div class="form-group">
                                <label for="complaintID">Complaint:</label>
                                <select class="form-control" id="complaintID" name="complaintID">
                                    <?php foreach ($complaints as $complaint): ?>
                                        <option value="<?= $complaint['ComplaintID']; ?>"><?= $complaint['JudulPengaduan']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="hidden" id="sender_id_user" name="sender_id_user" value="<?= session()->get('UserID'); ?>">
                                <input type="hidden" id="receiver_id_admin" name="receiver_id_admin" value="<?= !empty($admin['AdminID']) ? $admin['AdminID'] : ''; ?>">
                                <input type="hidden" id="complaint_id" name="complaint_id" value="<?= !empty($complaint['ComplaintID']) ? $complaint['ComplaintID'] : ''; ?>">
                                <label for="message">Your Message:</label>
                                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

 <!-- Footer Start -->
 <?= $this->include('layouts/footer') ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
<script src="<?= base_url('lib/wow/wow.min.js') ?>"></script>
<script src="<?= base_url('lib/easing/easing.min.js') ?>"></script>
<script src="<?= base_url('lib/waypoints/waypoints.min.js') ?>"></script>
<script src="<?= base_url('lib/counterup/counterup.min.js') ?>"></script>
<script src="<?= base_url('lib/owlcarousel/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('js/main.js'); ?>"></script>
</body>

</html>