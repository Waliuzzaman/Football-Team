<?php
 require 'connection.php';
 
$date = mysqli_real_escape_string($conn, $_POST['Date']);
$headline = mysqli_real_escape_string($conn, $_POST['Headline']);
$details = mysqli_real_escape_string($conn, $_POST['Details']);


 
// attempt insert query execution
$sql2 = "INSERT INTO `news` (`date`, `headline`, `details`) VALUES ('$date', '$headline', '$details')";
if(mysqli_query($conn, $sql2)){
    echo "Records added successfully.";
} else{
    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


// close connection
mysqli_close($conn);
?>