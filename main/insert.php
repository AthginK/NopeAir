<!DOCTYPE html>
<html>
  
<head>
    <title>Insert to database</title>
</head>
  
<body>    
        <?php  

        include 'connect.php';    
          
        // Taking all values from the form data(input)

        $title =  $_POST['title'];
        $firstname =  $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $date_of_birth = $_POST['date_of_birth'];
        $bill = $_POST['bill']
        $flight = $_POST['flight']

                
        // SQL script for performing insert query execution
        $sql = "INSERT INTO passenger (title, firstname, lastname, email, tel, date_of_birth)
        VALUES ('$title', '$firstname', '$lastname', '$email', '$tel', '$date_of_birth')";

        $sel = "SELECT * from flight WHERE flight_id = '$flight'";
        $query = $conn -> query($sel);

        while ($row = $query -> fetch_assoc()) {
                $from = $row['from_place'];
                $to =  $row['to_place'];
                $date =  $row['flight_date'];
        }

        if ($trip == 'rt') {
                $flight2 = $_POST['flight2'];

                $sel = "SELECT * from flight WHERE flight_id = '$flight2'";
                $query = $conn -> query($sel);

        while ($row = $query -> fetch_assoc()) {
                $return =  $row['flight_date'];
        }
}

        if(mysqli_query($conn, $sql)){
                header('Location: http://localhost/main/NopeAir/main/success.html');
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>

</body>
  
</html>