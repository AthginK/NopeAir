<?php
    include("connect.php");
    $id = $_GET['id'];
    
    // SQL script for deleting an item
    $sql = "DELETE FROM passenger WHERE pass_id = $id";
    $sql1 = "DELETE FROM booking WHERE pass_id = $id";
    $sql2 = "DELETE FROM payment WHERE pass_id = $id";
    
    mysqli_query($conn,$sql);
    mysqli_query($conn,$sql1);
    mysqli_query($conn,$sql2);   
    header("location:passengers.php");
?>