<?php
 require 'connection.php';


$match_id=mysqli_real_escape_string($conn, $_POST['Match_ID']);
$date = mysqli_real_escape_string($conn, $_POST['Date']);
$time = mysqli_real_escape_string($conn, $_POST['Time']);
$opponent = mysqli_real_escape_string($conn, $_POST['Opponent']);
$venue = mysqli_real_escape_string($conn, $_POST['Venue']);
$home_away = mysqli_real_escape_string($conn, $_POST['Home/Away']);


 
// attempt insert query execution
$sql4 = "INSERT INTO `fixtures` (`Match_ID`, `date`, `time`, `opponent`, `Venue`, `Home_Away`) VALUES ('$match_id', '$date', '$time', '$opponent', '$venue', '$home_away');";
if(mysqli_query($conn, $sql4)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


// close connection
mysqli_close($conn);
?>