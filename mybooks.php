<?php 
      include('config.php');
	  include('includes/functions.php');
      require_once('includes/bookreq.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/page.css" />
<title>Get my books | Muselord</title>
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
    <div id="booktop">Request for your own copy of my book</div>
  <div id="maincontent">
  Here is a collection of my works
  
  <p>PROSE WORKS:</p>
  <p><i>kiss of life</i></p>
  <p><i>Battle Scars</i></p>
  <p><i>The Incest(Still under construction)</i></p>
  <p>POETRY COLLECTION:</p>
  <p><i>The Reminiscence</i></p><br />
  
    To get any of these for free, kindly fill the form box below to get this book delivered right into your inbox as an attachment.
	<br />OR<br />Email your request to <span style="font-style:italic; color:#F60">pelihon@gmail.com</span><br />
    <p>Thanks!</p>
    <br />
   <div id="btitle"><u>Book Request Form</u></div>
   <?php if(!empty($success)){echo "<div id=\"booknotebox\"><p>".$success."</p></div>";}?>
   <form id="getbook" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
   <label id="name">Name:</label>
   <input type="text" name="bookreader" class="binput" placeholder="Enter your name" value="<?php if(!empty($name)){echo $name;}?>" /><br />
   <?php if(!empty($nmsg)){echo "<span class=\"cerrormsg\">".$nmsg."</span><br />";}?>
   <label id="email">Email:</label>
   <input type="email" name="bookemail" class="binput" placeholder="Enter your email" value="<?php if(!empty($email)){echo $email;}?>"/><br />
   <?php if(!empty($emsg)){echo "<span class=\"cerrormsg\">".$emsg."</span><br />";}?>
   <label id="books">Pick Book:</label>
   <select id="booklist" name="booklist">
   <option value="0">Select a book</option>
   <?php 
         $book_list=get_book_list();
         while($book = mysql_fetch_array($book_list)){
		 echo "<option value=\"".$book['bookid']."\">".$book['bookname']."</option>";
		 }
   ?>
   </select><br />
   
   <?php if(!empty($bmsg)){echo "<span class=\"cerrormsg\">".$bmsg."</span><br />";}?>
   
    <input name="submit" id="bookbut" type="submit" value="Get Book" />
    </form>
  <!-- end #maincontent --></div>
  <div id="commentlayer">
      <div id="comtitle"><h3>Reviews</h3></div>
     <div id="comcontent">
     <?php
	       $get_book = get_book_review();
		   while($review=mysql_fetch_array($get_book)){
			    echo "<div class=\"eachcom\">";
				echo "<div class=\"compix\"><img src=\"images/user.gif\" alt=\"user\" height=\"60px\" width=\"55px\" /></div>";
				echo "<div class=\"cominfo\">";
				echo "<span class=\"cuname\">".$review['revby'].",</span> on <span class=\"cdate\">".date('F j, Y',$review['revdate'])."</span>";
				echo "</div>";/*end .cominfo*/
				echo "<div class=\"comcontent\">";
				echo "<span id=\"says\">says : </span>".$review['revcontent'];
				echo "</div>";/*end .comcontent*/
				echo "</div>";/*end .eachcom*/
			   }
	 ?>
     <!-- end #comcontent --></div>
  <!-- end #commentlayer--></div>
       <div id="combox">
       <div id="cbtitle">Post a Review</div>
       <div id="cbnote">Note: Your email will not be published to the public</div>
       <?php if(!empty($revsuccess)){echo "<div id=\"booknotebox\"><p>".$revsuccess."</p></div>";}?>
	   <?php if(!empty($reverror)){echo "<div id=\"bookerrbox\"><p>".$reverror."</p></div>";}?>
       <br />
       <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
       <label id="cbname">Name:*</label>
       <input type="text" class="cbinput" name="rname" value="<?php if(!empty($rname)){echo $rname;}?>" /><br />
	   <?php if(!empty($rnmsg)){echo "<span class=\"cerrormsg\">".$rnmsg."</span><br />";}?>
       <label id="cbemail">Email:*</label>
       <input type="text" class="cbinput" name="remail" value="<?php if(!empty($remail)){echo $remail;}?>" /><br />
	   <?php if(!empty($remsg)){echo "<span class=\"cerrormsg\">".$remsg."</span><br />";}?>
       <label>Review:*</label><br />
       <textarea id="cbtarea" name="revcon" cols="60" rows="10"><?php if(!empty($rcontent)){echo $rcontent;}?></textarea><br />
	   <?php if(!empty($rbmsg)){echo "<span class=\"cerrormsg\">".$rbmsg."</span><br />";}?>
       <input type="submit" id="cbbut" name="review" value="Post Review" />
       </form>
       </div><!-- end #combox-->
   
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
