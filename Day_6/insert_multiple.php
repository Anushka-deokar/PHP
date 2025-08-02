<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LibraryDB";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert into Authors
$sql = "INSERT INTO Authors (AuthorName, Bio) VALUES 
('George Orwell', 'English novelist, famous for 1984 and Animal Farm.'),
('J.R.R. Tolkien', 'English writer, author of The Lord of the Rings.'),
('Agatha Christie', 'British writer known for her detective novels.')";
if ($conn->query($sql) === TRUE) {
  echo "Authors inserted successfully.<br>";
} else {
  echo "Error inserting authors: " . $conn->error . "<br>";
}

// Insert into Books
$sql = "INSERT INTO Books (Title, Publisher, YearPublished, ISBN) VALUES 
('1984', 'Secker & Warburg', 1949, '9780451524935'),
('The Hobbit', 'George Allen & Unwin', 1937, '9780547928227'),
('Murder on the Orient Express', 'Collins Crime Club', 1934, '9780062693662')";
if ($conn->query($sql) === TRUE) {
  echo "Books inserted successfully.<br>";
} else {
  echo "Error inserting books: " . $conn->error . "<br>";
}

// Insert into Members
$sql = "INSERT INTO Members (MemberName, Email, Phone_no, Address) VALUES 
('Bob Smith', 'bob@example.com', '9876543210', '456 Oak Avenue'),
('Charlie Brown', 'charlie@example.com', '8765432109', '789 Pine Road'),
('Diana Prince', 'diana@example.com', '7654321098', '321 Birch Lane')";
if ($conn->query($sql) === TRUE) {
  echo "Members inserted successfully.<br>";
} else {
  echo "Error inserting members: " . $conn->error . "<br>";
}

// Insert into BookAuthors
$sql = "INSERT INTO BookAuthors (BookID, AuthorID) VALUES 
(2, 2),
(3, 3),
(4, 4)";
if ($conn->query($sql) === TRUE) {
  echo "BookAuthors inserted successfully.<br>";
} else {
  echo "Error inserting book-authors: " . $conn->error . "<br>";
}

// Insert into Borrowing
$sql = "INSERT INTO Borrowing (BookID, MemberID, BorrowDate, ReturnDate) VALUES 
(2, 2, '2025-04-02', '2025-04-16'),
(3, 3, '2025-04-03', '2025-04-17'),
(4, 4, '2025-04-04', '2025-04-18')";
if ($conn->query($sql) === TRUE) {
  echo "Borrowing records inserted successfully.<br>";
} else {
  echo "Error inserting borrowing records: " . $conn->error . "<br>";
}

$conn->close();
?>
