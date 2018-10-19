<?php
//INCLUDES
include 'Includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weight Watchers</title>
    <link href="Css/side_menu.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/js/bootstrap.min.js" rel="stylesheet">
    <link href="../bootstrap/js/bootstrap.bundle.min.js" rel="stylesheet">


<!-- Make new ingredients possible to add -->	
	<script>
$(document).ready(function(){	
//Hidden menu windows
	$("#dishingredients").hide();
    $("#dishinstructions").hide();
	$("#dishpicture").hide();
	
//Hidden ingredient windows
	$("#ingredient2").hide();
	$("#ingredient3").hide();
	$("#ingredient4").hide();
	$("#ingredient5").hide();
	$("#ingredient6").hide();
	$("#ingredient7").hide();
	$("#ingredient8").hide();
	$("#ingredient9").hide();
	$("#ingredient10").hide();
	
//Hidden instruction windows
	$("#instruction2").hide();
	$("#instruction3").hide();
	$("#instruction4").hide();
	$("#instruction5").hide();
	$("#instruction6").hide();
	$("#instruction7").hide();	

//Clickable menu top of table
	$("#dish_specifications").click(function(){
		$("#dishspecs").show();
		$("#dishingredients").hide();
        $("#dishinstructions").hide();
		$("#dishpicture").hide();

//Hide ingredient inputs at dish specification when they are openend earlier
			if ($('#ingredient2').is(':visible')) {
                $('#ingredient2').hide();
				$('#ingredient3').hide();
				$('#ingredient4').hide();
				$('#ingredient5').hide();
				$("#ingredient6").hide();
				$("#ingredient7").hide();
				$("#ingredient8").hide();
				$("#ingredient9").hide();
				$("#ingredient10").hide();
            }
//Hide instruction inputs at dish specification when they are openend earlier
			if ($('#instruction2').is(':visible')) {
                $('#instruction2').hide();
				$('#instruction3').hide();
				$('#instruction4').hide();
				$('#instruction5').hide();
				$("#instruction6").hide();
				$("#instruction7").hide();
            }			
			
    });

// Opening add ingredients tab	
    $("#add_ingredients").click(function(){
        $("#dishspecs").hide();
		$("#dishingredients").show();
        $("#dishinstructions").hide();
		$("#dishpicture").hide();
		
//Hide instruction inputs at dish specification when they are openend earlier
			if ($('#instruction2').is(':visible')) {
                $('#instruction2').hide();
				$('#instruction3').hide();
				$('#instruction4').hide();
				$('#instruction5').hide();
				$("#instruction6").hide();
				$("#instruction7").hide();
            }			
		
//Add the plus button if there is no next value		
			if ($('#ingredient2_input').val() == "") {
				$('#ingredient1_button').show();
			}
			if ($('#ingredient2_input').val() != "" && $('#ingredient3_input').val() == "") {
				$('#ingredient2_button').show();
			}
			if ($('#ingredient3_input').val() != "" && $('#ingredient4_input').val() == "") {
				$('#ingredient3_button').show();
			}
			if ($('#ingredient4_input').val() != "" && $('#ingredient5_input').val() == "") {
				$('#ingredient4_button').show();
			}
			if ($('#ingredient5_input').val() != "" && $('#ingredient6_input').val() == "") {
				$('#ingredient5_button').show();
			}
			if ($('#ingredient6_input').val() != "" && $('#ingredient7_input').val() == "") {
				$('#ingredient6_button').show();
			}
			if ($('#ingredient7_input').val() != "" && $('#ingredient8_input').val() == "") {
				$('#ingredient7_button').show();
			}
			if ($('#ingredient8_input').val() != "" && $('#ingredient9_input').val() == "") {
				$('#ingredient8_button').show();
			}
			if ($('#ingredient9_input').val() != "" && $('#ingredient10_input').val() == "") {
				$('#ingredient9_button').show();
			}
			
//open ingredients tabs when not empty
			if ($('#ingredient2_input').val() == "") {
				$('#ingredient2').hide();
			} else {
				$('#ingredient2').show();
			}
			if ($('#ingredient3_input').val() == "") {
				$('#ingredient3').hide();
			} else {
				$('#ingredient3').show();
			}
			if ($('#ingredient4_input').val() == "") {
				$('#ingredient4').hide();
			} else {
				$('#ingredient4').show();
			}
			if ($('#ingredient5_input').val() == "") {
				$('#ingredient5').hide();
			} else {
				$('#ingredient5').show();
			}
			if ($('#ingredient6_input').val() == "") {
				$('#ingredient6').hide();
			} else {
				$('#ingredient6').show();
			}
			if ($('#ingredient7_input').val() == "") {
				$('#ingredient7').hide();
			} else {
				$('#ingredient7').show();
			}
			if ($('#ingredient8_input').val() == "") {
				$('#ingredient8').hide();
			} else {
				$('#ingredient8').show();
			}
			if ($('#ingredient9_input').val() == "") {
				$('#ingredient9').hide();
			} else {
				$('#ingredient9').show();
			}
			if ($('#ingredient10_input').val() == "") {
				$('#ingredient10').hide();
			} else {
				$('#ingredient10').show();
			}
    });
	
// Opening adding instructions tab	
    $("#add_instructions").click(function(){
        $("#dishspecs").hide();
		$("#dishingredients").hide();
        $("#dishinstructions").show();
		$("#dishpicture").hide();
		
//Hide ingredient inputs at dish specification when they are openend earlier
			if ($('#ingredient2').is(':visible')) {
                $('#ingredient2').hide();
				$('#ingredient3').hide();
				$('#ingredient4').hide();
				$('#ingredient5').hide();
				$("#ingredient6").hide();
				$("#ingredient7").hide();
				$("#ingredient8").hide();
				$("#ingredient9").hide();
				$("#ingredient10").hide();
            }

//Add the plus button if there is no next value		
			if ($('#instruction2_input').val() == "") {
				$('#instruction1_button').show();
			}
			if ($('#instruction2_input').val() != "" && $('#instruction3_input').val() == "") {
				$('#instruction2_button').show();
			}
			if ($('#instruction3_input').val() != "" && $('#instruction4_input').val() == "") {
				$('#instruction3_button').show();
			}
			if ($('#instruction4_input').val() != "" && $('#instruction5_input').val() == "") {
				$('#instruction4_button').show();
			}
			if ($('#instruction5_input').val() != "" && $('#instruction6_input').val() == "") {
				$('#instruction5_button').show();
			}
			if ($('#instruction6_input').val() != "" && $('#instruction7_input').val() == "") {
				$('#instruction6_button').show();
			}
//open instructions tabs when not empty
			if ($('#instruction2_input').val() == "") {
				$('#instruction2').hide();
			} else {
				$('#instruction2').show();
			}
			if ($('#instruction3_input').val() == "") {
				$('#instruction3').hide();
			} else {
				$('#instruction3').show();
			}
			if ($('#instruction4_input').val() == "") {
				$('#instruction4').hide();
			} else {
				$('#instruction4').show();
			}
			if ($('#instruction5_input').val() == "") {
				$('#instruction5').hide();
			} else {
				$('#instruction5').show();
			}
			if ($('#instruction6_input').val() == "") {
				$('#instruction6').hide();
			} else {
				$('#instruction6').show();
			}
			if ($('#instruction7_input').val() == "") {
				$('#instruction7').hide();
			} else {
				$('#instruction7').show();
			}
    });

//Clickable new ingredients
	$("#ingredient1_button").click(function(){
        $("#ingredient1_button").hide();
        $("#ingredient2").show();
    });	
	$("#ingredient2_button").click(function(){
        $("#ingredient2_button").hide();
        $("#ingredient3").show();
    });
	$("#ingredient3_button").click(function(){
        $("#ingredient3_button").hide();
        $("#ingredient4").show();
    });
	$("#ingredient4_button").click(function(){
        $("#ingredient4_button").hide();
        $("#ingredient5").show();
    });
	$("#ingredient5_button").click(function(){
        $("#ingredient5_button").hide();
        $("#ingredient6").show();
    });
	$("#ingredient6_button").click(function(){
        $("#ingredient6_button").hide();
        $("#ingredient7").show();
    });
	$("#ingredient7_button").click(function(){
        $("#ingredient7_button").hide();
        $("#ingredient8").show();
    });
	$("#ingredient8_button").click(function(){
        $("#ingredient8_button").hide();
        $("#ingredient9").show();
    });
	$("#ingredient9_button").click(function(){
        $("#ingredient9_button").hide();
        $("#ingredient10").show();
    });
	
	
//Clickable new instructions	
	$("#instruction1_button").click(function(){
        $("#instruction1_button").hide();
        $("#instruction2").show();
    });	
	$("#instruction2_button").click(function(){
        $("#instruction2_button").hide();
        $("#instruction3").show();
    });
	$("#instruction3_button").click(function(){
        $("#instruction3_button").hide();
        $("#instruction4").show();
    });
	$("#instruction4_button").click(function(){
        $("#instruction4_button").hide();
        $("#instruction5").show();
    });
	$("#instruction5_button").click(function(){
        $("#instruction5_button").hide();
        $("#instruction6").show();
    });
	$("#instruction6_button").click(function(){
        $("#instruction6_button").hide();
        $("#instruction7").show();
    });

// OPENING picture adding menu	
	$("#add_picture").click(function(){
		$("#dishspecs").hide();
		$("#dishingredients").hide();
		$("#dishinstructions").hide();
		$("#dishpicture").show();
	});	
});

