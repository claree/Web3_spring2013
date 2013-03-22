<!-- have to use this   <?php ?>    to make php-->
<!--<a href="<?php ?>"><?php ?></a> this al works too-->
<!-- tail -f to be put in terminal for error /Applications/MAMP/logs/php_error.log -->
<html>
	
	<head>
		<title> My first PHP page</title>
		<script>
			document.getElementById('<?php echo 'stuff'; ?>');
		</script>
	</head>




<body>
	<p> <?php echo "hello world"; 
		echo 8*20; 
		$string = "this a a string i named string. woop";//$ makes a string
		$math = "8*20";
		$char='$'; //this means you can use a symbol
		
		$addStrings = "This is one string: ".$string." ".$math;
		
		//arrays
		$colors = array('red','blue', 'green', 'orange',0, 45);
		$random = rand(0,3);
		
		
		 print_r($colors); ///this shit is awesome! breaks down the array for debug
		 
		?></p>
		
		<?php  foreach($colors as $c){?>
				
				<h1> color: <?php echo $c.'<br>';?> </h1>
		<?php	} ?>
		
		<style>
		body{ background-color: <?php echo $colors[$random]; ?>; }
		</style>
		
	
	<p id='stuff'><?php echo $string   ?></php>
	<p><?php echo $addStrings   ?></php>
</body>

</html>



<!--<?php
	//phpinfo(); gives more info as to what you are looking at
?>-->