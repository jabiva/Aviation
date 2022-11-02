<title><?php echo('Instructor'); ?></title>
<!-- Header start -->
<?php 
include('include/0_adminheader.php');
?>
<!-- Header end -->


<!-- Sidebar start -->


<div class="sidebar bg-light pe-0 pb-3">
    <nav class="navbar bg-light rounded navbar-success">
        <a href="admin.php" class="navbar-brand pt-5 mx-5 pb-3">
            <img class="img-fluid" src="img/logo.png" alt="logo">
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
            </div>
            <div class="ms-3">
                <h6 class="mb-0"><?php echo $_SESSION['admin_name'] ?></h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="admin.php" class="nav-item nav-link"><i
                    class="fa-duotone fa-grid-horizontal me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa-duotone fa-plane"></i>Type of Aircraft</a>

                <div class="dropdown-menu bg-transparent border-0">
                    <a href="aircraft.php" class="dropdown-item">View Aircraft</a>

                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa-duotone fa-user-pilot me-2"></i>List of Instructor</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="instructor.php" class="dropdown-item active">View Instructor</a>

                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa-duotone fa-screen-users me-2"></i>List of Students</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="student.php" class="dropdown-item">View Students</a>

                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa-duotone fa-clipboard-list-check me-2"></i>Flight Schedule</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="schedule.php" class="dropdown-item">View Schedule</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa-duotone fa-users me-2"></i>User Management</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="user.php" class="dropdown-item">View all users</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- SIDE BAR END-->

<div class="content">

    <?php 
include('include/0_adminnavbar.php');
?>
    <?php 
    include('include/0_adminfooter.php');
    ?>