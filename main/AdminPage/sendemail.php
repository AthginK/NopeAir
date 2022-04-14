<?php
    use PHPMailer\PHPMailer\PHPMailer;

    include("connect.php");
    $email = $_GET['email'];
    $name = $_GET['firstname'];

    if(isset( $_GET['email']) && $_GET['firstname']){
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
        $mail->setFrom($email, $name);
        $mail->addAddress($email); // Send to mail
        $mail->Subject ="This is Subject";
        $mail->Body = "This is Body";

        if($mail->send()) {
            $status = "success";
            $response = "Email is sent";
        } else {
            $status = "failed";
            $response = "Something is wrong" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>