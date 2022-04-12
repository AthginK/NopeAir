<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Update Flight</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Update Flight</h4>
                    </div>
                    <div class="card-body">

                        <form action="code.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Flight ID</label>
                                <input type="text" name="stud_id" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">From</label>
                                <input type="text" name="from_place" class="form-control" >
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="">To</label>
                                <input type="text" name="to_place" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Date</label>
                                <input type="text" name="date" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Departure</label>
                                <input type="text" name="departure" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Arrival</label>
                                <input type="text" name="arrival" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Flight Time</label>
                                <input type="text" name="flight_time" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Airplane ID</label>
                                <input type="text" name="airplane_id" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Price</label>
                                <input type="text" name="price" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="update_stud_data" class="btn btn-primary">Update Data</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>