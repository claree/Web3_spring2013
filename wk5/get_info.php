<?php 
	//pull content from another page
	$content = file_get_contents('http://localhost/wk5/give_info.php?request=animals');
	//$content= file_get_contents('http://jsonlint.com/');
	$content= file_get_contents('give_info.php');
	//echo $content;	

	$formatted_content = json_decode($content,true);

	//print_r($formatted_content);
?>

<!doctype>

<html>
	<head>
	<title>First API </title>
	</head>
	<body>
		<?php foreach($formatted_content as $t=>$c){?>
			<h1><?php echo $t;?></h1>
			<?php foreach($c as $d){ ?>			
			<p><?php echo $d; ?></p>
		<?php } 
		} ?>	
	</body>
</html>