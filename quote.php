<!-- quote.php -->
<?php
$title = "Get A Quote | Jon's Bushhogging";
$description = "Request a quote from Jon's Bushhogging for your lawn mowing and property preparation needs in Central Ohio.";
$keywords = "get a quote, request a quote, Jon's Bushhogging, lawn mowing, property preparation, Central Ohio";

include("includes/header.php");
?>

<!-- Main Content Section -->
<body>
    <div class="w3-container big-block">
        <div class="w3-center">

            <div class="page-title">
                <h2>Get A Quote!</h2>
            </div>

            <div class="quote-form-container">
        <form class="quote-form" action="send_quote.php" method="POST">
            <label for="first_name" class="w3-left">First Name</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="last_name" class="w3-left">Last Name</label>
            <input type="text" id="last_name" name="last_name" required>
            
            <label for="email" class="w3-left">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="subject" class="w3-left">Subject</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message" class="w3-left">Message</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
        </div>
    </div>

</body>
<style>
    .quote-form-container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #f2f2f2;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .quote-form-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }
    .quote-form {
        max-width: 100%;
    }
    .quote-form label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #555;
    }
    .quote-form input[type="text"],
    .quote-form input[type="email"],
    .quote-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .quote-form textarea {
        height: 150px;
        resize: none; /* Prevents resizing */
        overflow-y: auto; /* Adds vertical scrollbar when content exceeds height */
    }
    .quote-form button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }
    .quote-form button:hover {
        background-color: #45a049;
    }
</style>

<?php include 'includes/footer.php'; ?>