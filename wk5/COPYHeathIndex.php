<?php


$week = array(
				'Monday' => array(
									'10am' => 'Wake Up',
									'12pm' => array('Work Out' => array('push ups',
																			'sit ups',
																				'basketball')
													),
									'2pm' => 'Homework',
									'6pm' => 'Dinner',
									'8pm' => array('Chill' => array('watch tv',
																	'listen to music',
																		'play music',
																			'read')
													),
									'11pm' => 'Sleep'

									),
				'Tuesday' => array(
									'10am' => 'Wake Up',
									'12pm' => 'Class',
									'2pm' => 'Homework',
									'7pm' => 'Class'
									),
				'Wednesday' => array(
									'10am' => 'Wake Up',
									'12pm' => array('Work Out' => array('push ups',
																			'sit ups',
																				'basketball')
													),
									'2pm' => 'Homework',
									'6pm' => 'Dinner',
									'8pm' => array('Chill' => array('watch tv',
																	'listen to music',
																		'play music',
																			'read')
													),
									'11pm' => 'Sleep'

									),
				'Thursday' => array(	
									'8am' => 'Wake Up',
									'10am' => 'Class',
									'2pm' => 'Homework',
									'7pm' => 'Class'
									),
				'Friday' => array(
									'11am' => 'Wake Up',
									'1pm' => 'Chiropractor',
									'3pm' => array('Work Out' => array('push ups',
																			'sit ups',
																				'basketball')
										 		),
									'7pm' => 'Dinner',
									'10pm' => 'Go Out'
									),
				'Saturday' => array(
									'11am' => 'Wake Up',
									'1pm' => 'Homework',
									'3pm' => array('Work Out' => array('push ups',
																			'sit ups',
																				'basketball')
												),
									'7pm' => 'Dinner',
									'10pm' => 'Go Out'
									),
				'Sunday' => array(
									'10am' => 'Wake Up',
									'12pm' => array('Work Out' => array('push ups',
																			'sit ups',
																				'basketball')
													),
									'2pm' => 'Homework',
									'6pm' => 'Dinner',
									'8pm' => array('Chill' => array('watch tv',
																	'listen to music',
																		'play music',
																			'read')
													),
									'11pm' => 'Sleep'
									),
				);	

?>

<Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Balanced Schedule </title>
		<style> 
		body{ width 100%; height: 100%; margin: 0 ; padding 0;}
		#main{ width: 500px; margin: 0 auto; padding; 20px; background-color: whitesmoke; min-height: 800px;}
		#main article { padding: 10px; margin: 20px 0; background-color: black;}
		#time { width: 100px; margin: 0 auto; float: right; background-color; green;}
		.Monday { color: blue !important; }
		.Tuesday{ color: green !important; }
		.Wednesday{ color: pink !important; }
		.Thursday{ color: yellow !important; }
		.Friday{ color: red !important; }
		.Saturday{ color: orange !important; }
		.Sunday{ color: gray !important; }
		</style>
	</head>
	<body>
	<section id='main'
		<?php foreach($week as $day => $time){
		$newTitle = str_replace(' ', '-', $day);
		?>

	<article class ="<?php echo $newTitle; ?>">
		<h4><?php echo $day; ?></h4>

		<?php foreach ($time as $activity) {
			$nice = str_replace(' ', '-', $activity);

			?>

		<p class =" desc <?php echo $nice; ?> ">
			<?php echo $activity; ?></p> 

		<?php } ?>

	</article>


	<?php } ?> 

	</section>

	<section id='time'
		<?php foreach($week as $day => $time){ 
		$cool = str_replace(' ', '-', $time);

		?>
		<p class =" desc <?php echo $cool; ?> ">
			<?php echo $time; ?></p> "}
		<?php } ?>
	</body>
</html> 





