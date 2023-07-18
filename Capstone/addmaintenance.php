<?php
include 'server.php';


// Retrieve user information from the registration form

$itemname= $_POST['ItemName'];
$descript = $_POST['ItemDes'];
$unit = $_POST['ItemUnit'];
$quantity = $_POST['Quantity'];

// Check if username already exists
$query = "SELECT * FROM `items` WHERE ItemName = '$itemname'";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Itemname already exists. Please choose a different itemname.</h2>";
    exit;
}



// Insert item data into the database
$sql = "INSERT INTO `items` (ItemName,ItemDes,ItemUnit,Quantity,Category) VALUES ('$itemname', '$descript', '$unit','$quantity','Maintenance')";

if (mysqli_query($connection, $sql)) {
    echo '<script>alert("Registration successful!");</script>';
     header('Location: Maintenance.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>


