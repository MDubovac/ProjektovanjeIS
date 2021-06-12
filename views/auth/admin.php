<?php 
    $page = "Admin Panel";
    include_once("../../inc/header.php");
?>

<div class="py-5 container">
    <h2>Admin Panel</h2>
    
    <h4><?php echo "Welcome, " . $_SESSION["auth_user"]; ?></h4>

</div>


<?php 
    include_once("../../inc/footer.php");
?>