<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Patient Details</title>
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
    <h1 class="h1">Update Patient</h1>
    <div class="container">
        <h2>Update Patient</h2>
        <form action="updatePatient.php" method="post">
            

            <div class="form-group">
                <label for="Patient_SSN">Enter Patient ssn you want to update</label>
                <input type="number" id="Patient_SSN" name="Patient_SSN" min="1" max="999999999" required>
            </div>
            <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo '<div style="color: red;">' . $_GET['message'] . '</div>';
            }
            ?>
           

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
