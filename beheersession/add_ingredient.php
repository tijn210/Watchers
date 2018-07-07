<?php
//INCLUDES
include 'Includes/header.php';

// SQL strings
$sq_ingredients = $pdo->prepare("INSERT INTO `ingredients`(`ingredient`, `hoeveelheid`, `eenheid`) VALUES (:ingredient, :hoeveelheid, :eenheid)");

// If ingredient is submitted
if(isset($_POST["add_ingredient"])) {
    $ingredient = $_POST["ingredient"];
    $hoeveelheid = $_POST["hoeveelheid"];
    $eenheid = $_POST["eenheid"];

    $sq_ingredients->bindParam(':ingredient', $ingredient);
    $sq_ingredients->bindParam(':hoeveelheid', $hoeveelheid);
    $sq_ingredients->bindParam(':eenheid', $eenheid);
    $sq_ingredients->execute();
}
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
</head>
<body>
<div class="menu divbg">
    <div class="ingriedent-add">
        <!-- ingredient form -->
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <!-- input ingredient -->
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="ingredient" type="text" class="form-control" name="ingredient" placeholder="Ingredient">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- input hoeveelheid -->
                        <div class="input-group margin">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="hoeveelheid" type="text" class="form-control" name="hoeveelheid" placeholder="Hoeveelheid">
                            <!-- input eenheid -->
                            <select name="eenheid" class="form-control" id="sel1">
                                <option value="stuks">Stuk(s)</option>
                                <option value="mg">mg</option>
                                <option value="g">g</option>
                                <option value="kg">kg</option>
                                <option value="ml">ml</option>
                                <option value="cl">cl</option>
                                <option value="l">l</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-primary" name="add_ingredient">Voeg toe!</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>