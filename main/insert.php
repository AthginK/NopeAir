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

        $sel = "SELECT * from passenger";
        $query = $conn -> query($sel);

        // SQL script for performing insert query execution
        $sql = "INSERT INTO passenger (title, firstname, lastname, email, tel, date_of_birth)
        VALUES ('$title', '$firstname', '$lastname', '$email', '$tel', '$date_of_birth')";

        // Passenger Check
        if (mysqli_num_rows($query)==0) {
                if(mysqli_query($conn, $sql)) {
                        echo "Success $sql. ";
                } else{
                echo "ERROR: Hush! Sorry $sql. " 
                        . mysqli_error($conn);
                }
        } else {
                while ($pass = $query -> fetch_assoc()) {
                        if(($pass['title'] == $title) &&
                        ($pass['firstname'] == $firstname) &&
                        ($pass['lastname'] == $lastname) &&
                        ($pass['tel'] == $tel) &&
                        ($pass['email'] == $email) && 
                        ($pass['date_of_birth'] == $date_of_birth)) {
                        echo "Already be a Passenger";
                        } else {
                                if(mysqli_query($conn, $sql)) {
                                        echo "Success $sql. ";
                                } else{
                                echo "ERROR: Hush! Sorry $sql. " 
                                        . mysqli_error($conn);
                                }
                        }
                }

        }

        // Close connection
        mysqli_close($conn);
        ?>

        <!-- Sent Data -->
        <form action="insert_bill.php" id='myform' method="post">
            <div class="form-group">
                <input type="number" style="display: none;" class="form-control" name="title" value='<?php echo $title;?>'>
                <input type="text" style="display: none;" class="form-control" name="firstname" value='<?php echo $firstname;?>'>
                <input type="text" style="display: none;" class="form-control" name="lastname" value='<?php echo $lastname;?>'>
                <input type="text" style="display: none;" class="form-control" name="email" value='<?php echo $email;?>'>
                <input type="text" style="display: none;" class="form-control" name="tel" value='<?php echo $tel;?>'>
                <input type="date" style="display: none;" class="form-control" name="date_of_birth" value='<?php echo $date_of_birth;?>'>
                <input type="float" style="display: none;" class="form-control" name="bill" value='<?php echo $bill;?>'>
                <input type="text" style="display: none;" class="form-control" name="flight" value='<?php echo $flight;?>'>
                <input type="text" style="display: none;" class="form-control" name="trip" value='<?php echo $trip;?>'>
                <?php if ($trip == 'rt') { echo '
                <input type="text" style="display: none;" class="form-control" name="flight2"';}?><?php if ($trip == 'rt') { echo "value='$flight2'";}?>
            </div>
        </form>
</body>
        <script>
                window.addEventListener('load', () => {
                        document.getElementById('myform').submit()

                })
        </script>

</html>