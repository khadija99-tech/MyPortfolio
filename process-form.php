<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["Message"];

    $to = "khadijaelhabchi99@gmail.com";  
    $subject = "New Form Submission: $subject";
    $headers = "From: $email";

     // Just echo the data for testing
     echo "Name: $name<br>";
     echo "Email: $email<br>";
     echo "Subject: $subject<br>";
     echo "Message: $message<br>";

    mail($to, $subject, $message, $headers);

    
    header("Location: thank-you.html");
exit();

}
?>
