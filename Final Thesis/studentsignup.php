<?php
require 'conn/config.php';

if(isset($_POST["submit"])){
    $fname =$_POST["fname"];
    $lname =$_POST["lname"];
    $email =$_POST["email"];
    $pass =$_POST["password"];
    $cpass =$_POST["cpassword"];
    $number =$_POST["number"];
    $usertype =$_POST["usertype"];

    $double = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if(mysqli_num_rows($double) >0 ){
        echo "<script>alert('This email already exist!');</script>";
    }else{
        if($pass== $cpass){
            $result = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `contact`, `usertype`) VALUES ('$fname','$lname','$email','$pass','$number','$usertype')";

            mysqli_query($conn,$result);
            echo "<script>alert('Register Successfully!');</script>";
            header('location:index.php');
        }else{
            echo "<script>alert('Password does not match');</script>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Student Registration</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
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


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="mb-3">
                            <a href="index.php" class="">
                                <img class="img-fluid" src="img/logo.png" alt="logo" width="400px">
                            </a>
                        </div>
                        <div class="text-center mb-4">
                            <h3>SIGN UP</h3>
                        </div>
                        <form action="" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" name="fname" class="form-control" id="fname" placeholder="fname"
                                    required>
                                <label for="floatingText">First name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="lname" class="form-control" id="lname" placeholder="lname"
                                    required>
                                <label for="floatingText">Last name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="name@example.com" required>
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="password" required>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="cpassword" class="form-control" id="cpassword"
                                    placeholder="password" required>
                                <label for="floatingPassword">Confirm password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" name="number" class="form-control" id="tel" placeholder="number"
                                    required>
                                <label for="tel">Contact Number</label>
                            </div>


                            <div class="inputBox">
                                <select name="usertype" id="usertype" class="form-select mb-3" required>
                                    <option value="user">Student</option>
                                    <option disabled value="admin">Admin (Please contact administrator!)</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>

                        </form>
                        <p class="text-center mb-0">Already have an Account? <a href="index.php">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>