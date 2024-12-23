<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname = $_POST['fullname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $interest = $_POST['interest'];
    $skills = $_POST['skills'];
    $experience = $_POST['experience'];
    $dob = $_POST['dob'];
    $qualification = $_POST['qualification'];

    // Recipient email
    $to = "your-email@example.com"; // Change this to your email
    $subject = "New Registration Form Submission";

    // Construct the email body
    $message = "
    Full Name: $fullname\n
    Mobile Number: $mobile\n
    Email: $email\n
    Interest: $interest\n
    Skills: $skills\n
    Experience: $experience\n
    Date of Birth: $dob\n
    Qualifications: $qualification
    ";

    // Headers
    $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Form submitted successfully.";
    } else {
        echo "Error in form submission.";
    }
}
?>
