


<?php include "connection.php" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>ARaynorDesign Template</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
</head>

<body>
  <div id="main">

	<div id="menubar">
      <ul id="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="ourteam.php">Our Team</a></li>
        <li><a href="fixture.php">Fixture</a></li>
        <li><a href="news.php">News</a></li>
        <li class="current"><a href="login.php">Log in</a></li>
      </ul>
    </div><!--close menubar-->	

    <div id="slideshow">
	  <ul class="slideshow">
        <li class="show"><img width="920" height="250" src="images/home_1.jpg" alt="&quot;Enter your caption here&quot;" /></li>
        <li><img width="920" height="250" src="images/home_2.jpg" alt="&quot;Enter your caption here&quot;" /></li>
      </ul> 
    </div><!--close slidesho-->		  
	
	<div id="header">
	  <div id="banner">
	    <div id="welcome">
	      <h1>MANCHESTER UNITED</h1>
	    </div><!--close welcome-->
	  </div><!--close banner-->
    </div><!--close header-->  
	
	<div id="site_content"> 	
	
	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">

          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">   
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->   
        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Contact</h2>
            <h3>Phone: +44 (0)1234 567891</h3>
            <h3>Email: <a href="md.kaif837@gmail.com">manu@gmail.com</a></h3>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	
      <div id="content">
        <div class="content_item">
          <h2><ins>Sign up if you are not a member!!</ins></h2>
            <div class="content_container">       
			  <form action="add_member.php" method="POST">
  					<label>Name*</label><br>
  					<input type="text" name="suName" placeholder="your name" ></input><br>
  					<label>Phone Number*</label><br>
  					<input type="text" name="suPhoneNumber" placeholder="your phone number"  ></input><br>
  					<label>Email*</label><br>
  					<input type="text" name="suMail" placeholder="your mail id"></input><br>
  					<label>Password*</label><br>
  					<input type="passwod" name="suPassword" placeholder="password"></input><br>
  					<input  type="submit" name="submit" value="Submit"></input><br>
				</form>
            </div><!--close content_container-->
            <div class="content_container">			  
			  	<h2><ins>Sign In As Admin</ins></h2>
				<form action="update.php" method="POST">
					<label>Username</label><br>
					<input type="text" type="username" name="username" ></input><br>
					<label>Password</label><br>
					<input type="password" type="password" name="password" ></input><br>
					<input  type="submit" name="sign in" value="Sign In"></input><br>
				</form>

        <br>



			 </div><!--close content_container-->
            <div class="content_container"> 
            <h2><ins>Sign In As Member</ins></h2>
        <form action="asmember.php" method="POST">
          <label>Email</label><br>
          <input type="text" type="username" name="Email" ></input><br>
          <label>Password</label><br>
          <input type="password" type="password" name="password" ></input><br>
          <input  type="submit" name="Log In" value="Log In"></input><br>
        </form>      
			  
            </div><!--close content_container-->
            <div class="content_container">			  
			  
			</div><!--close content_container-->
	    </div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 

	<div id="content_grey">
	  <div class="content_grey_container_box">
		
	  </div><!--close content_grey_container_box-->
      <div class="content_grey_container_box">
       
	  </div><!--close content_grey_container_box-->
      <div class="content_grey_container_boxl">
		
	  </div><!--close content_grey_container_box1-->      
	  <br style="clear:both"/>
    </div><!--close content_grey-->   
 
  </div><!--close main-->
  
  <h2 style="text-align:center">Copyright 2016, MANCHESTER UNITED<ins>  
</body>
</html>

<?php   
 require 'connection.php';

 if (isset($_POST['Sing In']))
$username=mysqli_real_escape_string($conn , $_POST['username']);
$password=mysqli_real_escape_string($conn , $_POST['password']);

$select_user="SELECT * FROM users WHERE username='$username' AND password='$password' ";
$result=mysqli_query($conn,$select_user);
$check_user= mysqli_num_rows($result);
if($check_user>0)
{
  header('location:update.php');
}
  else
  {
    echo "wrong username or password";
  }
   $conn->close();

?>





