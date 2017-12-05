<?php
if(isset($_POST['submit'])){
	     $email=$_POST['yrtwemail'];
		 if(empty($email)){
			 $emsg="Please enter your email address";
			 }
			 
			 	 
		 if(empty($emsg)){
		      $check=mail_check($email);
			  $verify=mysql_num_rows($check);
				 if($verify==0){
				 $email=trim(mysql_real_escape_string($_POST['yrtwemail']));
			           $sql="INSERT INTO mailinglist (email) VALUES('{$email}')";
				       $result = mysql_query($sql);
				    if($result){
					    $yrtwsuccess="Package has been sent to your email. Thank You for your request!";
					}
				 }
				/*if verify is not (0) zero i.e if email already exists*/
				else{
					  $yrtwexists="The package has been sent to this email before but never mind you will be sent again";
					 }
				 
					  $to=$email;
					  $from="Muselord";
					  $subject="'Your Right To Write' Package - muselord.com";
					  $message="Thank you for requesting for this book. It has been sent as an attachment in this email\r\n";
					  $attachment = chunk_split(base64_encode(file_get_contents('books/Your-Right-To-Write-By-Muhammed-Abdullahi-Tosin.pdf')));
					  $random_hash = md5(date('r', time()));
					   /* main headers*/
					  $headers = "From: ".$from."\r\n";
					  $headers .= "MIME-Version: 1.0\r\n";
					  $headers .= "Content-Type: multipart/mixed";
					  $headers .="boundary=".$random_hash."\r\n";
					  $headers .="--".$random_hash."\r\n";
					  /* message header*/
					  $headers .="Content-Type: text/plain\r\n";
					  $headers .="Content-Transfer-Encoding:10bit\r\n\n";/*can change to 8bit*/
					  $headers .="$message\r\n";
					  $headers .="--".$random_hash."\r\n";
					  /* attachment header*/
					  $headers .="Content-Type: multipart/mixed";
					  $headers .="name=\"Your-Right-To-Write-By-Muhammed-Abdullahi-Tosin.pdf\"\r\n\n";
					  $headers .="Content-Transfer-Encoding:base64\r\n";
					  $headers .="Content-Disposition:attachment";
					  $headers .="filename=\"body languges.pdf\"\r\n\n";
					  $message .= $attachment."\r\n";
					  $headers .="--".$random_hash."--";
					  $retval =mail($to,$subject,$message,$headers);
					  if($retval==true){
						  $success .=" Thank You!";
						  }
			 }	
}
?>