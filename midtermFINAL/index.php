<?php
		include('simple_html_dom.php');

		$m = new MongoClient(); //connect to Mongo
		$db = $m -> websites; //select our DB
		$collection = $db -> list; //select our collection
		
		//$sort= array('time'=>-540);

		//$cursor = $collection->find()->sort($sort)->limit(5);

		$cursor = $collection->find();
?>

<!doctype>

<html>
	<head>
		//<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:400,500' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Economica:400,700,400italic' rel='stylesheet' type='text/css'>
	<title>History Corpse </title>
	<style>

@font-face {
    font-family: Hyperspace;
    src: local(Hyperspace), url('fonts/Hyperspace.ttf') format('opentype');
}

		body{
			font-family: serif;
			font-size: 15px;
			margin:  0 auto;
			zoom: reset;
			text-align: center;
			background-color: #2e7189;
		}
		h1, h2, h3, p{
	margin:0px;
		}

		h1{
		font-family:Economica;
        font-size:24 px;
        /*color: #2eac89;*/
        padding-bottom: 10px;
		}


		h2{
		font-family:Economica;
        font-size:20 px;
        /*color: #2eac89;*/
        padding-bottom: 10px;
		}


		#wrapper {
		margin:  0 auto;
		width:70%;
		background-color: white;
		padding:10px;
		}

		#corpse {
		margin:  0 auto;
		width:80%;
		background-color: #E6E6E6;
		padding:10px;
		}


		li{
		list-style: none;
		}

		</style>
	</head>

<body>
<div id = "wrapper">

<img src="historyCorpseLogo1.png" width= "700px">
<h1>An Exquisite Corpse of how your mind leads your browsing trail.</h1>
<h2>Each time you refresh, new content is grabbed from your browser</h2>

<div id = "corpse">
		<?php 
		//error_log("is this working???");
	
		 foreach($cursor as $doc){ 
			//echo '<hr>'; //this is the line
			//echo '<li> At this time '.$doc['time'].' I visited '.$doc['url'].'</li>';
			
			//not using below
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
					//$result = count($p);

					//echo $p->innertext; //THIS WORKS BUT SHOW ALLL!!!
					
					//$numChoices = array(1, 2, 1, 2, 3);
					//$rand_keys = array_rand($numChoices);
					//echo $p[$rand_keys[1]] ->innertext;
					
					//$output = array_slice($p, -2, 1);
					//echo $p->innertext;
					//echo $output->innertext;
					//echo $p ->innertext;
					$lines= explode('.', $p->innertext);
					$numLines= sizeof($lines);
					$randLine= rand(0, $numLines-1);

					echo $lines[$randLine];
					//echo htmlspecialchars($lines[$randLine]);

				}

			
		} 

?>
</div> <!--end of corpse-->
</div> <!--end of wrapper-->
</body>
</html>