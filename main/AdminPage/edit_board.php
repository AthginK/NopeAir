<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Update Flight</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin | Edit</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card mt-5">
                    <div class="card-header">
                        <h4>Update Flight</h4>
                    </div>
            <div class="card-body">
            <?php   
                $servername = "localhost"; 
                $username = "root"; 
                $password = "";   
                $database = "airline";
            
                // Create a connection 
                $conn = mysqli_connect($servername, 
                    $username, $password, $database);
                if($conn) {
                    //echo "success";
                } 
                else {
                    die("Error". mysqli_connect_error());
                }
                //Select database//
                $sel = "SELECT * FROM flight";
                $query = $conn->query($sel);
                while ($row = $query -> fetch_assoc())
                {
            ?>
        <?php
        

        if(isset($_POST['edit_btn']))
        {
            $flight_id = $_POST['edit_id'];

            $query = "SELECT * FROM flight WHERE flight_id='$flight_id' ";
            $query_run = mysqli_query($connection, $query);


        

        foreach($query_run as $row)
            {?>
                        <form action="code.php" method="POST">
                            <input type="hidden" name="edit_board" value="<?php echo $row['id'] ?>">
                            
                            <div class="form-group mb-3">
                                <label for="">From</label>
                                <input type="text" name="edit_form" value="<?php echo $row['from_place'] ?>" class="form-control" >
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="">To</label>
                                <input type="text" name="to_place" value="<?php echo $row['to_place'] ?>" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Date</label>
                                <input type="text" name="date" value="<?php echo $row['flight_date'] ?>" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Departure</label>
                                <input type="text" name="departure" value="<?php echo $row['departure'] ?>" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Arrival</label>
                                <input type="text" name="arrival" value="<?php echo $row['arrival'] ?>" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Flight Time</label>
                                <input type="text" name="flight_time" value="<?php echo $row['flight_time'] ?>" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Airplane ID</label>
                                <input type="text" name="airplane_id" value="<?php echo $row['airplane_id'] ?>" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Price</label>
                                <input type="text" name="price" value="<?php echo $row['price'] ?>" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="update_flight" class="btn btn-primary">Update Data</button>
                            </div>
                            </form>
                <?php 
                }
            } 
         }

        ?>

                        
                    </div>
                </div>
            </div>
        </div>
        
            
    </div>
    <script src="sweetalert.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>