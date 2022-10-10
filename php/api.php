<?php

/* 
MySQL server connection.
*/

$servername = "p3plzcpnl471654";
$username = "jrome";
$password = "jdb2021!pass";
$dbname = "js_students";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>"."<td>". $row["id"]. "</td>". "<td>".  $row["firstname"].  "</td>". "<td>". $row["lastname"]. "</td>". "<td>". $row["emailname"]. "<td>".  $row["phonenum"]. "</td>". "<td>".  $row["password"].  "</td>". "<td>".  $row["coursename"]."</td>". "</tr>"."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>
