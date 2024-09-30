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
            max-width: 400px;
            margin: 5% auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            padding-right: 20px;
            margin-bottom: 20px;
        }

        label {
            color: #555;
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
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

        h1 {
            background-color: lightseagreen;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-left: 8px;
            margin-right: 8px;
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #fff;
            background-color: lightseagreen;
        }
    </style>
</head>
<body>
    <h1 class="h1">Update Patient Details</h1>
    <div class="container">
        <h2>Update Details</h2>
        <form action="patientUpdated.php" method="post">
            


            <div class="form-group">
                <label for="PatientMobile">Patient Mobile:</label>
                <input type="text" id="PatientMobile" name="PatientMobile" required>
            </div>


            <div class="form-group">
                <label for="MedicalCondition">Medical Condition:</label>
                <input type="text" id="MedicalCondition" name="MedicalCondition" required>
            </div>

            <div class="form-group">
                <label for="SeriousnessLevel">Seriousness Level:</label>
                <input type="text" id="SeriousnessLevel" name="SeriousnessLevel" required>
            </div>

            <div class="form-group">
                <label for="Patcare_ID">Patcare ID:</label>
                <input type="text" id="Patcare_ID" name="Patcare_ID" min="1" max="10" required>
            </div>

            <div class="form-group">
                <label for="assigned_doc_id">Assigned doctor's id</label>
                <input type="number" id="assigned_doc_id" name="assigned_doc_id" min="1" max="10" required>
                
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
