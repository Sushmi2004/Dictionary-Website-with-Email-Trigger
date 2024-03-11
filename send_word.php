<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer Autoloader
require 'phpmiller/src/Exception.php';
require 'phpmiller/src/PHPMailer.php';
require 'phpmiller/src/SMTP.php';

function getSubscribers() {
    // Replace with your database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mail";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $subscribers = [];
    $sql = "SELECT email FROM subscribers";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $subscribers[] = $row["email"];
        }
    }

    $conn->close();
    return $subscribers;
}

function getWordOfTheDay() {
    $apiKey = "1380d58b8b5c33325130c0e8f340be6bc6fba6f7bb65bfc6f";
    $apiUrl = "https://api.wordnik.com/v4/words.json/wordOfTheDay?api_key="
. $apiKey;

    $response = file_get_contents($apiUrl);
    $data = json_decode($response, true);

    return $data;
}

function sendWordOfTheDayEmail($wordData, $recipientEmail) {
    $to = $recipientEmail;
    $subject = 'Word of the Day';

    $word = $wordData['word'];
    $definition = $wordData['definitions'][0]['text'];
    $partOfSpeech = $wordData['definitions'][0]['partOfSpeech'];
    $example = $wordData['examples'][0]['text'];

    $emailContent = "
    <!DOCTYPE html>
    <html>
    <head>
    </head>
    <body style='margin: 0; padding: 0; font-family: Arial,
sans-serif; background-color: #f4f4f4;'>

        <table width='100%' border='0' cellpadding='0' cellspacing='0'>
            <tr>
                <td align='center' bgcolor='#4cb96b' style='padding:
20px; border-top-left-radius: 20px; border-top-right-radius: 20px;'>
                    <h1 style='margin: 0; color: white;'>Word of the Day</h1>
                </td>
            </tr>
            <tr>
                <td align='center' bgcolor='#ffffff' style='padding:
20px; border-radius: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
                    <h2 style='color: #333333; font-size: 24px;
margin: 0; margin-bottom: 10px;'>Hello Learners!</h2>
                    <p style='color: #555555; font-size: 18px;
margin-top: 0;'>Expand your vocabulary with today's word</p>
                    <div style='background-color: #ffdb58; padding:
10px; border-radius: 10px;'>
                        <h3 style='color: #4cb96b; margin: 0;
font-size: 20px;'>Word: $word</h3>
                    </div>
                    <p class='definition' style='color: #555555;
font-size: 18px; margin-top: 10px;'>
                        <strong style='color:
#4cb96b;'>Definition:</strong> $definition
                    </p>
                    <p class='part-of-speech' style='color: #555555;
font-size: 18px; margin-top: 0;'>
                        <strong style='color: #4cb96b;'>Part of
Speech:</strong> $partOfSpeech
                    </p>
                    <p class='example' style='color: #555555;
font-size: 18px; margin-top: 0;'>
                    <strong style='color: #4cb96b;'>Example:</strong> $example
                </p>
                </td>
            </tr>
            <tr>
                <td align='center' bgcolor='#4cb96b' style='padding:
20px; border-bottom-left-radius: 20px; border-bottom-right-radius:
20px;'>
                    <p style='margin: 0; color: white;'>Thank you for
learning with us!</p>
                </td>
            </tr>
        </table>

    </body>
    </html>
    ";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();

        // Specify main and backup SMTP servers
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        // SMTP username and password
        $mail->Username = 'troubleshooters44@gmail.com';
        $mail->Password = 'cgfarrpirhywbdpl';

        // Enable TLS encryption
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender and recipient
        $mail->setFrom('troubleshooters44@gmail.com');
        $mail->addAddress($to);

        // Set email subject and body
        $mail->Subject = $subject;
        $mail->isHTML(true);
        $mail->Body = $emailContent;
        $mail->send();
        echo "Email sent successfully to $to!<br>";
    } catch (Exception $e) {
        echo 'Email sending failed: ' . $mail->ErrorInfo;
    }
}

// Get Word of the Day data
$wordData = getWordOfTheDay();
$subscribers = getSubscribers();

foreach ($subscribers as $subscriber) {
    sendWordOfTheDayEmail($wordData, $subscriber);
}

?>