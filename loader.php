
<?php


session_start();
$Username = $_SESSION['Name']; 
if(substr($Username,0,1)=='M'){
			
			header ('Location: hp.php');
		}
		else if(substr($Username,0,1)=='E'){
			header('Location: employee.html');  
		}	
	

?>