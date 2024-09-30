<?php
    include 'connection.php'; 
     
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo"I am at first step";
    $adminID = $_POST["admin_id"];
    $patientSSN = $_POST["patient_id"];
    $doctorID = $_POST["doctor_id"];
    // $medicalCondition = $_POST["medical_condition"];
    // $seriousnessLevel = $_POST["seriousness_level"];
    // $timeStamp = $_POST["time_stamp"];

    }
    
    // $sql = "select "
    $sql = "insert into assign(Admin_id,Doctor_id,Patient_ssn)
    values('$adminID' , '$doctorID' , '$patientSSN')";
    if($conn->query($sql) === true){
        echo"I am at third";
        echo "Patient Assigned";
    }
    
    else{
        echo "not assigned";
    }
    
    $conn->close();
  
?>
