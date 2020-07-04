<?php

$servername = "localhost";
$username = "username";
$password = "";
$dbname = "vibe";

// create a connection

$conn = new mysqli ('localhost', 'username', '', 'vibe');

// check connection
if ($conn->connect_error) {
    die ("Connection failed:" . $conn->connect_error);
}

$sql = "SELECT `id`, `code`, `countrycode`, `name` FROM `airports`";
$result = $conn->query ($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "code:" . $row["code"]. "- code:" . $row["countrycode"]. "-countrycode" . $row["name"]. "-name" ."
        <br>";
    }
}else {
    echo "0 results";
}

mysqli_close($conn);


?>