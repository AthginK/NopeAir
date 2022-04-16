<?php
 
 include 'connect.php';
   
$username = $_POST["username"];
$password = $_POST["password"];

if ($_SERVER["REQUEST_METHOD"]== "POST") {

    // SQL script for selecting by username
    $sql = "SELECT * FROM admin WHERE username='$username'"; 
    
    if($result = mysqli_query($conn, $sql)){       
        foreach($result as $user) {       
            
            if(($user['username'] == $username) && 
                ($user['password'] == $password)) {
                    header("Location: adminselect.html");
            }
            else {
                echo "<script language='javascript'>";
                echo "alert('WRONG INFORMATION ')";
                echo "</script>";
                die();
            }
        } 
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }

}
?>