<?php 
    $page = "Login";
    include_once("../../inc/header.php");
    include_once("../../controllers/login-controller.php")
?>

<div class="py-5 container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <div class="form-group my-4">
            <label for="log_user">Username</label>
            <input type="text" id="log_user" name="log_user" class="form-control" required>
        </div>
        <div class="form-group my-4">
            <label for="log_pass">Password</label>
            <input type="password" id="log_pass" name="log_pass" class="form-control" required>
            <p class="text-danger">
                <?php 
                    if (in_array("User does not exist", $error_array)) {
                        echo "User does not exist";
                    }
                ?>
            </p>
        </div>
        <div class="py-2">
            <p>This page is meant for admin users only, if you came here by acciedent, please close this page.</p>
        </div>
        <div class="acc">
            <p><b>Don't have an account? Click here to <a href="./register.php">Register</a></b></p>
        </div>
        <button class="btn btn-primary" type="submit" name="log_btn" id="log_btn">Login</button>
    </form>
</div>


<?php 
    include_once("../../inc/footer.php");
?>