<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<body>
    <div class="container">
        <h1>BOARDING</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Flight ID</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Date</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Flight Time</th>
                    <th>Airplane ID</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
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
            <form action="edit_board.php" method="post">
                <tr>
                    <td><?php echo $row['flight_id'];?></td>
                    <td><?php echo $row['from_place'];?></td>
                    <td><?php echo $row['to_place'];?></td>
                    <td><?php echo $row['flight_date'];?></td>
                    <td><?php echo $row['departure'];?></td>
                    <td><?php echo $row['arrival'];?></td>
                    <td><?php echo $row['flight_time'];?></td>
                    <td><?php echo $row['airplane_id'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td>Management</td>
                    <td>
                        <button name='flight_id' value='<?php echo $row['flight_id']?>' class="btn btn-warning">Edit</button>
                    </td>
                    <td>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </form>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</body>
</html>