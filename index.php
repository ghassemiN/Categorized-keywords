<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "randomWords";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//conection to table
$categoryName = $_POST["category"];
$sql = "SELECT * FROM words WHERE category = '$categoryName' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["word"]."". "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>

