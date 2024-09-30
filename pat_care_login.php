<?php
       include 'connection.php';
   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patcare_id = $_POST["Patcare_id"];
    $password = $_POST["password"];
    
}

$query = "SELECT * FROM patcare WHERE Patcare_id = '$patcare_id'";
$result = $conn->query($query);
$user = $result->fetch_assoc();

// Check if the entered password matches the stored password
if ( $user['Patcare_password'] === $password) {
        echo ".<br>Correct password.<br>";
        header("Location: patcare_controlpanel.php");
       // session_start();
        //$_SESSION["variable"] = $id;

        exit;
} else {
        header("Location: pat_care_login.html?error=1");
        echo "InCorrect password......";
        exit;
}
?>
