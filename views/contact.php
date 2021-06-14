<?php 
    $page = "Contact";
    include_once("../inc/header.php");
    include_once("../controllers/contact-controller.php");
?>

<div class="py-5 container">
    <?php echo isset($alert) ? $alert : "" ?>
    <h2>Contact Form</h2>
    <form action="contact.php" method="POST">
        <div class="form-group my-4">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" class="form-control" required value="<?php echo isset($_SESSION["fname"]) ? $_SESSION["fname"] : "" ?>">
        </div>
        <div class="form-group my-4">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" class="form-control" required value="<?php echo isset($_SESSION["lname"]) ? $_SESSION["lname"] : "" ?>">
        </div>
        <div class="form-group my-4">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" class="form-control" required value="<?php echo isset($_SESSION["email"]) ? $_SESSION["email"] : "" ?>">
        </div>
        <div class="form-group my-4">
            <label for="message">Comment or Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control" required><?php echo isset($_SESSION["message"]) ? $_SESSION["message"] : "" ?></textarea>
        </div>

        <button type="submit" name="contact_btn" class="btn btn-primary">Send</button>
    </form>
</div>


<?php 
    include_once("../inc/footer.php");
?>