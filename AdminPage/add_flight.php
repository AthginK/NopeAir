<!DOCTYPE html>
<html>
  
<head>
    <title>Insert to database</title>
</head>
  
<body>    
        <?php  

        include 'connect.php';    
          
        // Taking all values from the form data(input)

        $flight_id =  $_POST['flight_id'];
        $from_place =  $_POST['from_place'];
        $to_place = $_POST['to_place'];
        $date = $_POST['date'];
        $departure = $_POST['departure'];
        $arrival = $_POST['arrival'];
        $flight_time = $_POST['flight_time'];
        $airplane_id = $_POST['airplane_id'];
        $price = $_POST['price'];

        // SQL script for performing insert query execution
        $sql = "INSERT INTO flight (flight_id, from_place, to_place, flight_date, departure, arrival, flight_time, airplane_id, price)
        VALUES ('$flight_id', '$from_place', '$to_place', '$date', '$departure', '$arrival', '$flight_time', '$airplane_id', '$price')";

        if(mysqli_query($conn, $sql)) {
            header('Location: boarding.php');
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>

</body>

</html>