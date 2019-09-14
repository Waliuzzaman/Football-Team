<?php
 require 'connection.php';
 
$id = mysqli_real_escape_string($conn, $_POST['ID']);
$name = mysqli_real_escape_string($conn, $_POST['Name']);
$password = mysqli_real_escape_string($conn, $_POST['Password']);


 
// attempt insert query execution
$sql6 = "INSERT INTO `users` (`id`, `username`, `password`) VALUES ('$id', '$name', '$password');";
if(mysqli_query($conn, $sql6)){
    echo "Records added successfully.";
} else{
    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


// close connection
mysqli_close($conn);
?>