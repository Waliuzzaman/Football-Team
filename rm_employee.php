<?php
 require 'connection.php';
 
// Escape user inputs for security
$employee_id = mysqli_real_escape_string($conn, $_POST['Employee_ID']);
 
// attempt insert query execution
$sql3 = "DELETE FROM `employee` WHERE ID=$employee_id";
if(mysqli_query($conn, $sql3)){
    echo "Record deleted successfully.";
} else{
    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

 mysqli_close($conn);
?>