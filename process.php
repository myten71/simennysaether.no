

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['submit'])){
    $to = "simenwn93@gmail.com"; // Replace with your own email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = "New message from $name";

    // Additional headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

    // Message body
    $body = "<html><body>";
    $body .= "<h1>New Message from $name</h1>";
    $body .= "<p><strong>Email:</strong> $email</p>";
    $body .= "<p><strong>Message:</strong><br>$message</p>";
    $body .= "</body></html>";

    // Send the email
    if(mail($to, $subject, $body, $headers)) {
      echo "Thank you for your message!";
    } else {
      echo "There was an error sending your message. Please try again later.";
    }
}
?>