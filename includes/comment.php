<?php
if(isset($_POST['comment'])){
	      $aid=$_POST['articleid'];
	      $cbname=$_POST['cbname'];
	      $cbemail=$_POST['cbemail'];
		  $cbcontent=$_POST['comcon'];
		  $idreplyto=$_POST['idreplyto'];
    
		 if(empty($cbname)){
			 $cbnmsg="Please enter your name";
			 }
		 if(empty($cbemail)){
			 $cbemsg="Please enter your email, it will be confidential";
			 }	 
		 if(empty($cbcontent)){
			 $cbcmsg="Please type your comment";
			 }	
		 
	if(empty($cbnmsg)&&empty($cbemsg)&&empty($cbcmsg)){	
            $cbname=trim(mysql_real_escape_string($_POST['cbname']));
			$cbemail=trim(mysql_real_escape_string($_POST['cbemail']));
			$cbcontent=trim(mysql_real_escape_string($_POST['comcon']));
			
		      	if(!empty($idreplyto)){
			      $sql="INSERT INTO comments(comby, email, comdate, comcontent, aid, idreplyto) 
					    VALUES('{$cbname}', '{$cbemail}', NOW(), '{$cbcontent}', {$aid}, {$idreplyto})";
					
					$result=mysql_query($sql);
			           if(!$result){
				           $error="Error posting comment";
			             }
			           else {
			                $fmsg="Your Reply has been posted ! You can also post your own <a href=\"page.php?p=".$pid."\">comments</a>";
			             }
			    }	
		        else{
			      $sql="INSERT INTO comments(comby, email, comdate, comcontent, aid) 
					    VALUES('{$cbname}', '{$cbemail}', NOW(), '{$cbcontent}', {$aid})";
						 $result=mysql_query($sql);
			             if(!$result){
				              $error="Error posting comment";
			                }
			             else {
			                  $fmsg="Your Comment has been posted";
			                }
			    }	   
					 
						 
	}
}
  else{ 
        $cbname="";
        $cbemail="";
		$cbcontent="";
	  }
?>