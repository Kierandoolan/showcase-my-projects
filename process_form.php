
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "Kierandoolan3@gmail.com";
    $subject = "New CV Contact Form Submission";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Redirect to a thank you page or display a thank you message
    header("Location: thank-you.html");
    exit;
}
?>

