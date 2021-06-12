<?php 
    $page = "Register";
    include_once("../../inc/header.php");
    require_once("../../controllers/register-controller.php");
?>

<div class="py-5 container">
    <h2>Register</h2>
    <form action="register.php" method="POST">
        <div class="form-group my-4">
            <label for="user_name">Name</label>
            <input type="text" id="user_name" name="user_name" class="form-control" required value="<?php echo isset($_SESSION["user_name"]) ? $_SESSION["user_name"] : "" ?>">            
        </div>
        <div class="form-group my-4">
            <label for="user_username">Username</label>
            <input type="text" id="user_username" name="user_username" class="form-control" required value="<?php echo isset($_SESSION["user_username"]) ? $_SESSION["user_username"] : "" ?>">
            <p class="text-danger">
                <?php 
                    if (in_array("Username already in use, please choose another", $error_array)){
                        echo "Username already in use, please choose another";        
                    } 
                ?>
            </p>
        </div>
        <div class="form-group my-4">
            <label for="user_email">Email Address</label>
            <input type="email" id="user_email" name="user_email" class="form-control" required value="<?php echo isset($_SESSION["user_email"]) ? $_SESSION["user_email"] : "" ?>">
            <p class="text-danger">
                <?php 
                    if (in_array("E-mail Address already in use, please choose another", $error_array)){
                        echo "E-mail Address already in use, please choose another";        
                    } 
                ?>
            </p>
        </div>
        <div class="form-group my-4">
            <label for="user_password">Password</label>
            <input type="password" id="user_password" name="user_password" class="form-control" required>
            <p class="text-danger">
                <?php 
                    if (in_array("Password should be min 8 characters and max 16 characters", $error_array)){
                        echo "Password should be min 8 characters and max 16 characters";        
                    } else if(in_array("Password should contain at least one digit", $error_array)) {
                        echo "Password should contain at least one digit";
                    } else if(in_array("Password should contain at least one Capital Letter", $error_array)) {
                        echo "Password should contain at least one Capital Letter";
                    } else if(in_array("Password should contain at least one small Letter", $error_array)) {
                        echo "Password should contain at least one small Letter";
                    } else if(in_array("Password should contain at least one special character", $error_array)) {
                        echo "Password should contain at least one special character";
                    } else if(in_array("Password should not contain any white space", $error_array)) {
                        echo "Password should not contain any white space";
                    } else {
                        echo "";
                    }
                ?>
            </p>
        </div>
        <div class="form-group my-4">
            <label for="user_password2">Repeat Password</label>
            <input type="password" id="user_password2" name="user_password2" class="form-control" required>
            <p class="text-danger">
                <?php 
                    if (in_array("Passwords do not match", $error_array)){
                        echo "Passwords do not match";        
                    } 
                ?>
            </p>
        </div>
        <div class="py-2">
            <p>This page is meant for admin users only, if you came here by acciedent, please close this page.</p>
        </div>
        <div class="acc">
            <p><b>Already have an account? Click here to <a href="./login.php">Login</a></b></p>
        </div>
        <button class="btn btn-primary" type="submit" name="reg_btn" id="reg_btn">Register</button>
    </form>
</div>


<?php 
    include_once("../../inc/footer.php");
?>