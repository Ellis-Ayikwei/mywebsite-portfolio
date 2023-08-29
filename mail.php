<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];
        
            $to = "ellisarmahayikwei@gmail.com"; // Replace with your email address
		
            $headers = "From: $email\r\n";
            
            // $mailBody = "Name: $name\n";
            // $mailBody .= "Email: $email\n";
            // $mailBody .= "Subject: $subject\n";
            // $mailBody .= "Message:\n$message\n";
            
            if (mail($to, $subject, $message, $headers)) {
                echo "Message sent successfully.";
            } else {
                 echo "Email sending failed. Error message: ";
  
            }
        }
        ?>