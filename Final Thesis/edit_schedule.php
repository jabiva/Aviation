<!-- Header start -->
<title><?php echo('Edit Schedule'); ?></title>

<?php 

include "conn/config.php";

include('include/0_adminheader.php');

$id =$_GET['id'];

if(isset($_POST['submit'])){

    $aircraft = $_POST['aircraft'];

    $registration = $_POST['registration'];

    $instructor = $_POST['instructor'];

    $ir = $_POST['instrumentrating'];

    $sn = $_POST['syllabus'];

    $ft = $_POST['flighttime'];
    
    $student = $_POST['student'];

    $sql = "UPDATE `schedule` SET `aircraft`='$aircraft',`registration`='$registration',`instructor`='$instructor',`instrumentrating`='$ir',`syllabus`='$sn',`flighttime`='$ft',`student`='$student' WHERE id=$id";

    $result = mysqli_query($conn,$sql);

    if($result)
    {

        header("location: schedule.php?msg=Update Schedule Information Successful");

    }

    else

    {

        echo "Failed: " . mysqli_error($conn);
    }

}

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
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i
                        class="fa-duotone fa-plane"></i>Type of Aircraft</a>

                <div class="dropdown-menu bg-transparent border-0">
                    <a href="add_aircraft.php" class="dropdown-item active">View Aircraft</a>
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

    <div class="container mt-5 text-center">
        <h1>EDIT SCHEDULE INFORMATION</h1>
        <p class="text-muted">Click update after change the information</p>
    </div>

    <?php 

        $sql = "SELECT * FROM `schedule` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
    ?>


    <div class="container-xxl position-relative bg-white d-flex p-0 mt-5">

        <div class="container">
            <form class="row g-0 mx-5" method="post">
                <div class="col-md-12">
                    <label for="aircraft" class="form-label">Type of Aircraft</label>
                    <input type="text" name="aircraft" class="form-control" id="aircraft"
                        value="<?php echo $row['aircraft'] ?>">
                </div>
                <div class="col-md-12">
                    <label for="registration" class="form-label">Aircraft Registration</label>
                    <input type="text" name="registration" class="form-control" id="registration"
                        value="<?php echo $row['registration'] ?>">
                </div>
                <div class="col-md-12">
                    <label for="instructor" class="form-label">Instructor</label>
                    <input type="text" name="instructor" class="form-control" id="registration"
                        value="<?php echo $row['instructor'] ?>">
                </div>
                <div class="col-md-12">
                    <label for="instrumentrating" class="form-label">Instrument Rating</label>
                    <input type="text" name="instrumentrating" class="form-control" id="registration"
                        value="<?php echo $row['instrumentrating'] ?>">
                </div>
                <div class="col-md-12">
                    <label for="syllabus" class="form-label">Syllabus No.</label>
                    <input type="text" name="syllabus" class="form-control" id="registration"
                        value="<?php echo $row['syllabus'] ?>">
                </div>
                <div class="col-md-12">
                    <label for="flighttime" class="form-label">Flight Time</label>
                    <input type="text" name="flighttime" class="form-control" id="registration"
                        value="<?php echo $row['flighttime'] ?>">
                </div>
                <div class="col-md-12">
                    <label for="student" class="form-label">Student Name</label>
                    <input type="text" name="student" class="form-control" id="registration"
                        value="<?php echo $row['student'] ?>">
                </div>
                <div class="col-12 mb-5 pb-5 mt-3">
                    <input type="submit" name="submit" value="Update" class="btn btn-Warning text-light mb-5"></input>
                    <a href="schedule.php"><button type="button" name="submit"
                            class="btn btn-danger mb-5">Cancel</button></a>
                </div>
            </form>
        </div>
    </div>


    </html>

    <?php 
    include('include/0_adminfooter.php');
    ?>