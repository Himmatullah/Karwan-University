CREATE DATABASE IF NOT EXISTS UniversityDB
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE UniversityDB;

-- 1. Users
CREATE TABLE Users (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(50) NOT NULL UNIQUE,
    PasswordHash VARCHAR(255) NOT NULL,
    Role VARCHAR(20) NOT NULL,
    CreatedAt DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB;

-- 2. Departments
CREATE TABLE Departments (
    DepartmentID INT AUTO_INCREMENT PRIMARY KEY,
    DepartmentName VARCHAR(100) NOT NULL UNIQUE,
    Description VARCHAR(255)
) ENGINE = InnoDB;

-- 3. Teachers
CREATE TABLE Teachers (
    TeacherID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Email VARCHAR(100) NOT NULL UNIQUE,
    Phone VARCHAR(20),
    DepartmentID INT NOT NULL,

    CONSTRAINT FK_Teachers_Departments
        FOREIGN KEY (DepartmentID)
        REFERENCES Departments(DepartmentID)
) ENGINE = InnoDB;

-- 4. Students
CREATE TABLE Students (
    StudentID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Email VARCHAR(100) NOT NULL UNIQUE,
    DateOfBirth DATE,
    DepartmentID INT NOT NULL,

    CONSTRAINT FK_Students_Departments
        FOREIGN KEY (DepartmentID)
        REFERENCES Departments(DepartmentID)
) ENGINE = InnoDB;

-- 5. Courses
CREATE TABLE Courses (
    CourseID INT AUTO_INCREMENT PRIMARY KEY,
    CourseName VARCHAR(100) NOT NULL,
    CreditHours TINYINT NOT NULL,
    DepartmentID INT NOT NULL,

    CONSTRAINT FK_Courses_Departments
        FOREIGN KEY (DepartmentID)
        REFERENCES Departments(DepartmentID)
) ENGINE = InnoDB;

-- 6. Enrollment
CREATE TABLE Enrollment (
    EnrollmentID INT AUTO_INCREMENT PRIMARY KEY,
    StudentID INT NOT NULL,
    CourseID INT NOT NULL,
    EnrollmentDate DATE NOT NULL DEFAULT (CURRENT_DATE),
    Semester VARCHAR(20) NOT NULL,
    AcademicYear VARCHAR(9) NOT NULL,
    Grade VARCHAR(2),

    CONSTRAINT FK_Enrollment_Students
        FOREIGN KEY (StudentID)
        REFERENCES Students(StudentID),

    CONSTRAINT FK_Enrollment_Courses
        FOREIGN KEY (CourseID)
        REFERENCES Courses(CourseID),

    CONSTRAINT UQ_Enrollment_Student_Course_Semester
        UNIQUE (StudentID, CourseID, Semester, AcademicYear)
) ENGINE = InnoDB;