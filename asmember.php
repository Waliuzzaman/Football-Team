 <?php   
 require 'connection.php';


 if (isset($_POST['Log In']))
$username=mysqli_real_escape_string($conn , $_POST['Email']);
$password=mysqli_real_escape_string($conn , $_POST['password']);

$select_user1="SELECT * FROM `fan` WHERE email='$username' AND password ='$password' ";
$result=mysqli_query($conn,$select_user1);
$check_user= mysqli_num_rows($result);
if($check_user>0)
{
  header('location:index.php');
}
  else
  {
    echo "wrong username or password";
  }
     $conn->close();
 ?>