<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BILL</title>
    <style>
        body {
            background-image: url(Bill2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            border-radius: 8px;
            max-width: 400px;
            margin: 0 auto;
            margin-top: 5%;
            margin-bottom: 5%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            opacity: 80%;
        }

        .form-group {
            margin-bottom: 20px;
            padding-right: 20px;
            border-radius: 3px;
        }

        label {
            color: #555;
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="number"] {
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
        h1{
            background-color: lightseagreen;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-left: 8px;
            margin-right: 8px;
            border-radius: 8px;
        }
        h2{
            text-align: center;
            color: #fff;
            background-color: lightseagreen;
        }
    </style>
</head>
<body>
    <h1 class="h1">PATIENT BILL</h1>
    <div class="container">
        <h2>BILL</h2>
        <form action="Bill.php" method="post">
            <div class="form-group">
                <label for="Patient_SSN">Patient SSN:</label>
                <input type="number" id="Patient_SSN" name="Patient_SSN" min="1" max="999999999" required>
            </div>
            <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo '<div style="color: red;">' . $_GET['message'] . '</div>';
            }
            ?>


            <!-- <div class="form-group">
                <label for="Bill_ID">Bill ID:</label>
                <input type="number" id="Bill_ID" name="Bill_ID">
            </div> -->


            <div class="form-group">
                <label for="Doctor_Fee">Doctor Fee:</label>
                <input type="number" id="Doctor_Fee" name="Doctor_Fee" required>
            </div>


            <div class="form-group">
                <label for="Food_Charges">Food Charges:</label>
                <input type="number" id="Food_Charges" name="Food_Charges" required>
            </div>


            <div class="form-group">
                <label for="ICU_Fee">ICU Fee:</label>
                <input type="number" id="ICU_Fee" name="ICU_Fee" required>
            </div>


            <div class="form-group">
                <label for="Medicine_Fee">Medicine Fee:</label>
                <input type="number" id="Medicine_Fee" name="Medicine_Fee" required>
            </div>


            <div class="form-group">
                <label for="No_of_Days_Stay">No of Days Stay:</label>
                <input type="number" id="No_of_Days_Stay" name="No_of_Days_Stay" required>
            </div>


            <div class="form-group">
                <label for="Surgeon_Fee">Surgeon Fee:</label>
                <input type="number" id="Surgeon_Fee" name="Surgeon_Fee" required>
            </div>


            <div class="form-group">
                <label for="Theater_Fee">Theater Fee:</label>
                <input type="number" id="Theater_Fee" name="Theater_Fee" required>
            </div>


            <div class="form-group">
                <label for="Other_Expenses">Other Expenses:</label>
                <input type="number" id="Other_Expenses" name="Other_Expenses" required>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
 