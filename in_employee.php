<?php
 require 'connection.php';
 
$employee_name = mysqli_real_escape_string($conn, $_POST['Name']);
$employee_post = mysqli_real_escape_string($conn, $_POST['Post']);
$employee_ID = mysqli_real_escape_string($conn, $_POST['ID']);

 
// attempt insert query execution
$sql1 = "INSERT INTO `employee` (`ID`, `Name`, `Post`) VALUES ('$employee_ID', '$employee_name', '$employee_post');";
if(mysqli_query($conn, $sql1)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}


// close connection
mysqli_close($conn);
?>