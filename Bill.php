<?php
     include 'connection.php';
$patientSSN = $doctorFee = $foodCharges = $icuFee = $medicineFee = $daysStay = $surgeonFee = 
$theaterFee = $otherExpenses = "";

                                                // Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                // Retrieve data from the form and store it in variables
    $patientSSN     =  $_POST["Patient_SSN"];
    // $billID         =  $_POST["Bill_ID"];
    $doctorFee      =  $_POST["Doctor_Fee"];
    $foodCharges    =  $_POST["Food_Charges"];
    $icuFee         =  $_POST["ICU_Fee"];
    $medicineFee    =  $_POST["Medicine_Fee"];
    $daysStay       =  $_POST["No_of_Days_Stay"];
    $surgeonFee     =  $_POST["Surgeon_Fee"];
    $theaterFee     =  $_POST["Theater_Fee"];
    $otherExpenses  =  $_POST["Other_Expenses"];
}

$query = "select Patient_ssn from patient";
$result = $conn->query($query);
$check_ssn_availablity = false;

while ($row = $result->fetch_assoc()) {

            if($row["Patient_ssn"]== $patientSSN){
                  $check_ssn_availablity = true;
            
                 break;
             
           }else{
           $check_ssn_availablity = false;
      
           }
}

  if($check_ssn_availablity){
     echo " ssn is available <br>";

    
        $sql1 = "insert into bill(Patient_ssn,No_of_days,Food_charges,Doctor_fee,Medicine_fee,
                 ICU,Sugeon_fee,theater_fee,other_expences)
                 VALUES('$patientSSN','$daysStay' , '$foodCharges','$doctorFee','$medicineFee',
                 '$icuFee','$surgeonFee','$theaterFee','$otherExpenses'
                 )";
 
        //  $result1 = $conn->query($sql1);
         $sql2 = "select Admin_id,Patcare_id from patient where Patient_ssn ='$patientSSN'";        
         $result2 = $conn->query($sql2);
    

         while ($row = $result2->fetch_assoc()) {
          $adminIdFromPatient = $row["Admin_id"];
          $patcareIdFromPatient = $row["Patcare_id"];
         }
         echo $adminIdFromPatient;
         echo $patcareIdFromPatient;

         $sql3 = "select Bill_id from bill where Patient_ssn='$patientSSN'";
         $result3 = $conn->query($sql3);
         $row = $result3->fetch_assoc();
         $billidfrombill = $row["Bill_id"];
         echo $billidfrombill;
        
         $sql4 = "insert into deliver (Admin_id,Bill_id,Patcare_id)
                 VALUES('$adminIdFromPatient','$billidfrombill','$patcareIdFromPatient')
                 ";
                 $result4 = $conn->query($sql4);

         $sql5 = "insert into patient_bill(Patient_ssn,Bill_id)
                 VALUES('$patientSSN','$billidfrombill')
                 ";
                 $result5 = $conn->query($sql5);
      //   if ($conn->query($sql1) === true) {
        
      //     echo "Inserted into bill<br>";
      //     if ($conn->query($sql2) === true) {
      //         echo "select query from patient";
           
    
      
      $conn->close();

  }else{
    header("Location: Billhtml.php?error=1 & message= No patient is registered with this ssn");
  }

  ?>