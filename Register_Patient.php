<?php
    include 'connection.php'; 
    $adminID = $patientSSN = $patientName = $patientAge = $patientGender = $patientMobile = "";
    $patientNo = $medicalCondition = $seriousnessLevel = $patcareID = $assigned_doc_id = "";

                                                                        // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                                        // Store form data in variables
        $adminID            =  $_POST["Admin_ID"];
        $patientSSN         =  $_POST["Patient_SSN"];
        $patientName        =  $_POST["PatientName"];
        $patientAge         =  $_POST["PatientAge"];
        $patientGender      =  $_POST["PatientGender"];
        $patientMobile      =  $_POST["PatientMobile"];
     
        $medicalCondition   =  $_POST["MedicalCondition"];
        $seriousnessLevel   =  $_POST["SeriousnessLevel"];
        $patcareID          =  $_POST["Patcare_ID"];
        $assigned_doc_id  =  $_POST["assigned_doc_id"];
            
    }

    $sql = "insert into patient(Patient_name,Patient_ssn,Patient_age,Patient_gender,	
    Patient_mobile,medical_con,seriousness_level,assigned_doc_id,Patcare_id,Admin_id)
    values('$patientName','$patientSSN','$patientAge','$patientGender','$patientMobile','$medicalCondition',
    '$seriousnessLevel','$assigned_doc_id','$patcareID','$adminID')";
  
   

    $sql2 = "insert into assign(Admin_id,Doctor_id,Patient_ssn)
    VALUES('$adminID','$assigned_doc_id', '$patientSSN');
    ";
     

    
    if ($conn->query($sql) === true) {
        // Patient data inserted successfully
        echo "Patient Registered<br>";
    
        // Attempt to insert into the "assign" table
        if ($conn->query($sql2) === true) {
            echo "Data inserted in assign table";
        } else {
            echo "Error inserting data into assign table: ";
        }
    } else {
        echo "Error inserting patient data: ";
    }
    
    $conn->close();
  
?>
    <!-- //******************************************************************* */ -->

 
<!-- //   include 'Register_Patient.php';
//   $Doctore_id = $_POST[$relevantDocAssign];
//   echo $Doctore_id + "";  -->

