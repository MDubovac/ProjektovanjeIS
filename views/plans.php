<?php 
    $page = "Training Plans";
    include_once("../inc/header.php");
    include_once("../controllers/plan-controller.php");

    $sql = "SELECT * FROM plans";
    $results = mysqli_query($conn, $sql);
?>

<div class="py-5 container">
    <?php echo isset($alert) ? $alert : "" ?>
    <h2>Training Plans</h2>
    <table class="table table-bordered table-hover">
        <thead>
            <th>Plan Name</th>
            <th>Training per week</th>
            <th>Hours per day</th>
            <th>Price</th>
        </thead>
        <tbody>
            <?php foreach($results as $r) { ?>
                <tr>
                    <td><?php echo $r["plan_name"] ?></td>
                    <td><?php echo $r["plan_days"] ?></td>
                    <td><?php echo $r["plan_hours"] ?></td>
                    <td><?php echo $r["plan_price"] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <form class="my-5" action="plans.php" method="POST">
        <h2>Subscribe to a Membership</h2>
        <div class="form-group">
            <label class="my-2" for="name">Name</label>
            <input type="text" name="name" class="form-control" required value="<?php echo isset($_SESSION["name"]) ? $_SESSION["name"] : "" ?>">
        </div>
        <div class="form-group">
            <label class="my-2" for="email">Email Address</label>
            <input type="email" name="email" id="email" class="form-control" required value="<?php echo isset($_SESSION["email"]) ? $_SESSION["email"] : "" ?>">
            <p class="text-danger">
                <?php 
                    if (in_array("There is already a membership for this month, for this email.", $error_array)) {
                        echo "There is already a membership for this month, for this email.";
                    }
                ?>
            </p>
        </div>
        <div class="form-group">
            <label class="my-2" for="plan">Plan</label>
            <select name="plan" id="plan" class="form-control"> 
                <?php foreach($results as $r) { ?>
                    <option name="<?php $r["plan_id"] ?>"><?php echo $r["plan_name"]?></option>
                <?php } ?>
            </select>
        </div>
        <button name="plan_btn" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>


<?php 
    include_once("../inc/footer.php");
?>