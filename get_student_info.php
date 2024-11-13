<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sqldata";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   
}

$roll = $_POST["roll"];
$registration = $_POST["registration"];

$sql = "SELECT `name` FROM `sqldata` WHERE `roll` = $roll AND `reg` = $registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Student Name: " . $row["name"]; 
    print("<br>");
    print("roll is: $roll <br>");
    print("reg no : $registration <br>");

    
    
} else {
    echo "No student found with the provided roll and registration number.";
}

$conn->close();
?>
