<nav class="navbar navbar-expand rounded bg-warning rounded bg-opacity-25 navbar-light sticky-top px-4 py-0">
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <span class="d-none d-md-inline-flex">Hi, Admin <?php echo $_SESSION['admin_name'] ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                <a href="0_logout.php" class="dropdown-item">Log Out</a>
            </div>
        </div>
    </div>
</nav>