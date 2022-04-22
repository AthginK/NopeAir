<?php
session_start();
include 'connect.php';

if(isset($_POST['update_flight']))
{
    $flight_id = $_POST['flight_id'];
    $from_place = $_POST['from_place'];
    $to_place = $_POST['to_place'];
    $flight_date = $_POST['date'];
    $departure = $_POST['departure'];
    $arrival = $_POST['arrival'];
    $flight_time = $_POST['flight_time'];
    $airplane_id = $_POST['airplane_id'];
    $price = $_POST['price'];


    $sql = "UPDATE flight SET from_place='$from_place', to_place='$to_place', flight_date='$flight_date', departure='$departure', 
            arrival='$arrival', flight_time='$flight_time', airplane_id='$airplane_id', price='$price' WHERE flight_id='$flight_id' ";

    if(mysqli_query($conn, $sql)) {
        echo "Success $sql. ";
        header('Location: boarding.php');
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
}
}



