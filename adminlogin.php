<?php

     include 'connection.php'; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve values from input fields
        $username = $_POST["username"];
        $password = $_POST["password"];

    }


        $query = "SELECT * FROM admin WHERE Admin_username = '$username'";
        $result = $conn->query($query);
        $user = $result->fetch_assoc();

        // Check if the entered password matches the stored password
        if ( $user['Admin_password'] === $_POST['password']) {
                echo ".<br>Correct password.<br>";
                header("Location: Admin_Control.html");
                exit;
        } else {
                header("Location: adminloginn.php?error=1 & message= Wrong username or password entered");
               
                exit;
        }
?>