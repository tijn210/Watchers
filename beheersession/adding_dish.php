<?php

//INCLUDES
	include_once '../MainIncludes/db.php';
	session_start();

//gerecht_id bepaling
			$stmt = $pdo->prepare("SELECT MAX(Gerecht_id) FROM `gerecht`");
			$stmt->execute();
	
			$result = $stmt->fetch();
			$nieuw_gerecht_id = $result['MAX(Gerecht_id)'] + 1;

//MAKING STUFF EASIER
	$sessie_id = $_SESSION["user"]["ID"];
	$receptnaam = $_POST["receptnaam"];
	$bereidingstijd = $_POST["bereidingstijd"];
	$moeilijkheidsgraad = $_POST["moeilijkheidsgraad"];
	$aantalpersonen = $_POST["aantalpersonen"];
	
	$ingredient1_input = $_POST["ingredient1_input"];
	$ingredient1_hoeveelheid = $_POST["ingredient1_hoeveelheid"];
	$ingredient1_eenheid = $_POST["ingredient1_eenheid"];
	
	$instruction1_input = $_POST["instruction1_input"];
	$instruction_stap1 = 1;
	
//THE BEGINNING OF ALL DISH ADDING CHECKS
	
	if(isset($_POST["submit"])) {
//STARTING CHECKS GerechtSpecificaties
		if(isset($receptnaam) && isset($bereidingstijd) && isset($moeilijkheidsgraad) && isset($aantalpersonen)){
//STARTING CHECKS Ingredienten Toevoegen	
			if(!empty($ingredient1_input) && !empty($ingredient1_hoeveelheid) && isset($ingredient1_eenheid)){
//STARTING CHECKS Instructies Toevoegen				
				if(!empty($instruction1_input)){
//STARTING MYSQL Queries
				$pdo->beginTransaction();
					$sql = $pdo->query("INSERT INTO `gerecht` (`Gerecht_id`, `recept_naam`, `bereidingstijd`, `Moeilijkheidsgraad`, `Aantal_personen`, `ID`) VALUES ('".$nieuw_gerecht_id."', '".$receptnaam."', '".$bereidingstijd."', '".$moeilijkheidsgraad."', '".$aantalpersonen."', '".$sessie_id."');");		
					$sql = $pdo->query("INSERT INTO `ingredients` (`ingredient`, `hoeveelheid`, `eenheid`, `gerecht_id`) VALUES ('".$ingredient1_input."', '".$ingredient1_hoeveelheid."', '".$ingredient1_eenheid."', '".$nieuw_gerecht_id."');"); 
					$sql = $pdo->query("INSERT INTO `instructie`(`instructie_nr`, `instructie`, `gerecht_id`) VALUES ('".$instruction_stap1."','".$instruction1_input."','".$nieuw_gerecht_id."');");	
//STARTING MYSQL Queries EXTRA INGREDIENTEN					
				if(!empty($_POST["ingredient2_input"])){
					$ingredient2_input = $_POST["ingredient2_input"];
					$ingredient2_hoeveelheid = $_POST["ingredient2_hoeveelheid"];
					$ingredient2_eenheid = $_POST["ingredient2_eenheid"];
					
					$sql = $pdo->query("INSERT INTO `ingredients` (`ingredient`, `hoeveelheid`, `eenheid`, `gerecht_id`) VALUES ('".$ingredient2_input."', '".$ingredient2_hoeveelheid."', '".$ingredient2_eenheid."', '".$nieuw_gerecht_id."');");
				}
				if(!empty($_POST["ingredient3_input"])){
					$ingredient3_input = $_POST["ingredient3_input"];
					$ingredient3_hoeveelheid = $_POST["ingredient3_hoeveelheid"];
					$ingredient3_eenheid = $_POST["ingredient3_eenheid"];
					
					$sql = $pdo->query("INSERT INTO `ingredients` (`ingredient`, `hoeveelheid`, `eenheid`, `gerecht_id`) VALUES ('".$ingredient3_input."', '".$ingredient3_hoeveelheid."', '".$ingredient3_eenheid."', '".$nieuw_gerecht_id."');");
				}
				if(!empty($_POST["ingredient4_input"])){
					$ingredient4_input = $_POST["ingredient4_input"];
					$ingredient4_hoeveelheid = $_POST["ingredient4_hoeveelheid"];
					$ingredient4_eenheid = $_POST["ingredient4_eenheid"];
					
					$sql = $pdo->query("INSERT INTO `ingredients` (`ingredient`, `hoeveelheid`, `eenheid`, `gerecht_id`) VALUES ('".$ingredient4_input."', '".$ingredient4_hoeveelheid."', '".$ingredient4_eenheid."', '".$nieuw_gerecht_id."');");
				}
				if(!empty($_POST["ingredient5_input"])){
					$ingredient5_input = $_POST["ingredient5_input"];
					$ingredient5_hoeveelheid = $_POST["ingredient5_hoeveelheid"];
					$ingredient5_eenheid = $_POST["ingredient5_eenheid"];
					
					$sql = $pdo->query("INSERT INTO `ingredients` (`ingredient`, `hoeveelheid`, `eenheid`, `gerecht_id`) VALUES ('".$ingredient5_input."', '".$ingredient5_hoeveelheid."', '".$ingredient5_eenheid."', '".$nieuw_gerecht_id."');");
				}
				if(!empty($_POST["ingredient6_input"])){
					$ingredient6_input = $_POST["ingredient6_input"];
					$ingredient6_hoeveelheid = $_POST["ingredient6_hoeveelheid"];
					$ingredient6_eenheid = $_POST["ingredient6_eenheid"];
					
					$sql = $pdo->query("INSERT INTO `ingredients` (`ingredient`, `hoeveelheid`, `eenheid`, `gerecht_id`) VALUES ('".$ingredient6_input."', '".$ingredient6_hoeveelheid."', '".$ingredient6_eenheid."', '".$nieuw_gerecht_id."');");
				}
				if(!empty($_POST["ingredient7_input"])){
					$ingredient7_input = $_POST["ingredient7_input"];
					$ingredient7_hoeveelheid = $_POST["ingredient7_hoeveelheid"];
					$ingredient7_eenheid = $_POST["ingredient7_eenheid"];
				
					$sql = $pdo->query("INSERT INTO `ingredients` (`ingredient`, `hoeveelheid`, `eenheid`, `gerecht_id`) VALUES ('".$ingredient7_input."', '".$ingredient7_hoeveelheid."', '".$ingredient7_eenheid."', '".$nieuw_gerecht_id."');");
				}
				if(!empty($_POST["ingredient8_input"])){
					$ingredient8_input = $_POST["ingredient8_input"];
					$ingredient8_hoeveelheid = $_POST["ingredient8_hoeveelheid"];
					$ingredient8_eenheid = $_POST["ingredient8_eenheid"];
					
					$sql = $pdo->query("INSERT INTO `ingredients` (`ingredient`, `hoeveelheid`, `eenheid`, `gerecht_id`) VALUES ('".$ingredient8_input."', '".$ingredient8_hoeveelheid."', '".$ingredient8_eenheid."', '".$nieuw_gerecht_id."');");
				}
				if(!empty($_POST["ingredient9_input"])){
					$ingredient9_input = $_POST["ingredient9_input"];
					$ingredient9_hoeveelheid = $_POST["ingredient9_hoeveelheid"];
					$ingredient9_eenheid = $_POST["ingredient9_eenheid"];
					
					$sql = $pdo->query("INSERT INTO `ingredients` (`ingredient`, `hoeveelheid`, `eenheid`, `gerecht_id`) VALUES ('".$ingredient9_input."', '".$ingredient9_hoeveelheid."', '".$ingredient9_eenheid."', '".$nieuw_gerecht_id."');");
				}
				if(!empty($_POST["ingredient10_input"])){
					$ingredient10_input = $_POST["ingredient10_input"];
					$ingredient10_hoeveelheid = $_POST["ingredient10_hoeveelheid"];
					$ingredient10_eenheid = $_POST["ingredient10_eenheid"];
					
					$sql = $pdo->query("INSERT INTO `ingredients` (`ingredient`, `hoeveelheid`, `eenheid`, `gerecht_id`) VALUES ('".$ingredient10_input."', '".$ingredient10_hoeveelheid."', '".$ingredient10_eenheid."', '".$nieuw_gerecht_id."');");
				}
				if(!empty($_POST["instruction2_input"])){
					$instruction2_input = $_POST["instruction2_input"];
					$instruction_stap2 = 2;
					
					$sql = $pdo->query("INSERT INTO `instructie`(`instructie_nr`, `instructie`, `gerecht_id`) VALUES ('".$instruction_stap2."','".$instruction2_input."','".$nieuw_gerecht_id."');");
				}
				if(!empty($_POST["instruction3_input"])){
					$instruction3_input = $_POST["instruction3_input"];
					$instruction_stap3 = 3;
					
					$sql = $pdo->query("INSERT INTO `instructie`(`instructie_nr`, `instructie`, `gerecht_id`) VALUES ('".$instruction_stap3."','".$instruction3_input."','".$nieuw_gerecht_id."');");
				}
				if(!empty($_POST["instruction4_input"])){
					$instruction4_input = $_POST["instruction4_input"];
					$instruction_stap4 = 4;
					
					$sql = $pdo->query("INSERT INTO `instructie`(`instructie_nr`, `instructie`, `gerecht_id`) VALUES ('".$instruction_stap4."','".$instruction4_input."','".$nieuw_gerecht_id."');");
				}
				if(!empty($_POST["instruction5_input"])){
					$instruction5_input = $_POST["instruction5_input"];
					$instruction_stap5 = 5;
					
					$sql = $pdo->query("INSERT INTO `instructie`(`instructie_nr`, `instructie`, `gerecht_id`) VALUES ('".$instruction_stap5."','".$instruction5_input."','".$nieuw_gerecht_id."');");
				}
				if(!empty($_POST["instruction6_input"])){
					$instruction6_input = $_POST["instruction6_input"];
					$instruction_stap6 = 6;
					
					$sql = $pdo->query("INSERT INTO `instructie`(`instructie_nr`, `instructie`, `gerecht_id`) VALUES ('".$instruction_stap6."','".$instruction6_input."','".$nieuw_gerecht_id."');");
				}
				if(!empty($_POST["instruction7_input"])){
					$instruction7_input = $_POST["instruction7_input"];
					$instruction_stap7 = 7;
					
					$sql = $pdo->query("INSERT INTO `instructie`(`instructie_nr`, `instructie`, `gerecht_id`) VALUES ('".$instruction_stap7."','".$instruction7_input."','".$nieuw_gerecht_id."');");	
				}
				$pdo->commit();
//ENDING MYSQL Queries
					header("Location: add_dish.php?msg=finally");
				} 	
				else {
					header("Location: add_dish.php?msg=instruction");
				}
			} else {
				header("Location: add_dish.php?msg=ingredient");
			}
		} else {
			header('Location: add_dish.php?msg=gerecht');
		}
	} else {
		header('Location: add_dish.php');
	}
		
	
//THE END OF ALL DISH ADDING CHECKS
 
//HEADING EXPLANATION
	// header('Location: add_dish.php?msg=1') ===== SAVING DISH IS SUCCESSFULL
	// header('Location: add_dish.php?msg=2') ===== SOMETHING WENT WRONG IN THE GerechtSpecificaties
	// header('Location: add_dish.php?msg=3') ===== SOMETHING WENT WRONG IN THE Ingredienten Toevoegen
	// header('Location: add_dish.php?msg=4') ===== SOMETHING WENT WRONG IN THE Instructies Toevoegen
	
	$pdo = NULL;
?>