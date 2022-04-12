<!DOCTYPE html>
<html>
  
<head>
    <title>Insert to database</title>
</head>
  
<body>    
        <?php  

        include 'connect.php';    
          
        // Taking all 8 values from the form data(input)

        $username = $_POST['username'];
        $password = $_POST['password'];
        // + date on sign up
        $firstname =  $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender =  $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];
                
        // SQL script for performing insert query execution
  

        if(mysqli_query($conn, $sql)){
            echo "<h3>The user data is stored in a database successfully.</h3>";   
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>

</body>
  
</html>