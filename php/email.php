<?php
        $to = 'm_botelho8@hotmail.com';
        $subject = 'Github.io reply';
        $message = "New message from " . $_POST['name'] . "\r\n";
        $message = $_POST['comments'];
        $headers = "From: " . $_POST['email'] "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        mail($to, $subject, $message, $headers);
?>
