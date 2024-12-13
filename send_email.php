<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $number = htmlspecialchars($_POST['number']);
    $second_number = htmlspecialchars($_POST['second_number'] ?? '');
    $town = htmlspecialchars($_POST['town']);
    $quarter = htmlspecialchars($_POST['quarter']);
    $email = htmlspecialchars($_POST['email']);

    // Generate a six-digit verification code
    $verificationCode = mt_rand(100000, 999999);

    // Email subject and message
    $subject = "Your Purchase Details and Verification Code";
    $message = "
        Hello $name $surname,
        
        Thank you for your purchase. Here are the details you provided:
        - Name: $name
        - Surname: $surname
        - Number: $number
        - Second Number: $second_number
        - Town: $town
        - Quarter: $quarter
        - Email: $email

        Your verification code is: $verificationCode
        
        Please keep this code secure and use it for verification purposes.
        
        Regards,
        Your Company Team
    ";

    // Set email headers
    $headers = "From: no-reply@yourcompany.com\r\n";
    $headers .= "Reply-To: support@yourcompany.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($email, $subject, $message, $headers)) {
        echo "Email sent successfully! Check your inbox.";
    } else {
        echo "Failed to send the email. Please try again.";
    }

    // Optional: Save the data or verification code in the database for further validation
} else {
    echo "Invalid request method.";
}
?>