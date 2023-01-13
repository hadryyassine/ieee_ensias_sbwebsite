<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["con_name"];
        $email = $_POST["con_email"];
        $subject = $_POST["con_subject"];
        $message = $_POST["con_message"];

        $to = "yassine_hadry@ieee.org";
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: ". $email . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $body = "From: $name <br> Email: $email <br> Subject: $subject <br> Message: $message";

        if (mail($to, $subject, $body, $headers)) {
            echo "success";
        } else {
            echo "error";
        }
    }
?>
