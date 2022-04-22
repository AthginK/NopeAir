<?php
    use PHPMailer\PHPMailer\PHPMailer;

    include("connect.php");
    $email = $_POST['email'];
    $name = $_POST['firstname'];

    if(isset( $_POST['email']) && $_POST['firstname']){
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        // SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "nopeair123@gmail.com"; // enter your email address
        $mail->Password = "Xn-AnMd3mwMMz7t"; // enter your password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, 'NopeAir');
        $mail->addAddress($email); // Send to mail
        $mail->Subject ="Your Plane Ticket";
        $mail->Body = "Thank You for trust us to serve you.";

        if($mail->send()) {
            $status = "success";
            $response = "Email is sent";
            header("location:passengers.php");
        } else {
            $status = "failed";
            $response = "Something is wrong" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
        header("location:passengers.php");
    }
?>