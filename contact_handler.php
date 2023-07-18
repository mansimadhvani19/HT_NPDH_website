<?php
    require_once "config.php";


    // $conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
    
    // if(!$conn){
    //     die("Connection to the database failed die to ". mysqli_connect_error());
    // }
    $Name = $conn->real_escape_string($_POST['name']);
    $Email_Id = $conn->real_escape_string($_POST['email']);
    $Message = $conn->real_escape_string($_POST['message']);

$query = "INSERT into contact(name,email,message) VALUES('$Name','$Email_Id','$Message')";
$success = $conn->query($query);

if (!$success){
  die("Couldnt enter data: ".$conn->error);
}
else{
    header("location: index.php");
}

$conn->close();

?>
