 <?php
 
//API==system for giving information that you request

 	//pull content from another page ALLLLLL content that the page has which was written out by the browser!!
 	//$content= file_get_contents('http://jsonlint.com/');
 //	$content= file_get_contents('give_info.php');
 

	//pull content from another page
	//$content = file_get_contents('http://localhost/wk5/give_infoElizResume.php?request=animals');
	//$content= file_get_contents('http://localhost/JSONgive_infoElizResume.php');
	$content= file_get_contents('http://localhost/wk5ResumeDone/JSONgive_infoElizResume.php');
	//echo $content;	

	$formatted_content = json_decode($content,true);
	//echo $formatted_content;
	//print_r($formatted_content);
?>

<!doctype>

<html>
	<head>
	<link href='http://fonts.googleapis.com/css?family=Economica:400,700,400italic' rel='stylesheet' type='text/css'>
	<title>Elizabeth Clare Resume </title>
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
	
		
.header h1, h2{
font-family: 'Economica';
font-weight: 400;
}

.me { 
font-family: 'Economica';
font-weight: 700;
color:#cfcf2c;

}
	#section{ 
	color:#cfcf2c;
	font-family: 'Economica';
	font-weight: 400;
	padding-top:15px;
	text-decoration:underline;
	font-size:22px;
	
	
	}
	#position{ color:black;
	font-family: 'Economica';
	font-weight: 400;
	font-size:20px;
	
	}
	#locationTime {color: grey;
	font-family: 'Economica';
	font-weight: 400;
	font-size:18px;
	font-style: italic;
	line-height: 25px;
	padding-left: 40px;
	padding-right: 40px;
	padding-bottom: 10px;
	
	}
	#skills {color: green;}
	</style>	
	</head>
	<body>
	<div id="wrapper">
<header class="header">
	<h1>Elizabeth Clare</h1>
	<h2>Brooklyn, NY</h2>
	<h2>elizabethc.clare@gmail.com</h2>
	<h2 class="me"> Artist || Designer || Maker || Technologist</h2>
</header>
<br>






		
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
	</div>
	</body>
</html>