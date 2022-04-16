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
        $bill = $_POST['bill'];
        $flight = $_POST['flight'];
        $trip = $_POST['trip'];
        if ($trip == 'rt') {
                $flight2 = $_POST['flight2'];
        }

        $sel = "SELECT * from passenger WHERE firstname = '$firstname' AND lastname = '$lastname'";
        $query = $conn -> query($sel);

        while ($row = $query -> fetch_assoc()) {
                $pass = $row['pass_id'];
        }

        $sql1 = "INSERT INTO booking (pass_id, flight_id)
        VALUES ('$pass', '$flight')";
        $sql2 = "INSERT INTO payment (bill, pass_id)
        VALUES ('$bill', '$pass')";

        if ($trip == 'rt') {
                $sql3 = "INSERT INTO booking (pass_id, flight_id)
                VALUES ('$pass', '$flight2')";
        }

        if(mysqli_query($conn, $sql1)){
                if(mysqli_query($conn, $sql2)){
                        if ($trip == 'rt') {
                                if(mysqli_query($conn, $sql3)){
                                        header('Location: success.html');
                                } else {
                                        echo "ERROR: Hush! Sorry $sql. " 
                                                . mysqli_error($conn);
                                }
                        } else {
                                header('Location: success.html');
                        }
                }
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>

</body>
  
</html>