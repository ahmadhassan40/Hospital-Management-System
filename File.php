<?php
        
    $patientSSN = $doctorID = $patientReportID = "";

                                                                    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                                    // Store form data in variables
        $patientSSN       =  $_POST["Patient_SSN"];
        $doctorID         =  $_POST["Doctor_ID"];
        $patientReportID  =  $_POST["Patient_Report_ID"];
            
    }

?>