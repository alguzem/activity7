# Robotics Courses Management System

## Project Description

This project is a Laravel-based application designed to manage robotics courses, groups, and robotics kits used in educational programs.
It allows administrators and teachers to organize courses and assign robotics kits to support learning activities.

The system includes:

* User management
* Course management
* Robotics kits
* Group-course relationships
* Database seeders and factories for testing data

## ER Diagram
<img width="1176" height="523" alt="ER_diagram" src="https://github.com/user-attachments/assets/f518e8d1-3f6d-4825-a5cd-f5a438fdb8b0" />

Entities included in the system:

Users
Groups
Courses
Robotics Kits
Group_Courses (pivot table)

Relationships:

* A **Course** belongs to a **Robotics Kit**
* A **Course** can belong to many **Groups**
* A **Group** can have many **Courses**

ER Diagram structure:

Users
│
Groups
│
Group_Courses
│
Courses
│
Robotics_Kits
