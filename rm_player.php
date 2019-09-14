<?php
 require 'connection.php';
 
// Escape user inputs for security
$kit_no = mysqli_real_escape_string($conn, $_POST['Kit_No']);
 
// attempt insert query execution
$sql3 = "DELETE FROM `player` WHERE Kit_No=$kit_no";
if(mysqli_query($conn, $sql3)){
    echo "Record deleted successfully.";
} else{
    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

 mysqli_close($conn);
?>