<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LibraryDB";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// insert into Authors
$sql = "INSERT INTO Authors (AuthorName, Bio) VALUES ('J.K. Rowling', 'British author, best known for the Harry Potter series.')";
if ($conn->query($sql) === TRUE) {
  echo " Author data inserted successfully.<br>";
} else {
  echo "Error inserting author: " . $conn->error . "<br>";
}

// insert into Books
$sql = "INSERT INTO Books (Title, Publisher, YearPublished, ISBN) VALUES ('Harry Potter and the Philosopher\'s Stone', 'Bloomsbury', 1997, '9780747532699')";
if ($conn->query($sql) === TRUE) {
  echo "Book data inserted successfully.<br>";
} else {
  echo "Error inserting book: " . $conn->error . "<br>";
}


$sql = "INSERT INTO Members (MemberName, Email, Phone_no, Address) VALUES ('Alice Johnson', 'alice@example.com', '1234567890', '123 Maple Street')";
if ($conn->query($sql) === TRUE) {
  echo "Member data  inserted successfully.<br>";
} else {
  echo "Error inserting member: " . $conn->error . "<br>";
}


$sql = "INSERT INTO BookAuthors (BookID, AuthorID) VALUES (1, 1)";
if ($conn->query($sql) === TRUE) {
  echo "BookAuthor inserted successfully.<br>";
} else {
  echo "Error inserting book-author: " . $conn->error . "<br>";
}


$sql = "INSERT INTO Borrowing (BookID, MemberID, BorrowDate, ReturnDate) VALUES (1, 1, '2025-04-01', '2025-04-15')";
if ($conn->query($sql) === TRUE) {
  echo "Borrowing data inserted successfully.<br>";
} else {
  echo "Error inserting borrowing: " . $conn->error . "<br>";
}

$conn->close();
?>
