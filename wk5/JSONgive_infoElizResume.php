<?php 
	header('Content-type: application/json');

	//if(isset($_GET['request'])){

		//if($_GET['request']=='animals'){
		//if($_GET['request']=='Resume'){

$Resume =array(	
	
	"Professional Experience" => array(
			"Parsons Student Advisor" => array("New York, NY", "08.12-Present"), 
			"Graphic Designer- Resource Magazine"  => array("New York, NY", "01.11-.05.11") ,
			"Intern- ArtBridge"  => array("New York, NY", "10.10 - 12.10"),
			"Artist-in-Residence Assistant, De Young Musuem"  => array("San Francisco, CA", "01.08 - 06.08"), 
			"Instructor OTEC International" => array("San Jose, Costa Rica", "10.07 - 11.07"), 
			"Grading Assistant- Ethnic Studies Department"  => array("Boulder, CO", "01.07 - 05.07")
	
		), //end of ProExp
	"Education"=> array(		
			"Parsons The New School for Design"=> "August 2011 to May 2013",
			"University of Colorado, Boulder"=> "August 2003 to May 2007",
			"University of Syracuse, Florence, Italy"=> "Spring 2006",
			"ELEBAIRES Buenos Aries, Spanish Immersion Program" => "September 2007"	
			
		), //end of Education	
	"Exhibition"=>array(
		"Prototype, Exhibition in The Cloud"=> " New York, NY 2012",
		"BioModd NYC4, Regeneration"=> " New York, NY 2012",
		"Handwritten by Machines"=> " New York, NY 2012",
		
		), //end of exhibitions
	"Skills"=>array(
		"Proficient in"=> array("HTML5", "Javascript", "Arduino", " MAX/MSP", "Physical Computing", "After Effects", "Creative Suite 5.0", "Microsoft Office", "Mac OSX Applications",  "Quickbooks"),
		"Knowledge of"=> array("PHP","Processing", "MAXMSP", "openFrameworks", "Dreamweaver")
				
		)//end of Resume		
);//end of Res
//}

echo json_encode($Resume);
?>