<?php

    include 'connection.php';
        
       session_start();
       $receivedVariable3 = $_SESSION["variable3"];
       $patientSSN              =  $_POST["Patient_SSN"];
       echo $receivedVariable3; 
       echo $_SESSION["variable3"];
       echo $receivedVariable3; 

       $query = "select Patient_ssn from patient where assigned_doc_id=$receivedVariable3";
       $result = $conn->query($query);
       $check_ssn_availablity = false;

       while ($row = $result->fetch_assoc()) {
              echo $row["Patient_ssn"];
                   if($row["Patient_ssn"]== $patientSSN){
                         $check_ssn_availablity = true;
                   
                        break;
                    
                  }else{
                  $check_ssn_availablity = false;
             
                  }
       }
         echo "<br>";echo "<br>";
         if($check_ssn_availablity){
            echo "ssn is available";
       

    $patientSSN = $patientReportID  = $medicalConditionBefore = "";
    $medicalConditionAfter = $labTest = $medToGive = $treatmentGiven = "";

                                                                       // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                                       // Store form data in variables
            $patientSSN              =  $_POST["Patient_SSN"];
            // $patientReportID         =  $_POST["Patient_Report_ID"];
            // $patcareID               =  $_POST["Patcare_ID"];
            $medicalConditionBefore  =  $_POST["Medical_Condition_Before"];
            $medicalConditionAfter   =  $_POST["Medical_Condition_After"];
            $labTest                 =  $_POST["Lab_Test"];
            $medToGive               =  $_POST["Med_To_Give"];
            $treatmentGiven          =  $_POST["Treatment_Given"];
            
    }

        $sql = "insert into patientreport(Medical_con_before,Medical_con_after,Treatment_given,Med_togive,
        Labtest,Patient_ssn)
        Values('$medicalConditionBefore','$medicalConditionAfter','$treatmentGiven','$medToGive',
        '$labTest','$patientSSN')";
        if($conn->query($sql) === true){
            echo "Patient report is generated";

            $sql2 = "select pr.Patientreport_id,p.Patient_name,p.Patient_ssn,p.Patcare_id,p.Patient_age,p.Patient_gender,
            pr.Medical_con_before,pr.Medical_con_after,pr.Treatment_given,pr.Med_togive,pr.Labtest
            from patient p join patientreport pr ON p.Patient_ssn = pr.Patient_ssn";
            $result2 = $conn->query($sql2);
            $row5 = $result2->fetch_assoc();
            $doctoridforfile = $receivedVariable3;
            $patientReportID_from_pr = $row5['Patientreport_id'];
            $patientSSN_from_p = $row5['Patient_ssn'];
              
            $sql3 = "insert into file(Doctor_id,Patientreport_id,Patient_ssn)
                     VALUES('$doctoridforfile','$patientReportID_from_pr','$patientSSN_from_p')";
            $result4 = $conn->query($sql3);
// Assuming you have fetched the data into $result2 from your query
if ($result2->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>Patientreport ID</th>
            <th>Patient Name</th>
            <th>Patient SSN</th>
            <th>Patcare ID</th>

            <th>Patient Age</th>
            <th>Patient Gender</th>
            <th>Medical Condition Before</th>
            <th>Medical Condition After</th>
            <th>Treatment Given</th>
            <th>Medication To Give</th>
            <th>Lab Test</th>
        </tr>";

    // Loop through the fetched data and display each row in a table row
    while ($row = $result2->fetch_assoc()) {
        echo "<tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Patientreport_id']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Patient_name']}</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Patient_ssn']}</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Patcare_id']}</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Patient_age']}</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Patient_gender']}</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Medical_con_before']}</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Medical_con_after']}</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Treatment_given']}</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Med_togive']}</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Labtest']}</td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}


        }
        
        else{
            echo "not generated";
        }
        
        $conn->close();
    
      }else{
        header("Location: Generate_Patient_Report.php?error=1 & message= No patient found with this SSN for this doctor");
    }

?>
