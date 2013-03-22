<?php
//global variable....everyone has access too
//if  Iput this in URL http://localhost/get_sample.php?info=myinfo
//then this goes in the page Array ( [info] => myinfo )
	//http://localhost/get_sample.php?info=myinfo&test=12345
	//then i get Array ( [info] => myinfo [test] => 12345 )
	

	
//print_r($_GET);
//$page = $_GET['page']; /// this is useful b/c to pass variables to pages, pass info further through the server


$pages = array('home', 'about', 'resources');

?>
<!Doctype html>
<html>
	<head>
		<title>Sample Get</title>
		<?php if($_GET['page'] == 'home'){

			$stylesheet = 'homepage';

			}else{
			$stylesheet = 'regular';

			}
		?>
		
		<link rel="stylesheet" href="css/<?php echo $stylesheet;?>.css">
	</head>
	<body>
		<ul class="nav">
			<?php foreach($pages as $p){?>
					<li>
						<a href="?page=<?php echo $p;?>">
							<?php echo $p; ?>
						</a>
					</li>	
			<?php } ?>
		</ul>
		<?php 
			if( isset($_GET['page']) ){ ///isset means hasvariable has been created? run operations only when things exist, returns true or false, does page exist?
				$page = $_GET['page'];
				if($page == 'home'){

					//echo "Homepage";
					include('home.php');			///will include totally new file
							///can basically pull files from anything else


				}elseif($page=='about'){

					echo "about";


				}elseif($page=='resources'){
					echo "Resources";

				}	

			}
		?>
		
		
	</body>
</html>


