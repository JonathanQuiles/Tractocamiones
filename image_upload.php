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
    



if(!empty($_FILES['file']['name']))  
 {  
      $path = 'upload/' . $_FILES['file']['name'];
      $filename = $_FILES['file']['name'];
    
      if(move_uploaded_file($_FILES['file']['tmp_name'], $path))  
      {  
           $insert_sql = "INSERT INTO images(file_name) VALUES ('".$filename."')";
           if(mysqli_query($conn, $insert_sql))  
           {  
                echo 'File Uploaded';  
           }  
           else  
           {  
                echo 'File Uploaded But not Saved';  
           }  
      }  
 }  
 else  
 {  
      echo 'Some Error';  
 }  






/*
foreach($_FILES['file']['name'] as $key=>$val){
$upload_dir = "upload/";
$upload_file = $upload_dir.$_FILES['file']['name'][$key];
$filename = $_FILES['file']['name'][$key];
    
if(move_uploaded_file($_FILES['file']['tmp_name'][$key],$upload_file)){

    $insert_sql = "INSERT INTO images(file_name) VALUES ('".$filename."')";
    mysqli_query($conn, $insert_sql) or die("database error: ". mysqli_error($conn));
    }
}

echo 'File uploaded and saved in database successfully.';
*/

$conn->close();    

?>