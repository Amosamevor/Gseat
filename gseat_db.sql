CREATE DATABASE IF NOT EXISTS gseat_db;

USE gseat_db;

CREATE TABLE IF NOT EXISTS reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    otherName VARCHAR(30),
    gender ENUM('male', 'female', 'other') NOT NULL,
    height INT NOT NULL,
    ageGroup ENUM('child', 'adult', 'senior') NOT NULL,
    healthConditions TEXT,
    medications VARCHAR(30),
    allergies VARCHAR(30),
    dietaryRestrictions VARCHAR(30),
    nationality VARCHAR(30),
    country VARCHAR(30),
    residentialAddress VARCHAR(30),
    postalAddress VARCHAR(30),
    maritalStatus ENUM('single', 'married', 'divorced', 'widowed'),
    profession VARCHAR(30),
    email VARCHAR(30) NOT NULL,
    emergencyContactName VARCHAR(30),
    emergencyContactPhone VARCHAR(20),
    personalPhone VARCHAR(20),
    bookingDate DATE NOT NULL,
    bookingTime TIME NOT NULL,
    purpose TEXT,
    numSeats INT NOT NULL,
    rating INT,
    agreement TINYINT(1) NOT NULL
);
