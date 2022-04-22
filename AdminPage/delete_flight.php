<?php
    include("connect.php");
    $id = $_GET['id'];
    
    // SQL script for deleting an item
    $sql = "DELETE FROM flight WHERE flight_id = '$id'";
    
    mysqli_query($conn,$sql);
    header("location:boarding.php");
?>