<!DOCTYPE html>
<html>
  
<head>
    <title>Insert to database</title>
</head>
  
<body>    
        <?php  

        include 'connect.php';    
          
        // Taking all 8 values from the form data(input)

        $title =  $_POST['title'];
        $firstname =  $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $date_of_birth = $_POST['date_of_birth'];
                
        // SQL script for performing insert query execution
        $sql = "INSERT INTO passenger (title, firstname, lastname, email, tel, date_of_birth)
        VALUES ('$title', '$firstname', '$lastname', '$email', '$tel', '$date_of_birth')";


        if(mysqli_query($conn, $sql)){
                header('Location: http://localhost/main/NopeAir/main/payment.html');
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>

</body>
  
</html>