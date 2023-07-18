<?php
include 'server.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemid = $_POST["ItemID"]; // ID of the record to be updated
    $itemname = $_POST["ItemName"]; // Updated name value
    $itemdes = $_POST["ItemDes"]; // Updated email value
    $itemunit = $_POST["ItemUnit"];
    $quantity = $_POST["Quantity"];


    // Update query
    $query = "UPDATE `items` SET ItemName='$itemname',Itemunit='$itemunit',Quantity='$quantity' WHERE ItemID=$itemid";

    // Execute the query
    if ($connection->query($query) === TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $connection->error;
    }

}

$connection->close();
?>
