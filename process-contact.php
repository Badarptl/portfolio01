<?php
require_once 'includes/config.php';
require_once 'includes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    
    // Validate inputs
    $errors = [];
    
    if (empty($name)) {
        $errors[] = 'Name is required';
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Valid email is required';
    }
    
    if (empty($subject)) {
        $errors[] = 'Subject is required';
    }
    
    if (empty($message)) {
        $errors[] = 'Message is required';
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        $db = new Database();
        $conn = $db->getConnection();
        
        // Insert into database
        $stmt = $conn->prepare("INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);
        $dbSuccess = $stmt->execute();
        $stmt->close();
        
        // Send email
        $to = SITE_EMAIL;
        $emailSubject = "New Contact Form Submission: $subject";
        $emailBody = "You have received a new message from your website contact form.\n\n";
        $emailBody .= "Name: $name\n";
        $emailBody .= "Email: $email\n";
        $emailBody .= "Subject: $subject\n";
        $emailBody .= "Message:\n$message\n";
        
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        
        $mailSuccess = mail($to, $emailSubject, $emailBody, $headers);
        
        // Redirect with appropriate status
        if ($dbSuccess && $mailSuccess) {
            header("Location: contact.php?success=1");
        } else {
            header("Location: contact.php?error=1");
        }
        exit();
    } else {
        // If there are errors, redirect back with error messages
        $errorString = implode(',', $errors);
        header("Location: contact.php?error=" . urlencode($errorString));
        exit();
    }
} else {
    // If not a POST request, redirect to contact page
    header("Location: contact.php");
    exit();
}
?>