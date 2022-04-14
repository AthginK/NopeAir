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
                            <a href="" class="btn btn-success" id='<?php echo $row['email']; ?>' onclick="sendEmail(this.id); reset(); return false;">Send Email</a>
                            <a href="delete_pass.php?id=<?php echo $row['pass_id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Sending Email -->

    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <script>
        function sendEmail(id) {
            Email.send({
                Host : "smtp.elasticemail.com",
                Username : "nopeair123@gmail.com",
                Password : "A02D206E65BE6D1F8E0A7B9448DD2ED71880",
                To : id,
                From : 'nopeair123@gmail.com',
                Subject : "This is the subject",
                Body : "And this is the body"
            }).then(
            message => alert(message)
            );
        }
    </script>
</body>

</html>