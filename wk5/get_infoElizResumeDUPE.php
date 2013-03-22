 <?php
 
//API==system for giving information that you request

 	//pull content from another page ALLLLLL content that the page has which was written out by the browser!!
 	//$content= file_get_contents('http://jsonlint.com/');
 //	$content= file_get_contents('give_info.php');
 

	//pull content from another page
	//$content = file_get_contents('http://localhost/wk5/give_infoElizResume.php?request=animals');
	$content= file_get_contents('give_infoElizResume.php');
	echo $content;	

	$formatted_content = json_decode($content,true);
	//echo $formatted_content;
	//print_r($formatted_content);
?>

<!doctype>

<html>
	<head>
	<title>Elizabeth Clare Resume </title>
	</head>
	<body>


	
	</body>
</html>