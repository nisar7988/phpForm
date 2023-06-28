<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "form"; // Replace with your actual database name
$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
    die("Connection to the database failed: " . mysqli_connect_error());
}

$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$email = $_POST['email'] ?? '';
$relationship = $_POST['Relationship'] ?? '';
$gender = $_POST['gender'] ?? '';
$food = $_POST['food'] ?? '';
$drink = $_POST['drink'] ?? '';
$movie = $_POST['movie'] ?? '';
$hate = $_POST['hate'] ?? '';
$love = $_POST['love'] ?? '';
$message = $_POST['message'] ?? '';

$sql = "INSERT INTO `funform` (`firstName`, `lastName`, `email`, `relationship`, `gender`, `food`, `drink`, `movie`, `hate`, `love`, `message`) VALUES ('$firstName', '$lastName', '$email', '$relationship', '$gender', '$food', '$drink', '$movie', '$hate', '$love', '$message')";

if (mysqli_query($con, $sql)) {
   
} else {
    echo "Error inserting data: " . mysqli_error($con);
}

mysqli_close($con);
?>

