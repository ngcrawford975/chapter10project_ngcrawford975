<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // The form was submitted
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Sanitize the email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    // Check for empty fields
    if (empty($name) || empty($email) || empty($message)) {
        $statusMessage = "Please fill in all required fields.";
        $statusClass = "error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <h1>Building a Dynamic Form with PHP</h1>
    <p1>Nathan Crawford</p1>
    <p2>04/13/2026</p2>
</body>
</html>