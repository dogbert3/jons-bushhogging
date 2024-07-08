<?php
$title = "Gallery | Jon's Bushhogging";
include("includes/header.php");
// Prevent caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>

<!-- Main Content Section -->
<body>
    <div class="w3-container big-block w3-center">
        <div class="w3-center">
            <div class="page-title">
                <h2>Our Interactive Work Gallery</h2>
            </div>

            <!-- Gallery Section -->
            <p><strong>Click and Drag the Slider to See the Bush Hog at Work!</strong></p>
            <div class="w3-row-padding">
            
                <!-- First Image Comparison -->
                <div class="w3-half w3-padding">
                    <div class="img-comp-container">
                        <div class="img-comp-img">
                            <img src="assets/images/before1.jpg" alt="Before Bushhogging" height="600">
                        </div>
                        <div class="img-comp-img img-comp-overlay">
                            <img src="assets/images/after1.jpg" alt="After Bushhogging" height="600">
                            <div class="img-comp-bar"></div> <!-- Divider Bar -->
                        </div>
                    </div>
                </div>

                <!-- Second Image Comparison -->
                <div class="w3-half w3-padding">
                    <div class="img-comp-container">
                        <div class="img-comp-img">
                            <img src="assets/images/before2.jpg" alt="Before Bushhogging" height="600">
                        </div>
                        <div class="img-comp-img img-comp-overlay">
                            <img src="assets/images/after2.jpg" alt="After Bushhogging" height="600">
                            <div class="img-comp-bar"></div> <!-- Divider Bar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="scripts/scripts.js"></script>
    <script>
        initComparisons();
    </script>
</body>

<?php include 'includes/footer.php'; ?>
