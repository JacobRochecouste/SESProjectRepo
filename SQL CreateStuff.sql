CREATE DATABASE IF NOT EXISTS TeleHealth;
USE TeleHealth;
CREATE TABLE Users (
    FirstName varchar(100) NOT NULL,
    LastName varchar(100) NOT NULL,
    Email varchar(100) NOT NULL PRIMARY KEY,
    PhoneNo varchar(15) NOT NULL,
    Address varchar(100) NOT NULL,
    Pass varchar(100) NOT NULL,
    UserType enum('patient', 'doctor'),
    DoctorID INT UNSIGNED
);

CREATE TABLE MedSubscriptions (
	SessionID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    PatFirstName varchar(100) NOT NULL,
    PatLastName varchar(100) NOT NULL,
    PatEmail varchar(100) NOT NULL,
    DocFirstName varchar(100) NOT NULL,
    DocLastName varchar(100) NOT NULL,
    DocEmail varchar(100) NOT NULL,
    DocPhoneNo varchar(15) NOT NULL,
    DocID INT UNSIGNED,
    ConsultationSummary longtext NOT NULL,
    DocNotes longtext NOT NULL,
    TreatmentMethod longtext NOT NULL
);
