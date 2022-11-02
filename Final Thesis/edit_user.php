<!-- Header start -->
<title><?php echo('Edit User Information'); ?></title>

<?php 

include "conn/config.php";

include('include/0_adminheader.php');

$id =$_GET['id'];

if(isset($_POST['submit'])){

    $fname = $_POST['firstname'];

    $lname = $_POST['lastname'];

    $email = $_POST['email'];

    $pass = $_POST['password'];

    $contact = $_POST['contact'];

    $usertype = $_POST['usertype'];

    $sql = "UPDATE `users` SET `firstname`='$fname',`lastname`='$lname',`email`='$email',`password`='$pass',`contact`='$contact',`usertype`='$usertype' WHERE id=$id";

    $result = mysqli_query($conn,$sql);

    if($result)
    {

        header("location: user.php?msg=Update User Information Successful");

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
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa-duotone fa-plane"></i>Type of Aircraft</a>

                <div class="dropdown-menu bg-transparent border-0">
                    <a href="add_aircraft.php" class="dropdown-item">View Aircraft</a>
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
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i
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
        <h1>EDIT USER INFORMATION</h1>
        <p class="text-muted">Click update after change the information</p>
    </div>

    <?php 

        $sql = "SELECT * FROM `users` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
    ?>


    <div class="container-xxl position-relative bg-white d-flex p-0 mt-5">

        <div class="container">
            <form class="row g-3 mx-5" method="post">
                <div class="col-md-6">
                    <label for="fname" class="form-label">First name</label>
                    <input type="text" name="firstname" class="form-control" id="firstname"
                        value="<?php echo $row['firstname'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="lname" class="form-label">Last name</label>
                    <input type="text" name="lastname" class="form-control" id="lastname"
                        value="<?php echo $row['lastname'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?php echo $row['email'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password"
                        value="<?php echo $row['password'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="contact" class="form-label">Contact</label>
                    <input type="text" name="contact" class="form-control" id="contact"
                        value="<?php echo $row['contact'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="usertype" class="form-label">User type</label>
                    <select id="checking" name="usertype" class="form-select" value="<?php echo $row['usertype'] ?>">
                        <option value="<?php echo $row['usertype'] ?>">user</option>
                        <option value="<?php echo $row['usertype'] ?>">admin</option>
                    </select>
                </div>
                <div class="col-12 mb-5 pb-5">
                    <input type="submit" name="submit" value="Update" class="btn btn-Warning text-light mb-5"></input>
                    <a href="user.php"><button type="button" name="submit"
                            class="btn btn-danger mb-5">Cancel</button></a>
                </div>
            </form>
        </div>
    </div>


    </html>

    <?php 
    include('include/0_adminfooter.php');
    ?>