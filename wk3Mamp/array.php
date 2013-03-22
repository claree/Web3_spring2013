<?php
	$array = array('dog-1' =>'Finn',
				   'dog-2' => 'Walter',
					'dog-3' => 'Gus',
					'dog-4' => 'Snoopy',
					'cat-14' => 'jingles'
	);

?>


<html>
	<head>
	</head>

	<body>
	
	<?php
	print_r($array); //print our array
	echo $array['dog-1']; //print one item from array
	
	echo'<br><br><br>'; 
	foreach($array as $key=>$value){//iterate thru our array
			echo $key.": ".$value."<br>"; ///the key to get to the location, 
		}
	
	
	?>
	
	</body>

</html>