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
</head>
<body>
<div class="menu divbg">
    <div class="ingriedent-add">
        <!-- adding recept form -->
        <form action="" method="post">
            <table>
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
                            <input id="min_aanduiding" type="text" class="form-control" name="min_aanduiding" placeholder="minuten" disabled>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- input bereidingstijd -->
<!--                        <div class="input-group margin">-->
<!--                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>-->
<!--                            <input id="bereidingstijd" type="text" class="form-control" name="bereidingstijd" placeholder="bereidingstijd">-->
<!--                        </div>-->
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-primary" name="add_ingredient">Voeg toe!</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>
</div>
</body>
</html>