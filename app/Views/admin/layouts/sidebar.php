<div class="sidebar pe-4 pb-3">
<nav class="navbar bg-light navbar-light">
    <!-- Navbar Brand -->
    <a href="index.html" class="navbar-brand mx-4 mb-3">
        <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
    </a>

    <!-- User Information -->
    <div class="d-flex align-items-center ms-4 mb-4">
        <div class="position-relative">
            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
        </div>
        <div class="ms-3">
        <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown" data-bs-toggle="dropdown"><?= session()->get('user_nama'); ?></a>
                        <div class="dropdown-menu m-0">
                            <a href="/logoutAdmin" class="dropdown-item">Logout</a>
                        </div>
                    </div>
           
        </div>
        <span><?= session()->get('role'); ?></span>
    </div>

    <!-- Navbar Navigation -->
    <div class="navbar-nav w-100">
        <!-- Nav Item: Users -->
        <a href="/dashboard" class="nav-item nav-link <?= (service('uri')->getSegment(1) == 'dashboard') ? 'active' : ''; ?>">
            <i class="fa fa-user-alt me-2"></i>Users
        </a>

        <!-- Nav Item: Complaints -->
        <a href="/complaints" class="nav-item nav-link <?= (service('uri')->getSegment(1) == 'complaints') ? 'active' : ''; ?>">
            <i class="fa fa-th me-2"></i>Complaints
        </a>

        <!-- Nav Item: Follow-Ups -->
        <a href="/followUps" class="nav-item nav-link <?= (service('uri')->getSegment(1) == 'followUps') ? 'active' : ''; ?>">
            <i class="fa fa-keyboard me-2"></i>Follow-Ups
        </a>
    </div>
</nav>
</div>
