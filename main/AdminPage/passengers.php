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
    <title>NopeAir</title>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Passenger ID</th>
                    <th>Title</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Payment Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "connect.php";

                //Select database//
                $sql = "SELECT * FROM passenger";
                $query = mysqli_query($conn, $sql);
                 
                while ($row = $query->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['pass_id']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['tel']; ?></td>
                        <td>Success</td>
                        <td>
                            <form action="sendemail.php" method="post">
                                <input style='display: none;' type="text" name='email' value='<?php echo $row['email'];?>'>
                                <input style='display: none;' type="text" name='firstname' value='<?php echo $row['firstname'];?>'>
                                <button type='submit' class="btn btn-success">Send Email</button>
                                <a href="delete_pass.php?id=<?php echo $row['pass_id']; ?>" class="btn btn-danger">Delete</a>
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