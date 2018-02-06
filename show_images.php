<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "tractocamiones";
    

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
    

$sql = "SELECT file_name FROM images ORDER BY id DESC";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$total_records = '';

while($record = mysqli_fetch_array($resultset)) {
    $total_records[] = $record;
}

echo json_encode($total_records);

$conn->close();    

?>