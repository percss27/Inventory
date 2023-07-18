<?php
include 'server.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["userid"]; // ID of the record to be updated
    $fname = $_POST["full_name"]; // Updated name value
    $email = $_POST["email"]; // Updated email value
    $department = $_POST["Department"];
    $username = $_POST["username"];
    

    // Update query
    $query = "UPDATE `login` SET UserName='$username', Email='$email',Department='$department',FullName='$fname' WHERE UserID=$id";

    // Execute the query
    if ($connection->query($query) === TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $connection->error;
    }

}

$connection->close();
?>
