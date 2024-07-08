<!-- services.php -->
<?php
$title = "See Our Services | Jon's Bushhogging";
include ("includes/header.php");
?>

<!-- Main Content Section -->

<body>
    

<div class="w3-container big-block">
    <div class="w3-center">

    <div class="page-title">
        <h2>Professional Large Acre Maintenance</h2>
    </div>
        <p><strong>Discover what Jon's Bushhogging can do for you!</strong></p>
    </div>

    <!-- Service Descriptions -->
    <div class="w3-row-padding">
        <div class="w3-third w3-padding">
            <a href="bushhogging.php">
                <img src="assets/images/hogging.jpg" alt="Bushhogging Services" class="w3-image w3-margin-bottom service-image">
            </a>
            <h3>Bushhogging</h3>
            <p>From 1 to 100 acres, we provide expert bushhogging services across Central Ohio. Whether it's a one-time job or regular maintenance, our top-notch equipment ensures superior results at competitive prices.</p>
        </div>

        <div class="w3-third w3-padding">
            <a href="lawn-installation.php">
                <img src="assets/images/lawn.jpg" alt="Lawn Grass Seed Preparation" class="w3-image w3-margin-bottom service-image">
            </a>
            <h3>New Lawn Grass Seed Preparation/Install</h3>
            <p>Specializing in large lawn installations, we prepare and install new lawn grass seed with precision and care. Trust us to transform your landscape with lush, healthy grass.</p>
        </div>

        <div class="w3-third w3-padding">
            <a href="gravel-driveway-restoration.php">
                <img src="assets/images/gravel.jpg" alt="Driveway Restoration" class="w3-image w3-margin-bottom service-image">
            </a>
            <h3>Gravel Driveway Restoration</h3>
            <p>Heavy-duty grading and leveling services for gravel driveways, ensuring smooth surfaces free from potholes. Restore your driveway to pristine condition with our professional expertise.</p>
        </div>
    </div>

    <!-- Call to Action Buttons -->
    <div class="w3-container w3-center w3-padding-32">
        <a href="quote.php" class="big-button w3-margin-right">Get A Quote</a>
        <a href="gallery.php" class="big-button w3-margin-left">View The Gallery</a>
    </div>
</div>

</body>

<?php include 'includes/footer.php'; ?>

<!-- Custom CSS for Hover Effect -->
<style>
    .service-image {
        transition: transform 0.3s, filter 0.3s;
    }

    .service-image:hover {
        transform: scale(1.05); /* Increase size slightly on hover */
        filter: brightness(85%); /* Slightly whiten on hover */
    }
</style>