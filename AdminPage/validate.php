<?php
 
 include 'connect.php';
   
$username = $_POST["username"];
$password = $_POST["password"];

if ($_SERVER["REQUEST_METHOD"]== "POST") {

    // SQL script for selecting by username
    $sql = "SELECT * FROM admin_profile";
    
    
    if($result = mysqli_query($conn, $sql)){
        while ($user = $result->fetch_assoc()) {
            if(($user['username'] == $username) && 
                ($user['password'] == $password)) {
                    echo "<script language='javascript'>";
                    echo "localStorage.setItem('login_status', 'Pass');";
                    echo "window.location.href='adminselect.html';";
                    echo "</script>";
            }
        }
        echo "<script language='javascript'>";
                echo "localStorage.setItem('login_status', 'Wrong');";
                echo "window.location.href='index.html';";
                echo "</script>";
                die();
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }

}
?>