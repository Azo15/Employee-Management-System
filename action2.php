<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "task2db";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
} else {
    echo "Welcome to First Task";
}

echo "<br>";
echo "<br>";

//step 1
/*
$db = "CREATE DATABASE task2db";
if ($conn->query($db) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database";
}
*/

echo "<br>";
echo "<br>";

//step 2
/*
$employees = "CREATE TABLE employees(
id INT(11) AUTO_INCREMENT PRIMARY KEY,
fname VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
phone VARCHAR(15) NOT NULL,
department_id INT(11) NOT NULL,
job_title VARCHAR(50) NOT NULL,
hire_date DATE
)";

if ($conn->query($employees) === TRUE) {
    echo "Employees table created successfully";
} else {
    echo "Error creating employees table";
}
*/

echo "<br>";
echo "<br>";

//step 2
/*
$departments = "CREATE TABLE departments(
id INT(11) AUTO_INCREMENT PRIMARY KEY,
depname VARCHAR(255)
)";

if ($conn->query($departments) === TRUE) {
    echo "Departments table created successfully";
} else {
    echo "Error creating departments table";
}
*/

echo "<br>";
echo "<br>";

//step 3
/*
$salaries = "CREATE TABLE salaries(
id INT(11) AUTO_INCREMENT PRIMARY KEY,
employee_id INT(11),
amount INT(11),
payment_date DATE
)";

if ($conn->query($salaries) === TRUE) {
    echo "Salaries table created successfully";
} else {
    echo "Error creating salaries table";
}
*/



$fname = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department_id = $_POST['department_id'];
$job_title = $_POST['job_title'];
$hire_date = $_POST['hire_date'];

$depname = $_POST['depname'];

$employee_id = $_POST['employee_id'];
$amount = $_POST['amount'];
$payment_date = $_POST['payment_date'];



$insert1 = "INSERT INTO employees(fname, email, phone, department_id, job_title, hire_date)
VALUES('$fname', '$email', '$phone', '$department_id', '$job_title', '$hire_date')";

if ($conn->query($insert1) === TRUE) {
    echo "Employee inserted successfully";
} else {
    echo "Error 404";
}
echo "<br>";


$insert2 = "INSERT INTO departments(depname) VALUES('$depname')";

if ($conn->query($insert2) === TRUE) {
    echo "Department inserted successfully";
} else {
    echo "Error 404";
}
echo "<br>";


$insert3 = "INSERT INTO salaries(employee_id, amount, payment_date)
VALUES('$employee_id', '$amount', '$payment_date')";

if ($conn->query($insert3) === TRUE) {
    echo "Salary inserted successfully";
} else {
    echo "Error 404";
}

?>
