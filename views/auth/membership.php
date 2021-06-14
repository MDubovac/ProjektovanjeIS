<?php 
    $page = "Admin Panel";
    include_once("../../inc/header.php");

    $sql = "SELECT * FROM mships";
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
        <a class="nav-link" aria-current="page" href="admin.php">Contact Form</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="membership.php">Memberships</a>
      </li>
    </ul>

    <h3 class="my-4">All reserved memberships</h3>
    <table class="table table-bordered table-hover">
      <thead>
          <th>Id</th>
          <th>Name</th>
          <th>Email Address</th>
          <th>Training Plan</th>
      </thead>
      <tbody>
        <?php foreach($result as $r) { ?>
            <tr>
                <td><?php echo $r["mship_id"] ?></td>
                <td><?php echo $r["mship_name"] ?></td>
                <td><?php echo $r["mship_email"] ?></td>
                <td><?php echo $r["mship_plan"] ?></td>
            </tr>
        <?php } ?>
      </tbody>
    </table>

</div>


<?php 
    include_once("../../inc/footer.php");
?>