</script>
</head>
<body>
<div class="menu divbg">
	<!-- Gerecht notifications -->
	<?php
		if(isset($_GET["msg"])) {
			if($_GET["msg"] == "finally") {
                    echo "<div class=\"alert alert-success fade show center\" role=\"alert\">
								Gerecht is succesvol toegevoegd!
							<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
									<span aria-hidden=\"true\">&times;</span>
							</button>
                          </div>";
			}
			if($_GET["msg"] == "gerecht") {
					echo "<div class=\"alert alert-danger fade show center\" role=\"alert\">
									Er is iets mis gegaan in het tabblad Gerecht!
								<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
									<span aria-hidden=\"true\">&times;</span>
								</button>
                          </div>";
			}
			if($_GET["msg"] == "ingredient") {
					echo "<div class=\"alert alert-danger fade show center\" role=\"alert\">
									Er is iets mis gegaan in het tabblad ingredienten!
								<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
									<span aria-hidden=\"true\">&times;</span>
								</button>
                          </div>";
			}
			if($_GET["msg"] == "instruction") {
					echo "<div class=\"alert alert-danger fade show center\" role=\"alert\">
									Er is iets mis gegaan in het tabblad instructies!
								<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
									<span aria-hidden=\"true\">&times;</span>
								</button>
                          </div>";
			}
		}
	?>
    <div class="ingriedent-add">
