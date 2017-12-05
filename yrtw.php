<?php 
      include('config.php');
	  include('includes/functions.php');
      require_once('includes/bookoffer.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/page.css" />
<title>Your Right To Write | Muselord</title>
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
     <div id="yrtwtop">Your Right to Write</div>
  <div id="yrtwcontent">
   If your dream is to become a writer, this free e-book is available here to facilitate that dream.<br />
   <p>You may be intimidated by the uncertainties and fears that obstacle your course. This book is here to motivate and energize your passion.<p>   <br />
    IT'S ALL YOURS FOR FREE<br /> 
    <span style="font-style:italic; color:#FFCC00;">written by Mohammad Abdullahi Tosin</span> <br />
    <dd>
    <dt>It offers AWESOME TIPS on &rarr;</dt>
    <dl>&rArr;writing</dl> <dl>&rArr;blogging</dl> <dl>&rArr;publishing</dl> <dl>&rArr;essay competitions , e.t.c.</dl>
    </dd>
    <br />
    If you want this book, kindly enter your email in the form below to get the book delivered instantly into your box for FREE. &dArr;
	
    <p>&nbsp;</p>
    
	<?php if(!empty($yrtwsuccess)){echo "<div id=\"yrtwsuccessbox\"><p>".$yrtwsuccess."</p></div>";}?>
    <?php if(!empty($yrtwexists)){echo "<div id=\"yrtwexists\"><p>".$yrtwexists."</p></div>";}?>
    <div id="yrtwformcon">
	<p><u>Exclusive offers and inspiration delivered directly to your inbox.</u></p>
	
      <form id="yrtwform" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
      <input type="email" id="yinput" name="yrtwemail" placeholder="Enter your email address" />
      <input type="submit" name="submit" id="yrtwbut" value="Get Package Now!" />
      </form>
    </div>
    
  <!-- end #yrtwcontent --></div>
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
