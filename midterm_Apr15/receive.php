<?php 
		$m = new MongoClient(); //connect to Mongo
		$db = $m -> websites; //select our DB
		$collection = $db -> list; //select our collection
		
		if(isset($_POST)){

		//error_log(print_r($_POST, true));
		$url = $_POST['url'];
		$time = $_POST['time'];
		error_log("Got Post: {$url}");
		error_log("At time: {$time}");
		echo $url;
} 
		//connect to database and insert url 
		$data = array(
			"time" => $time,
			"url"  => $url,
		);
		$collection->insert($data);
		$cursor = $collection->find();

		echo "<p>All My History</p>";
	
		foreach($cursor as $doc){ 
		
			echo '<li> At this time '.$doc['time'].' I visited '.$doc['url'];
			

			

			//echo '<a href='.$doc['url'].'></a>';
			//echo '<br>';
		} 



		/*$urls =  array(.$doc['url']);

		foreach($urls as $url){
			 print_r($url);
			$html=file_get_html($url);


		foreach($html -> find('h2') as $h2){
			echo $h2->innertext;

			}

		foreach($html -> find('p') as $p){
			echo $p->innertext;

			}
		}*/


	
	//we pass the mongo id from our form
	//if a post exists we have a mongo index
//$links = _POST['url'];
	//$links = array('http://107.21.206.112/midterm/receive.php');
	

	//if(isset($_POST['url'])){

	//		foreach($links as $document) {
	//			$collection->insert($document);

	//		}
				
//}


//$cursor = $collection->find();


?>