<!-- Scroll between dish adding settings -->	
<div class="dish_menu_buttons">
	<button id="dish_specifications" class="btn btn-primary buttongrootte">Specificaties</button>	
	<button id="add_ingredients" class="btn btn-primary buttongrootte">Ingredienten</button>
	<button id="add_picture" class="btn btn-primary buttongrootte">Foto</button>
	<button id="add_instructions" class="btn btn-primary buttongrootte">Instructies</button>
</div>
<br />
<br />
<!-- adding recept form -->
        <form action="adding_dish.php" method="post">
            <table id="dishspecs">
                <tr>
                    <td>
<!-- input recept naam -->
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="receptnaam" type="text" class="form-control" name="receptnaam" placeholder="Naam recept" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
<!-- input bereidingstijd -->
                        <div class="input-group margin">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="bereidingstijd" type="text" class="form-control" name="bereidingstijd" placeholder="bereidingstijd">
<!-- aanduiding minuten -->
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="min_aanduiding" type="text" class="form-control" name="min_aanduiding" placeholder="minuten" disabled style="max-width: 100px;">
                        </div>
                    </td> 
                </tr>
                <tr> 
                    <td>
<!-- input bereidingstijd -->
                        <div class="input-group margin">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							  <select class="form-control" id="moeilijkheidsgraad" name="moeilijkheidsgraad">
								<option placebolder hidden> Moeilijkheidsgraad</option>
								<option value="makkelijk">Makkelijk</option>
								<option value="gemiddeld">Gemiddeld</option>
								<option value="moeilijk">Moeilijk</option>
							  </select>
							  <input id="aantalpersonen" type="number" class="form-control" name="aantalpersonen" placeholder="aantal personen" style="max-width: 160px;" min="1" max="15">
                        </div>
                    </td>
                </tr>               
            </table>
