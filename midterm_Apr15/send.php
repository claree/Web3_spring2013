<?php 

	if(isset($_GET)){
		error_log("Got URL From Extension: {$_GET['url']}");
		$data = 'url='.$_GET['url'].'&time='.$_GET['time'];
		error_log("Data:");
		error_log($data);

		$url = 'http://107.21.206.112/midterm/receive.php';
		error_log($data.$_GET['url']); // this logs the 'url=' - maybe we need to remove that 
										// explicitly from $data var
		//open connection
		$ch = curl_init();

		//set the url, number of POST vars, POST data
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_POST, TRUE);
		curl_setopt($ch,CURLOPT_POSTFIELDS, $data);

		//execute post
		$result = curl_exec($ch);

		//close connection
		curl_close($ch);


	} 

?>