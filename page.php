<?php
include('config.php');
include('includes/checklink.php');
include('includes/functions.php');
require('includes/comment.php');
?>
<?php
    if(!empty($_GET['p'])){
    $pid = $_GET['p'];
	}
	else{
		 header("location:index.php");
		}
    $article = get_article_by_id($pid);
	$get_comments=get_page_feedbacks($pid);
    $com_no = mysql_num_rows($get_comments);
	$pageheading = $article['title'];
	$pagetitle = $pageheading." | Muselord";
	$pagedesc = $article['adescription'];
	$pagekeywords = $article['keywords'];
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Agbakin Oluwatoyosin Jeremiah">
<meta name="description" content="<?php echo $pagedesc; ?>" />
<meta name="keywords" content="<?php echo $pagekeywords ;?>" />
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
  <?php
    if(!empty($_GET['p'])){
		   $p_on=$_GET['p'];
		   $next_p=$p_on+1;
		   $next_page_nav= get_page_name($next_p);
		   $next = mysql_fetch_array($next_page_nav);
		   if( $p_on != 1 ){
		      $prev_p=$p_on-1;
			  $prev_page_nav= get_page_name($prev_p);
		     $prev = mysql_fetch_array($prev_page_nav);
	       }
		}
		
	if(!empty($_GET['r'])){
		 $reptoid=$_GET['r'];
		}	
  ?>
  <?php  
	if($article){
		     echo "<div class=\"h1hide\"><h1>".$article['title']."</h1></div>";
		     echo "<div class=\"cleartop\">Posted on ".date('F j, Y',$article['pubdate'])."</div>";
  ?>		 
			 <div id="maincontent">
  <?php           
		     echo "<div id=\"atitle\">".$article['title']."</div>";
			 echo "<div id=\"ainfo\">
			 <p>Filed Under : <a href=\"cat.php?categoryid=".urlencode($article['cat_id'])."\">".$article['name']."</a>,";
			 if($com_no==0){ echo " Be the first to comment";}
			 else{ echo " Comment(".$com_no.")";}
			 echo "</p></div>";/*end #ainfo*/
			 echo $article['content'];
			 if(!empty($article['last_modified'])){
			    echo "<p>&nbsp;</p>";
			    echo "<div id=\"updated\">UPDATED: ".date('F j, Y' , $article['last_modified'])."</div>";
			 }
			 echo "<p id=\"underspace\">&nbsp;</p>";
 ?>			 
			 <div id="navbox">
			 <ul id="navlinks">
 <?php            
			 if(!empty($prev)){	 
			 echo "<li class=\"pagenav\" id=\"prev\"><a href=\"page.php?p=".urlencode($prev['aid'])."\">&larr;".$prev['title']."</a></li>";
			 }
			 else{
				 echo "<li class=\"pagenav\" id=\"prev\"><p></p></li>";
			 }
			 if(!empty($next)){
			 echo "<li class=\"pagenav\" id=\"next\"><a href=\"page.php?p=".$next['aid']."\">".$next['title']."&rarr;</a></li>";
			 }
?>			 
			 </ul>
			 </div><!--end #navlinks-->
			 <p>&nbsp</p>
			 </div><!--end #maincontent-->
   <?php          
		}
  ?>
  
  <div id="combox">
    <div id="cbtitle">Post <?php if(!empty($reptoid)){ echo "Reply";} else{ echo "Comment";}?></div>
	<?php if(!empty($fmsg)){ echo "<div class=\"fmsg\">".$fmsg."</div>";}?>
    <div id="cbnote">Note: Your email will not be published</div><br />
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
    <input type="hidden" name="articleid" value="<?php echo $article['aid'];?>" />
    <label id="cbname">Name:*</label>
    <input type="text" class="cbinput" name="cbname" placeholder="Enter Your Name " /><br />
    <?php if(!empty($cbnmsg)){echo "<span class=\"cerrormsg\">".$cbnmsg."</span><br />";}?>
    <label id="cbemail">Email:*</label>
    <input type="text" class="cbinput" name="cbemail" placeholder="youraddress@domain.com" /><br />
	<?php if(!empty($cbemsg)){echo "<span class=\"cerrormsg\">".$cbemsg."</span><br />";}?>
    <label><?php if(!empty($reptoid)){ echo "Reply";} else{ echo "Comment";}?>:*</label><br />
    <textarea id="cbtarea" name="comcon" cols="60" rows="10"></textarea><br />
	<?php if(!empty($cbcmsg)){echo "<span class=\"cerrormsg\">".$cbcmsg."</span><br />";}?>
    <input type="hidden" name="idreplyto" value="<?php echo $reptoid; ?>" />
    <input type="submit" id="cbbut" name="comment" value="Post Comment" />
    </form>
 </div><!-- end #combox-->
  
  
  <div id="commentlayer">
  <div id="comtitle"><h3>
  <?php 
   if($com_no==0){ 
       echo "Be the first to post a comment";
	  } 
   elseif($com_no==1){	  
	  echo $com_no." Comment"; 
   }
   else{
	    echo $com_no." Comments";
	   }
  ?>
  </h3></div>
  <div id="comcontent">
  <?php 
  while($comment = mysql_fetch_array($get_comments)){	
   /*if the idreplyto field is empty then it is a comment, so set feed_type to 0 (zero) OR
     else it is a reply if idreplyto field is not empty
   */
     if(empty($comment[6])){
		 $feed_type=0;
		 }
	 else{
		  $feed_type=1;
		 }
	 if($feed_type==0){ 	              
     echo '<div class="eachcom">';
     echo '<div class="compix"><img src="images/user.gif" alt="user" height="60px" width="55px" /></div>';
     echo '<div class="cominfo">';
     echo '<span class="cuname">'.$comment['comby'].',</span> on <span class="cdate">'.date('F j, Y',$comment['comdate']).'</span>';
     echo '</div>'; /* end .cominfo */
     echo '<div class="comcontent">';
     echo '<span id="says">says : </span>'.$comment['comcontent'];
	 echo '<div class="reply"><a href="page.php?p='.$pid.'&amp;r='.$comment['comid'].'">Reply</a></div>';
     echo '</div>';/*comcontent*/
	 echo '</div>';/*#eachcom*/
	 }
	 if($feed_type==1){
		echo '<div class="eachreply">';
		echo '<div class="compix"><img src="images/user.gif" height="60px" width="55px" /></div>';
		echo '<div class="rinfo">';
		echo '<span class="runame">'.$comment['comby'].'</span> on <span class="rdate">'.date('F j, Y',$comment['comdate']).'</span>';
		echo '</div>';
		echo '<div class="repcontent">';
		echo '<span id="says">replies : </span>'.$comment['comcontent'];
		echo '</div>';
		echo '</div>'; 
	 }
  }
	?>	
   <!-- end #comcontent --></div>
   <!-- end #commentlayer --></div>	
   
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