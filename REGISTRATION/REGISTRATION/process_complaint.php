<?php
include('database_con.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $contact = htmlspecialchars($_POST["contact"]);
    $complaint = htmlspecialchars($_POST["complaint"]);

    // SQL query to insert data into the table
    $sql = "INSERT INTO register (name, Email, contact, complaint) VALUES ('$name', '$email', '$contact', '$complaint')";

    // Check if the insertion was successful
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
