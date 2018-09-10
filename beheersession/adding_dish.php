<?php
//INCLUDES
	include 'Includes/header.php';	

//MAKING STUFF EASIER
	$receptnaam = $_POST["receptnaam"];
	$minutenaanduiding = $_POST["min_aanduiding"];
	$moeilijkheidsgraad = $_POST["moeilijkheidgraad"];
	$aantalpersonen = $_POST["aantalpersonen"];
	
//THE BEGINNING OF ALL DISH ADDING CHECKS
	
	if(isset($_POST["adding_dish_definitive"])) {
		if(isset($receptnaam)) {
			if(isset($minutenaanduiding)) {
				if(isset($moeilijkheidgraad)) {
					if(isset($aantalpersonen)) {
						
					}
				}
			}
		}
	}

//THE END OF ALL DISH ADDING CHECKS
?>