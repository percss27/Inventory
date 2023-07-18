<?php
include 'server.php';


// Retrieve user information from the registration form
$full_name = $_POST[''];
$username2 = $_POST['username'];
$password2 = $_POST['password'];
$confirm_password2 = $_POST['confirm_password'];
$email = $_POST['email'];
$department = $_POST['Department'];
$privillage = $_POST['privillage'];

// Check if username already exists
$query = "SELECT * FROM `login` WHERE UserName = '$username2'";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Username already exists. Please choose a different username.</h2>";
    exit;
}


$query2 = "SELECT * FROM `login` WHERE Email = '$email'";
$result2 = mysqli_query($connection, $query2);

if (mysqli_num_rows($result2) > 0) {
    echo "<h2>Email already exists. Please use a different email address.</h2>";
    exit;
}


// Validate password match
if ($password2 !== $confirm_password2) {
    echo "<h2>Passwords do not match. Please try again.</h2>";
    exit;
}



// Insert user data into the database
$sql = "INSERT INTO `login` (FullName,UserName,`Password`,Email,Privillage,Department) VALUES ('$full_name', '$username2', '$password2', '$email','$privillage','$department')";

if (mysqli_query($connection, $sql)) {
    echo '<script>alert("Registration successful!");</script>';
     header('Location: tables-data.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>


