

<?php 
    include 'connection.php';
    session_start();
  $receivedVariable3 = $_SESSION["variable59"];
     
    $patient_mobile = $_POST["PatientMobile"];
    $medical_condition = $_POST["MedicalCondition"];
    $seriousness_level = $_POST["SeriousnessLevel"];
    $assigned_doc_id  =  $_POST["assigned_doc_id"];

    $sql2 = "UPDATE patient SET Patient_mobile='$patient_mobile', medical_con='$medical_condition',
             seriousness_level='$seriousness_level',assigned_doc_id='$assigned_doc_id'  WHERE Patient_ssn='$receivedVariable3'";

    
        if ($conn->query($sql2) === TRUE) {
            // header("Location: updateSuccess.html");
            echo "Data updated";
            // exit;
        } else {
            echo "Data not updated";
        }
    

    $conn->close();
?>
