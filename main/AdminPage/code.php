<?php
session_start();
$con = mysqli_connect("localhost","root","","phptutorials");

if(isset($_POST['update_flight']))
{
    $to_place = $_POST['to_place'];
    $date = $_POST['date'];
    $departure = $_POST['departure'];
    $arrival = $_POST['arrival'];
    $flight_time = $_POST['flight_time'];
    $airplane_id = $_POST['airplane_id'];
    $price = $_POST['price'];


    $query = "UPDATE flight SET  to_place='$to_place', flight_date='$flight_date', departure='$departure', 
            arrival='$arrival', flight_time='$flight_time', airplane_id='$airplane_id', price='$price' WHERE flight_id='$flight_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        $_SESSION['status_code'] = "success";
        header("Location: boarding.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        $_SESSION['status_code'] = "FAIL";
        header("Location: boarding.php");
    }
}



