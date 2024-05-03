<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Email information
    $to = "1826124@students.wits.ac.za"; // Your email address
    $subject = "New Signup";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";

    // Send email
    mail($to, $subject, $message);

    // Redirect back to the form page after submission
    header("Location: signup_form.html");
    exit();
}
?>
