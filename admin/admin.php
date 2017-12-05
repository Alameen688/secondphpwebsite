<?php include('config.php');?>
<?php include('includes/logincheck.php');?>
<?php include('includes/functions.php')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/admin.css" />

<title>Admin Area- Muselord</title>
</head>

<body>
<div class="header">
&nbsp;
</div>

<div class="adcontainer">
<div id="loginmsg">You are logged in as <?php echo $_SESSION['username'];?> <a href="admin.php?s=logout">Log out</a></div>
<?php
$contact=mysql_fetch_array(get_contact_msg());
$total_msg_no=mysql_num_rows(get_contact_msg());
$unread_msg_no=mysql_num_rows(get_unread_msg());
if($total_msg_no!=0){
           echo '<div class="notificationbox">';
		   echo 'You have <span class="unread"><a href="viewcontact.php">'.$unread_msg_no.' unread</a></span> messages from site users. '; 
           echo '<span class="inboxnote"><a href="viewcontact.php">Inbox('.$total_msg_no.')</a></span>';
           echo '</div>';
}
?>
<?php
if(isset($_GET['msg'])){
	   $msgcode=$_GET['msg'];
	   if($msgcode=="edited"){
		    echo "<div id=\"editedbox\">";
		    echo "<strong>Welldone!</strong> The Article has been edited successfully.";
		    echo "</div>";
	   }
	   elseif($msgcode=="notedited"){
	        echo "<div id=\"noteditedbox\">";
		    echo "<strong>Oops!</strong> Error editing article!";
			echo "</div>";
	   }
	   elseif($msgcode=="added"){
	          echo "<div id=\"editedbox\">";
		      echo "<strong>Welldone!</strong> Article has been created successfully.";
			  echo "</div>";
	   }
			     	   
	   elseif($msgcode=="notadded"){
		    echo "<div id=\"noteditedbox\">";
		    echo "<strong>Oops!</strong> Error creating new article.";
		    echo "</div>";
	   }
	   
	   elseif($msgcode=="deleted"){
	          echo "<div id=\"editedbox\">";
		      echo "<strong>OK!</strong> Article has been deleted successfully. undo";
			  echo "</div>";
	   }
	   
	   elseif($msgcode=="notdeleted"){
		    echo "<div id=\"noteditedbox\">";
		    echo "<strong>Oops!</strong> Unable to delete article.";
		    echo "</div>";
	   }
	   
	   else{ echo "";
		   }
	}
?>
<?php
if(isset($_GET['tp'])){
	        $cur_page=$_GET['tp'];
	}
else{
	 $cur_page=1;
	}	
	
    $per_page=10;
	$total_post=mysql_num_rows(get_all_article());	
	$total_pages=ceil($total_post/$per_page);
?>
<div id="addbut">
<a href="newpost.php" id="newpbut">Add New Post</a>
</div>
<div id="searcharea">
<form>
<label id="search">Search:</label>
<input type="search" name="q" class="sinput" />
</form>
</div>

<table id="posttable">
<thead>
     <tr><th>ID</th><th>Post Name</th><th>Content</th><th>Category</th><th>Comments</th><th>Post Date</th><th>Meta Desc.</th><th>Keywords</th></tr>
</thead>
<tbody>
<?php
    $get_post_list=get_all_article($per_page,$cur_page);
	while($post=mysql_fetch_array($get_post_list)){
	     $pid=$post['aid'];
         $get_comments=get_page_feedbacks($pid);
         $com_no = mysql_num_rows($get_comments);
		 echo "<tr onclick=\"location='editpost.php?pid=".$post['aid']."' \">";
		 echo "<td>".$post['aid']."</td>";
		 echo "<td>".$post['title']."</td>";
		 echo "<td>".substr($post['content'],0,80).".....</td>";
		 echo "<td>".$post['name']."</td>";
         echo "<td>".$com_no."</td>";
         echo "<td>".date('F j Y', $post['pubdate'])."</td>";	
         echo "<td>".substr($post['adescription'],0,30)."...</td>";
		 echo "<td>".substr($post['keywords'],0,30)."</td>";		 
		 echo "</tr>";
		}
?>
</tbody>
</table>
Showing
<?php 
if(($cur_page==1) & ($total_post<$per_page)){
	   echo "1 to ".$total_post." of ".$total_post." entries";
	}
if(($cur_page==1) & ($total_post>=$per_page)){
	    echo "1 to ".$per_page." of ".$total_post." entries";         
	}
if(($cur_page>1) & ($cur_page<$total_pages)){
	      $offset=$per_page*($cur_page-1);
	      echo ($offset+1)." to ".($offset+$per_page)." of ".$total_post." entries";
}
if(($cur_page>1) & ($cur_page==$total_pages)){
	      $offset=$per_page*($cur_page-1);
	      echo ($offset+1)." to ".($total_post)." of ".$total_post." entries";
}
?>
<div id="pagicon">
<ul id="pagination" >
<?php 

if($total_pages>1){
  if($cur_page>1){
	  echo '<a href="admin.php?tp='.($cur_page-1).'"><li class="pagetrack">Prev</li></a>';
  }
  for($p=1;$p<=$total_pages;$p++){
	     if($cur_page==$p){
			    echo '<a href="admin.php?tp='.$p.'"><li class="pageno on">'.$p.'</li></a>';
			 }
		 else{	 
			  echo '<a href="admin.php?tp='.$p.'"><li class="pageno">'.$p.'</li></a>';
		 }
	  }
  if($cur_page<$total_pages){
	  echo '<a href="admin.php?tp='.($cur_page+1).'"><li class="pagetrack">Next</li></a>';
	  }
}
?>
</ul>
 <!--end #pagination--></div>
</div><!--end .adcontainer -->

<!--<div class="footer">
&nbsp;
</div>-->
</body>
</html>