<!-- 10 tables for dish ingredients -->			
			<table id="dishingredients">
                <tr>
                    <td>
                        <!-- input ingredient -->
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="ingredient1_input" type="text" class="form-control" name="ingredient1_input" placeholder="Ingredient">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- input hoeveelheid -->
                        <div class="input-group margin">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="ingredient1_hoeveelheid" type="text" class="form-control" name="ingredient1_hoeveelheid" placeholder="Hoeveelheid">
                            <!-- input eenheid -->
                            <select name="ingredient1_eenheid" class="form-control" id="sel1">
                                <option value="stuks">Stuk(s)</option>
                                <option value="mg">miligram</option>
                                <option value="g">gram</option>
                                <option value="kg">kilogram</option>
                                <option value="ml">mililiter</option>
                                <option value="cl">centiliter</option>
                                <option value="l">liter</option>
								<option value="el">eetlepel</option>
                                <option value="tl">theelepel</option>
                            </select>
                        </div>
                    </td>
					<td><span id="ingredient1_button"><i class="fas fa-plus-circle fa-2x" style="color: #0000cc;" id="demo"></i></span></td>
                </tr>				
            </table>
			<table id="ingredient2">
                <tr>
                    <td>
                        <!-- input ingredient -->
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="ingredient2_input" type="text" class="form-control" name="ingredient2_input" placeholder="Ingredient">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- input hoeveelheid -->
                        <div class="input-group margin">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="hoeveelheid" type="text" class="form-control" name="ingredient2_hoeveelheid" placeholder="Hoeveelheid">
                            <!-- input eenheid -->
                            <select name="ingredient2_eenheid" class="form-control" id="sel1">
                                <option value="stuks">Stuk(s)</option>
                                <option value="mg">miligram</option>
                                <option value="g">gram</option>
                                <option value="kg">kilogram</option>
                                <option value="ml">mililiter</option>
                                <option value="cl">centiliter</option>
                                <option value="l">liter</option>
								<option value="el">eetlepel</option>
                                <option value="tl">theelepel</option>
                            </select>
                        </div>
                    </td>
					<td><span id="ingredient2_button"><i class="fas fa-plus-circle fa-2x" style="color: #0000cc;" id="demo"></i></span></td>
                </tr>				
            </table>
			<table id="ingredient3">
                <tr>
                    <td>
                        <!-- input ingredient -->
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="ingredient3_input" type="text" class="form-control" name="ingredient3_input" placeholder="Ingredient">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- input hoeveelheid -->
                        <div class="input-group margin">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="hoeveelheid" type="text" class="form-control" name="ingredient3_hoeveelheid" placeholder="Hoeveelheid">
                            <!-- input eenheid -->
                            <select name="ingredient3_eenheid" class="form-control" id="sel1">
                                <option value="stuks">Stuk(s)</option>
                                <option value="mg">miligram</option>
                                <option value="g">gram</option>
                                <option value="kg">kilogram</option>
                                <option value="ml">mililiter</option>
                                <option value="cl">centiliter</option>
                                <option value="l">liter</option>
								<option value="el">eetlepel</option>
                                <option value="tl">theelepel</option>
                            </select>
                        </div>
                    </td>
					<td><span id="ingredient3_button"><i class="fas fa-plus-circle fa-2x" style="color: #0000cc;" id="demo"></i></span></td>
                </tr>				
            </table>
			<table id="ingredient4">
                <tr>
                    <td>
                        <!-- input ingredient -->
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="ingredient4_input" type="text" class="form-control" name="ingredient4_input" placeholder="Ingredient">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- input hoeveelheid -->
                        <div class="input-group margin">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="hoeveelheid" type="text" class="form-control" name="ingredient4_hoeveelheid" placeholder="Hoeveelheid">
                            <!-- input eenheid -->
                            <select name="ingredient4_eenheid" class="form-control" id="sel1">
                                <option value="stuks">Stuk(s)</option>
                                <option value="mg">miligram</option>
                                <option value="g">gram</option>
                                <option value="kg">kilogram</option>
                                <option value="ml">mililiter</option>
                                <option value="cl">centiliter</option>
                                <option value="l">liter</option>
								<option value="el">eetlepel</option>
                                <option value="tl">theelepel</option>
                            </select>
                        </div>
                    </td>
					<td><span id="ingredient4_button"><i class="fas fa-plus-circle fa-2x" style="color: #0000cc;" id="demo"></i></span></td>
                </tr>				
            </table>
			<table id="ingredient5">
                <tr>
                    <td>
                        <!-- input ingredient -->
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="ingredient5_input" type="text" class="form-control" name="ingredient5_input" placeholder="Ingredient">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- input hoeveelheid -->
                        <div class="input-group margin">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="hoeveelheid" type="text" class="form-control" name="ingredient5_hoeveelheid" placeholder="Hoeveelheid">
                            <!-- input eenheid -->
                            <select name="ingredient5_eenheid" class="form-control" id="sel1">
                                <option value="stuks">Stuk(s)</option>
                                <option value="mg">miligram</option>
                                <option value="g">gram</option>
                                <option value="kg">kilogram</option>
                                <option value="ml">mililiter</option>
                                <option value="cl">centiliter</option>
                                <option value="l">liter</option>
								<option value="el">eetlepel</option>
                                <option value="tl">theelepel</option>
                            </select>
                        </div>
                    </td>
					<td><span id="ingredient5_button"><i class="fas fa-plus-circle fa-2x" style="color: #0000cc;" id="demo"></i></span></td>
                </tr>				
            </table>
			<table id="ingredient6">
                <tr>
                    <td>
                        <!-- input ingredient -->
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="ingredient6_input" type="text" class="form-control" name="ingredient6_input" placeholder="Ingredient">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- input hoeveelheid -->
                        <div class="input-group margin">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="hoeveelheid" type="text" class="form-control" name="hoeveelheid6_hoeveelheid" placeholder="Hoeveelheid">
                            <!-- input eenheid -->
                            <select name="eenheid6_eenheid" class="form-control" id="sel1">
                                <option value="stuks">Stuk(s)</option>
                                <option value="mg">miligram</option>
                                <option value="g">gram</option>
                                <option value="kg">kilogram</option>
                                <option value="ml">mililiter</option>
                                <option value="cl">centiliter</option>
                                <option value="l">liter</option>
								<option value="el">eetlepel</option>
                                <option value="tl">theelepel</option>
                            </select>
                        </div>
                    </td>
					<td><span id="ingredient6_button"><i class="fas fa-plus-circle fa-2x" style="color: #0000cc;" id="demo"></i></span></td>
                </tr>				
            </table>
			<table id="ingredient7">
                <tr>
                    <td>
                        <!-- input ingredient -->
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="ingredient7_input" type="text" class="form-control" name="ingredient7_input" placeholder="Ingredient">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- input hoeveelheid -->
                        <div class="input-group margin">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="hoeveelheid" type="text" class="form-control" name="hoeveelheid7_hoeveelheid" placeholder="Hoeveelheid">
                            <!-- input eenheid -->
                            <select name="eenheid7_eenheid" class="form-control" id="sel1">
                                <option value="stuks">Stuk(s)</option>
                                <option value="mg">miligram</option>
                                <option value="g">gram</option>
                                <option value="kg">kilogram</option>
                                <option value="ml">mililiter</option>
                                <option value="cl">centiliter</option>
                                <option value="l">liter</option>
								<option value="el">eetlepel</option>
                                <option value="tl">theelepel</option>
                            </select>
                        </div>
                    </td>
					<td><span id="ingredient7_button"><i class="fas fa-plus-circle fa-2x" style="color: #0000cc;" id="demo"></i></span></td>
                </tr>				
            </table>
			<table id="ingredient8">
                <tr>
                    <td>
                        <!-- input ingredient -->
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="ingredient8_input" type="text" class="form-control" name="ingredient8_input" placeholder="Ingredient">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- input hoeveelheid -->
                        <div class="input-group margin">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="hoeveelheid" type="text" class="form-control" name="hoeveelheid8_hoeveelheid" placeholder="Hoeveelheid">
                            <!-- input eenheid -->
                            <select name="eenheid8_eenheid" class="form-control" id="sel1">
                                <option value="stuks">Stuk(s)</option>
                                <option value="mg">miligram</option>
                                <option value="g">gram</option>
                                <option value="kg">kilogram</option>
                                <option value="ml">mililiter</option>
                                <option value="cl">centiliter</option>
                                <option value="l">liter</option>
								<option value="el">eetlepel</option>
                                <option value="tl">theelepel</option>
                            </select>
                        </div>
                    </td>
					<td><span id="ingredient8_button"><i class="fas fa-plus-circle fa-2x" style="color: #0000cc;" id="demo"></i></span></td>
                </tr>				
            </table>
			<table id="ingredient9">
                <tr>
                    <td>
                        <!-- input ingredient -->
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="ingredient9_input" type="text" class="form-control" name="ingredient9_input" placeholder="Ingredient">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- input hoeveelheid -->
                        <div class="input-group margin">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="hoeveelheid" type="text" class="form-control" name="hoeveelheid9_hoeveelheid" placeholder="Hoeveelheid">
                            <!-- input eenheid -->
                            <select name="eenheid9_eenheid" class="form-control" id="sel1">
                                <option value="stuks">Stuk(s)</option>
                                <option value="mg">miligram</option>
                                <option value="g">gram</option>
                                <option value="kg">kilogram</option>
                                <option value="ml">mililiter</option>
                                <option value="cl">centiliter</option>
                                <option value="l">liter</option>
								<option value="el">eetlepel</option>
                                <option value="tl">theelepel</option>
                            </select>
                        </div>
                    </td>
					<td><span id="ingredient9_button"><i class="fas fa-plus-circle fa-2x" style="color: #0000cc;" id="demo"></i></span></td>
                </tr>				
            </table>
			<table id="ingredient10">
                <tr>
                    <td>
                        <!-- input ingredient -->
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="ingredient10_input" type="text" class="form-control" name="ingredient10_input" placeholder="Ingredient">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- input hoeveelheid -->
                        <div class="input-group margin">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="hoeveelheid" type="text" class="form-control" name="hoeveelheid10_hoeveelheid" placeholder="Hoeveelheid">
                            <!-- input eenheid -->
                            <select name="eenheid10_eenheid" class="form-control" id="sel1">
                                <option value="stuks">Stuk(s)</option>
                                <option value="mg">miligram</option>
                                <option value="g">gram</option>
                                <option value="kg">kilogram</option>
                                <option value="ml">mililiter</option>
                                <option value="cl">centiliter</option>
                                <option value="l">liter</option>
								<option value="el">eetlepel</option>
                                <option value="tl">theelepel</option>
                            </select>
                        </div>
                    </td>
                </tr>				
            </table>
