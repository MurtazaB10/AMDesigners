<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'noreply@A.M.Designers.com';
    $email_subject = "New Form Submission";

    $email_body = "Name: ".$name.
                "\r\n Email: ".$email.
                "\r\n Subject: ".$subject.
                "\r\n Message: ".$message;

    $to = "amdesigners52@gmail.com";
    $headers = "From: $email_from \r\n".
                "Reply-To: $email";
    
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>