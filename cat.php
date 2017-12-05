<?php
include('config.php');
include('includes/functions.php');
?>
<?php
if(!empty($_GET['categoryid'])){
$cid=$_GET['categoryid'];
}
else{
	  header("location:index.php");/*Returns to index if category id is empty*/
}

$cat_info=get_cat_info($cid);

?>
<?php
  if(!empty($_GET['c'])){
	      $cur_page=$_GET['c'];
	  }
  else{
	    $cur_page=1;
	  }  
  $perpage=2; /*Set the number of articles to be displayed per page*/
  $totalposts=mysql_num_rows(get_article_by_cat($cid));
  $totalpages=ceil($totalposts/$perpage);
  $check_cat_content = mysql_fetch_array(get_article_by_cat($cid,$perpage,$cur_page));
  if($check_cat_content[0]==0){
	   header('location:cat.php?categoryid='.$cid.'');/*returns you to the first page of the current category if $cur_page is empty*/
	  }
?>
<span class=""></span>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" />
<title>Muselord <?php if(!empty($cat_info)){echo "&rsaquo;&rsaquo;".$cat_info['name'] ;} ?></title>

<style>
@font-face{
  font-family:fontin;
  font-weight:bold;
  src:url(fonts/fontin_bold.ttf); 
  format('ttf');
}

@font-face{
  font-family:fontinI;
  font-weight:normal;
  src:url(fonts/fontinitalic.ttf); 
   format('ttf');
}
@font-face{
  font-family:fontin;
  font-weight:normal;
  src:url(fonts/fontin_regular.ttf); 
  format('ttf');
}
@font-face{
  font-family:deftone;
  font-weight:bold;
  src:url(fonts/deftone.ttf); 
  format('ttf');
}
@font-face{
  font-family:diavlo_book;
  font-weight:bold;
  src:url(fonts/diavlo_book.otf); 
  format('otf');
}
@font-face{
  font-family:storybook;
  font-weight:bold;
  src:url(fonts/storyboo.ttf);
  format('ttf');
}
@font-face{
  font-family:Cantarell;
  font-weight:normal;
  src:url(fonts/cantarell-regular.ttf);
  format('ttf');
}
</style>

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
  <?php
  $get_by_cat = get_article_by_cat($cid,$perpage,$cur_page);
  
  while($article = mysql_fetch_array($get_by_cat)){
			$pid=$article['aid'];
            $get_comments=get_page_feedbacks($pid);
            $com_no = mysql_num_rows($get_comments);
			
	        echo "<div class=\"minicontainer\">";
			echo "<div class=\"cleartop\">Posted on ".date('F j, Y', $article['pubdate'])."</div>";
			echo "<div class=\"eachcont\">";
			echo "<div class=\"ctitle\"><a href=\"page.php?p=".$article['aid']."\">".$article['title']."</a></div>";
			echo "<div class=\"cinfo\"><p>Filed Under : <a href=\"cat.php?categoryid=".$article['cat_id']."\">".$article['name']."</a>,";
			if($com_no==0){
				    echo " Be the first to comment";
				}
			else{
				echo " Comment(".$com_no.")";
			}
			echo "</p></div>";
			echo substr($article['content'],0,700)."......";
			echo "<div class=\"more\"><a href=\"page.php?p=".$article['aid']."\">Continue Reading&rarr;</a></div>";
			echo "</div>";/*end .eachcont*/
			echo "</div>";/*end .minicontainer*/  
	    
	  }
  ?>
  <div id="pagicon">
  <ul id="pagination" >
  <?php    
	  
  if($totalpages>1){
	   
     if($cur_page>1){
	        echo '<a href="cat.php?categoryid='.$cid.'&amp;c='.($cur_page-1).'"><li class="pagetrack">prev</li></a>'; 
	 }
	 for($i=1; $i <= $totalpages; $i++){
		  if($cur_page==$i){
			    echo '<a href="cat.php?categoryid='.$cid.'&amp;c='.$i.'"><li class="pageno on">'.$i.'</li></a>';
			  }
		  else{ 
		         echo '<a href="cat.php?categoryid='.$cid.'&amp;c='.$i.'"><li class="pageno">'.$i.'</li></a>';
			  }	 
		 }
	 if($cur_page<$totalpages){
		    echo '<a href="cat.php?categoryid='.$cid.'&amp;c='.($cur_page+1).'"><li class="pagetrack">next</li></a>';
		 }
		 
  }
  ?>
  </ul>
  <!--end #pagination--></div>
    
    
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
<?php mysql_close($connection);?>