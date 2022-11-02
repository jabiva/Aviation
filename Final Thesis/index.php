<?php 
require 'conn/config.php';

session_start();

if (isset($_POST['submit']))
{
//   $email = mysqli_real_escape_string($conn,$_POST['email']);
//   $password = md5($_POST['password']);
    $email = $_POST["email"];
    $password = $_POST["password"];
  $select = "SELECT * FROM users WHERE email = '$email' && password = '$password'";

  $result = mysqli_query ($conn, $select);
if (mysqli_num_rows($result) > 0)
{
  $row = mysqli_fetch_array($result);
  if ($row['usertype']=='admin')
  {
    $_SESSION['admin_name'] = $row['firstname'];
    header('location:admin.php');

  }elseif($row['usertype']=='user')
  {
    // $_SESSION['user_name'] = $row['firstname'];
    header('location:1_user.php');
  }
}else{
    echo "<script>alert('Wrong email or password');</script>";
//   $error[] = 'Incorrect email or password!';
}
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>All Asia Aviation Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-default/default.css" rel="stylesheet">
</head>

<body>


    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex mb-3">
                            <a href="index.php" class="">
                                <img class="img-fluid" src="img/logo.png" alt="logo" width="400px">
                            </a>
                        </div>
                        <div class="text-center mb-4">
                            <h3>SIGN IN</h3>
                        </div>

                        <form action="" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" name="email" class="form-control" id="email"
                                    placeholder="name@example.com" required>
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                        </form>
                        <p class="text-center mb-0">Don't have an Account? <a href="choose.php">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>