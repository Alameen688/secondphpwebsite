<?php session_start();?>
<?php include('config.php'); ?>
<?php include('includes/adlogin.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" />
<title>Muse2</title>

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
<div class="header">
&nbsp;
</div>
<div class="container">
  <div id="adminlogarea">
  <?php if(!empty($errmsg)){echo "<div id=\"logerror\"><p>".$errmsg."</p></div>";}?>
   <form class="adform" method="post" action="">
   <label id="name">Username:</label>
   <input type="text" name="username" class="ainput" /><br />
   <?php if(!empty($umsg)){echo "<span class=\"aerrormsg\">".$umsg."</span><br />";}?>
   <label id="adpass">Password:</label>
   <input type="password" name="password" class="ainput" /><br />
   <?php if(!empty($pmsg)){echo "<span class=\"aerrormsg\">".$pmsg."</span><br />";}?>
   <button type="submit" class="btn btn-red" name="login">Log In</button>
   </form>
  </div>
</div>
<!--
<div class="footer">
&nbsp;
</div>
-->
</body>
</html>