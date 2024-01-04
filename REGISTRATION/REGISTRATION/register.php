<?php
session_start();

include("database_con.php");

// Function to sanitize user input
function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}

$showPopup = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = sanitizeInput($_POST["name"]);
    $Email = sanitizeInput($_POST["Email"]);
    $phone_no = sanitizeInput($_POST["phone_no"]);
    $password = sanitizeInput($_POST["password"]);

    // SQL query to insert data into the table
    $sql = "INSERT INTO user_register (name, Email, phone_no, password) VALUES ('$name', '$Email', '$phone_no', '$password')";

    // Check if the insertion was successful
    if ($conn->query($sql) === TRUE) {
        // Set a flag to show the custom modal
        if($showPopup){
            echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    document.getElementById("customModal").style.display = "block";
                });
            </script>';
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Register.css">
    
</head>
<body>


    <div class="container">
        <form action="" method="post">
            <h1>Register Here!</h1>

           

            <div class="input-box">
                <input type="email"  name="Email" placeholder="Email" required>
            </div>

            <div class="input-box">
                <input type="text" name="name" placeholder="Enter the name" required>
            </div>

            <div class="input-box">
                <input type="tel" name="phone_no" placeholder="Phone no" required>
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="Enter the password" required>
            </div>

            <div class="input-box">
                <input type="password" name="cpassword" placeholder="Confirm the password" required>
            </div>

            <button type="submit" class="btn" name="button" >Register</button><br><br>
        </form>
    </div>

    <!-- The custom modal -->
    <?php if ($showPopup) { ?>
    <div id="customModal" class="custom-modal">
        <h2>Success</h2>
        <p>Record inserted successfully.</p>
        <button id="closeModal" onclick="closeCustomModal()">Close</button>
    </div>
   
    <?php } ?>

    <script>
        // JavaScript function to close the custom modal
        function closeCustomModal() {
            document.getElementById('customModal').style.display = 'none';
        }
    </script>
</body>
</html>
