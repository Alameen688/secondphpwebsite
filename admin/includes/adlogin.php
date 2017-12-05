<?php 
if(isset($_POST['login'])){
	   
		if(empty($_POST['username'])){
			$umsg = 'Enter your username.';
			}
	
		if(empty($_POST['password'])){
			$pmsg = 'Enter your password.';
		}    
	
	  
if ( $_POST['username'] == AD_USERNAME && $_POST['password'] == AD_PASSWORD ) {

      // Login successful: Create a session and redirect to the admin homepage
      $_SESSION['username'] = AD_USERNAME;
      header( "Location: admin.php" );

    }
 	else {

      // Login failed: display an error message to the user
      $errmsg = "Incorrect username or password. Please try again.";
    }
}
 else{
	 $user_name = "";
	 $password =  ""; 
	 }
	?>