<?php
// Data
$log_user = "";
$log_pass = "";
$error_array = [];

// If login button is clicked
if(isset($_POST["log_btn"])){
    // Get form data
    $log_user = $_POST["log_user"];
    $_SESSION["log_user"] = $log_user;

    $log_pass = $_POST["log_pass"];

    // Check if it works 
    $stmt = $conn->prepare("SELECT user_password FROM users WHERE user_username = ?");
    $stmt->bind_param("s", $log_user);
    $stmt->execute();
    $result = $stmt->get_result();

  
    while($row = $result->fetch_assoc()){
        $hash = $row["user_password"];
    } 

    if(password_verify($log_pass, $hash)) {
        // Clear the session
        $_SESSION["log_user"] = "";

        // Set auth user the session
        $_SESSION["auth_user"] = $log_user;

        // Redirect to index
        header("Location: ./admin.php");
    } else {
        array_push($error_array, "User does not exist");
    } 
}