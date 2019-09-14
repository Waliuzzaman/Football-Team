<?php
 require 'connection.php';
 // Escape user inputs for security
$new_age= mysqli_real_escape_string($conn, $_POST['New_Age']);
$kit_no= mysqli_real_escape_string($conn, $_POST['kit_no']); 
// attempt insert query execution
$sql5 = "UPDATE `player` SET Age=$new_age WHERE Kit_No=$kit_no ";
if(mysqli_query($conn, $sql5)){
    echo "Record Updated successfully.";
} else{
   // echo "ERROR: Could not able to execute $sql5. " . mysqli_error($conn);
}

 mysqli_close($conn);
?>