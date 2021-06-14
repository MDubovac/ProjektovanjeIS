<?php 

$fname = "";
$lname = "";
$email = "";
$message = "";

if(isset($_POST["contact_btn"])) {
    // Get fname 
    $fname = filter_var($_POST["fname"], FILTER_SANITIZE_STRING);
    $fname = strip_tags($fname);
    $_SESSION["fname"] = $fname;

    // Get lname 
    $lname = filter_var($_POST["lname"], FILTER_SANITIZE_STRING);
    $lname = strip_tags($lname);
    $_SESSION["lname"] = $lname;

    // Get email 
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $email = strip_tags($email);
    $_SESSION["email"] = $email;

    // Get email 
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    $message = strip_tags($message);
    $_SESSION["message"] = $message;

    // Get full name
    $fullName = $fname . " " . $lname;

    // Insert data into table
    if($stmt = $conn->prepare("INSERT INTO messages ( message_name, message_email, message_text) VALUES (?, ?, ?)")) {
        $stmt->bind_param("sss", $fullName, $email, $message);
        $stmt->execute();
        $stmt->close();

        $_SESSION["fname"] = "";
        $_SESSION["lname"] = "";
        $_SESSION["email"] = "";
        $_SESSION["message"] = "";

        $alert = '<div class="alert alert-primary" role="alert">Your message has been sent!</div>';
    }
}