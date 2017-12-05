<?php 
      include('config.php'); 
      include('includes/logincheck.php');	  
	  include('includes/postprocess.php');
	  include('includes/functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" />
<title>Edit Article</title>
</head>

<body>
<div class="header">
</div>
<div class="container">
<div class="postform">
<?php 
if(isset($_GET['pid'])){
	  $peditid=$_GET['pid'];
	}
$get_post=get_article_by_id($peditid);
while($post=mysql_fetch_array($get_post)){
?>
<form method="post" action="" id="adpost">
<input type="hidden" name="postid" value="<?php echo $post['aid']; ?>" />
<label>Post Title:</label>
<input type="text" name="ptitle" class="pinput" value="<?php echo $post['title']; ?>" /><br />
<?php if(!empty($tmsg)){echo "<span class=\"adderror\">".$tmsg."</span><br />";}?>
<label>Post Content:</label><br />
<textarea name="pcontent" cols="73" rows="30" id="pcarea"><?php echo $post['content']?></textarea><br />
<?php if(!empty($pmsg)){echo "<span class=\"adderror\">".$pmsg."</span><br />";}?>
<label>Description:</label>
<input type="text" name="adescription" class="dinput" value="<?php echo $post['adescription'];?>" /><br />
<?php if(!empty($dmsg)){echo "<span class=\"adderror\">".$dmsg."</span><br />";}?>
<label>Keywords:</label>
<input type="text" name="keyword" class="kinput" value="<?php echo $post['keywords'];?>" /><br />
<?php if(!empty($kmsg)){echo "<span class=\"adderror\">".$kmsg."</span><br />";}?>
<label>Category:</label>
<select id="catlist" name="catlist">
<?php 
$cat_list = get_cat_list();
while($cat=mysql_fetch_array($cat_list)){
echo "<option value=".$cat['cid']."";
echo ( $cat['cid'] == $post['cat_id'] ) ? " selected" : "";
echo ">".$cat['name']."</option>"; 
}
?>
</select><br />
<?php if(!empty($cmsg)){echo "<span class=\"adderror\">".$cmsg."</span><br />";}?>
<!--<label>Date Modified:</label>
<input type="date" name="pdate" class="pdinput" placeholder="YYYY-MM-DD" /><br />
-->
<div id="actionbut">
    <input type="submit" class="btn btn-info" id="savebut" value="Save Changes" name="edit" />
    <input type="submit" class="btn btn-info" value="Cancel" name="cancel" />
</div>
<div id="delbutton">
    <input type="submit" name="delete" class="delbut" value="Delete Article" onclick="return confirm('Are you sure you want to delete this Article ?')" />
</div>
</form>
<?php
}
?>
</div>
</div>
<!--
<div class="footer">
</div>
-->
</body>
</html>