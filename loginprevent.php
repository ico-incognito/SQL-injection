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
				  	
				    $stmt = $con->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
				    $stmt->bind_param("ss", $user, $pass);
        			$stmt->execute();
        			
        			$result = $stmt->get_result();
        			$row = $result->fetch_assoc();

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
