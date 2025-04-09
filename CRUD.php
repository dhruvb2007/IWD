<?php

$host = "localhost";
$user = "root";
$pass = "";
$databse = "test";
$conn = mysqli_connect($host, $user, $pass, $database);

// INSERT
$name = "Dhruv";
$sql = "INSERT INTO users (name) VALUES ('$name')";
mysqli_query($conn, $sql);

// SELECT
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['name'] . "<br>";
}

// UPDATE
$sql = "UPDATE users SET name='Dhruv Updated' WHERE id=1";
mysqli_query($conn, $sql);

// DELETE
$sql = "DELETE FROM users WHERE id=1";
mysqli_query($conn, $sql);

mysqli_close($conn);


?>