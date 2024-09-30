<?php
include 'connection.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id = $_POST["id"];
    $password = $_POST["password"];


}

$query = "SELECT * FROM doctor WHERE Doctor_id = '$id'";
$result = $conn->query($query);
$user = $result->fetch_assoc();

// Check if the entered password matches the stored password
if ( $user['Doctor_password'] === $_POST['password']) {
        echo ".<br>Correct password.<br>";
        header("Location: doctorcontrolpanel.php");
        session_start();
        $_SESSION["variable"] = $id;

        exit;
} else {
        header("Location: doctorloginn.php?error=1 & message= wrong id or password entered ");
       
        exit;
}
?>
