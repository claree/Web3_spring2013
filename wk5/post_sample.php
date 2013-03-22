<!--post is good for sending our users to other pages, generally derived through forms-->


	<!--a form is usedto create a post, takes many attributes, method is how we want to send data, get, post-->
	<!--if used GET instead, would see stuff in URL-->
<!--name is variable name we will recieve in the other file, like name=info-->
		
		
		
<!---only submit sends form automatically, not button-->
		
<!doctype html>

<html>
	<head>
		<title>Sample Post Page</title>
	</head>

	<body>
		<!-- A form to create a post -->
		<form method="post" action="post_recieve.php">
			<input type="text" name="First Name" placeholder="First Name"/>	
			<input type="text" name="Last Name" placeholder="Last Name"/>	

			<select name ="selection">
				<option>Today</option>
				<option>Tomorrow</option>
			</select>
			<input type="submit" value="Click Here"/>

		</form>
	</body>
</html>