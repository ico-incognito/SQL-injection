<?php  
if($_SERVER["REQUEST_METHOD"]=="POST")
{  
  
	if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
		
				    $user=$_POST['user'];  
				    $pass=$_POST['pass'];  
				  
$con = mysqli_connect("host", "user","pass", "db");
				    if (!$con) {
				        echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
				  	
				    $query = "SELECT * FROM login WHERE username = '$user' AND password = '$pass'";
        			$result = mysqli_query( $con, $query);
        			$row = mysqli_fetch_array($result);

        			if(!$row){
			            echo "Invalid credentials";
			        }
			        else {
			            echo "Logged in";
			            }
			        }
	} 
	else {  
 		echo "Please enter credentials";			    	
 	}  

?>
