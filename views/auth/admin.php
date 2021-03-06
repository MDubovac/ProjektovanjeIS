<?php 
    $page = "Admin Panel";
    include_once("../../inc/header.php");

    $sql = "SELECT * FROM messages";
    $result = mysqli_query($conn, $sql);

    if(!isset($_SESSION["auth_user"])) {
      header("Location: ../../index.php");
    }
?>

<div class="py-5 container">
    
    <h2>Admin Panel</h2>
    
    <h4><?php echo "Welcome, " . $_SESSION["auth_user"]; ?></h4>

    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Contact Form</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="membership.php">Memberships</a>
      </li>
    </ul>

    <h3 class="my-4">All Messages</h3>
    <table class="table table-bordered table-hover">
      <thead>
          <th>Id</th>
          <th>Name</th>
          <th>Email Address</th>
          <th>Actions</th>
      </thead>
      <tbody>
        <?php foreach($result as $r) { ?>
          <tr>
            <td><?php echo $r["message_id"] ?></td>
            <td><?php echo $r["message_name"] ?></td>
            <td><?php echo $r["message_email"] ?></td>
            <td><a href="message.php/<?php echo $r["message_id"] ?>" class="btn btn-primary btn-sm">View</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

</div>


<?php 
    include_once("../../inc/footer.php");
?>