<?php 
    $page = "Register";
    include_once("../../inc/header.php");
?>

<div class="py-5 container">
    <h2>Register</h2>
    <form action="">
        <div class="form-group my-4">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" class="form-control" required>
        </div>
        <div class="form-group my-4">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" class="form-control" required>
        </div>
        <div class="form-group my-4">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group my-4">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <div class="form-group my-4">
            <label for="password2">Repeat Password</label>
            <input type="password2" id="password2" name="password2" class="form-control" required>
        </div>
        <div class="tos bg-secondary px-2 py-2">
            <p class="text-light">By registering you accept the <a href="">Terms of Service</a>. Your data will not be used publicly, but rather for a good communication on this portal</p>
        </div>
        <div class="acc">
            <p><b>Already have an account? Click here to <a href="./login.php">Login</a></b></p>
        </div>
        <button class="btn btn-primary">Register</button>
    </form>
</div>


<?php 
    include_once("../../inc/footer.php");
?>