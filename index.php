<?php
include('config.php');
include('includes/functions.php');
?>
<?php
if(!empty($_GET['p'])){
	      $cur_page=$_GET['p'];
	  }
  else{
	    $cur_page=1;
	  }  
?>
<?php
 $perpage=2; /*Set the number of articles to be displayed per page*/
  $totalposts=mysql_num_rows(get_all_article());
  $totalpages=ceil($totalposts/$perpage);
  
  $check_content = mysql_fetch_array(get_all_article($perpage,$cur_page));
  if($check_content[0]==0){
	  header("location:pagenotfound.php");
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Agbakin Oluwatoyosin Jeremiah">
<title>Home | Muselord <?php if($cur_page!=1){echo "Page ".$cur_page;} ?></title>
<link rel="stylesheet" href="css/style.css" />

<style>

@font-face{
  font-family:fontin;
  font-weight:normal;
  src:url(fonts/fontin_regular.ttf); 
  format('ttf');
}
@font-face{
  font-family:fontinI;
  font-style:italic;
  src:url(fonts/fontinitalic.ttf); 
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
  $get_content = get_all_article($perpage,$cur_page);
  
  while($article = mysql_fetch_array($get_content)){
            $pid=$article['aid'];
            $get_comments=get_page_feedbacks($pid);
            $com_no = mysql_num_rows($get_comments);
	        echo "<div class=\"minicontainer\">";
			echo "<div class=\"cleartop\">Posted on ".date('F j, Y', $article['pubdate'])."</div>";
			echo "<div class=\"eachcont\">";
			echo "<h2 class=\"ctitle\"><a href=\"page.php?p=".$article['aid']."\">".$article['title']."</a></h2>";
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
	        echo '<a href=".?p='.($cur_page-1).'"><li class="pagetrack">prev</li></a>'; 
	 }
	 for($i=1; $i <= $totalpages; $i++){
		  if($cur_page==$i){
			    echo '<a href=".?p='.$i.'"><li class="pageno on">'.$i.'</li></a>';
			  }
		  else{ 
		         echo '<a href=".?p='.$i.'"><li class="pageno">'.$i.'</li></a>';
			  }	  
		 }
	 if($cur_page<$totalpages){
		    echo '<a href=".?p='. ($cur_page+1) .'"><li class="pagetrack">next</li></a>';
		 }
  }
  ?>
  </ul>
  <!--end #pagicon--></div>  
    
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
    <!-- end .advert --></div>
  <div class="footer">
    <center>&copy;Copyright Barry J. All right reserved . </center>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
<?php mysql_close($connection); ?>