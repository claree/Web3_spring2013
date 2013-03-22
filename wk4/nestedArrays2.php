<?
	$snacks = array(
	
					"Junk Food"=> array("Burger"=>array('beef', 'grease', 'cheese', 'lettuce'),
										"Pixie",
										"chips"),
										
					"Healthy"=> array("Nuts", //healthy=title
									"Fruit", 
									"yogurt"),
									
					"On the GO"=> array("gogurt",
										"Fruit", 
										"stringcheese", 
										"lunchables"),
					"Other Snack",
					"One more snack",
					"my favorite snack"
			);


	foreach($snacks as $title => $snack) {

			if(is_array($snack)==true){ 
			echo '<h1>'.$title.'</h1>';
			
				foreach($snack as $snackname => $s){
					echo '<p>'.$s.'</p>';
					
						if(is_array($s)){
							echo '<p>'.$snackname. '<p>';
							echo '<ul>';
							
							foreach($s as $ingredient){
								echo '<li>'.$ingredient.'</li>';
							}//ingredient
							echo '</ul>';
						}
					
					}//loop2
			
			} else{
			echo '<h1>' .$snack. '</h1>';
		}//end if
	}
?>