<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["emailaddress"];
    $message = $_POST["projectsummary"];

    $to = "kierandoolan3@gmail.com"; // Replace with your email address
    $subject = "New Project Request";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Redirect to a thank you page or display a thank you message
    header("Location: thank-you.html");
    exit;
}
?>
