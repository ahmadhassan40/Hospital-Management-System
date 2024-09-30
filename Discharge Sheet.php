<?php

include 'connection.php';

$patientSSN = $medToGive = $revisitDate = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form data in variables
    $patientSSN = $_POST["Patient_SSN"];
    $medToGive = $_POST["MedToGive"];
    $revisitDate = $_POST["RevisitDate"];
}

$sql = "SELECT Patient_ssn FROM patient";
$result = $conn->query($sql);

$check_ssn_availability = false;

while ($row = $result->fetch_assoc()) {
    if ($row["Patient_ssn"] == $patientSSN) {
        $check_ssn_availability = true;
        break;
    }
}

echo "<br><br>";

if ($check_ssn_availability) {
    $sql2 = "INSERT INTO discharge_sheet(Patient_ssn, med_togive, revisit_date)
             VALUES ('$patientSSN', '$medToGive', '$revisitDate')";
             
    if ($conn->query($sql2) === true) {
        echo "Discharge sheet generated";

        $sql8 = "SELECT Dischargesheet_id FROM discharge_sheet WHERE Patient_ssn = '$patientSSN'";
        $result8 = $conn->query($sql8);
        
        if ($result8->num_rows > 0) {
            $row8 = $result8->fetch_assoc();
            $dischargesheetid_from_ds = $row8['Dischargesheet_id'];

            $sql6 = "SELECT Admin_id FROM patient WHERE Patient_ssn = '$patientSSN'";
            $result6 = $conn->query($sql6);
            
            if ($result6->num_rows > 0) {
                $row6 = $result6->fetch_assoc();
                $adminidfrompatient = $row6['Admin_id'];

                $sql4 = "INSERT INTO generate(Admin_id, Dischargesheet_id, Patient_ssn)
                         VALUES ('$adminidfrompatient', '$dischargesheetid_from_ds', '$patientSSN')";

                if ($conn->query($sql4) === true) {
                    echo "Data inserted in generate table";
                } else {
                    echo "Failed to insert data in generate table: ";
                }
            } else {
                echo "No admin ID found for the patient.";
            }
        } else {
            echo "No Dischargesheet_id found for the patient.";
        }
    } else {
        echo "Failed to generate discharge sheet: ";
    }

    $conn->close();
} else {
    echo "No patient is registered with this SSN";
}
?>





