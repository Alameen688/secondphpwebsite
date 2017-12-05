<?php
session_start();
if($_SESSION['username'] != AD_USERNAME){
	   header("location:index.php");
	}
if(!empty($_GET['s'])){
	     if($_GET['s']=="logout"){
			 unset($_SESSION['username']);
			 header("location:index.php");
			 }
	}		
?>