<?php 
	include('../simple_html_dom.php');

		/*$m = new MongoClient(); //connect to Mongo
	$db = $m -> errorLogSites; //select our DB
	$collection = $db -> webpages; //select our collection*/


//$urls= array('http://www.weather.com', 'http://cnn.com');
//$urlsAll = array($_POST['url']);
//$urls =  array('http://107.21.206.112/midterm/receive.php');
		

	$m = new MongoClient(); //connect to Mongo
	$db = $m -> web3; //select our DB
	$collection = $db -> friends; //select our collection
	
	//we pass the mongo id from our form
	//if a post exists we have a mongo index


	if(isset($_POST['url'])){
	
	//use our id to find the object
	//we have to create a new MongoId From the info 
	//that comes in so that we play nice with the DB

	//db.mycollection.find({"Got URL From Extension":{$exists:true}});
	$find_obj = array("Got URL From Extension" => new MongoId($_POST['url']) );
	
	//we use find one because IDs are unique - hense only one.
	$friend = $collection->findOne($find_obj);

}


	//THIS BELOW WAS ALL HERE BEFORE

	/*foreach($urls as $url){

		 print_r($url);

		$html=file_get_html($url);





		foreach($html -> find('h2') as $h2){

			echo $h2->innertext;

		}

		foreach($html -> find('p') as $p){

			echo $p->innertext;

		}


	}*/


?>