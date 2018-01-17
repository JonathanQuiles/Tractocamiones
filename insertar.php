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
echo "Connected successfully";
    

    
$modelo = $_POST["modelo"];
$precio = $_POST["precio"];
$age = $_POST["age"];
$kilometraje = $_POST["kilometraje"];
$descripcion = $_POST["descripcion"];
$marca = $_POST["marca"];
$tipo = $_POST["tipo"];

    
$sql = "INSERT INTO $tbl_name (modelo, precio, age, kilometraje, descripcion, marca, tipo) VALUES ('$modelo', '$precio', '$age', '$kilometraje', '$descripcion', '$marca', '$tipo')";

    
    
if($conn->query($sql) === TRUE){
    echo "Datos guardados";
} else {
    echo "Error" . $sql . "<br>" .$conn->error; 
}


$conn->close();    

?>