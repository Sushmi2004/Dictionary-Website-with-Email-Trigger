<!DOCTYPE html>
<html>
<head>
    <style>
        /* Center the message vertically and horizontally */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ2uoROb5EEXWRXtowoNVvqKjsFY-GcdBt8ClFaoQ5y8G74Mk-sTz3W_4FPjWybeLmgwU&usqp=CAU'); /* Replace 'background-image.jpg' with your image file path */
            background-size: cover;
            background-repeat: no-repeat;
        }

        /* Style the message */
        .message {
            text-align: center;
            font-size: 24px;
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent background to make the text more readable */
            padding: 20px;
        }
    </style>
</head>
<body>
<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mail";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process subscription form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Insert email into subscribers table
    $sql = "INSERT INTO subscribers (email) VALUES ('$email')";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='message'>Subscribed successfully!</div>";
    } else {
        echo "<div class='message'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}

$conn->close();


   



?>
</body>
</html>
