<?php
include('config.php');
include('includes/checklink.php');
include('includes/functions.php');
require('includes/comment.php');
?>
<?php

	$pagetitle ="Page not found | Muselord";
	
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="" />
<title><?php echo htmlspecialchars( $pagetitle ); ?></title>
<link rel="stylesheet" href="css/page.css" />
</head>

<body>
<div class="header"> 
<!-- end .header --></div>
<div class="container">

  <ul class="tabs">
  <li><a href="index.php">Home</a></li>
  <li><a href="yrtw.php">Your Right to write</a></li>
  <li><a href="mybooks.php">My Books</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="contact.php">Contact</a></li>
  </ul>  
  
   <div class="content">
  
		    <div class="h1hide">Pae not found<h1></h1></div>
			 <div id="maincontent">      
		     <div id="atitle">Page not found</div>
			 <p></p>
             Surfing the web
			 </div><!--end #maincontent-->
   
    <!-- end .content --></div>
	<div class="sidenav">
    
    <div class="navcontainer">
     <div class="navtitle">Order for my Books</div>
	 <div class="eachnav">
     Get any of my books either free or paid
     <!-- end .eachnav --></div>
   <!-- end .navcontainer --></div>
   
   <div class="navcontainer">
     <div class="navtitle">Facebook likes</div>
	 <div class="eachnav">
     The following people like us on facebook
     <br />
     <img src="images/aa.jpg" />
	 <img src="images/ab.jpg" />
	 <img src="images/al.jpg" />
	 <img src="images/ad.jpg" />
	 <img src="images/ae.jpg" />
	 <img src="images/af.jpg" />
	 <img src="images/ag.jpg" />
	 <img src="images/ah.jpg" />
	 <img src="images/aj.jpg" />
	 <img src="images/ak.jpg" />
     <!-- end .eachnav --></div>
   <!-- end .navcontainer --></div>
   
  <!-- end .sidenav --></div>
  
    <div class="advert">
    <p> place advert here</p>
    <!-- end .sidebar1 --></div>
  <div class="footer">
    <center>&copy;Copyright Barry J. All right reserved . </center>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>