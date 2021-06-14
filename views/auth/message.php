<?php 
    $page = "Admin Panel";
    include_once("../../inc/header.php");

    $msg = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $msgId = $msg[54];
    $sql = "SELECT * FROM messages WHERE message_id = '$msgId'";
    $result = mysqli_query($conn, $sql);

    if(!isset($_SESSION["auth_user"])) {
        header("Location: ../../index.php");
    }
?>

<div class="py-5 container">
    <?php foreach($result as $r) {?>
        <a href="<?php echo APP_URL . "views/auth/admin.php" ?>" class="my-3 btn btn-outline-primary">< Back</a>
        <h4>User Name: <?php echo $r["message_name"] ?></h4> 
        <h4>Email: <?php echo $r["message_email"] ?></h4>
        <h4>Poruka:</h4>
        <p>
        <?php echo $r["message_text"] ?>
        </p>
    <?php } ?>
</div>


<?php 
    include_once("../../inc/footer.php");
?>