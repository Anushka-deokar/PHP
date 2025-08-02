<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LibraryDB";



$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Authors 
$sql = "CREATE TABLE Authors (
    AuthorID INT AUTO_INCREMENT PRIMARY KEY,
    AuthorName VARCHAR(100) NOT NULL,
    Bio TEXT)";
$conn->query($sql);


// Books 
$sql = "CREATE TABLE Books (
    BookID INT AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(255) NOT NULL,
    Publisher VARCHAR(255),
    YearPublished YEAR,
    ISBN VARCHAR(20) UNIQUE)";
$conn->query($sql);

// Members 
$sql = "CREATE TABLE Members (
    MemberID INT AUTO_INCREMENT PRIMARY KEY,
    MemberName VARCHAR(100) NOT NULL,
    Email VARCHAR(100) UNIQUE,
    Phone_no VARCHAR(15),
    Address TEXT)";
$conn->query($sql);

// BookAuthors 
$sql = "CREATE TABLE BookAuthors (
    BookAuthorID INT AUTO_INCREMENT PRIMARY KEY,
    BookID INT,
    AuthorID INT,
    FOREIGN KEY (BookID) REFERENCES Books(BookID) ON DELETE CASCADE,
    FOREIGN KEY (AuthorID) REFERENCES Authors(AuthorID) ON DELETE CASCADE)";
$conn->query($sql);

// Borrowing 
$sql = "CREATE TABLE Borrowing (
    BorrowingID INT AUTO_INCREMENT PRIMARY KEY,
    BookID INT,
    MemberID INT,
    BorrowDate DATE,
    ReturnDate DATE,
    FOREIGN KEY (BookID) REFERENCES Books(BookID) ON DELETE CASCADE,
    FOREIGN KEY (MemberID) REFERENCES Members(MemberID) ON DELETE CASCADE)";
$conn->query($sql);

echo "All tables created successfully!";

$conn->close();
?>

