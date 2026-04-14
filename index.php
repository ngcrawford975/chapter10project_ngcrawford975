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

    <form method="POST" action="confirm.php">
    
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <input type="text" id="message" name="message" required>

        <input type="submit" value="Submit">

    </form>
    
</body>
</html>