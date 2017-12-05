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
<title>Add Article</title>
</head>

<body>
<div class="header">
</div>
<div class="container">
<div class="postform">

<form method="post" action="" id="adpost">
<label>Post Title:</label>
<input type="text" name="ptitle" class="pinput" placeholder="Article title goes here..." value="<?php if(!empty($title)){echo $title;}?>" /><br />
<?php if(!empty($tmsg)){echo "<span class=\"adderror\">".$tmsg."</span><br />";}?>
<label>Post Content:</label><br />
<textarea name="pcontent" cols="73" rows="30" id="pcarea" placeholder="Article Content goes here..."><?php if(!empty($content)){echo $content;}?></textarea><br />
<?php if(!empty($pmsg)){echo "<span class=\"adderror\">".$pmsg."</span><br />";}?>
<label>Description:</label>
<input type="text" name="adescription" class="dinput" placeholder="Enter article short description for SEO" value="<?php if(!empty($description)){echo $description;}?>" />
<br />
<?php if(!empty($dmsg)){echo "<span class=\"adderror\">".$dmsg."</span><br />";}?>
<label>Keywords:</label>
<input type="text" name="keyword" class="kinput" placeholder="Enter article keywords for SEO" value="<?php if(!empty($keyword)){echo $keyword;}?>" /><br />
<?php if(!empty($kmsg)){echo "<span class=\"adderror\">".$kmsg."</span><br />";}?>
<label>Category:</label>
<select id="catlist" name="catlist">
<option value="0">Select Category</option>
<?php 
$cat_list = get_cat_list();
while($cat=mysql_fetch_array($cat_list)){
echo "<option value=".$cat['cid'].">".$cat['name']."</option>"; 
}
?>
</select><br />
<?php if(!empty($cmsg)){echo "<span class=\"adderror\">".$cmsg."</span><br />";}?>
<div id="actionbut">
<input type="submit" class="btn btn-info" id="savebut" value="Save Article" name="newpost" />
<input type="submit" class="btn btn-info" value="Cancel" name="cancel" />
</div>
</form>
</div>
</div>
<!--
<div class="footer">
</div>
-->
</body>
</html>