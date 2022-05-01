<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link href="style.css" rel="stylesheet">

    <!-- Java script -->
    <script src="scrip.js"></script>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Admin | Passenger</title>     
</head>

<body>
    <div class="container">
    <?php
        include "connect.php";
        $pass_id = $_POST['id'];
        $title = $_POST['title'];
        $name = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        echo '<h2>Name: ', $title, ' ', $name, ' ', $lastname, '<br>';
        echo 'Email: ', $email, '&nbsp;&nbsp;&nbsp;&nbsp;Tel: ', $tel, '</h2>';
    ?>
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
                    <th>Payment Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Select database//
                $sql = "SELECT * FROM flight INNER JOIN booking ON flight.flight_id=booking.flight_id WHERE pass_id = $pass_id;";
                $query = mysqli_query($conn, $sql);
                 
                while ($row = $query->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['flight_id']; ?></td>
                        <td><?php echo $row['from_place']; ?></td>
                        <td><?php echo $row['to_place']; ?></td>
                        <td><?php echo $row['flight_date']; ?></td>
                        <td><?php echo $row['departure']; ?></td>
                        <td><?php echo $row['arrival']; ?></td>
                        <td><?php echo $row['flight_time']; ?></td>
                        <td><?php echo $row['airplane_id']; ?></td>
                        <td>Success</td>
                        <td>
                            <form action="sendemail.php" method="post">
                                <input style='display: none;' type="text" name='from' value='<?php echo $row['from_place'];?>'>
                                <input style='display: none;' type="text" name='to' value='<?php echo $row['to_place'];?>'>
                                <input style='display: none;' type="text" name='date' value='<?php echo $row['flight_date'];?>'>
                                <input style='display: none;' type="text" name='departure' value='<?php echo $row['departure'];?>'>
                                <input style='display: none;' type="text" name='arrival' value='<?php echo $row['arrival'];?>'>
                                <input style='display: none;' type="text" name='time' value='<?php echo $row['flight_time'];?>'>
                                <input style='display: none;' type="text" name='airplane' value='<?php echo $row['airplane_id'];?>'>
                                <input style='display: none;' type="text" name='title' value='<?php echo $title;?>'>
                                <input style='display: none;' type="text" name='firstname' value='<?php echo $name;?>'>
                                <input style='display: none;' type="text" name='lastname' value='<?php echo $lastname;?>'>
                                <input style='display: none;' type="text" name='id' value='<?php echo $pass_id;?>'>
                                <input style='display: none;' type="text" name='email' value='<?php echo $email;?>'>
                                <input style='display: none;' type="text" name='tel' value='<?php echo $tel;?>'>
                                <button type='submit' class="btn btn-success">Send Email</button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>