<H1>CFME Demo </H1>
Table of customers and cities: <br/>
<?php
$servername = $_ENV["DEMOPSQLSERVER"];
$username = $_ENV["DEMOPSQLUSER"];
$password = $_ENV["DEMOPSQLPW"];
$dbname = "classicmodels";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT customerName,city FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Customer Name:  ". $row["customerName"] ." - City: " . $row["city"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

