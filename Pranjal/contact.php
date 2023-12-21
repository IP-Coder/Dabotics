<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $subject = $_POST["subject"];

    // Validate the data
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && $name != "" && $message != "" && $subject != "") {
        // Build the email content
        $to = "shrivastavaps80@gmail.com";
        $from = "contact@codetroops.com";
        $subject = "Contact Form Submission - $subject";

        $emailContent = "Name: $name\n";
        $emailContent .= "Email: $email\n";
        $emailContent .= "Subject: $subject\n";
        $emailContent .= "Message:\n$message\n";

        // Set additional headers
        $headers = "From: $from" . "\r\n";

        // Send the email
        if (mail($to, $subject, $emailContent, $headers)) {
            // Email sent successfully

            // Send a reply email to the person who submitted the form
            $replySubject = "Thank you for contacting Codetroops!";
            $replyMessage = "Dear $name,\n\nThank you for contacting us! We have received your message and will get back to you shortly.\n\nBest regards,\nThe Codetroops Team";

            $replyHeaders = "From: $from" . "\r\n";

            mail($email, $replySubject, $replyMessage, $replyHeaders);

            echo "Thank you for contacting us, $name! We have received your message and will get back to you soon.";
            header("Location: https://codetroops.in/");
        } else {
            // Error sending email
            echo "Oops! An error occurred while sending your message. Please try again later.";
        }
    } else {
        // Invalid form data
        echo "There are errors in the information you provided. Please make sure all fields are filled correctly.";
    }
}
?>
