<?php 
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Report</title>
    <style>
        img.Bg{
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            position: absolute;
            left: 0px;
            top: 0px;
            z-index: -1;
            width: 100%;
            height: 200%;
            filter: blur(5px);
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            border-radius: 8px;
            max-width: 400px;
            margin: 5% auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
            padding-right: 20px;
        }

        label {
            color: #555;
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: lightseagreen;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        h2 {
            text-align: center;
            color: #fff;
            background-color: lightseagreen;
        }
        h1{
            background-color: lightseagreen;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-left: 8px;
            margin-right: 8px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <img class="Bg" src="PatientReport.jpg">
    <h1 class="h1">PATIENT REPORT</h1>
    <div class="container">
        <h2>Patient Report</h2>
        <form action="Patient_Report.php" method="post">
            <div class="form-group">
                <label for="Patient_SSN">Patient SSN:</label>
                <input type="text" id="Patient_SSN" name="Patient_SSN" required>
               
            </div>
            <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo '<div style="color: red;">' . $_GET['message'] . '</div>';
            }
            ?>


            <div class="form-group">
                <label for="Medical_Condition_Before">Medical Condition Before:</label>
                <textarea id="Medical_Condition_Before" name="Medical_Condition_Before" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="Medical_Condition_After">Medical Condition After:</label>
                <textarea id="Medical_Condition_After" name="Medical_Condition_After" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="Lab_Test">Lab Test:</label>
                <textarea id="Lab_Test" name="Lab_Test" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="Med_To_Give">Med to Give:</label>
                <input type="text" id="Med_To_Give" name="Med_To_Give" required>
            </div>

            <div class="form-group">
                <label for="Treatment_Given">Treatment Given:</label>
                <textarea id="Treatment_Given" name="Treatment_Given" rows="4" required></textarea>
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
