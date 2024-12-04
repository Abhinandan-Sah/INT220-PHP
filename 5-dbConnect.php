<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "firstPhpDb";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db($dbname);

// Create table
$sql = "CREATE TABLE IF NOT EXISTS abc (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    age INT NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Insert values into the table
$sql = "INSERT INTO abc (name, age) VALUES ('John Doe', 30)";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error inserting record: " . $conn->error . "<br>";
}

// Select values from the table
$sql = "SELECT id, name, age FROM abc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Records in the table:<br>";
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Age: " . $row["age"]. "<br>";
    }
} else {
    echo "0 results<br>";
}

// Delete a record from the table
$sql = "DELETE FROM abc WHERE name='John Doe'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully<br>";
} else {
    echo "Error deleting record: " . $conn->error . "<br>";
}

// Select values from the table after deletion
$sql = "SELECT id, name, age FROM abc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Records in the table after deletion:<br>";
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Age: " . $row["age"]. "<br>";
    }
} else {
    echo "0 results<br>";
}



// Close connection
$conn->close();
?>