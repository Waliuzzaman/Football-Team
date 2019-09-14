<?php
    require 'connection.php';
    $sql="SELECT * FROM `news` ORDER BY date";
    $result=$conn->query($sql);
 ?>

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
        <li class="current"><a href="news.php">News</a></li>
        <li><a href="login.php">Log in</a></li>
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
         <h2 style="text-align:center"><strong><ins>News Update</ins></strong><ins></h2>  
          <br>
           <hr>
           <hr>


           <p>

         <?php

          if ($result->num_rows > 0) {
    // output data of each row
              //echo "";
           while($row = $result->fetch_assoc()) {
              echo  "<strong><ins>Date: </strong></ins>".$row["date"]."<br><br>"."<strong><ins>Headline: </strong></ins>" .$row["headline"]."<br><br>".$row["details"]."<br><br>";
                 }
                 //echo "</table>";
                 // echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
   // }
    //echo "</table>";
                  }
              else {
            echo "0 results";
            }   
         
    $conn->close();
      ?>

      </p>




           
			  
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
