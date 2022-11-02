<!-- Header start -->
<title><?php echo('Add Aircraft'); ?></title>
<?php 
include "conn/config.php";
include('include/0_adminheader.php');

if(isset($_POST['submit'])){
    $aircraft = $_POST['aircraft'];
    $registration = $_POST['registration'];
    $engine = $_POST['engine'];
    $seater = $_POST['seater'];
    $ground = $_POST['flyable'];
    $checking = $_POST['checking'];

    $sql = "INSERT INTO aircraft (id, aircraft, registration, engine, seater, flyable, checking) VALUES (NULL,'$aircraft','$registration','$engine','$seater','$ground','$checking')";

    $result = mysqli_query($conn,$sql);

    if($result){
        header("location: aircraft.php?msg=New Aircraft Added Successful");
    }else{
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
        <h1>ADD AIRCRAFT</h1>
    </div>
    <div class="container-xxl position-relative bg-white d-flex p-0 mt-5">

        <div class="container">
            <form class="row g-3 mx-5" method="post">
                <div class="col-md-6">
                    <label for="aircraft" class="form-label">Type of Aircraft</label>
                    <input type="text" name="aircraft" class="form-control" id="aircraft">
                </div>
                <div class="col-md-6">
                    <label for="registration" class="form-label">Aircraft Registration</label>
                    <input type="text" name="registration" class="form-control" id="registration">
                </div>
                <div class="col-md-6">
                    <label for="engine" class="form-label">Type of Engine</label>
                    <select id="engine" name="engine" class="form-select">
                        <option>1 Engine</option>
                        <option>2 Engine</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="seater" class="form-label">No. of Seater</label>
                    <select id="seater" name="seater" class="form-select">
                        <option>2 Seaters</option>
                        <option>4 Seaters</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="ground" class="form-label">Ground Aircraft / Not Flyable</label>
                    <select id="ground" name="flyable" class="form-select">
                        <option>300NM</option>
                        <option>AOG</option>
                        <option></option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="checking" class="form-label">Checking Aircraft</label>
                    <select id="checking" name="checking" class="form-select">
                        <option>TBO</option>
                        <option></option>
                    </select>
                </div>
                <div class="col-12 mb-5 pb-5">
                    <input type="submit" name="submit" value="Add Aircraft"
                        class="btn btn-Warning text-light mb-5"></input>
                    <a href="aircraft.php"><button type="button" name="submit"
                            class="btn btn-danger mb-5">Cancel</button></a>
                </div>
            </form>
        </div>
    </div>


    </html>

    <?php 
    include('include/0_adminfooter.php');
    ?>