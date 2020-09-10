<?php 
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
		
		function get_data() { 
			$datae = array(); 
			$datae[] = array( 
				'Name' => $_POST['name'], 
				'Branch' => $_POST['branch'], 
				'Location' => $_POST['loc'], 
			); 
			return json_encode($data); 
		} 
		
		$name = "jform"; 
		$file_name = $name . '.json'; 
	
		if(file_put_contents( 
			"$file_name", get_data())) { 
				echo $file_name .' file created'; 
			} 
		else { 
			echo 'There is some error'; 
		} 
	} 
?> 
