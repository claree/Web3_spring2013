 <?php
 
//API==system for giving information that you request

 	//pull content from another page ALLLLLL content that the page has which was written out by the browser!!
 	//$content= file_get_contents('http://jsonlint.com/');
 //	$content= file_get_contents('give_info.php');
 

	//pull content from another page
	//$content = file_get_contents('http://localhost/wk5/give_infoElizResume.php?request=animals');
	$content= file_get_contents('http://localhost/JSONgive_infoElizResume.php');
	//echo $content;	

	$formatted_content = json_decode($content,true);
	//echo $formatted_content;
	//print_r($formatted_content);
?>

<!doctype>

<html>
	<head>
	<title>Elizabeth Clare Resume </title>
	<style>
		body{
			font-family: serif;
			font-size: 15px;
			margin: 10px;
			zoom: reset;
		}
		h1, h2, h3, p{
			margin:0px;
		}
	#section{ color:red;}
	#position{ color:orange;}
	#locationTime {color: magenta;}
	#skills {color: green;}
	</style>	
	</head>
	<body>
<header class="header">
	<h1>Elizabeth Clare</h1>
	<h2>Brooklyn, NY</h2>
	<h2>elizabethc.clare@gmail.com</h2>
</header>







		
	<?php 	 foreach($formatted_content as $key=>$value){
	 if(is_array($value)==true) {?>
	 		<h1 id="section"> <?php echo $key;?> </h1>
					

			
				<?php foreach($value as $subkey=>$subvalue) { ?>
				
					<h2 id="position"> <?php echo $subkey; ?> </h2> 
					
					<h2 id="locationTime"><?php echo $subvalue; ?> </h2>
					
					<?php		foreach($subvalue as $position=>$place) { ?>
					
					<h3 id="skills"> <?php echo $place;?> </h3>
					<?php
					}
					
				}
		}	
		
}
?>
	
	</body>
</html>