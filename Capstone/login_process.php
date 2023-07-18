<?php
session_start();

include 'server.php';

// Check if the username and password are provided
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the SQL statement
    $sql = "SELECT * FROM `login` WHERE UserName = '$username' AND `Password` = '$password'";
    $result = mysqli_query($connection, $sql);

    // Check if the query returned a matching row
    if (mysqli_num_rows($result) == 1) {
        // Valid credentials, store the username in the session
        $_SESSION['username'] = $username;
        
         $row = $result->fetch_assoc();
        $privillage= $row['Privillage'];                
            
        

        if ($privillage=='Admin'){
            // Redirect to the home page or any other authorized page
            $_SESSION['privillage'] = $privillage; 
            header('Location: index.php');
            exit();
       
        } elseif ($privillage=='User'){
            $_SESSION['privillage'] = $privillage;
            header('Location: index2.php');
            exit();
       
        }
    }
     else {
        // Invalid credentials, redirect back to the login page with an error message
        header('Location: login.php?error=1');
        exit();

        
    }
}

// Close the connection
mysqli_close($connection);
?>
