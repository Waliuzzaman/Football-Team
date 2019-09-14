<?php
 require 'connection.php';
 
$employee_name = mysqli_real_escape_string($conn, $_POST['Name']);
$employee_post = mysqli_real_escape_string($conn, $_POST['Post']);

 
// attempt insert query execution
$sql1 = "INSERT INTO empolyee (Name, Post) VALUES ('$employee_name', '$employee_post')";
if(mysqli_query($conn, $sql1)){
    echo "Records added successfully.";
} else{
    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


// close connection
mysqli_close($conn);
?>