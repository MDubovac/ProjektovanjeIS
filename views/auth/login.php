<?php 
    $page = "Login";
    include_once("../../inc/header.php");
?>

<div class="py-5 container">
    <h2>Login</h2>
    <form action="">
        <div class="form-group my-4">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group my-4">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <div class="acc">
            <p><b>Don't have an account? Click here to <a href="./register.php">Register</a></b></p>
        </div>
        <button class="btn btn-primary">Login</button>
    </form>
</div>


<?php 
    include_once("../../inc/footer.php");
?>