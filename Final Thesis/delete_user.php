<?php 
include 'conn/config.php';

$id = $_GET['id'];
$sql = "DELETE FROM `users` WHERE id = $id";
$result = mysqli_query($conn,$sql);
if ($result){
header('location:user.php?msg=User Information Deleted Successully');
}else{
    echo "Failed: " . mysqli_error($conn);
}
?>