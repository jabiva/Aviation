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
            <a href="admin.php" class="nav-item nav-link active"><i
                    class="fa-duotone fa-grid-horizontal me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa-duotone fa-plane"></i>Type of Aircraft</a>

                <div class="dropdown-menu bg-transparent border-0">
                    <a href="add_aircraft.php" class="dropdown-item">Add Aircraft</a>
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

<!-- Sidebar end -->
<div class="content">
    <?php 
include('include/0_adminnavbar.php');
?>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div
                    class="bg-warning rounded bg-opacity-25 rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-duotone fa-clipboard-list-check fa-3x text-dark"></i>
                    <div class="ms-3">
                        <p class="mb-2">Schedule</p>
                        <?php 
                        include 'conn/config.php';
                        $total = "SELECT * FROM schedule";
                        $total_query = mysqli_query($conn,$total);
                        

                        if($schedule_total = mysqli_num_rows($total_query)){
                            echo '<h6 class="mb-0">'.$schedule_total.' Scheduled</h6>';
                        }else{
                            echo '<h6 class="mb-0"> No Scheduled </h6>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div
                    class="bg-warning rounded bg-opacity-25 rounded d-flex align-items-center justify-content-between p-4">

                    <i class="fa-duotone fa-user-pilot fa-3x text-dark"></i>
                    <div class="ms-3">
                        <p class="mb-2">Student</p>
                        <h6 class="mb-0">100 Students</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div
                    class="bg-warning rounded bg-opacity-25 rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-duotone fa-plane fa-3x text-dark"></i>
                    <div class="ms-3">
                        <p class="mb-2">Aircraft</p>
                        <?php 
                        include 'conn/config.php';
                        $total = "SELECT * FROM aircraft";
                        $total_query = mysqli_query($conn,$total);
                        

                        if($aircraft_total = mysqli_num_rows($total_query)){
                            echo '<h6 class="mb-0">'.$aircraft_total.' Aircraft</h6>';
                        }else{
                            echo '<h6 class="mb-0"> No Aircraft </h6>';
                        }
                        ?>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div
                    class="bg-warning rounded bg-opacity-25 rounded d-flex align-items-center justify-content-between p-4">

                    <i class="fa-duotone fa-users fa-3x text-dark"></i>
                    <div class="ms-3">
                        <p class="mb-2">Users</p>
                        <?php 
                        include 'conn/config.php';
                        $total = "SELECT * FROM users";
                        $total_query = mysqli_query($conn,$total);
                        

                        if($user_total = mysqli_num_rows($total_query)){
                            echo '<h6 class="mb-0">'.$user_total.' Users</h6>';
                        }else{
                            echo '<h6 class="mb-0"> No Users </h6>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content top end -->

    <!-- weather start -->

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-warning rounded bg-opacity-25 text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-0">Weather Map</h3>
                    </div>
                    <div id="windy">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-warning rounded bg-opacity-25 text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-0">Weather Status</h4>
                    </div>

                    <!--Weather Status-->
                    <?php 

$apiKey = "e8063c2154424d8351103d6881a6d090";
$lat = "15.326093";
$lon = "119.968928";
$googleApiUrl = "https://api.openweathermap.org/data/2.5/weather?lat=" . $lat . "&lon=".$lon."&lang=en&units=metric&APPID=" .$apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>
                    <h1><?php echo $data->name; ?>, Zambales</h1>
                    <div id="clockdate">
                        <div class="d-flex justify-content-evenly clockdate-wrapper ">

                            <div id="clock"></div>
                            <div id="date"></div>
                        </div>
                    </div>

                    <center>

                        <div class="report-container mt-1">
                            <h4><?php echo ucwords($data->weather[0]->description); ?></h4>
                        </div>

                        <div class="weather-forecast">
                            <img class="weather-icon"
                                src="https://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"><br>
                            <h1>Temp: <?php echo floor($data->main->temp); ?>°C</h1>
                        </div>
                        <!-- <div class="time"> -->

                        <div class="d-flex justify-content-between time mt-3">
                            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
                            <div>Wind: <?php echo $data->wind->speed; ?>km/h</div>
                        </div>
                        <div class="d-flex justify-content-between time mt-3">
                            <div>Wind Degree: <?php echo $data->wind->deg; ?>°</div>
                            <div>Wind Gusts: <?php echo $data->wind->gust; ?>km/h</div>
                        </div>


                    </center>
                </div>
            </div>
        </div>
    </div>
    <!-- weather end -->
    <?php 
    include('include/0_adminfooter.php');
    ?>