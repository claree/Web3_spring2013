<?php 

	if(isset($_POST)){


		error_log(print_r($_POST, true));
		$url = $_POST['url'];
		error_log("Got Post: {$url}");

		//connect to database and insert url 

	} 

?>