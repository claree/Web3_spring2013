<?php
		include('simple_html_dom.php');

		$m = new MongoClient(); //connect to Mongo
		$db = $m -> websites; //select our DB
		$collection = $db -> list; //select our collection
		
		//$sort= array('time'=>-40);

		//$cursor = $collection->find()->sort($sort)->limit(5);

		$cursor = $collection->find();
?>

<!doctype>

<html>
	<head>
	<link href='http://fonts.googleapis.com/css?family=Economica:400,700,400italic' rel='stylesheet' type='text/css'>
	<title>Exquisite Corpse </title>
	<style>
		body{
			font-family: serif;
			font-size: 15px;
			margin:  0 auto;
			zoom: reset;
			text-align: center;
			background-color: grey;
		}
		h1, h2, h3, p{
	margin:0px;
		}
			#wrapper {
		margin:  0 auto;
		width:70%;
		background-color: white;
		}
		li{
		list-style: none;
		}

		</style>
	</head>

<body>
<div id = "wrapper">




		<?php echo "<p>All My History</p>";

	
		 foreach($cursor as $doc){ 
			echo '<hr>'; //this is the line
			echo '<li> At this time '.$doc['time'].' I visited '.$doc['url'].'</li>';
			//echo file_get_contents($doc['url']);

			$safeURL = str_replace(' ', '%20', $doc['url']);
			$pageHTML =file_get_html($safeURL);				
			//echo '<a href='.$doc['url'].'></a>';
			//echo '<br>';
				foreach($pageHTML -> find('h2') as $h2){
					//echo $h2->innertext;
					//echo $h2->innertext(rand(1, 8));
				}
				foreach($pageHTML -> find('p')as $p){
					//echo $p->innertext;
					echo $p->innertext;
				}

			
		} 

?>

</div> <!--end of wrapper-->
</body>
</html>