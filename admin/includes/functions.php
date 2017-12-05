<?php
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
					       UNIX_TIMESTAMP(pubdate) AS pubdate 
					       FROM articles
						   INNER JOIN categories
						   ON articles.cat_id = categories.cid
						   WHERE aid=$aid
						   ";
					 $result=mysql_query($sql,$connection);
					 
					 if(!$result){
						    echo "Error connecting to table for article".mysql_error();
						 }	   
				      return $result;		 
	}
function get_page_feedbacks($pid){
	                global $connection;
					$sql="SELECT *,UNIX_TIMESTAMP(comdate) AS comdate
					      FROM comments
						  WHERE aid=$pid";
				   $result = mysql_query($sql,$connection);
				   if(!$result){
					         echo "Error selecting Comments".mysql_error();
					   }	
				   return $result;	   	  
	}
function get_contact_msg(){
	                global $connection;
					$sql="SELECT * FROM contacts";  
					$result=mysql_query($sql); 
					if(!$result){
						 echo "error selecting contact messages".mysql_error();
						}
					return $result;     
	}
function get_unread_msg(){
                    global $connection;
					$sql="SELECT * FROM contacts WHERE opened='0'";  
					$result=mysql_query($sql); 
					if(!$result){
						 echo "error selecting contact messages".mysql_error();
						}
					return $result;    
	                    
	}
function get_all_messages($perpage=1000,$cur_page=1){
	                global $connection;
					$sql="SELECT *, UNIX_TIMESTAMP(date) AS date
					      FROM contacts
					      ORDER BY id DESC";  
					$result=mysql_query($sql); 
					if(!$result){
						 echo "error selecting contact messages".mysql_error();
						}
					return $result;     
	}	
function get_cat_list(){
	               global $connection;
	               $sql="SELECT * FROM categories";
				   $result=mysql_query($sql,$connection);
				   if(!$result){
						    echo "Error getting category list".mysql_error();
						 }
				   return $result;
	}	
function del_article($aid){
	             global $connection;
				 $sql="DELETE FROM articles WHERE aid={$aid}";
				 $result=mysql_query($sql,$connection);
				 if(!$result){
					    echo "Error deleting article".mysql_error();
					 }
				 return $result;	 
	}	
?>	