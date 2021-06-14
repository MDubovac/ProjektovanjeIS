<?php 

$name = "";
$email = "";
$plan = "";
$error_array = [];

if(isset($_POST["plan_btn"])) {
    // Get name
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $name = strip_tags($name);
    $_SESSION["name"] = $name;

    // Get email
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $email = strip_tags($email);
    $_SESSION["email"] = $email;

    // Get email
    $plan = $_POST["plan"];
    $plan = strip_tags($plan);

    // Email validation
    if($stmt = $conn->prepare("SELECT * FROM mships WHERE mship_email = ?")) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            array_push($error_array, "There is already a membership for this month, for this email.");
        } else {
            // Insert into db
            if($stmt = $conn->prepare("INSERT INTO mships (mship_name, mship_email, mship_plan) VALUES (?, ?, ?)")) {
                $stmt->bind_param("sss", $name, $email, $plan);
                $stmt->execute();
                $stmt->close();

                $_SESSION["name"] = "";
                $_SESSION["email"] = "";

                $alert = '<div class="alert alert-primary" role="alert">Your request has been confirmed!</div>';
            }
        }
    } 
}