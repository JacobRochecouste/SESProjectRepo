CREATE DATABASE IF NOT EXISTS TeleHealth;
USE TeleHealth;
CREATE TABLE Users (
	UserID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    FirstName varchar(100) NOT NULL,
    LastName varchar(100) NOT NULL,
    Email varchar(100) NOT NULL,
    PhoneNo varchar(15) NOT NULL,
    Address varchar(100) NOT NULL,
    Pass varchar(100) NOT NULL,
    PersonType enum('patient', 'doctor'),
    DoctorID INT UNSIGNED
);

CREATE USER 'site'@'localhost' IDENTIFIED BY 'securepassword';
GRANT INSERT, DELETE, SELECT, UPDATE ON TeleHealth.* TO 'site'@'localhost';