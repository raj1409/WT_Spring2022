<?php
$username = $password = "";
$f = false;
	if ($_SERVER['REQUEST_METHOD']==="POST") 
	{
		if (empty($_POST['username']))
		{
		echo "Field can't be empty";
		$f = true;
		
		}
		if (empty($_POST['password'])) 
		{
	 		echo "Field can't be empty";
				$f = true;
		
		}
			
	}
	if (!$f) 
	{
        $username = input_data($_POST['username']);
       	$password = input_data($_POST['password']);
		
	}
	function input_data($data) 
	{  
  		$data = trim($data);  
  		$data = stripslashes($data);  
  		$data = htmlspecialchars($data);  
  		return $data;  
	}
?>