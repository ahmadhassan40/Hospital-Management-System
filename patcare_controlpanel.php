<?php 
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientreportid = $_POST["Patientreportid"];
}
    $sql = "SELECT Patientreport_id FROM patientreport WHERE Patientreport_id = '$patientreportid'";
 
    $result = $conn->query($sql);
    $check_validity = false;
    while($result->num_rows > 0) {
        // The patientreport_id exists in the table
        $user = $result->fetch_assoc();
         if($user["Patientreport_id"]==$patientreportid){
            echo "Patient report ID found.";
            $check_validity = true;
            break;

         }

          else{
            $check_validity = false;
          }
    } 


        if($check_validity){
               $sql2 = "SELECT pr.Patientreport_ID,p.Patient_Name,p.Patient_SSN,p.Patcare_ID,p.Patient_no,p.Patient_age,
               p.Patient_Gender,pr.Medical_con_before,pr.Medical_con_after,pr.Treatment_given, 
               pr.Med_togive,pr.Labtest FROM patient p join patientreport pr ON p.Patient_ssn=pr.Patient_ssn 
               where Patientreport_id='$patientreportid'";
               $result2 = $conn->query($sql2);


            if ($result2->num_rows > 0) {
                echo "<table border='1'>
                    <tr>
                        <th>Patientreport ID</th>
                        <th>Patient Name</th>
                        <th>Patient SSN</th>
                        <th>Patcare ID</th>
                        <th>Patient Number</th>
                        <th>Patient Age</th>
                        <th>Patient Gender</th>
                        <th>Medical Condition Before</th>
                        <th>Medical Condition After</th>
                        <th>Treatment Given</th>
                        <th>Medication To Give</th>
                        <th>Lab Test</th>
                    </tr>";
            
                // Loop through the fetched data and display each row in a table row
                while ($row2 = $result2->fetch_assoc()) {
                    echo "<tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row2['Patientreport_ID']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row2['Patient_Name']}</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row2['Patient_SSN']}</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row2['Patcare_ID']}</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row2['Patient_no']}</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row2['Patient_age']}</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row2['Patient_Gender']}</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row2['Medical_con_before']}</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row2['Medical_con_after']}</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row2['Treatment_given']}</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row2['Med_togive']}</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row2['Labtest']}</td>
                    </tr>";
                }
            
                echo "</table>";
            } else {
                echo "No records found.";
            }
        }else{
            echo "Patient report is not in the table";
        }

?>
