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
	FormID INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    PatFirstName varchar(100) NOT NULL,
    PatLastName varchar(100) NOT NULL,
    PatEmail varchar(100) NOT NULL,
    DocFirstName varchar(100) NOT NULL,
    DocLastName varchar(100) NOT NULL,
    DocEmail varchar(100) NOT NULL,
    DocPhoneNo varchar(15) NOT NULL,
    DocID INT UNSIGNED,
    ConsultType varchar(100) NOT NULL,
    BookingID varchar(20) NOT NULL UNIQUE,
    ConsultationSummary longtext NOT NULL,
    DocNotes longtext NOT NULL,
    TreatmentMethod longtext NOT NULL,
    CreationDate date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1000;

CREATE TABLE Drugs (
  DrugID int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  DrugName varchar(100) NOT NULL,
  PrescriptionCause varchar(150)  NOT NULL,
  DrugDose varchar(10) NOT NULL,
  DrugFreq varchar(100) NOT NULL,
  DrugType varchar(100) NOT NULL,
  DrugEffects varchar(150)  NOT NULL,
  DrugPrice decimal(6,2) NOT NULL,
  DrugStock int UNSIGNED NOT NULL
);

CREATE TABLE IssueList (
  IssueID int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  IDName varchar(100) NOT NULL,
  IssueNote varchar(250) NOT NULL
);