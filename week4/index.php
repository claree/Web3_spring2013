<?php
	//print_r($typicalWeek); //print our array
	//echo $typicalWeek['night']; //print one item from array
	
		$dawn = array('people watch','run', 'hustle to the L',);
		$randDawn = rand(0,2);
		
		$dawn2 = array('people watch','run', 'hustle to the L',);
		$randDawn2 = rand(0,2);
		
		$dawn3 = array('people watch','run', 'hustle to the L',);
		$randDawn3 = rand(0,2);
		
		$dawn4 = array('people watch','run', 'hustle to the L',);
		$randDawn4 = rand(0,2);
		
		$dawn5 = array('people watch','run', 'hustle to the L',);
		$randDawn5 = rand(0,2);
		
		$wkndNite = array('Im Outtie','hating Friday night paper deadlines', 'in-house dance party');
		$randwkndNite = rand(0,2);
		
			$monAfternoon = array('nap','run', 'reading');
			$randmonAfternoon = rand(0,2);
	
	$SatDay = array('hiding in bed','procrastinating with productivity', 'strolling', 'something exciting is happening and I\'m gonna check it out!');
	$randSatDay = rand(0,3);
	
		$SunDay = array('back to bed','procrastinating with productivity', 'strolling', 'something exciting is happening and I\'m gonna check it out!');
	$randSunDay = rand(0,3);
	
			$Nite = array('sleep early','flowing', 'I have no idea what I have done with the past 4 hours');
	$randNite = rand(0,2);
	
		$Nite2 = array('sleep early','at Enids', 'Art Show');
	$randNite2 = rand(0,2);
	
	
	$typicalWeek = array(
					'Monday'=> array(
								'crack-of-dawn'=> "coffee and cigarette + $dawn[$randDawn]",
								'mid-morning'=> 'engaging thesis discussion',
								'early-afteroon'=>'werk',
								'late-afternoon'=>'nap', 
								'evening'=> 'cook dinner',
								'night'=>$Nite[$randNite],
					),
					'Tuesday'=> array(
								'crack-of-dawn'=> "coffee and cigarette + $dawn2[$randDawn2]",
								'mid-morning'=>'caffeine crash',
								'early-afteroon'=> 'Lunch',
								'late-afternoon'=> 'homework',
								'evening'=>'cook dinner',
								'night'=>'last minute writing homework',
					),//each day
				'Wednesday'=> array(
								'crack-of-dawn'=>"coffee and cigarette + $dawn3[$randDawn3]",
								'mid-morning'=>'caffeiene crash',
								'early-afteroon'=> 'New Media Art',
								'late-afternoon'=> 'homework',
								'evening'=>'Thesising',
								'night'=>$Nite2[$randNite2],
					),//each day
					'Thursday'=> array(
								'crack-of-dawn'=>"coffee and cigarette + $dawn4[$randDawn4]",
								'mid-morning'=>'werk',
								'early-afteroon'=> 'werk',
								'late-afternoon'=> 'run',
								'evening'=>'Web3!!',
								'night'=>'watch Girls',
					),//each day
							'Friday'=> array(
								'crack-of-dawn'=>"coffee and cigarette + $dawn5[$randDawn5]",
								'mid-morning'=>'Run',
								'early-afteroon'=> 'Thesising',
								'late-afternoon'=> 'Thesising',
								'evening'=>'Thesising',
								'night'=>$wkndNite[$randwkndNite],
					),//each day
								'Saturday'=> array(
									'crack-of-dawn'=>$SatDay[$randwkndDay],
									'mid-morning'=>$SatDay[$randwkndDay],
									'early-afteroon'=> 'homework',
									'late-afternoon'=> 'homework',
									'evening'=>'cook dinner',
									'night'=>'the world is my fucking oyster',
					),//each day
						'Sunday'=> array(
									'crack-of-dawn'=>"coffee and cigarette Brooklyn time",
									'mid-morning'=>'caffeine crash',
									'early-afteroon'=> $SunDay[$randSunDay],
									'late-afternoon'=> $SunDay[$randSunDay],
									'evening'=>'cook dinner',
									'night'=>'last minute writing homework',
					)//each day


					
			);//array
?>

<html>
<head>
<link rel="stylesheet" href="scheduleStyle.css">
</head>

<body>
<header class="header">
	<h1>Grad School Sched</h1>
	<h2>(refresh to see my week by week)</h2>
</header>

<!--<section class="monday">-->
	<section id= "allDays">
<?php foreach($typicalWeek as $title => $day){
	if(is_array($day)==true) {?>
	

	 <div class="<?php echo $title; ?>.">
	<?php echo '<h3>'.$title.'</h3>'; ?>
	
	

		
		<?php
		foreach($day as $timeOfDay =>$event){
			echo '<h4>'.$timeOfDay.':'.' '.'</h4>';
			echo '<h5>'.$event.'</h5>'.'<br>';
		
		
		
		
		}//foreach  $day
		
	} //end if_array

} //endforeach $typicalWeek

?>
</div>
</section> <!--day section-->














<!--<h1>Monday</h1>-->
<!--<h1> color: <?php echo $c.'<br>';?> </h1>-->

	<!--	<p id="dayAgenda"><?php
		//echo $dawn[$randDawn];
		/* foreach($typicalWeek['Monday'] as $key => $value){
					//echo $key.":  ".$value."<br>";
					//echo $key.'<br>'; //time of day	
				}*/
				
				//echo $typicalWeek['Monday']['crack-of-dawn']."<br>";
					 foreach($typicalWeek['Monday'] as $key => $value){
						//echo $key.":  ".$dawn[$randDawn]."<br>";	//this gives the same random for all of them
						echo $key.":  ".$value."<br>";		
				}
					
	?></p>-->
<!--</section>monday end-->	

<!--<section class="tuesday">
	<h1>Tuesday</h1>
		<p id="dayAgenda"><?php
		
			 foreach($typicalWeek['Tuesday'] as $key => $value){
				echo $key.":  ".$value."<br>";		
					}
					
	?></p>
</section><!--tuesday end-->



</body>
</html>