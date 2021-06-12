<?php 

// Data 
$user_name = "";
$user_username = "";
$user_email = "";
$user_password = "";
$user_password2 = "";
$error_array = [];

if(isset($_POST["reg_btn"])) {
    // User name
    $user_name = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
    $user_name = strip_tags($user_name);
    $_SESSION["user_name"] = $user_name;

    // User username
    $user_username = filter_var($_POST["user_username"], FILTER_SANITIZE_STRING);
    $user_username = strip_tags($user_username);
    $_SESSION["user_username"] = $user_username;

    // User email
    $user_email = filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
    $user_email = strip_tags($user_email);
    $_SESSION["user_email"] = $user_email;
    
    // User pass
    $user_password = filter_var($_POST["user_password"], FILTER_SANITIZE_STRING);
    $user_password = strip_tags($user_password);
    $user_password = str_replace(" ", "", $user_password);

    // Repeat pass
    $user_password2 = filter_var($_POST["user_password2"], FILTER_SANITIZE_STRING);
    $user_password2 = strip_tags($user_password2);
    $user_password2 = str_replace(" ", "", $user_password2);

     // Username check    
    if ($stmt = $conn->prepare('SELECT * FROM users WHERE user_username = ?')) {
        $stmt->bind_param('s', $user_username);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            array_push($error_array, "Username already in use, please choose another");
        }
        $stmt->close();
    }

    // Email Check
    if($stmt = $conn->prepare("SELECT * FROM users WHERE user_email = ?")){
        $stmt->bind_param("s", $user_email);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows > 0){
            array_push($error_array, "E-mail Address already in use, please choose another");
        }
        $stmt->close();
    }

    // Password strenght Check
    if (strlen($user_password) < 8 || strlen($user_password) > 16) {
       array_push($error_array, "Password should be min 8 characters and max 16 characters");
    }
    if (!preg_match("/\d/", $user_password)) {
       array_push($error_array, "Password should contain at least one digit");
    }
    if (!preg_match("/[A-Z]/", $user_password)) {
       array_push($error_array, "Password should contain at least one Capital Letter");
    }
    if (!preg_match("/[a-z]/", $user_password)) {
       array_push($error_array, "Password should contain at least one small Letter");
    }
    if (!preg_match("/\W/", $user_password)) {
       array_push($error_array, "Password should contain at least one special character");
    }
    if (preg_match("/\s/", $user_password)) {
       array_push($error_array, "Password should not contain any white space");
    }
    
    // Check if the passwords match
    if($user_password !== $user_password2){
        array_push($error_array, "Passwords do not match");
    }

    // Encrypt the password
    $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

    // If there are no errors, write user to database
    if(empty($error_array)){
        $stmt = $conn->prepare("INSERT INTO users (user_name, user_username, user_email, user_password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $user_name, $user_username, $user_email, $hashed_password);
        $stmt->execute();
        $stmt->close();

        // Clear the session
        $_SESSION["user_name"] = "";
        $_SESSION["user_username"] = "";
        $_SESSION["user_email"] = "";   

        $_SESSION["auth_user"] = $user_username;

        // Send to index.php
        header("Location: ./admin.php");
    }

}