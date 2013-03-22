<?
	$snacks = array(
	
					"Junk Food"=> array("Burger", "Pixie", "chips"),
					"Healthy"=> array("Nuts", "Fruit", "yogurt"),
					"On the GO"=> array("gogurt", "Fruit", "stringcheese", "lunchables")
			
			);


	foreach($snacks as $snack) {
	// print_r($snack);
			
			//foreach($snack as $s){
			//echo '<p>'.$s.'</p>';
			
			if(is_array($snack)==true){ //SAME AS if(is_array($snack)){
			
			
				foreach($snack as $s){
					echo '<p>'.$s.'</p>';
					
					}//loop2
			
			} else{
			echo '<h1> .$snack. </h1>';
		}//end if
	}
?>