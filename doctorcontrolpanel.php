<?php
include 'connection.php';

session_start();
$receivedVariable = $_SESSION["variable"];
echo $receivedVariable; // Outputs: Hello

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
    <style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-image: url(PatientRegistration.jpg);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            border-radius: 8px;
            max-width: 1300px;
            max-height: 1500px;
            margin: 5% auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

       

        h1 {
            background-color: lightseagreen;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-left: 8px;
            margin-right: 8px;
            border-radius: 8px;
        }
         .button{
            /* text-align: center; */
            align-items: center;
            color: #fff;
            margin-left: 90px;
            /* padding-left: 80px; */
            text-decoration: none;
           
            background-color: lightseagreen;
        }
    </style>
</head>
<body>
    <h1 class="h1">Doctors Veiw</h1>
    <div class="container">
        <!-- <h2>Generate Patient Report</h2> -->
        <a href="Generate_Patient_Report.php" class="button" >Generate Patient Report</a><br><br>
       <?php 
     
      
      
    
      
       $query = "select * from patient where assigned_doc_id='$receivedVariable'";
       $result = $conn->query($query);
      

      $_SESSION["variable3"] = $receivedVariable;
      echo $_SESSION["variable3"];
    
       

       if ($result->num_rows > 0) {


            echo "<table border='1'>
    <tr>
        <th>Patient Name</th>
        <th>Patient SSN</th>
        <th>Patient Age</th>
        <th>Patient Gender</th>
        <th>Patient Mobile</th>
        <th>Medical Condition</th>
        <th>Seriousness Level</th>
        <th>Assigned Doctor ID</th>
        <th>Patcare ID</th>
        <th>Admin ID</th>
    </tr>";

// Loop through the fetched data and display each row in a table row
while ($row = $result->fetch_assoc()) {
    
    echo "<tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Patient_name']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Patient_ssn']}</td>
        
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Patient_age']}</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Patient_gender']}</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Patient_mobile']}</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['medical_con']}</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['seriousness_level']}</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['assigned_doc_id']}</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Patcare_id']}</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['Admin_id']}</td>
    </tr>";
}


echo "</table>";

        // }
    } else {
        echo "No patients found for this doctor.";
    }   
  
    
       ?>
        
    </div>
</body>
</html>
