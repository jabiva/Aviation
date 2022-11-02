<title><?php echo('Schedule'); ?></title>
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
                    <a href="instructor.php" class="dropdown-item">View Instructor</a>

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
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i
                        class="fa-duotone fa-clipboard-list-check me-2"></i>Flight Schedule</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="add_schedule.php" class="dropdown-item">Add Schedule</a>
                    <a href="schedule.php" class="dropdown-item active">View Schedule</a>

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




    <div class="container-xxl position-relative bg-white d-flex p-0 mt-5">

        <div class="container">
            <form class="row" method="post">
                <div class="text-center mb-3">
                    <h1>SCHEDULE LIST</h1>
                </div>
                <?php 
    if(isset($_GET['msg'])){
        $msg = $_GET['msg'];
        echo '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        '.$msg.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
      </div>';
    }
    ?>
                <div class="col-lg-8 col-md-7 col-sm-6 col-3">
                    <a href="add_aircraft.php"><input type="button" name="submit" value="Add Schedule"
                            class="btn btn-Warning text-light"></input></a>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 col">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control ms-5" placeholder="Search">
                        <button class="btn btn-warning text-light" name="search" type="button">Search</button>
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table table-warning table-striped table-bordered text-center">
                    <thead class="table-warning">
                        <tr>
                            <th scope="col">Type of Aircraft</th>
                            <th scope="col">Aircraft Registration</th>
                            <th scope="col">Instructor</th>
                            <th scope="col">Instrument rating</th>
                            <th scope="col">Syllabus No.</th>
                            <th scope="col">Flight Time</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
        include "conn/config.php";
        $sql = "SELECT * FROM `schedule`";
        $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            ?>
                        <tr>
                            <td> <?php echo $row['aircraft'] ?></td>
                            <td> <?php echo $row['registration'] ?></td>
                            <td> <?php echo $row['instructor'] ?></td>
                            <td> <?php echo $row['instrumentrating'] ?></td>
                            <td> <?php echo $row['syllabus'] ?></td>
                            <td> <?php echo $row['flighttime'] ?></td>
                            <td> <?php echo $row['student'] ?></td>
                            <td>
                                <a href="edit_schedule.php?id=<?php echo $row['id'] ?>" class="link-dark"><i
                                        class="fa-duotone fa-pen-to-square me-3"></i></a>
                                <a href="delete_schedule.php?id=<?php echo $row['id'] ?>" id="del" class="link-dark"><i
                                        class="fa-duotone fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
        }
        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php 
    include('include/0_adminfooter.php');
    ?>