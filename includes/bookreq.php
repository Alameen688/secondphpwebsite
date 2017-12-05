<?php
if(isset($_POST['submit'])){
	     $name=$_POST['bookreader'];
	     $email=$_POST['bookemail'];
		 $book=$_POST['booklist'];
	     if(empty($name)){
			 $nmsg="Please enter your name";
			 }
		 if(empty($email)){
			 $emsg="Please enter your email";
			 }	 
		 if($book==0){
			 $bmsg="Please select a book";
			 }	 
			 
				 
		if(empty($nmsg)&&empty($emsg)&&empty($bmsg)){
		            $check=mail_check($email);
			        $verify=mysql_num_rows($check);
					if($verify==0){
					$email=trim(mysql_real_escape_string($_POST['bookemail']));
			         $sql="INSERT INTO mailinglist(email) VALUES('{$email}')";
					 $result=mysql_query($sql);
					 if(!$result){
						 $error="Error proccessing email";
						 }
					}
					
					$bookquery=get_no_downloads($book);
					$no = $bookquery['downloads'];
					$new_no=$no+1;
					
					$sql2="UPDATE books 
					       SET downloads = {$new_no}
						   WHERE bookid={$book}";
					$query=mysql_query($sql2);
					if($query){
						      $success=$bookquery['bookname']." has been sent to your email address as an attachment for download. Thank YOU";
						}	
						
						
						
					  $to=$email;
					  $from="Muselord";
					  $subject=$bookquery['bookname']." Download - muselord.com";
					  $message="Thank you for requesting for this book. It has been sent as an attachment in this email\r\n";
					  $attachment = chunk_split(base64_encode(file_get_contents("books"."/".$bookquery['bookname'].".".$bookquery['extension'])));
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
					  $headers .=$message."\r\n";
					  $headers .="--".$random_hash."\r\n";
					  /* attachment header*/
					  $headers .="Content-Type: multipart/mixed";
					  $headers .="name=\"".$bookquery['bookname'].".".$bookquery['extension']."\"\r\n\n";
					  $headers .="Content-Transfer-Encoding:base64\r\n";
					  $headers .="Content-Disposition:attachment";
					  $headers .="filename=\"".$bookquery['bookname'].".".$bookquery['extension']."\"\r\n\n";
					  $message .= $attachment."\r\n";
					  $headers .="--".$random_hash."--";
					  mail($to,$subject,$message,$headers);	
			}	 
}
else{
	$name="";
	$email="";
	$book="";
	}
?>
<?php
  if(isset($_POST['review'])){
	      $rname=$_POST['rname'];
	      $remail=$_POST['remail'];
		  $rcontent=$_POST['revcon'];
    
		 if(empty($rname)){
			 $rnmsg="Please enter your name";
			 }
		 if(empty($remail)){
			 $remsg="Please enter your email, it will be confidential";
			 }	 
		 if(empty($rcontent)){
			 $rbmsg="Please type your review";
			 }	 
	if(empty($rnmsg)&&empty($remsg)&&empty($rbmsg)){	
            $rname=trim(mysql_real_escape_string($_POST['rname']));
			$remail=trim(mysql_real_escape_string($_POST['remail']));
			$rcontent=trim(mysql_real_escape_string($_POST['revcon']));
			
			         $sql="INSERT INTO bookreview(revdate, revby, revemail, revcontent) VALUES(NOW(), '{$rname}', '{$remail}', '{$rcontent}')";
					 $result=mysql_query($sql);
					 if($result){
						  $revsuccess="Your review has been posted successful";
						 }
					 else{
					       $reverror="<strong>Oops!</strong> Error posting review. If error persists please contact <a href=\"contact.php\">site administrator</a>";
						 }	 
	}
  }
  else{ 
        $rname="";
        $remail="";
		$rcontent="";
	  }
		 
?>