<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "tractocamiones";
$tbl_name = "caracteristicas";
    

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*echo "Connected successfully";*/



$sel = mysqli_query($conn,"select * from $tbl_name");
$data = array();

while ($row = mysqli_fetch_array($sel)) {
 $data[] = array("modelo"=>$row['modelo'],"precio"=>$row['precio'],"tipo"=>$row['tipo']);
}
echo json_encode($data);


?>