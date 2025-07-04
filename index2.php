<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee-Management-System</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f4f4f4;
            padding: 40px;
        }

        form {
            max-width: 350px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #218838;
        }
    </style>
</head>
<body>
<h3 style="text-align: center;">Employee Management System</h3>

<form action="action2.php" method="POST">


<fieldset>
        <h5 style="text-align: center;">Employees Info</h5>

        <label for="fname">Full Name:</label>
        <input type="text" name="fname">
        <br>
        <label for="email">E-mail:</label>
        <input type="email" name="email">
        <br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone">
        <br>
        <label for="department_id">Department ID:</label>
        <input type="text" name="department_id">
        <br>
        <label for="job_title">Job Title:</label>
        <input type="text" name="job_title">
        <br>
        <label for="hire_date">Hire Date:</label>
        <input type="date" name="hire_date">
        <br><br>
    </fieldset>


    <fieldset>
        <h5 style="text-align: center;">Departments</h5>

        <label for="depname">Department Name:</label>
        <input type="text" name="depname">
    </fieldset>
    <br><br>


    <fieldset>
        <h5 style="text-align: center;">Salaries Info</h5>

        <label for="employee_id">Employee ID:</label>
        <input type="text" name="employee_id">
        <br>
        <label for="amount">Amount:</label>
        <input type="text" name="amount">
        <br>
        <label for="payment_date">Payment Date:</label>
        <input type="date" name="payment_date">
    </fieldset>

    <input type="submit" value="send">
</form>

</body>
</html>
