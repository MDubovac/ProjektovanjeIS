<?php 
    $page = "Home";
    include_once("./inc/header.php");
?>

<div class="container">
    <div class="main">
        <div class="home">
            <div class="px-4 py-5 jumbotron">
                <h1 class="display-4">Welcome to Fitness Club Portal</h1>
                <p class="lead">This is a portal made for members of our club.</p>
                <hr class="my-4">
                <p>You can also use this portal to see all of our training plans, and sign up to them.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="<?php echo APP_URL . "views/plans.php" ?>" role="button">See all plans</a>
                </p>
            </div>
        </div>

        <h2><i class="fa fa-map-marker-alt"></i> Location</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d725.6979126665815!2d21.89552702923814!3d43.31862077441646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b0b16bb40e6f%3A0x260b304907f25fb0!2zTmlrb2xlIFBhxaFpxIdhIDI4LCBOacWhIDcwMDE4Mw!5e0!3m2!1sen!2srs!4v1623165332402!5m2!1sen!2srs" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>
</div>


<?php 
    include_once("./inc/footer.php");
?>