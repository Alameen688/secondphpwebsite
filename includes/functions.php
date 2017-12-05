<?php
function mysql_prep($value){
	       $magic_quotes_active = get_magic_quotes_gpc();
		   $new_enough_php = function_exists("mysql_real_escape_string"); /* i.e if server uses PHP >= v4.3.0 */
		   if($new_enough_php){
			   /* if server uses PHP version  v4.3.0 or higher undo the magic quotes effect so that mysql_real_escape_string can work*/
			   if($magic_quotes_active){
				   $value = stripslashes($value);
				   }
			  $value = mysql_real_escape_string($value);	   
		   }
          else{ /* For PHP version  before v4.3.0 :- If magic quotes aren't already on then  addslashes manually */
		  if(!$magic_quotes_active){
			       $value = addslashes($value);
				  /* If magic quotes are active,  then the slashes already exist*/
			  }
		  }
		  return $value;
}  
function get_all_article($perpage=1000,$cur_page=1){
	                $offset=$perpage*($cur_page-1);
	                 global $connection;
	                 $sql="SELECT *,
					       UNIX_TIMESTAMP(pubdate) AS pubdate
						   FROM articles
						   INNER JOIN categories
						   ON articles.cat_id=categories.cid
					       ORDER BY aid DESC
						   LIMIT $perpage
						   OFFSET $offset";
						   
					 $result = mysql_query($sql,$connection);	  
					 if(!$result){
						       echo "Error connecting to table articles".mysql_error();
						 }
					 return $result;	  
					 	 
	}
	
function get_article_by_id($aid){
	                 global $connection;
					 $sql="SELECT *,
					       UNIX_TIMESTAMP(pubdate) AS pubdate,
						   UNIX_TIMESTAMP(last_modified) AS last_modified 
					       FROM articles
						   INNER JOIN categories
						   ON articles.cat_id = categories.cid
						   WHERE aid=$aid";
						   
					 $query=mysql_query($sql,$connection);
					 
					 if(!$query){
						    echo "Error connecting to table for article".mysql_error();
						 }	
					 $result = mysql_fetch_array($query);
					 if($result['0']==0){
						 header("location:pagenotfound.php");
						 }	    
				      return $result;		 
	}
function get_article_by_cat($cid=1,$perpage=100,$cur_page=1){
	                 $offset=$perpage*($cur_page-1);
	                 global $connection;
					 $sql="SELECT *,
					       UNIX_TIMESTAMP(pubdate) AS pubdate
						   FROM articles
						   INNER JOIN categories
						   ON articles.cat_id=categories.cid
						   WHERE cat_id=$cid
						   ORDER BY aid DESC
						   LIMIT $perpage
						   OFFSET $offset";
	                 $result=mysql_query($sql,$connection);
					 if(!$result){
						   echo "Error selecting articles by category".mysql_error();
						 }
					 return $result;	 
	}
function get_page_feedbacks($pid){
	                global $connection;
					$sql="SELECT *,UNIX_TIMESTAMP(comdate) AS comdate
					      FROM comments
						  WHERE aid=$pid
						  ORDER BY COALESCE(idreplyto,comid) ASC";/*note NO SPACE IN FRONT OF COALESCE*/
				   $result = mysql_query($sql);
				   if(!$result){
					         echo "Error selecting Comments".mysql_error();
					   }	
				   return $result;	   	  
	}
function check_if_exist($table,$row,$object){
	             $sql ="SELECT ".$row." FROM ".$table."
				        WHERE $row = ".$object."";
						$resul=mysql_query($sql);
				    	 return $result;		
	}	
function mail_check($address){
	          $sql="SELECT * FROM mailinglist
			        WHERE email='{$address}'";
			  $result = mysql_query($sql);
			  if(!$result){
				    echo "Unable to verify email";
				  }
			  return $result;
			  		
	}
function get_book_list(){
	         $sql="SELECT * FROM books
			       ORDER by bookid ASC";
			 $result=mysql_query($sql);	  
			 return $result ;
	}	
function get_no_downloads($bid){
	                 $sql="SELECT bookname, downloads, extension FROM books WHERE bookid={$bid}";
					 $query=mysql_query($sql);
					 $result=mysql_fetch_array($query);
					 return $result;
	}
function get_book_review(){
	             $sql="SELECT *,UNIX_TIMESTAMP(revdate) AS revdate FROM bookreview
				       ORDER BY id DESC";
				 $result = mysql_query($sql);	  
				 return $result; 
	}
function get_page_name($pid){
                     global $connection;
					 $sql="SELECT aid,title FROM articles
						   WHERE aid=$pid";
					 $result=mysql_query($sql,$connection);
					 
					 if(!$result){
						    echo "Error connecting to table for article".mysql_error();
						 }	   
				      return $result;
}
function get_cat_info($cid){
                    global $connection;
					 $sql="SELECT * FROM categories
						   WHERE cid=$cid";
					 $query=mysql_query($sql,$connection);
					 
					 if(!$query){
						    echo "Error connecting to table for article".mysql_error();
						 }	
				    $result=mysql_fetch_array($query);
				    return $result;
	}			
?>