<!-- Uploading dish picture -->
			<table id="dishpicture">
				<tr>
					<td><input type="file" name="fileToUpload" id="fileToUpload"><td>
				</tr>
			</table>
<!-- 5 Tables for dish instructions -->			
			<table id="dishinstructions">
				<tr id="instruction1">
                    <td>Stap 1</td>
					<td><textarea class="form-control" rows="5" id="instruction1_input" name="instruction1_input"></textarea></td>
					<td><span id="instruction1_button"><i class="fas fa-plus-circle fa-2x" style="color: #0000cc;"></i></span></td>
                </tr>
				<tr id="instruction2">
                    <td>Stap 2</td>
					<td><textarea class="form-control" rows="5" id="instruction2_input" name="instruction2_input"></textarea></td>
					<td><span id="instruction2_button"><i class="fas fa-plus-circle fa-2x" style="color: #0000cc;"></i></span></td>
                </tr>
				<tr id="instruction3">
                    <td>Stap 3</td>
					<td><textarea class="form-control" rows="5" id="instruction3_input" name="instruction3_input"></textarea></td>
					<td><span id="instruction3_button"><i class="fas fa-plus-circle fa-2x" style="color: #0000cc;"></i></span></td>
                </tr>
				<tr id="instruction4">
                    <td>Stap 4</td>
					<td><textarea class="form-control" rows="5" id="instruction4_input" name="instruction4_input"></textarea></td>
					<td><span id="instruction4_button"><i class="fas fa-plus-circle fa-2x" style="color: #0000cc;"></i></span></td>
                </tr>
				<tr id="instruction5">
                    <td>Stap 5</td>
					<td><textarea class="form-control" rows="5" id="instruction5_input" name="instruction5_input"></textarea></td>
					<td><span id="instruction5_button"><i class="fas fa-plus-circle fa-2x" style="color: #0000cc;"></i></span></td>
                </tr>
				<tr id="instruction6">
                    <td>Stap 6</td>
					<td><textarea class="form-control" rows="5" id="instruction6_input" name="instruction6_input"></textarea></td>
					<td><span id="instruction6_button"><i class="fas fa-plus-circle fa-2x" style="color: #0000cc;"></i></span></td>
                </tr>
				<tr id="instruction7">
                    <td>Stap 7</td>
					<td><textarea class="form-control" rows="5" id="instruction7_input" name="instruction7_input"></textarea></td>
                </tr>
				<tr>
                    <td><button type="submit" class="btn btn-primary" name="submit">Voeg toe!</button></td>
                </tr>
			</table>
        </form>
    </div>
</div>
</div>
</body>
</html>