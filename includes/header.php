<!-- header.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body{
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <!-- Header Top Section -->
    <div class="w3-container w3-light-grey header-top">
        <p>Welcome to Jon's Bushhogging <span>&#8226;</span> Serving Central Ohio Since 2017 <span>&#8226;</span> ☎ 614-579-8081</p>
    </div>

    <!-- Main Header Section -->
    <div class="w3-bar w3-container header-bar">
        <div class="w3-bar-item logo-container">
            <img src="assets/images/logo3.png" alt="Logo">
        </div>
        <div class="header-title w3-center">
            <h1>Jon's Bushhogging</h1>
        </div>
        <div>
            <a href="quote.php" class="big-button bigger-button w3-display-right" style="margin-top:25px;margin-right:25px;"><strong>Get A Quote</strong></a>
        </div>
    </div>

    <!-- Navigation Section -->
    <div class="w3-bar w3-container w3-red nav-bar">
        <div class="nav-links  w3-center">
            <a href="index.php" class="w3-bar-item w3-button">Home</a>
            <div class="w3-dropdown-hover">
                <a href="services.php" class="w3-button">Services <i class="fa fa-caret-down"></i></a>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="bushhogging.php" class="w3-bar-item w3-button">Bushhogging</a>
                    <a href="lawn-installation.php" class="w3-bar-item w3-button">Lawn Installation</a>
                    <a href="gravel-driveway-restoration.php" class="w3-bar-item w3-button">Gravel Driveway Restoration</a>
                </div>
            </div>
            <a href="gallery.php" class="w3-bar-item w3-button">Gallery</a>
            <a href="about.php" class="w3-bar-item w3-button">About</a>
        </div>

    </div>

    <!-- Hero Image Section -->
    <div class="hero-image">
        <img src="assets/images/grass.jpg" alt="Grass Seed Preparation, Rough Cut Mowing in Franklin County">
    </div>
    
</html>
