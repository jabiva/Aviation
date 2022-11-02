<?php 
session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:index.php');
}

$apiKey = "e8063c2154424d8351103d6881a6d090";
$lat = "15.326093";
$lon = "119.968928";

    $url = "https://api.openweathermap.org/data/2.5/weather?lat=" . $lat . "&lon=".$lon."&lang=en&units=metric&APPID=" .$apiKey;


    $raw = file_get_contents($url);
    $json = json_decode($raw);

    $name = $json->name;
    
    $weather = $json->weather[0]->main;
    $desc = $json->weather[0]->description;
    // Temp
    $temp = $json->main->temp;
    // $feel_like = $json->main->feels_like;
    // Vent
    $speed = $json->wind->speed;
    $deg = $json->wind->deg;
    $gust = $json->wind->gust;
    
    //Humidity
    $humi =$json->main->humidity;
    
// require 'connection/config.php';
 
// session_start();

// if(!isset($_SESSION['admin_name'])){
//    header('location:index.php');
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Icon Font -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Bootstrap 5 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">

    <!-- API -->
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
    <script src="https://api.windy.com/assets/map-forecast/libBoot.js"></script>
</head>

<body class="bg-light">
    <div class="container-xxl position-relative bg-light d-flex p-0">
        <!-- Loading Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-warning" style="width: 10rem; height: 10rem;" role="status">

            </div>

        </div>
        <!-- Loading End -->