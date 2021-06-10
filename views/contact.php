<?php 
    $page = "Contact";
    include_once("../inc/header.php");
?>

<div class="py-5 container">
    <h2>Contact Form</h2>
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
            <label for="message">Comment or Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control" required></textarea>
        </div>

        <button class="btn btn-primary">Send</button>
    </form>
</div>


<?php 
    include_once("../inc/footer.php");
?>