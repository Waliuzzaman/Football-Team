<?php
 require 'connection.php';
 
// Escape user inputs for security
$name = mysqli_real_escape_string($conn, $_POST['Name']);
$age = mysqli_real_escape_string($conn, $_POST['Age']);
$country = mysqli_real_escape_string($conn, $_POST['Country']);
$kit_no = mysqli_real_escape_string($conn, $_POST['Kit_No']);
$position = mysqli_real_escape_string($conn, $_POST['Position']);

 
// attempt insert query execution
$sql = "INSERT INTO `player` (`Name`, `Age`, `Country`, `Kit_No`, `Position`) VALUES ('$name', '$age', '$country', '$kit_no', '$position');";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


 mysqli_close($conn);
?>