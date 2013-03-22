<?php
$m = new MongoClient();
echo "Success!";
$db = $m -> sample;//use a particular db this specific one
$collection = $db -> colors; //selet a collection (similar to a table)

//create a document for the database
$document = array( "name" => "Red", "value"=> "#ff0000"); ///each document is json object, made thru arrays in php

//insert document into database
$collection->insert($document); ///collections enable differnt containers of storage info

$document = array( "name" => "Blue", "value"=> "#0000ff");
$collection->insert($document);

$document = array( "name" => "Green", "value"=> "#00ff00");
$collection->insert($document);


$cursor = $collection->find(); //cursor iterates thru stuff, its a path thru the info
	
	foreach($cursor as $doc) {
	
		echo "<p>".$doc['_id']."<p>" //sample to find document id
?>	
		<p style="color:<?php echo $doc['value']; ?>;"><?php echo $doc['name'];?></p>

<?php
}

echo "Success";