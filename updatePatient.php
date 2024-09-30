

<?php 
    include 'connection.php';

    $patientSSN = $_POST['Patient_SSN'];

    $sql1 = "SELECT Patient_ssn FROM patient";
    $result1 = $conn->query($sql1);

    $check_ssn_availability = false;

    if ($result1 && $result1->num_rows > 0) {
        while ($row1 = $result1->fetch_assoc()) {
            if ($row1['Patient_ssn'] === $patientSSN) {
                $check_ssn_availability = true;
                break;
            }
        }
        $result1->free(); // Free the result set
    }

    $conn->close();

    if ($check_ssn_availability) {
        session_start();
        $_SESSION["variable59"] = $patientSSN;
        header("Location: patientUpdateForm.php");
        exit;
    } else {
        header("Location: updatePatientssn.php?error=1 & message= No patient is registered with this ssn");

        exit;
    }
?>
