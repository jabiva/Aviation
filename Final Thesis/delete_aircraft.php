<?php 
include 'conn/config.php';

$id = $_GET['id'];
$sql = "DELETE FROM `aircraft` WHERE id = $id";
$result = mysqli_query($conn,$sql);
if ($result){
header('location:aircraft.php?msg=Aircraft Information Deleted Successully');
}else{
    echo "Failed: " . mysqli_error($conn);
}
?>