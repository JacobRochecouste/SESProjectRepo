# Software Engineering Studio 1A - TeleHealth (Group 2)
## **Please Download XAMPP and Node.JS**
- **Installation instructions can be found in the User Manual if you do not know how to**
- **The website is currently in release v1.0.0 and the User Manual is in v1.0**
 
## Project Scope
 This project is is an web application serving the purpose of an online medical healthcare system designed for use by patients and doctors.

## User Functions
Refer to the User Story Map (https://lucid.app/publicSegments/view/577f0566-b522-486e-ad99-e45fc329764a/image.png) 
<p align="justify">

- Two User Types: Patients and Doctors that are accessed through registration and login forms 

- Patients must be able to book online consultations (normal or urgent) with doctors, find medical clinics near their location, and chat with doctors in real time.

- Doctors must be able to fill out medical subscriptions for patients, view available drugs for prescription to patients, and chat with patients in real time.

- Both users must be able to update their details through changing their user settings, and reset their password.
</p>

### Team Members
Project Leader and Scrum Master - Jacob Rochecouste

Business Analyst and Programmer - Justin Chin Wei Kit

Business Analyst and Programmer - William Susanto

Back-end Developer and Programmer - Ivan David

Application Safety Tester and Programmer - Richie Nguyen

 
### Programming and Scripting Languages
**Front End** - 
HTML, CSS & JavaScript

**Back End** - 
php & mySQL

**Database** - 
db4free.net
- To connect to our databse please view the user manual.

### Links to Documents Created and Used During Development
Trello Board: https://trello.com/b/ZqFXfiZC

Class Diagram: https://drive.google.com/file/d/1FcV3H_jev1H1qGk1p7xNNveVUJEJymrv/view

Entity Relationship Diagram: https://drive.google.com/file/d/1Bjb_ht3YLoCI98uuCv-QD5k16jOSBNgl/view

Context Diagram: https://drive.google.com/file/d/1IkbdlTCcXN7RSSRO-8AuZmhBT4vXu8Ct/view

### Naming Conventions
<p align="justify">

- Files with the suffix **Handler** are pages containing only php code to perform server side actions such as retrieving or posting data into the database

- Files which have either suffixes or prefixes of **pat** or **patient** are patient specific pages

- Files which have either suffixes or prefixes of **doc** or **doctor** are docotr specific pages

- Files with the extension .png or .jpg were the images used in the website

- The file named SQL CreateStuff.sql will not actually run by itself, it is merely a copy of the intilization to create tables in the database either in MySQL Workbench or in the database host itself

- The file with the suffix **-report** is the FPDF file which uses **composer.json** to install FPDF into the repository to utilize FPDF code to generate the PDF File

- The CSS file used for this website is named **stylesheet1.css**

- The TeleHealth Chat folder contains **only** code for the chat function in the website
</p>
