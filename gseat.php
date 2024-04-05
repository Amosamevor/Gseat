<?php
$servername = "localhost";
$username = "username"; // Change this
$password = "password"; // Change this
$dbname = "gseat_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
error_reporting(E_ALL);
ini_set('display_errors', 1);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement
$sql = "INSERT INTO reservations (firstName, lastName, otherName, gender, height, ageGroup, healthConditions, medications, allergies, dietaryRestrictions, nationality, country, residentialAddress, postalAddress, maritalStatus, profession, email, emergencyContactName, emergencyContactPhone, personalPhone, bookingDate, bookingTime, purpose, numSeats, rating, agreement) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Bind parameters and execute the statement
$stmt->bind_param("ssssisssssssssssssssssssssi", $firstName, $lastName, $otherName, $gender, $height, $ageGroup, $healthConditions, $medications, $allergies, $dietaryRestrictions, $nationality, $country, $residentialAddress, $postalAddress, $maritalStatus, $profession, $email, $emergencyContactName, $emergencyContactPhone, $personalPhone, $bookingDate, $bookingTime, $purpose, $numSeats, $rating, $agreement);

// Get form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$otherName = $_POST['otherName'];
$gender = $_POST['gender'];
$height = $_POST['height'];
$ageGroup = $_POST['ageGroup'];
$healthConditions = $_POST['healthConditions'];
$medications = $_POST['medications'];
$allergies = $_POST['allergies'];
$dietaryRestrictions = $_POST['dietaryRestrictions'];
$nationality = $_POST['nationality'];
$country = $_POST['country'];
$residentialAddress = $_POST['residentialAddress'];
$postalAddress = $_POST['postalAddress'];
$maritalStatus = $_POST['maritalStatus'];
$profession = $_POST['profession'];
$email = $_POST['email'];
$emergencyContactName = $_POST['emergencyContactName'];
$emergencyContactPhone = $_POST['emergencyContactPhone'];
$personalPhone = $_POST['personalPhone'];
$bookingDate = $_POST['date'];
$bookingTime = $_POST['time'];
$purpose = $_POST['purpose'];
$numSeats = $_POST['numSeats'];
$rating = $_POST['rating'];
$agreement = isset($_POST['agreement']) ? 1 : 0;

// Execute the statement
if ($stmt->execute()) {
    echo "Reservation saved successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
