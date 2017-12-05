<?php 
      include('config.php');
      require_once('includes/contactmsg.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/page.css" />
<title>Contact | Muselord</title>
</head>

<body>
<div class="container">
  <div class="header"> 
    <!-- end .header --></div>
  <ul class="tabs">
  <li><a href="index.php">Home</a></li>
  <li><a href="yrtw.php">Your Right to write</a></li>
  <li><a href="mybooks.php">My Books</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="contact.php">Contact</a></li>
  </ul> 
  
  <div class="content">
     <div id="contacttop">Contact me</div>
  <div id="contactarea">
    <span style="color:#666666; font-family:'fontin',Verdana; font-style:italic;"  >
    Please Contact me through any of the following channels  under listed below to ask any question or make an enquiry
    </span>
    <br />
    <br />
    Email: <a href="" class="conlink">pelihon@gmail.com</a><br />
    Twitter: <a href="" class="conlink">lordofmuse</a><br />
    Facebook Profile: <a href="" class="conlink">tea.jeremiah</a><br />
    Facebook Page: <a href="" class="conlink">Haven of Intellect</a><br />
    Google+: <a href="" class="conlink">pelihon</a><br />
    phone number: <a href="" class="conlink">+2349032249689</a>
    <br />
    <br />
    <p>OR <i>contact me directly through my website using the form below</i></p>
    <?php
    if(!empty($successmsg)){
		echo "<div id=\"contsuccessbox\">".$successmsg."</div>";
		}
	elseif(!empty($dbinserterr)){
		    echo "<div id=\"conterrorbox\">".$dbinserterr."</div>";
			}
	?>
    <form id="contactf" method="post" action="">
    <label id="name">Name:</label>
    <input type="text" class="cinput" name="name" placeholder="Enter your name" value="<?php if(!empty($sender)){echo $sender;}?>" /><br />
    <?php if(!empty($smsg)){echo "<span class=\"cerrormsg\">".$smsg."</span><br />";}?>
    <label id="email">Email:</label>
    <input type="email" class="cinput" name="email" placeholder="Enter your email" value="<?php if(!empty($email)){echo $email;}?>" /><br />
    <?php if(!empty($emsg)){echo "<span class=\"cerrormsg\">".$emsg."</span><br />";}?>
	<label id="subject">Subject:</label>
    <input type="text" class="subinput" name="subject" placeholder="Enter message subject" value="<?php if(!empty($csubject)){echo $csubject;}?>" /><br />
    <?php if(!empty($submsg)){echo "<span class=\"cerrormsg\">".$submsg."</span><br />";}?>
    <label id="message">Message:</label><br />
    <textarea name="msg" id="msgbox" cols="50" rows="10"><?php if(!empty($message)){echo $message;}?></textarea><br />
    <?php if(!empty($mmsg)){echo "<span class=\"cerrormsg\">".$mmsg."</span><br />";}?>
    <input type="submit" name="submit" id="contbut" value="Send Message" />
    </form>
    
      <!-- end #contactarea --></div>
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
